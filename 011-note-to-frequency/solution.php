<form action="solution.php" method="post">
    Note <input type="text" name="note"><br>
    <input type="submit">
</form>

<?php 
$userNote = $_POST['note'];
$userNoteChar = str_split($userNote)[0];
$userNoteNum = str_split($userNote)[1];

if($userNoteChar === 'C'){
    echo 261.63 / pow(2, 4 - $userNoteNum);
} else if ($userNoteChar === 'D'){
    echo 293.66 / pow(2, 4 - $userNoteNum);
} else if ($userNoteChar === 'E'){
    echo 329.63 / pow(2, 4 - $userNoteNum);
} else if ($userNoteChar === 'F'){
    echo 349.23 / pow(2, 4 - $userNoteNum); 
} else if ($userNoteChar === 'G'){
    echo 392 / pow(2, 4 - $userNoteNum); 
} else if ($userNoteChar === 'A'){
    echo 440 / pow(2, 4 - $userNoteNum);
} else if ($userNoteChar === 'B'){
    echo 493.88 / pow(2, 4 - $userNoteNum);
}
