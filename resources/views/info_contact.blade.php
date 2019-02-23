<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
         <title>Info</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <br><br><br>
        <div class="container">
            <div class="row text-center">
                <h2>Info contact  !</h2>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="help-block"></div>   
             
                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Prénom </label>
                        </div>
                        <div class="col-md-9">
                        <p>{{$contact->prenom}}</p>
                        </div>
                </div>

                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Nom </label>
                        </div>
                        <div class="col-md-9">
                                        <p>{{$contact->nom}}</p>
                        </div>
                </div>


                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Email </label>
                        </div>
                        <div class="col-md-9">
                                        <p>{{$contact->email}}</p>
                        </div>
                </div>


                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Téléphone </label>
                        </div>
                        <div class="col-md-9">
                                        <p>{{$contact->telephone}}</p>
                        </div>
                </div>


                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Pays </label>
                        </div>
                        <div class="col-md-9">
                                        <p>{{$contact->pays}}</p>
                        </div>
                </div>


                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Adresse </label>
                        </div>
                        <div class="col-md-9">
                                        <p>{{$contact->adresse}}</p>
                        </div>
                </div>

                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Ville </label>
                        </div>
                        <div class="col-md-9">
                                        <p>{{$contact->ville}}</p>
                        </div>
                </div>


                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;">Code postale </label>
                        </div>
                        <div class="col-md-9">
                                        <p>{{$contact->code_postale}}</p>
                        </div>
                </div>

                <div class="row">
                        <div class="col-md-3  ">
                                <label style="float:right;"><b>Message </b></label>
                        </div>
                        <div class="col-md-9">
                                <div class="form-group" >
                                                <p>{{$contact->message}}</p>
                                </div>
                        </div>
                </div>        
            </div>
            </div>
            <div class="row text-center">
                        <a href="/" class="btn btn-default">Retour</a>
             </div>
        </div>
    
    </body>
</html>
