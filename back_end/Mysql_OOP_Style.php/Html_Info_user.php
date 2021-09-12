<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Html_Info_user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>    
    <div class="container">
        <h3>FORM REGISTER USER</h3>
        <form action="Html_Info_user.php" method="POST">
            <div class="row">
                <div class="col-sm-2">
                    <label for="Name_is">Name_is: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Name_is" id="Name_is" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="Email">Email: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Email" id="Email" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="Phone">Phone: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Phone" id="Phone" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label for="Address_is">Address_is: </label>
                </div>            
                <div class="col-sm-10">
                    <input type="text" name="Address_is" id="Address_is" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <input type="submit" name="click" value="Register" class="btn btn-primary">
                </div> 
                <div class="col-sm-2">
                    <input type="submit" name="click" value="Display" class="btn btn-primary">
                </div> 
                <div class="col-sm-2">
                    <input type="submit" name="click" value="Search" class="btn btn-primary">
                </div> 
                <div class="col-sm-4">
                    <input type="search" name="search" class="form-control" placeholder="Search">
                </div>
            </div>
        </form>
    </div>
<?php
    switch ($_POST['click']) {
        case 'Register':
            Register();
            break;
        case 'Display':
            Display();
            break;
        case 'Search':
            Search();
            break;    
    }

    function Register() {
        require_once 'Mysql_insert_data_table.php';
    } 

    function Display() {
        require_once 'Mysql_display_data_table.php';
    } 

    function Search() {
        require_once 'Mysql_search_data_table.php';
    } 
?>

</body>
</html>