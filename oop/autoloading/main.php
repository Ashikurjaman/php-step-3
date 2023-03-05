<?php
namespace cloudStorage;
// include "mail/mailer.php";
include "autoload.php";


use \cloudStorage\mail\Mailer;

class Main{
    function __construct()
    {
        $mailer = new Mailer();
        $mailer-> sendMail();
        echo "\n";
        (new filesystem\Scanner)->scan();
    }
}

new Main();