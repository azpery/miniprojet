<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Image;
use AppBundle\Lib\ImageResizer;

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
    
    public function updateAction(Request $request)
    
    {
  
    $json = $request->get("images");
    
    $data = json_decode($json, true);
     $parsed_jsons = json_decode($json);
     foreach($parsed_jsons as $parsed_json){
	 $id = $parsed_json->id;
	 $title = $parsed_json->title;
	 $legend = $parsed_json->legend;
	 $orientation = $parsed_json->orientation;
	 $idRepository = $parsed_json->idRepository;
	 
	 echo "id = ${id}, tittle = ${title}, legend = ${legend}, ${orientation}, ${idRepository} %n";
	 
	 $em = $this->getDoctrine();
	 $rootDirectory = $em->getRepository("AppBundle:Repository")->findOneById($idRepository);
	 $image = $em->getRepository("AppBundle:Image")->findOneById($id);
	 $image->setTitle($title);
	 $image->setLegend($legend);
	 $image->setOrientation($orientation);
	 $image->setIdRepository($rootDirectory);
	 $em->getManager()->persist($image);
	 $em->getManager()->flush();
	 
	 
	 }
	 
	 return new Response("ok");
	 
	 echo "ok";
	 
    }


}
