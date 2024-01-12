<div class="stack-navbar sticky-top">
	<nav class="navbar navbar-expand-sm navbar-dark">
	  <div class="container">

	    <a class="navbar-brand" href="<?php echo $flow ?>"><img class="img-nav" src="<?php echo $flow ?>assents/img/logo/LogoBranco.png"></a>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse justify-content-end" id="nav">
	    	<ul class="navbar-nav">
	    		<a href="<?php echo $flow ?>" class="item_nav">Pagina Inicial</a>
				<a href="<?php echo $flow ?>planos/" class="item_nav">Minecraft Hospedagem</a>
		    	<a href="https://discord.gg/Cy4YHS2s4g" class="item_nav">Suporte</a>
		    	<a href="https://discord.gg/Cy4YHS2s4g" class="item_nav">Atualizações</a>
		    	<a href="<?php echo $flow ?>" class="item_nav btn btn-stack">
		    		<i class="fa-regular fa-user"></i>
		    		Area do Cliente
		    	</a>
	    	</ul>
	    </div>
	  </div>
	</nav>
</div>

<style type="text/css">
	.stack-navbar{
		background-color: #333333;
		padding: 0.5rem 1rem;
	}
	.item_nav{
		display: block;
		text-decoration: none;
		color: #fff;
		font-size: 12.9px;
		padding: 0.5rem 0.5rem;
		margin-right: 30px;
	}
	.item_nav:hover{
		transition: 300ms;
		text-decoration: none;
		color: #85ffa5;
	}
	.btn-stack{
		background-color: #2ECC71;
	}
	.img-nav{
		width: 100%;
		max-width: 200px;
	}
</style>