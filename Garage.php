<?php
class Garage
{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos = [];

    public function __construct(string $_razonSocial, float $_precioPorHora = 0.0){
        $this->_razonSocial = $_razonSocial;
        $this->_precioPorHora =$_precioPorHora;
    }

    public function MostrarGarage() {
        echo "Razon Social: <br/>";

        print $this->_razonSocial;
        echo "<br/>Precio x hora: <br/>";

        print  $this->_precioPorHora;
        echo "<br/>Autos: <br/>";
        foreach ($this->_autos as $auto){
            print Auto::MostrarAuto($auto);
            echo "<br/>";
        }
    }

    public function Equals(Auto $auto){
        return in_array($auto, $this->_autos);
    }

    public function Add(Auto $auto){
        !$this->Equals($auto) && $this->_autos[] = $auto;
    }

    public function Remove(Auto $auto){
        if($this->Equals($auto))
            unset($this->_autos[array_search($auto, ($this->_autos))]);
    }
}
