<?php
namespace views\web\devices ;

function render_view($content) {
?>	
	<!doctype html>
	<html lang="en">
	  <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	   <title>ESMB - Easy Smart Home Bridging</title>
	</head>
	 <body>
<?php 
	include __BASEDIR__."/views/lib/navbar.php" ;
?>
	<div id=footer class="container">
		<table class="table table-striped  table-hover ">
			<thead >
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Type</th>
					<th scope="col">Traits</th>
					<th scope="col">Attributes</th>
					<th scope="col">State</th>
					<th scope="col">Param</th>
				</tr>
			</thead>
			<tbody>
<?php
				foreach($content as $dev) {
					echo "<tr>" ;
						echo "<td>".$dev["name"]."</td>" ;
						echo "<td>".$dev["type"]."</td>" ;
						echo "<td>".$dev["traits"]."</td>" ;
						echo "<td><pre class=pre-scrollable><code>".$dev["attributes"]."</code></pre></td>" ;
						echo "<td>".$dev["state"]."</td>" ;
						echo "<td>".$dev["param"]."</td>" ;
					echo "</tr>" ;
				}
?>

		</tbody>
	</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
<?php
} ;
