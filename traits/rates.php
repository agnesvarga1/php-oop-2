<?php

trait ProductRates{
    protected $rate;

    public function getRating(){
        return $this->rate;
    }

    public function setRating($rate){
        if(!is_numeric($rate)){
            throw new InvalidArgumentException('Argomento non valido inserire un numero');
        }elseif ($rate< 0 || $rate > 5 ) {
            throw new RangeException( "Inserire un valore compreso tra l'anno 1000 e l'anno corrente");
        }else{
            $this->rate = $rate;
        }
     
    }
}
