<?php include 'style.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>

<body>

</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Logo</h1>
        <a class="logoutBTN" href="logout.php">Logout</a>
    </header>
    <nav>
        <ul>
            <li><a href="posts">POST</a></li>
            <li><a class="active" href="categories">CATEGORY</a></li>
            <li><a href="users">USERS</a></li>
        </ul>
    </nav>
    <h2 class="addTitle">Add a Category</h2>
    <form class="addcategoryform" action="">
        <h4>Category Name</h4>
        <input type="text" placeholder="Category name">
        <input type="submit" value="ADD">
    </form>

</body>

</html>

</html>