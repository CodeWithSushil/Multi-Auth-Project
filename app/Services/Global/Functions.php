<?php
function view($file_path, $data = [])
{
  $path = str_replace("\\", DIRECTORY_SEPARATOR, $file_path);
  $path = str_replace(".", DIRECTORY_SEPARATOR, $path);
  $file = APP_ROOT.DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR.$path.".php";

  if (file_exists($file)) {
    extract($data);
    return require $file;
  }

  throw new Exception("Page not found" . $file);
}

function redirct($url)
{
  header("Location: $url");
  exit();
}

function pageAdd($file_path)
{
  include_once APP_ROOT . "/public/" . $file_path . ".php";
}

function dd(...$args)
{
  foreach ($args as $arg) {
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
  }

  die();
}

function getIP()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  {
    // Check if from shared internet 
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    // Check if from a proxy
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    // Default, REMOTE_ADDR 
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  
  return $ip;
}
