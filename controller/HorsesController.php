<?php

require(ROOT . "model/HorsesModel.php");

function index() {
	$horses = getAllHorses();
	$breeds = getAllBreeds();
	render("horses/index", array(
		"horses" => $horses,
		"breeds" => $breeds
	));
}

function create() {
	// view naar registratie pagina
	$breeds = getAllBreeds();
	render("horses/create", (array("breeds" => $breeds)));
}

function store() {
	createHorse($_POST);
	header("Location: " . URL);
}

function edit($id) {
	$horse = getHorse($id);
	$breeds = getAllBreeds();
    render("horses/update", array(
		"horse" => $horse,
		"breeds" => $breeds
	));
}

function update($id) {
    updateHorse($_POST, $id);
    header("Location: " . URL);
}

function delete($id) {
	$horse = getHorse($id);
	render("horses/delete", array("horse" => $horse));
}

function destroy($id) {
	deleteHorse($id);
	header("Location: " . URL);
}