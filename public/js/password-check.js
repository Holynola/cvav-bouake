$(document).ready(function() {
  $('#save').on('click', function(event) {
    var pass1 = $('#password1').val();
    var pass2 = $('#password2').val();

    if (pass1 !== pass2) {
      event.preventDefault();
      alert('Les mots de passe sont différents');
    }
  });
});
