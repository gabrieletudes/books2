<ul>
    <?php foreach($data['books'] as $book):?>
    <!-- $_SERVER['PHP_SELF'] va chercher le fichier index du site-->
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>?a=show&e=books&id=<?php echo $book->id;?>&with=authors,editors">
            <?php echo $book->title; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>