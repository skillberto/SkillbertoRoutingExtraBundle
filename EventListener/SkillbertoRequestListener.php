<?php

namespace Skillberto\RoutingExtraBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\DependencyInjection\Container;
use Skillberto\RoutingExtraBundle\Entity\Page;
use Doctrine\ORM\EntityManager;

class SkillbertoRequestListener
{
    private $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function onKernelRequest(GetResponseEvent $event)
    {
        if (HttpKernel::MASTER_REQUEST != $event->getRequestType()) {
            // don't do anything if it's not the master request
            return;
        }
        
        $request = $event->getRequest();
        $repository = $this->em->getRepository('SkillbertoRoutingExtraBundle:Page');

        $page = $repository->findOneBy(array('path' => $request->getPathInfo() ));
        
        if ($page) {
            $request->attributes->set('_controller', $page->getController());
        }
        
        return;
    }
}