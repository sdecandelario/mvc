<?php

require_once(__DIR__.'/../modelo/productos-modelo.php');

$producto = new Productos_modelo(); //Instanciamos la clase y a la vez se ejecuta el constructor

$arrayproductos = $producto->get_productos(); //creo un array y le digo que es igual a lo que le pase el metodo get_productos()

require_once(__DIR__.'/../vista/productos-view.php');
