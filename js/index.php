<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BRE Coins</title>
<meta name="description" content=""/>
<?php include('inc/head.php'); ?>

</head>

<body>
<?php include('inc/nav.php'); ?>
<!-- BLOCO TÍTULO COM IMAGEM -->
<div class="intro no-padding">


	<video autoplay loop id="video-background" plays-inline>
		<source src="http://brecoins.geralk2.com.br/bg-home.mp4" type="video/mp4" playsinline webkit-playsinline autoplay muted loop>
	</video>
    <div class="bg">
</div>

<div class="intro_bg">
<div class="jumbotrons no-padding">
 <div class="container">
 
    <div class="row hide-mobile">
      <div class="col-xs-12 col-sm-12 col-md-12">
      	<h2 class="muli branco text-center">Conectamos <strong>Você</strong> com Oportunidades Ilimitadas!</h2>
      </div>   
    </div>
    
    <div class="row hide-mobile">
      <div class="col-sm-12 col-md-12 text-center" id="leao-topo">
           <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/img/leao-brecoins.png" alt="BRE Coins" />
      </div>
    </div>
    
    <div class="row iefeito" id="valores">
    
    <?php 
$json = file_get_contents('https://backend.brecoins.com.br/ticker?rand='.rand(20, 50).''); // this WILL do an http request for you
$data = json_decode($json);
$buy = $data->{'buy'};
$sell = $data->{'sell'};
$vol_fiat = $data->{'vol_fiat'};
$last = $last/10;
$open = $open/10;
$variacao = 100 - ( (100*$last)/$open );
?>
    
      <div class="col-xs-12 col-xsl-6 col-md-5 col-md-offset-1 text-center">
      	<h5 class="branco font-size-22"><span class="montserrat-regular">VENDA</span> <i class="fa fa-btc" aria-hidden="true"></i></h5>
        <p class="branco montserrat-extra font-size-60"><span class="montserrat-light">R$</span><?php echo number_format(($buy/100), 2, ',', '.');?></p>
      </div>
      
      <div class="col-xs-12 col-xsl-6 col-md-5 .col-md-offset-right-1 text-center">
      	<h5 class="branco font-size-22"><span class="montserrat-regular">COMPRA</span> <i class="fa fa-btc" aria-hidden="true"></i></h5>
        <p class="branco montserrat-extra font-size-60"><span class="montserrat-light">R$</span><?php echo number_format(($sell/100), 2, ',', '.');?></p>
      </div>
      
    </div>
    
    <div class="row">
      <div class="col-sm-12 col-md-12">
            <a class="btn-padrao-no-margin montserrat-semi text-center font-size-20" href="https://broker.brecoins.com.br/?p=signup">CADASTRE-SE</a>
      </div>
    </div>
   
  </div>

</div><!--jumbotron -->
<div class="container" id="variacao">
  
      <div class="col-xs-12 col-xsl-4 col-sm-4 col-md-5 text-right">
        <div class="branco montserrat-regular font-size-18"><span class="verde montserrat-extra"><i class="fa fa-clock-o" aria-hidden="true"></i> Δ </span> <?php echo $variacao;?>%</div>
      </div>
      
      <div class="col-xs-12 col-xsl-4 col-sm-4 col-md-2 text-center">
        <div class="branco montserrat-regular font-size-18"><span class="verde montserrat-extra"> <i class="fa fa-btc" aria-hidden="true"></i></span> 612.09</div>
      </div>
      
      <div class="col-xs-12 col-xsl-4 col-sm-4 col-md-5 text-left">
        <div class="branco montserrat-regular font-size-18"><span class="verde montserrat-extra"> R$</span> <?php echo number_format(($vol_fiat/100), 2, ',', '.');?></div></div>
      </div>
  </div>
  
   
</div> 
    </div>
    
</div>
<!-- BLOCO TÍTULO COM IMAGEM END -->


