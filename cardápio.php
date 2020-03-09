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


<table width="100%" border="0">
  <tr>
    <td width="18%" align="center" bgcolor="#FFFF00"><p class="style7">Sabor da Pizza<br/>
    <br/>
    </td>
    <td width="50%" align="center" bgcolor="#FFFF00"><span class="style7"> Ingredientes</span></td>
    <td width="10%" align="center" bgcolor="#FFFF00"><span class="style7">Média(R$)</span></td>
    <td width="11%" align="center" bgcolor="#FFFF00"><span class="style7">Grande(R$)</span></td>
    <td width="11%" align="center" bgcolor="#FFFF00"><span class="style7">Família(R$)</span></td>
  </tr>
  <tr>
    <td align="center"><span class="style5">Portuguesa</span></td>
    <td align="center"><span class="style5">Muzarela, oregano, cebola, tomate, presunto etc. </span></td>
    <td align="center"><span class="style5">16,90</span></td>
    <td align="center"><span class="style5">19,90 </span></td>
    <td align="center"><span class="style5">26,90</span></td>
  </tr>
  <tr>
    <td align="center"><span class="style5">4 Queijos</span></td>
    <td align="center"><span class="style5">4 tipos de queijos, oregano, etc.</span></td>
    <td align="center"><span class="style5">19,90</span></td>
    <td align="center"><span class="style5">23,90</span></td>
    <td align="center"><span class="style5">29,90</span></td>
  </tr>
  <tr>
    <td align="center"><span class="style5">Calabresa</span></td>
    <td align="center"><span class="style5">Calabresa, oregano, cebola, etc.</span></td>
    <td align="center"><span class="style5">20,90</span></td>
    <td align="center"><span class="style5">25,90</span></td>
    <td align="center"><span class="style5">35,90</span></td>
  </tr>
  <tr>
    <td align="center"><span class="style5">Frango</span></td>
    <td align="center"><span class="style5">Muzarela, oregano, catupiry, etc.</span></td>
    <td align="center"><span class="style5">19,90</span></td>
    <td align="center"><span class="style5">25,90</span></td>
    <td align="center"><span class="style5">36,90</span></td>
  </tr>
</table>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
