<!DOCTYPE html>
<html>
<head>
    <title>SOWISO Exercise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<header>Dynamic Math Exercise Generator</header>

<div class="container">
    <div class="text-center">
        <div id="exerciseText"><?php echo $exerciseText; ?></div>
        <form id="answerForm">
            <input type="text" id="userAnswer" placeholder="Your answer" required>
            <button type="submit" id="submitButton">Submit</button>
        </form>
        <button type="button" id="newExerciseButton">New Exercise</button>
        <p id="feedbackText"></p>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
