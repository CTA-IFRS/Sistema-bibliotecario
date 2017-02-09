<?php
$rents = OperationData::getRents();
?>
<div class="row">
    <div class="col-md-12">
        <h2><?php echo L::titles_homepage; ?></h2>
        <a href="#laterents" class="only-sr">Pular para Tabela de Empréstimos Atrasados</a>
        <a href="#explain" class="only-sr">Pular para Explicação do Sistema</a>
        <hr>
    </div>
    <div class="col-md-5">
        <h3><?php echo L::titles_welcome; ?></h3>
        <p>O Sistema Bibliotecário é um sistema simples de gerenciamento de bibliotecas. Foi originalmente desenvolvido pelo espanhol <a href="http://evilnapsis.com">evilnapsis</a>, e modificado pela equipe do <a href="http://cta.ifrs.edu.br">Centro Tecnológico de Acessibilidade do IFRS</a> à fim de torná-lo mais acessível. As principais características são:</p>
        <ul>
            <li>Clientes: gestão de clientes que podem retirar livros</li>
            <li>Categorias de livros</li>
            <li>Autores: gestão de autores de livros</li>
            <li>Editoras: gestão de editoras</li>
            <li>Livros: gestão dos livros que compõem o acervo bibliotecário, assim como os exemplares de cada livro</li>
            <li>Usuário: Possibilidade de 1 ou mais usuário que tem acesso ao sistema</li>
            <li>Emprestimos: Controle de empréstimos dos exemplares dos livros</li>

        </ul>
        <h4>Novidades da Versao 3.0</h4>
        <ul>
            <li>Correção de bugs</li>
            <li>Correções no banco de dados</li>
            <li>Melhorias diversas em relação a acessibilidade do sistema, principalmente para pessoas que utilizam leitores de tela</li>
            <li>Internacionalização, possibilitando múltiplos idiomas</li>
        </ul>
        <h4>Saiba Mais</h4>
        <ul>
            <li><a href="https://github.com/evilnapsis/library-php">Repositório do Projeto Original (em espanhol)</a></li>
            <li><a href="https://github.com/CTA-IFRS/Sistema-bibliotecario">Repositório do Projeto do CTA</a></li>
            <li><a href="http://cta.ifrs.edu.br">Site do Centro Tecnológico de Acessibilidade do IFRS</a></li>
        </ul>
    </div>
    <div class="col-md-7">
        <?php ob_start(); ?>
        <h3><?php echo L::titles_late_rents; ?></h3>
        <?php
        foreach ($rents as $rent)
        {
            if (strtotime(Dates::convertDateTypesToDB($rent->finish_at)) < strtotime(date('Y-m-d')))
                $none = false;
            else
                if (!isset($none)) $none = true;
        }
        if (isset($none)) if (!$none):
        ?>
         <table id="datatable" class="table table-hover">
            <thead>
            <tr>
                <th><?php echo L::fields_copie; ?></th>
                <th><?php echo L::fields_book; ?></th>
                <th><?php echo L::fields_client; ?></th>
                <th><?php echo L::fields_expire; ?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($rents as $rent):
                $item = $rent->getItem();
                $book = $item->getBook();
                $client = $rent->getClient();

                if (strtotime(Dates::convertDateTypesToDB($rent->finish_at)) < strtotime(date('Y-m-d'))):
            ?>
            <tr>
                <td><?php echo $item->code; ?></td>
                <td><?php echo $book->title; ?></td>
                <td><?php echo $client->name." ".$client->lastname; ?></td>
                <td><?php echo $rent->finish_at; ?></td>
            </tr>
            <?php
            endif;
            endforeach;
            ?>
        </table>
        <?php
        $content = ob_get_contents();
        ob_end_flush();
        ?>
        <form target="_blank" action="index.php?action=pdfreports" method="post">
            <textarea name="table" id="contenttable" cols="30" rows="10" style="display: none !important;"><?php echo $content; ?></textarea>
            <button type="submit" class="btn btn-primary" id="pdfgen">Criar PDF</button>
        </form>
        <?php
        else: echo '<p class="alert alert-info">' . L::messages_no_late_rents . '</p>';
        endif;
        else echo '<p class="alert alert-info">' . L::messages_no_late_rents . '</p>';
        ?>
    </div>

</div>
