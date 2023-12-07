<style type="text/css">
body {
	margin: 0;
	background: #563D7C;
}
	
	
	.logo img {
		position: relative;
		top: -50px;
		left: 10%;
		width: 3%;			
	}
	.logo h1 {
		position: relative;
		top: -120px;
		left: 14%;
		width: 20%;	
		font-size: 35px;
		color: white;
	}

	


		.menu-topo {
		display: flex;
		width: 100%;
		justify-content: center;
		height: 70px;
		font-size: 25px;		
		position: relative;		
		background: #726697;
		
	}
	.menu-topo a {
		position: relative;
		left: 200%;
		top: 0px;
		display: inline-block;
		height: 40px;
		text-decoration: none;
		color: #333;
		font-weight: 600;
		color: white;
		
	}
	.menu-topo a:hover {
		color: orange;
		transition: all ease 0.3s;
	}
	
	
	.menu-topo li {
		display: inline;
		float: left;
		padding: 24px 25px 20px;
		
	}
	
	

	.mobile {
		display: none;
	}

.menu-topo input {
	
	width: 40%;
	height: 60%;
	position: relative;
	top: 25%;
	left: 15%;
	border-radius: 1rem;
}
.menu-topo input{
	position: relative;
	left: 10%;
	top: 22px;
}
button {
	width: 80px;
	height: 50%;
	position: relative;
	top: 35%;
	left: 10%;
	border-radius: 1rem;
}

.container li {
	display: inline;
	position: relative;
	top: -100px;
	left: 10%;
	
	box-shadow: 0px 0px 2px 2px;
	color: white;
	font-size: 20px;
	padding: 10px;
	border-radius: 1rem;
	height: 20px;
}
.container li:hover {
		color: #726697;
		transition: all ease 0.3s;
	}

.container a {
	color: white;
	}
	.container a:hover {
		color: #726697;
		transition: all ease 0.3s;
	}
	

</style>

<body>
<nav class="fixed">

		<div class="menu-topo">
		
        <input type="text" class="form-control" placeholder="  O que você quer ouvir agora ?" name="Pesquisa">
        <button type="submit"></i>Pesquisar</button>		
	    <li ><a href="">ENTRAR</a></li>					
		</div>
		
		<div class="logo">
			<img id="logo" src="Img/icon_one.svg">
			<h1> Beat-Place </h1>
		</div>
		
		<div class="container">
		<li ><a href="">POP</a></li>	
		<li ><a href="">ROCK</a></li>	
		<li ><a href="">FUNK</a></li>	
		<li ><a href="">SERTANEJO</a></li>	
		<li ><a href="">RAP</a></li>	
		</div>
</nav>

