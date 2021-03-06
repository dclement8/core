<?php
namespace application\controllers;
use \library\MVC as l;

class Logout
{
    function __construct() {
        // delete tmp session id file
        if(!empty($_SESSION['id']) || !empty($_SESSION['tmp_id'])) {
            
            unlink(ROOT.DS.'tmp/'.sha1(session_id().'c4$AZ_').'.tmp');

            session_destroy();
        }
        header('Location: '.MVC_ROOT.'/Login');
    }
};
?>