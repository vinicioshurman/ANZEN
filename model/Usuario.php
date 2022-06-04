<?php
require_once 'Banco.php';
require_once 'Conexao.php';

class Usuario extends Banco
{

    private $id;
    private $usuario;
    private $email;
    private $senha;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = md5($senha);
    }

    public function save()
    {
        $result = false;
        $conexao = new Conexao();

        if ($conn = $conexao->getConection()) {
            if ($this->id > 0) {
                $query = "UPDATE usuario SET nome = :usuario, email = :email, senha = :senha WHERE id_usuario = :id";

                $stmt = $conn->prepare($query);

                if ($stmt->execute(array(':usuario' => $this->usuario, ':email' => $this->email, ':senha' => $this->senha, ':id' => $this->id_usuario))) {
                    $result = $stmt->rowCount();
                }
            } else {
                $query  = "insert into usuario (id_usuario, nome, email, senha) values (null,:usuario ,:email, :senha)";

                $stmt = $conn->prepare($query);

                if ($stmt->execute(array(
                    ':usuario'=> $this->usuario,
                    ':email' => $this->email,
                    ':senha' => $this->senha
                ))) {
                    $result = $stmt->rowCount();
                }
            }
        }

        return $result;
    }

    public function remove($id)
    {
        $result = false;
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        $query = "DELETE FROM usuario where id = :id";
        $stmt = $conn->prepare($query);
        if ($stmt->execute(array(':id' => $id))) {
            $result = true;
        }
        return $result;
    }

    public function find($id)
    {
        $conexao = new Conexao;
        $conn = $conexao->getConection();
        $query = "SELECT * FROM usuario WHERE id = :id";
        $stmt = $conn->prepare($query);

        if ($stmt->execute(array(':id' => $id))) {
            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchObject(Usuario::class);
            } else {
                $result = false;
            }
        }
        return $result;
    }

    public function count()
    {
    }

    public function listAll()
    {
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        $query = "SELECT * FROM usuario";
        $stmt = $conn->prepare($query);
        $result = array();

        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Usuario::class)) {
                $result[] = $rs;
            }
        } else {
            $result = false;
        }
        return $result;
    }

    public function logar()
    {
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        $query = "SELECT * FROM usuario where nome = :usuario and senha = :senha";
        $stmt = $conn->prepare($query);
        if ($stmt->execute(array(':usuario' => $this->usuario, ':senha' => $this->senha))) {
            if ($stmt->rowCount() > 0) {
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }

}