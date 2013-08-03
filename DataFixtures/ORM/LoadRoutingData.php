<?php
namespace Skillberto\RoutingExtraBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Skillberto\AdminBundle\Admin\Admin;
use Skillberto\RoutingExtraBundle\Entity\Routing;

class LoadRoutingData implements FixtureInterface, ContainerAwareInterface
{    
    protected $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    /**
     * Add Home -> '/' routing into admin if not exist
     * 
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $router = $this->container->get('router');
        $collection = $router->getRouteCollection()->all();
        $defaults = NULL;
        
        /**
         * Iterating route objects
         */
        foreach ($collection as $name => $route) {
            
            if ($route->getPath() == '/') {
                return new Response("ok");
            }
            
            //catch first valid controller for routing
            if (!$defaults && Admin::validateRoute($name)) {
                $defaults = json_encode($route->getDefaults());
            }
        }
        
        $routing = new Routing();
        $routing->setName('Home');
        $routing->setPath("/");
        $routing->setRouter('home');
        $routing->setActive(TRUE);

        $routing->setDefaults($defaults);

        $manager->persist($routing);
        $manager->flush();
    }
}
