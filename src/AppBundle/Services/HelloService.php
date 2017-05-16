<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Services;

class HelloService
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function hello($name)
    {

        $message = \Swift_Message::newInstance()
                                ->setTo('root@localhost.com')
                                ->setSubject('Hello Service')
                                ->setBody($name . ' says hi!');

        //$this->mailer->send($message);

        return 'Hello, '.$name;
    }
}