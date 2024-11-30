
    const answers = [
        "5",                          // Puzzle 1: Generator
        "Creating A",                 // Puzzle 2: Metaclass
        "Enter\nInside context\nExit",// Puzzle 3: Context Manager
        "Decorator argument: test\nHello!", // Puzzle 4: Decorator with arguments
        "9",                          // Puzzle 5: Closure
        "Coroutine starts\nReceived: 10", // Puzzle 6: Coroutine
        "A's init\nC's init\nB's init\nD's init", // Puzzle 7: Multiple Inheritance with super
        "0\n1",                       // Puzzle 8: List comprehension vs generator expression
        "John\nDoe",                  // Puzzle 9: Property method
        "Alice\nN/A"  
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
    
    
