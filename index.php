<?php

include "./functions.php"


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container py-5">

        <form method="GET">
            <input type="text" name="user-password" class="mb-5">

            <button type="submit" class="btn btn-danger">Genera</button>
            <div class="container-checks">
                <div class="d-flex align-items-center gap-1">
                    <input type="checkbox" checked name="minuscole"> <span><strong>Lettere minuscole</strong></span>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <input type="checkbox" name="maiuscole"> <span><strong>Lettere maiuscole</strong></span>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <input type="checkbox" name="numeri"> <span><strong>Numeri</strong></span>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <input type="checkbox" name="speciali"> <span><strong>Caratteri speciali</strong></span>
                </div>



            </div>
            <div>
                <h4 class="pt-5">Nuova password generata:</h4>
                <h5 class="py-3"> <?php echo $pwgen ?></h5>
            </div>


        </form>
    </div>

</body>

</html>