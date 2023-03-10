<?php
include("conexao.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Karoline Marques- Entrar</title>
		<meta charset="UTF-8" />
		<style>

			@font-face {
				font-family:Mulish;
				src: url(fonte/Mulish);
			}
            *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

.btnn{
    padding: 2px 19px ;
    background:#ffffff;
    color:#6B8E23;
    border-radius: 10px;
    font-weight: 300;
    font-size: 15px;
    text-decoration: none;
    font-family: 'Questrial', sans-serif;
    float: right;


}

.btnn:hover{
    background: #ffffff;
    transform: scale(1.1);
    border: 1px solid #6B8E23;

}
body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #333;
	text-transform: uppercase;
	font-size: 2.9rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #38d39f;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #38d39f;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #38d39f;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}
		</style>
	</head>
	<body>
	<body>
    <img class="wave" src="wave.png">
	<br>
	

	<a href="index.html" class="btnn">SAIR</a>
	<div class="container">
	
		<div class="img">
			<img src="bg.png">
		</div>
		<div class="login-content">
			<form action="painel.html">
				<img src="avatar.png">
				<h2  style="color:#6B8E23" class="title">BEM-VINDO</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuário</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="ENTRAR">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
			<?php
				/* Declaração de Variáveis */
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'teste@teste.com';
				$pass1 = 'teste';
				
				$user2 = 'teste1';
				$pass2 = '1';
				
				/* Testa se o botão submit foi ativado */
				if($submit){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					if($user == "" || $pass == ""){
						echo "<script>alert('Por favor, preencha todos os campos!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.html");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}
				}
			?>

		</div>
	</body>
</html>			