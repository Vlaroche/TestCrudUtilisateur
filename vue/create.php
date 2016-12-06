<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Création Utilisateur</title>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="../bootstrap/js/jquery-3.1.1.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="span 10 offset1">
				<div class="row">
					<h1><strong>Créer un Utilisateur</strong></h1>
					<?php
						if ($errors) {
							echo '<ul class="errors">';
							foreach ($errors as $field => $error) {
								echo '<li>' . htmlentities($error) . '</li>';
							}
							echo '</ul>';
						}
					?>
				</div>

				<form class="form-horizontal" action="" method="post">
					<div class="control-group">
						<label class="control-label">Nom</label>
							<div class="controls">
								<input type="text" name="nom" placeholder="nom" value="<?php echo htmlentities($nom); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                    
                                    <div class="control-group">
						<label class="control-label">Prénom</label>
							<div class="controls">
								<input type="text" name="prenom" placeholder="nom" value="<?php echo htmlentities($prenom); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Email</label>
							<div class="controls">
								<input type="text" name="email" placeholder="email" value="<?php echo htmlentities($email); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Téléphone</label>
							<div class="controls">
								<input type="text" name="telephone" placeholder="telephone" value="<?php echo htmlentities($telephone); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                    
                                    <div class="control-group">
						<label class="control-label">Mot de passe</label>
							<div class="controls">
								<input type="text" name="mdp" placeholder="mdp" value="<?php echo htmlentities($mdp); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
                                    
					<br>
					<div class="form-actions">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success">Créer</button>
						<a class="btn btn-default" href="index.php">Retour</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>