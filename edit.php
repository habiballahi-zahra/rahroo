<?php
$id = $_GET['id'];
$table = $_GET['index'];
$connect = mysqli_connect("localhost", "root", "", "car_gallery");
$sql = "select * from $table where ID=$id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
if ($table == 'car') {
    $name = $row['name'];
    $atr = $row['color'];
} elseif ($table == 'customer') {
    $name = $row['user_name'];
    $atr = $row['email'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="CSS/main.js"></script>
    <title>ورود</title>
</head>
<body>
<article class="register_form">
    <h3> ویرایش</h3>
    <form method="post" action="update.php?id=<?=$id?>&t=<?=$table?>">
        <div class="input_group">
            <input class="contact_input" type="hidden" name="user_name" value="<?= $row['ID'] ?>">
            <input class="contact_input" type="text" name="name" required value="<?= $name; ?>">
            <input class="contact_input" type="text" name="attr" required value="<?= $atr; ?>">
        </div>
        <button class="btn btn_submit" type="submit">ویرایش</button>
    </form>
</article>
</body>
</html>