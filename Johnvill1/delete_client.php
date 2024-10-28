<?php
    //start session
    session_start();

    if(isset($_SESSION['username']) || $_SESSION['role'] != 'admin')
    {
        header("location: index.php");

    }
    //include connection string
    include('db/connection.php');

    //check if clident ID is provided in the URL
    if(isset($_GET['ID']))
    //get the ID value
    {
        $client_id = $_GET['ID'];
        //delete the client form the database
        $delete_sql = "DELETE FROM users WHERE ID = '$client_id'";
        if($conn->query($delete_sql)=== TRUE)
        {
            header("location: admin_dashboard.php?DeleteSuccess");
        }
        else
        {
            echo "Error Deleting Client ".$conn->error;
        }
    }
    else
    {
        //no client ID redirect tro admin dashboard
        header("location:admin_dashboard.php");
    }
?>