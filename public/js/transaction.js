$("#transButton").click(function () {
  var pid =  $("#pid").val();
  var random = Math.floor((Math.random() * 10000) + 1);
  $("#tid").val(pid + random);
  $('#transButton').attr("disabled", true);
});

$('#transactionModal').on('show.bs.modal', function(e) {
  $("#id_info").text($("#tid").val());

});
