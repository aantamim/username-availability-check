<!DOCTYPE html>
<html>
<head>
	<title>Live Username Availability Check dengan PHP dan AJAX</title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<form>
	<input type="text" id="username" autocomplete="off">
	<div id="result"></div>
</form>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#username').keyup(function() {
			var uname = $('#username').val();
			if(uname == 0) {
				$('#result').text('');
			}
			else {
				$.ajax({
					url: 'cek.php',
					type: 'POST',
					data: 'username='+uname,
					success: function(hasil) {
						if(hasil > 0) {
							$('#result').text('Username tidak tersedia');
						}
						else {
							$('#result').text('Username tersedia');
						}
					}
				});
			}
		});
	});
</script>