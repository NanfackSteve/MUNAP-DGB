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
$date_adhesion = $data[0]['date_adhesion'];

// infos cotisations
$cotisation = $data[0];
//print_r($cotisation);
$cotisation_reste = $data[0]['resteglobalacotiser'];
$nbr_parent_a_jour = $data[0]['nbreparentajour'];
$nbr_conjoint_a_jour = $data[0]['nbreconjointajour'];
$nbr_enfant_a_jour = $data[0]['nbreenfantajour'];

// infos affiliations
$nbr_parent = $data[0]['nbreparentaligne'];
$nbr_conjoint = $data[0]['nbreconjointaligne'];
$nbr_enfant = $data[0]['nbreenfantaligne'];

// AFFILIATION
$url = $api['link'] . "/api/detailsaffiliesmembre?num_adhesion=" . $_SESSION['num_adhesion'] . "&annee=" . date('Y');
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

// ALLOCATION

$url = $api['link'] . "/api/allocationsmembre?num_adhesion=" . $_SESSION['num_adhesion'] . "&annee=" . date('Y');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token'],));
$rep = curl_exec($ch);
$data = json_decode($rep, true);

$allocations = array();
foreach ($data as $allocation) {
    $libelle = $allocation['libelle'];

    if (!isset($allocations[$libelle])) {
        $allocations[$libelle] = array(
            'nombre' => 0,
            'liste' => array()
        );
    }
    $allocations[$libelle]['nombre']++;
    $allocations[$libelle]['liste'][] = $allocation;
}
//print_r($allocations);
$nbr_allocation_naissance = isset($allocations['Allocation de naissance']['nombre']) ? $allocations['Allocation de naissance']['nombre'] : 0;
$nbr_allocation_mariage = isset($allocations['Allocation de mariage']['nombre']) ? $allocations['Allocation de mariage']['nombre'] : 0;
$nbr_allocation_medicaux = isset($allocations['Allocation de medicaux']['nombre']) ? $allocations['Allocation de medicaux']['nombre'] : 0;
$nbr_allocation_decoration = isset($allocations['Allocation de decoration']['nombre']) ? $allocations['Allocation de decoration']['nombre'] : 0;
$nbr_allocation_retraite = isset($allocations['Allocation de retraite']['nombre']) ? $allocations['Allocation de retraite']['nombre'] : 0;

$list_allocation_naissance = isset($allocations['Allocation de naissance']['liste']) ? $allocations['Allocation de naissance']['liste'] : array();
$list_allocation_mariage = isset($allocations['Allocation de mariage']['liste']) ? $allocations['Allocation de mariage']['liste'] : array();
$list_allocation_medicaux = isset($allocations['Allocation de medicaux']['liste']) ? $allocations['Allocation de medicaux']['liste'] : array();
$list_allocation_decoration = isset($allocations['Allocation de decoration']['liste']) ? $allocations['Allocation de decoration']['liste'] : array();
$list_allocation_retraite = isset($allocations['Allocation de retraite']['liste']) ? $allocations['Allocation de retraite']['liste'] : array();
