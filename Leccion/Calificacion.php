<?php

class Calificacion
{
    private $id;
    private $nombre;
    private $parcial;
    private $nFinal;
    private $mejoramiento;
    private $notaPromedio;
    
     function __construct($id, $nombre, $parcial, $nFinal, $mejoramiento, $notaPromedio) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
       $this->nFinal = $nFinal;
       $this->mejoramiento = $mejoramiento;
       $this->notaPromedio = $notaPromedio;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     }
     function setFinal($nFinal){
       $this->nFinal = $nFinal;
     } 
     function getFinal(){
       return $this->nFinal;
     }
     function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     }
     function setPromedio($notaPromedio){
       $this->notaPromedio = $notaPromedio;
     } 
     function getPromedio(){
       return $this->notaPromedio;
     }
}

?> 
