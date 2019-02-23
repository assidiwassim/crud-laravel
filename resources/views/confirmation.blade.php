<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
         <title>Formulaire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <br><br><br>
        <div class="container">
            <div class="row text-center">
                <h2>Confirmation !</h2>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="help-block"></div>    
                @if($type=="insert")
                <div class="alert alert-success">
                                <strong>Succées!</strong> Le contact est <b>ajouter</b> avec succées.
                </div>  
                @endif    
                
                @if($type=="delete")
                <div class="alert alert-success">
                                <strong>Succées!</strong> Le contact est <b>supprimer</b> avec succées.
                </div>  
                @endif 
            </div>
            </div>
            <div class="row text-center">
                        <a href="/" class="btn btn-default">Retour a la page d'accueil</a>
             </div>
        </div>
    
    </body>
</html>
