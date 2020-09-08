<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use Auth;

class MailController extends Controller
{
    //
    protected function getLoggedInUsersEmail(){
        $user_email = User::where('id',Auth::user()->id)->value('email');
        return $user_email;
    }

    protected function getEmailTitle(){
        $email_title = "ACCOUNT CREATION";
        return $email_title;
    }
    protected function getEmailSubject(){
        $email_subject = "ACCOUNT CREATION WITH Uganda Agriculture Support";
        return $email_subject;
    }
    
    protected function sendersEmail(){
        return "connectfarmersbuyers@gmail.com";
    }

    protected function getSendersRole(){
        return "Administrator";
    }

    public function sendEmailOnAccountCreation() {
        
        $data = array('name'=>"Agriculture Uganda Backbone");
        Mail::send('admin.email-response', $data, function($message) {
            $message->to($this->getLoggedInUsersEmail(), $this->getEmailTitle())->subject
                ($this->getEmailSubject());
            $message->from($this->sendersEmail(),$this->getSendersRole());
        });
        }
}
