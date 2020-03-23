<?php
require __DIR__.'/vendor/autoload.php';


use App\Template\Form;
use App\Controller\Generator;


if (isset($_POST['start'])){

    if (isset($_POST['title']) && isset($_POST['number'])){
        $title=$_POST['title'];
        $number=$_POST['number'];
        $genarator=new Generator();
        $genarator->getPDF($number,$title);

    }else{
        echo(Form::getHeader('mose'));
        echo(Form::getBody('mose'));
        echo(Form::getMessageError('mose'));
        echo(Form::getFooder('mose'));
    }

}else{
    echo(Form::getHeader('mose'));
    echo(Form::getBody('mose'));
    echo(Form::getFooder('mose'));
}





