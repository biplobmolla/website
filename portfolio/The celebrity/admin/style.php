<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylesheet</title>
    <style>

* {
    margin: 0;
    padding: 0;
}

*,
*::after,
*::before {
    box-sizing: border-box;
}

body {
    background-color: rgb(230, 227, 227);
}

header {
    position: relative;
    padding: 20px;
    background-color: greenyellow;
}

header h1 {
    text-align: center;
}

nav {
    background-color: hotpink;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    display: inline-block;
    text-decoration: none;
    padding: 10px 20px;
    color: black;
    font-weight: 700;
    transition: 0.5s;
}

nav ul li a:hover,
.active.active {
    background-color: greenyellow;
}

table {
    width: 80%;
    margin: auto;
    margin-top: 20px;
    border: 1px solid white;
    border-spacing: 0;
}

h2 {
    text-align: center;
    margin-top: 50px;
    font-size: 28px;
}

th,
td {
    border: 1px solid white;
    text-align: center;
    padding: 12px;
}

th {
    background-color: rgb(96, 96, 236);
    color: white;
}

tr:nth-child(even) td {
    background-color: rgb(230, 228, 228);
}

tr:nth-child(odd) td {
    background-color: rgb(250, 233, 233);
}

.fa-edit,
.fa-trash {
    color: black;
}

.addBTN {
    text-decoration: none;
    padding: 8px 12px;
    background-color: green;
    color: white;
    position: absolute;
    top: 120px;
    right: 5%;
    font-weight: 500;
    border: 2px solid green;
    letter-spacing: 2px;
    box-shadow: 2px 2px 10px 0 rgba(0, 0, 0, 0.6);
    transition: 0.5s;
}

.addBTN:hover {
    background-color: white;
    border: 2px solid green;
    box-shadow: none;
    color: green;
    box-shadow: none;
}

form {
    display: flex;
    flex-direction: column;
    min-width: 400px;
    height: 65vh;
    margin: auto;
    padding: 20px;
    background-color: white;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-60%, -50%);
    border: none;
    border-radius: 10px;
    justify-content: space-evenly;
}


form input {
    padding: 6px 10px;
    border: 1px solid rgb(122, 115, 115);
    border-radius: 4px;
    outline: none;
}

form input[type='text']:focus {
    outline: 1px solid red;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.6);
}

form input[type='submit'] {
    width: 80px;
    font-size: 20px;
    cursor: pointer;
    margin-top: 10px;
    background-color: rgb(18, 204, 18);
    border: none;
    transition: 0.5s;
}

form input[type='submit']:hover {
    background-color: rgb(15, 126, 15);
}


form select {
    padding: 4px;
    cursor: pointer;
}

.addTitle {
    position: absolute;
    top: 80px;
    left: 46%;
    transform: translateX(-46%);
}

.addcategoryform {
    height: auto;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -40%);
}

.addcategoryform h4 {
    margin: 10px 0;
}

.addcategoryform input[type="submit"] {
    font-size: 18px;
    margin-top: 20px;
}

.addPostForm {
    height: 50vh;
}

input[type='file'] {
    border: none;
    padding-left: 0;
}

.login {
    height: 40vh;
}

.logoutBTN {
    text-decoration: none;
    position: absolute;
    top: 50%;
    right: 40px;
    transform: translateY(-50%);
    background-color: red;
    color: black;
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    transition: 0.5s;
}

.logoutBTN:hover {
    background-color: blue;
    color: white;
}

.welcome_box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.welcome_box h2 {
    font-size: 34px;
    letter-spacing: 2px;
    color: red;
    margin: 20px 0;
}

.welcome_box p {
    font-weight: 700;
    font-size: 20px;
    color: rgb(138, 138, 138);
}







@media (max-width: 520px) {
    form {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    header h1 {
        text-align: left;
    }
}







@media (max-width: 410px) {

    th,
    td {
        padding: 0;
        width: 100%;
        height: auto;
    }

    table {
        width: 100%;
        height: auto;
        font-size: 1rem;
    }

    nav ul {
        display: flex;
        justify-content: space-around;
    }

    nav ul li {
        margin: 0;
        padding: 0;
    }

    nav ul li a {
        margin: 0;
        padding: 5px;
    }

    form {
        width: 100vw;
        min-width: 0;
    }
}
    </style>
</head>
<body>
    
</body>
</html>