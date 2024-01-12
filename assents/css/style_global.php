<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-thin-straight/css/uicons-thin-straight.css');

	body{
		background-color: #F1F1F1;
	}


	*{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
	}
	.bg-stack{
		background-color: #5182ED;
	}
	.bg-stack-grad{
		background-image: linear-gradient(to right, #7351ed, #6b66f1, #6878f2, #6a88f1, #7396ee, #7499ec, #769ceb, #789fe9, #6e98ea, #6491ec, #5a89ec, #5182ed);
	}
	.fluter{
		transform: translateY(0px);
		animation: float 3s ease-in-out infinite;
	}
	@keyframes float{
		0%{
			transform: translateY(0px);
		}
		50%{
			transform: translateY(-30px);
		}
		100%{
			transform: translateY(0px);
		}
	}
	.margin-header{
		margin-top: 15vh;
		margin-bottom: 15vh;
	}
	.header-planet{
		background-color: #fff;
	}
	.ltitle-header{
		font-size: 5vh;
		font-weight: bold;
	}
	.btn-title{
		transition: 150ms;
		background-color: #2ECC71;
		color: #fff;
	}
	.btn-title:hover{
		transition: 150ms;
		color: #333333;
	}
	.title-beneficios{
		font-size: 25px;
		font-weight: bold;
	}
	.beneficios-planet{
		margin-top: 35px;
	}
	.card-beneficios{
		border: 0;
		margin-top: 35px;
		min-height: 80%;
		margin-bottom: 25px;
	}
	.cicon-beneficios{
		font-size: 25px;
	}
	.ctitle-beneficios{
		margin-top: 10px;
		font-size: 15px;
		font-weight: bold;
		margin-bottom: 10px;
	}
	.planos-planet{
		margin-top: 40px;
		background-image: linear-gradient(to right bottom, #2dde72, #2fce5e, #2fbe4a, #2eae37, #2c9f21);
		margin-bottom: 10px;
	}
	.cdescri-beneficios{
		font-size: 12.9px;
	}
	.ptitle-planet{
		color: #fff;
		margin-top: 35px;
		text-align: right;
		font-size: 25px;
		font-weight: bold;
	}
	.price-planet{
		color: #fff;
		text-align: right;
		font-size: 45px;
		font-weight: bold;
		color: #2ECC71;
	}
	.btn-plano{
		background-color: #2ECC71;
		width: 100%;
		color: #fff;
		transition: 150ms;
		margin-bottom: 10px;
	}
	.btn-plano:hover{
		transition: 150ms;
		color: #333333;
	}
	.localidade-planet{
		margin-top: 25px;
		margin-bottom: 30px;
	}
	.ltitulo-planet{
		margin-top: 25px;
		margin-bottom: 25px;
	}
	.lcard-planet{
		width: 100%;
		border: 0;
	}
	.ltext-title{
		color: #2ECC71;
	}
	.rcard-planet{
		border: 0;
		background-color: #2ECC71;
		color: #ffff;
		margin-bottom: 25px;
	}
	.rtitle{
		font-weight: bold;
	}
	.rsub-title{
		margin-top: 15px;
		margin-bottom: 15px;
	}
	/*Termos de Serviço*/
	.ttitle-planet{
		margin-top: 25px;
		margin-bottom: 25px;
		font-weight: bold;
		font-size: 25px;
	}
	.tsub-title{
		margin-bottom: 25px;
	}
	.ttermos-title{
		font-weight: bold;
	}
	.ttermos-text{
		margin-bottom: 25px;
	}
	.ttermos-footer{
		margin-bottom: 25px;
		font-weight: bold;
	}
	/*Produtos*/
	.header-produtos{
		background-color: #ffff;
	}
	.pmini-title{
		margin-top: 25px;
	}
	.ptitle{
		font-weight: bold;
		font-size: 50px;
	}
	.ptitle-rigth{
		margin-top: 70px;
		font-size: 16px;
	}
	.prtitle{
		margin-top: 25px;
		margin-bottom: 25px;
		font-weight: bold;
		font-size: 25px;
	}
	.pcard-planet{
		margin-bottom: 10px;
		border: 0;
	}
	.col-md-3:nth-child(1) .pheader-card{
		border: 0;
		background-color: #DB1A1A;
	}
	.col-md-3:nth-child(2) .pheader-card{
		border: 0;
		background-color: #913EFF;
	}
	.col-md-3:nth-child(3) .pheader-card{
		border: 0;
		background-color: #3EDEFF;
	}
	.col-md-3:nth-child(4) .pheader-card{
		border: 0;
		background-color: #0FBF21;
	}
	.pcard-title{
		font-weight: bold;
	}
	.pcard-info{
		margin-top: 25px;
	}
	.ppreco{
		margin-top: 25px;
		font-size: 25px;
		font-weight: bold;
	}
	.btn-produtos{
		width: 100%;
		margin-top: 5px;
		border: 0;
		color: #ffff;
		background-color: #2ECC71;
	}
	.btn-produtos:hover{
		color: #ffff;
	}
</style>