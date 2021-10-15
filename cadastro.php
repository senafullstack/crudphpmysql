<?php
include "classes/Conexao.php";
include "classes/Agenda.php";

$agenda = new \classes\Agenda();
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
                    <i class="fas fa-save"></i>     Cadastrar nova agenda
                    </div>

                    </section>

                    <div class="container">
                        <form method="POST" action="agenda.php?acao=cadastrar" enctype="multipart/form-data">
                             <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control"  aria-describedby="emailHelp">
                                    
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email </label>
                                <input type="email" name="email" class="form-control"  aria-describedby="emailHelp">
                                  
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Telefone</label>
                                <input type="text" name="fone" class="form-control" id="exampleInputPassword1">
                            </div>
                           
                            <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Cadastrar</button>
                        </form>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    </body>
                    </html>


