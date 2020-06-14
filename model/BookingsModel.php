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
    // prijs berekenen per uur
    $price = ($data["endtime"] - $data["starttime"]) * 55;

    $conn = openDatabaseConnection();

    $query = $conn->prepare("INSERT INTO bookings (user_id, horse_id, starttime, endtime, date, price)
                             VALUES (:user, :horse, :starttime, :endtime, :date, :price)");
    $query->bindParam(":user", $data["user"]);
    $query->bindParam(":horse", $data["horse"]);
    $query->bindParam(":starttime", $data["starttime"]);
    $query->bindParam(":endtime", $data["endtime"]);
    $query->bindParam(":date", $data["date"]);
    $query->bindParam(":price", $price);

    $query->execute();
}

function updateBooking($data, $id) {
    // prijs berekenen per uur
    $price = ($data["endtime"] - $data["starttime"]) * 55;

    $conn = openDatabaseConnection();

    $query = $conn->prepare("UPDATE bookings
                             SET user_id = :user,
                                 horse_id = :horse,
                                 starttime = :starttime,
                                 endtime = :endtime,
                                 date = :date,
                                 price = :price
                             WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->bindParam(":user", $data["user"]);
    $query->bindParam(":horse", $data["horse"]);
    $query->bindParam(":starttime", $data["starttime"]);
    $query->bindParam(":endtime", $data["endtime"]);
    $query->bindParam(":date", $data["date"]);
    $query->bindParam(":price", $price);

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