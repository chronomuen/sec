$('#userModal').on('show.bs.modal', function() {
  $("#username_info").append($("#username").val());
  $("#pass_info").append($("#password").val());
  $("#id_info").append($("#id").val());
  $("#fname_info").append($("#fname").val());
  $("#lname_info").append($("#lname").val());
  $("#email_info").append($("#email").val());
  $("#dept_info").append($("#dept option:selected").text());
  $("#job_info").append($("#job").val());
});
