
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <!-- Add the Bulma CSS here -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">

</head>
<body>
<section class="section">
    <h1 class="title">User Registration</h1>
    <h2 class="subtitle">
        This is the IPT10 PHP Quiz Web Application Laboratory Activity. Please register
    </h2>
    <!-- Supply the correct HTTP method and target form handler resource -->
    
    <form id="index" action="instruction.php" method="POST">
   
        <div class="field">
            <label class="label">Full Name</label>
            <div class="control">
                <input class="input" type="text" name="complete_name" placeholder="Complete Name" required="required">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" name="email" type="email" placeholder="example@gmail.com" required="required" />
            </div>
        </div>
        <br>
        <div class="field">
            <label class="label">Birthdate</label>
            <div class="control">
                <input class="input" name="birthdate" type="date" required="required" />
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Contact Number</label>
            <div class="control">
                <input class="input" name="contact_number" type="number" required="required"/>
            </div>
        </div>

        <!-- Next button -->
        <button type="submit" class="button is-instuction.php">Proceed Next</button>
    </form>
</section>

</body>
</html>