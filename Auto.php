<?php
class Auto
{
    private string $_color;
    private float $_precio;
    private string $_marca;
    private DateTime $_fecha;

    public function __construct(string $_marca, string $_color, $_precio = 400.0, $_fecha = new DateTime()){
        $this->_color = $_color;
        $this->_marca = $_marca;
        $this->_fecha = $_fecha;
        $this->_precio = $_precio;
    }

    public function AgregarImpuestos( $impuesto) { 
        $this->_precio += $impuesto;
    }

    public static function MostrarAuto(Auto $auto) {
        print $auto->_marca . ' ' . $auto->_color . ' ' . $auto->_precio . ' ' .  $auto->_fecha->format('Y-m-d H:i:s');
    }

    public function Equals(Auto $auto) {
        return $this->_marca === $auto->_marca;
    }

    public static function Add(Auto $auto1, Auto $auto2) {
        if($auto1->Equals($auto2) && $auto1->_color === $auto2->_color){
            return ($auto1->_precio + $auto2->_precio);
        }
        echo 'No fue exitoso';
        return 0;
    }
}
