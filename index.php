<?php 
$isHiring = isset($_POST['hiring']) ? (bool)$_POST['hiring'] : true;

// Minor: Add error hiding if you want clean logs (optional)
ini_set('display_errors', 0);

echo "I think i am phping<br>";  // Added <br> for readability
echo "wow new feature a/b<br>";
echo "day two im adding an echo<br>";
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
echo "We have $devYears years of development experience on staff.<br>";  // Fixed typo
echo "Hi, im $devTwo and I'm $ageTwo years old.<br>";  // Fixed age

$otherStaff = ["david","kyle","tim","marcus"];
foreach ($otherStaff as $staff) {
    echo "<p>$staff</p>";
}

$salesTeam = ["alice", "bob", "charlie", "diana"];
echo "<h3>Sales Team</h3>";
// Simplified to foreach for consistency (optional)
foreach ($salesTeam as $salesperson) {
    echo "<p>$salesperson</p>";
}
$paragraphs = array_map(function($salesperson) {
    return "$salesperson";
}, $salesTeam);
echo implode("\n", $paragraphs);

//Button & Conditional Messages Practice
echo "<h3>Hiring Status</h3>";
echo "<form method='post'>";
echo "<button type='submit' name='hiring' value='" . ($isHiring ? '0' : '1') . "' style='padding: 10px; background: " . ($isHiring ? '#ffcccc' : '#ccffcc') . ";'>";  // FIXED: Use 0/1 for values
echo $isHiring ? 'Stop Hiring' : 'Start Hiring';
echo "</button>";
echo "</form>";

if ($isHiring) {
    echo "<p style='color: green; font-weight: bold;'>✅ We are hiring!</p>";
} else {
    echo "<p style='color: red; font-weight: bold;'>❌ Team is full!</p>";
}
//simple button

//minimal button
$b=isset($_POST['b'])?(bool)$_POST['b']:1;
echo "<h3>Hiring</h3><form method=post><button type=submit name=b value=".($b?'0':'1').">".($b?'Stop':'Start')."</button></form><p style='color:".($b?'green':'red').";'>".($b?'Hiring!':'Full!')."</p>";

//////
//input
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['msg'])) {
    $message = htmlspecialchars($_POST['msg']);
}

echo "<hr><h3>Leave a message</h3>";

echo '<form method="post">';
echo ' <input type="text"
              name="msg"
              placeholder="Type something and hit Enter"
              value="' . $message . '"
              style="width:100%; padding:10px; font-size:16px;">';
echo '</form>';

if ($message !== "") {
    echo '<p style="margin-top:10px; background: #f0f0f0; border-left:4px solid #007cba;">
    You typed: <strong>' . $message . '</strong>
    </p>';
}
?>

//Select
$choice = $_POST['role'] ?? 'developer';
?>

<hr>
<h3>Choose your role</h3>

<form method="post">
  <select name="role"
          onchange="this.form.submit()"
          style=" padding:10px; font-size:18px; width:100%;">
    <option value="developer" <?= $choice==='developer' ? 'selected' : '' ?>>Developer</option>
    <option value="designer" <?= $choice==='designer' ? 'selected' : '' ?>>Designer</option>
    <option value="sales" <?= $choice==='sales' ? 'selected' : '' ?>>Sales</option>
    <option value="manager" <?= $choice==='manager' ? 'selected' : '' ?>>Manager</option>
    <option value="intern" <?= $choice==='intern' ? 'selected' : '' ?>>Intern</option>
</select>
</form>

<?php if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['role'])): ?>
<p style="margin-top:10px; padding:12px; background:#e6f3ff; font-weight:bold;">
You selected: <span style="color:#0073aa;"><?=htmlspecialchars($choice) ?></span>
</p>
<?php endif; ?>
