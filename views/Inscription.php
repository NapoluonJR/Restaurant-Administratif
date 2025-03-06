<link rel="stylesheet" href="style.css">
<form action="index.php?action=inscription" method="post" class="form-container">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required class="form-input">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required class="form-input">
    </div>
    <div class="form-group">
        <label for="mail">Email</label>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre email" required class="form-input">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Choisissez un mot de passe" required class="form-input">
    </div>
    <button type="submit" class="form-button">S'inscrire</button>
</form>
