<?php 

    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location:userlogin.php");
    }
    elseif (isset($_SESSION['driver_id'])) {
        header("location: ../driver/");
    }
     $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
    
<head>
	<title>Home - AmongBus</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body style="text-align: center; background-color: #C3CC69">

<p style="font-family:Lucida Console; margin-top: 20px"> Welcome to AmongBus, <?php echo $name; ?> !<p>


<img src="stars.jpg" style="width: 400px;">




    
</body>
<script>
    console.log("kiesha");
</script>


</html>