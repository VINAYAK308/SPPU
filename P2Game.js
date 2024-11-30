



const answers = [
    "Even",                // Puzzle 1: if-else (Even/Odd)
    "1 2 3 4",             // Puzzle 2: for loop (1 to 4)
    "1 2 3",               // Puzzle 3: while loop (1 to 3)
    "2 4 6 8",             // Puzzle 4: for loop with step
    "Greater than 5",      // Puzzle 5: if-else (Greater than 5)
    "2 4 6",               // Puzzle 6: for loop with condition
    "10 9 8 7 6",          // Puzzle 7: while loop (decreasing)
    "1 Middle 3",          // Puzzle 8: for loop with if-else
    "1 2 3",               // Puzzle 9: while loop with increment
    "0 1 2 3 4"  
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

