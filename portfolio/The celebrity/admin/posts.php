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
            <li><a class="active" href="posts">POST</a></li>
            <li><a href="categories">CATEGORY</a></li>
            <li><a href="users">USERS</a></li>
        </ul>
    </nav>
    <h2>List of Posts</h2>
    <a class="addBTN" href="addPost">ADD POST</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed has done a new record.</td>
            <td>Record</td>
            <td>12 Nov 2021</td>
            <td><a href="editPost"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed</td>
            <td>@tamim01</td>
            <td>Admin</td>
            <td><a href="editPost/<?php echo 2; ?>"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed</td>
            <td>@tamim01</td>
            <td>Admin</td>
            <td><a href="editPost"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
        <tr>
            <td>01</td>
            <td>Tamim Ahmed</td>
            <td>@tamim01</td>
            <td>Admin</td>
            <td><a href="editPost"><i class="fas fa-edit"></i></a></td>
            <td><a href=""><i class="fas fa-trash"></i></a></td>
        </tr>
    </table>
</body>

</html>