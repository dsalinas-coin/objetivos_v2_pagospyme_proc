<?php
/**
 * Created by PhpStorm.
 * User: mtejada
 * Date: 24/9/2018
 * Time: 4:53 p.m.
 */

namespace AppBundle\Model;


class ArchivoPagoProveedoresFrances
{
    private $header;
    private $lineas;

    public function __construct(Registro10Header $header, array $lineas)
    {
        $this->header=$header;
        $this->lineas=$lineas;
    }

    /**
     * @return Registro10Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param Registro10Header $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return array
     */
    public function getLineas()
    {
        return $this->lineas;
    }

    /**
     * @param array $lineas
     */
    public function setLineas($lineas)
    {
        $this->lineas = $lineas;
    }

}