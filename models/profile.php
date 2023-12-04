<?php

if (!isset($_SESSION['num_adhesion'])) header("Location: login.php ");

// URL de l'API cible
$api = json_decode(file_get_contents('./models/api.json'), true);
$url = $api['link'] . "/api/infosglesmembre/?trimestre=4&structure_id=-1&annee=2023&num_adhesion=" . $_SESSION['num_adhesion'];

// Requete + Reponse cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token'],));
$rep = curl_exec($ch);
$data = json_decode($rep, true);
curl_close($ch);

// infos membres
$num_adhesion = $_SESSION['num_adhesion'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
//$matricule = $_SESSION['matricule'];
//$ne_le = $data['membre_details'][0]['date_naissance'];
$statut = $data['membre_details'][0]['status'];
$date_adhesion = $data['membre_details'][0]['date_adhesion'];

// infos cotisations
$admin = $data['membre_details'][0]['abv'];
$fonction = $data['membre_details'][0]['libelle_fonction'];
$region = $data['membre_details'][0]['libelle_region'];
$qualite = $data['membre_details'][0]['libelle_qualite'];
$frais_adhesion = $data['membre_details'][0]['frais_adhesion'];
$cotisation = $data['membre_cotisation'];;

// infos affiliations
$nbr_parent = $data['nbre_parent'];
$nbr_conjoint = $data['nbre_conjoint'];
$nbr_enfant = $data['nbre_enfant'];
