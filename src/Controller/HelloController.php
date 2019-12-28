<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route(path="/hi/{name}")
     * @param string $name
     * @return Response
     */
    public function hi(string $name,Request $request): Response
    {
        $hello = "Cześć ".$name;
        $param1 = $request->get('param1','Default param value');
        return new Response("<html><body><h1>$hello</h1><a>$param1</a></body></html>");
    }
}