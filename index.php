<html>
<head>
	<title>Less Compiler using less.php</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<h1>Less Compiler using less.php</h1>
<div class="container">

	

	<h3>
		less compiler for use when on my chromebook. uses <a href="https://github.com/oyejorge/less.php">less.php</a>.
	</h3>

	<p class="usage">
		change the following variables:
		<br>
		<pre>


			$less_directory = 'less'; <span>// the path/to/directory where your less file is located</span>
			<br>
			$css_directory 	= 'css'; <span>// the path/to/directory where your css file should be located</span>
			<br>
			$less_file 	= 'styles'; <span>// the name of your less stylesheet which will be the name of your css stylesheet</span>
		</pre>

		<br>

	</p>

	<p>
		run the file by pointing your browser to http://yourdomain.com/path/to/lesscompiler.php. 
		<br>
		or if you are using this page, hit the button below.
	</p>

	<p class="compile">
		<a href="lesscompiler.php">compile that shiz</a>
		<span class="hide" id="result"></span>
	</p>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(function() {



	$('.compile a').on('click', function() {
		var path = $(this).attr('href');

		jQuery.ajax({
				url: path,
				type: 'POST',
				dataType: 'html',
				
				complete: function(xhr, textStatus) {
					//called when complete
					$('#result').addClass('show');
		  		},
		  		success: function(data, textStatus, xhr) {
					//called when successful
					$('#result').load(path);
					console.log('success: ' + data);
				},
				error: function(xhr, textStatus, errorThrown) {
					//called when there is an error
					$('#result').html('cua cua');
					console.log(errorThrown);
		  		}
		});

		return false;


	});




});

</script>

</body>
</html>
