<?php 

$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$op = $_GET["op"];

if(empty($number1)){
    $result = "first number is empty";
}elseif(empty($number2)){
    $result = "second number is empty";
}elseif(empty($op)){
    $result = "please enter an operation";
}else{
    if($op==="+"){
        $result = $_GET["number1"] + $_GET["number2"];
    } else if($op==="-"){
        $result = $_GET["number1"] - $_GET["number2"];
    }else if($op==="*"){
        $result = $_GET["number1"] * $_GET["number2"];
    }else if($op==="/"){
        $result = $_GET["number1"] / $_GET["number2"];
    }
}





?>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
   <div class="container">
      <form action="calc.php" method="GET" class="form">
        <div> 
            <label> Enter Number1: </label>
            <input type="number"  name="number1" class="form-control">
        </div>

        <div> 
            <label> Enter Number2: </label>
            <input type="number"  name="number2" class="form-control">
        </div>
        <br>
        <div> 
            <label> operation: </label>
            <input type="text"  name="op" class="form-control">
        </div>
        <br> <br>
        <div class="alert alert-success"> 
            <?php  echo $result?>
        </div>
        <br>
        <input type="submit" class="btn btn-primary">
      </form>
   </div>
</body>