<?php

namespace Skillberto\RoutingExtraBundle\Admin;

use Skillberto\AdminBundle\Admin\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class RoutingAdmin extends Admin
{    
    /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('router')
            ->add('path')
            ->add('defaults')
            ->add('requirements')
            ->add('options')
            ->add('host')
            ->add('schemes')
            ->add('active')
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Routing')
                ->add('name', 'text')
                ->add('router', null, array('required' => false))
                ->add('path', null, array('required' => false))
                ->add('defaults', null, array('required' => false))
                ->add('requirements', null, array('required' => false))
                ->add('options', null, array('required' => false))
                ->add('host', null, array('required' => false))
                ->add('schemes', null, array('required' => false))
                ->add('active', 'checkbox', array('required' => false))
           ->end()
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('router')
            ->add('path')
            ->add('active')
            ->add('_action', 'actions', array('actions' => $this->getTemplateActions()))
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('path')
        ;
    }
}
