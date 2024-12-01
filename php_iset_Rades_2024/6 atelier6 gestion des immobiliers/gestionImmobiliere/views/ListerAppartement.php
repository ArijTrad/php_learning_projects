<?php
include_once 'CRUDAppartement.php';

$crud = new CRUDAppartement();
$liste = $crud->ListerApp();

echo "<table border='1'>
<tr>
    <th>Référence</th>
    <th>Propriétaire</th>
    <th>Localité</th>
    <th>Surface</th>
    <th>Usage</th>
    <th>Nb pièces</th>
    <th>Espace commun</th>
    <th>Action</th>
</tr>";
foreach ($liste as $appartement) {
    echo "<tr>
        <td>{$appartement['Référence']}</td>
        <td>{$appartement['Propriétaire']}</td>
        <td>{$appartement['Localité']}</td>
        <td>{$appartement['Surface']}</td>
        <td>{$appartement['DomaineUsage']}</td>
        <td>{$appartement['NbPieces']}</td>
        <td>{$appartement['SurfaceEspaceCommun']}</td>
        <td>
            <a href='ModifierAppartement.php?ref={$appartement['Référence']}'>Modifier</a>
            <a href='SupprimerAppartement.php?ref={$appartement['Référence']}'>Supprimer</a>
        </td>
    </tr>";
}
echo "</table>";
?>
