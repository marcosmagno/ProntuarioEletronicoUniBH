
<html >
<head>
  <meta charset="UTF-8" />
  <title>Cadastro</title>
</head>

<body>
  <form action='Files-Security/Cadastra_user.php' method="post">
    <fieldset>
      <legend>Cadastro de Usuarios</legend>
      <label>Nivel Hierárquico</labe>    <input type="texto" name="user_type"/> </br>
      <label>Primeiro Nome</label>       <input type="texto" name="first_name"/> </br>
      <label>Ultimo Nome</labe>          <input type="texto" name="last_name"/> </br>
      <label>usuario</labe>              <input type="texto" name="nome"/> </br>
      <label>Senha</label>               <input type="password" name="login"/> </br>
      <label>Confirmação Senha</labe>    <input type="password" name="password_confi"/> </br>
      <label>Email</label>               <input type="texto" name="email"/> </br>

      <!--<label>Foto</label> <input type="password" name="picture"/> </br>
      <label>Id Funcionario</labe> <input type="texto" name="ide"/> </br>-->
      <input type='submit' value='Cadastrar' style="width:90;height:40"/>
    </fieldset>
    <?php
    if (isset($_GET['msg']) && $_GET['msg'] == 1) {
      echo 'JÀ EXISTE UM USUARIO CADASTRADO';
    }
    ?>
  </form>
</body>
</html>
