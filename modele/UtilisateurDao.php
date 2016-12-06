<?php
require 'Database.php';

class UtilisateurDao extends Database
{

	public function selectAll($order)
	{
		if (!isset($order))
		{
			$order = 'nom';
		}
		$pdo = Database::connexion($order);
		$sql = $pdo->prepare("SELECT * FROM utilisateur ORDER BY $order ASC");
		$sql->execute();
		

		$utilisateurs = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ))
		{
			$utilisateurs[] = $obj;
		}
		return $utilisateurs;
	}

	public function selectById($id)
	{
		$pdo = Database::connexion();
		$sql = $pdo->prepare("SELECT * FROM utilisateur WHERE id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function insert($nom, $prenom, $email, $telephone, $mdp)
	{
		$pdo = Database::connexion();
		$sql = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, email, telephone, mdp) VALUES(?, ?, ?, ?, ?)");		
		$result = $sql->execute(array($nom, $prenom, $email, $telephone, $mdp));
	}

	public function modifier($nom, $prenom, $email, $telephone, $mdp, $id)
	{
		$pdo = Database::connexion();
		$sql = $pdo->prepare("UPDATE utilisateur SET nom = ?, prenom = ?, email = ?, telephone = ?, mdp = ? WHERE id = ? LIMIT 1");
		$result = $sql->execute(array($nom, $prenom, $email, $telephone, $mdp, $id));
	}

	public function delete($id)
	{
		$pdo = Database::connexion();
		$sql = $pdo->prepare("DELETE FROM utilisateur WHERE id =?");
		$sql->execute(array($id));
	}

}

?>
