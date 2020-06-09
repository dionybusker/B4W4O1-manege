<?php

require(ROOT . "model/UsersModel.php");

function index() {
	render("users/index", array(
		'users' => getAllUsers()
	));
}

function register() {
	// $generateCode = generateCode();
	userRegistration();
	render("users/register", array(
		'generateCode' => generateCode()
	));
}

// function login() {
// 	render("users/index", array(
// 		'users' => getAllUsers()
// 	));
// }