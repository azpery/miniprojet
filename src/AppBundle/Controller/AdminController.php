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

    public function indexAction($page = 1)
    {
      $em = $this->getDoctrine();

      $images = $em->getRepository("AppBundle:Image")->findByIdRepository($page);

      $currentFolder = $em->getRepository("AppBundle:Repository")->findOneById($page);

      $subFolders = $em->getRepository("AppBundle:Repository")->findByIdParent($page);

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

      $description = $request->get('description');

      $directory = $request->get('currentFolder');

      if(!is_null($description) && !is_null($title) && !is_null($file) ){

        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($file->getClientOriginalName(), '.')  ,1)  );

        if ( in_array($extension_upload,$extensions_valides) ){

          echo "Extension correcte<br/>";

          $path = $file->getRealPath();

          $image_sizes = getimagesize($path);

          //déplacement

          $originalFolder = $this->get('kernel')->getRootDir()."/../web/images/original/".$date."/";

          $largeFolder = $this->get('kernel')->getRootDir()."/../web/images/large/".$date."/";

          $smallFolder = $this->get('kernel')->getRootDir()."/../web/images/small/".$date."/";

          //Créer un dossier 'fichiers/1/'
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

          $imageResizer = new ImageResizer($path);

          $nomImage = $date."/{$id_membre}-{$id}.{$extension_upload}";

          $nomOriginal = $originalFolder."{$id_membre}-{$id}.{$extension_upload}";

          $resultat = move_uploaded_file($path,$nomOriginal);

          $nomLarge = $largeFolder."{$id_membre}-{$id}.{$extension_upload}";

          $imageResizer->resizeToHeight(1700);

          $resultat = $resultat AND $imageResizer->save($nomLarge);

          $nomSmall = $smallFolder."{$id_membre}-{$id}.{$extension_upload}";

          $imageResizer->resizeToHeight(400);

          $resultat = $resultat AND $imageResizer->save($nomSmall);


          if($resultat){

            $rootDirectory = $em->getRepository("AppBundle:Repository")->findOneById($directory);

            $image = new Image();

            $image->setPath($nomImage);

            $image->setTitle($title);

            $image->setOrientation(0);

            $image->setLegend($description);

            $image->setIdRepository($rootDirectory);

            $em->getManager()->persist($image);

            $em->getManager()->flush();

          }

        }

        else echo "Erreur extension<br/>";

      }
      return $this->redirect( $this->generateUrl('admin', array('page' => $directory)) );
    }

    public function addFolderAction(Request $request){

      $folderName = $request->get('folderName');
      $currentFolder = $request->get('currentFolder');
      if(!is_null( $folderName)){

        $newRepo = new Repository();

        $em = $this->getDoctrine();

        $newRepo->setName($folderName);

        $parent = $em->getRepository("AppBundle:Repository")->findOneById($currentFolder);

        $newRepo->setIdParent($parent);

        $em->getManager()->persist($newRepo);

        $em->getManager()->flush();

      }


      return $this->redirect( $this->generateUrl('admin', array('page' => $currentFolder)) );

    }

    public function deleteFolderAction(Request $request){

      $idFolder = $request->get('idFolder');

      $em = $this->getDoctrine();

      $folder = $em->getRepository("AppBundle:Repository")->findOneById($idFolder);

      $parent = $folder->getIdParent()->getId();

      $em->getManager()->remove($folder);

      $em->getManager()->flush();



      return $this->redirect( $this->generateUrl('admin', array('page' => $parent)) );

    }

    public function deleteImageAction(Request $request){

      $idImage = $request->get('idImage');

      $em = $this->getDoctrine();

      $image = $em->getRepository("AppBundle:Image")->findOneById($idImage);

      $kernel = $this->get('kernel');

      $image->deleteImagesFromPath($kernel);

      $parent = $image->getIdRepository()->getId();

      $em->getManager()->remove($image);

      $em->getManager()->flush();

      return $this->redirect( $this->generateUrl('admin', array('page' => $parent)) );

    }
}
