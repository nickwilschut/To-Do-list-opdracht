<?php
    // Load MainModel.
    require(ROOT . "model/MainModel.php");

    // Call to select function from MainModel.
    function index () {
        $users = getAllUsers();
        render('main/index', ['users' => $users]);
    }

    function tasks () {
        $users = getAllUsers();
        render('main/tasks', ['tasks' => $tasks]);
    }

     // call to create functions MainModel.
    function createTask () {
        createUsers($_POST);
        render('main/taskCreate');
    }

    function storeTask () {
        $newUsers = createUsers($data);
        header("Location: index");
    }

    // call to create functions MainModel.
    function create () {
        createUsers($_POST);
        render('main/userCreate');
    }

    function store () {
        $newUsers = createUsers($data);
        header("Location: index");
    }

    // Call to update / edit functions MainModel.
    function edit ($id) {
        $getUsers = getUsers($id);
        render('main/userUpdate', ['users' => $getUsers]);
    }

    function update () {
        $updateUsers = updateUsers($data);
        header("Location: index");
    }

    // Call to delete functions MainModel.
    function delete ($id) {
        $getUsers = getUsers($id);
        render('main/delete', ['users' => $getUsers]);
    }

    function destroy () {
        deleteUsers($id);
        header("Location: index");
    }
?>