<?php

require(ROOT . "model/HorsesModel.php");

function index() {
    $horses = getAllHorses();
	render("horses/index", array("horses" => $horses));
}

function create() {
	// view naar registratie pagina
	render("horses/create");
}

function store() {
	createHorse($_POST);
	header("Location: " . URL);
}

function edit($id) {
    $horse = getHorse($id);
    render("horses/update", array("horse" => $horse));
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