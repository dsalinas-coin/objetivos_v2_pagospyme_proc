<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Mediospago extends \AppBundle\Entity\Mediospago implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'idmedio', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'descripcioninterna', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'comentarios', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'codigodecidir', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'habilitable', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'nombreArchivo', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'codigows', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'idtipo', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'codigoapi', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'idmedioNuevo');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'idmedio', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'descripcioninterna', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'comentarios', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'codigodecidir', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'habilitable', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'nombreArchivo', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'codigows', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'idtipo', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'codigoapi', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Mediospago' . "\0" . 'idmedioNuevo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Mediospago $proxy) {
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
    public function getIdmedio()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getIdmedio();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmedio', array());

        return parent::getIdmedio();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcioninterna($descripcioninterna)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcioninterna', array($descripcioninterna));

        return parent::setDescripcioninterna($descripcioninterna);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcioninterna()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcioninterna', array());

        return parent::getDescripcioninterna();
    }

    /**
     * {@inheritDoc}
     */
    public function setComentarios($comentarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentarios', array($comentarios));

        return parent::setComentarios($comentarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentarios', array());

        return parent::getComentarios();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigodecidir($codigodecidir)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigodecidir', array($codigodecidir));

        return parent::setCodigodecidir($codigodecidir);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigodecidir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigodecidir', array());

        return parent::getCodigodecidir();
    }

    /**
     * {@inheritDoc}
     */
    public function setHabilitable($habilitable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHabilitable', array($habilitable));

        return parent::setHabilitable($habilitable);
    }

    /**
     * {@inheritDoc}
     */
    public function getHabilitable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHabilitable', array());

        return parent::getHabilitable();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreArchivo($nombreArchivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreArchivo', array($nombreArchivo));

        return parent::setNombreArchivo($nombreArchivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreArchivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreArchivo', array());

        return parent::getNombreArchivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigows($codigows)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigows', array($codigows));

        return parent::setCodigows($codigows);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigows()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigows', array());

        return parent::getCodigows();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdtipo($idtipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdtipo', array($idtipo));

        return parent::setIdtipo($idtipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdtipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdtipo', array());

        return parent::getIdtipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigoapi($codigoapi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigoapi', array($codigoapi));

        return parent::setCodigoapi($codigoapi);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigoapi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigoapi', array());

        return parent::getCodigoapi();
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
    public function setIdmedioNuevo($idmedioNuevo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdmedioNuevo', array($idmedioNuevo));

        return parent::setIdmedioNuevo($idmedioNuevo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdmedioNuevo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdmedioNuevo', array());

        return parent::getIdmedioNuevo();
    }

}
