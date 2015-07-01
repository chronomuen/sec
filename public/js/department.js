$("#select").change(function () {
   $("#department").text($("#select").val());
});

$("#transactions").click(function () {
   $("#select").prop('selectedIndex',0);
   $("#department").text("____________");
});