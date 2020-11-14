<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <!-- Google Fonts link -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <!-- CSS link  -->
    <link rel="stylesheet" href="..\css\welcome.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $tittle = $_POST['tittle'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $mobile = $_POST['mobile'];
        $filename = $_POST['filename'];
        $message = $_POST['message'];
    }
    ?>

    <div class="container">
        <!-- Thank you message  -->
        <h2 class="heading">Thank you! <?php echo "$tittle. $fname $lname"  ?></h2>
        <hr>
        <p class="para">You have submitted the following details:</p>

        <!-- Displaying all the data -->
        <div class="outputs">
            <div>
                <b>Date of Birth: </b> <?php echo "$dateOfBirth" ?>
            </div>
            <div>
                <b>Telephone: </b> <?php echo "$mobile" ?>
            </div>
            <div>
                <b>File Uploaded: </b> <?php echo "$filename" ?>
            </div>
            <br>
            <div>
                <b>Message:</b><br>
                <span><?php echo "$message" ?></span>
            </div>
        </div>
    </div>
</body>

</html>