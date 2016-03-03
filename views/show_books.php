
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

<div class="">
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Tout les livres</a>
</div>