<?php 
    include_once 'config.php';
?>
 
<?php
    $adress = $_POST["adress"];
    $way = $_POST["way"];
    $cardname = $_POST["cardname"];
    $cardno = $_POST["cardno"];
    $exp = $_POST["exp"];
    $cvc = $_POST["cvc"];
 

 

    $sql = "INSERT INTO payment_details(adress, way,cardname,cardno,exp,cvc)values('$adress',' $way','$cardname',' $cardno','$exp','$cvc')";
    
    if (mysqli_query($conn,$sql))
    {
        echo "<script> alert('Payment processed successfully!!!') </script>";
    }
    else
    {
        echo "<script> alert('An Error occured') </script>";
    }
    mysqli_close($conn);

 

?>      