<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C & M Rentals</title>
    <link rel="icon" href="<?php echo url('/images/logo.png');?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url('/css/main.css');?>">
    <link rel="stylesheet" href="<?php echo url('/css/header.css');?>">
    @yield('css')
</head>
<body>
    <?php
        echo view('header');
    ?>

    @yield('cuerpo')

    <script src="<?php echo url('/js/jquery.js');?>"></script>
    <script type="text/javascript">
        var host = "<?php echo url('/');?>";
        //console.log(host);
    </script>
    <script src="<?php echo url('/js/header.js');?>"></script>
</body>
</html>