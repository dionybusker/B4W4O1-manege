<?php

function getAllUsers() {
	$conn = openDatabaseConnection();

	$query = $conn->prepare("SELECT * FROM users");
	$query->execute();

	return $query->fetchAll();
}

function getUser($id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    return $query->fetch();
}

function createUser($data) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("INSERT INTO users (name, full_name, address, phonenumber)
                                VALUES (:name, :fullname, :address, :phonenumber)");
    $query->bindParam(":name", $data["name"]);
    $query->bindParam(":fullname", $data["fullname"]);
    $query->bindParam(":address", $data["address"]);
    $query->bindParam(":phonenumber", $data["phone"]);

    $query->execute();
}

function updateUser($data, $id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("UPDATE users
                             SET name = :name, 
                                 full_name = :fullname, 
                                 address = :address, 
                                 phonenumber = :phone 
                             WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->bindParam(":name", $data["name"]);
    $query->bindParam(":fullname", $data["fullname"]);
    $query->bindParam(":address", $data["address"]);
    $query->bindParam(":phone", $data["phone"]);

    $query->execute();
}

function deleteUser($id) {
    $conn = openDatabaseConnection();

    $query = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    $rows = $query->rowCount();

    if ($rows > 0) {
        $query = $conn->prepare("DELETE FROM users WHERE id = :id");
        $query->bindParam(":id", $id);
        $result = $query->execute();
    }

    return $result;
}

// function generateCode() {
//     for ($i = 0; $i < 10; $i++) {
//         $num[$i] = rand(0,9);
//     }

//     echo implode("", $num);
// }