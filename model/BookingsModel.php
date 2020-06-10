<?php

function getAllBookings() {
	$conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT users.*, horses.*, bookings.*
                             FROM bookings
                             INNER JOIN users
                                ON users.id = bookings.user_id
                             INNER JOIN horses
                                ON horses.id = bookings.horse_id");
	$query->execute();

	return $query->fetchAll();
}



function getBooking($id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT users.*, horses.*, bookings.*
                             FROM bookings
                             INNER JOIN users
                                ON users.id = bookings.user_id
                             INNER JOIN horses
                                ON horses.id = bookings.horse_id
                             WHERE bookings.id = :id");
    $query->bindParam(":id", $id);

    $query->execute();

    return $query->fetch();
}

function createBooking($data) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("INSERT INTO bookings (user_id, horse_id, time, date)
                             VALUES (:user, :horse, :time, :date)");
    $query->bindParam(":user", $data["user"]);
    $query->bindParam(":horse", $data["horse"]);
    $query->bindParam(":time", $data["time"]);
    $query->bindParam(":date", $data["date"]);

    $query->execute();
}

function deleteBooking($id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT * FROM bookings WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    $rows = $query->rowCount();

    if ($rows > 0) {
        $query = $conn->prepare("DELETE FROM bookings WHERE id = :id");
        $query->bindParam(":id", $id);
        $result = $query->execute();
    }

    return $result;
}