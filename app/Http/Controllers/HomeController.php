<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function afficherAccueil(Request $request)
    {   
           
 
         return "Bonjour";
    }

    public function afficherFormulaire(Request $request)
    {   
         return view('formulaire');
    }

  

    public function AjouterContact(Request $request)
    {   
        
        $this->validate($request, [
            'prenom' => 'required|alpha|max:255',
            'nom' => 'required|alpha|max:255',
            'email' => 'required|string|email|max:191',
            'tel' => 'string|nullable|min:8|max:30',
            'pays' => 'required|alpha',
            'address' => 'string|nullable|max:255',
            'ville' => 'alpha_num|nullable|max:255',
            'code' => 'alpha_num|nullable|max:10',
            ]);

        DB::table('contacts')->insert([
            'prenom' => $request->input('prenom'),
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'telephone' => $request->input('tel'),
            'pays' => $request->input('pays'),
            'adresse' => $request->input('address'),
            'ville' => $request->input('ville'),
            'code_postale' => $request->input('code'),
            'message' => $request->input('message')
           ]);
           

        
           return view('confirmation')->with("type","insert");
        }

        public function afficherContacts()
        {   
            $contacts = DB::table('contacts')->select('id','nom', 'prenom', 'message')->paginate(5);

             return view('liste_contacts')->with("contacts", $contacts);
        }
        
        public function afficherContact($id)
        {   
            $contact = DB::table('contacts')->whereid($id)->first();

             return view('info_contact')->with("contact", $contact);
        }

        public function supprimerContact($id)
        {   
           
           DB::table('contacts')->where('id', $id)->delete();
            return view('confirmation')->with("type","delete");
        }
        
}
