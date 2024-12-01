<!DOCTYPE html>
<html>
<head>
    <title>Modification des données d'un appartement</title>
</head>
<body>
    <h2>Modifier les informations d'un Appartement</h2>
    <form method="POST" action="ModifierAppartement.php">
        <label for="reference">Référence:</label>
        <input type="text" name="reference" required><br>

        <label for="proprietaire">Propriétaire:</label>
        <input type="text" name="proprietaire" required><br>

        <label for="localite">Localité:</label>
        <input type="text" name="localite" required><br>

        <label for="surface">Surface:</label>
        <input type="number" name="surface" required><br>

        <label for="domaine_usage">Domaine d'usage:</label>
        <select name="domaine_usage">
            <option value="Bureau">Bureau</option>
            <option value="Domicile">Domicile</option>
        </select><br>

        <label for="nb_pieces">Nombre de pièces:</label>
        <input type="number" name="nb_pieces" required><br>

        <label for="espace_commun">Surface de l'espace commun:</label>
        <input type="number" name="espace_commun" required><br>

        <button type="submit" name="update">Modifier</button>
    </form>
</body>
</html>
