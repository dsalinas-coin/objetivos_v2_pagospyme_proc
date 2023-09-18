<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablatemp1
 *
 * @ORM\Table(name="tablatemp1")
 * @ORM\Entity
 */
class Tablatemp1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="col1", type="string", length=200, nullable=true)
     */
    private $col1;

    /**
     * @var string
     *
     * @ORM\Column(name="col2", type="string", length=50, nullable=true)
     */
    private $col2;

    /**
     * @var string
     *
     * @ORM\Column(name="col3", type="string", length=50, nullable=true)
     */
    private $col3;

    /**
     * @var string
     *
     * @ORM\Column(name="col4", type="string", length=100, nullable=true)
     */
    private $col4;

    /**
     * @var string
     *
     * @ORM\Column(name="col5", type="string", length=50, nullable=true)
     */
    private $col5;

    /**
     * @var string
     *
     * @ORM\Column(name="col6", type="string", length=2000, nullable=true)
     */
    private $col6;

    /**
     * @var string
     *
     * @ORM\Column(name="col7", type="string", length=50, nullable=true)
     */
    private $col7;



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
     * Set col1
     *
     * @param string $col1
     * @return Tablatemp1
     */
    public function setCol1($col1)
    {
        $this->col1 = $col1;

        return $this;
    }

    /**
     * Get col1
     *
     * @return string 
     */
    public function getCol1()
    {
        return $this->col1;
    }

    /**
     * Set col2
     *
     * @param string $col2
     * @return Tablatemp1
     */
    public function setCol2($col2)
    {
        $this->col2 = $col2;

        return $this;
    }

    /**
     * Get col2
     *
     * @return string 
     */
    public function getCol2()
    {
        return $this->col2;
    }

    /**
     * Set col3
     *
     * @param string $col3
     * @return Tablatemp1
     */
    public function setCol3($col3)
    {
        $this->col3 = $col3;

        return $this;
    }

    /**
     * Get col3
     *
     * @return string 
     */
    public function getCol3()
    {
        return $this->col3;
    }

    /**
     * Set col4
     *
     * @param string $col4
     * @return Tablatemp1
     */
    public function setCol4($col4)
    {
        $this->col4 = $col4;

        return $this;
    }

    /**
     * Get col4
     *
     * @return string 
     */
    public function getCol4()
    {
        return $this->col4;
    }

    /**
     * Set col5
     *
     * @param string $col5
     * @return Tablatemp1
     */
    public function setCol5($col5)
    {
        $this->col5 = $col5;

        return $this;
    }

    /**
     * Get col5
     *
     * @return string 
     */
    public function getCol5()
    {
        return $this->col5;
    }

    /**
     * Set col6
     *
     * @param string $col6
     * @return Tablatemp1
     */
    public function setCol6($col6)
    {
        $this->col6 = $col6;

        return $this;
    }

    /**
     * Get col6
     *
     * @return string 
     */
    public function getCol6()
    {
        return $this->col6;
    }

    /**
     * Set col7
     *
     * @param string $col7
     * @return Tablatemp1
     */
    public function setCol7($col7)
    {
        $this->col7 = $col7;

        return $this;
    }

    /**
     * Get col7
     *
     * @return string 
     */
    public function getCol7()
    {
        return $this->col7;
    }
}
