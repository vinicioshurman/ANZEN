<?php
require_once './model/FluxoGeral.php';

class FluxoGeralController{
    public static function salvar(){
       
        $fluxoGeral = new FluxoGeral();
        $fluxoGeral->setNome($_POST['nome']);
        $fluxoGeral->setDt($_POST['dt']);
        $fluxoGeral->setValor($_POST['valor']);
        $fluxoGeral->setSts($_POST['sts']);
        $fluxoGeral->save();
    }

    public static function editar($id_fluxoGeral){
        $fluxoGeral = new FluxoGeral;
        $fluxoGeral = $fluxoGeral->find($id_fluxoGeral);
        return $fluxoGeral;
    }

    public static function listar(){
        $fluxoGerals = new FluxoGeral;
        return $fluxoGerals->listAll();
    }
    public static function excluir($id_fluxoGeral)
    {
        $fluxoGeral = new FluxoGeral;
        $fluxoGeral = $fluxoGeral-> remove($id_fluxoGeral);
    }
}
?>