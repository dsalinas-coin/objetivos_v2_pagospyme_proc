<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesServiciosAdicionalesClaves
 *
 * @ORM\Table(name="clientes_servicios_adicionales_claves")
 * @ORM\Entity
 */
class ClientesServiciosAdicionalesClaves
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idservicio_adicional", type="integer", nullable=false)
     */
    private $idservicioAdicional;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=100, nullable=false)
     */
    private $clave;

    /**
     * @var \ClientesServiciosAdicionalesClaves
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ClientesServiciosAdicionalesClaves")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclave", referencedColumnName="idclave")
     * })
     */
    private $idclave;



    /**
     * Set idservicioAdicional
     *
     * @param integer $idservicioAdicional
     * @return ClientesServiciosAdicionalesClaves
     */
    public function setIdservicioAdicional($idservicioAdicional)
    {
        $this->idservicioAdicional = $idservicioAdicional;

        return $this;
    }

    /**
     * Get idservicioAdicional
     *
     * @return integer 
     */
    public function getIdservicioAdicional()
    {
        return $this->idservicioAdicional;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return ClientesServiciosAdicionalesClaves
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set idclave
     *
     * @param \AppBundle\Entity\ClientesServiciosAdicionalesClaves $idclave
     * @return ClientesServiciosAdicionalesClaves
     */
    public function setIdclave(\AppBundle\Entity\ClientesServiciosAdicionalesClaves $idclave)
    {
        $this->idclave = $idclave;

        return $this;
    }

    /**
     * Get idclave
     *
     * @return \AppBundle\Entity\ClientesServiciosAdicionalesClaves 
     */
    public function getIdclave()
    {
        return $this->idclave;
    }
}
