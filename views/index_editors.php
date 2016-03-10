<ul>
    <?php foreach($data['editors'] as $editor):?>
    <!-- $_SERVER['PHP_SELF'] va chercher le fichier index du site-->
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>?a=show&e=editors&id=<?php echo $editor->id;?>">
            <?php echo $editor->name; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
