<?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
    }

    if (isset($_GET['statut'])) {
        $stt = $_GET['statut'];
    }
?>

<script>
    var message = "<?php echo $msg; ?>";

    if (message != '') {
        alert(message);
    }
 
</script>