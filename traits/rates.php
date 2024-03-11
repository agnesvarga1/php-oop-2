<?php

trait ProductRates{
    protected $rate;

    public function getRating(){
        return $this->weight;
    }

    public function setRating($rate){
        $this->rate = $rate;
    }
}
