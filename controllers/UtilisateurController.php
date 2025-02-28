<?php
require_once "models/UtilisateurManager.php";

class UtilisateurController {
    private UtilisateurManager $manager;

    public function __construct() {
        $this->manager = new UtilisateurManager();
    }

    public function inscription() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            $mail = filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL);
            $password = $_POST["password"];
            $avatar = "uploads/default.png";
            $droits = 1;

            if (!$mail || empty($password)) {
                echo "Email ou mot de passe invalide.";
                return;
            }

            if ($this->manager->getUtilisateurByMail($mail)) {
                echo "Cet email est déjà utilisé.";
                return;
            }

            $utilisateur = new Utilisateur([
                "nom" => $nom,
                "prenom" => $prenom,
                "mail" => $mail,
                "password" => $password,
                "avatar" => $avatar,
                "droits" => $droits
            ]);

            if ($this->manager->createUtilisateur($utilisateur)) {
                echo "Inscription réussie.";
            } else {
                echo "Erreur lors de l'inscription.";
            }
        } else {
            require "views/inscription.php";
        }
    }

    public function connexion() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $mail = filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL);
            $password = $_POST["password"];

            if (!$mail || empty($password)) {
                echo "Identifiants invalides.";
                return;
            }

            $utilisateur = $this->manager->getUtilisateurByMail($mail);
            if ($utilisateur && password_verify($password, $utilisateur->getPassword())) {
                session_start();
                $_SESSION["utilisateur"] = $utilisateur;
                echo "Connexion réussie.";
            } else {
                echo "Email ou mot de passe incorrect.";
            }
        } else {
            require "views/connexion.php";
        }
    }
}

?>
