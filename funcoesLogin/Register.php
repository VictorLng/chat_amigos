<?php
include("conexao.php");

if(isset($_POST["email"]) || isset($_POST["senha"]) || isset($_POST["nome"])) {

    if(strlen($_POST["nome"]) == 0){
        echo "preencha seu Nome!";
    }else if(strlen($_POST["senha"]) == 0){
         echo "preencha sua Senha!";
        
    }else if(strlen($_POST["email"]) == 0){
        echo "preencha seu Email!";
    }else{
        $nameSanit  = $mysqli->real_escape_string($_POST["nome"]);
        $emailSanit = $mysqli->real_escape_string($_POST["email"]);
        $senhaSanit = $mysqli->real_escape_string($_POST["senha"]);
        
        $sql_code = "INSERT INTO usuarios (email, senha, nome) VALUES ('$emailSanit' ,'$senhaSanit' ,'$nameSanit')";
        
        $sql_query = $mysqli->query($sql_code) or die("falha ao carregar o SQL [ERROR]:" .$mysqli->error);
        
        header("Location:Login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <title>Form-login</title>
    <style>
     body{
        background: #101026;
        background-repeat: no-repeat;
        background-size: 100% 1080px;
      }
      #Formulario {
        padding: 20px;
        padding-left: 10px;
        background: linear-gradient(45deg, #808080, #968A87, #8C827E, #96878F, #8C7E8C);
        border-radius: 10px;
        max-width: 300px;
        position: absolute;
        top: 25%;
        left: 50%; 
        transform: translateX(-50%); 
        box-shadow: 0px 0px 19px rgb(0, 0, 0, 0.5);
        font-family: 'Lato', sans-serif;
        perspective: 1080px;
        text-align: center;
        display: flex; 
        flex-direction: column; 
        align-items: center; 
      }
      #email{
        padding: 15px;
        border-radius: 15px;
        box-shadow: 0px 0px 19px rgb(0,0,0,0.30);
        border:none;
      }
      #Password{
        padding: 15px;
        border-radius:15px;
        box-shadow: 0px 0px 19px rgb(0,0,0,0.30);
        border:none;
      }
      #nome{
        padding: 15px;
        border-radius: 15px;
        box-shadow: 0px 0px 19px rgb(0,0,0,0.30);
        border:none;
      }
      #Butn{
        width: 287px;
        padding:15px;
        border-radius: 5px;
        border:none;
        color: beige;
        background: #101026;
        cursor: pointer;
        translate: 5px;
        transition: all 0.3s;
        font-size: 20px;
      }
      #Butn:hover{
        background: #101026;
        color: #ffff;
        transform: scale(1.01);
        box-shadow:0px 0px 15px #292A42;
      }
      .scale{
       width: 260px;
       font-size: 15px;
        transform: scaleX(1)  translateX(8px);
        
       transition:0.3s all;
     
      }
      
    </style>
</head>

<body>
 <div id="Formulario"> 
  <img id="Logo" src="">
   <form action="" method="POST" autocomplete="off" >
       <p id="LB-name">
           <input type="text" name="nome" id="nome" placeholder="Nome" onclick="sizer(nome)">
       </p>
       
       <p id="LB-email">
           <input type="email" name="email" id="email" placeholder="E-mail" onclick="sizer(email)">
        </p>
        
        <p id="LB-senha">
            <input type="password" name="senha" id="Password" placeholder="senha" onclick="sizer(senha)">
        </p>
    <p>
        <button type="submit" id="Butn">Register</button>
    </p>
    
</div>  



    </form>
    <script>
      let name = document.getElementById("nome");
      let email = document.getElementById("email");
      let senha = document.getElementById("senha");
         
      function sizer(element){
        element.classList.add("scale")
       
      } 
      
      
    </script>
</body>
</html>