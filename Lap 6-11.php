<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap 6-11 and 6-11cal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lap 6-11 & 6-11cal</h1>
        <form action="process.php" method="POST">
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
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
