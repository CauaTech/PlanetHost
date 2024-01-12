<?php 
$int = 1;
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
	<title>Termos de Serviço (Terms of Service)</title>
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

<div class="termo-planet">
	<div class="container">
		<div class="ttitle-planet">
			Termos De Serviço
		</div>
		<div class="tsub-title">
			Bem-vindo à PlanetHost! Ao utilizar nossos serviços de hospedagem de servidores de jogos, você concorda em cumprir os seguintes termos e condições. Por favor, leia atentamente:
		</div>
		<div class="ttermos-title">
			Uso Aceitavel
		</div>
		<div class="ttermos-text">
			- Você concorda em utilizar nossos serviços apenas para fins legais e em conformidade com todas as leis e regulamentos aplicáveis.
		</div>
		<div class="ttermos-text">
			- Você não deve envolver-se em atividades que possam causar danos, sobrecarregar ou prejudicar nossos servidores ou a experiência de outros usuários.
		</div>
		<div class="ttermos-title">
			Responsabilidade dos Usuarios
		</div>
		<div class="ttermos-text">
			- Você é o único responsável por todo o conteúdo, atividades e uso do seu servidor hospedado pela PlanetHost.
		</div>
		<div class="ttermos-text">
			- Você concorda em respeitar os direitos de propriedade intelectual e não infringir os direitos autorais ou marcas registradas de terceiros.
		</div>
		<div class="ttermos-title">
			Segurança e Privacidade
		</div>
		<div class="ttermos-text">
			- Implementamos medidas de segurança para proteger seus dados e informações, mas não podemos garantir a segurança absoluta.
		</div>
		<div class="ttermos-text">
			- Ao utilizar nossos serviços, você concorda em cumprir nossa Política de Privacidade e nos autoriza a coletar, armazenar e processar suas informações pessoais conforme necessário.
		</div>
		<div class="ttermos-title">
			Pagamento e Renovação
		</div>
		<div class="ttermos-text">
			- Você concorda em pagar pelos serviços de acordo com os planos e preços estabelecidos.
		</div>
		<div class="ttermos-text">
			- Os serviços serão renovados automaticamente, a menos que você solicite o cancelamento antes do período de renovação.
		</div>
		<div class="ttermos-title">
			Suporte Técnico
		</div>
		<div class="ttermos-text">
			- Oferecemos suporte técnico 24/7 para auxiliá-lo com questões relacionadas aos nossos serviços de hospedagem de servidores.
		</div>
		<div class="ttermos-text">
			- Faremos o possível para responder prontamente, mas não podemos garantir tempos de resposta específicos.
		</div>
		<div class="ttermos-title">
			Limitação de Responsabilidade
		</div>
		<div class="ttermos-text">
			- Em nenhuma circunstância a PlanetHost será responsável por quaisquer danos diretos, indiretos, incidentais, especiais ou consequentes decorrentes do uso ou incapacidade de usar nossos serviços.
		</div>
		<div class="ttermos-text">
			- Você concorda em respeitar os direitos de propriedade intelectual e não infringir os direitos autorais ou marcas registradas de terceiros.
		</div>
		<div class="ttermos-title">
			Alterações nos Termos de Serviço
		</div>
		<div class="ttermos-text">
			- Reservamo-nos o direito de modificar estes Termos de Serviço a qualquer momento. Notificaremos você sobre quaisquer alterações significativas e as alterações entrarão em vigor a partir da data especificada.
		</div>
		<div class="ttermos-footer">
			Ao utilizar nossos serviços, você reconhece e concorda em cumprir estes Termos de Serviço. Se você não concordar com algum destes termos, pedimos que não utilize nossos serviços.
		</div>
		<div class="ttermos-footer">
			Se você tiver alguma dúvida sobre estes Termos de Serviço, entre em contato conosco.
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