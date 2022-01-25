<select class="searh-category">
    <option value="0">Todas las Categorias</option>
    <?php foreach($categories as $category) { ?>
        <?php $category['Id'] = htmlentities($categoria['Id'], ENT_QUOTES | ENT_HTML5, 'UTF-8');?>
        <?php $category['nombre'] = htmlentities($categoria['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');?>
        <option value="<?php echo $category['Id']; ?>"><?php echo $category['nombre']; ?></option>
    <?php } ?>
</select>