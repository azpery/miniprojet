<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Image;

class DefaultController extends Controller
{

    public function indexAction($page = 1)
    {
      $em = $this->getDoctrine();

      $images = $em->getRepository("AppBundle:Image")->findByIdRepository($page);

      $currentFolder = $em->getRepository("AppBundle:Repository")->findOneById($page);

      $subFolders = $em->getRepository("AppBundle:Repository")->findByIdParent($page);

        return $this->render('AppBundle:default:index.html.twig', array(
            'images' => $images,
            'currentFolder' => $currentFolder,
            'subFolders' => $subFolders
        ));
    }


    public function importAction(Request $request)
    {

      $em = $this->getDoctrine();

      $id_membre= 69;

      $date = date('d-m-Y');

          $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

          $file = $request->files->get('icone');

          //1. strrchr renvoie l'extension avec le point (« . »).
          //2. substr(chaine,1) ignore le premier caractère de chaine.
          //3. strtolower met l'extension en minuscules.
          $extension_upload = strtolower(  substr(  strrchr($file->getClientOriginalName(), '.')  ,1)  );

          if ( in_array($extension_upload,$extensions_valides) ){

            echo "Extension correcte<br/>";

            

            $path = $file->getRealPath();

            $image_sizes = getimagesize($path);

            //déplacement

            //Créer un dossier 'fichiers/1/'
            if(!is_dir($this->get('kernel')->getRootDir()."/../web/images/original/".$date."/")){

              mkdir($this->get('kernel')->getRootDir()."/../web/images/original/".$date."/", 0777, true);

              echo "dossier créé<br/>";

            }
             
            //Créer un identifiant difficile à deviner
              $id = md5(uniqid(rand(), true));

              $nomImage = $date."/{$id_membre}-{$id}.{$extension_upload}";

            $nom = $this->get('kernel')->getRootDir()."/../web/images/original/".$date."/{$id_membre}-{$id}.{$extension_upload}";

            $resultat = move_uploaded_file($path,$nom);

            if($resultat){

              $rootDirectory = $em->getRepository("AppBundle:Repository")->findAll()[0];

              $image = new Image();

              $image->setPath($nomImage);

              $image->setTitle("test");

              $image->setOrientation(0);

              $image->setLegend("test");

              $image->setIdRepository($rootDirectory);

              $em->getManager()->persist($image);

              $em->getManager()->flush();

            }

          }

          else echo "Erreur extension<br/>";

      return $this->indexAction();
    }
}
