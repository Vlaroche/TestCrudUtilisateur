<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="../bootstrap/js/jquery-3.1.1.js"></script>
		<title>CRUD Utilisateur </title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1><strong>Liste des Utilisateurs</strong></h1>
			</div>

			<div class="row">
                            </br>
                                    <a href="index.php?op=nouveau" class="btn btn-success">Créer</a>
					
				<table class="table table-striped">
					<thead>
						<tr>
                                                    <th><a href="?orderby=id">#</th>
                                                    <th><a href="?orderby=nom">Nom</a></th>
                                                    <th><a href="?orderby=prenom">Prenom</a></th>
                                                    <th><a href="?orderby=email">Email</a></th>
                                                    <th><a href="?orderby=telephone">Téléphone</a></th>
                                                    <th><a href="?orderby=mdp">Mot de Passe</a></th>
                                                    <th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($utilisateurs as $utilisateurs) : ?>						
							<tr>
                                                            <td><?php echo htmlentities($utilisateurs->id);?></td>
								<td><?php echo htmlentities($utilisateurs->nom);  ?></td>
                                                                <td><?php echo htmlentities($utilisateurs->prenom);  ?></td>
								<td><?php echo htmlentities($utilisateurs->email); ?></td>
								<td><?php echo htmlentities($utilisateurs->telephone); ?></td>
                                                                <td><?php echo htmlentities($utilisateurs->mdp);  ?></td>
								<td>
									
									<a class="btn btn-success" href="index.php?op=modifier&id=<?php echo $utilisateurs->id; ?>">Modifier</a>
									<a class="btn btn-danger" href="index.php?op=supprimer&id=<?php echo $utilisateurs->id; ?>"onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimmer</a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>

