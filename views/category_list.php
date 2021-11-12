<select class="searh-category">
    <option value="0">Todas las Categorias</option>
    <?php foreach($categories as $category) { ?>
        <option value="<?php echo $category['Id']; ?>"><?php echo $category['nombre']; ?></option>
    <?php } ?>
</select>