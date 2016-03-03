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
    <title>Books</title>
</head>
<body>
    <ul>
    <?php foreach($books as $book):?>
    <li><?php  echo $book ->title; ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>