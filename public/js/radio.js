function uncheck1() { document.getElementById('button').checked = false;; }
function uncheck2() { document.getElementById('button').checked = false;; }
function uncheck3() { document.getElementById('button').checked = false; }
	
$("#submit").click(function () {
	document.getElementById("tr").style.display = "";
	hide1();
	hide2();
	hide3();
	uncheck1();
	uncheck2();
	uncheck3();
});