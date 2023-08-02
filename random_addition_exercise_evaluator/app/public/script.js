document.addEventListener('DOMContentLoaded', function () {
    const exerciseElement = document.getElementById('exerciseText');
    const answerForm = document.getElementById('answerForm');
    const feedbackElement = document.getElementById('feedbackText');
    const newExerciseButton = document.getElementById('newExerciseButton');
    const userAnswerInput = document.getElementById('userAnswer');

    // Function to handle the form submission
    function handleSubmit(event) {
        event.preventDefault();
        //sanitize the input
        const userAnswer = sanitizeInput(userAnswerInput.value);

        // Check if the user's answer contains only numbers (digits)
        if (!/^\d+$/.test(userAnswer)) {
            feedbackElement.textContent = 'Use numbers only.';
            feedbackElement.classList.remove('correct'); // Remove 'correct' class if present
            feedbackElement.classList.add('incorrect'); // Add 'incorrect' class
            return;
        }

        // Evaluate the user's answer
        const exercise = exerciseElement.textContent;
        const [a, b] = exercise.split('+').map(s => parseInt(s));
        const correctAnswer = a + b;
        const isCorrect = parseInt(userAnswer) === correctAnswer;

        // Provide feedback to the user
        feedbackElement.textContent = isCorrect ? 'Correct!' : 'Incorrect. Try again.';
        feedbackElement.classList.remove(isCorrect ? 'incorrect' : 'correct'); // Remove old class
        feedbackElement.classList.add(isCorrect ? 'correct' : 'incorrect'); // Add new class
    }

    // Function to sanitize the input (remove non-numeric characters)
    function sanitizeInput(input) {
        return input.replace(/[^\d]/g, '');
    }


    // Function to generate the next exercise
    function generateNextExercise() {
        window.location.reload();
    }

    // Initial setup
    function init() {
        answerForm.addEventListener('submit', handleSubmit);
        newExerciseButton.addEventListener('click', generateNextExercise);
    }

    init();
});
