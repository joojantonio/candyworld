<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,300,300italic,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./CSS/candyworld.css">
    <script >
        function slide1(){
        document.getElementById("slide1").src="../CandyWorld/imagens/Index/java1.jfif";
        setTimeout("slide2()", 3000)
        }
        
        function slide2(){
        document.getElementById("slide1").src="../CandyWorld/imagens/Index/java2.jfif";
        setTimeout("slide3()", 3000)
        }
        
        function slide3(){
        document.getElementById("slide1").src="../CandyWorld/imagens/Index/java3.jfif";
        setTimeout("slide1()", 3000)
        }
        </script>
   
    <title>Candy World</title>
</head>
<body onLoad="slide1()">

   <div class="site">
    <div id ="topo"></div>
    <div class="cabecalho">
        <div class="logo">
            <a href="candyworld.html"><img id="lg" src="../CandyWorld/imagens/Index/LogoCandy2.png" alt="Logo Candy World"></a>
        </div>
        <div class="pesquisar">
            <form method="" action="">
                <input type="search" class="buscaint" id="busca" placeholder="Busque o produto por nome ou sabor" autocomplete="off">
                <a class="btn-search" href="#">
                    <ion-icon name="search-outline"></ion-icon>
            </form>
        </div>

        <div class="perfil">
            <a class="btn-primario" href="carrinho.html">
                <ion-icon name="cart-outline"></ion-icon>
                <span>Carrinho</span>
            </a>
            <a href="cadastro.html"></a>
            <a class="btn-primario" href="cadastrologin.html">
                <ion-icon name="person-outline"></ion-icon>
                <span>Ol??, fa??a seu login ou cadastre-se.</span>
            </a>
        </a>
        </div>
    
    
</div>
<script  src = "https://unpkg.com/ionicons@5.2.3/dist/ionicons.js" ></script>

<div id="menu">
    <ul>
        <li><a href="candyworld.php">??nicio</a></li>
        <li><a href="bolos.html">Bolos</a></li>
        <li><a href="tortas.html">Tortas</a></li>
        <li><a href="doces.html">Doces</a></li>
        <li><a href="promocao.html">Promo????es</a></li>
        <li><a href="sobre.html">Sobre</a></li>
        <li><a href="contato.html">Contato</a></li>
    </ul>

    
</div>


<img id="slide1" src="../CandyWorld/imagens/Index/java1.jfif" alt="slide1">

<div class="promocao">
</br>
    <h2 id="titulopromo">Promo????es do m??s</h2>
   <p id="conteudo_promo">Todo m??s a Candy World prepara promo????es e descontos especiais para voc??.</p>
   <p id="conteudo_promo">Queremos ado??ar a sua vida! Aproveite brindes e descontos imperd??veis</p>
   <br>
   <div class="img_promo">
   <img id="img1" src="../CandyWorld/imagens/Index/promocao1.jfif" alt="Promo????o candyworld">
   <img id="img2" src="../CandyWorld/imagens/Index/promocao2.jfif" alt="Promo????o candyworld">
  </div>
</div>


    <h2 id="tituloprodutos">Nossos produtos</h2>
    <br>
    <p id ="conteudoprodutos">O melhor em variedade e gostosura voc?? s?? encontra aqui!</p>
    <p id="conteudoprodutos">Confira nossos pre??os e seja nosso cliente +doce .</p>
<div class="produtos">
<?php
                require_once "conexao.php";

                $comando = "SELECT * FROM tblProdutos";
                $resultado = mysqli_query($conexao,$comando);
    ?>
    
    <?php
                while($linha=mysqli_fetch_assoc($resultado)){
        ?>

            
    <div class="produtos_top">
        <div class="produto_1">
            <a  id ="produtostyle" href="../CandyWorld/imagens/Index/produto1.jfif">
             <img id="sacolaimg2" src="<?=$linha['imagens']?> ">
            <p><?=$linha['produto']?></p>
            
            <a class="btn-produtos" href="detalhar_produto.php?idProduto=<?=$linha['idProduto']?>">
                <ion-icon name="bag-handle"></ion-icon>
                <span>R$<?=$linha['valor']?></span>
            </a>
        </a>
          
        </div>
        
        </div>

        <?php
             }
            ?>
</div>

<div class="convite_cadastro">
    <div class="imagemconvite">
        <img id="imgconv" src="../CandyWorld/imagens/Index/LogoCandy.png" alt="">
    </div>
    <div class="tituloconvite">
    <h2>Quer ter um mundo doce como o nosso? </h2>
    <h2>Fa??a parte da franquia mais docinho do Brasil!</h2>
    <h3 id=subtitulocadastro>Cadastre-se!</h3>
    <a class="btn-convcad" href="cadastrologin.html">
        <ion-icon name="thumbs-up-outline"></ion-icon>
        <span>Opa, quero me cadastrar!</span>
    </a>
    
    </div>
</div>
    <div class="rodape">
        <ul>
            <li id="socialmedia"><ion-icon  name="logo-facebook"></ion-icon></li>
            <li id="socialmedia"><ion-icon  name="logo-instagram"></ion-icon></li>
            <br>
            <a href="dashboard.php">
            <li>Dashboard</li>
            </a>
            <li>Lojas</li>
            <li>Privacidade</li>
            <li>Atendimento</li>
            <li>Pol??tica de vendas</li>
        </ul>
        <span style="font-size: .9em;">Central de Atendimento: 15 xxxx xxxx (SP e Grande SP) | 4002 89 22(Demais Regi??es) | segunda a sexta, das 08h ??s 18h | <a href="#">sac@candyworld.com.br</a></span>
    </div>
    
</div>
</div>



</body>
</html>