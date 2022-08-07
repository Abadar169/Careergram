<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Which Career Path Suits You? Quiz Results</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="page-wrap">
        <h1 class="transparent index-headline" >Here’s what career path suits you </h1>
        
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;

            if ($answer1 == "A") { $totalA = $totalA + 1.17;  }
            if ($answer1 == "B") { $totalB = $totalB + 1.15;  }
            if ($answer1 == "C") { $totalC = $totalC + 1.13;  }
            if ($answer1 == "D") { $totalD = $totalD + 1.16;  }

            if ($answer2 == "A") { $totalA = $totalA + 1.17; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17;}
            if ($answer5 == "B") { $totalB = $totalB + 1.15;}
            if ($answer5 == "C") { $totalC = $totalC + 1.13;}
            if ($answer5 == "D") { $totalD = $totalD + 1.16;}

            ?>

<div class="results-overlay">

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                  echo '<div class="quiz-overlay result Mathematics"></div><div class="results-text"><p class="you-chose">You Got:</p><div class="results test-results2"><p class="score">Mathematics</p><p class="score-details">Lorem ipsum.</p><a id="replay" class="take-quiz-btn" href="test.php">Retake</a></div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                  echo '<div class="quiz-overlay result Commerce"></div><div class="results-text"><p class="you-chose">You Got:</p><div class="results test-results2"><p class="score">Commerce</p><p class="score-details">  Lorem ipsum.</p><a id="replay" class="take-quiz-btn" href="test.php">Retake</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                  echo '<div class="quiz-overlay result Arts/Humanities"></div><div class="results-text"><p class="you-chose">You Got:</p><div class="results test-results2"><p class="score">Arts/Humanities</p><p class="score-details"> Lorem ipsum.<p></p><Retake id="replay" class="take-quiz-btn" href="test.php">Retake</a></div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
                  echo '<div class="quiz-overlay result Biology"></div><div class="results-text"><p class="you-chose">You Got:</p><div class="results test-results2"><p class="score">Biology</p><p class="score-details">Lorem ipsum.</p><Retake id="replay" class="take-quiz-btn" href="test.php">Retake</a></div>';
            }   
        ?>     
        <p class="shareprompt">Share This Quiz</p>
        <div class="fa fa-whatsapp"></div>
                </div>
            </div>
