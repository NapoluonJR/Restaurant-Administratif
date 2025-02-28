<?php
require_once "config/bdd.php";
require_once "models/Utilisateur.php";

class UtilisateurManager {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getUtilisateurByMail(string $mail): ?Utilisateur {
        $sql = "SELECT * FROM users WHERE mail = :mail";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":mail", $mail, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? new Utilisateur($data) : null;
    }

    public function createUtilisateur(Utilisateur $user): bool {
        $sql = "INSERT INTO users (avatar, nom, prenom, mail, password, droits) VALUES (:avatar, :nom, :prenom, :mail, :password, :droits)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ":avatar" => $user->getAvatar(),
            ":nom" => $user->getNom(),
            ":prenom" => $user->getPrenom(),
            ":mail" => $user->getMail(),
            ":password" => password_hash($user->getPassword(), PASSWORD_BCRYPT),
            ":droits" => $user->getDroits()
        ]);
    }
}
?>
