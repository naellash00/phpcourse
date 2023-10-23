<form action="form.php" method = "GET">
<!--i can right here GET or POST-->
name: <input type="text" name="fname">
<br> <br>
name: <input type="text" name="lname">
<!--f_name is the name that will be sent to php-->
<br> <br>
<input type="submit">
</form>

<?php 
// GET تظهر في شريط العنوان
// POST  لاتظهر المعلومات في شريط ال url
// request تجمع بين الاثنين get و post
echo $_GET["fname"];
echo $_GET["lname"];
?>