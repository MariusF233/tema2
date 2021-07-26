<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="salary_section">
        <h1>Calculate your net salary</h1>

        <form class="salary_form" action="controllers/view.sub.php" method="post" enctype="multipart/form-data">
            

            <label  >gross salary:</label>
            <input type="text" name="salary"  placeholder="your gross salary" />
            <button type="submit" name="submit" > Submit </button>

<?php

if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo "<h3>Empty field</h3>";
    }
}
?>


</form>
</div>

</body>
</html>