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
                    <form method="post" action="{{url('/confirm')}}">
                        @csrf
                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Prénom *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="text" class="form-control " name="prenom" >
                                                @if ($errors->has('prenom'))
                                                    <strong style="color: red;">{{ $errors->first('prenom') }}</strong>
                                                 @endif 
                                        </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Nom *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="text" class="form-control " name="nom" >
                                                @if ($errors->has('nom'))
                                                <strong style="color: red;">{{ $errors->first('nom') }}</strong>
                                               @endif
                                        </div>
                                </div>
                        </div>


                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Email *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="email" class="form-control " name="email" >
                                                @if ($errors->has('email'))
                                                <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                               @endif
                                        </div>
                                </div>
                        </div>


                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Téléphone *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="tel" class="form-control " name="tel" >
                                                @if ($errors->has('tel'))
                                                <strong style="color: red;">{{ $errors->first('tel') }}</strong>
                                               @endif
                                        </div>
                                </div>
                        </div>


                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Pays *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <select class="form-control" name="pays">
                                                        <option>Tunisie</option>
                                                        <option>Algérie</option>
                                                        <option>Maroc</option>
                                                      </select>
                                                      @if ($errors->has('pays'))
                                                      <strong style="color: red;">{{ $errors->first('pays') }}</strong>
                                                     @endif
                                            </div>
                                </div>
                        </div>


                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Adresse *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="text" class="form-control " name="address" >
                                                @if ($errors->has('address'))
                                                <strong style="color: red;">{{ $errors->first('address') }}</strong>
                                               @endif
                                        </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Ville *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="text" class="form-control " name="ville" >
                                                @if ($errors->has('ville'))
                                                <strong style="color: red;">{{ $errors->first('ville') }}</strong>
                                               @endif
                                        </div>
                                </div>
                        </div>


                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;">Code postale *</label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group">
                                                <input type="text" class="form-control " name="code" >
                                                @if ($errors->has('code'))
                                                <strong style="color: red;">{{ $errors->first('code') }}</strong>
                                               @endif
                                        </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3  ">
                                        <label style="float:right;"><b>Message *</b></label>
                                </div>
                                <div class="col-md-9">
                                        <div class="form-group" >
                                                <textarea name="message" rows="3" class="form-control ">


                                                </textarea>
                                                @if ($errors->has('message'))
                                                <strong style="color: red;">{{ $errors->first('message') }}</strong>
                                               @endif
                                        </div>
                                </div>
                        </div>
                       <div class="row">
                           <div class="col-md-offset-3 col-md-9">
                                    <p>(*) Champs obligatoires</p>
                           </div>

                       </div>
                       <hr>
                       <div class="row">
                            <div class="col-md-offset-6 col-md-3">
                            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Enregistrer</button>
                            </div>
                            <div class="col-md-3">
                                    <button type="reset" class="btn btn-default btn-block"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                                    </div>
                       </div>
                
                    
                       
                    </form>
            </div>
            </div>
        </div>
    
    </body>
</html>
