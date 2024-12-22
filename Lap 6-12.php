<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap 6-11 & 6-12 Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lap 6-11 & 6-12 Calculator</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="homework">Homework Score (0-30):</label>
                <input type="number" id="homework" name="homework" min="0" max="30" required>
            </div>
            <div class="form-group">
                <label for="midterm">Midterm Score (0-35):</label>
                <input type="number" id="midterm" name="midterm" min="0" max="35" required>
            </div>
            <div class="form-group">
                <label for="final">Final Score (0-35):</label>
                <input type="number" id="final" name="final" min="0" max="35" required>
            </div>
            <button type="submit">Calculate Grade</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // รับค่า
            $homework = filter_input(INPUT_POST, 'homework', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 30]]);
            $midterm = filter_input(INPUT_POST, 'midterm', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 35]]);
            $final = filter_input(INPUT_POST, 'final', FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 35]]);

            if ($homework === false || $midterm === false || $final === false) {
                echo "<p class='error'>Invalid input. Please ensure all scores are within the allowed range.</p>";
            } else {
                // คำนวณคะแนนรวม
                $total = $homework + $midterm + $final;

                // คำนวณเกรด
                $grade = '';
                if ($total >= 80) {
                    $grade = 'A';
                } elseif ($total >= 75) {
                    $grade = 'B+';
                } elseif ($total >= 70) {
                    $grade = 'B';
                } elseif ($total >= 65) {
                    $grade = 'C+';
                } elseif ($total >= 60) {
                    $grade = 'C';
                } elseif ($total >= 55) {
                    $grade = 'D+';
                } elseif ($total >= 50) {
                    $grade = 'D';
                } else {
                    $grade = 'F';
                }

                // แสดงผลลัพธ์
                echo "<div class='result'>";
                echo "<p>Homework: $homework</p>";
                echo "<p>Midterm: $midterm</p>";
                echo "<p>Final: $final</p>";
                echo "<p>Total Score: $total</p>";
                echo "<p>Grade: $grade</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
