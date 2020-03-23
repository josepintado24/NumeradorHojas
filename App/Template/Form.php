<?php
namespace App\Template;

class Form{

    public  static function getHeader(string $messsage):string{
        return '<!doctype html>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="description" content="Numerador PDF">
                    <meta name="author" content="Jose Luis Pintado Vasquez">
                    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
                    <link href="Public/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
                
                    <title>Generator</title>
                    <!-- Bootstrap core CSS -->
                    <link href="Public/bootstrap/css/bootstrap.css" rel="stylesheet">
                
                    <!-- Custom styles for this template -->
                    <link href="Public/css/cover.css" rel="stylesheet">
                </head>';
    }

    public  static function getBody(string $messsage):string{
        return '
        <body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">Generator</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="#">Home</a>
            </nav>
        </div>
    </header>
    <div class="container ">
        <form action="" method="post">
            <div class="form-group">
                <i class="fas fa-file-pdf"></i> <!-- uses solid style -->
                <label for="title">Title of PDF</label>
                <input type="text" class="form-control " id="title" name="title" placeholder="title">
                <i class="fas fa-sort-numeric-up"></i>
                <label for="number">number of sheets</label>
                <select multiple class="form-control" id="number" name="number">
                    <option>1000</option>
                    <option>2000</option>
                    <option>3000</option>
                    <option>4000</option>
                    <option>5000</option>
                </select>
                <br>
                <button type="submit" class="btn btn-success btn-sm btn-block" name="start">
                    <i class="fas fa-file-download"></i>
                    Confirm</button>
            </div>
        </form>
    </div>                                      
                ';
    }

    public  static function getFooder(string $messsage):string{
        return '
               <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Number generator</a>, by <a href="https://github.com/josepintado24">@josepintado24</a>.</p>
        </div>
    </footer>
</div>
';

    }

    public  static function getMessageError(string $messsage):string{
            return '
                <div class="alert alert-danger" role="alert">
                  Complete los datos!
                </div>
            ';

    }

    public  static function getMessageSuccess(string $messsage):string{
            return '
            <div class="alert alert-success" role="alert">
              This is a success alert—check it out!
            </div>
            ';

    }





}