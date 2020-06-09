<?php

function getAllUsers() {
	$db = openDatabaseConnection();

	$query = $db->prepare("SELECT * FROM users");
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function userRegistration() {
    $fields = ["username", "fullname", "address", "phone", "identify"];

    $class = [];
    $data = [];
    $class["username"] = $data["username"] = "";
    $class["fullname"] = $data["fullname"] = "";
    $class["address"] = $data["address"] = "";
    $class["phone"] = $data["phone"] = "";
    $class["identify"] = $data["identify"] = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;

        foreach ($fields as $field) {
            if (isset($_POST[$field]) && empty($_POST[$field])) {
                $class[$field] = "is-invalid";
                $valid = false;
            } else {
                $data[$field] = $_POST[$field];
            }
        }

        if ($valid == true) {
            $conn = openDatabaseConnection();

            $query = $conn->prepare("INSERT INTO users (username, full_name, address, phonenumber, identify)
                                     VALUES (:username, :fullname, :address, :phonenumber, :identify)");
            $query->bindParam(":username", $data["username"]);
            $query->bindParam(":fullname", $data["fullname"]);
            $query->bindParam(":address", $data["address"]);
            $query->bindParam(":phonenumber", $data["phone"]);
            $query->bindParam(":identify", $data["identify"]);

            $query->execute();

            $conn = null;
        }
    }


}

function generateCode() {
    for ($i = 0; $i < 10; $i++) {
        $num[$i] = rand(0,9);
    }

    echo implode("", $num);
}