<?php
# from the $_SERVER global variable, check if the HTTP method used is POST, if its not POST, redirect to the index.php page
# Reference: https://www.php.net/manual/en/reserved.variables.server.php

// Supply the missing code
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$contact_number = $_POST['contact_number'];

}

?>


<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
</head>
<body>
<section class="section">
    <h1 class="title">Instructions</h1>
    <h2 class="subtitle">
        This is the IPT10 PHP Quiz Web Application Laboratory Activity.
    </h2>

    
    <form action="quiz.php" method="POST">

        <input type="hidden" name="full_name" value="<?php echo $full_name; ?>" />
        <input type="hidden" name="email" value="<?php echo $email; ?>" />
        <input type="hidden" name="birthdate" value="<?php echo $birthdate; ?>" />
        <input type="hidden" name="contact_number" value="<?php echo $contact_number; ?>" />

        <p>
        Hello Human, please read the instructions first </p>
        <br>
        <div class="field">
            <label class="label">Terms and conditions</label>
            <div class="control">
                <textarea class="textarea" placeholder="Textarea">Read the question carefully </textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label class="checkbox">
                <input type="checkbox" name="agree" required="required">
                I agree to the <a href="#">terms and conditions</a>
                </label>
            </div>
        </div>
        
        <!-- Start Quiz button -->
        <button type="submit" class="button is-quiz.php" >Start Quiz</button>
    </form>
</section>
    </form>
</section>

</body>
</html>