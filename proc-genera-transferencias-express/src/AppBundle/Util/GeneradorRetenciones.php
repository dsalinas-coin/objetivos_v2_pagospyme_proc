<?php


namespace AppBundle\Util;


class GeneradorRetenciones
{
    private $infoAfip;
    private $output;

    public function __construct($infoafip, $output)
    {
        $this->infoAfip = $infoafip;
        $this->output = $output;

    }

    public function getRetenciones($cuit, $montoTotal, $exIva, $exGanancias, $medipago = "efectivo")
    {
        $retenciones = array();
        //echo "Estos CUITS vienen de la instancia que se hace desde el archivo GeneraTransferenciasPagoFacil línea 119 y el dump lo vemos en el archivo Generador Retenciones";
	//dump($this->infoAfip[$cuit]);
	//var_dump($this->infoAfip[$cuit]);
	//echo "El siguiente status se pide dentro del switch del archivo GeneradorRetenciones";
	//dump($this->infoAfip["status"]);
	//var_dump($this->infoAfip["status"]);
	//echo "El siguiente dump es para ver que tenemos en infoAfip a esta altura";
	//dump($this->infoAfip[$cuit]);
	//var_dump($this->infoAfip[$cuit]);
	
	if (isset($this->infoAfip[$cuit])) {
            $impuesto = $this->infoAfip[$cuit];
            //dejo fijo el medio de pago, cuando se termine de agregar coin, hay que agregar acá el comportamiento, checkeando tambien la lista de estaciones de servicio y demas
            switch ($impuesto['status']) {
                case "mono":
                    $this->output->writeLn("se quita el cliente " . $cuit . " debido a que es monotributista");
                    break;
                case "cert_error":
                   // $this->output->writeLn("se quita el cliente " . $cuit . " debido a que tiene tira error el certificado " . json_encode($impuesto['detail']));
                    //acá tengo que consultarle a H cuando tomar el criterio violento, por ahora me dijo que no se les retenga a los que dan error en las constancias
                    break;
                case "32_exento":
                    //si es exento de iva, se le cobra 2% de ganancias
                    if ($exGanancias == 0) {
                        $retenciones['ganancias']['alicuota'] = 2;
                        $retenciones['ganancias']['importe'] = round($montoTotal * 0.02, 2);
                    }
                    break;
                case "30_iva":
                    $this->output->writeLn("se usa el cliente " . $cuit . "  es Responsable Inscripto");
                    //0.5 de iva y de ganancias si es efectivo, no pongo el if por ahora porque no está agregado coin todavía, y no solo va a ser poner un if igual
                    //Si es cliente de Tierra del Fuego se le retienen comisiones sin IVA
                    if ($impuesto['provincia'] != 24 && $impuesto['descripcionProvincia'] != 'TIERRA DEL FUEGO') {                        
                        if ($exIva == 0) {
                            $retenciones['iva']['alicuota'] = 0.5;
                            $retenciones['iva']['importe'] = round($montoTotal * 0.005, 2);
                        }
                    }
                    if ($exGanancias == 0) {
                        $retenciones['ganancias']['alicuota'] = 0.5;
                        $retenciones['ganancias']['importe'] = round($montoTotal * 0.005, 2);
                    }
                    break;

            }
        }
        return $retenciones;
    }
}
