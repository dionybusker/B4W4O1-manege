<?php

function getAllUsers() {
	$db = openDatabaseConnection();

	$query = $db->prepare("SELECT * FROM users");
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function userRegistration() {
    $fields = ["username", "fullname", "password", "address", "phone"];

    $class = [];
    $data = [];
    $class["username"] = $data["username"] = "";
    $class["fullname"] = $data["fullname"] = "";
    $class["password"] = $data["password"] = "";
    $class["address"] = $data["address"] = "";
    $class["phone"] = $data["phone"] = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;

        foreach ($fields as $field) {
            if (isset($_POST[$field]) && empty($_POST[$field])) {
                $class[$field] = "is-invalid";
                $valid = false;
            } else {
                $data[$field] = $_POST[$field];
                $passwordHash = password_hash($data["password"], PASSWORD_BCRYPT, array("cost" => 12));
            }
        }

        if ($valid == true) {
            $conn = openDatabaseConnection();

            $query = $conn->prepare("INSERT INTO users (username, full_name, password, address, phonenumber)
                                     VALUES (:username, :fullname, :password, :address, :phonenumber)");
            $query->bindParam(":username", $data["username"]);
            $query->bindParam(":fullname", $data["fullname"]);
            $query->bindParam(":password", $passwordHash);
            $query->bindParam(":address", $data["address"]);
            $query->bindParam(":phonenumber", $data["phone"]);

            $query->execute();

            $conn = null;
        }
    }


}

// function generateCode() {
//     for ($i = 0; $i < 10; $i++) {
//         $num[$i] = rand(0,9);
//     }

//     echo implode("", $num);
// }