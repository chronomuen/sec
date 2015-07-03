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

$(".setAdminButton").click(function(){
  $("#modalMessage").html("");
  var $row = $(this).closest("tr");

  var $IDcol = $row.find("td:nth-child(1)");
  var $IDtext = "";
  $.each($IDcol, function() {
    $IDtext = $(this).text();
  });

  var $namecol = $row.find("td:nth-child(2)");
  var $name = "";
  $.each($namecol, function() {
       $name = $(this).text();
   });

  var $admincol = $row.find("td:nth-child(5)");
  var $admin = "";
  $.each($admincol, function() {
    $admin = $(this).text();
  });

  if($admin == "Admin"){
    $admincol.html("Non-admin");
    $("#modalMessage").html("<b>" + $name + "</b> is now a <b>Non-Admin</b> user.");
  }
  else if($admin == "Non-admin"){
    $admincol.html("Admin");
    $("#modalMessage").html("<b>" + $name + "</b> is now an <b>Administrator</b>.");
  }

  $("#adminUserID").val($IDtext);
  $("#adminOption").val($admin);
  //$("#submitAdmin").click(); // (include when database comes)

});
