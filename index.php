<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Jessica Castro - Web Developer</title>

		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		
		<!-- HEADER -->
		
			<header>
				<div class="container">
					<div class="nomeTitulo">
						<h1>Jessica Castro</h1>
						<p>Desenvolvedora Front-End</p>
					</div><!--nomeTitulo-->

					<nav class="desktop">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Sobre</a></li>
							<li><a href="#">Serviços</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</nav><!--desktop-->

					<nav class="mobile">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Sobre</a></li>
							<li><a href="#">Serviços</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</nav><!--mobile-->

					<div class="clear"></div>
				</div><!--container-->
			</header>
			

			<section id="sobre" class="sobre">
				<div class="container">
					<div class="image w50">
						<div class="foto"></div>
					</div>

					<div class="info w50">
						<br><br>
						<p>Meu nome é Jessica Castro, tenho 22 anos e curso Ciência da Computação na instituição de ensino superior Unicarioca. Trabalho na área de tecnologia desde os 16 anos. Resolvi me especializar em FrontEnd aos 20, ao ir em uma conferência referente ao assunto no Rio de Janeiro chamada Front-End Carioca. Desde então, realizei diversos cursos sobre o assunto para aprimorar minhas skills e me infiltrei em diversos projetos na minha empresa de atuação (IBM) como responsável pelo front dos projetos. </p>
						<br>
						<p>Abaixo apresento algumas das minhas skills:</p>

						<div class="skills w33">
							<span>
								<i class="fa fa-html5"></i>
								<p>HTML5</p>
							</span>
						</div>

						<div class="skills w33">
							<span>
								<i class="fa fa-css3"></i>
								<p>CSS3</p>
							</span>
						</div>

						<div class="skills w33">
							<span>
								<i class="fa fa-diamond"></i>
								<p>JQuery</p>
							</span>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</section> <!--sobre-->

			<section id="servicos" class="servicos">
				<div class="container">
					<h1>SERVIÇOS DISPONÍVEIS</h1>

					<div class="w33 serv1">
						<i class="fa fa-cube"></i>
						<h2>Layouts</h2>
						<p>Com total participação do cliente, criaremos um layout responsivo e minimalista.</p>
					</div>

					<div class="w33 serv1">
						<i class="fa fa-info-circle"></i>
						<h2>Landing Pages</h2>
						<p>Landing pages são muito úteis para quem quer um site limpo e objetivo.</p>
					</div>

					<div class="w33 serv1">
						<i class="fa fa-commenting"></i>
						<h2>Blogs</h2>
						<p>Trate do seu assunto preferido com um blog totalmente e visualmente criado por você.</p>
					</div>


					<p class="info-x">Para outros diversos serviços entre em contato pelo formulário abaixo. Estarei respondendo dúvidas e orçamentos através do mesmo.</p>

					<div class="clear"></div>
				</div>
			</section><!--servicos-->


			<section id="contato" class="contato">
				<div class="container">
					<h1>ENTRE EM CONTATO</h1>

					<div class="formulario">
						<form>
						<input type="text" name="nome" placeholder="Nome">
						<input type="email" name="email" placeholder="email@exemplo.com">
						<textarea></textarea>
						<button type="submit" name="enviar"><i class="fa fa-send"></i> Enviar</input>
					</form>
					</div>
				</div><!--container-->
			</section><!--contato-->

			<footer>
				<div class="container">
					<p class="w50 p1">Todos os direitos reservados &copy; Jessica Castro - 2018 </p>

					<p class="w50 p2">Redes sociais</p>
					<span><i class="fa fa-facebook"></i></span>
					<span><i class="fa fa-twitter"></i></span>
					<span><i class="fa fa-github"></i></span>

					<div class="clear"></div>
				</div>
			</footer>

	</body>
</html>