<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="idx_emailcontacto", columns={"emailcontacto"}), @ORM\Index(name="idx_nombre", columns={"nombre"}), @ORM\Index(name="idx_usuarios_estado", columns={"estado"}), @ORM\Index(name="_dta_index_usuarios_5_226151901__K1_3", columns={"nombre", "idusuario"}), @ORM\Index(name="_dta_index_usuarios_5_570537166__K11_K1", columns={"nrodocumento", "idusuario"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idperfil", type="integer", nullable=true)
     */
    private $idperfil;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

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
     * @ORM\Column(name="emailcontacto", type="string", length=150, nullable=true)
     */
    private $emailcontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="emailcontacto2", type="string", length=100, nullable=true)
     */
    private $emailcontacto2;

    /**
     * @var string
     *
     * @ORM\Column(name="emailcorp", type="string", length=100, nullable=true)
     */
    private $emailcorp;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="tipodocumento", type="string", length=4, nullable=true)
     */
    private $tipodocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="nrodocumento", type="string", length=20, nullable=true)
     */
    private $nrodocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoiva", type="string", length=10, nullable=true)
     */
    private $tipoiva;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=15, nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonocontacto", type="string", length=100, nullable=true)
     */
    private $telefonocontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonocontacto2", type="string", length=150, nullable=true)
     */
    private $telefonocontacto2;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonocelular", type="string", length=50, nullable=true)
     */
    private $telefonocelular;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonocelular2", type="string", length=50, nullable=true)
     */
    private $telefonocelular2;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonocelular3", type="string", length=50, nullable=true)
     */
    private $telefonocelular3;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonocorp", type="string", length=40, nullable=true)
     */
    private $telefonocorp;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=100, nullable=true)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", length=100, nullable=true)
     */
    private $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="codpost", type="string", length=40, nullable=true)
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
     * @ORM\Column(name="fechanac", type="datetime", nullable=true)
     */
    private $fechanac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="datetime", nullable=false)
     */
    private $fechaingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="estadoemail", type="smallint", nullable=false)
     */
    private $estadoemail;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=300, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="datosadic1", type="string", length=100, nullable=true)
     */
    private $datosadic1;

    /**
     * @var string
     *
     * @ORM\Column(name="datosadic2", type="string", length=100, nullable=true)
     */
    private $datosadic2;

    /**
     * @var string
     *
     * @ORM\Column(name="datosadic3", type="string", length=100, nullable=true)
     */
    private $datosadic3;

    /**
     * @var integer
     *
     * @ORM\Column(name="iddocumento_tipo", type="integer", nullable=true)
     */
    private $iddocumentoTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcondicioniva", type="integer", nullable=true)
     */
    private $idcondicioniva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaultimamod", type="datetime", nullable=true)
     */
    private $fechaultimamod;



    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idperfil
     *
     * @param integer $idperfil
     * @return Usuarios
     */
    public function setIdperfil($idperfil)
    {
        $this->idperfil = $idperfil;

        return $this;
    }

    /**
     * Get idperfil
     *
     * @return integer 
     */
    public function getIdperfil()
    {
        return $this->idperfil;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set titular
     *
     * @param string $titular
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * Set emailcontacto2
     *
     * @param string $emailcontacto2
     * @return Usuarios
     */
    public function setEmailcontacto2($emailcontacto2)
    {
        $this->emailcontacto2 = $emailcontacto2;

        return $this;
    }

    /**
     * Get emailcontacto2
     *
     * @return string 
     */
    public function getEmailcontacto2()
    {
        return $this->emailcontacto2;
    }

    /**
     * Set emailcorp
     *
     * @param string $emailcorp
     * @return Usuarios
     */
    public function setEmailcorp($emailcorp)
    {
        $this->emailcorp = $emailcorp;

        return $this;
    }

    /**
     * Get emailcorp
     *
     * @return string 
     */
    public function getEmailcorp()
    {
        return $this->emailcorp;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuarios
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
     * Set tipodocumento
     *
     * @param string $tipodocumento
     * @return Usuarios
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return string 
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set nrodocumento
     *
     * @param string $nrodocumento
     * @return Usuarios
     */
    public function setNrodocumento($nrodocumento)
    {
        $this->nrodocumento = $nrodocumento;

        return $this;
    }

    /**
     * Get nrodocumento
     *
     * @return string 
     */
    public function getNrodocumento()
    {
        return $this->nrodocumento;
    }

    /**
     * Set tipoiva
     *
     * @param string $tipoiva
     * @return Usuarios
     */
    public function setTipoiva($tipoiva)
    {
        $this->tipoiva = $tipoiva;

        return $this;
    }

    /**
     * Get tipoiva
     *
     * @return string 
     */
    public function getTipoiva()
    {
        return $this->tipoiva;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Usuarios
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
     * Set telefonocontacto
     *
     * @param string $telefonocontacto
     * @return Usuarios
     */
    public function setTelefonocontacto($telefonocontacto)
    {
        $this->telefonocontacto = $telefonocontacto;

        return $this;
    }

    /**
     * Get telefonocontacto
     *
     * @return string 
     */
    public function getTelefonocontacto()
    {
        return $this->telefonocontacto;
    }

    /**
     * Set telefonocontacto2
     *
     * @param string $telefonocontacto2
     * @return Usuarios
     */
    public function setTelefonocontacto2($telefonocontacto2)
    {
        $this->telefonocontacto2 = $telefonocontacto2;

        return $this;
    }

    /**
     * Get telefonocontacto2
     *
     * @return string 
     */
    public function getTelefonocontacto2()
    {
        return $this->telefonocontacto2;
    }

    /**
     * Set telefonocelular
     *
     * @param string $telefonocelular
     * @return Usuarios
     */
    public function setTelefonocelular($telefonocelular)
    {
        $this->telefonocelular = $telefonocelular;

        return $this;
    }

    /**
     * Get telefonocelular
     *
     * @return string 
     */
    public function getTelefonocelular()
    {
        return $this->telefonocelular;
    }

    /**
     * Set telefonocelular2
     *
     * @param string $telefonocelular2
     * @return Usuarios
     */
    public function setTelefonocelular2($telefonocelular2)
    {
        $this->telefonocelular2 = $telefonocelular2;

        return $this;
    }

    /**
     * Get telefonocelular2
     *
     * @return string 
     */
    public function getTelefonocelular2()
    {
        return $this->telefonocelular2;
    }

    /**
     * Set telefonocelular3
     *
     * @param string $telefonocelular3
     * @return Usuarios
     */
    public function setTelefonocelular3($telefonocelular3)
    {
        $this->telefonocelular3 = $telefonocelular3;

        return $this;
    }

    /**
     * Get telefonocelular3
     *
     * @return string 
     */
    public function getTelefonocelular3()
    {
        return $this->telefonocelular3;
    }

    /**
     * Set telefonocorp
     *
     * @param string $telefonocorp
     * @return Usuarios
     */
    public function setTelefonocorp($telefonocorp)
    {
        $this->telefonocorp = $telefonocorp;

        return $this;
    }

    /**
     * Get telefonocorp
     *
     * @return string 
     */
    public function getTelefonocorp()
    {
        return $this->telefonocorp;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * @return Usuarios
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
     * Set fechanac
     *
     * @param \DateTime $fechanac
     * @return Usuarios
     */
    public function setFechanac($fechanac)
    {
        $this->fechanac = $fechanac;

        return $this;
    }

    /**
     * Get fechanac
     *
     * @return \DateTime 
     */
    public function getFechanac()
    {
        return $this->fechanac;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Usuarios
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Usuarios
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Usuarios
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
     * Set estadoemail
     *
     * @param integer $estadoemail
     * @return Usuarios
     */
    public function setEstadoemail($estadoemail)
    {
        $this->estadoemail = $estadoemail;

        return $this;
    }

    /**
     * Get estadoemail
     *
     * @return integer 
     */
    public function getEstadoemail()
    {
        return $this->estadoemail;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Usuarios
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set datosadic1
     *
     * @param string $datosadic1
     * @return Usuarios
     */
    public function setDatosadic1($datosadic1)
    {
        $this->datosadic1 = $datosadic1;

        return $this;
    }

    /**
     * Get datosadic1
     *
     * @return string 
     */
    public function getDatosadic1()
    {
        return $this->datosadic1;
    }

    /**
     * Set datosadic2
     *
     * @param string $datosadic2
     * @return Usuarios
     */
    public function setDatosadic2($datosadic2)
    {
        $this->datosadic2 = $datosadic2;

        return $this;
    }

    /**
     * Get datosadic2
     *
     * @return string 
     */
    public function getDatosadic2()
    {
        return $this->datosadic2;
    }

    /**
     * Set datosadic3
     *
     * @param string $datosadic3
     * @return Usuarios
     */
    public function setDatosadic3($datosadic3)
    {
        $this->datosadic3 = $datosadic3;

        return $this;
    }

    /**
     * Get datosadic3
     *
     * @return string 
     */
    public function getDatosadic3()
    {
        return $this->datosadic3;
    }

    /**
     * Set iddocumentoTipo
     *
     * @param integer $iddocumentoTipo
     * @return Usuarios
     */
    public function setIddocumentoTipo($iddocumentoTipo)
    {
        $this->iddocumentoTipo = $iddocumentoTipo;

        return $this;
    }

    /**
     * Get iddocumentoTipo
     *
     * @return integer 
     */
    public function getIddocumentoTipo()
    {
        return $this->iddocumentoTipo;
    }

    /**
     * Set idcondicioniva
     *
     * @param integer $idcondicioniva
     * @return Usuarios
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
     * Set fechaultimamod
     *
     * @param \DateTime $fechaultimamod
     * @return Usuarios
     */
    public function setFechaultimamod($fechaultimamod)
    {
        $this->fechaultimamod = $fechaultimamod;

        return $this;
    }

    /**
     * Get fechaultimamod
     *
     * @return \DateTime 
     */
    public function getFechaultimamod()
    {
        return $this->fechaultimamod;
    }
}
