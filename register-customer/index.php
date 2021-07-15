<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Customer</title>
    <style>
        h1, h2 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        input {

            font-size: 16px;
            border: 2px solid #CCCCCC;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
            background-color: aqua;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid aqua;
        }

    </style>
</head>
<body>
<h1>Register Customer Form</h1>
<form action="" method="get">
    <input type="text" name="name" placeholder="Name"/>
    <input type="text" name="email" placeholder="Email"/>
    <input type="text" name="phone" placeholder="Phone"/>
    <input type="submit" id="submit" value="Send"/>
</form>
<table>
    <caption><h2>Customer List</h2></caption>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'Customer.php';

    $cus1 = new Customer($_GET['name'], $_GET['email'], $_GET['phone']);

    ?>

    <tr>
        <td><?php echo $cus1->name ?></td>
        <td><?php echo $cus1->email ?></td>
        <td><?php echo $cus1->phone ?></td>
    </tr>
    </tbody>
</table>
<?php
$filename = 'CustomerList.json';
$myfile = fopen($filename, 'a+');
$txt = json_encode($cus1);
//fwrite($myfile, $txt);
fwrite($myfile, ", ");

?>
</body>
</html>
