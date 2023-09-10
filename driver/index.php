<?php session_start(); if (!isset($_SESSION['driver_id'])) {
    header("Location: ..");
}
$driver_id = $_SESSION['driver_id']; ?>
<html>

<head>
    <title>DATABASE TEST</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="drivers-wrapper">
        <span>
            
        </span>
    </div>
    <div class="btns-center">
        <button class="btn-wrapper btn-available" onclick="updateCapacity('AVAILABLE')" value="AVAILABLE">Seats Available</button>
        <button class="btn-wrapper btn-standing" onclick="updateCapacity('STANDING')" value="STANDING">No Seats/Standing Only</button>
        <button class="btn-wrapper btn-full" onclick="updateCapacity('FULL')" value="FULL">No Seats/Standing</button>
    </div>
</body>


<script>
    function updateCapacity($capacity) {
        console.log($capacity);
        let $driver_id = <?php echo $driver_id; ?>;
        $.ajax({
            url: "db.php",
            data: {
                id: $driver_id ,
                capacity: $capacity
            },
            type: "POST",
            success: function(data) {
                console.log("Updated Capacity to " + $capacity);
            },
            error: function() {
                alert("Error Occured While Updating Capacity");
            }
        });

    }
</script>

</html>