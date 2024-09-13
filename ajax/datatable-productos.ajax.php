<?php

class TablaProductos{
    /* MOSTRAR TABLA DE PRODUCTOS */
    public function mostrarTablaProductos(){
        echo '{
            "data": [
                [
                    "1",
                    "vistas/img/productos/default/anonymous.png",
                    "101",
                    "Aspiradora Industrial",
                    "Taladros",
                    "20",
                    "Q55",
                    "Q120",
                    "2021-10-03 10:05:03",
                    "BOTONES"
                ],
                [
                    "2",
                    "vistas/img/productos/default/anonymous.png",
                    "102",
                    "ServoMotores",
                    "Equipo Industrial",
                    "20",
                    "Q55",
                    "Q120",
                    "2021-10-03 10:05:03",
                    "BOTONES"
                ]
            ]
        }';
    }
}

/* ACTIVANDO LA TABLA DE PRODUCTOS */
$activarProductos = new TablaProductos();
$activarProductos -> mostrarTablaProductos();