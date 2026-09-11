<?php

echo "<h3>Array</h3>";

$subjects = ["PHP", "Java", "C", "Python"];

echo $subjects[0] . "<br>";
echo $subjects[1] . "<br>";
echo $subjects[2] . "<br>";
echo $subjects[3] . "<br>";

echo "<h3>Change Value</h3>";

$subjects[1] = "Go";

echo $subjects[1];

echo "<h3>Add Value</h3>";

$subjects[] = "GIT";

print_r($subjects) . "<br> ";

echo "<h3>Count Array</h3>";

echo "Number of student : " . count($subjects);

echo "<h3>Foreach Loop </h3>";

foreach ($subjects as $subjects) {
    echo $subjects . "<br>";
}

echo "<h3>Associative a</h3>";

?>