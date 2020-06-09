<?php

function getAllHorses() {
	$db = openDatabaseConnection();

	$query = $db->prepare("SELECT * FROM horses");
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getHorse($id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT * FROM horses WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    return $query->fetch();
}

function createHorse($data) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("INSERT INTO horses (name, breed, age, height, show_jumping)
                                VALUES (:name, :breed, :age, :height, :showjumping)");
    $query->bindParam(":name", $data["name"]);
    $query->bindParam(":breed", $data["breed"]);
    $query->bindParam(":age", $data["age"]);
    $query->bindParam(":height", $data["height"]);
    $query->bindParam(":showjumping", $data["showjumping"]);

    $query->execute();
}

function updateHorse($data, $id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("UPDATE horses
                             SET name = :name,
                                 age = :age;
                                 breed = :breed,
                                 height = :height,
                                 show_jumping = :showjumping
                             WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->bindParam(":name", $data["name"]);
    $query->bindParam(":age", $data["age"]);
    $query->bindParam(":breed", $data["breed"]);
    $query->bindParam(":height", $data["height"]);
    $query->bindParam(":showjumping", $data["showjumping"]);

    $query->execute();
}

function deleteHorse($id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT * FROM horses WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    $rows = $query->rowCount();

    if ($rows > 0) {
        $query = $conn->prepare("DELETE FROM horses WHERE id = :id");
        $query->bindParam(":id", $id);
        $result = $query->execute();
    }

    return $result;
}