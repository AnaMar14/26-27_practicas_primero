<?php
interface IFabricable{

    public function metodoFabricacion():string; // Devuelve los pasos para fabricar el elemento
    public function metodoReciclado():string; // Devuelve el método de reciclado que se debe aplicar al elemento según su fabricación.
}