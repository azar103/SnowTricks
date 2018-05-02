<?php
namespace OC\CommunityBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TrickController extends Controller
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
        return $this->render('OCCommunityBundle:Trick:index.html.twig', array('listTricks' => $listTricks));
    }
	public function addAction(Request $request)
	{
		if($request->isMethod('POST'))
    	{
    		$request->getSession()->getFlashBag()->add('notice',"Le tricker est enregistré ");
            return $this->render('OCCommunityBundle:Trick:confirmedadd.html.twig');

    	}	


      return $this->render('OCCommunityBundle:Trick:add.html.twig');
	}

	public function editAction($id, Request $request)
	{
		if($request->isMethod('POST'))
    	{
    		$request->getSession()->getFlashBag()->add('notice',"Le tricker est modifié ");
            return $this->render('OCCommunityBundle:Trick:confirmedadd.html.twig');

    	}	


      return $this->render('OCCommunityBundle:Trick:edit.html.twig', array('id' => $id));

	}

    public function deleteAction($id)
    {
        return $this->render('OCCommunityBundle:Trick:delete.html.twig', array('id' => $id) );
    }

    public function viewAction($id, $page)
    {
      if($page < 1)
      {
        throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
      }
      return $this->render('OCCommunityBundle:Trick:view.html.twig');
    }
}