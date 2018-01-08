<?php
/**
 * Created by PhpStorm.
 * User: Laptop
 * Date: 2018-01-08
 * Time: 17:34
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }

}