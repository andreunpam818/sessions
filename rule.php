<?php 

    //#Scenarios -1
    $total_order = 550000;
    $city  = "Jakarta";
    $expected = "Priority Delivery";

    if ($total_order <= 0){
        $hasil = "Invalid Order";
    }elseif ($total_order >= 500000 && $city = "Jakarta"){
        $actual = "Periority Delivery";
    }elseif ($total_order >= 300000){
        $actual = "Free Standar Delivery";
    }else{
        $actual = "Regular Delivery (Shipping Fee Rp.20.000;)";
    }
    
    echo "# Scenarios -1 (Ordinary) <br>";
    echo "total =". $total_order . "<br>";
    echo "City  =". $city . "<br>";
    echo "Expected Result = " . $expected . "<br>";
    echo "Actual Result = " . $actual . "<br><br>";

    //#Scenarios -2
    $total_order = 400000;
    $city  = "Bandung";
    $expected = "Free Standard Delivery";

    if ($total_order <= 0){
        $actual = "Invalid Order";
    }elseif ($total_order >= 500000 && $city = "Jakarta"){
        $actual = "Periority Delivery";
    }elseif ($total_order >= 300000){
        $actual = "Free Standar Delivery";
    }else{
        $actual = "Regular Delivery (Shipping Fee Rp.20.000;)";
    }
    
    echo "# Scenarios -2 (Ordinary) <br>";
    echo "total =". $total_order . "<br>";
    echo "City  =". $city . "<br>";
    echo "Expected Result = " . $expected . "<br>";
    echo "Actual Result = " . $actual . "<br><br>";

    //#Scenarios -3
    $total_order = 100000;
    $city  = "Jakarta";
    $expected = "Regular Delivery — (Shipping Fee Rp.20.000;)";

    if ($total_order <= 0){
        $actual = "Invalid Order";
    }elseif ($total_order >= 500000 && $city = "Jakarta"){
        $actual = "Periority Delivery";
    }elseif ($total_order >= 300000){
        $actual = "Free Standar Delivery";
    }else{
        $actual = "Regular Delivery (Shipping Fee Rp.20.000;)";
    }
    
    echo "# Scenarios -3 (Ordinary) <br>";
    echo "total =". $total_order . "<br>";
    echo "City  =". $city . "<br>";
    echo "Expected Result = " . $expected . "<br>";
    echo "Actual Result = " . $actual . "<br><br>";

    //#Scenarios -4
    $total_order = 500000;
    $city  = "Jakarta";
    $expected = "Priority Delivery";

    if ($total_order <= 0){
        $actual = "Invalid Order";
    }elseif ($total_order >= 500000 && $city = "Jakarta"){
        $actual = "Periority Delivery";
    }elseif ($total_order >= 300000){
        $actual = "Free Standar Delivery";
    }else{
        $actual = "Regular Delivery (Shipping Fee Rp.20.000;";
    }
    
    echo "# Scenarios -4 (Boundary) <br>";
    echo "total =". $total_order . "<br>";
    echo "City  =". $city . "<br>";
    echo "Expected Result = " . $expected . "<br>";
    echo "Actual Result = " . $actual . "<br><br>";

    //#Scenarios -5
    $total_order = 499999;
    $city  = "Jakarta";
    $expected = "Free Standard Delivery";

    if ($total_order <= 0){
        $actual = "Invalid Order";
    }elseif ($total_order >= 500000 && $city = "Jakarta"){
        $actual = "Periority Delivery";
    }elseif ($total_order >= 300000){
        $actual = "Free Standar Delivery";
    }else{
        $actual = "Regular Delivery (Shipping Fee Rp.20.000;";
    }
    
    echo "# Scenarios -5 (Boundary) <br>";
    echo "total =". $total_order . "<br>";
    echo "City  =". $city . "<br>";
    echo "Expected Result = " . $expected . "<br>";
    echo "Actual Result = " . $actual . "<br><br>";

        //#Scenarios -6
    $total_order = 300000;
    $city  = "Bandung";
    $expected = "Free Standard Delivery";

    if ($total_order <= 0){
        $actual = "Invalid Order";
    }elseif ($total_order >= 500000 && $city = "Jakarta"){
        $actual = "Periority Delivery";
    }elseif ($total_order >= 300000){
        $actual = "Free Standar Delivery";
    }else{
        $actual = "Regular Delivery (Shipping Fee Rp.20.000;";
    }
    
    echo "# Scenarios -6 (Boundary) <br>";
    echo "total =". $total_order . "<br>";
    echo "City  =". $city . "<br>";
    echo "Expected Result = " . $expected . "<br>";
    echo "Actual Result = " . $actual . "<br><br>";

?>
