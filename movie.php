<?php 
class Movie{
    public $titolo;
    public $durata= 0;
    public $lingua;
    public $gen;

    function __construct($titolo , $lingua , Genere $gen)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->gen = $gen;
    }
    public function getDurata($durata){
        $this->durata= $durata;
        if($durata < 30){
            $this->durata = 'Cortometraggio';
        }elseif ($durata >= 30 && $durata <= 90){
            $this->durata = 'Film';
        }else{
            $this->durata = 'Pippone';
        }
    }

}

?>