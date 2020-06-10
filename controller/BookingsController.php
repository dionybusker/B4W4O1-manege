<?php

require(ROOT . "model/BookingsModel.php");
require(ROOT . "model/UsersModel.php");
require(ROOT . "model/HorsesModel.php");

function index() {
    $bookings = getAllBookings();
    $users = getAllUsers();
    $horses = getAllHorses();

	render("bookings/index", array(
        "bookings" => $bookings,
        "users" => $users,
        "horses" => $horses
    ));
}

function create() {
    $users = getAllUsers();
    $horses = getAllHorses();
    render("bookings/create", array(
        "users" => $users,
        "horses" => $horses
    ));
}

function store() {
    createBooking($_POST);
    header("Location: " . URL);
}

// function edit($id) {
// 	$user = getUser($id);
// 	render("users/update", array("user" => $user));
// }

// function update($id) {
// 	updateUser($_POST, $id);
// 	header("Location: " . URL);
// }

function delete($id) {
	$booking = getBooking($id);
	render("bookings/delete", array("booking" => $booking));
}

function destroy($id) {
	deleteBooking($id);
	header("Location: " . URL);
}