<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/dashboard.css" rel="Stylesheet">
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
    <div class="main">
        <div class="container-fluid">
            <div class="text-left">
                <a>MANAGER ORDER</a>
            </div>
            <table boder="1" cellspacing="0" cellpadding="1">
                <tr>
                    <td>S.N</td>
                    <td>Food</td>
                    <td>Price</td>
                    <td>Qty</td>
                    <td>TOTAL</td>
                    <td>ORDER DATE</td>
                    <td>STATUS</td>
                    <td>CUSTORMER NAME</td>
                    <td>CONTACT</td>
                    <td>EMAIL</td>
                    <td>ADDRESS</td>
                    <td>ACTIONS</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mixed Pizza</td>
                    <td>10.00</td>
                    <td>2</td>
                    <td>20.00</td>
                    <td>2020-11-30 04:07:17</td>
                    <td class="text">Delivered</td>
                    <td>Jana Bush</td>
                    <td>+1 (562) 101-2028</td>
                    <td>tydujy@maillinator.com</td>
                    <td>Minima iure ducimus</td>
                    <td class="update">Update Order</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Best Burger</td>
                    <td>4.00</td>
                    <td>4</td>
                    <td>16.00</td>
                    <td>2020-11-30 03:52:43</td>
                    <td class="text">Delivered</td>
                    <td>Kelly Dillard</td>
                    <td>+1 (908) 914-3106</td>
                    <td>fexekihor@maillinator.com</td>
                    <td>Incidunt ipsum add</td>
                    <td class="update">Update Order</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Sadeko Momo</td>
                    <td>6.00</td>
                    <td>3</td>
                    <td>18.00</td>
                    <td>2020-11-30 03:49:48</td>
                    <td class="cancel">Cancelled</td>
                    <td>Bradley Farrell</td>
                    <td>+1 (576) 504-4657</td>
                    <td>zuhafiq@maillinator.com</td>
                    <td>Duis aliqua Qui lor</td>
                    <td class="update">Update Order</td>
                </tr>
            </table>
        </div>
    </div>
    <section class="footer">
        <div class="container-fluid text-center">
            <p>All rights reserved.</p>
        </div>
    </section>
</body>