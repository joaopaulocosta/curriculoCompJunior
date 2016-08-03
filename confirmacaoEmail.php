<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<link href="css/padrao.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>
		<title>
			João P. Costa CV
		</title>
	</head>
	<body>
		<a name="Inicial" id="Inicial"></a>
		<header class="container" >
			<div class="row ">
				<div class="md-2 xs-2 sm-2">
				</div>
				<div class="md-10 xs-10 sm-10">
					 <input type="checkbox" id="control-nav" />
  					 <label for="control-nav" class="control-nav"></label>	
  					<label for="control-nav" class="control-nav-close"></label>
					<nav class="centralizar">
						<ul class="list-inline list-unstyled regular">
							<li><a  href="index.html#DadosPessoais">Dados Pessoais</a></li>
							<li><a  href="index.html#FormacaoAcademica">Formação</a></li>
							<li><a  href="index.html#ExperienciaProfissional">Experiência</a></li>
							<li><a  href="index.html#Habilidades">Habilidades</a></li>
							<li><a  href="index.html#Linguas">Línguas</a></li>
							<li><a  href="index.html#Contato">Contato</a></li>
						</ul>
					</nav>
				</div>
							
			</div>
		</header>
		
		
		
		<div class="container">
			<div class="row">
				<div class="md-3 xs-3 sm-3 ">
					<img src="img/foto.png" class="foto">

				</div>
			</div>
		</div>		
		
		<main class="container regular">
			<a name="DadosPessoais" id="DadosPessoais"></a>
			<div class="row dados">
				<div class="md-3 xs-3 sm-3">
				</div>
				<div class="box md-9 xs-9 sm-9">
					
					<h2>Novificação de mensagem</h2>
					<br>
					<p>Mensagem enviada com sucesso!</p>
					<p>Em breve entraremos em contato</p>
					<br>
	
				</div>
			</div>

		</main>
		
		<footer class="container">	
			<div class="row dadosFooter">
				<div class="md-1 xs-1 sm-1">
				</div>
				<div class="md-5 xs-5 sm-5">
					<nav class="centralizar">
						<ul class="list-inline list-unstyled ">
							<li><a title="Facebook" href="https://www.facebook.com/joaopaulomc14"><img src="img/face.png" class="icon" alt="Icone do Facebook"></a></li>
							<li><a title="GitHub" href="https://github.com/joaopaulocosta"><img src="img/git.png" class="icon" alt="Icone do GitHub"></a></li>
							<li><a title="Linkedin" href="https://www.linkedin.com/in/jo%C3%A3o-paulo-costa-466495bb?trk=nav_responsive_tab_profile"><img class="icon" src="img/linkedin.png" alt="Icone do Linkedin"></a></li>
						</ul>	
					</nav>
				</div>
				<div class="md-2 xs-2 sm-2">
					<p class="centralizaTexto copy">&copy; 2016 por <a class="scroll" href="#Inicial">João P. Costa<p>
				</div>
			</div>
		</footer>
		<script type="text/javascript">
			jQuery(document).ready(function($) { 
			    $(".scroll").click(function(event){        
			        event.preventDefault();
			        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
			   });
			});
		</script>
	</body>
</html>

<?php
	header("refresh: 2;index.html");
?>