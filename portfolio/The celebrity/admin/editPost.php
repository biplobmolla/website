<?php include 'style.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <header>
        <h1>Logo</h1>
        <a class="logoutBTN" href="logout.php">Logout</a>
    </header>
    <nav>
        <ul>
            <li><a class="active" href="posts">POST</a></li>
            <li><a href="categories">CATEGORY</a></li>
            <li><a href="users">USERS</a></li>
        </ul>
    </nav>
    <h2 class="addTitle">Post a News</h2>
    <form class="addPostForm" action="">
        <h4>Title</h4>
        <input type="text" placeholder="Enter your news title" value="">
        <h4>Description</h4>
        <input type="text" placeholder="Enter your news description" value="">
        <input type="text" hidden name="author" value="">
        <input type="text" hidden name="date" value="">
        <h4>Image</h4>
        <input type="file" name="image">
        <input type="submit" value="Update">
    </form>

</body>

</html>