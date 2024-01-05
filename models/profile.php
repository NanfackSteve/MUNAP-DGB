<?php

if (!isset($_SESSION['num_adhesion'])) header("Location: login.php ");

// URL de l'API cible
$api = json_decode(file_get_contents('./models/api.json'), true);
$url = $api['link'] . "/api/membresetleurfamille?trimestre=4&structure_id=-1&annee=" . date('Y') . "&num_adhesion=" . $_SESSION['num_adhesion'] . "&see_all=1";

// PROFIL

if (isset($_SESSION['token'])) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token'],));
    $rep = curl_exec($ch);
    $data = json_decode($rep, true);
    //print_r($data);
    curl_close($ch);
}



// infos membres
$num_adhesion = $_SESSION['num_adhesion'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$structure = isset($data[0]['abv']) ? $data[0]['abv'] : 'RAS';
$fonction = isset($data[0]['fonction']) ? $data[0]['fonction'] : 'RAS';
$statut = isset($data[0]['statut']) ? $data[0]['statut'] : 'RAS';
$date_adhesion = isset($data[0]['date_adhesion']) ? $data[0]['date_adhesion'] : 'jj/MM/aaaa';

// infos cotisations
$cotisation = isset($data[0]) ? $data[0] : array();
$montant_a_cotiser_membre = isset($data[0]['montantacotisermembre']) ? $data[0]['montantacotisermembre'] : 0;
$montant_verser_membre = isset($data[0]['montantversemembre']) ? $data[0]['montantversemembre'] : 0;

//print_r($cotisation);
$cotisation_reste = isset($data[0]['resteglobalacotiser']) ? $data[0]['resteglobalacotiser'] : 0;
$nbr_parent_a_jour = isset($data[0]['nbreparentajour']) ? $data[0]['nbreparentajour'] : 0;
$nbr_conjoint_a_jour = isset($data[0]['nbreconjointajour']) ? $data[0]['nbreconjointajour'] : 0;
$nbr_enfant_a_jour = isset($data[0]['nbreenfantajour']) ? $data[0]['nbreenfantajour'] : 0;

// infos affiliations
$nbr_parent = isset($data[0]['nbreparentaligne']) ? $data[0]['nbreparentaligne'] : 0;
$nbr_conjoint = isset($data[0]['nbreconjointaligne']) ? $data[0]['nbreconjointaligne'] : 0;
$nbr_enfant = isset($data[0]['nbreenfantaligne']) ? $data[0]['nbreenfantaligne'] : 0;

// AFFILIATION
$url = $api['link'] . "/api/detailsaffiliesmembre?num_adhesion=" . $_SESSION['num_adhesion'] . "&annee=" . date('Y');
if (isset($_SESSION['token'])) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token'],));
    $rep = curl_exec($ch);
    $data = json_decode($rep, true);
    //print_r($data);
    curl_close($ch);
}

$list_parents = isset($data['details_parent']) ? $data['details_parent'] : array();
$list_conjoints = isset($data['details_conjoint']) ? $data['details_conjoint'] : array();
$list_enfants = isset($data['details_enfant']) ? $data['details_enfant'] : array();

// ALLOCATION

$url = $api['link'] . "/api/allocationsmembre?num_adhesion=" . $_SESSION['num_adhesion'] . "&annee=" . date('Y');
if (isset($_SESSION['token'])) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $_SESSION['token'],));
    $rep = curl_exec($ch);
    $data = json_decode($rep, true);
    curl_close($ch);

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
