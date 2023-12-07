<?php
# caminho para as pastas
$Dir = './';
$Pasta = '404';

include_once $Dir."seo.php";
include_once $Dir."header.php";
?>

<style type="text/css">
body {
    background-color: #fafafa;
}
.largura {
    margin: 100px 15px 50px;
}
h1 {
    font-size: 28px;
}
h3 {
    font-size: 24px;
}
a {
    font-size: 16px;
}
@media only screen and (min-width: 768px) {
    .largura {
        margin: 120px 35px 80px;
    }
}
@media only screen and (min-width: 1360px) {
    .largura {
        width: 1170px;
        margin: 120px auto 80px;
    }
}
@media only screen and (min-width: 1920px) {
    .largura {
        width: 1400px;
    }
}
.mensagem {
    text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
}
.mensagem .icone i {
    color: orange;
    font-size: 100px;
    padding: 25px;
}
.mensagem .retorno {
    margin-top: 50px;
}
</style>

<div class="largura mensagem">
    <h3>Ops!</h3>
    <span class="icone"><i class='fas fa-exclamation-circle'></i></span>
    <p>ERRO 404</p>
    <h1>Não conseguimos encontrar a página que você procura</h1>
    <p>Parece que o caminho que você está procurando não existe ou não está mais acessível.</p>
    <p>Por favor tente novamente ou entre em contato conosco.</p>
    <div class="retorno">
        <a href="<?php echo $NomeDominio;?>" class="botao fundo-vermelho"><i class='fas fa-angle-double-left'></i> Voltar para o Início</a>
        <a href="https://wa.me//5511987680049?text=Olá,%20gostaria%20de%20reportar%20um%20problema%20404%20do%20site%20mfferramentaria.com.br" class="botao fundo-laranja" target="blank"><i class="fab fa-whatsapp"></i> Reportar o problema</a>
    </div>
</div>

<?php include_once $Dir.'footer.php';?>