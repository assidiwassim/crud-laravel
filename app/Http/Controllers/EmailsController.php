<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailsController extends Controller
{
        public function testEmailRaw(Request $request)     { 

            Mail::raw('raw email exemple', function($message)
            {
                $message->from('assidi.wassim.fsm.tp10@gmail.com', 'Laravel');
            
                $message->to('assidi.wassim.fsm@hotmail.com');

                $message->subject('Raw email exemple');

            });

                return "Email envoyé avec la méthode raw \n<br>";
        }

        public function testEmailClassique(Request $request)     { 

                Mail::send('hello', [], function ($message) { 
                            $message->to('assidi.wassim.fsm@hotmail.com');    
                            $message->subject('Envoi email classique avec Laravel');
                });    

                return "email envoyé avec send\n<br>";
        }

        public function testEmailMailable(Request $request)     { 

            Mail::send('hello', [], function ($message) { 
                        $message->to('assidi.wassim.fsm@hotmail.com');    
                        $message->subject('Envoi email avec mailable');
            });    

            return "email envoyé avec mailable\n<br>";
        }

        public function sendEmail(Request $request)     { 

            Mail::send('hello', [], function ($message) { 
                        $message->to('assidi.wassim.fsm@hotmail.com');    
                        $message->subject('Envoi email avec Laravel');
            });    

            return "email envoyé\n<br>";
        }
     
}
