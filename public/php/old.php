<?php
    include('../control/dbConf.php');
    include('../control/old-ex.php');
?>
<style>
    @import url("../public/css/old.css");
</style>

<section class="old">
    <h4>Liste des militants(es) existants(es)</h4>

    <?php
        while ($donV = $repv->fetch()) {
    ?>
    <div><a href="../pages/add-old.php?id=<?= $donV['idVaillant'] ?>"><?= $donV['fullname'] ?></a></div>
    <?php
        }
    ?>    
    
</section>