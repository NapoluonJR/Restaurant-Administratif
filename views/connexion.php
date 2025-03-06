<link rel="stylesheet" href="style.css">
<form action="index.php?action=connexion" method="post" class="form-container">
    <div class="form-group">
        <label for="mail">Email</label>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre email" required class="form-input">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required class="form-input">
    </div>
    <button type="submit" class="form-button">Se connecter</button>
</form>
