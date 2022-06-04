<?php
require_once 'model/Usuario.php';

class UsuarioController
{
    public static function cadastro()
    {
        $usuario = new Usuario();
        $usuario->setUsuario($_POST['usuario']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha($_POST['senha']);
        $usuario->save();
    }

    public static function logar()
    {
        $usuario = new Usuario();
        $usuario->setUsuario($_POST['usuario']);
        $usuario->setSenha($_POST['senha']);

        return $usuario->logar();
    }

    public static function editar($id)
    {
        $usuario = new Usuario;
        $usuario = $usuario->find($id);
        return $usuario;
    }

    public static function listar()
    {
        $usuarios = new Usuario;
        return $usuarios->listAll();
    }

    public static function excluir($id)
    {
        $usuario = new Usuario;
        $usuario = $usuario->remove($id);
    }
}
