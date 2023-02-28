<?php>
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_form";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
    }
     
    $sqlquery ="INSERT INTO `data` (`txtfname`, `txtmname`, `txtlname`, `chkplatform`) 
    VALUES ('abc', 'cda', 'dasd', 'cdssd');"
     
    if ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
    } 

// if(is set ($_POST["btnsave"])

// {
//     $firstname=$_POST["txtfname"];
//     $middlename=$_POST["txtmname"];
//     $lastname=$_POST["txtlname"];
//     $platform=$_POST["chkplatform"];
//     echo "<h1>firstname=$firstname</h1>"
//     echo "<h1>middlename=$middlename</h1>"
//     echo "<h1>lastname=$lastname</h1>"
//     echo "<hr>"
//     for each ($platform as $platform => $p)
//     {
//         echo "<b> <h1>platform interest</h1> </b>" <br>;
//     }

// }
?