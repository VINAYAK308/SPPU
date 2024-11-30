

const answers = [
    "Hello, Alice",             // Puzzle 1: Function (greet)
    "8",                        // Puzzle 2: Function (add)
    "Buddy says woof!",         // Puzzle 3: Class and method
    "6",                        // Puzzle 4: Function with default argument
    "24",                       // Puzzle 5: Recursive factorial
    "Tesla goes beep!",         // Puzzle 6: Class and method (Car)
    "8",                        // Puzzle 7: Power function
    "My name is John, and I'm 25 years old.", // Puzzle 8: Class Person introduction
    "10",                       // Puzzle 9: Recursive sum of list
    "78.5"  
];

let currentPuzzleIndex = 0;
let score = 0;

window.onload = function() {
    loadPuzzle();
};

function loadPuzzle() {
    // Hide all puzzles
    const puzzles = document.querySelectorAll('.puzzle');
    puzzles.forEach(puzzle => puzzle.style.display = 'none');
    
    // Show the current puzzle
    if (currentPuzzleIndex < puzzles.length) {
        document.getElementById(`puzzle${currentPuzzleIndex + 1}`).style.display = 'block';
        document.getElementById("answer").value = '';
        document.getElementById("feedback").textContent = '';
    } else {
        document.getElementById("feedback").textContent = `Congratulations! You've completed all puzzles. Your score is ${score}/${answers.length}.`;
        document.getElementById("answer").style.display = 'none';
        document.querySelector('button[onclick="checkAnswer()"]').style.display = 'none';
        document.querySelector('button[onclick="previousPuzzle()"]').style.display = 'none';
        document.querySelector('button[onclick="nextPuzzle()"]').style.display = 'none';
    }
}

function checkAnswer() {
    const userAnswer = document.getElementById("answer").value.trim();
    const correctAnswer = answers[currentPuzzleIndex];

    if (userAnswer === correctAnswer) {
        document.getElementById("feedback").textContent = "Correct!";
        score++;
    } else {
        document.getElementById("feedback").textContent = "Incorrect. Try again!";
        return; // Do not proceed to the next puzzle if the answer is incorrect
    }

    currentPuzzleIndex++;
    setTimeout(loadPuzzle, 1000);
}

function previousPuzzle() {
    if (currentPuzzleIndex > 0) {
        currentPuzzleIndex--;
        loadPuzzle();
    }
}

function nextPuzzle() {
    if (currentPuzzleIndex < answers.length - 1) {
        currentPuzzleIndex++;
        loadPuzzle();
    }
}

