<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/manager.css" rel="Stylesheet">
    <title>Thực Hành bootstrap</title>
</head>

<body>
    <div class="header">
        <div class="container-fluid">
            <div class="text-center">
                <div class="col-md-12 menu-info">
                    <a href="index.php">Home</a>
                    <a href="category-foods.php">Categories</a>
                    <a href="food-menu.php">Food</a>
                    <a href="order.php">Order</a>
                    <a href="index.php">Logout</a>
                </div> <!-- Menu -->
            </div>
        </div>
    </div>
    <div class="main-user">
        <div class="container-fluid">
            <div class="text-left-user">
                <a>Manager User</a>
            </div>
            <button type="button-ADD" onclick="alert('Are you want to add an new user?')">add new user</button>
        </div>
        <table class="TB text-center" boder="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>S.N</td>
                <td>Full Name</td>
                <td>Username</td>
                <td>action</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Best</td>
                <td>B35t</td>
                <td><button type="button-CP">ChangePassword</button><button type="button-UP">Update Admin</button><button type="button-Del">Delete Admin</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ronaldo</td>
                <td>CR7</td>
                <td><button type="button-CP">ChangePassword</button><button type="button-UP">Update Admin</button><button type="button-Del">Delete Admin</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cantona</td>
                <td>KingEric</td>
                <td><button type="button-CP">ChangePassword</button><button type="button-UP">Update Admin</button><button type="button-Del">Delete Admin</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Beckham</td>
                <td>Beck</td>
                <td><button type="button-CP">ChangePassword</button><button type="button-UP">Update Admin</button><button type="button-Del">Delete Admin</button></td>
            </tr>
        </table>
        <div class="clear-float"></div>
    </div>
    <section class="footer">
        <div class="container-fluid text-center">
            <p>All rights reserved.</p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>