<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require("Model/connecteur.php"); ?>
<html lang="fr" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="public/css/theme.default.min.css" type="text/css" />
	
    <title>Test de Patrick</title>
</head>
<body>

	<header>
		<h1>Bonjour la Terre</h1>
	</header>


	<nav>
      <ul>
        <li><a href="/kpatrick">Accueil</a></li>
        <li><a href="/kpatrick/admin.php">Administration</a></li>
      </ul>

      <form>
        <input type="search" name="q" placeholder="Rechercher" />
        <input type="submit" value="Lancer !" />
      </form>
    </nav>
	
	<main>
	
	<?php
		$db = new MyConnect();
		$temsList = $db->getListItems();
		
	?>
		<table id="myTable" class="tablesorter">
		  <thead>
			<tr>
			  <th>Nom de l'article</th>
			  <th>La source</th>
			  <th>Description</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				foreach ($temsList as $list) {
					echo "<tr>".
						"<td>".$list['name']."</td>".
						"<td>".$list['source_id']." ( ". $db->getSourceName(intval($list['source_id']))['name'] ." ) </td>".
						"<td>".$list['content']."</td>".
					"</tr>";
				}
			?>
		  </tbody>
		</table>
	</main



	<footer>
      
    
   
		<script type="text/javascript" src="public/js/jquery-3.7.1.min.js"></script>
		<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="public/js/jquery-latest.js"></script>
		<script type="text/javascript" src="public/js/jquery.tablesorter.js"></script>
		
		<script>
	 
		$(function() {
			  $("#myTable").tablesorter();
		});
				 
		</script>
		<p>©Copyright 2024 Alstegab</p>
	</footer>
</body>
</html>