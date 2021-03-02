
    
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