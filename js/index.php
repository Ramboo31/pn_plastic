<html>
<head>
	<title> test</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="well">

			<input type="text" class="span" id="typeahead" data-provide="typeahead">
	</div>
<script src="js/typeahead.js"></script>
<script src="jquery-2.0.3.min.js"></script>
<script type="bootstrap.js"></script>
<script>
	$(function(){
		$("#typeahead").typeahead({
				source: ["youtube"]
		});

	});

</script>
</body>
</html>