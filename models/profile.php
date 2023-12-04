<?php

if (!isset($_SESSION['num_adhesion'])) header("Location: login.php ");

// URL de l'API cible
$api = json_decode(file_get_contents('./models/api.json'), true);
$url = $api['link'] . "/api/infosglesmembre/?trimestre=4&structure_id=-1&annee=" . date('Y') . "&num_adhesion=" . $_SESSION['num_adhesion'];

// Requete + Reponse cURL
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
$structure = $data['membres'][0]['abv'];
$fonction = $data['membres'][0]['fonction'];
$statut = $data['membres'][0]['statut'];
// $date_adhesion = $data['membres'][0]['date_adhesion'];

// infos cotisations
$cotisation_parent = $data['membres'][0]['montantacotiserparent'];
$cotisation_conjoint = $data['membres'][0]['montantacotiserenfant'];
$cotisation_enfant = $data['membres'][0]['montantacotiserconjoint'];
$cotisation_mutualiste = $data['membres'][0]['montantannuelacotiser'];
$cotisation_total = $data['membres'][0]['montantannuelacotiserglobal'];
$cotisation_verse = $data['membres'][0]['montantverse'];
$cotisation_reste = $data['membres'][0]['resteacotiser'];


// infos affiliations
$nbr_parent = $data['membres'][0]['nbreparent'];
$nbr_conjoint = $data['membres'][0]['nbreconjoint'];
$nbr_enfant = $data['membres'][0]['nbreenfant'];
