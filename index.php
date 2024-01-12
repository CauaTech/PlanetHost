<?php 
$int = 0;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>Bem-vindo à PlanetHost - Hospedagem de Servidores de Jogos de Alta Performance</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="Explore a PlanetHost, sua solução premium em hospedagem de servidores de jogos. Desfrute de alta performance, proteção avançada contra DDoS e suporte técnico especializado. Personalize seu servidor e experimente a conexão global rápida e estável. Junte-se a nós e eleve sua experiência de jogo a um novo patamar!">
	
	<meta name="robots" content="all">
	<meta name="author" content="VortexStudio">

	<meta name="keywords" content="hospedagem de servidores de jogos, alta performance, servidores dedicados, proteção contra DDoS, suporte técnico especializado, conexão global, personalização de servidores, Minecraft, jogos online, hospedagem premium, serviços de hospedagem, melhor experiência de jogo, planos de hospedagem, uptime garantido, mundo dos jogos, experiência de jogo aprimorada, multiplayer, comunidade de jogadores, jogo sem interrupções, velocidade de conexão">

	<link rel="canonical" href="https://planethost.cloud"/>
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://planethost.cloud/assents/img/4.png">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:image" content="https://planethost.cloud/assents/img/4.png">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body>

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->

<div class="header-planet">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="margin-header">
					<div class="mtitle-header">
						A melhor hospedagem de Minecraft do mercado
					</div>
					<div class="ltitle-header">
						MINECRAFT SERVER HOSPEDAGEM
					</div>
					<div class="subtitle-header">
						Descubra o poder dos seus jogos. Experimente a hospedagem de servidores de última geração da PlanetHost hoje mesmo!
					</div>
					<div class="ctb-header">
						<a href="#" class="btn btn-title">Comece agora!</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 d-md-block d-none">
				<div class="margin-header">
					<center>
						<img class="fluter" width="500vh" src="<?php echo $flow ?>assents/img/Site.png">
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="beneficios-planet">
	<div class="container">
		<div class="title-beneficios">
			Beneficios
		</div>
		<div class="bitem-planet">
			<div class="row">
				<div class="col-md-3">
					<div class="card card-beneficios">
						<div class="card-body">
							<center>
								<i class="fi fi-rr-bolt cicon-beneficios"></i>
								<div class="ctitle-beneficios">
									Alta Perfomance
								</div>
								<div class="cdescri-beneficios">
									Experimente uma hospedagem de servidores de jogos com desempenho excepcional. Desfrute de velocidade rápida, baixa latência e jogabilidade suave.
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-beneficios">
						<div class="card-body">
							<center>
								<i class="fi fi-rr-shield-check cicon-beneficios"></i>
								<div class="ctitle-beneficios">
									Proteção avançada contra DDoS
								</div>
								<div class="cdescri-beneficios">
									Mantenha seus servidores protegidos contra ataques DDoS. Nossa infraestrutura robusta garante a estabilidade e a segurança necessárias para uma experiência de jogo sem interrupções.
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-beneficios">
						<div class="card-body">
							<center>
								<i class="fi fi-rr-phone-call cicon-beneficios"></i>
								<div class="ctitle-beneficios">
									Suporte técnico especializado
								</div>
								<div class="cdescri-beneficios">
									Conte com nossa equipe de suporte técnico especializada disponível 12 horas por dia, 7 dias por semana. Estamos prontos para ajudar você a solucionar qualquer problema e garantir uma experiência de jogo sem complicações.
								</div>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card card-beneficios">
						<div class="card-body">
							<center>
								<i class="fi fi-rr-world cicon-beneficios"></i>
								<div class="ctitle-beneficios">
									Conexão global
								</div>
								<div class="cdescri-beneficios">
									Com servidores localizados estrategicamente em várias regiões, oferecemos uma conexão estável e de baixa latência para jogadores ao redor do mundo. Jogue com seus amigos sem fronteiras!
								</div>
							</center>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="planos-planet">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="pimg-planet">
					<center>
						<img width="250vh" src="<?php echo $flow ?>assents/img/4.png">
					</center>
				</div>
			</div>
			<div class="col-md-6">
				<center>
					<div class="ptitle-planet">
						Servidores BR: Hospedagem de Alta Qualidade a Preços Acessíveis
					</div>
					<div class="price-planet">
						R$ 12/3GB
					</div>
					<div class="pcomprar-planet">
						<a href="#" class="btn btn-plano">Comece agora!</a>
					</div>
				</center>
			</div>
		</div>
	</div>
</div>
<div class="localidade-planet">
	<div class="container">
		<div class="ltitulo-planet">
			Localização
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="card lcard-planet">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<img width="70vh" src="<?php echo $flow ?>assents/img/brasil.png">
							</div>
							<div class="col-md-6">
								<div class="ltext-title">
									Hospedagem Brasil
								</div>
								<div class="ltext-ping">
									10ms a 40ms
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card lcard-planet">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<img width="70vh" src="<?php echo $flow ?>assents/img/canada.png">
							</div>
							<div class="col-md-6">
								<div class="ltext-title">
									Hospedagem Canada
								</div>
								<div class="ltext-ping">
									Em Breve
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="promocao-planet">
	<div class="container">
		<div class="card rcard-planet">
			<div class="card-body">
				<div class="rtitle">
					PROMOÇÃO DE ABERTURA
				</div>
				<div class="rsub-title">
					Grande Promoção de Abertura: Descubra a PlanetHost e eleve sua experiência de jogo a um novo patamar!
				</div>
				<div class="rtexto">
					Para celebrar nossa chegada, estamos oferecendo uma promoção imperdível. 
					Aproveite descontos exclusivos em todos os nossos planos de hospedagem de servidores de jogos.
					Seja você um jogador casual ou um mestre dos games, temos o plano perfeito para atender às suas necessidades.
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>