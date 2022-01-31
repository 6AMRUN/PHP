<?php

    $_POST["Submit"] = "Submit";

    if($_POST["Submit"])
    {
        $select = $_POST["favFruit"];
        switch ($select) {
            case "Apple":
                $val = "You like $select #1";
                break;
            case "Orange":
                $val = "You like $select #2";
                break;
            case "Water Melon":
                $val = "You like $select #3";
                break;
            case "Grapes":
                $val = "You like $select #4";
                break;
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Favorite fruit</title>
</head>

<body>
    <form action="" method="post">
        <label for="favFruit"> Pick your favorite fruit</label>
        <select name="favFruit" id="favFruit">
            <option value="">Choose your favorite</option>
            <option value="Apple">Apple</option>
            <option value="Orange">Orange</option>
            <option value="Water Melon">Water Melon</option>
            <option value="Grapes">Grapes</option>
        </select>
        <input type="submit" name="submit" value="Submit">
        <p><?php echo $val;?></p>
    </form>
</body>

</html>
