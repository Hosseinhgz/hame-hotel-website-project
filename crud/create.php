<?php include 'db.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$city= $_POST['city'];
$groupid= $_POST['groupid'];

if(empty($fname) || empty($lname) || empty($city)){
    echo "Name , Family and city are compulsary";
    $formlink ="form.php";
    echo "<br><a href='$formlink'>Back to Form Page</a>";
}
else{

    $sql="insert into studentsinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if($conn->query($sql) === TRUE) {
        echo "New record added";
        echo "<a href='update.php' class='top'>Home </a>";
    }
    else
    {
        echo "ERROR: " .$sql. "<br>" . $conn->error;
    }
    $conn->close();
}

?>
