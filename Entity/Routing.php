<?php

namespace Skillberto\RoutingExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Routing
 */
class Routing extends \Skillberto\AdminBundle\Entity\Base
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $router;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $defaults;

    /**
     * @var string
     */
    protected $requirements;

    /**
     * @var string
     */
    protected $options;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var string
     */
    protected $schemes;


    /**
     * Set name
     *
     * @param string $name
     * @return Routing
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set router
     *
     * @param string $router
     * @return Routing
     */
    public function setRouter($router)
    {
        $this->router = $router;

        return $this;
    }

    /**
     * Get router
     *
     * @return string 
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Routing
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set defaults
     *
     * @param string $defaults
     * @return Routing
     */
    public function setDefaults($defaults)
    {
        $this->defaults = $defaults;

        return $this;
    }

    /**
     * Get defaults
     *
     * @return string 
     */
    public function getDefaults()
    {
        return $this->defaults;
    }

    /**
     * Set requirements
     *
     * @param string $requirements
     * @return Routing
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * Get requirements
     *
     * @return string 
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Set options
     *
     * @param string $options
     * @return Routing
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set host
     *
     * @param string $host
     * @return Routing
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set schemes
     *
     * @param string $schemes
     * @return Routing
     */
    public function setSchemes($schemes)
    {
        $this->schemes = $schemes;

        return $this;
    }

    /**
     * Get schemes
     *
     * @return string 
     */
    public function getSchemes()
    {
        return $this->schemes;
    }
}
