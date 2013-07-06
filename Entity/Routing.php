<?php

namespace Skillberto\RoutingExtraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Routing
 *
 * @ORM\Table(name="routing")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Routing
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $router;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $path;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $defaults;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $requirements;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $options;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $host;
            
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $schemes;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $active;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $modified;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

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
     * Set active
     *
     * @param float $active
     * @return Routing
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return float 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Routing
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Routing
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
   public function updatedTimestamps()
   {
       $this->setModified(new \DateTime(date('Y-m-d H:i:s')));

       if($this->getCreated() == null)
       {
           $this->setCreated(new \DateTime(date('Y-m-d H:i:s')));
       }
    }
    
    public function __toString()
    {
        return $this->getName()?:"";
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