
<?php
//conectando ao banco
session_start();
$user = "root";
$pass = "";
try{
  $conec = new PDO('mysql:host=Localhost; dbname=tig_unibh',$user,$pass);
  $conec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo 'Erro ao conectar'.$e->getMessage();
}
  //verifica se o array esta vazio

  if(!empty($_POST)){
    //recebendo os dados via Post
    $Nomei = $_POST['nome'];
    $User_type = $_POST['user_type'];
    $Fist_name = $_POST['first_name'];
    $Last_name = $_POST['last_name'];
    $Login = $_POST['login'];
    $Password_confi = $_POST['password_confi'];
    $Email = $_POST['email'];

    try {
      // Seleciona o dado do usuario [ usuario ]
      $logar = $conec->prepare("Select * from user where user = ?  LIMIT 1");
      $logar->bindvalue(1, $Nomei);
      $logar->execute();
      //retornar uma matriz com os valores
      $retorno = $logar->fetchAll();
      // função rowCount() conta quantos dados foram selecionados no script Select do SQL


      if($logar->rowCount() == 1):
          header ('location:Cadastra_user_form.php?msg=1');
      else:
        //testando a senha para ver se é igual
      /*  if($Password_confi == $comp){
          $comp2 = 1;
          $Password_confi = $comp2;
        }*/
        if($Login == $Password_confi){
          //veridicando se o usuario e a senha nao sao nulos
          if($Nomei != "" && $Login!= ""){
              $Password_confi = md5($Password_confi);
              $Login = md5($Login);
            $dados = ("INSERT INTO user(user_type,first_name,last_name,user,password,password_confi,email)
                                VALUES (:User_type,:Fist_name,:Last_name,:Nomei,:Login,:Password_confi,:Email)");
            $stmt = $conec->prepare($dados);
            $stmt -> bindparam(':User_type',$User_type);
            $stmt -> bindparam(':Fist_name',$Fist_name);
            $stmt -> bindparam(':Last_name',$Last_name);
            $stmt -> bindparam(':Nomei',$Nomei);
            $stmt -> bindparam(':Login',$Login);
            $stmt -> bindparam(':password_confi',$Password_confi);
            $stmt -> bindparam(':Email',$Email);
            $result = $stmt->execute(array(':User_type'=>$User_type, ':Fist_name'=>$Fist_name,':Last_name'=>$Last_name,
            ':Nomei'=>$Nomei,':Login'=>$Login,':Password_confi'=>$Password_confi,':Email'=>$Email));
            header('location:../index.php');
          }else{
          }


        }else{
          echo "ERRO SENHA DIFERENTE";

        }


      endif;

    }catch (PDOException $e) {
      echo "Erro" .$e->getFile() .$e->getLine();
    }

  }





?>
