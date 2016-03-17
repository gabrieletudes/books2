
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

<div class="">
    <a href="?a=index&e=authors">Tout les Auteurs</a>
</div>
