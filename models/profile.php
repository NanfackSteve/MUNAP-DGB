<?php

if (!isset($_SESSION['num_adhesion'])) header("Location: login.php ");

// URL de l'API cible
$api = json_decode(file_get_contents('./models/api.json'), true);
$url = $api['link'] . "/api/membresetleurfamille?trimestre=4&structure_id=-1&annee=" . date('Y') . "&num_adhesion=" . $_SESSION['num_adhesion'] . "&see_all=1";

// Requete + Reponse PROFIL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token'],));
$rep = curl_exec($ch);
$data = json_decode($rep, true);
// print_r($data);
curl_close($ch);

// infos membres
$num_adhesion = $_SESSION['num_adhesion'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$structure = $data[0]['abv'];
$fonction = $data[0]['fonction'];
$statut = $data[0]['statut'];
// $date_adhesion = $data['membres'][0]['date_adhesion'];

// infos cotisations
$cotisation = $data[0]['montantacotiserparent'];
$cotisation_reste = $data[0]['resteglobalacotiser'];
$nbr_parent_a_jour = $data[0]['nbreparentajour'];
$nbr_conjoint_a_jour = $data[0]['nbreconjointajour'];
$nbr_enfant_a_jour = $data[0]['nbreenfantajour'];

// infos affiliations
$nbr_parent = $data[0]['nbreparentaligne'];
$nbr_conjoint = $data[0]['nbreconjointaligne'];
$nbr_enfant = $data[0]['nbreenfantaligne'];

// Requete + Reponse AFFILIATION
$url = $api['link'] . "/api/detailsaffiliésmembre?num_adhesion=" . $_SESSION['num_adhesion'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token'],));
$rep = curl_exec($ch);
$data = json_decode($rep, true);
//print_r($data);
curl_close($ch);

$list_parents = $data['details_parent'];
$list_conjoints = $data['details_conjoint'];
$list_enfants = $data['details_enfant'];
