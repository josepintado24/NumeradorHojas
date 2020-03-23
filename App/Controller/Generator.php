<?php

namespace App\Controller;
require __DIR__.'/../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
class Generator
{
    public  function getPDF(int $number, string $title):void{
        $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');


        for($i=1;$i<=$number;$i++){
            $templan= '
                        <!doctype html>
                        <html lang="es">
                        <head>
                            <meta charset="utf-8">
                            <link rel="stylesheet" type="text/css" href="Public/css/myStyle.css">
                            
                        </head>
                        <body >
                        <div class="container">
                            <div class="left">
                                <h1>' .str_pad($i, 5, "0", STR_PAD_LEFT).'</h1>
                            </div>
                            
                           
                        </div>
                        </body>
                        </html>
            ';

            $html2pdf->writeHTML($templan);
        }

        $html2pdf->output($title.".pdf",D );
    }


}