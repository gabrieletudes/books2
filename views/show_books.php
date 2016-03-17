
<!--
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/03/16
 * Time: 14:55
 */

-->
<h1><?php echo $data['book']->title; ?></h1>

<div class="cover">
    <img src="<?php echo $data['book']->cover; ?>" alt="">

</div>


<?php if ($data['book']->summary): ?>
<div class="summary">
    <?php echo $data['book']->summary; ?>
</div>

<?php endif; ?>

<?php  if($data['authors']): ?>
<ul class="authors">
    <?php foreach( $data['authors']as $author)?>
        <li class="author">
            <a href="?a=show&e=authors&id=<?php echo $author->id; ?>&with=books"><?php echo $author->name; ?></a>
        </li>
        <?php ?>
</ul>
<?php endif; ?>

<?php  if($data['editors']): ?>
    <ul class="editors">
        <?php foreach( $data['editors']as $editor )?>
        <li class="editor">
            <a href="?a=show&e=editors&id=<?php echo $editor->id; ?>&with=books"><?php echo $editor->name; ?></a>
        </li>
        <?php ?>

    </ul>
<?php endif; ?>
<div class="">
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Tout les livres</a>
</div>