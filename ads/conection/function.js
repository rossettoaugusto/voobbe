// JavaScript Document
function transfer(nome,sobrenome,email,codcompra,compra,estabelecimento){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "https://voobbe.com.br/ads/conection/";
		
    var vars = "nome="+nome+"&sobrenome="+sobrenome+"&email="+email+"&compra="+compra+"&estabelecimento="+estabelecimento+"&codcompra"+codcompra;
    hr.open("POST", url, true);
    
	// Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			//document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
   // document.getElementById("status").innerHTML = "processing...";
	
}
