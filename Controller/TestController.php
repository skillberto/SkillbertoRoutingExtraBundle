<?php

namespace Skillberto\RoutingExtraBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Skillberto\MenuBundle\Admin\MenuAdmin;
use Doctrine\ORM\EntityManager;


class TestController extends Controller
{
    public function indexAction()
    {                
        return new Response("test");
    }
}