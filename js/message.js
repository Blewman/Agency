
   $('#messages').submit(function(event) {
event.preventDefault();
  var dataReq = $('#messages').serialize(); //здесь подставить нужный селектор
    $.ajax({
      type: 'POST',
      url: 'send.php', //путь обработчика
      data: dataReq,
      success: function(dataResp) {
        // $('#all').html(dataResp);
        $('#messages').trigger("reset");
        $('#all').html("Ваше сообщение успешно отправлено!");
      }
   
    });
});



