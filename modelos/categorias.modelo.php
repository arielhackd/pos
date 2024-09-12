<?php
require_once "conexion.php";

class ModeloCategorias{
    static public function mdlIngresarCategoria($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(categoria) VALUES (:categoria)");
        $stmt->bindParam(":categoria", $datos, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt-> close();
        $stmt = null;
    }

    static public function mdlMostrarCategorias($tabla, $item, $valor){
        if($item!=null){
            $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $statement -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $statement -> execute();
            return $statement -> fetch();
        }else{
            $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $statement -> execute();
            return $statement -> fetchAll();
        }
        $statement -> close();
        $statement = null;
    }

    static public function mdlEditarCategoria($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET categoria = :categoria WHERE id = :id");
        $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt-> close();
        $stmt = null;
    }

    static public function mdlBorrarCategoria($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt-> close();
        $stmt = null;
    }
}