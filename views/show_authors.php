
<!--
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/03/16
 * Time: 14:55
 */

-->
<h1><?php echo $data['author']->name; ?></h1>

<div class="photo">
    <img src="<?php echo $data['author']->photo; ?>" alt="">

</div>


<?php if ($data['author']->bio): ?>
<div class="bio">
    <?php echo $data['author']->bio; ?>
</div>

<?php endif; ?>

<?php  if($data['authors']): ?>
    <ul class="editors">
        <h2>Les &Eacute;diteurs ou cette autheur a publie:</h2>
        <?php foreach( $data['authors']as $author ):?>
        <li class="editor">
            <a href="?a=show&e=editors&id=<?php echo $author->id; ?>&with=authors"><?php echo $author->name; ?></a>
        </li>
        <?php endforeach;?>

    </ul>
<?php endif; ?>
hello
<div class="">
    <a href="?a=index&e=authors">Tout les auteurs</a>
</div>
