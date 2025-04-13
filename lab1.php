<?php
if (isset($_POST['submit'])){
    $names     = $_POST['uname'];
    $day       = $_POST['days'];
    $dept      = $_POST['department'];
    $hour      = $_POST['hours'];
    $min       = $_POST['minutes'];
    $sec       = $_POST['seconds'];
    
    // Calculate total seconds
    $total = ($day * 24 * 60 * 60) + ($hour * 60 * 60) + ($min * 60) + $sec;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Worker Details</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f2f2f2;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 40px auto;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                padding: 20px;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            .section {
                margin-bottom: 20px;
            }
            .section p {
                margin: 8px 0;
            }
            .label {
                font-weight: bold;
                color: #555;
            }
            .result {
                background: #e6f7ff;
                padding: 10px;
                border-left: 4px solid #007bff;
            }
            .message {
                text-align: center;
                padding: 10px;
                font-size: 1.1em;
            }
            .congrats {
                background: #d4edda;
                color: #155724;
                padding: 10px;
                border-radius: 5px;
            }
            .encourage {
                background: #fff3cd;
                color: #856404;
                padding: 10px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Worker Details</h1>
            <div class="section result">
                <p><span class="label">Name:</span> <?php echo $names; ?></p>
                <p><span class="label">Department:</span> <?php echo $dept; ?></p>
                <p><span class="label">Days Worked:</span> <?php echo $day; ?></p>
                <p><span class="label">Hours Worked:</span> <?php echo $hour; ?></p>
                <p><span class="label">Minutes Worked:</span> <?php echo $min; ?></p>
                <p><span class="label">Seconds Worked:</span> <?php echo $sec; ?></p>
                <p><span class="label">Total Seconds:</span> <?php echo $total; ?></p>
            </div>
            <div class="message">
                <?php
                if ($total >= 5000000) {
                    echo '<div class="congrats">Congratulations ' . $names . '! You have been awarded an amount of $1000. Thank you!</div>';
                } else if ($total >= 3000000 && $total < 5000000) {
                    echo '<div class="congrats">Congratulations ' . $names . '! You have been awarded an amount of $500. Thank you!</div>';
                } else if ($total >= 1500000 && $total < 3000000) {
                    echo '<div class="congrats">Congratulations ' . $names . '! You have been awarded an amount of $250. Thank you!</div>';
                } else {
                    echo '<div class="encourage">Keep up the good work!</div>';
                }
                ?>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "Please submit the form from <a href='form.html'>form.html</a>";
}
?>