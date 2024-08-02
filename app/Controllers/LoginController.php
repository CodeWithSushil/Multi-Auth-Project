<?php
namespace App\Controllers;
use App\Models\User;

class LoginController
{
  public function index()
  {
    view('pages.login');
  }
  
  public function login(){
    $user = new User;
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    
    if($user->login())
    {
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_name'] = $user->name;
      redirect('dashboard');
      exit();
    }
    else
    {
      echo 'Unable to login user';
    }
  }
}
