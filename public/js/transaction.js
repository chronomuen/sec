$("#transButton").click(function () {
  var tid =  $("#transactionID").val();
  var random = Math.floor((Math.random() * 10000) + 1);
  $("#tpass").val(tid + random);
  $('#transButton').attr("disabled", true);
});

$('#transactionModal').on('show.bs.modal', function(e) {
  $("#id_info").text($("#tid").val());
});

$( "#dateSubmitted" ).datepicker();

$(function() {
    $( "#datepicker" ).datepicker();
 });
