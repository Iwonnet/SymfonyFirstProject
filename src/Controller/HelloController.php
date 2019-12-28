<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route(path="/hi/{name}", name="hello")
     * @param string $name
     * @return Response
     */
    public function hello(string $name,Request $request): Response
    {
        $hello = "Cześć ".$name;
        $param1 = $request->get('param1','Default param value');
        return new Response("<html><body><h1>$hello</h1><a>$param1</a></body></html>");
    }

    /**
     * @Route(path="/redirect/{action}")
     * @param string $action
     * @return Response
     */
    public function moveToAction(string $action): RedirectResponse
    {
        if('hello'==$action){
            return $this->redirectToRoute('hello',['name'=>'Some name']);
        }else if ('currentDate'==$action){
            return $this->redirectToRoute('currentDate');
        }
        throw new Exception("Wrong action");
    }
}