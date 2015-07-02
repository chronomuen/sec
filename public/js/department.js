$("#select").change(function () {
  var selectedDept = $("#select").val();
   $("#department").text(selectedDept);
   $("#deptName").val(selectedDept);
});

$('#transactionModal').on('show.bs.modal', function(e) {
  $("#select").prop('selectedIndex',0);
  $("#department").text("____________");
  var transID = $(e.relatedTarget).data('transaction-id');
  $(e.currentTarget).find('p[id="transaction_title"]').text(transID);
  $(e.currentTarget).find('input[id="transaction_id"]').val(transID);
});
