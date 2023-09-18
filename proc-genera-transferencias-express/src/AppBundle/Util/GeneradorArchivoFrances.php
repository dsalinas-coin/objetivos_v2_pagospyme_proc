<?php


namespace AppBundle\Util;

use AppBundle\Model\ArchivoPagoProveedoresFrances;
use AppBundle\Model\Registro10Header;
use AppBundle\Model\Registro20TransferenciaIndividual;

class GeneradorArchivoFrances
{
    public function generarArchivoFrances(ArchivoPagoProveedoresFrances $file, $nombre)
    {
        $output = $this->generarHeader($file->getHeader(),$nombre);
        $secuencia=0;

        foreach($file->getLineas() as $linea){
            /* @var Registro20TransferenciaIndividual $linea */
            $output.="\r\n".$this->generarLineasDetalle($file->getHeader(),$linea,$nombre);
            $secuencia=(int)$linea->getDetalleProveedor()->getNroSecuencia();
        }

        $secuencia++;
        $output.="\r\n".$this->generarFooter($file->getHeader(),$secuencia);

        
        file_put_contents($nombre . ".pap", $output);
        //$archivo = file_put_contents($nombre . ".pap", $output);
        //dump($_SERVER['DOCUMENT_ROOT']."../");
        // Movemos nuestro archivo temporal a la carpeta destino
        //move_uploaded_file($archivo, $_SERVER['DOCUMENT_ROOT']);
    }
    public function generarLineasDetalle(Registro10Header $header,Registro20TransferenciaIndividual $individual,$nombre){
        $registro="";
        $registro.="0306";
        $registro.="020";
        $registro.=$header->getTipoDoc();

        $registro.=str_pad($header->getCuit(),13,"0",STR_PAD_LEFT);

        $registro.=str_pad($individual->getNroSecuencia(),6,"0",STR_PAD_LEFT);

        $registro.=str_pad($individual->getDetalleProveedor()->getNroBeneficiario(),15,"0",STR_PAD_LEFT);
        //$registro.=str_pad(substr($nombre,1),8,"0",STR_PAD_RIGHT); // NUMERO OP
	    $registro.="991".str_pad($individual->getNroSecuenciaOP(),5,"0",STR_PAD_LEFT); // NUMERO OP

        $registro.=str_pad($individual->getImporte()*100,13,"0",STR_PAD_LEFT);
        $registro.=str_pad(" ",14," ",STR_PAD_LEFT);//nro cert ganancias
        $registro.=str_pad(" ",30," ",STR_PAD_LEFT); // regimen ganancias
        $registro.=str_pad("0",13,"0",STR_PAD_LEFT);//imp ret ganancias
        $registro.=str_pad(" ",14," ",STR_PAD_LEFT);//nro cert ret iva
        $registro.=str_pad(" ",30," ",STR_PAD_LEFT);// pc libre llenado
        $registro.=str_pad($nombre,15," ",STR_PAD_RIGHT);// nombre archivo
        $registro.=str_pad(" " ,8," ",STR_PAD_RIGHT);//
        $registro.=" ";
        $registro.=" ";//ipermfin
        if($individual->getEsClienteAjeno()){
            $registro.="S";
        }else{
            $registro.=" ";
        }
        $registro.=str_pad("0",13,"0",STR_PAD_LEFT);//nro cuit repetido, se pone vacio
        $registro.=str_pad(" ",40," ",STR_PAD_LEFT);
        $registro.=$individual->getDetalleProveedor()->getTipoDoc();
        $registro.=$individual->getDetalleProveedor()->getCuitCliente();
        $registro.=$header->getSucCuentaDebito();
        /*$registro.=str_pad("0",8,"0",STR_PAD_LEFT);
        $registro.=str_pad("0",8,"0",STR_PAD_LEFT);
*/
        $registro.=str_pad(" ",8," ",STR_PAD_LEFT);
        $registro.=str_pad(" ",8," ",STR_PAD_LEFT);
        $registro.=str_pad(" ",2," ",STR_PAD_LEFT);
        $registro.="0";
        $registro.="0";
        $registro.="0";
        $registro.=str_pad("0",13,"0",STR_PAD_LEFT);
        $registro.=str_pad(" ",6," ",STR_PAD_LEFT);
        $registro.=str_pad(" ",40," ",STR_PAD_LEFT);
        $registro.=str_pad(" ",506," ",STR_PAD_LEFT);
        $registro.="\r\n";

        //agregamos el registro 90 aca
        $registro.="0306";
        $registro.="090";
        $registro.=$header->getTipoDoc();

        $registro.=str_pad($header->getCuit(),13,"0",STR_PAD_LEFT);

        $registro.=str_pad($individual->getDetalleProveedor()->getNroSecuencia(),6,"0",STR_PAD_LEFT);

        $registro.=str_pad($nombre,15," ",STR_PAD_RIGHT);// nombre archivo
        $registro.=str_pad($individual->getDetalleProveedor()->getNroBeneficiario(),15,"0",STR_PAD_LEFT);

        $registro.="1";
        $registro.=$individual->getDetalleProveedor()->getTipoDoc();
        $registro.=$individual->getDetalleProveedor()->getCuitCliente();
        $registro.=$this->mb_str_pad(substr(utf8_decode($individual->getDetalleProveedor()->getDenProveedor()),0,40),40," ",STR_PAD_RIGHT);
        $registro.="  ";
        $registro.=" ";
        $registro.="00";
        $registro.=str_pad("0",3,"0",STR_PAD_LEFT);
        $registro.=str_pad("0",10,"0",STR_PAD_LEFT);
        $registro.=str_pad($individual->getDetalleProveedor()->getCbu(),22,"0",STR_PAD_LEFT);
        $registro.=str_pad(" ",11," ",STR_PAD_LEFT);
        $registro.=$this->mb_str_pad(substr(utf8_decode($individual->getDetalleProveedor()->getCalle()),0,24),24," ",STR_PAD_RIGHT);
        $registro.=str_pad(" ",5," ",STR_PAD_LEFT);//puerta
        $registro.=str_pad(" ",3," ",STR_PAD_LEFT);//departamento
        $registro.=str_pad(" ",2," ",STR_PAD_LEFT);//piso
        $registro.=str_pad(" ",28," ",STR_PAD_LEFT);//localidad
        $registro.=str_pad(" ",5," ",STR_PAD_LEFT);//codpostal
        $registro.=$individual->getDetalleProveedor()->getProvincia();//provincia
        $registro.=$individual->getDetalleProveedor()->getPais();//pais
        $registro.=str_pad($individual->getDetalleProveedor()->getEmail(),40," ",STR_PAD_RIGHT);// email prov
        $registro.=str_pad(" " ,24," ",STR_PAD_LEFT);//PRO-CALLE-ENTREGA
        $registro.=str_pad(" " ,5," ",STR_PAD_LEFT);//
        $registro.=str_pad(" " ,3," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,2," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,28," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,5," ",STR_PAD_LEFT);//PRO-CPOSTAL-ENTREGA
        $registro.=str_pad(" " ,2," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,3," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,2," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,4," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,4," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,5," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,18," ",STR_PAD_LEFT); //PRO TELET INT
        $registro.=str_pad(" " ,2," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,4," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,4," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,5," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,18," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,25," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,3," ",STR_PAD_LEFT); // PRO AUTORIZA TIP 1
        $registro.=str_pad("0" ,8,"0",STR_PAD_LEFT);
        $registro.=str_pad(" " ,25," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,3," ",STR_PAD_LEFT);//
        $registro.=str_pad("0" ,8,"0",STR_PAD_LEFT);

        $registro.=str_pad(" " ,25," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,3," ",STR_PAD_LEFT);//
        $registro.=str_pad("0" ,8,"0",STR_PAD_LEFT);
        $registro.=str_pad(" " ,100," ",STR_PAD_LEFT);
        $registro.=str_pad(substr($nombre,1) ,8," ",STR_PAD_LEFT);
        $registro.=str_pad(" " ,218," ",STR_PAD_LEFT);

        return $registro;

    }

    public function generarHeader(Registro10Header $header,$nombre){
        $registro="";
        $registro.="0306";
        $registro.="010";
        $registro.=$header->getTipoDoc();
        $registro.=str_pad($header->getCuit(),13,"0",STR_PAD_LEFT);
        $registro.="000000";
        $registro.=$header->getMoneda();//moneda
        $registro.=str_pad($header->getImporteTotal()*100,13,"0",STR_PAD_LEFT);//importe total

        $registro.=$header->getFormaPago();
        $registro.="0";
        $registro.=$header->getDisponPago();
        $registro.="0";
        $registro.=$header->getFechaEmision()->format("Ymd");
        $registro.=$header->getFechaEmision()->format("Ymd");
        $registro.=$header->getFechaEmision()->format("Ymd");

        $registro.=$header->getEntidad();
        $registro.=$header->getSucCuentaDebito();
        $registro.=$header->getDvCuentaDebito();
        $registro.=$header->getTipoCuentaDebito();
        $registro.=$header->getMonedaCuentaDebito();
        $registro.=$header->getNroCuentaDebito();
        $registro.=str_pad($header->getCantidad(),7,"0",STR_PAD_LEFT);
        $registro.=" ";
        $registro.=str_pad(" ",4," ",STR_PAD_LEFT);
        $registro.=str_pad(" ",6," ",STR_PAD_LEFT);
        $registro.=" ";
        $registro.=str_pad($nombre,12," ",STR_PAD_RIGHT);
        $registro.=$header->getFechaEmision()->format("Ymd");

        $registro.=str_pad(" ",20," ",STR_PAD_LEFT);
        $registro.=str_pad(" ",698," ",STR_PAD_LEFT);
        
        return $registro;
    }
    
    private function mb_str_pad( $input, $pad_length, $pad_string = ' ', $pad_type = STR_PAD_RIGHT, $encoding="UTF-8") {
        $diff = strlen( $input ) - mb_strlen($input, $encoding);
        return str_pad( $input, $pad_length + $diff, $pad_string, $pad_type );
    }

    public function generarFooter(Registro10Header $header,$secuencia){
        $registro="";
        $registro.="0306";
        $registro.="095";
        $registro.=$header->getTipoDoc();
        $registro.=str_pad($header->getCuit(),13,"0",STR_PAD_LEFT);
        $registro.=str_pad($secuencia,6,"0",STR_PAD_LEFT);
        $registro.=str_pad($header->getImporteTotal()*100,13,"0",STR_PAD_LEFT);//importe total

        $registro.=str_pad($header->getCantidad(),7,"0",STR_PAD_LEFT);
        $registro.=str_pad($header->getCantidad()*2+2,10,"0",STR_PAD_LEFT);
        $registro.=str_pad(" ",790," ",STR_PAD_LEFT);

        return $registro;
    }
}