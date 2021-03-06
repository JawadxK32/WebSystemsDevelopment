$(function ()
{
  $('.error').addClass('placehold');
  $('form').on('submit', function(e){
    e.preventDefault();
    $this = $(this);
    if(validateForm()){
      $.post('http://www2.scs.ryerson.ca/~jkhudada/cgi-bin/lab06.rb', $('form').serialize(), function(data) {
        $('.container').html(data);
      var $nums = $('.num-set');
        $nums.hide().each(function(index) {     
        $(this).delay(450 * index).fadeIn(1600);     
      });
   });
    }
  });
});

function validateForm()
{
  var error = true;
  var $errors = $('span.error');
  var regex = [/^[A-z]+$/,/^[A-z]+$/, /^[a-zA-Z0-9\s,'-]*$/,/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/ ];
  var fname = $('input#fname').val();
  var lname = $('input#lname').val();
  var address = $('input#address').val();
  var phone = $('input#phone').val();
  var efname = $('span#fname_error');
  var elname = $('span#lname_error');
  var eaddress = $('span#address_error');
  var ephone = $('span#phone_error');

  if (regex[0].test(fname)) { efname.addClass('placehold'); }
  else {
      efname.removeClass('placehold');
      error = false;
  }
  if (regex[0].test(lname)) { elname.addClass('placehold'); }
  else {
      elname.removeClass('placehold');
      error = false;
  }
  if (regex[2].test(address) && address) { eaddress.addClass('placehold'); }
  else{
      eaddress.removeClass('placehold');
      error = false;
  }
  if (regex[3].test(phone)) { ephone.addClass('placehold'); }
  else{
      ephone.removeClass('placehold');
      error = false;
  }
  return error;
}