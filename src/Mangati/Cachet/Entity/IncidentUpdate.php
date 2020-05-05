<?php

namespace Mangati\Cachet\Entity;

use DateTime;
use JMS\Serializer\Annotation as JMS;

class IncidentUpdate extends Entity
{

    const STATUS_SCHEDULED     = 0;
    const STATUS_INVESTIGATING = 1;
    const STATUS_IDENTIFIED    = 2;
    const STATUS_WATCHING      = 3;
    const STATUS_FIXED         = 4;

    /**
     * @var string
     * @JMS\Type("integer")
     * @JMS\SerializedName("incident_id")
     */
    private $incident;

    /**
     * @var int
     * @JMS\Type("string")
     */
    private $message;

    /**
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("component_id")
     */
    private $component;

    /**
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("component_status")
     */
    private $componentStatus;

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $status;

    /**
     * @var int
     * @JMS\Type("string")
     * @JMS\SerializedName("human_status")
     */
    private $humanStatus;

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getIncident()
    {
        return $this->incident;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     * @return self
     */
    public function setIncident($incident)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Message
     *
     * @return int
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of Message
     *
     * @param int message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of Component
     *
     * @return int
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * @return int
     */
    public function getComponentStatus()
    {
        return $this->componentStatus;
    }

    /**
     * Set the value of Component
     *
     * @param int component
     *
     * @return self
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * @return int
     */
    public function setComponentStatus($status)
    {
        $this->componentStatus = $status;
    }

    /**
     * Get the value of Status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of Status
     *
     * @param int status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of Human Status
     *
     * @return int
     */
    public function getHumanStatus()
    {
        return $this->humanStatus;
    }

    /**
     * Set the value of Human Status
     *
     * @param int humanStatus
     *
     * @return self
     */
    public function setHumanStatus($humanStatus)
    {
        $this->humanStatus = $humanStatus;

        return $this;
    }
}
