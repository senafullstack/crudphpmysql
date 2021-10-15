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
        $nome = $dados["nome"];
        $email = $dados["email"];
        $fone = $dados["fone"];
        $insert = "insert into agenda (nome,email,fone) values ('$nome','$email','$fone')";
        
        $this->con->query($insert);
        
    }
    public function apagar($id_agenda){
      
        $apagar = "delete from agenda where id_agenda={$id_agenda}";
        
        $this->con->query($apagar);
        
    }
    public function obter($id_agenda){
      
        $query = "select * from agenda where  id_agenda={$id_agenda}";
        
        return $this->con->query($query);
        
    }
    
     public function atualizar($dados){
        $nome = $dados["nome"];
        $email = $dados["email"];
        $fone = $dados["fone"];
        $id_agenda = $dados["id_agenda"];
        $query = "update agenda set nome='{$nome}',email='{$email}',fone='{$fone}' where  id_agenda={$id_agenda}";
      
        
        return $this->con->query($query);
        
    }
    
}