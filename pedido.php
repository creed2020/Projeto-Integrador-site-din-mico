<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');

?>

<h2>Calabresa</h2>
<img class="responsiva" src="img/calabresa.jfif">
<p>Média:R$20,90</p>
<p>Grande:R$25,90</p>
<p>Família:R$35,90</p>
<h2>Portuguesa</h2>
<img class="responsiva" src="img/portuguesa.jfif">
<p>Média:R$16,90</p>
<p>Grande:R$19,90</p>
<p>Família:R$26,90</p>
<h2>Quatro queijos</h2>
<img class="responsiva" src="img/4queijos.jfif">
<p>Média:R$19,90</p>
<p>Grande:R$23,90</p>
<p>Família:R$29,90</p>
<h2>Frango</h2>
<img class="responsiva" src="img/frango.jfif">
<p>Média:R$19,90</p>
<p>Grande:R$25,90</p>
<p>Família:R$36,90</p>
<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
