<?php

namespace Sio\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SioGsbBundle:Default:index.html.twig');
    }

    public function connexionAction(Request $request)
    {
    	dump($request);
    	if($request->request->has('valider'))
    	{
    		$email = $request->get('email');
    		$password = $request->get('password');   		
    	}
    	return $this->render('SioGsbBundle:Default:index.html.twig');	
    }
}
