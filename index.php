<!DOCTYPE html>
<!-- Index Ejemplo -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>To Do list</title>
        <!-- Icons Fontawesome link -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php 
            if (isset($_GET['D'])) {
                $FileName = "Infrastructure/dB/{$_GET['D']}.php";
                if (file_exists($FileName)) {
                    include_once $FileName;
                } else {
                    include 'Infrastructure/views/error.php';
                }
            }else{
                include "Infrastructure/dB/selectLists.php";
            }
        ?>
    </body>
</html>