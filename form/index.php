<?php 

$tab = [];
$tab2 = [];

if (isset($_POST["nom"])) {
    $tab["nom"] = $_POST["nom"];
};
if (isset($_POST["prenom"])) {
    $tab["prenom"] = $_POST["prenom"];
};
if (isset($_POST["email"])) {
    $tab["email"] = $_POST["email"];
};
if (isset($_POST["telephone"])) {
    $tab["telephone"] = $_POST["telephone"];
};
if (isset($_POST["linkedin"])) {
    $tab["linkedin"] = $_POST["linkedin"];
};
if (isset($_POST["github"])) {
    $tab["github"] = $_POST["github"];
};
if (isset($_POST["biographie"])) {
    $tab["biographie"] = $_POST["biographie"];
};
if (isset($_POST["loisir-1"])) {
    $tab2["loisir-1"] = $_POST["loisir-1"];
};
if (isset($_POST["loisir-2"])) {
    $tab2["loisir-2"] = $_POST["loisir-2"];
};
if (isset($_POST["loisir-3"])) {
    $tab2["loisir-3"] = $_POST["loisir-3"];
};
if (isset($_POST["loisir-4"])) {
    $tab2["loisir-4"] = $_POST["loisir-4"];
};
if (isset($_POST["language"])) {
    $tab["language"] = $_POST["language"];
};
if (isset($_POST["lang"])) {
    $tab["lang"] = $_POST["lang"];
};
if (isset($_POST["frameworks"])) {
    $tab["frameworks"] = $_POST["frameworks"];
};
if (isset($_POST["software"])) {
    $tab["software"] = $_POST["software"];
};
if (isset($_POST["color"])) {
    $tab["color"] = $_POST["color"];
};

array_push($tab, $tab2);
var_dump($tab);

?>