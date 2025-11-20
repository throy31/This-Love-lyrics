<?php
//Song Title and the artist
$title = "This Love";
$artist = "Maroon 5";
$mood = "Emotional";
//number of chorus, verse, bridges, and operators
$chorusCount = 2;
$verseCount = 2;
$bridge = 1;
$totalSections = $verseCount + $chorusCount;

//type juggling 
$typeJuggle2 = "Verse count: " . $verseCount;

//noun, verb, and adjeectives as array
$nouns = ["heart", "love", "eyes", "mind", "plane", "game", "wings"];
$verbs = ["burning", "controlled", "whispered", "return", "feed", "pretending", "repair"];
$adjectives = ["broken", "high", "satisfied", "alright"];

//song lyrics
$verse1 = [
    "I was so high I did not recognize",
    "The fire burning in her eyes",
    "The chaos that controlled my mind",
    "Whispered goodbye as she got on a plane",
    "Never to return again",
    "But always in my $nouns[0], oh"
];

$chorus = [
    "This $nouns[1] has taken its toll on me",
    "She said goodbye too many times before",
    "And her $nouns[0] is breaking in front of me",
    "And I have no choice",
    "'Cause I won't say goodbye anymore"
];

$verse2 = [
    "I tried my best to feed her appetite",
    "Keep her coming every night",
    "So hard to keep her $adjectives[2], oh",
    "Kept playing $nouns[1] like it was just a $nouns[4]",
    "Pretending to feel the same",
    "Then turn around and leave again"
];

$bridge = [
    "I'll fix these $adjectives[0] things, $verbs[6] your $adjectives[0] $nouns[6]",
    "And make sure everything's $adjectives[3]",
    "My pressure on your hips, sinking my fingertips",
    "Into every inch of you",
    "Because I know that's what you want me to do"
];

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
        background-color: rgb(102, 7, 16);
        font-family: 'Georgia', serif;
        line-height: 1.8;
        text-align: center;
    }

    h1 {
        font-size: 5rem;
        color:rgb(196, 25, 6);
        margin-bottom: 0;
    }

    h2 {
        font-size: 2rem;
        color:rgb(207, 155, 132);
        margin-top: 0;
    }

    p {
        white-space: pre-line;
        margin: 10px 0;
        color:rgb(255, 255, 255);
    }

    h3 {
        font-size: 1.4rem;
        margin-top: 40px;
        padding-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color:rgb(207, 155, 132);
    }

    h4 {
        font-size: 0.5rem;
        margin-top: 40px;
        padding-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color:rgb(255, 255, 255);
    }

    .mood {
        font-weight: bold;
        color:rgb(255, 255, 255);
        border-bottom: 2px solidrgb(255, 255, 255);
        padding-bottom: 15px;
    }

    .br{
        border-top: 2px solidrgb(255, 255, 255);
        padding-top: 15px;
    }
    </style>
</head>

<body>
    <h1><?php echo $title; ?></h1>
    <h2>By <?php echo $artist; ?> (Mood: <?php echo $mood; ?>)</h2>

    <p><strong>Total Sections:</strong> <?php echo $totalSections; ?></p>

    <div class="section">
        <h3>Verse 1</h3>
        <?php foreach ($verse1 as $line) { echo "<p>$line</p>"; } ?>
    </div>

    <div class="section">
        <h3>Chorus</h3>
        <?php foreach ($chorus as $line) { echo "<p>$line</p>"; } ?>
    </div>

    <div class="section">
        <h3>Verse 2</h3>
        <?php foreach ($verse2 as $line) { echo "<p>$line</p>"; } ?>
    </div>

    <div class="section">
        <h3>Bridge</h3>
        <?php foreach ($bridge as $line) { echo "<p>$line</p>"; } ?>
    </div>

    <div class="section">
        <h3>Chorus</h3>
        <?php 
        for ($i = 1; $i <= $chorusCount; $i++) {
            echo "<h4>Chorus Repeat $i</h4>";
            foreach ($chorus as $line) { echo "<p>$line</p>"; }
        }
        ?>
    </div>
</body>
</html>

