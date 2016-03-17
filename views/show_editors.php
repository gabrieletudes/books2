
<!--
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/03/16
 * Time: 14:55
 */

-->
<h1><?php echo $data['editor']->name; ?></h1>

<div class="logo">
    <img src="<?php echo $data['editor']->logo; ?>" alt="">

</div>


<?php if ($data['editor']->summary): ?>
<div class="summary">
    <?php echo $data['editor']->summary; ?>
</div>

<?php endif; ?>

<div class="">
    <a href="?a=index&e=editors">Tout les Editor</a>
</div>
