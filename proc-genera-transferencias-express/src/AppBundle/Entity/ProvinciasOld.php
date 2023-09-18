<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProvinciasOld
 *
 * @ORM\Table(name="provincias_old")
 * @ORM\Entity
 */
class ProvinciasOld
{
    /**
     * @var string
     *
     * @ORM\Column(name="idprovincia", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprovincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id2", type="integer", nullable=true)
     */
    private $id2;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=40, nullable=false)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="notas", type="string", length=1000, nullable=true)
     */
    private $notas;



    /**
     * Get idprovincia
     *
     * @return string 
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }

    /**
     * Set id2
     *
     * @param integer $id2
     * @return ProvinciasOld
     */
    public function setId2($id2)
    {
        $this->id2 = $id2;

        return $this;
    }

    /**
     * Get id2
     *
     * @return integer 
     */
    public function getId2()
    {
        return $this->id2;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return ProvinciasOld
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return ProvinciasOld
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }
}
