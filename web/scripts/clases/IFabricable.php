<?php
interface IFabricable{

    public function metodoFabricacion(); // Devuelve los pasos para fabricar el elemento
    public function metodoReciclado(); // Devuelve el método de reciclado que se debe aplicar al elemento según su fabricación.
}