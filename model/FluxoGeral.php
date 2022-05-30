<?php 
require_once 'Banco.php';
require_once 'Conexao.php';

class FluxoGeral extends Banco{
    private $id_fluxoGeral;
    private $id_usuario; 
    private $nome; 
    private $dt;
    private $valor; 
    private $sts; 
    
    public function getIdFluxoGeral()
    {
        return $this->id_fluxoGeral;
    }
    public function setIdFluxoGeral($id_fluxoGeral)
    {
        $this->id_fluxoGeral= $id_fluxoGeral;
    }
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getDt()
    {
        return $this->dt;
    }
    public function setDt($dt)
    {
        $this->dt = $dt;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function getSts()
    {
        return $this->sts;
    }
    public function setSts($sts)
    {
        $this->sts = $sts;
    }
    public function save(){
        $result = false;
        $conexao = new Conexao();
        if($conn = $conexao->getConection()){
            if($this->id > 0){
                $query = "UPDATE fluxoGeral SET nome = :nome, dt = :dt, valor = :valor, sts =:sts WHERE id_fluxoGeral = :id_fluxoGeral";
               
                $stmt = $conn->prepare($query);
                if($stmt->execute(array(':nome' => $this->nome, ':dt' => $this->dt, ':valor' => $this->valor,':sts' => $this->sts, ':id_fluxoGeral' => $this->id_fluxoGeral))){
                    $result = $stmt->rowCount();
                }
            }
        else{
             $query  = "insert into fluxoGeral (id_fluxoGeral, nome, dt, valor, sts) values (null, :nome, :dt, :valor, :sts )";
         
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':nome'=> $this->nome ,
                                    ':dt'=> $this->dt, 
                                    ':valor'=> $this->valor,
                                    ':sts'=> $this->sts,  
                                        ))){
                                            $result = $stmt->rowCount();
            }
        }
    }
        return $result;
    }
        
    
    public function remove($id_fluxoGeral){
        $result= false;
        $conexao= new Conexao();
        $conn = $conexao -> getConection();
        $query = "DELETE FROM fluxoGeral where id_fluxoGeral = :id_fluxoGeral";
        $stmt = $conn -> prepare($query);
        if($stmt-> execute(array(':id_fluxoGeral' => $id_fluxoGeral))){
            $result= true;
        } 
        return $result;
    }
    public function find($id_fluxoGeral){
        $conexao = new Conexao;
        $conn = $conexao->getConection();
        $query = "SELECT * FROM fluxoGeral WHERE id_fluxoGeral = :id_fluxoGeral";
        $stmt = $conn->prepare($query);
        if($stmt->execute(array(':id_fluxoGeral' => $id_fluxoGeral))){
            if($stmt->rowCount() > 0){
                $result = $stmt->fetchObject(FluxoGeral::class);
            }else{
                $result = false;
            }
        }
        return $result;
    }
    public function count(){
    }
    public function listAll(){
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        $query = "SELECT * FROM fluxoGeral";
        $stmt = $conn->prepare($query);
        $result = array();
        if($stmt->execute()) {
            while($rs = $stmt->fetchObject(FluxoGeral::class)) {
                $result [] = $rs;
            }
        } else {
            $result = false;
        }
        return $result;
    }
}
?>