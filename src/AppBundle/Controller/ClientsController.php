<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{

    private $client_data = [
                            [  'id' => 0 , 
                                'title' => 'mr', 
                                'name' => 'Roy', 
                                'last_name' => 'Adams', 
                                'address' => '2872 Marquette Street',
                                'zip_code' => '10312',
                                'city' => 'New York City',
                                'state' => 'NY',
                                'email' => 'radams1v@example.com' 
                            ],
                            [  'id' => 1 , 
                                'title' => 'mrs', 
                                'name' => 'Bonnie', 
                                'last_name' => 'Clark', 
                                'address' => '4 Porter Avenue',
                                'zip_code' => '80028',
                                'city' => 'Louisville',
                                'state' => 'CO',
                                'email' => 'bclark6@example.com' 
                            ],
                            [  'id' => 2 , 
                                'title' => 'ms', 
                                'name' => 'Carol', 
                                'last_name' => 'Shaw', 
                                'address' => '650 Grover Alley',
                                'zip_code' => '30305',
                                'city' => 'Atlanta',
                                'state' => 'GA',
                                'email' => 'cshaw@example.com' 
                            ]
                        ];
    
    private $titles = ['mr', 'ms', 'mrs', 'dr', 'mx'];

    /**
    * @Route("/guests", name="index_clients")
    **/
    public function showIndex()
    {
        
        $logger = $this->get('logger');
        $logger->info('User has opened the guest page');
        $logger->error('Something went terribly wrong');

        $data = [];
        $data['clients'] = $this->client_data;
        return $this->render("clients/index.html.twig", $data);
        
    }

    /**
    * @Route("/guests/modify/{id_client}", name="modify_client")
    **/
    public function showDetails(Request $request, $id_client)
    {

        $data = [];
        $data['clients'] = $this->client_data;
        $data['mode'] = 'modify';
        $data['form'] = [];
        $data['titles'] = $this->titles;

        

        $form = $this   ->createFormBuilder()
                        ->add('name')
                        ->add('last_name')
                        ->add('title')
                        ->add('address')
                        ->add('zip_code')
                        ->add('city')
                        ->add('state')
                        ->add('email')
                        ->getForm()
                ;

        $form->handleRequest( $request );

        if( $form->isSubmitted() )
        {
            $form_data = $form->getData();
            $data['form'] = [];
            $data['form'] = $form_data;
        }else
        {
            $client_data = $this->client_data[$id_client];
            $data['form'] = $client_data;
        }

        return $this->render("clients/form.html.twig", $data);

    }

    /**
    * @Route("/guests/new", name="new_client")
    **/
    public function showNew(Request $request)
    {

        $data = [];
        $data['mode'] = 'new_client';
        $data['titles'] = $this->titles;
        $data['form'] = [];
        $data['form']['title'] = '';
        
        return $this->render("clients/form.html.twig", $data);
        
    }

    /**
    * @Route("/github")
    **/
    public function github()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/users/bpineda');
        return new Response('<pre>' . $res->getBody());
    }

    /**
    * @Route("/about")
    **/
    public function about()
    {
        return new Response('<h4>About</h4>');
    }

}