<?php
class BMI{
    public $berat, $tinggi;
    
    function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function nilai_bmi()
    {
        $tinggi = $this->tinggi / 100;
        return sprintf("%.1f", $this->berat / ($tinggi * $tinggi)); 
    }

    public function status_bmi()
    {
        if ($this->nilai_bmi() <= 18.5) {
            $status = "Kekurangan Berat Badan";
        }elseif ($this->nilai_bmi() > 18.5 && $this->nilai_bmi() <= 24.9) {
            $status = "Normal (Ideal)";
        }elseif ($this->nilai_bmi() >= 25 && $this->nilai_bmi() <= 29.9) {
            $status = "Kelebihan Berat Badan";
        }else {
            $status = "Obesitas";
        }
        return $status;
    }
}
?>
