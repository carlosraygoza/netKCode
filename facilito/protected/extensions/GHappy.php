<?php
class GHappy extends CApplicationComponent{
    public function init(){ //init es palabra reservada
        echo "Inicializado";
    }
    
    public function hi(){
        return "Hello all";
    }
}