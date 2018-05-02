<?php

namespace OC\CoreBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller

{

	public function indexAction()
	{
		 $listTricks = array( 
              array(
                'id' => 1,
                'url' => 'http://snowtrickmania.alwaysdata.net/bundles/s7thdirectory/img/180.jpeg',
                'title'=>'Mute'   
              ),
              array(
                'id' => 2,
                'url' =>'http://snowtrickmania.alwaysdata.net/bundles/s7thdirectory/img/stalefish.jpeg',
                    'title' => 'Back Flip'
              ),
              array(
                'id' => 3,
                'url' => 'http://snowtrickmania.alwaysdata.net/bundles/s7thdirectory/img/backflip.jpeg',
                   'title' => 'Nose Slide'),
              array(
                'id' => 4,
                'url' => 'http://snowtrickmania.alwaysdata.net/bundles/s7thdirectory/img/180.jpeg',
                'title'=>'Mute'   
              ),
              array(
                'id' => 5,
                'url' =>'http://snowtrickmania.alwaysdata.net/bundles/s7thdirectory/img/stalefish.jpeg',
                    'title' => 'Back Flip'
              ),
              array(
                'id' => 6,
                'url' => 'http://snowtrickmania.alwaysdata.net/bundles/s7thdirectory/img/backflip.jpeg',
                   'title' => 'Nose Slide')
        );

		return $this->render('OCCoreBundle:Core:index.html.twig', array('listTricks' => $listTricks));
	}

}