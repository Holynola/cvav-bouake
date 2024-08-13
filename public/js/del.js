$(document).ready(function() {
    $('.delFiche').on('click', function(event) {
        var val = confirm("Etes-vous sûr de vouloir supprimer cette fiche ?");

        if (val == false) {
            event.preventDefault();
        }
    });

});