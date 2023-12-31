<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Servicios extends \AppBundle\Entity\Servicios implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idusuario', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'numcliente', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'observacion', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'fechainicio', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'cgp', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'referencia', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'saldoactual', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idgrupo', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'condventa', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'datoadic1', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'datoadic2', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'codcredencialpf', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'datoadic3');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idservicio', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idusuario', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idcliente', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'numcliente', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'observacion', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'fechainicio', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'cgp', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'referencia', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'saldoactual', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'idgrupo', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'condventa', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'datoadic1', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'datoadic2', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'codcredencialpf', '' . "\0" . 'AppBundle\\Entity\\Servicios' . "\0" . 'datoadic3');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Servicios $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdservicio()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdservicio();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdservicio', array());

        return parent::getIdservicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdusuario($idusuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdusuario', array($idusuario));

        return parent::setIdusuario($idusuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdusuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdusuario', array());

        return parent::getIdusuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdcliente($idcliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdcliente', array($idcliente));

        return parent::setIdcliente($idcliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdcliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcliente', array());

        return parent::getIdcliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumcliente($numcliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumcliente', array($numcliente));

        return parent::setNumcliente($numcliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumcliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumcliente', array());

        return parent::getNumcliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservacion($observacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacion', array($observacion));

        return parent::setObservacion($observacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacion', array());

        return parent::getObservacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechainicio($fechainicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechainicio', array($fechainicio));

        return parent::setFechainicio($fechainicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechainicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechainicio', array());

        return parent::getFechainicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', array($tipo));

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', array());

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCgp($cgp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCgp', array($cgp));

        return parent::setCgp($cgp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCgp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCgp', array());

        return parent::getCgp();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferencia($referencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferencia', array($referencia));

        return parent::setReferencia($referencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferencia', array());

        return parent::getReferencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoactual($saldoactual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoactual', array($saldoactual));

        return parent::setSaldoactual($saldoactual);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoactual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoactual', array());

        return parent::getSaldoactual();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdgrupo($idgrupo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdgrupo', array($idgrupo));

        return parent::setIdgrupo($idgrupo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdgrupo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdgrupo', array());

        return parent::getIdgrupo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCondventa($condventa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondventa', array($condventa));

        return parent::setCondventa($condventa);
    }

    /**
     * {@inheritDoc}
     */
    public function getCondventa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondventa', array());

        return parent::getCondventa();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatoadic1($datoadic1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatoadic1', array($datoadic1));

        return parent::setDatoadic1($datoadic1);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatoadic1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatoadic1', array());

        return parent::getDatoadic1();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatoadic2($datoadic2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatoadic2', array($datoadic2));

        return parent::setDatoadic2($datoadic2);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatoadic2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatoadic2', array());

        return parent::getDatoadic2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodcredencialpf($codcredencialpf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodcredencialpf', array($codcredencialpf));

        return parent::setCodcredencialpf($codcredencialpf);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodcredencialpf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodcredencialpf', array());

        return parent::getCodcredencialpf();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatoadic3($datoadic3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatoadic3', array($datoadic3));

        return parent::setDatoadic3($datoadic3);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatoadic3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatoadic3', array());

        return parent::getDatoadic3();
    }

}
