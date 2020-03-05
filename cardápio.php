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
    <td width="18%" align="center" bgcolor="#FFFF00"><p class="style7">SABOR DA PIZZA<br />
        <br />
    </p>    </td>
    <td width="50%" align="center" bgcolor="#FFFF00"><span class="style7"> INGREDIENTES</span></td>
    <td width="10%" align="center" bgcolor="#FFFF00"><span class="style7">MEDIA(R$)</span></td>
    <td width="11%" align="center" bgcolor="#FFFF00"><span class="style7">GRANDE(R$)</span></td>
    <td width="11%" align="center" bgcolor="#FFFF00"><span class="style7">FAMÍLIA(R$)</span></td>
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
    <td align="center"><span class="style5">Muzarela, oregano, cebola, tomate, presunto etc.</span></td>
    <td align="center"><span class="style5">19,90</span></td>
    <td align="center"><span class="style5">23,90</span></td>
    <td align="center"><span class="style5">29,90</span></td>
  </tr>
</table>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
