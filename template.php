<?php
include('../db/bancodedados.php');
include('../auth/controle.php');
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Hippo | Usuários
    </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/1defc9531d.js">
    </script>
    <link rel="stylesheet" href="../css/estilo.css">
  </head>
  <body>
    <div class="all">
 <aside class="lateral">
            <div class="logo">
                <a href="../menu"><img src="../img/logo.jpg" alt="Logo Hippo" /></a>
            </div>
            <nav>
                <ul>
                    <li><a href="../menu"><i class="fa fa-th-large" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="../cat"><i class="fa fa-folder-o" aria-hidden="true"></i>Categoria</a></li>
                    <li><a href="../product"><i class="fa fa-tag" aria-hidden="true"></i>Produtos</a></li>
                    <li class="ativo"><a href="../user"><i class="fa fa-user-o" aria-hidden="true"></i>Usuários</a></li>
                    <li><a href="../?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
                </ul>
            </nav>
        </aside>
      <div class="conteudo">
        <header>
          <div class="barra-superior">
            <p><i class="fa fa-user" aria-hidden="true"></i>Usuários
            <p>Olá, <?php echo $_SESSION['nomeUsuario'];?> <a href="../?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></p>
          </div>
        </header>
        <section>
          <div class="container">
            <div class="header_search">
              
              <a href="../user/?cadastrar=1"><i class="fa fa-plus usuario" aria-hidden="true"></i>Cadastrar Usuário</a>
                            
            </div>
            <?php
if(isset($msg))
echo "	<br><center><b><font color='green'>
$msg</font></b></center><br>";
if(isset($erro))
echo "	<br><center><b><font color='red'>
$erro</font></b></center><br>";
?>
            <table>
              <thead>
                <tr>
                  <th>ID
                  </th>
                  <th>Login
                  </th>
                  <th>Nome
                  </th>
                  <th>Perfil
                  </th>
                  <th>Ativo
                  </th>
                  <th>Editar
                  </th>
                  <th>Excluir
                  </th>
                </tr>
              </thead>
              <?php
foreach($usuarios as $idUsuario => $dadosUsuario){
echo "	<tr>
<td>$idUsuario</td>
<td>{$dadosUsuario['loginUsuario']}</td>
<td>{$dadosUsuario['nomeUsuario']}</td>
<td>{$dadosUsuario['tipoPerfil']}</td>
<td>";
					if($dadosUsuario['usuarioAtivo'] == 1) {
						echo '<i class="fa fa-check" aria-hidden="true"></i>';
					}else {
						echo '<i class="fa fa-times" aria-hidden="true"></i>';
					}
					echo "</td>
<td><a class='editar' href='?editar=$idUsuario'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>
<td><a class='excluir' href='?excluir=$idUsuario'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td>
</tr>";
}
?>
            </table>
          </div>
          <!-- FIM CONTAINER SECTION -->
        </section>
      </div>
      <!-- FIM CONTEUDO -->
    </div>
  </body>
</html>