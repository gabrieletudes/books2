<!--
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/03/16
 * Time: 14:25
 -->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $data['page_title']?></title>
</head>
<body>
    <?php include ('partials/_main_navigation.php'); ?>
    <?php include ($data['view']);?>
</body>
</html>
