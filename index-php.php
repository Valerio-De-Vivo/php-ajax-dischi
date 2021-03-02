<?php 
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php dischi</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>TechnoPiù</h1>
    </header>

    <main>
        <?php 
            foreach ($vinili as $key => $vinile) {?>

                <div class="vinil">
                    <img src="css/img/<?php echo $vinile['copertina'] ?> " alt="">
                    <h2><?php echo $vinile['titolo'] ?></h2>
                    <h3><?php echo $vinile['produttore'] ?></h3>
                    <p><?php echo $vinile['etichetta'] ?> / </p>
                    <p><?php echo $vinile['anno'] ?></p>
                </div>
            <?php }?>
    </main>

</body>

</html>