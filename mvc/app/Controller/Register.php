<?php
namespace App\Controller;
use Base\AbstractController;
class Register extends AbstractController
{
    public function index()
    {
        return $this->view->render('register.phtml');
    }

}