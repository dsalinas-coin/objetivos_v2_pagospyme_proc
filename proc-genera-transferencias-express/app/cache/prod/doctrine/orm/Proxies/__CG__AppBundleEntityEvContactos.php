<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EvContactos extends \AppBundle\Entity\EvContactos implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idcontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idbase', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idexterno', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'cuit', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'razonsocial', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'tipocliente', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'direccion', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'cp', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'localidad', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'provincia', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'telefono1', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'telefono2', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'nombrecontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'apellidocontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'rolcontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idoperador');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idcontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idbase', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idexterno', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'cuit', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'razonsocial', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'tipocliente', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'direccion', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'cp', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'localidad', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'provincia', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'telefono1', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'telefono2', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'nombrecontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'apellidocontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'rolcontacto', '' . "\0" . 'AppBundle\\Entity\\EvContactos' . "\0" . 'idoperador');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EvContactos $proxy) {
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
    public function getIdcontacto()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdcontacto();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdcontacto', array());

        return parent::getIdcontacto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdbase($idbase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdbase', array($idbase));

        return parent::setIdbase($idbase);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdbase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdbase', array());

        return parent::getIdbase();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdexterno($idexterno)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdexterno', array($idexterno));

        return parent::setIdexterno($idexterno);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdexterno()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdexterno', array());

        return parent::getIdexterno();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuit($cuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuit', array($cuit));

        return parent::setCuit($cuit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuit', array());

        return parent::getCuit();
    }

    /**
     * {@inheritDoc}
     */
    public function setRazonsocial($razonsocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRazonsocial', array($razonsocial));

        return parent::setRazonsocial($razonsocial);
    }

    /**
     * {@inheritDoc}
     */
    public function getRazonsocial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRazonsocial', array());

        return parent::getRazonsocial();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipocliente($tipocliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipocliente', array($tipocliente));

        return parent::setTipocliente($tipocliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipocliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipocliente', array());

        return parent::getTipocliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', array($direccion));

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', array());

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', array($cp));

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', array());

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalidad($localidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalidad', array($localidad));

        return parent::setLocalidad($localidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalidad', array());

        return parent::getLocalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvincia($provincia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvincia', array($provincia));

        return parent::setProvincia($provincia);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvincia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvincia', array());

        return parent::getProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono1($telefono1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono1', array($telefono1));

        return parent::setTelefono1($telefono1);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono1', array());

        return parent::getTelefono1();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono2($telefono2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono2', array($telefono2));

        return parent::setTelefono2($telefono2);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono2', array());

        return parent::getTelefono2();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombrecontacto($nombrecontacto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombrecontacto', array($nombrecontacto));

        return parent::setNombrecontacto($nombrecontacto);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombrecontacto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombrecontacto', array());

        return parent::getNombrecontacto();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidocontacto($apellidocontacto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidocontacto', array($apellidocontacto));

        return parent::setApellidocontacto($apellidocontacto);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidocontacto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidocontacto', array());

        return parent::getApellidocontacto();
    }

    /**
     * {@inheritDoc}
     */
    public function setRolcontacto($rolcontacto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRolcontacto', array($rolcontacto));

        return parent::setRolcontacto($rolcontacto);
    }

    /**
     * {@inheritDoc}
     */
    public function getRolcontacto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRolcontacto', array());

        return parent::getRolcontacto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdoperador($idoperador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdoperador', array($idoperador));

        return parent::setIdoperador($idoperador);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdoperador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdoperador', array());

        return parent::getIdoperador();
    }

}