<?php

namespace AfipBundle\Soap\Padron\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonaResponse implements ResultInterface
{

    /**
     * @var \AfipBundle\Soap\Padron\Type\PersonaReturn
     */
    private $personaReturn = null;

    /**
     * @return \AfipBundle\Soap\Padron\Type\PersonaReturn
     */
    public function getPersonaReturn()
    {
        return $this->personaReturn;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\PersonaReturn $personaReturn
     * @return GetPersonaResponse
     */
    public function withPersonaReturn($personaReturn)
    {
        $new = clone $this;
        $new->personaReturn = $personaReturn;

        return $new;
    }


}

