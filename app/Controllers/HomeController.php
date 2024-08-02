<?php
namespace App\Controllers;

class HomeController
{
  public function index()
  {
    echo 'Home Controllers  index function';
    view('index');
  }
}
