<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>SECULT</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<?php //echo $html->script('jquery.js'); ?>
	<?php //echo $this->Html->script('main.js'); ?>
	<?php //echo $html->script('jquery.validate.min.js'); ?>	
	<?php //echo $html->script('jquery-1.3.2.min.js'); ?>
	<?php //echo $html->script('jquery-ui-1.7.3.custom.min.js'); ?>
	<?php //echo $html->script('jquery.maskedinput-1.3.js'); ?>
	<?php //echo $html->script('jquery.ui.datepicker-pt-BR.js'); ?>
	<?php //echo $html->script('jquery.numeric.js'); ?>
	<?php //echo $html->script('jquery.maskMoney.js'); ?>
	<?php //echo $html->script('jquery.liveQuery.js'); ?>
	<?php //echo $html->script('jquery.meiomask.js'); ?>
	
	
    <!-- Le styles -->
	<?php //echo $this->Html->css('bootstrap.css'); ?> 
	<?php echo $this->Html->css('estilos.css'); ?> 
	<?php echo $this->Html->css('estrutura.css'); ?> 
	<?php echo $this->Html->css('layout.css'); ?> 
	<?php echo $this->Html->css('reset.css'); ?> 
	
	<?php //echo $html->css('ui-lightness/jquery-ui-1.7.3.custom.css'); ?>
	<?php echo $html->css('jquery-ui/jquery-ui-1.7.3.custom.css'); ?>
    <style>
      body {
        /*padding-top: 60px; remover*/ /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    
	<?php //echo $this->Html->css('bootstrap-responsive.css'); ?> 

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>
	
	<!--INICIO PORTAL SIIC-->
	<div id="geral">
	<div id="iframe"><img src="<?php echo $this->webroot; ?>img/BarraGoverno.jpg" width="990" height="25" alt="Exemplo Barra Governo" /></div>
	<!-- iframe contendo a barra do governo -->
	<div id="cabecalho"> <img src="<?php echo $this->webroot; ?>img/LogoFomento.png" width="314" height="100" alt="LOGOMARCA" style="float:left; display:block;" />
	  <div id="formlogin">
		<div id="textformlogin">Bem-vindo ao Click Fomento. Clique <a href="#">aqui</a> para se cadastrar.</div>
		<form name="login" method="post" action="#" class="login">
		  <label class="boxlogin">Usuário:
			<input name="user" type="text" tabindex="1" size="10" class="campos">
		  </label>
		  <label class="boxlogin">Senha:
			<input name="password" type="password" tabindex="2" size="8" class="campos">
		  </label>
		  <input type="submit" name="Submit" value="OK" tabindex="3" class="botaoLogin">
		  <a href="#" class="txtLinkLogin" >Esqueci minha senha</a>
		</form>
	  </div>
	  <!-- / #formlogin -->
	  <div id="formBusca"> <img src="<?php echo $this->webroot; ?>img/LogoSecult.png" width="241" height="72" alt="Logo SECULT" style="clear:both; margin: 0 10px;" />
		<form name="busca"method="post" action="#" class="busca">
		  <input name="user" type="text" tabindex="1" size="21" id="campo_busca" value="Busca Secult" class="campoBusca" />
		  <input type="submit" name="Submit" value="OK" tabindex="2" class="botaoBusca" />
		</form>
	  </div>
	  <!-- / #formBusca--> 
	</div>
	
	<!-- / #remover--> 
    <!--div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Fomento</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/fomento/groups">Grupo</a></li>
              <li><a href="/fomento/users/login">Login</a></li>
              <li><a href="/fomento/ato_convocatorios">Ato Convocatório</a></li>
			  <li><a href="/fomento/pessoa_juridicas">Pessoas Jurídicas</a></li>
			  
			  <li><a href="/fomento/pfs">Pessoas Físicas</a></li>
			  <li><a href="/fomento/propostas">Propostas</a></li>
			  
            </ul>
          </div><!--/.nav-collapse -->
		   <!--p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>
        </div>
      </div>
    </div>
	<!-- / #remover--> 
	
    <div id="container" class="">
		
		<div id="menuPrinc">
			<p><a href="/fomento/"><img src="<?php echo $this->webroot; ?>img/iconInicial.png" width="18" height="16" alt="Pagina Inicial" />Página Inicial</a></p>
			<ul>
				<li class="niv1"><a href="/fomento/groups">Grupo</a></li>
				<li class="niv1"><a href="/fomento/ato_convocatorio_faz_culturas">Ato Convocatório</a></li>
				<li class="niv1"><a href="/fomento/pessoa_juridicas">Pessoas Jurídicas</a></li>
				<li class="niv1"><a href="/fomento/pfs">Pessoas Físicas</a></li>
				<li class="niv1"><a href="/fomento/propostas">Propostas</a></li>
			</ul>
		</div>
		<!-- / #menuPrinc -->
		
		<div id="conteudo">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
		</div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?php echo $javascript->link('builder', false); ?> 
  
	<div id="rodape">
	  <div id="rodaconteudo">
		<div id="cxendereco">
		  <div class="endereco">
			<p>Governo da Bahia. Terra de Todos Nós.</p>
			<address>
			Secretaria de Cultura do Estado da Bahia<br />
			Palácio Rio Branco, Praça Thomé de Souza, s/n – Centro<br />
			CEP: 40.020-010 – Salvador, Bahia.<br />
			<strong>(71) 3103-3400 / 3434</strong>
			</address>
			<a href="#"><img src="<?php echo $this->webroot; ?>img/iconLocaliza.png" width="11" height="16" alt="Localização" />localização</a>
			<p>Todo o conteúdo deste portal pode ser utilizado livremente, desde que a fonte seja citada.</p>
		  </div>
		  <!-- / .endereco --> 
		</div>
		<!-- / #cxendereco -->
		<div id="unidades">
		  <ul class="unids">
			<li><a href="http://www.fpc.ba.gov.br/" title="Fundação Pedro Calmon" target="_blank"><img src="<?php echo $this->webroot; ?>img/marcaFUNPC_Rp.gif" alt="" /></a></li>
			<li><a href="http://www.fundacaocultural.ba.gov.br/" title="FUNCEB" target="_blank"><img src="<?php echo $this->webroot; ?>img/marcaFUNCEB_Rp.gif" alt="" /></a></li>
			<li><a href="http://www.ipac.ba.gov.br/" title="IPAC" target="_blank"><img src="<?php echo $this->webroot; ?>img/marcaIPAC_Rp.gif" alt="" /></a></li>
			<li><a href="http://www.pelourinho.ba.gov.br/" title="CCPI" target="_blank"><img src="<?php echo $this->webroot; ?>img/img_centro.gif" alt="" /></a></li>
		  </ul>
		  <form name="form" method="post" action="" class="formSec">
			<select name="select">
			  <option value="item_1"> Outras Secretarias</option>
			  <option value="item_2"> item_2 da lista</option>
			  <option value="item_3"> item_3 da lista</option>
			  <option value="item_4"> item_4 da lista</option>
			</select>
		  </form>
		</div>
		<!-- / #unidades -->
		<div id="redesocial">
		  <ul class="menu_social">
			<li><a href="http://twitter.com/secultBa" target="_blank" title="Twitter"><img src="<?php echo $this->webroot; ?>icoTwitter.gif" width="16" height="16" alt="Twitter" /></a></li>
			<li><a href="http://www.facebook.com/home.php?#!/profile.php?id=100000426492661&ref=ts" target="_blank" title="Facebook"><img src="<?php echo $this->webroot; ?>img/icoFacebook.gif" width="16" height="16" alt="Facebook" /></a></li>
			<li><a href="http://www.youtube.com/user/plugcultura" target="_blank" title="YouTube"><img src="<?php echo $this->webroot; ?>img/icoYoutube.gif" width="16" height="16" alt="Youtube" /></a></li>
			<li><a href="http://www.flickr.com/photos/secultba/" target="_blank" title="Flickr"><img src="<?php echo $this->webroot; ?>img/icoFlickr.gif" width="16" height="16" alt="Flickr" /></a></li>
			<li><a href="http://www.orkut.com.br/Main#Profile?uid=18223476998882437456" target="_blank" title="Orkut"><img src="<?php echo $this->webroot; ?>img/icoOrkut.gif" width="16" height="16" alt="Orkut" /></a></li>
			<li><a href="http://plugcultura.wordpress.com" target="_blank" title="PlugCultura"><img src="<?php echo $this->webroot; ?>img/icoPlug.gif" width="16" height="16" alt="Plug" /></a></li>
			<li><a href="#" title="Em breve - Podcast"><img src="img/icoPodcast.gif" width="16" height="16" alt="Podcast" /></a></li>
			<li><a href="http://www.cultura.ba.gov.br/feed/" title="RSS"><img src="<?php echo $this->webroot; ?>img/icoRSS.gif" width="16" height="16" alt="RSS" /></a></li>
		  </ul>
		</div>
		<!-- / #redesocial --> 
	  </div>
	  <!-- / #rodaconteudo --> 
	</div>
	<!-- / #rodape -->
  <?php //echo $this->element('sql_dump'); ?>
</body></html>