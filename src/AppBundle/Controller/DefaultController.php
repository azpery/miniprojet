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


}
