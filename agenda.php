<?php
include "classes/Conexao.php";
include "classes/Agenda.php";

$agenda = new \classes\Agenda();
if (isset($_GET["acao"]))
{
    if ($_GET["acao"] == "cadastrar")
    {
        $agenda->inserir($_POST);
        echo "<script>window.location='agenda.php'</script>";
    }
    if ($_GET["acao"] == "excluir")
    {
        $agenda->apagar($_GET["id"]);
        echo "<script>window.location='agenda.php'</script>";
    }
    if ($_GET["acao"] == "atualizar")
    {
        $agenda->atualizar($_POST);
        echo "<script>window.location='agenda.php'</script>";
    }
}

$lista = $agenda->listar();

?>
<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html>
<html lang="pt" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Agenda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <section>

            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link " aria-current="page" href="index.php">Home</a>
                <a class="flex-sm-fill text-sm-center nav-link active"  href="agenda.php">Agenda</a>

            </nav>
            <br><br>
            <div class="alert alert-primary" role="alert">
                 Agenda
            </div>

        </section>
        <h2><a href="cadastro.php" class="btn btn-success" >  <i class="fas fa-save"></i>  Cadastrar nova Agenda</a></h2>
      <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">alterar</th>
      <th scope="col">excluir</th>
    </tr>
  </thead>
  <tbody>
       <?php while($linha = $lista->fetch_object()) {?>
    <tr>
       
      <td><?php echo $linha->nome; ?></td>
      <td><?php echo $linha->fone; ?></td>
      <td><?php echo $linha->email; ?></td>
      <td> <a href="alterar.php?id=<?php echo $linha->id_agenda; ?>"> <i class="fas fa-edit"></i>  </a></td>
      <td> <a href="agenda.php?acao=excluir&id=<?php echo $linha->id_agenda; ?>"> <i class="fas fa-trash"></i>  </a></td>
       
    </tr>
    <?php } 
       
        ?>
   
  </tbody>
</table>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>


