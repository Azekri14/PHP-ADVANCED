<?php
$leeftijd = 0;

echo "<ul>";

while($leeftijd < 18) {
  echo "<li> Ik ben $leeftijd jaar, dus ik mag nog niet stemmen </li>";
  $leeftijd++;
}

echo "<li> Ik ben 18 jaar oud dus ik heb stemrecht!</li>";
echo "</ul>";
?>
