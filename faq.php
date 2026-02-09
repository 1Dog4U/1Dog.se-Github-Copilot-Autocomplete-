<?=
# FAQ that displays assorted questions and answers
# Next-up: an updates.php but with individual posts
$questions = [
    1 => "Har du använt Github Copilots AI nångång?",
    2 => "Default question",
    3 => "När lägger man till ...?",
    4 => "Vad ska du göra nu?",
    5 => "Funkar det nu??"
];
$answers = [
    1 => "Nej, men tänkte pröva.",
    2 => "Ska skilja på olika frågor och dess svar nu ...",
    3 => "Det gör man före en variabel eller funktion där man vill ta emot oändligt med parametrar",
    4 => "Fråga Duck.ai dom här sakerna",
    5 => "N/A"
];

echo "<ul>";
for ($i = 1; $i <= count($questions); $i++) {
    echo "<li style=\"list-style-type: none;\">Q: " .$questions[$i]. "</li>";
    echo "<li style=\"list-style-type: none;\">A: " .$answers[$i]. "</li>";
}
echo "</ul>";
?>
