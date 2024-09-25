<?php


$score = null;
$full_name = $email = $birthdate = $contact_number = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $full_name = isset($_POST['full_name']) ? ($_POST['full_name']) : '';
    $email = isset($_POST['email']) ? ($_POST['email']) : '';
    $birthdate = isset($_POST['birthdate']) ? ($_POST['birthdate']) : '';
    $contact_number = isset($_POST['contact_number']) ? ($_POST['contact_number']) : '';



$answer_1 = $_POST['answer_1'] ?? null;
$answer_2 = $_POST['answer_2'] ?? null;
$answer_3 = $_POST['answer_3'] ?? null;
$answer_4 = $_POST['answer_4'] ?? null;
$answer_5 = $_POST['answer_5'] ?? null;

$answers = [
    $answer_1,
    $answer_2,
    $answer_3,
    $answer_4,
    $answer_5

];
$score = compute_score($answers);
}

function compute_score($answers = []) {
    $correct_answers = ['D', 'B' , 'A', 'B', 'C'] ;
    $score = 0;
    for ($i = 0; $i < count($correct_answers); $i++) {
       if($correct_answers[$i] == $answers[$i]) {
            $score++;
        }
    }
    return $score;
}


$hero_class = ($score > 2) ? 'is-success' : 'is-danger';


?>

<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/site/site.min.css">
    <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>
</head>
<body>
<section class="hero <?= $hero_class ?>">
    <div class="hero-body">
        
        <p class="title">Your Score <?php echo $score; ?>!</p>

        <p class="subtitle">This is the IPT10 PHP Quiz Web Application Laboratory Activity.</p>
    </div>
</section>
<section class="section">
    <div class="table-container">
        <table class="table is-bordered is-hoverable is-fullwidth">
            <tbody>
                <tr>
                    <th>Input Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Complete Name</td>
                    <td> <?php echo $full_name; ?></td>
                </tr>
                
                    <tr>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Birthdate</td>
                    <td><?php echo $birthdate; ?></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><?php echo $contact_number; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php if ($score === 5): ?>
        <canvas id="confetti-canvas"></canvas>
        <script>
            var confettiSettings = { target: 'confetti-canvas' };
            var confetti = new ConfettiGenerator(confettiSettings);
            confetti.render();
</script>

<?php endif; ?>

</section>

<section class="section">
    <div class="table-container">
        <table class="table is-bordered is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Question #</th>
                    <th>Correct Answer</th>
                    <th>Your Answer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $questions = [
                    "Question 1",
                    "Question 2",
                    "Question 3",
                    "Question 4",
                    "Question 5"
                ];
                $correct_answers = ['D', 'B', 'A', 'B', 'C'];

            
                for ($i = 0; $i < count($questions); $i++): ?>
                    <tr>
                        <td><?php echo $questions[$i]; ?></td>
                        <td><?php echo $correct_answers[$i]; ?></td>
                        <td><?php echo $answers[$i]; ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</section>

</body>
</html>