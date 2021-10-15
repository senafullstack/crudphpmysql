<?php
namespace classes;
use classes\Conexao;
Class Agenda extends Conexao{
    public $con ="";
    public function __construct()
    {
      
       $this->con = Conexao::get_conexao();
    }
    
    public function listar(){
        $sql ="select * from agenda order by id_agenda desc";
        
        return $this->con->query($sql);
    }
    public function inserir($dados){
        $nome =   filter_var($dados["nome"],FILTER_SANITIZE_STRING);
        $email =  filter_var($dados["email"],FILTER_SANITIZE_EMAIL);
        $fone =  filter_var($dados["fone"],FILTER_SANITIZE_STRING);
        $insert = "insert into agenda (nome,email,fone) values ('$nome','$email','$fone')";
        
        $this->con->query($insert);
        
    }
    public function apagar($id_agenda){
        $codigo = filter_var($id_agenda,FILTER_SANITIZE_NUMBER_INT);
        $apagar = "delete from agenda where id_agenda={$codigo}";
        
        $this->con->query($apagar);
        
    }
    public function obter($id_agenda){
        $codigo = filter_var($id_agenda,FILTER_SANITIZE_NUMBER_INT);
        $query = "select * from agenda where  id_agenda={$codigo}";
        
        return $this->con->query($query);
        
    }
    
     public function atualizar($dados){
      
        $nome =   filter_var($dados["nome"],FILTER_SANITIZE_STRING);
        $email =  filter_var($dados["email"],FILTER_SANITIZE_EMAIL);
        $fone =  filter_var($dados["fone"],FILTER_SANITIZE_STRING);
        $id_agenda = $dados["id_agenda"];
        $query = "update agenda set nome='{$nome}',email='{$email}',fone='{$fone}' where  id_agenda={$id_agenda}";
      
        
        return $this->con->query($query);
        
    }
    
}