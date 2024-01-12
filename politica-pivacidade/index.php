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
	<title>Politíca & Privacidade</title>
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
			Política de Privacidade
		</div>
		<div class="tsub-title">
			Na PlanetHost, valorizamos a privacidade dos nossos usuários. Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos suas informações pessoais. Leia atentamente:
		</div>
		<div class="ttermos-title">
			Coleta de Informações
		</div>
		<div class="ttermos-text">
			- Podemos coletar informações pessoais, como nome, endereço de e-mail e informações de pagamento, quando você se cadastra em nossos serviços.
		</div>
		<div class="ttermos-text">
			- Também podemos coletar informações não pessoais, como dados de uso, endereço IP e cookies, para melhorar sua experiência e oferecer suporte técnico.
		</div>
		<div class="ttermos-title">
			Uso das Informações
		</div>
		<div class="ttermos-text">
			-Utilizamos suas informações pessoais para fornecer nossos serviços, processar pagamentos, responder a solicitações de suporte e personalizar sua experiência.
		</div>
		<div class="ttermos-text">
			- Podemos usar informações não pessoais para análise de dados, melhorias no serviço, marketing e comunicação com os usuários.
		</div>
		<div class="ttermos-title">
			Compartilhamento de Informações
		</div>
		<div class="ttermos-text">
			-Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros, exceto conforme necessário para fornecer nossos serviços ou cumprir obrigações legais.
		</div>
		<div class="ttermos-text">
			- Podemos compartilhar informações não pessoais de forma agregada e anônima para fins de análise e marketing.
		</div>
		<div class="ttermos-title">
			Segurança de Dados
		</div>
		<div class="ttermos-text">
			- Implementamos medidas de segurança técnicas e organizacionais adequadas para proteger suas informações contra acesso não autorizado, perda ou alteração.
		</div>
		<div class="ttermos-text">
			- Apesar de nossos esforços, nenhuma transmissão de dados pela Internet ou sistema de armazenamento eletrônico é totalmente seguro. Portanto, não podemos garantir segurança absoluta.
		</div>
		<div class="ttermos-title">
			Cookies
		</div>
		<div class="ttermos-text">
			-Utilizamos cookies e tecnologias semelhantes para melhorar a funcionalidade do site, personalizar sua experiência e coletar informações não pessoais.
		</div>
		<div class="ttermos-text">
			- Você pode optar por desabilitar cookies nas configurações do seu navegador, mas isso pode afetar a funcionalidade do site.
		</div>
		<div class="ttermos-title">
			Links para Sites de Terceiros
		</div>
		<div class="ttermos-text">
			- Nosso site pode conter links para sites de terceiros. Esta Política de Privacidade se aplica apenas às informações coletadas por nós e não somos responsáveis pelas práticas de privacidade desses sites.
		</div>
		<div class="ttermos-title">
			Alterações na Política de Privacidade
		</div>
		<div class="ttermos-text">
			-Reservamo-nos o direito de modificar esta Política de Privacidade a qualquer momento. Notificaremos você sobre quaisquer alterações significativas e as alterações entrarão em vigor a partir da data especificada.
		</div>
		<div class="ttermos-footer">
			Ao utilizar nossos serviços, você concorda com a coleta e uso das suas informações pessoais de acordo com esta Política de Privacidade.
		</div>
		<div class="ttermos-footer">
			Se você tiver alguma dúvida sobre esta Política, entre em contato conosco.
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