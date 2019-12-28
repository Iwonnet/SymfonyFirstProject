<?php

namespace App\Controller;

use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CurrentDateController 
{

    /**
     * @Route(path="/index", name="test_route")
     * @return Response
     * @throws
     */
    public function main(): Response
    {
        $currentDate = new DateTime();

        return new Response("<html><body>".$currentDate->format(DATE_ATOM)."</body></html>");
    }
}