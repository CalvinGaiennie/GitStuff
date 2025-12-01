<?php 
echo "I think i am phping";
echo "wow new feature a/b";
echo "day two im adding an echo";
echo "Day two im adding feature b<br>";
echo "Did I add a line break on day three?<br>";
echo "Day two im adding feature b<br>";
echo "Yes<br>";
$name = "developer";
$age = 28;
$experience = 2;
$devTwo = "Dev2";
$ageTwo = 25;
$experienceTwo = 5;
$devYears = $experienceTwo + $experience;
echo "<h2>Team</h2>";
echo "My name is $name and I'm $age years old<br>";
echo "We have $devYears of development exerience on staff.<br>";
echo "Hi, im $devTwo and I'm $age years old. <br>";
$otherStaff = ["david","kyle","tim","marcus"];
foreach ($otherStaff as $staff) {
    echo "<p>$staff</p>";
}
$salesTeam = ["alice", "bob", "charlie", "diana"];
echo "<h3>Sales Team</h3>";
$paragraphs = array_map(function($salesperson) {
    return "$salesperson";
}, $salesTeam);
echo implode("\n", $paragraphs);
?>
