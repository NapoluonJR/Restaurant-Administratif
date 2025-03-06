<?php
class Utilisateur {
    private int $id_users;
    private string $avatar;
    private string $nom;
    private string $prenom;
    private string $mail;
    private string $password;
    private int $droits;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    private function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    public function getIdUsers(): int { return $this->id_users; }
    public function getAvatar(): string { return $this->avatar; }
    public function getNom(): string { return $this->nom; }
    public function getPrenom(): string { return $this->prenom; }
    public function getMail(): string { return $this->mail; }
    public function getPassword(): string { return $this->password; }
    public function getDroits(): int { return $this->droits; }

    public function setIdUsers(int $id) { $this->id_users = $id; }
    public function setAvatar(string $avatar) { $this->avatar = $avatar; }
    public function setNom(string $nom) { $this->nom = $nom; }
    public function setPrenom(string $prenom) { $this->prenom = $prenom; }
    public function setMail(string $mail) { $this->mail = $mail; }
    public function setPassword(string $password) { $this->password = $password; }
    public function setDroits(int $droits) { $this->droits = $droits; }
}
?>
