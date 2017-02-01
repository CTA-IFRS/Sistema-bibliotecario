
<?php if(isset($_GET["product"]) && $_GET["product"]!=""):?>
    <?php
    $products = ItemData::getLike($_GET["product"]);
    if(count($products)>0){
        ?>
        <h2><?php echo L::titles_search_result; ?></h2>
        <table id="datatable" class="table  table-hover">
            <thead>
            <th><?php echo L::fields_book; ?></th>
            <th><?php echo L::fields_code; ?></th>
            <th><?php echo L::fields_patrimony; ?></th>
            <th><?php echo L::fields_status; ?></th>
            </thead>
            <?php
            $products_in_cero=0;
            foreach($products as $product):
                ?>

                <tr>
                    <td><?php
                        echo BookData::getById($product->book_id)->title;
                    ?></td>
                    <td><?php echo $product->code; ?></td>
                    <td><?php echo ($product->patrimonio == null) ? L::fields_no_patrimony : $product->patrimonio; ?></td>
                    <td><?php
                        switch ($product->status_id) {
                            case 1:
                                echo L::fields_is_available;
                                break;
                            case 2:
                                echo L::fields_busy;
                                break;
                            case 3:
                                echo L::fields_inactive;
                                break;
                        }
                        ?></td>
                </tr>

            <?php endforeach;?>
        </table>

        <?php
    }else{
        echo "<br><p class='alert alert-danger'>" . L::messages_item_not_found . "</p>";
    }
    ?>
    <hr><br>
<?php else:
    ?>
<?php endif; ?>
