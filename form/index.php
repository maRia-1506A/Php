<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- step 2 -->
    <?php
    $name = $phone = $email = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['text'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $gender = $_POST['gender'];
    }
    ?>

    <!-- step 1 -->
    <form action="" method="post">
        Name: <input type="text" name="text"><br><br>
        Phone: <input type="number" name="phone"><br><br>
        Email: <input type="email" name="email"><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="others">Others
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <!-- step 3 -->
    <?php
    echo "<h3>Your Input: </h3>";
    echo "Name: " . $name . "<br>Phone: " . $phone .
        "<br>Email: " . $email . "<br>Comment: " . $comment . "<br>Gender: " . $gender;
    ?>
</body>

</html>