<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(): Response
    {
        $number = random_int(0, 100);
        $url = "http://lesechos-bourse-fo-cdn.wlb.aw.atos.net/streaming/cours/getCours?code=FR0010241638&place=XPAR&codif=ISIN";
        $json = file_get_contents($url);
        #print $json;

        return new Response(
            #'<html><body>Lucky number: '.$number.'</body></html>'
            '<html><body>request BE : ' . $json . '</body></html>'
        );
    }
}
