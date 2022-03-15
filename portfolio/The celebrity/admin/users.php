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
        </ul>
    </nav>
    <h2>List of Users</h2>
    <a class="addBTN" href="addUser">ADD USER</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed</td>
            <td>@tamim01</td>
            <td>Admin</td>
            <td><a href="edit"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed</td>
            <td>@tamim01</td>
            <td>Admin</td>
            <td><a href="edit"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed</td>
            <td>@tamim01</td>
            <td>Admin</td>
            <td><a href="edit"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed</td>
            <td>@tamim01</td>
            <td>Admin</td>
            <td><a href="edit"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
    </table>
</body>

</html>