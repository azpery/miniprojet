<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Image;
use AppBundle\Entity\Repository;
use AppBundle\Lib\ImageResizer;

class AdminController extends Controller
{

    //function qui affiche la gallerie d'image
    public function indexAction($page = 1)
    {
      $em = $this->getDoctrine();
      //Récupération des images présents dans le répertoire passé en paramètre
      $images = $em->getRepository("AppBundle:Image")->findByIdRepository($page);
      //Récupération du dossier courant
      $currentFolder = $em->getRepository("AppBundle:Repository")->findOneById($page);
      //Récupération des sous dossiers
      $subFolders = $em->getRepository("AppBundle:Repository")->findByIdParent($page);
      //renvoie vers la vue
        return $this->render('AppBundle:default:admin.html.twig', array(
            'images' => $images,
            'currentFolder' => $currentFolder,
            'subFolders' => $subFolders,
            'idFolder' => $page
        ));
    }


    public function importAction(Request $request)
    {

      $em = $this->getDoctrine();

      $id_membre= 69;

      $date = date('d-m-Y');

      $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

      $file = $request->files->get('icone');

      $title = $request->get('titre');
      //Récupération des données présentes dans le post
      $description = $request->get('description');

      $directory = $request->get('currentFolder');
      //Si l'utilisateur a bien tapé une description, un titre et upload une image
      if(!is_null($description) && !is_null($title) && !is_null($file) ){

        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($file->getClientOriginalName(), '.')  ,1)  );
        //Vérification de l'extension
        if ( in_array($extension_upload,$extensions_valides) ){

          echo "Extension correcte<br/>";

          $path = $file->getRealPath();
          //Chemin vers les trois dossiers de destination
          $originalFolder = $this->get('kernel')->getRootDir()."/../web/images/original/".$date."/";

          $largeFolder = $this->get('kernel')->getRootDir()."/../web/images/large/".$date."/";

          $smallFolder = $this->get('kernel')->getRootDir()."/../web/images/small/".$date."/";

          //Créer des dossiers dans le répertoire images s'il n'éxiste pas
          if(!is_dir($originalFolder) ){

            mkdir($this->get('kernel')->getRootDir()."/../web/images/original/".$date."/", 0777, true);

          }

          if (!is_dir($largeFolder) ) {

            mkdir($this->get('kernel')->getRootDir()."/../web/images/large/".$date."/", 0777, true);

          }

          if (!is_dir($smallFolder)) {

            mkdir($this->get('kernel')->getRootDir()."/../web/images/small/".$date."/", 0777, true);

          }

          //Créer un identifiant difficile à deviner
          $id = md5(uniqid(rand(), true));
          //Objet Resizer qui permet de redimensionner l'image
          $imageResizer = new ImageResizer($path);

          $nomImage = $date."/{$id_membre}-{$id}.{$extension_upload}";

          $nomOriginal = $originalFolder."{$id_membre}-{$id}.{$extension_upload}";
          //Déplacement de l'image vers le dossier original
          $resultat = move_uploaded_file($path,$nomOriginal);

          $nomLarge = $largeFolder."{$id_membre}-{$id}.{$extension_upload}";
          //Redimension de l'image en 1700 px de largeur max
          $imageResizer->resizeToWidth(1700);

          $resultat = $resultat AND $imageResizer->save($nomLarge);

          $nomSmall = $smallFolder."{$id_membre}-{$id}.{$extension_upload}";

          $imageResizer->resizeToWidth(400);
          // Sauvegarde de l'image vers le dossier de destination
          $resultat = $resultat AND $imageResizer->save($nomSmall);
          //Si le resize s'est passé sans encombre
          if($resultat){

            $rootDirectory = $em->getRepository("AppBundle:Repository")->findOneById($directory);
            //Création d'une nouvelle image
            $image = new Image();

            $image->setPath($nomImage);

            $image->setTitle($title);

            $image->setOrientation(0);

            $image->setLegend($description);

            $image->setIdRepository($rootDirectory);
            //Sauvegarde de l'image dans la base de données
            $em->getManager()->persist($image);

            $em->getManager()->flush();

          }

        }

        else echo "Erreur extension<br/>";

      }
      //Redirection vers la page d'accueil
      return $this->redirect( $this->generateUrl('admin', array('page' => $directory)) );
    }
    //Function d'ajout de dossier
    public function addFolderAction(Request $request){

      $folderName = $request->get('folderName');

      $currentFolder = $request->get('currentFolder');

      if(!is_null( $folderName)){
        //Création du nouveau dossier
        $newRepo = new Repository();

        $em = $this->getDoctrine();

        $newRepo->setName($folderName);
        //Récupération du dossier courant
        $parent = $em->getRepository("AppBundle:Repository")->findOneById($currentFolder);

        $newRepo->setIdParent($parent);
        //Sauvegarde du nouveau dossier dans la base de données
        $em->getManager()->persist($newRepo);

        $em->getManager()->flush();

      }
      //redirection vers la page accueil
      return $this->redirect( $this->generateUrl('admin', array('page' => $currentFolder)) );

    }
    //Suppression du dossier  passé en paramètre
    public function deleteFolderAction(Request $request){

      $idFolder = $request->get('idFolder');

      $em = $this->getDoctrine();

      $folder = $em->getRepository("AppBundle:Repository")->findOneById($idFolder);

      $parent = $folder->getIdParent()->getId();

      $em->getManager()->remove($folder);

      $em->getManager()->flush();

      return $this->redirect( $this->generateUrl('admin', array('page' => $parent)) );

    }
    //Suppression de l'image passée en paramètre
    public function deleteImageAction(Request $request){

      $idImage = $request->get('idImage');

      $em = $this->getDoctrine();

      $image = $em->getRepository("AppBundle:Image")->findOneById($idImage);

      $kernel = $this->get('kernel');
      //Suppression des images sur le répertoire
      $image->deleteImagesFromPath($kernel);

      $parent = $image->getIdRepository()->getId();

      $em->getManager()->remove($image);

      $em->getManager()->flush();

      return $this->redirect( $this->generateUrl('admin', array('page' => $parent)) );

    }
}
