<?php
declare(strict_types=1);
define('APP_ROOT', __DIR__);

require_once APP_ROOT."/vendor/autoload.php";

if(isset($_GET['q'])){
  function query($page){
    require_once APP_ROOT."/public/pages/".$page.".php";
    return $page;
  }
  query($_GET['q']);
} else {
  require_once APP_ROOT."/public/index.php";
}
