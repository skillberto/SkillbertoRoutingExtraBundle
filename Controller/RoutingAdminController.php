<?php

namespace Skillberto\RoutingExtraBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Skillberto\AdminBundle\Controller\AdminController;

class RoutingAdminController extends Controller
{
    public function activateAction($id)
    {        
        return AdminController::activateAction($this->container, $this->admin, $id, 'SkillbertoRoutingExtraBundle:Routing');
    }
}