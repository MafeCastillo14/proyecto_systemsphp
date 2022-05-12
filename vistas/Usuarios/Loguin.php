<!DOCTYPE html>
<html lang="en">
<?php
include '../../includes/db.php';
include '../../layaut.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="https://malsup.github.io/jquery.form.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" src="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script type="text/javascript" src="script/deleteRecords.js"></script>
    <title>Document</title>
    <style>
        * {
            margin: 0%;
        }
    </style>
</head>

<body>

    <!-- <form style="background-color: red; width: 100%; height: 500px; display: flex; align-items: flex-end; justify-content: center;" action="" method="post"> -->


    <form id="loginform" method="post" style="width: 50%; margin-left: 25%; margin-top: 100px; height: 500px;">

        <center>
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>


            <div>
                <br>
                <div class="col">
                    <input name="username" id="username" style="width: 50%;" type="number" class="form-control" placeholder="usuario">
                </div>
                <br>
                <div class="col-lg">
                    <input type="password" name="password" id="password" style="width: 50%;" class="form-control" placeholder="usuario">
                </div>
            </div>


            <div class="row">

                <div class="col">
                    <button type="submit" name="loginBtn" id="loginBtn" value="Login" style="background:#832561; color: white; width: 49%; margin-top: 20px; margin-top: 25px; width: 30%;" class="btn">Login</button>
                </div>
            </div>
        </center>
        <br>

    </form>



</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#loginform').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '../../controladores/loguin.php',
                data: $(this).serialize(),
                success: function(response) {

                    var jsonData = JSON.parse(response);
                    console.log(jsonData)

                    // user is logged in successfully in the back-end
                    // let's redirect
                    if (jsonData.success !== null) {
                        window.localStorage.setItem('sesion', true)

                        location.href = 'index.php';
                    } else {
                        bootbox.alert('Error....');
                        window.localStorage.setItem('sesion', false)

                    }
                }
            });
        });
    });
</script>

</html>