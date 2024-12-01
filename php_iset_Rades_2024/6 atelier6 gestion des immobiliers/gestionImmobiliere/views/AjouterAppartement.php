<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Appartement</title>
</head>
<body>
    <form action="AjouterAppartement.php" method="POST">
        Référence: <input type="text" name="reference" required><br>
        Propriétaire: <input type="text" name="proprietaire" required><br>
        Localité: <input type="text" name="localite" required><br>
        Surface: <input type="number" name="surface" required><br>
        Nombre de pièces: <input type="number" name="nbPieces" required><br>
        Domaine d'usage: 
        <select name="domaineUsage" required>
            <option value="Bureau">Bureau</option>
            <option value="Domicile">Domicile</option>
        </select><br>
        Surface de l'espace commun: <input type="number" name="surfaceEspaceCommun" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
