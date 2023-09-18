<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TablatempTama2
 *
 * @ORM\Table(name="tablatemp_tama2", indexes={@ORM\Index(name="col1", columns={"col1"}), @ORM\Index(name="col3", columns={"col3"})})
 * @ORM\Entity
 */
class TablatempTama2
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
     * @ORM\Column(name="col1", type="string", length=50, nullable=true)
     */
    private $col1;

    /**
     * @var string
     *
     * @ORM\Column(name="col2", type="text", length=-1, nullable=true)
     */
    private $col2;

    /**
     * @var string
     *
     * @ORM\Column(name="col3", type="string", length=100, nullable=true)
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
     * @ORM\Column(name="col5", type="string", length=100, nullable=true)
     */
    private $col5;

    /**
     * @var string
     *
     * @ORM\Column(name="col6", type="string", length=100, nullable=true)
     */
    private $col6;

    /**
     * @var string
     *
     * @ORM\Column(name="col7", type="string", length=100, nullable=true)
     */
    private $col7;

    /**
     * @var string
     *
     * @ORM\Column(name="col8", type="string", length=50, nullable=true)
     */
    private $col8;

    /**
     * @var string
     *
     * @ORM\Column(name="col9", type="string", length=50, nullable=true)
     */
    private $col9;

    /**
     * @var string
     *
     * @ORM\Column(name="col10", type="string", length=50, nullable=true)
     */
    private $col10;



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
     * @return TablatempTama2
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
     * @return TablatempTama2
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
     * @return TablatempTama2
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
     * @return TablatempTama2
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
     * @return TablatempTama2
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
     * @return TablatempTama2
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
     * @return TablatempTama2
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

    /**
     * Set col8
     *
     * @param string $col8
     * @return TablatempTama2
     */
    public function setCol8($col8)
    {
        $this->col8 = $col8;

        return $this;
    }

    /**
     * Get col8
     *
     * @return string 
     */
    public function getCol8()
    {
        return $this->col8;
    }

    /**
     * Set col9
     *
     * @param string $col9
     * @return TablatempTama2
     */
    public function setCol9($col9)
    {
        $this->col9 = $col9;

        return $this;
    }

    /**
     * Get col9
     *
     * @return string 
     */
    public function getCol9()
    {
        return $this->col9;
    }

    /**
     * Set col10
     *
     * @param string $col10
     * @return TablatempTama2
     */
    public function setCol10($col10)
    {
        $this->col10 = $col10;

        return $this;
    }

    /**
     * Get col10
     *
     * @return string 
     */
    public function getCol10()
    {
        return $this->col10;
    }
}
