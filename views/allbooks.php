<ul>
    <?php foreach($data['books'] as $book):?>
    <!-- $_SERVER['PHP_SELF'] va chercher le fichier index du site-->
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $book->id;?>">
            <?php echo $book ->title; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>