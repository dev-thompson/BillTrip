<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/image/favicon-2.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/all.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>
        <?php 
            if(isset($title)) {
                echo $title . ' | '. 'Payflo';
            }else {
                echo "User Dashboard | Payflo";
            }
        ?>
    </title>
</head>
<body>