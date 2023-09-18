<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturastemp
 *
 * @ORM\Table(name="facturastemp")
 * @ORM\Entity
 */
class Facturastemp
{
    /**
     * @var string
     *
     * @ORM\Column(name="nrofactura", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nrofactura;



    /**
     * Get nrofactura
     *
     * @return string 
     */
    public function getNrofactura()
    {
        return $this->nrofactura;
    }
}
