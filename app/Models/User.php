<?
namespace App\Models;

class User{
    public $name;
    public $email;
    public $password;
    public $pi;
    
    public function register(){
        dd($_POST);
        echo "user class";
    }
}