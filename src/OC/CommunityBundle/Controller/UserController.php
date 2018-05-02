<?php
namespace OC\CommunityBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function addAction(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		$request->getSession()->getFlashBag()->add('notice',"L'utilisateur est enregistré ");
            return $this->render('OCCommunityBundle:User:confirmedadd.html.twig');

    	}	


      return $this->render('OCCommunityBundle:User:add.html.twig');

    }

   
    public function viewAction($id, $page)
    {
      if($page < 1)
      {
        throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
      }
      $trick = array('url' => 'http://snowtrickmania.alwaysdata.net/bundles/s7thdirectory/img/180.jpeg',
                    'title' => 'Mute' ,
                    'content' => 'Saisie de la carre frontside de la planche entre les deux pieds avec la main avant.
Prenez votre main de tête et saisissez votre bord de pied n\'importe où entre les liaisons. Rincez les deux jambes et faites un «stiffie», ou redressez votre jambe avant uniquement (comme Dom ici) et vous faites un poke muet de nez. Deux astuces pour le prix d\'une, hein?');
      return $this->render('OCCommunityBundle:User:viewtrick.html.twig', 
                   array('trick' => $trick)
               );
    }

    public function editAction(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		$request->getSession()->getFlashBag()->add('notice',"L'utilisateur est enregistré ");
            return $this->render('OCCommunityBundle:User:confirmededit.html.twig');

    	}	


      return $this->render('OCCommunityBundle:User:edit.html.twig');

    }

    public function loginAction(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		
            return $this->redirectToRoute('oc_core_homepage');

    	}	
    	return $this->render('OCCommunityBundle:User:login.html.twig');
    }

}