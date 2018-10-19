<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/bonjour", name="hello_base")
     * @Route("/salut/{prenom}", name="hello_prenom")
     *
     * Montre la page qui dit bonjour
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = "0"){
        return $this->render(
            'hello.html.twig',
            [
                'prenom'=> $prenom,
                'age'   => $age
            ]
        );
    }


    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        $prenoms = ["lior"=>31, "jean"=>12, "philippe"=>17, "carlos"=>18, "pedro"=>22];

        return $this->render(
            'home.html.twig',
            [
                'title' => "Bonjour à tous hi !", 
                'age'=> 17,
                'tableau' => $prenoms
            ]
        );
    }
}

?>