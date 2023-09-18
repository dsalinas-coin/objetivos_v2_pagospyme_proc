<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes", indexes={@ORM\Index(name="idtiposervicio", columns={"idtiposervicio"}), @ORM\Index(name="idx_clientes_aliaspassword", columns={"alias", "password"}), @ORM\Index(name="idx_clientes_estado", columns={"estado"}), @ORM\Index(name="idx_clientes_codcliente", columns={"codcliente"}), @ORM\Index(name="_dta_index_clientes_5_722869692__K75", columns={"codigo_psf"}), @ORM\Index(name="_dta_index_clientes_5_722869692__K1", columns={"idcliente"})})
 * @ORM\Entity
 */
class Clientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=20, nullable=false)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="mailavisos", type="string", length=100, nullable=true)
     */
    private $mailavisos;

    /**
     * @var string
     *
     * @ORM\Column(name="descavisos", type="string", length=80, nullable=true)
     */
    private $descavisos;

    /**
     * @var string
     *
     * @ORM\Column(name="razonsocial", type="string", length=200, nullable=true)
     */
    private $razonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrefantasia", type="string", length=100, nullable=true)
     */
    private $nombrefantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=80, nullable=true)
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=80, nullable=true)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="emailcontacto", type="string", length=400, nullable=true)
     */
    private $emailcontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="emailadmin", type="string", length=400, nullable=true)
     */
    private $emailadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="emailtickets", type="string", length=400, nullable=true)
     */
    private $emailtickets;

    /**
     * @var string
     *
     * @ORM\Column(name="emailprocesos", type="string", length=400, nullable=true)
     */
    private $emailprocesos;

    /**
     * @var string
     *
     * @ORM\Column(name="emailavisos", type="string", length=500, nullable=true)
     */
    private $emailavisos;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=300, nullable=true)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcondicioniva", type="smallint", nullable=true)
     */
    private $idcondicioniva;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=13, nullable=false)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=40, nullable=true)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", length=40, nullable=true)
     */
    private $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="codpost", type="string", length=15, nullable=true)
     */
    private $codpost;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprovincia", type="integer", nullable=true)
     */
    private $idprovincia;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=4, nullable=true)
     */
    private $pais;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpais", type="smallint", nullable=true)
     */
    private $idpais;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=false)
     */
    private $fechaingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="ecommamex", type="string", length=40, nullable=true)
     */
    private $ecommamex;

    /**
     * @var string
     *
     * @ORM\Column(name="ecommvisa", type="string", length=40, nullable=true)
     */
    private $ecommvisa;

    /**
     * @var string
     *
     * @ORM\Column(name="ecommmaster", type="string", length=40, nullable=true)
     */
    private $ecommmaster;

    /**
     * @var string
     *
     * @ORM\Column(name="ecommpagof", type="string", length=40, nullable=true)
     */
    private $ecommpagof;

    /**
     * @var string
     *
     * @ORM\Column(name="ecommpagofcred", type="string", length=50, nullable=true)
     */
    private $ecommpagofcred;

    /**
     * @var string
     *
     * @ORM\Column(name="esubcommpagof", type="string", length=5, nullable=true)
     */
    private $esubcommpagof;

    /**
     * @var string
     *
     * @ORM\Column(name="ecommdecidir", type="string", length=40, nullable=true)
     */
    private $ecommdecidir;

    /**
     * @var string
     *
     * @ORM\Column(name="ecommpagomiscuentas", type="string", length=40, nullable=true)
     */
    private $ecommpagomiscuentas;

    /**
     * @var string
     *
     * @ORM\Column(name="plantilla", type="string", length=40, nullable=true)
     */
    private $plantilla;

    /**
     * @var string
     *
     * @ORM\Column(name="avisoretiro", type="string", length=40, nullable=true)
     */
    private $avisoretiro;

    /**
     * @var string
     *
     * @ORM\Column(name="textocheque", type="string", length=500, nullable=true)
     */
    private $textocheque;

    /**
     * @var string
     *
     * @ORM\Column(name="menuesp", type="string", length=100, nullable=true)
     */
    private $menuesp;

    /**
     * @var integer
     *
     * @ORM\Column(name="cant_fail", type="integer", nullable=false)
     */
    private $cantFail;

    /**
     * @var string
     *
     * @ORM\Column(name="passwordbajo", type="string", length=50, nullable=true)
     */
    private $passwordbajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="diashabilesretiro", type="integer", nullable=true)
     */
    private $diashabilesretiro;

    /**
     * @var integer
     *
     * @ORM\Column(name="diasvalidezcuponpf", type="smallint", nullable=true)
     */
    private $diasvalidezcuponpf;

    /**
     * @var integer
     *
     * @ORM\Column(name="diasremision", type="integer", nullable=true)
     */
    private $diasremision;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtiposervicio", type="smallint", nullable=true)
     */
    private $idtiposervicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ong", type="smallint", nullable=true)
     */
    private $ong;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagofacil_estado", type="smallint", nullable=true)
     */
    private $pagofacilEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="enviar_emaildiariopagos", type="smallint", nullable=true)
     */
    private $enviarEmaildiariopagos;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1000, nullable=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="multiplicador_importedocvencido", type="float", precision=24, scale=0, nullable=true)
     */
    private $multiplicadorImportedocvencido;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipodoc_default", type="smallint", nullable=true)
     */
    private $idtipodocDefault;

    /**
     * @var string
     *
     * @ORM\Column(name="codcliente", type="string", length=8, nullable=true)
     */
    private $codcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="codcliente2", type="string", length=8, nullable=true)
     */
    private $codcliente2;

    /**
     * @var integer
     *
     * @ORM\Column(name="idbanco", type="integer", nullable=true)
     */
    private $idbanco;

    /**
     * @var string
     *
     * @ORM\Column(name="nrocuentabanco", type="string", length=50, nullable=true)
     */
    private $nrocuentabanco;

    /**
     * @var string
     *
     * @ORM\Column(name="sucursal", type="string", length=50, nullable=true)
     */
    private $sucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="cbu", type="string", length=50, nullable=true)
     */
    private $cbu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enviar_codigospf", type="boolean", nullable=true)
     */
    private $enviarCodigospf;

    /**
     * @var string
     *
     * @ORM\Column(name="rutalogocred", type="string", length=200, nullable=true)
     */
    private $rutalogocred;

    /**
     * @var string
     *
     * @ORM\Column(name="rutalogogrande", type="string", length=200, nullable=true)
     */
    private $rutalogogrande;

    /**
     * @var integer
     *
     * @ORM\Column(name="operativo", type="smallint", nullable=true)
     */
    private $operativo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="esubcommpagoftrad", type="string", length=5, nullable=true)
     */
    private $esubcommpagoftrad;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="string", length=100, nullable=true)
     */
    private $comentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="codautenticacion", type="string", length=50, nullable=true)
     */
    private $codautenticacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ws_token", type="string", length=32, nullable=true)
     */
    private $wsToken;

    /**
     * @var integer
     *
     * @ORM\Column(name="debito_directo", type="smallint", nullable=true)
     */
    private $debitoDirecto;

    /**
     * @var string
     *
     * @ORM\Column(name="temp", type="string", length=200, nullable=true)
     */
    private $temp;

    /**
     * @var string
     *
     * @ORM\Column(name="url_post", type="string", length=200, nullable=true)
     */
    private $urlPost;

    /**
     * @var string
     *
     * @ORM\Column(name="ftp_user", type="string", length=50, nullable=true)
     */
    private $ftpUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ftp_pass", type="string", length=50, nullable=true)
     */
    private $ftpPass;

    /**
     * @var string
     *
     * @ORM\Column(name="ftp_carpeta", type="string", length=50, nullable=true)
     */
    private $ftpCarpeta;

    /**
     * @var string
     *
     * @ORM\Column(name="ftp_codigo", type="string", length=50, nullable=true)
     */
    private $ftpCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=50, nullable=true)
     */
    private $host;

    /**
     * @var integer
     *
     * @ORM\Column(name="pagar_factura_vencida", type="smallint", nullable=false)
     */
    private $pagarFacturaVencida;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_psf", type="string", length=4, nullable=true)
     */
    private $codigoPsf;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcuenta_tipo", type="integer", nullable=true)
     */
    private $idcuentaTipo;



    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Clientes
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Clientes
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mailavisos
     *
     * @param string $mailavisos
     * @return Clientes
     */
    public function setMailavisos($mailavisos)
    {
        $this->mailavisos = $mailavisos;

        return $this;
    }

    /**
     * Get mailavisos
     *
     * @return string 
     */
    public function getMailavisos()
    {
        return $this->mailavisos;
    }

    /**
     * Set descavisos
     *
     * @param string $descavisos
     * @return Clientes
     */
    public function setDescavisos($descavisos)
    {
        $this->descavisos = $descavisos;

        return $this;
    }

    /**
     * Get descavisos
     *
     * @return string 
     */
    public function getDescavisos()
    {
        return $this->descavisos;
    }

    /**
     * Set razonsocial
     *
     * @param string $razonsocial
     * @return Clientes
     */
    public function setRazonsocial($razonsocial)
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    /**
     * Get razonsocial
     *
     * @return string 
     */
    public function getRazonsocial()
    {
        return $this->razonsocial;
    }

    /**
     * Set nombrefantasia
     *
     * @param string $nombrefantasia
     * @return Clientes
     */
    public function setNombrefantasia($nombrefantasia)
    {
        $this->nombrefantasia = $nombrefantasia;

        return $this;
    }

    /**
     * Get nombrefantasia
     *
     * @return string 
     */
    public function getNombrefantasia()
    {
        return $this->nombrefantasia;
    }

    /**
     * Set titular
     *
     * @param string $titular
     * @return Clientes
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string 
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Clientes
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set emailcontacto
     *
     * @param string $emailcontacto
     * @return Clientes
     */
    public function setEmailcontacto($emailcontacto)
    {
        $this->emailcontacto = $emailcontacto;

        return $this;
    }

    /**
     * Get emailcontacto
     *
     * @return string 
     */
    public function getEmailcontacto()
    {
        return $this->emailcontacto;
    }

    /**
     * Set emailadmin
     *
     * @param string $emailadmin
     * @return Clientes
     */
    public function setEmailadmin($emailadmin)
    {
        $this->emailadmin = $emailadmin;

        return $this;
    }

    /**
     * Get emailadmin
     *
     * @return string 
     */
    public function getEmailadmin()
    {
        return $this->emailadmin;
    }

    /**
     * Set emailtickets
     *
     * @param string $emailtickets
     * @return Clientes
     */
    public function setEmailtickets($emailtickets)
    {
        $this->emailtickets = $emailtickets;

        return $this;
    }

    /**
     * Get emailtickets
     *
     * @return string 
     */
    public function getEmailtickets()
    {
        return $this->emailtickets;
    }

    /**
     * Set emailprocesos
     *
     * @param string $emailprocesos
     * @return Clientes
     */
    public function setEmailprocesos($emailprocesos)
    {
        $this->emailprocesos = $emailprocesos;

        return $this;
    }

    /**
     * Get emailprocesos
     *
     * @return string 
     */
    public function getEmailprocesos()
    {
        return $this->emailprocesos;
    }

    /**
     * Set emailavisos
     *
     * @param string $emailavisos
     * @return Clientes
     */
    public function setEmailavisos($emailavisos)
    {
        $this->emailavisos = $emailavisos;

        return $this;
    }

    /**
     * Get emailavisos
     *
     * @return string 
     */
    public function getEmailavisos()
    {
        return $this->emailavisos;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Clientes
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set idcondicioniva
     *
     * @param integer $idcondicioniva
     * @return Clientes
     */
    public function setIdcondicioniva($idcondicioniva)
    {
        $this->idcondicioniva = $idcondicioniva;

        return $this;
    }

    /**
     * Get idcondicioniva
     *
     * @return integer 
     */
    public function getIdcondicioniva()
    {
        return $this->idcondicioniva;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Clientes
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Clientes
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Clientes
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set partido
     *
     * @param string $partido
     * @return Clientes
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Get partido
     *
     * @return string 
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * Set codpost
     *
     * @param string $codpost
     * @return Clientes
     */
    public function setCodpost($codpost)
    {
        $this->codpost = $codpost;

        return $this;
    }

    /**
     * Get codpost
     *
     * @return string 
     */
    public function getCodpost()
    {
        return $this->codpost;
    }

    /**
     * Set idprovincia
     *
     * @param integer $idprovincia
     * @return Clientes
     */
    public function setIdprovincia($idprovincia)
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }

    /**
     * Get idprovincia
     *
     * @return integer 
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Clientes
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set idpais
     *
     * @param integer $idpais
     * @return Clientes
     */
    public function setIdpais($idpais)
    {
        $this->idpais = $idpais;

        return $this;
    }

    /**
     * Get idpais
     *
     * @return integer 
     */
    public function getIdpais()
    {
        return $this->idpais;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Clientes
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime 
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return Clientes
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set ecommamex
     *
     * @param string $ecommamex
     * @return Clientes
     */
    public function setEcommamex($ecommamex)
    {
        $this->ecommamex = $ecommamex;

        return $this;
    }

    /**
     * Get ecommamex
     *
     * @return string 
     */
    public function getEcommamex()
    {
        return $this->ecommamex;
    }

    /**
     * Set ecommvisa
     *
     * @param string $ecommvisa
     * @return Clientes
     */
    public function setEcommvisa($ecommvisa)
    {
        $this->ecommvisa = $ecommvisa;

        return $this;
    }

    /**
     * Get ecommvisa
     *
     * @return string 
     */
    public function getEcommvisa()
    {
        return $this->ecommvisa;
    }

    /**
     * Set ecommmaster
     *
     * @param string $ecommmaster
     * @return Clientes
     */
    public function setEcommmaster($ecommmaster)
    {
        $this->ecommmaster = $ecommmaster;

        return $this;
    }

    /**
     * Get ecommmaster
     *
     * @return string 
     */
    public function getEcommmaster()
    {
        return $this->ecommmaster;
    }

    /**
     * Set ecommpagof
     *
     * @param string $ecommpagof
     * @return Clientes
     */
    public function setEcommpagof($ecommpagof)
    {
        $this->ecommpagof = $ecommpagof;

        return $this;
    }

    /**
     * Get ecommpagof
     *
     * @return string 
     */
    public function getEcommpagof()
    {
        return $this->ecommpagof;
    }

    /**
     * Set ecommpagofcred
     *
     * @param string $ecommpagofcred
     * @return Clientes
     */
    public function setEcommpagofcred($ecommpagofcred)
    {
        $this->ecommpagofcred = $ecommpagofcred;

        return $this;
    }

    /**
     * Get ecommpagofcred
     *
     * @return string 
     */
    public function getEcommpagofcred()
    {
        return $this->ecommpagofcred;
    }

    /**
     * Set esubcommpagof
     *
     * @param string $esubcommpagof
     * @return Clientes
     */
    public function setEsubcommpagof($esubcommpagof)
    {
        $this->esubcommpagof = $esubcommpagof;

        return $this;
    }

    /**
     * Get esubcommpagof
     *
     * @return string 
     */
    public function getEsubcommpagof()
    {
        return $this->esubcommpagof;
    }

    /**
     * Set ecommdecidir
     *
     * @param string $ecommdecidir
     * @return Clientes
     */
    public function setEcommdecidir($ecommdecidir)
    {
        $this->ecommdecidir = $ecommdecidir;

        return $this;
    }

    /**
     * Get ecommdecidir
     *
     * @return string 
     */
    public function getEcommdecidir()
    {
        return $this->ecommdecidir;
    }

    /**
     * Set ecommpagomiscuentas
     *
     * @param string $ecommpagomiscuentas
     * @return Clientes
     */
    public function setEcommpagomiscuentas($ecommpagomiscuentas)
    {
        $this->ecommpagomiscuentas = $ecommpagomiscuentas;

        return $this;
    }

    /**
     * Get ecommpagomiscuentas
     *
     * @return string 
     */
    public function getEcommpagomiscuentas()
    {
        return $this->ecommpagomiscuentas;
    }

    /**
     * Set plantilla
     *
     * @param string $plantilla
     * @return Clientes
     */
    public function setPlantilla($plantilla)
    {
        $this->plantilla = $plantilla;

        return $this;
    }

    /**
     * Get plantilla
     *
     * @return string 
     */
    public function getPlantilla()
    {
        return $this->plantilla;
    }

    /**
     * Set avisoretiro
     *
     * @param string $avisoretiro
     * @return Clientes
     */
    public function setAvisoretiro($avisoretiro)
    {
        $this->avisoretiro = $avisoretiro;

        return $this;
    }

    /**
     * Get avisoretiro
     *
     * @return string 
     */
    public function getAvisoretiro()
    {
        return $this->avisoretiro;
    }

    /**
     * Set textocheque
     *
     * @param string $textocheque
     * @return Clientes
     */
    public function setTextocheque($textocheque)
    {
        $this->textocheque = $textocheque;

        return $this;
    }

    /**
     * Get textocheque
     *
     * @return string 
     */
    public function getTextocheque()
    {
        return $this->textocheque;
    }

    /**
     * Set menuesp
     *
     * @param string $menuesp
     * @return Clientes
     */
    public function setMenuesp($menuesp)
    {
        $this->menuesp = $menuesp;

        return $this;
    }

    /**
     * Get menuesp
     *
     * @return string 
     */
    public function getMenuesp()
    {
        return $this->menuesp;
    }

    /**
     * Set cantFail
     *
     * @param integer $cantFail
     * @return Clientes
     */
    public function setCantFail($cantFail)
    {
        $this->cantFail = $cantFail;

        return $this;
    }

    /**
     * Get cantFail
     *
     * @return integer 
     */
    public function getCantFail()
    {
        return $this->cantFail;
    }

    /**
     * Set passwordbajo
     *
     * @param string $passwordbajo
     * @return Clientes
     */
    public function setPasswordbajo($passwordbajo)
    {
        $this->passwordbajo = $passwordbajo;

        return $this;
    }

    /**
     * Get passwordbajo
     *
     * @return string 
     */
    public function getPasswordbajo()
    {
        return $this->passwordbajo;
    }

    /**
     * Set diashabilesretiro
     *
     * @param integer $diashabilesretiro
     * @return Clientes
     */
    public function setDiashabilesretiro($diashabilesretiro)
    {
        $this->diashabilesretiro = $diashabilesretiro;

        return $this;
    }

    /**
     * Get diashabilesretiro
     *
     * @return integer 
     */
    public function getDiashabilesretiro()
    {
        return $this->diashabilesretiro;
    }

    /**
     * Set diasvalidezcuponpf
     *
     * @param integer $diasvalidezcuponpf
     * @return Clientes
     */
    public function setDiasvalidezcuponpf($diasvalidezcuponpf)
    {
        $this->diasvalidezcuponpf = $diasvalidezcuponpf;

        return $this;
    }

    /**
     * Get diasvalidezcuponpf
     *
     * @return integer 
     */
    public function getDiasvalidezcuponpf()
    {
        return $this->diasvalidezcuponpf;
    }

    /**
     * Set diasremision
     *
     * @param integer $diasremision
     * @return Clientes
     */
    public function setDiasremision($diasremision)
    {
        $this->diasremision = $diasremision;

        return $this;
    }

    /**
     * Get diasremision
     *
     * @return integer 
     */
    public function getDiasremision()
    {
        return $this->diasremision;
    }

    /**
     * Set idtiposervicio
     *
     * @param integer $idtiposervicio
     * @return Clientes
     */
    public function setIdtiposervicio($idtiposervicio)
    {
        $this->idtiposervicio = $idtiposervicio;

        return $this;
    }

    /**
     * Get idtiposervicio
     *
     * @return integer 
     */
    public function getIdtiposervicio()
    {
        return $this->idtiposervicio;
    }

    /**
     * Set ong
     *
     * @param integer $ong
     * @return Clientes
     */
    public function setOng($ong)
    {
        $this->ong = $ong;

        return $this;
    }

    /**
     * Get ong
     *
     * @return integer 
     */
    public function getOng()
    {
        return $this->ong;
    }

    /**
     * Set pagofacilEstado
     *
     * @param integer $pagofacilEstado
     * @return Clientes
     */
    public function setPagofacilEstado($pagofacilEstado)
    {
        $this->pagofacilEstado = $pagofacilEstado;

        return $this;
    }

    /**
     * Get pagofacilEstado
     *
     * @return integer 
     */
    public function getPagofacilEstado()
    {
        return $this->pagofacilEstado;
    }

    /**
     * Set enviarEmaildiariopagos
     *
     * @param integer $enviarEmaildiariopagos
     * @return Clientes
     */
    public function setEnviarEmaildiariopagos($enviarEmaildiariopagos)
    {
        $this->enviarEmaildiariopagos = $enviarEmaildiariopagos;

        return $this;
    }

    /**
     * Get enviarEmaildiariopagos
     *
     * @return integer 
     */
    public function getEnviarEmaildiariopagos()
    {
        return $this->enviarEmaildiariopagos;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Clientes
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set multiplicadorImportedocvencido
     *
     * @param float $multiplicadorImportedocvencido
     * @return Clientes
     */
    public function setMultiplicadorImportedocvencido($multiplicadorImportedocvencido)
    {
        $this->multiplicadorImportedocvencido = $multiplicadorImportedocvencido;

        return $this;
    }

    /**
     * Get multiplicadorImportedocvencido
     *
     * @return float 
     */
    public function getMultiplicadorImportedocvencido()
    {
        return $this->multiplicadorImportedocvencido;
    }

    /**
     * Set idtipodocDefault
     *
     * @param integer $idtipodocDefault
     * @return Clientes
     */
    public function setIdtipodocDefault($idtipodocDefault)
    {
        $this->idtipodocDefault = $idtipodocDefault;

        return $this;
    }

    /**
     * Get idtipodocDefault
     *
     * @return integer 
     */
    public function getIdtipodocDefault()
    {
        return $this->idtipodocDefault;
    }

    /**
     * Set codcliente
     *
     * @param string $codcliente
     * @return Clientes
     */
    public function setCodcliente($codcliente)
    {
        $this->codcliente = $codcliente;

        return $this;
    }

    /**
     * Get codcliente
     *
     * @return string 
     */
    public function getCodcliente()
    {
        return $this->codcliente;
    }

    /**
     * Set codcliente2
     *
     * @param string $codcliente2
     * @return Clientes
     */
    public function setCodcliente2($codcliente2)
    {
        $this->codcliente2 = $codcliente2;

        return $this;
    }

    /**
     * Get codcliente2
     *
     * @return string 
     */
    public function getCodcliente2()
    {
        return $this->codcliente2;
    }

    /**
     * Set idbanco
     *
     * @param integer $idbanco
     * @return Clientes
     */
    public function setIdbanco($idbanco)
    {
        $this->idbanco = $idbanco;

        return $this;
    }

    /**
     * Get idbanco
     *
     * @return integer 
     */
    public function getIdbanco()
    {
        return $this->idbanco;
    }

    /**
     * Set nrocuentabanco
     *
     * @param string $nrocuentabanco
     * @return Clientes
     */
    public function setNrocuentabanco($nrocuentabanco)
    {
        $this->nrocuentabanco = $nrocuentabanco;

        return $this;
    }

    /**
     * Get nrocuentabanco
     *
     * @return string 
     */
    public function getNrocuentabanco()
    {
        return $this->nrocuentabanco;
    }

    /**
     * Set sucursal
     *
     * @param string $sucursal
     * @return Clientes
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return string 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set cbu
     *
     * @param string $cbu
     * @return Clientes
     */
    public function setCbu($cbu)
    {
        $this->cbu = $cbu;

        return $this;
    }

    /**
     * Get cbu
     *
     * @return string 
     */
    public function getCbu()
    {
        return $this->cbu;
    }

    /**
     * Set enviarCodigospf
     *
     * @param boolean $enviarCodigospf
     * @return Clientes
     */
    public function setEnviarCodigospf($enviarCodigospf)
    {
        $this->enviarCodigospf = $enviarCodigospf;

        return $this;
    }

    /**
     * Get enviarCodigospf
     *
     * @return boolean 
     */
    public function getEnviarCodigospf()
    {
        return $this->enviarCodigospf;
    }

    /**
     * Set rutalogocred
     *
     * @param string $rutalogocred
     * @return Clientes
     */
    public function setRutalogocred($rutalogocred)
    {
        $this->rutalogocred = $rutalogocred;

        return $this;
    }

    /**
     * Get rutalogocred
     *
     * @return string 
     */
    public function getRutalogocred()
    {
        return $this->rutalogocred;
    }

    /**
     * Set rutalogogrande
     *
     * @param string $rutalogogrande
     * @return Clientes
     */
    public function setRutalogogrande($rutalogogrande)
    {
        $this->rutalogogrande = $rutalogogrande;

        return $this;
    }

    /**
     * Get rutalogogrande
     *
     * @return string 
     */
    public function getRutalogogrande()
    {
        return $this->rutalogogrande;
    }

    /**
     * Set operativo
     *
     * @param integer $operativo
     * @return Clientes
     */
    public function setOperativo($operativo)
    {
        $this->operativo = $operativo;

        return $this;
    }

    /**
     * Get operativo
     *
     * @return integer 
     */
    public function getOperativo()
    {
        return $this->operativo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Clientes
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set esubcommpagoftrad
     *
     * @param string $esubcommpagoftrad
     * @return Clientes
     */
    public function setEsubcommpagoftrad($esubcommpagoftrad)
    {
        $this->esubcommpagoftrad = $esubcommpagoftrad;

        return $this;
    }

    /**
     * Get esubcommpagoftrad
     *
     * @return string 
     */
    public function getEsubcommpagoftrad()
    {
        return $this->esubcommpagoftrad;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Clientes
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set codautenticacion
     *
     * @param string $codautenticacion
     * @return Clientes
     */
    public function setCodautenticacion($codautenticacion)
    {
        $this->codautenticacion = $codautenticacion;

        return $this;
    }

    /**
     * Get codautenticacion
     *
     * @return string 
     */
    public function getCodautenticacion()
    {
        return $this->codautenticacion;
    }

    /**
     * Set wsToken
     *
     * @param string $wsToken
     * @return Clientes
     */
    public function setWsToken($wsToken)
    {
        $this->wsToken = $wsToken;

        return $this;
    }

    /**
     * Get wsToken
     *
     * @return string 
     */
    public function getWsToken()
    {
        return $this->wsToken;
    }

    /**
     * Set debitoDirecto
     *
     * @param integer $debitoDirecto
     * @return Clientes
     */
    public function setDebitoDirecto($debitoDirecto)
    {
        $this->debitoDirecto = $debitoDirecto;

        return $this;
    }

    /**
     * Get debitoDirecto
     *
     * @return integer 
     */
    public function getDebitoDirecto()
    {
        return $this->debitoDirecto;
    }

    /**
     * Set temp
     *
     * @param string $temp
     * @return Clientes
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return string 
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set urlPost
     *
     * @param string $urlPost
     * @return Clientes
     */
    public function setUrlPost($urlPost)
    {
        $this->urlPost = $urlPost;

        return $this;
    }

    /**
     * Get urlPost
     *
     * @return string 
     */
    public function getUrlPost()
    {
        return $this->urlPost;
    }

    /**
     * Set ftpUser
     *
     * @param string $ftpUser
     * @return Clientes
     */
    public function setFtpUser($ftpUser)
    {
        $this->ftpUser = $ftpUser;

        return $this;
    }

    /**
     * Get ftpUser
     *
     * @return string 
     */
    public function getFtpUser()
    {
        return $this->ftpUser;
    }

    /**
     * Set ftpPass
     *
     * @param string $ftpPass
     * @return Clientes
     */
    public function setFtpPass($ftpPass)
    {
        $this->ftpPass = $ftpPass;

        return $this;
    }

    /**
     * Get ftpPass
     *
     * @return string 
     */
    public function getFtpPass()
    {
        return $this->ftpPass;
    }

    /**
     * Set ftpCarpeta
     *
     * @param string $ftpCarpeta
     * @return Clientes
     */
    public function setFtpCarpeta($ftpCarpeta)
    {
        $this->ftpCarpeta = $ftpCarpeta;

        return $this;
    }

    /**
     * Get ftpCarpeta
     *
     * @return string 
     */
    public function getFtpCarpeta()
    {
        return $this->ftpCarpeta;
    }

    /**
     * Set ftpCodigo
     *
     * @param string $ftpCodigo
     * @return Clientes
     */
    public function setFtpCodigo($ftpCodigo)
    {
        $this->ftpCodigo = $ftpCodigo;

        return $this;
    }

    /**
     * Get ftpCodigo
     *
     * @return string 
     */
    public function getFtpCodigo()
    {
        return $this->ftpCodigo;
    }

    /**
     * Set host
     *
     * @param string $host
     * @return Clientes
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set pagarFacturaVencida
     *
     * @param integer $pagarFacturaVencida
     * @return Clientes
     */
    public function setPagarFacturaVencida($pagarFacturaVencida)
    {
        $this->pagarFacturaVencida = $pagarFacturaVencida;

        return $this;
    }

    /**
     * Get pagarFacturaVencida
     *
     * @return integer 
     */
    public function getPagarFacturaVencida()
    {
        return $this->pagarFacturaVencida;
    }

    /**
     * Set codigoPsf
     *
     * @param string $codigoPsf
     * @return Clientes
     */
    public function setCodigoPsf($codigoPsf)
    {
        $this->codigoPsf = $codigoPsf;

        return $this;
    }

    /**
     * Get codigoPsf
     *
     * @return string 
     */
    public function getCodigoPsf()
    {
        return $this->codigoPsf;
    }

    /**
     * Set idcuentaTipo
     *
     * @param integer $idcuentaTipo
     * @return Clientes
     */
    public function setIdcuentaTipo($idcuentaTipo)
    {
        $this->idcuentaTipo = $idcuentaTipo;

        return $this;
    }

    /**
     * Get idcuentaTipo
     *
     * @return integer 
     */
    public function getIdcuentaTipo()
    {
        return $this->idcuentaTipo;
    }
}
