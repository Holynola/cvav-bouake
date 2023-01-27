$(document).ready(function() {
    $('#pasto-select').on('change', function() {
        var choix = $(this).val();

        document.location.href = 'work.php?anpasto='+choix;
    });
});