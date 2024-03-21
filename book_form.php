<?php
    //database connection
    $connection= mysqli_connect('localhost','root','','book_db');
    if($connection->connect_error){
        die('Connection Failed: :' . $connection->connect_error);
    }

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $pax = $_POST['pax'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(name, email, phone, address, location, pax, arrivals, leaving) values('$name','$email','$phone','$address','$location','$pax','$arrivals','$leaving')";

        mysqli_query($connection, $request);

        header('location:index.html');

    }else{
        echo 'something went wrong try again';
    }

?>