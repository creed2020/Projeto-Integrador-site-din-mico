<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Faça Seu Cadastro";

// Opção ativa no menu principal
$menu = "cadastrar";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/cadastrar.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/

// "Declarando" variáveis
$nome = $email = $senha = $endereco = $telefone = $pedido = $erro = $msgErro = $msgOk = $msgMail = '';

// Se o formulário foi enviado
if ( isset($_POST['enviado']) ) :

    // Obtém o nome do form
    $nome = sanitiza( filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING) );

    // Obtém o e-mail do form
    $email = sanitiza( filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) );

    // Obtém o senha do form
    $senha = sanitiza( filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL) );

    // Obtém o endereço do form
    $endereco = sanitiza( filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING) );

    // Obtém o telefone do form
    $telefone = sanitiza( filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING) );

    // Obtém o pedido do form
    $pedido = sanitiza( filter_input(INPUT_POST, 'pedido', FILTER_SANITIZE_STRING) );



    // Verificar o preenchimento do nome
    if (strlen($nome) < 2) {
        $erro .= "<li>Seu nome está muito curto.</li>";
    }

    // Verificar o preenchimento do e-mail
    // O sinal "!" inverte TRUE com FALSE
    if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $erro .= "<li>Seu e-mail parece inválido.</li>";
    }
    // Verificar o preenchimento do pedido
    if (strlen($senha) < 4) {
        $erro .= "<li>A senha está incorreta.</li>";
    }
    // Verificar o preenchimento do endereço
    if (strlen($endereco) < 4) {
        $erro .= "<li>O endereço está muito curto.</li>";
    }
    // Verificar o preenchimento do telefone
    if (strlen($telefone) < 9) {
        $erro .= "<li>O assunto está muito curto.</li>";
    }
    // Verificar o preenchimento do pedido
    if (strlen($pedido) < 4) {
        $erro .= "<li>O assunto está incorreto.</li>";
    }

    // Validando erros
    if ($erro != '') :

        // Cria mensagem de erros. Usamos HEREDOC.
        $msgErro .= <<<TEXTO

<div class="msgErro">
    <h3>Ooooops!</h3>
    <p>Ocorreram erros que impedem o envio do seu contato:</p>
    <ul>{$erro}</ul>
    <p>Por favor corrija os erros e tente novamente.</p>
</div>
        
TEXTO;

    else :
        
        // Preparando para salvar os dados
        $sql = <<<SQL

INSERT INTO contatos
    (nome, email, senha, endereço, telefone)
VALUES
    ('{$nome}', '{$email}', '{$senha}', '{$endereco}', '{$telefone}', '{$pedido}')
;

SQL;

        // Executa a query gerada em $sql
        $conn->query($sql);

        // Prepara dados para envio por e-mail
        $msgMail .= <<<TEXTO

Um novo contato foi enviado para o site "SemNome":

    Nome: {$nome}
    E-mail: {$email}
    Senha: {$senha}
    Endereço: {$endereco}
    Telefone: {$telefone}
    Pedido: {$pedido}
TEXTO;

        // Enviando e-mail --> Não funciona no XAMPP
        // O "@" oculta mensagens de erro --> CUIDADO!
        // Dê preferência a bibliotecas de e-mail à função "mail()" do PHP
        // Por exemplo, pesquise por "PHPMailer" e outras similares
        @mail('admin@semnome.com', 'Novo contato com SemNome', $msgMail);

        // Obtendo partes do nome
        // O primeiro nome estará em $partes[0]
        $partes = explode(' ', $nome);

        // Gerando mensagem de agradecimento
        $msgOk .= <<<TEXTO

<div class="msgOk">
    <h3>Olá {$partes[0]}!</h3>
    <p>Seu contato foi enviado para a equipe do site.</p>
    <p>Se necessário, em breve responderemos.</p>
    <p><em>Obrigado...</em></p>
</div>

TEXTO;
     
    endif;

endif;

/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');

?>

<div class="row">
    <div class="col1">

        <h2>Faça seu Cadastro</h2>

        <?php
        if ($msgOk == ''):
        ?>

        <p>Preencha o formulário abaixo para fazer seu pedido pelo site.</p>

        <?php echo $msgErro ?>

        <form name="contatos" id="contatos" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8">
            <input type="hidden" name="enviado" value="ok">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome completo" value="<?php echo $nome ?>">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="nome@provedor.com" value="<?php echo $email ?>">
            </p>
            <p>
                <label for="endereço">Endereço:</label>
                <input type="text" name="endereco" id="endereco" placeholder="Endereço do cliente" value="<?php echo $endereco ?>">
            </p>
            <p>
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" placeholder="Telefone do cliente" value="<?php echo $telefone ?>">
            </p>
            <p>
                <label for="senha">Digite sua senha:</label>
                <input type="text" name="senha" id="senha" placeholder="senha do cliente" value="<?php echo $senha ?>">
            </p>
            <p>
                <label for="pedido">Faça seu Pedido:</label>
                <input type="text" name="pedido" id="pedido" placeholder="pedido do cliente" value="<?php echo $pedido ?>">
            </p>
            <p>
                <label></label>
                <button type="submit">Enviar</button>
            </p>
        </form>

        <?php
        else:
            echo $msgOk;
        endif;
        ?>

    </div>
    <div class="col2">

        <h3>Mais contatos</h3>
        <img src="/img/social01.png" alt="Mais contatos">
        <p>Você também pode falar conosco pelas redes sociais:</p>

        <ul>
            <li><a href="http://facebook.com/" target="_blank"><i class="fab fa-fw fa-facebook-square"></i> Facebook</a></li>
            <li><a href="http://youtube.com/" target="_blank"><i class="fab fa-fw fa-youtube-square"></i> Youtube</a></li>
            <li><a href="http://linkedin.com/" target="_blank"><i class="fab fa-fw fa-linkedin"></i> Linkedin</a></li>
            <li><a href="http://twitter.com/" target="_blank"><i class="fab fa-fw fa-twitter-square"></i> Twitter</a></li>
            <li><a href="http://instagram.com/" target="_blank"><i class="fab fa-fw fa-instagram"></i> Instagram</a></li>
        </ul>

    </div>
</div>









<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
