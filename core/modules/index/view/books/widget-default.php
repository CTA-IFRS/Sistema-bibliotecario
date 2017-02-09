<?php
?>
<div class="row">
	<div class="col-md-12">
          <a href="index.php?view=newbook" class="btn btn-default pull-right"><i class="fa fa-book"></i> <?php echo L::buttons_new_book; ?></a>

        <?php ob_start(); ?>
		<h2><?php echo L::titles_books; ?></h2>


		<?php
$books = BookData::getAll();
		if(count($books)>0){
			?>
			 <table id="datatable" class="table  table-hover">
			<thead><tr>
<th><?php echo L::fields_isbn; ?></th>
			<th><?php echo L::fields_title; ?></th>
			<th><?php echo L::fields_subtitle; ?></th>
			<th><?php echo L::fields_copies; ?></th>
			<th><?php echo L::fields_available; ?></th>
			<th><?php echo L::fields_category; ?></th>
			<th id="ops"><?php echo L::fields_operations; ?></tr></th>
</thead>
			<?php
			foreach($books as $user){
				$category  = $user->getCategory();
				?>
				<tr>
				<td><?php echo $user->isbn; ?></td>
				<td><?php echo $user->title; ?></td>
				<td><?php echo $user->subtitle; ?></td>
				<td><?php echo ItemData::countByBookId($user->id)->c; ?></td>
				<td><?php echo ItemData::countAvaiableByBookId($user->id)->c; ?></td>
				<td><?php if($category!=null){ echo $category->name; }  ?></td>
                <td id="ops" style="width:210px;"><a href="index.php?view=items&id=<?php echo $user->id;?>" class="btn btn-default btn-xs"><?php echo L::buttons_copies; ?></a> <a href="index.php?view=editbook&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs"><?php echo L::buttons_edit; ?></a> <a href="index.php?action=delbook&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs"><?php echo L::buttons_delete; ?></a></td>
				</tr>
				<?php

			}


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
		}else{
			echo "<p class='alert alert-danger'>" . L::messages_no_books . "</p>";
		}


		?>


	</div>
</div>
