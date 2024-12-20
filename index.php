<?php
session_start();

// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeMate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Margarine&display=swap" rel="stylesheet">
   
</head>

<body>
    <!-- Navigation Bar -->
     
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navitem">

        <div class="container-fluid">
            <a  class="CIcon"><img id="CIcon" src="./logo.png" alt=""/> <a>
            <h1><a class="navbar-brand" id="heading1" href="#">CodeMate </a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto item-center ">
                    <li class="nav-item">
                        <a class="nav-link1" href="https://www.codechef.com/cpp-online-compiler">Just-Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link1" href="./JavascriptVisualRelease/Algorithms.html">CodeStream</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link1" href="#contact">Feedback</a> -->
                        <a href="./pages/logout.php" class="nav-link1"
                      type="submit" >
                        logout</a>
                    </li>
                    <!-- <li class="nav-item">
                       <a class="nav-link1"  onclick= "window.location.href='SignIn.html';">SignIn/SignUp</a>
                      
                        <a class="nav-link1" href="#contact">Feedback</a> 
                    </li> -->
                     <li class="nav-item">
                        <a href="./pages/register.php" class="SIcon"><img id="SIcon" src="./SIcon-removebg-preview.png" alt=""/> <a>
                    
                    </li>  
                </ul>
            </div>
        </div>
    </nav>
   
    <!-- Header Section -->
    <header class="header" id="header">
        <br>
        <br>
        <div class="container">
            <br>
            <span>
            <h1 id="heading">CodeMate</h1>
            <h2 id="cont-3-head" class="text-white"> From Rural Roots to Coding Routes!</h2>
            
            </span>
            <br>
            <!-- <p class="lead">From Rural Roots to Coding Routes!</p> -->
        </div>
    </header>
    <div>
        <a href="Chat.html" class="Chaticon"><img id="Chat1" src="./How3.png" alt=""/> <a>
    </div> 
    <!-- About Section -->
    <section id="countdown" class="py-5">
      
        <div class="about" id = "about">
           
            <div class="container-3">
                <h1 id="cont-3-head">* Level Up Your Coding Skills *</h1>
                
                <div class="step-1">
                    
                    <pre></pre><h2 class="features">1.SkillScript</h2>
                    
                   
                    <br>
                    <div class="info-img-1">

                        <p id="para-1" class="Shortin">Learning a coding language step-by-step ensures a thorough understanding of fundamental concepts, syntax, and best practices. This approach builds a strong foundation for problem-solving and prepares learners to tackle more advanced coding challenges effectively.
                            <br><br>
                            <a class="nav-link" href="#basicCpp">Cpp</a>
                            <a class="nav-link" href="#basicPython">Python</a>
                            <a class="nav-link" href="#basicJava">Java</a>
 
                         </p>
                         <div class="info-img-1">
                            <!-- Image content goes here -->
                            <img src="Steps.avif" alt="Blaze Maze Challenge" class="img-fluid">
                        </div>
                    </div>
                </div>
                <br>
                <br>

                <div class="step-2">
                    <pre><h2 id="step-2-head" class="features">2.Synopsis </h2></pre>
                    <br>
                    <div class="info-img-2">
                        <p id="para-2" class="Shortin">Understanding concepts deeply is essential for several reasons across various contexts, whether in education, professional settings, or everyday life.Understanding concepts is crucial because it Forms a foundation for advanced learning ,Enhances problem-solving and critical thinking,Promotes adaptability to new situations
                            and Enables interdisciplinary connections
                            <br><br>
                           <a class="navlink" id="Cpp Synopsis" onclick="window.location.href='CppPrep.html';" >Cpp Synopsis</a>
                           <a class="navlink" id="Python Synopsis" onclick="window.location.href='PythonPrep.html';"> Python Synopsis</a>
                           <a class="navlink" id="Java Synopsis" onclick="window.location.href='JavaPrep.html';"> Java Synopsis</a>
                           <br>
                                <button class="btn-dropdown" id="navlink" >Lectures </button>
                                <!-- <button class="btn-dropdown2" id="navlink" >Lectures</button> -->

                            
                
                        
                            <div class="main-container">
                                
                                <div class="dropdown"><a class="navlink" id="C++ Synopsis" onclick="window.location.href='CLecture.html';"> C++ Lectures</a></div>
                                <div class="dropdown"><a class="navlink" id="Python Synopsis" onclick="window.location.href='PLecture.html';"> Python Lectures</a></div>
                                <div class="dropdown"><a class="navlink" id="Java Synopsis" onclick="window.location.href='JLecture.html';"> Java Lectures</a> </div>
                                
                              
                            </div>
                           
                            <!-- <div class="main-container"></div> -->
                            <script src="app2.js"></script>
                            
                        
                       </p>
                       </p>
                            <!-- Image content goes here -->
                            <img src="boy.jpeg" alt="CamWarrior" class="img-fluid">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="step-3">
                    <br>
                    <pre><h2 id="step-3-head" class="features">       3.CodeQuest Quiz </h2></pre>
                    <br>
                    <div class="info-img-3">
                        <p id="para-3" class="Shortin">A coding quiz helps coders reinforce their understanding and assess their skills in various programming concepts. It prepares them for technical interviews and keeps them updated with the latest trends and technologies. By enhancing problem-solving abilities and boosting confidence, coding quizzes make the learning process more engaging and trackable.
                            <br><br><a class="navlink" id=" Some Cpp Quiz" onclick="window.location.href='QuizDash.html';" >Coding Quiz</a>
                            <!-- <a class="navlink" id=" Some Cpp Quiz" onclick="window.location.href='C2Quiz.html';" >Moderate Cpp</a>
                            <a class="navlink" id=" Some Cpp Quiz" onclick="window.location.href='C3Quiz.html';" >Difficult Cpp</a>
                           
                             <br>
                             <a class="navlink" id=" Some Python Quiz" onclick="window.location.href='P1Quiz.html';">Basic Python </a>
                             
                             <a class="navlink" id=" Some Python Quiz" onclick="window.location.href='P2Quiz.html';">Moderate Python </a>
                             
                             <a class="navlink" id=" Some Python Quiz" onclick="window.location.href='P3Quiz.html';">Difficult Python </a>
                             <br>
                           
                             <a class="navlink" id=" Some Java Quiz" onclick="window.location.href='J1Quiz.html';">Basic Java</a>
                             <a class="navlink" id=" Some Java Quiz" onclick="window.location.href='J2Quiz.html';">Moderate Java</a>
                             <a class="navlink" id=" Some Java Quiz" onclick="window.location.href='J3Quiz.html';">Difficult Java</a> -->

                       </p>
                        <div class="img-3">
                            <!-- Image content goes here -->
                            <img src="Quiz.png" alt="CamWarrior" class="img-fluid">
                        </div>
                    </div>

                    </div>
                </div>
                <br>
                <br>
                <div class="step-4">
                <br>
                <pre>  <h2 id="step-4-head" class="features">        4. Brainteaser</h2></pre>
                <br>
                <div class="info-img-4">
                        <p id="para-4" class="Shortin"> Braintreasure provides a platform for users to enhance their coding skills through diverse<br> and challenging questions. It helps in improving problem-solving abilities and deepens<br> understanding of various programming concepts.
                            <br><br>
                            <a class="navlink" id="CGame" onclick="window.location.href='PuzzleDash.html';">Brainteaser</a>
                            <!-- <a class="navlink" id=" PGame" onclick="window.location.href='PGame.html';"> Python Brainteaser</a>
                            <a class="navlink" id=" JGame" onclick="window.location.href='JGame.html';"> Java Brainteaser </a> -->
                        </p>
                        <div class="img-4">
                            <!-- Image content goes here -->
                            <img src="Braintreasure.jpeg" alt="Robo Fest" class="img-fluid">
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <div class="step-5">
                <br>
                <pre><h2 id="step-5-head" class="features">       5.Task Ticker</h2></pre>
                
                <div class="info-img-5">
                     <p id="para-5" class="Shortin"> A Task Ticker is beneficial for coders as it organizes tasks, helping to prioritize work efficiently and maintain focus. It allows for progress tracking and better time management, ensuring nothing is forgotten and reducing stress. This leads to increased productivity and consistency in coding projects.</pre>
                            <br><br>
                            <a class="navlink" id="Let's Plan" onclick="window.location.href='Task.html';">Let's Plan</a><br>
                             
                        <div class="img-5">
                             <!-- Image content goes here  -->
                            <img src="ToDoList.png" alt="Task Ticker" class="img-fluid">
                        </div> 
                     </p>

                </div>
                <br>
            </div>
        </div>
        <br>
    </section>
    <br>
    

    <!-- Schedule Section -->
    <section id="basicCpp" class="bg-gray-100 p-8">
         
            <div >
                <h1 class="text-3xl font-bold text-center mb-8">Steps to Learn C++</h1>
        
                <div class="step">
                    <div class="step-title">Step 1: Set up your environment</div>
                    <div class="step-description">
                        <ul>
                            <li>Install a C++ compiler (e.g., GCC, Clang) and a code editor or IDE (e.g., Visual Studio, Code::Blocks).</li>
                            <li>Familiarize yourself with the basic syntax and data types in C++.</li>
                        </ul>
                    </div>
                </div>
        
                <div class="step">
                    <div class="step-title">Step 2: Learn the basics</div>
                    <div class="step-description">
                        <ul>
                            <li>Variables, data types, operators</li>
                            <li>Control structures (if-else, switch, loops)</li>
                            <li>Functions and function calls</li>
                            <li>Basic input/output operations</li>
                        </ul>
                    </div>
                </div>
        
                <div class="step">
                    <div class="step-title">Step 3: Understand object-oriented programming (OOP) concepts</div>
                    <div class="step-description">
                        <ul>
                            <li>Classes and objects</li>
                            <li>Constructors and destructors</li>
                            <li>Member variables and functions</li>
                            <li>Inheritance and polymorphism</li>
                        </ul>
                    </div>
                </div>
        
                <div class="step">
                    <div class="step-title">Step 4: Learn advanced topics</div>
                    <div class="step-description">
                        <ul>
                            <li>Pointers and memory management</li>
                            <li>Templates and generic programming</li>
                            <li>File input/output and streams</li>
                            <li>Exception handling</li>
                        </ul>
                    </div>

                </div>

        
                <div class="step1">
                    <div class="step-title">Step 5: Practice and build projects</div>
                    <div class="step-description">
                        <ul>
                            <li>Start with simple programs (e.g., calculator, game) to practice basic concepts</li>
                            <li>Move on to more complex projects (e.g., data structures, algorithms) to apply advanced topics</li>
                            <li>Participate in coding challenges and exercises (e.g., LeetCode, HackerRank)</li>
                        </ul>
                    </div>
                </div>
        
                <div class="step">
                    <div class="step-title">Step 6: Learn from resources</div>
                    <div class="step-description">
                        <ul>
                            <li>Books (e.g., "The C++ Programming Language" by Bjarne Stroustrup)</li>
                            <li>Online tutorials and courses (e.g., Coursera, Udemy, edX)</li>
                            <li>Documentation and reference materials</li>
                            <li>Join online communities for support and feedback</li>
                        </ul>
                    </div>
                </div>
        
                <div class="step1">
                    <div class="step-title">Step 7: Review and refine</div>
                    <div class="step-description">
                        <ul>
                            <li>Review concepts regularly to reinforce your understanding</li>
                            <li>Refine your coding skills by learning new libraries and frameworks</li>
                            <li>Stay up-to-date with the latest developments in the C++ community</li>
                        </ul>
                    </div>
                </div>
                <center>
                <p><a class="nav-link1" href="#header">Home</a></p>
                </center>
        
            </div>
        
    </section>
    <section id="basicPython" class="bg-gray-100 p-8">
        <div>
            <h1 class="text-3xl font-bold text-center mb-8">Steps to Learn Python</h1>
    
            <div class="step">
                <div class="step-title">Step 1: Set up your environment</div>
                <div class="step-description">
                    <ul>
                        <li>Install Python and choose a code editor or IDE (e.g., PyCharm, VS Code).</li>
                        <li>Understand how to use the Python interpreter and manage packages with pip.</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 2: Learn the basics</div>
                <div class="step-description">
                    <ul>
                        <li>Variables, data types, and basic operators</li>
                        <li>Control flow (if-else statements, loops)</li>
                        <li>Functions and modules</li>
                        <li>Input/output operations</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 3: Explore data structures and libraries</div>
                <div class="step-description">
                    <ul>
                        <li>Lists, tuples, dictionaries, and sets</li>
                        <li>Working with files and directories</li>
                        <li>Introduction to standard libraries (e.g., math, datetime)</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 4: Understand object-oriented programming (OOP)</div>
                <div class="step-description">
                    <ul>
                        <li>Classes, objects, and inheritance</li>
                        <li>Methods, properties, and constructors</li>
                        <li>Encapsulation and polymorphism</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 5: Dive into advanced topics</div>
                <div class="step-description">
                    <ul>
                        <li>Exception handling</li>
                        <li>Generators and iterators</li>
                        <li>Decorators and context managers</li>
                        <li>Concurrency basics (threads and multiprocessing)</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 6: Practice and build projects</div>
                <div class="step-description">
                    <ul>
                        <li>Create simple scripts (e.g., calculator, text processing tools)</li>
                        <li>Develop larger projects (e.g., web applications, data analysis tools)</li>
                        <li>Participate in coding challenges (e.g., LeetCode, Codeforces)</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 7: Learn from resources</div>
                <div class="step-description">
                    <ul>
                        <li>Books (e.g., "Python Crash Course" by Eric Matthes)</li>
                        <li>Online courses (e.g., Coursera, edX, Codecademy)</li>
                        <li>Documentation and community forums like Stack Overflow</li>
                        <li>Join Python user groups and attend meetups for networking</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 8: Review and refine</div>
                <div class="step-description">
                    <ul>
                        <li>Regularly revisit fundamental concepts and practice coding challenges</li>
                        <li>Explore advanced libraries and frameworks (e.g., Django, TensorFlow)</li>
                        <li>Stay updated with Python community trends and best practices</li>
                    </ul>
                </div>
            </div>
            <center>
            <p><a class="nav-link1" href="#header">Home</a></p>
        </center>
        </div>
    </section>
    <section id="basicJava" class="bg-gray-100 p-8">
        <div>
            <h1 class="text-3xl font-bold text-center mb-8">Steps to Learn Java</h1>
    
            <div class="step">
                <div class="step-title">Step 1: Set up your environment</div>
                <div class="step-description">
                    <ul>
                        <li>Install the Java Development Kit (JDK) and set up your development environment (e.g., IntelliJ IDEA, Eclipse).</li>
                        <li>Understand how to write and compile Java programs using the JDK.</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 2: Learn the basics</div>
                <div class="step-description">
                    <ul>
                        <li>Variables, data types, and operators</li>
                        <li>Control flow (if-else statements, loops)</li>
                        <li>Methods and functions</li>
                        <li>Input/output operations</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 3: Understand object-oriented programming (OOP)</div>
                <div class="step-description">
                    <ul>
                        <li>Classes, objects, and methods</li>
                        <li>Inheritance, polymorphism, and interfaces</li>
                        <li>Encapsulation and access modifiers</li>
                        <li>Abstract classes and interfaces</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 4: Explore advanced topics</div>
                <div class="step-description">
                    <ul>
                        <li>Exception handling</li>
                        <li>Generics and collections framework</li>
                        <li>Concurrency basics (threads)</li>
                        <li>File I/O and serialization</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 5: Dive into Java APIs and frameworks</div>
                <div class="step-description">
                    <ul>
                        <li>Explore commonly used Java APIs (e.g., java.util, java.io)</li>
                        <li>Introduction to frameworks like Spring or Hibernate</li>
                        <li>Web development with Java Servlets and JSP</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 6: Practice and build projects</div>
                <div class="step-description">
                    <ul>
                        <li>Start with simple programs (e.g., calculator, text-based games)</li>
                        <li>Develop larger projects (e.g., web applications, enterprise systems)</li>
                        <li>Participate in coding competitions and challenges (e.g., Codeforces, HackerRank)</li>
                    </ul>
                </div>
            </div>
    
            <div class="step">
                <div class="step-title">Step 7: Learn from resources</div>
                <div class="step-description">
                    <ul>
                        <li>Books (e.g., "Head First Java" by Kathy Sierra and Bert Bates)</li>
                        <li>Online courses (e.g., Coursera, edX, Pluralsight)</li>
                        <li>Official Java documentation and tutorials
                        </ul>
                    </div>
                </div>
                <center>
                <p><a class="nav-link1" href="#header">Home</a></p>
               </center>
            </div>
        </section>
        <br>
        <br>
        <br>
        
    
    
        
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            
            
            <h2>Feedback</h2>
            <form action="" id="contactForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <center>
                    <p>  <a class="navlink" id="Home" onclick="window.location.href='index.html';">Home</a></p>
                </center>
            </form>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; Tech-Titans. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
