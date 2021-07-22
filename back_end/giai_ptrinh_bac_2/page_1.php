<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Giai Ptrinh Bac 2</title>
    <style>
        body {
            text-align: center;
            background-color: green;
        }

        h1 {
            color: red;
        }

        form {
            font-family: Arial;
            font-size: 20px;
            font-weight: bold;
        }

        input {
            margin: 15px 15px 15px 15px;
        }

        button {
            background-color: blue;
            cursor: pointer;
            padding: 10px 10px 10px 10px;
        }

        input:focus {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <p id="test"></p>
    <h1> GIAI PHUONG TRINH BAC 2 </h1>
    <form id="form" action="page_2.php" method="GET">
        Nhap so a: <input id="a" type="text" name="a"> <br>
        Nhap so b: <input id="b" type="text" name="b"> <br>
        Nhap so c: <input id="c" type="text" name="c"> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>