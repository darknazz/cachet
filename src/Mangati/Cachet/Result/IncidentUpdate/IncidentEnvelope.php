<?php

namespace Mangati\Cachet\Result\IncidentUpdate;

use Mangati\Cachet\Result\Envelope;
use JMS\Serializer\Annotation as JMS;

class IncidentUpdateEnvelope implements Envelope
{

    /**
     * @var Mangati\Cachet\Entity\Incident
     * @JMS\Type("Mangati\Cachet\Entity\Incident")
     */
    private $data;

    /**
     * Get the value of Data
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of Data
     *
     * @param mixed data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
