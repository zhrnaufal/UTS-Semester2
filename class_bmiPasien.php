<?php
require_once "class_pasien.php";
require_once "class_bmi.php";
class BMI_Pasien extends BMI{
    public $id, $tanggal;

    function __construct($id, $tanggal, $tinggi_p, $berat_p)
    {
        parent::__construct($berat_p, $tinggi_p);
        $this->id = $id;
        $this->tanggal = $tanggal;
    }
}

?>