<!-- BLOCO DIFERENCIAIS -->
<section class="no-padding" id="bloco-icones">
<div id="diferenciais" class="anchor"></div>
  <div class="container">
    <div class="row">
     <div class="col-md-4 col-sm-12">
     <div class="row">
      <div class="col-xs-3 col-xsl-1 col-sm-1 col-md-3 efeito">
        	<div class="circle"><span class="text-center vinho"><i class="fa fa-lock" aria-hidden="true"></i></span></div>
      </div>
      <div class="col-xs-9 col-xsl-5 col-sm-5 col-md-9 efeito delay-250" data-id='1'>
      		<h4 class="montserrat-extra escuro">SEGURANÇA</h4>
        	<p>Oferecemos uma plataforma em que o usuário usufrui do nível mais elevado de cyber-segurança para realizar suas operações.</p>
      </div>
      
     
       <div class="col-xs-3 col-xsl-1 col-sm-1 col-md-3 efeito">
        <div class="circle"><span class="text-center vinho"><i class="fa fa-file-text-o" aria-hidden="true"></i></span></div>
      </div>
      <div class="col-xs-9 col-xsl-5 col-sm-5 col-md-9 efeito">
      		<h4 class="montserrat-extra escuro">DIVERSIDADE DE ORDENS</h4>
        	<p>A plataforma brasileira com a maior variedade de ordens: Ordem de Mercado, Ordem de Stop, Ordem Fill or Kill, Ordem Iceberg.</p>
      </div>
      
      </div>
   </div>
    
   <div class="col-md-4 col-sm-12"> 
   
   	<div class="col-xs-3 col-xsl-1 col-sm-1 col-md-3 efeito delay-500" data-id='2'>
        	<div class="circle"><span class="text-center vinho"><i class="fa fa-handshake-o" aria-hidden="true"></i></span></div>
      </div>
      <div class="col-xs-9 col-xsl-5 col-sm-5 col-md-9 efeito delay-500" data-id='2'>
      		<h4 class="montserrat-extra escuro">ATENDIMENTO PERSONALIZADO</h4>
        	<p>Estamos conectados o tempo todo para garantir que você possa operar sem interrupções!</p>
      </div>
      
      <div class="col-xs-3 col-xsl-1 col-sm-1 col-md-3 efeito">
        	<div class="circle"><span class="text-center vinho"><i class="fa fa-file-code-o" aria-hidden="true"></i></span></div>
      </div>
      <div class="col-xs-9 col-xsl-5 col-sm-5 col-md-9 efeito">
      		<h4 class="montserrat-extra escuro">ALGORITMOS</h4>
        	<p>A única plataforma que lhe oferece liberdade para criar e utilizar seus próprios algoritmos e otimizar suas operações. </p>
      </div>
      
   </div>
   
    <div class="col-md-4 col-sm-12">  
    
    <div class="col-xs-3 col-xsl-1 col-sm-1 col-md-3 efeito">
        	<div class="circle"><span class="text-center vinho"><i class="fa fa-tasks" aria-hidden="true"></i></span></div>
      </div>
      <div class="col-xs-9 col-xsl-5 col-sm-5 col-md-9 efeito">
      		<h4 class="montserrat-extra escuro">TECNOLOGIA</h4>
        	<p>A nossa plataforma possui servidores com escalabilidade automática, o que assegura ao usuário o menor caminho para o tráfego de dados. </p>
      </div>

      
      <div class="col-xs-3 col-xsl-1 col-sm-1 col-md-3 efeito">
        	<div class="circle"><span class="text-center vinho"><i class="fa fa-line-chart" aria-hidden="true"></i></span></div>
      </div>
      <div class="col-xs-9 col-xsl-5 col-sm-5 col-md-9 efeito">
      		<h4 class="montserrat-extra escuro">TRADER AVANÇADO</h4>
        	<p>Ferramentas especialmente projetadas para maximizar a performance dos traders profissionais.</p>
      </div>
    </div>
   
  </div> 
  </div>   
</section>
<!-- BLOCO CTA END -->

<!-- BLOCO CTA -->
<section class="no-padding" id="bloco-cta">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        	<h3 class="muli branco text-center efeito">CONHEÇA NOSSA PLATAFORMA</h3>
            <a class="btn-padrao montserrat-semi text-center font-size-20 efeito" href="https://broker.brecoins.com.br/?p=signup">CADASTRE-SE</a>
      </div>
    </div>
  </div>   
</section>
<!-- BLOCO CTA END -->

<!-- BLOCO O QUE É BITCOIN -->
<section class="no-padding" id="bloco-bitcoin">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7 efeito" id="img-bitcoin">
        	<img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/img/img-o-que-e-bitcoin.png" alt="Saiba o que é Bitcoin" />
      </div>
      
      <div class="col-sm-10 col-sm-offset-1 col-md-5 efeito" id="texto-bitcoin">
      		<h2 class="montserrat-extra"><span class="montserrat-extra vinho">O QUE É</span>BITCOIN</h2>
            <p>O conceito sobre o que é bitcoin pode ser muito abrangente. De forma simplificada, bitcoin pode ser definido como um sistema de transferência de recursos ou pagamento que funciona como dinheiro digital. De forma mais ampla, pode ser definido como um conjunto de conceitos e tecnologias aplicados para criar um sistema que possibilita os usuários a realizar transferências de valores de forma simples, rápida e consideravelmente mais baratas.</p>
            <a class="btn-saiba-mais" href="//<?php echo $_SERVER['SERVER_NAME'];?>/faq.php">[saiba mais]</a> 
      </div>
    </div>
  </div>   
</section>
<!-- BLOCO O QUE É BITCOIN END -->


<?php include('inc/footer.php'); ?>
</body>
</html>
