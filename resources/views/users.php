<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale() )}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
</head>
<body>
    <h1><?php echo e($title)?></h1>
        <?php foreach ($variable as $arrayuser):?>
            <li><?php echo e($arrayuser) ?></li>
        <?php endforeach;?>

</body>
</html>