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
                <h2>Mes données</h2>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="help-block"></div>
                    
                        <div class="row">
                              
                                <div class="col-md-9">
                                <p>{{$prenom}}</p>
                                </div>
                        </div>

                        <div class="row">
                             
                                <div class="col-md-9">
                                                <p>{{$nom}}</p>
                                </div>
                        </div>


                        <div class="row">
                              
                                <div class="col-md-9">
                                                <p>{{$email}}</p>
                                </div>
                        </div>


                        <div class="row">
                             
                                <div class="col-md-9">
                                                <p>{{$tel}}</p>
                                </div>
                        </div>


                        <div class="row">
                              
                                <div class="col-md-9">
                                                <p>{{$pays}}</p>
                                </div>
                        </div>


                        <div class="row">
                              
                                <div class="col-md-9">
                                                <p>{{$address}}</p>
                                </div>
                        </div>

                        <div class="row">
                            
                                <div class="col-md-9">
                                                <p>{{$ville}}</p>
                                </div>
                        </div>


                        <div class="row">
                              
                                <div class="col-md-9">
                                                <p>{{$code}}</p>
                                </div>
                        </div>

                        <div class="row">
                               
                                <div class="col-md-9">
                                        <div class="form-group" >
                                                        <p>{{$messages}}</p>
                                        </div>
                                </div>
                        </div>
                      
                
                    
                       
                   
            </div>
            </div>
        </div>
    
    </body>
</html>
