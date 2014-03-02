<?php

namespace Skillberto\RoutingExtraBundle\Routing;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Mapping\Loader\YamlFileLoader;

class ExtraLoader implements LoaderInterface
{
    private $em;
    private $loaded = false;
    private $resolver;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    public function load($resource, $type = null)
    {
        if (true === $this->loaded) {
            throw new \RuntimeException('Do not add the "extra" loader twice');
        }

        $routes = new RouteCollection();

        $repository = $this->em->getRepository('SkillbertoRoutingExtraBundle:Routing');
        
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
         
        return $routes;
    }

    public function supports($resource, $type = null)
    {
        return 'extra' === $type;
    }
    
    public function getResolver() {
        
    }
    
    public function setResolver(LoaderResolverInterface $resolver) {
    }
    
    protected function decode($str) {
        
        
        return ;
    }
}