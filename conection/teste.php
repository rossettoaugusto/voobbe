<script type="text/javascript">
	function soap() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open('POST', 'https://voobbe.com.br/ads/conection/', true);

		// build SOAP request
		var sr ='teste';

		xmlhttp.onreadystatechange = function () {
			if (xmlhttp.readyState == 4) {
				if (xmlhttp.status == 200) {

					alert('done use firebug to see response');
				}
			}
		}
		// Send the POST request
		xmlhttp.setRequestHeader('Content-Type', 'text/xml');
		xmlhttp.send(sr);
		// send request
		// ...
	}
</script>
    <form name="Demo" action="" method="post">
        <div>
            <input type="button" value="Soap" onclick="soap();" />
        </div>
    </form>