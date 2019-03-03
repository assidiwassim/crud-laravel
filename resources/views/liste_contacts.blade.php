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
                <h2>Liste contacts</h2>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="help-block"></div>    
                <div class="row"><a href="/form" class="btn btn-primary btn-sm pull-right">Ajouter un contact</a></div>
                
                <div class="row">
                    <br>
                       <table class="table" >
                        <tr>
                         <th>Nom</th>
                         <th>Prenom</th>
                         <th>Message</th>
                         <th></th>
                         <th></th>
                        </tr>
                         @foreach ($contacts as $contact)
                        <tr>
                         <td>{{ $contact->nom }}</td>
                         <td>{{ $contact->prenom }}</td>
                         <td>{{ $contact->message }}</td>
                        <td><a href="/info_contact/{{ $contact->id }}" class="btn btn-xs btn-default">Afficher</a></td>
                        <td><a href="/supprimer_contact/{{ $contact->id }}" class="btn btn-xs btn-danger">Supprimer</a></td>
                        </tr>
                         @endforeach
                        </table>
                        <div class="text-center">
                                {{ $contacts->links() }}
                        </div>
                </div>
                       
                        
            </div>
            </div>
        
        </div>
    
    </body>
</html>
