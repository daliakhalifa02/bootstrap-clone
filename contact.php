<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Freelancer - Theme Preview - Start Bootstrap</title>
        <link rel="stylesheet" href="styles/style.css" />
        <link rel="icon" type="image/icon" href="images/start-icon.jpg" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script/script.js"></script>
    </head>
    <header>
        <nav class="top-nav flex">
            <h1 class="font">Start Bootstrap</h1>
            <ul class="links font flex">
              <li>Portfolio</li>
              <li>About</li>
              <li>Contact</li>
            </ul>
          </nav>
    </header>
    <body>
        <section>
            <div class="contact contactme">
                <h2 class="font portfolio-title">Contact Me</h2>
                <hr class="horizontal-line2">
                <div>
                    <p id="demo"></p>
                </div>
                <form name="myForm"  method="POST" action="contact.php">
                <?php
                if(isset($_POST['submit'])){
                    $host = "localhost";
                    $username = "bootstrapdb_user";
                    $password = "abc123";
                    $dbname = "bootstrapdb";
                    $con = mysqli_connect($host, $username, $password, $dbname);
                    if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    }
                    $sql = "SELECT name, email, message, number FROM contactme";
                    $result = $con->query($sql);
                    $con->close();
                    while($rows=$result->fetch_assoc())
                    {
                ?>
                    <input type="text" id="name" name="name" placeholder=<?php echo $rows['name']; ?>><br>
                    <input type="text" id="email" name="email" placeholder=<?php echo $rows['email'];?>><br>
                    <input type="text" id="number" name="number" placeholder=<?php echo $rows['number'];?>><br>
                    <input type="text" id="message" name="message" placeholder=<?php echo $rows['message'];?>>
                    <?php
                    }
                }
               ?>
                    <button type="submit" id="send-button" name="submit" class="btn send" onclick="validateMessage();validateName();myNumber();validateEmail();">Send</button>
                </form>
            </div>
        </section>
    </body>
</html>

<!-- I'm sorry for using php and html in the same file, i tried using them seperately but the data didn't show up inside
the input like i wanted it to. Will make sure to figure this out for later -->