$(document).ready(() => {
    var choix = $('#doyenne').val();

    if (choix) {
        $.ajax({
            type:'POST',
            url:'../control/section.php',
            data:'choi='+choix,
            success:function(html){
                $('#section').html(html);
            }
        });
    }
});

$(document).ready(function() {
    $('#doyenne').on('change',function() {
        var choix = $(this).val();

        if (choix) {
            $.ajax({
                type:'POST',
                url:'../control/section.php',
                data:'choi='+choix,
                success:function(html){
                    $('#section').html(html);
                }
            });
        }
    });
});