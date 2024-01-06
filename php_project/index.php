<?php
$_voter = $_POST["okay"];
$_vote = $_POST["example"];

if ($_vote < 18) {
    echo "Oopps!! " . $_voter . " you are under age";

} else if ($_vote >= 60) {
    echo 'Sorry!! ' . $_voter . ' your too old !! ';

} else {
    echo "Now you can vote Mrs/mr " . $_voter;
}
?>