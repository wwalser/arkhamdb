<?php 

namespace AppBundle\Entity;

class Usercampaign implements \Serializable
{
	public function serialize() {
		return [
				'name' => $this->name
		];
	}
	
	public function unserialize($serialized) {
		throw new \Exception("unserialize() method unsupported");
	}
	
	public function toString() {
		return $this->name;
	}
	
	/**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user_scenarios;

    /**
     * Constructor
     */
    public function __construct()
    {

    }

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
     *
     * @return Type
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

}
