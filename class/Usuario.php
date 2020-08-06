<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;
    //============
    public function getIdusuario(){
        $this->idusuario;
    }
    
    public function setIdusuario($value){
        return $this->idusuario = $value;
    }
    //============
    public function getDeslogin(){
        $this->deslogin;
    }

    public function setDeslogin($value){
        return $this->deslogin = $value;
    }
    //============
    public function getDessenha(){
        $this->dessenha;
    }

    public function setDessenha($value){
        return $this->dessenha = $value;
    }
    //============
    public function getDtcadastro(){
        $this->dtcadastro;
    }

    public function setDtcadastro($value){
        return $this->dtcadastro = $value;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($results) > 0){

            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            //$this->setDtcadastro(new DateTime($row['dtcadastro']));
            $this->setDtcadastro($row['dtcadastro']);

        }

    }

    public function __toString(){
        
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()
        ));

    }

}

?>