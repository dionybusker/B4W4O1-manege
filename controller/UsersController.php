<?php

require(ROOT . "model/UsersModel.php");

function index() {
	$users = getAllUsers();
	render("users/index", array("users" => $users));
}

function create() {
	render("users/create");
}

function store() {
	createUser($_POST);
	header("Location: " . URL . "users/index");
}

function edit($id) {
	$user = getUser($id);
	render("users/update", array("user" => $user));
}

function update($id) {
	updateUser($_POST, $id);
	header("Location: " . URL . "users/index");
}

function delete($id) {
	$user = getUser($id);
	render("users/delete", array("user" => $user));
}

function destroy($id) {
	deleteUser($id);
	header("Location: " . URL . "users/index");
}