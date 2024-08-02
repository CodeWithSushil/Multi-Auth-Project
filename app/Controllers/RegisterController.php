<?php
namespace App\Controllers;
use App\Models\User;

class RegisterController
{
    public function index()
    {
        view("pages.register");
    }
    
    public function register()
    {
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        
        if($user->register())
        {
            dd($_POST);
            //redirect('login');
            //exit();
        }
        else
        {
            echo 'Unable to register user';
        }
     }
 }