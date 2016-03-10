<ul>
    <?php foreach($data['authors'] as $author):?>
    <!-- $_SERVER['PHP_SELF'] va chercher le fichier index du site-->
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>?a=show&e=authors&id=<?php echo $author->id;?>">
            <?php echo $author->name; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
