$(function() {
  $('#contact-form').on('submit', function(e) {
    e.preventDefault();

    var data = $(this).serialize();

    $.ajax({
      url: '/contactus',
      method: 'POST',
      data: data,
      success: function(data) {
        $('.alert-danger').hide();
        $('.alert-success').show();
        $('input').val('');
        $('textarea').val('');
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
        $('.alert-danger').show();
        $('.alert-success').hide();
      }
    })
  });
});
