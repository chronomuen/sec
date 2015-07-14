$("#password").val("");

$(".deactivateButton").click(function(){
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

     var $statuscol = $row.find("td:nth-child(5)");
     var $status = "";
     $.each($statuscol, function() {
       $status = $(this).text();
     });

     if($status == "Active"){
         $statuscol.html("Inactive");
         $("#modalMessage").html("<b>" + $name + "</b> is now <b>Inactive</b>.");
     }
     else if($status == "Inactive"){
         $statuscol.html("Active");
         $("#modalMessage").html("<b>" + $name + "</b> is now <b>Active</b>.");
     }

     $("#userID").val($IDtext);
     $("#option").val($status);

    // $("#submitDeactivate").click(); -> for database

});
