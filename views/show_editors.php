
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

<?php  if($data['authors']): ?>
    <ul class="authors">
        <h2>Les Autheurs qui ont publie chez cette &eacute;diteur:</h2>
        <?php foreach( $data['authors']as $autheur ):?>
            <li class="editor">
                <a href="?a=show&e=authors&id=<?php echo $autheur->id; ?>&with=editors"><?php echo $autheur->name; ?></a>
            </li>
        <?php endforeach;?>
    </ul>
<?php endif; ?>

<div class="">
    <a href="?a=index&e=editors">Tout les &eacute;diteurs</a>
</div>
