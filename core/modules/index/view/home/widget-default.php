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
<!--        <p>Dolor sit amet, consectetur adipisicing elit. Doloremque dolorum, excepturi exercitationem minima nam quas sit veritatis. Autem debitis explicabo labore libero natus optio provident soluta voluptatibus. Consequuntur, rem totam?</p>-->
<!--        <ul>-->
<!--            <li>Lorem ipsum</li>-->
<!--            <li>Dolor sit amet</li>-->
<!--            <li>Consectetur adipiscing elit</li>-->
<!--        </ul>-->
<!--        <p>Dolor sit amet, consectetur adipisicing elit. Doloremque dolorum, excepturi exercitationem minima nam quas sit veritatis. Autem debitis explicabo labore libero natus optio provident soluta voluptatibus. Consequuntur, rem totam?</p>-->
    </div>
    <div class="col-md-7">
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
        <table class="table table-hover">
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
        endif;
        else
            echo '<p class="alert alert-info">' . L::messages_no_late_rents . '</p>';
        ?>
    </div>

</div>
