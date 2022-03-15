<?php include 'style.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <header>
        <h1>Logo</h1>
        <a class="logoutBTN" href="logout.php">Logout</a>
    </header>
    <nav>
        <ul>
            <li><a href="posts">POST</a></li>
            <li><a href="categories">CATEGORY</a></li>
            <li><a class="active" href="users">USERS</a></li>
            <li><a href="update">Update</a></li>
            <li><a href="delete">Delete</a></li>
        </ul>
    </nav>
    <h2 class="addTitle">Add a User</h2>
    <form action="">
        <h4>First Name</h4>
        <input type="text" placeholder="Enter user's first name">
        <h4>Last Name</h4>
        <input type="text" placeholder="Enter user's last name">
        <h4>Username</h4>
        <input type="text" placeholder="Enter a username for user">
        <h4>Password</h4>
        <input type="text" placeholder="Enter a password for user">
        <h4>Role</h4>
        <select>
            <option disabled selected>Select Category</option>
            <option value="0">Editor</option>
            <option value="1">Admin</option>
        </select>
        <input type="submit" value="ADD">
    </form>

</body>

</html>