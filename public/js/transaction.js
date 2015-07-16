$("#transButton").click(function () {
  var tid =  $("#transaction_id").val();
  var random = Math.floor((Math.random() * 10000) + 1);
  $("#password").val(tid + random);
  $('#transButton').attr("disabled", true);
});

$('#transactionModal').on('show.bs.modal', function(e) {
  $("#id_info").text($("#tid").val());
});

$( "#date_submitted" ).datepicker();

$(function() {
    $( "#datepicker" ).datepicker();
 });
