<form action="array.php" method="GET">
    <input type="text" name="xname">
    <input type="submit"> 
</form>

<?php 

$xname = $_GET["xname"];
echo $xname;

//$family = array("father","mother","brother");
//$family[1] = "love";

$family = [
"designer" => "nour",
"programmer" => "majed",
"gamer" => "anas";
];
echo $family[$xname];

?>