<?php

namespace Skillberto\RoutingExtraBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;


class TestController extends Controller
{
    public function indexAction()
    {
        $routes = new RouteCollection();

        $repository = $this->getDoctrine()->getRepository('SkillbertoRoutingExtraBundle:Routing');
        
        /** @var $content \Skillberto\RoutingExtraBundle\Entity\Routing */
        foreach ($repository->findAll() as $content) {
            $path = $content->getPath();
            
            $defaults = json_decode( $content->getDefaults(), TRUE)?:array();
            $requirements = json_decode( $content->getRequirements(), TRUE) ?: array();
            $options = json_decode( $content->getOptions(), TRUE) ?: array();
            $host = $content->getHost();
            $schemes = json_decode( $content->getSchemes(), TRUE) ?: array();
            
            if ($content->getActive()) {
                $routes->add($content->getRouter(), new Route($path, $defaults, $requirements, $options, $host, $schemes));
            }
         }

         $context = new RequestContext($_SERVER['REQUEST_URI']);

         $matcher = new UrlMatcher($routes, $context);
        
         $parameters = $matcher->match( "/blog" );
       
         echo "<pre>";
         var_dump($parameters);
         echo "</pre>";
         
         return new Response();
    }
}