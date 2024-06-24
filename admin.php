<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="public/css/pkpwang.css" type="text/css" />
	
    <title>Test de Patrick</title>
</head>
<body>
	<header>
		<h1>Panel d'administration</h1>
	</header>
	
	<div class="container">
		<h2>Ajouter un article</h2>
		<div class="admin_upload_bloc">
			
			<p class="h3">Depuis le formulaire</p>
		  
			<form action="/kpatrick/Controller/addItemController.php" method="post">
				<div class="form-group">
					<label for="item_name">Nom de l'article</label>
					<input type="text" class="form-control" name="item_name" id="item_name" placeholder="Nom de l'article" required >
				</div>
		  
				<div class="form-group">
					<label for="description_item">Description de l'article</label>
					<textarea class="form-control" id="description_item" name="description_item" rows="3" required></textarea>
				</div>
				<input id="source_id" name="source_id" type="hidden" value="1" />

				<input type="submit" value="Ajouter!" />
			</form>
			
		</div>
		
		<div class="admin_upload_bloc">
			<p class="h3">Depuis un flux rss</p>
			<form >
				<div class="form-group">
					<label for="feed_name">Nom du flux</label>
					<input type="text" class="form-control" id="feed_name" placeholder="Nom du flux">
				</div>
				<div class="form-group">
					<label for="feed_link">url du flux rss</label>
					<input type="text" class="form-control" id="feed_link" placeholder="Url du flux">
				</div>
				<input id="source_id" name="source_id" type="hidden" value="2" />
				<input type="submit" value="Ajouter!" />
			</form>
		</div>
				
		<div class="admin_upload_bloc">
			<p class="h3">Depuis un fichier</p>
			
				<form>
				 <div class="custom-file">
					<input type="file" class="custom-file-input" id="item_from_custom_file" required>
					<input id="source_id" name="source_id" type="hidden" value="3" />
					<label class="custom-file-label" for="item_from_custom_file">Veillez charger votre fichier</label>
					<br>
					<input type="submit" value="Ajouter!" />
				</div>
			</form>
		</div>
		
	</div>

</body>