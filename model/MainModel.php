<?php

// Get all function.
function getAllUsers() {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM users");

        $stmt->execute();
        $result = $stmt->fetchAll();
        $message = "GetAll successful.";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};

// Get all tasks
function getAllTasks() {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM tasks");

        $stmt->execute();
        $result = $stmt->fetchAll();
        $message = "GetAll successful.";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};

// Get all tasks
function getAllLists() {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM lists");

        $stmt->execute();
        $result = $stmt->fetchAll();
        $message = "GetAll successful.";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};

// Get 1 function.
function getUsers($id) {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $result = $stmt->fetch();
        $message = "Get successful.";
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};

function getTasks($id) {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM Tasks WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $result = $stmt->fetch();
        $message = "Get successful.";
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};

function getLists($id) {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM Lists WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $result = $stmt->fetch();
        $message = "Get successful.";
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};

// Create function
function createUsers($data) {
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();

            // Insert Query.
            $sql = "INSERT INTO $table (Name, Username, Password) VALUES (:name, :username, :password)";
            $query = $conn->prepare($sql);
            $query->bindParam(':name', $_POST["name"]);
            $query->bindParam(':username', $_POST["username"]);
            $query->bindParam(':password', $_POST["password"]);

            $query->execute();
            $message = "Create successful.";
        }
        catch(PDOException $e){   
            echo "Connection failed: " . $e->getMessage();
        }
    }
};

// Create function
function createTasks($data) {
    $table = $_POST['table'];
    $status = 'concept';
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["name"] && $_POST["description"] && $_POST["status"] && $_POST["List_id"] && $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();

            // Insert Query.
            $sql = "INSERT INTO $table (Name, description, status, duration, List_id) VALUES (:name, :description, :status, :duration, :List_id)";
            $query = $conn->prepare($sql);
            $query->bindParam(":name", $_POST["name"]);
            $query->bindParam(":description", $_POST["description"]);
            $query->bindParam(":status", $status);
            $query->bindParam(":duration", $_POST["duration"]);
            $query->bindParam(":List_id", $_POST["List_id"]);

            $query->execute();
            $message = "Create successful.";
        }
        catch(PDOException $e){   
            echo "Connection failed: " . $e->getMessage();
        }
    }
};

// Create function
function createLists($data) {
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["name"] && $_POST["description"] && $_POST["user_id"] && $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();

            // Insert Query.
            $sql = "INSERT INTO $table (Name, description, user_id) VALUES (:name, :description, :user_id)";
            $query = $conn->prepare($sql);
            $query->bindParam(":name", $_POST["name"]);
            $query->bindParam(":description", $_POST["description"]);
            $query->bindParam(":user_id", $_POST["user_id"]);

            $query->execute();
            $message = "Create successful.";
        }
        catch(PDOException $e){   
            echo "Connection failed: " . $e->getMessage();
        }
    }
};

// Update function.
function updateUsers($data) {
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["id"] && $_POST["table"] && $_POST["username"] && $_POST["password"] != '') {
        try {
            $conn=openDatabaseConnection();
           
            // Update Query.
            $sql = "UPDATE $table SET Name=:name, username=:username, password=:password WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(':name', $_POST["name"]);
            $query->bindParam(':username', $_POST["username"]);
            $query->bindParam(':password', $_POST["password"]);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
            $message = "Update successful.";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        // Set error message.
        $message = "Failed to update";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
};

function updateTasks($data) {
    $table = $_POST['table'];
    $message = Null;
    // Check if all required fields are send trough.
    if ($_POST["id"] && $_POST["name"] && $_POST["description"] && $_POST["status"] && $_POST["List_id"] && $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();
           
            // Update Query.
            $sql = "UPDATE $table SET Name=:name, description=:description, status=:status, duration=:duration, List_id=:List_id WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(":name", $_POST["name"]);
            $query->bindParam(":description", $_POST["description"]);
            $query->bindParam(":status", $_POST["status"]);
            $query->bindParam(":duration", $_POST["duration"]);
            $query->bindParam(":List_id", $_POST["List_id"]);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
            $message = "Update successful.";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        // Set error message.
        $message = "Failed to update";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
};

function updateLists($data) {
    $table = $_POST['table'];
    $message = Null;
    // Check if all required fields are send trough.
    //if ($_POST["name"] && $_POST["description"] && $_POST["user_id"] && $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();
           
            // Update Query.
            $sql = "UPDATE $table SET name=:name, description=:description, user_id=:user_id WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(":name", $_POST["name"]);
            $query->bindParam(":description", $_POST["description"]);
            $query->bindParam(":user_id", $_POST["user_id"]);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
            $message = "update.success";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
   /* } else {
        // Set error message.
        $message = "failed.to.update";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } */
};

// Delete function.
function deleteUsers($id){
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["id"] || $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();
       
            // Delete Query.
            $sql = "DELETE FROM $table WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
            $message = "Delete successful.";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }  
    } else {
        // Set error message.
        $message = "Failed to delete";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
};

function deleteTasks($id){
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["id"] || $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();
       
            // Delete Query.
            $sql = "DELETE FROM $table WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
            $message = "Delete successful.";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }  
    } else {
        // Set error message.
        $message = "Failed to delete";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
};

function deleteLists($id){
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["id"] || $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();
       
            // Delete Query.
            $sql = "DELETE FROM $table WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
            $message = "Delete successful.";
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }  
    } else {
        // Set error message.
        $message = "Failed to delete";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
};

?>















