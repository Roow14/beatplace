<style type="text/css">
footer {
    background-color: #404142;
    padding-top: 15px;
}
footer li {
    color: #fff;
    font-size: initial;
    list-style-type: none;
    line-height: 1.2;
}
footer .box-1,
footer .box {
    list-style: none;
    width: 100%;
    margin-bottom: 25px;
}
footer .box-2 {
    list-style: none;
    width: 100%;
}
footer .box-1 h3,
footer .box-2 h3,
footer .box h3 {
    margin-top: 0;
    color: #fff;
}
footer .box img {
    width: 200px;
}

@media all and (min-width: 768px) {
    footer .box {
        width: 40%;
        padding: 15px;
    }
    footer .box-1 {
        width: 20%;
        padding: 15px;
    }
    footer .box-2 {
        width: 40%;
        padding: 15px;
    }
    footer h3 {
        font-size: 20px;
    }
}

.whatsapp-icon img {
    width: 100%;
}
.whatsapp-icon {
    position: fixed;
    bottom: 74px;
    right: 12px;
    width: 45px;
    height: 45px;
    transform: translateY(0);
    transition: ease all 0.3s;
    cursor: pointer;
    z-index: 9999;
}
footer li {
    line-height: 1.4;
}
footer li a:hover {
    padding-left: 25px;
    color: yellow;
}
footer .forecastweb {
    font-size: 14px;
    color: #999;
    margin-top: 25px;
}
footer .forecastweb img {
    width: 80px;
    margin-bottom: -1px;
    opacity: 0.7;
}
footer .forecastweb img:hover {
    opacity: 1;
    cursor: pointer;
    transition: all ease 0.3s;
    width: 100px;
}
footer .meta i {
    font-size: 22px;
}
footer .meta i:hover {
    opacity: 0.8;
    font-size: 32px;
    transition: all ease 0.3s;
}
footer .tel span {
    display: inline-block;
}
footer #parte-inferior {
    height: 100vh; /* Ajusta a altura para preencher toda a tela */
}
footer .form-group {
    margin-bottom: 5px;
}
footer .form-control {
    border-radius: 3px;
    padding: 8px 15px;
    font-size: 16px;
}
footer form button {
    background-color: #599a18;
    border-radius: 3px;
    padding: 8px 15px;
    border: 1px solid #fff;
    color: #fff;
    font-size: 16px;
}
footer form button:hover {
    background-color: #7cd722;
    cursor: pointer;
}
footer .criacao {
    width: 100%;
}
footer .criacao img {
    width: 100px;
}
footer .criacao p {
    color: #fff;
}
footer .criacao span {
    margin-right: 25px;
    display: inline-block;
}
footer .dados-empresa {
    background-color: #333;
    width: 100%;
    text-align: center;
    padding: 5px;
}
footer .dados-empresa li {
    color: #fff;
    font-size: 14px;
}
</style>

<footer id="contato" class="">
    <div class="container">
        <div class="box">
            <img src="<?php echo $NomeDominio;?>/static/logo-inove-branco.png">
            <h3>Inove Tecnologia</h3>
            <li>Venda e instalação de produtos em tecnologia de segurança para sua empresa e residência</li>            
        </div>
        <div class="box-1">
            <h3>Páginas</h3>
            <li><a href="<?php echo $NomeDominio;?>/sobre/">Sobre nós</a></li>
            <li><a href="<?php echo $NomeDominio;?>/produtos/">Produtos</a></li>
            <li><a href="<?php echo $NomeDominio;?>/loja/">Loja online</a></li>
            <li><a href="<?php echo $NomeDominio;?>/artigos/">Artigos</a></li>
            <li><a href="<?php echo $NomeDominio;?>/contato/">Contato</a></li>
        </div>
        <div class="box-2">
            <h3>Contato</h3>
            <li><a href="mailto:inovetecnologiams@gmail.com"><i class="fas fa-envelope"></i> inovetecnologiams@gmail.com</a></li>
            <li><a href="https://goo.gl/maps/vPi28TkpHt6FXpEf6" target="blank"><i class="fas fa-map-marker-alt"></i> Rua Said Sayad, 276 Chácara dos poderes - Campo Grande-MS CEP: 79037-805</a></li>
            <li><a href="https://wa.me//5567981258295?text=Olá,%20estou%20entrando%20em%20contato%20pelo%20site%20inovetecnologiams.com.br" target="blank"><i class="fab fa-whatsapp"></i> (67) 9 8125-8295</a></li>

            <div class="criacao">
                <p>Site: <a href="https://forecastweb.com.br" target="blank"><img src="<?php echo $NomeDominio;?>/static/logo-forecast-web.webp"></a></p>
            </div>
        </div>    
    </div>
    <div class="dados-empresa">
        <li>Inove Tecnologia - CNPJ: 15.777.933/0001-67</li>
    </div>
</footer>

<div class="voltar-topo">
    <a href="https://wa.me//5567981258295?text=Olá,%20estou%20entrando%20em%20contato%20pelo%20site%20inovetecnologiams.com.br" target="_blank" class="whatsapp-icon"><img src="<?php echo $NomeDominio;?>/static/whatsapp-icon.svg"></a>
</div>

<?php include 'politica.php';?>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $NomeDominio;?>/static/carousel.min.js"></script>

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 2,
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
</script>

<script type="text/javascript">
    (function ($) {

    /*--Scroll Back to Top Button Show--*/

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    //Click event scroll to top button jquery

    $('#back-to-top').click(function(){

        $('html, body').animate({scrollTop : 0},600);
        return false;
    });

    })(jQuery);
</script>

<script type="text/javascript">
    /* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>

<script type="text/javascript">
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("logo").style.height = "65px";
  } else {
    document.getElementById("logo").style.height = "65px";
  }
}
</script>

<script type="text/javascript">
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
</script>