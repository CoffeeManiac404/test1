$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}
 
function update() {

	$.getJSON("tampil.php", function(data) {

		$("#susu").empty();

		$.each(data.result, function() {

			var aneh = this['status'];

			if (aneh == 'SELESAI') 
			{
				$("#susu").append("<tr class='success'><td>"+this['nopol']+"</td><td>"+this['jenken']+"</td><td>"+this['nama']+"</td><td>"+this['status']+"</td></tr>");
			}
			else if(aneh == 'PROSES')
			{
				$("#susu").append("<tr class='danger'><td>"+this['nopol']+"</td><td>"+this['jenken']+"</td><td>"+this['nama']+"</td><td>"+this['status']+"</td></tr>");
			}				
		});
	});

	$.getJSON("selesai.php", function(data) {



		$("#kocak").empty();

		$.each(data.result2, function() {

			$("#kocak").append("<h1>"+this['nopoltampil']+"</h1>");				
		});
	});
}

