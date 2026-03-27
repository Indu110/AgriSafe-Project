<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "agrisafe";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "agrisafe");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get and sanitize search query
$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if ($query === '') {
    echo "Please enter a search term.";
    exit;
}

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT name, effect, alternative, link FROM pesticidess WHERE name LIKE ?");
$searchTerm = "%" . $query . "%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Search Results:</h2>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div style='margin-bottom: 20px; padding: 10px; border: 1px solid #ccc;'>";

        echo "<b>Pesticide:</b> " . htmlspecialchars($row["name"]) . "<br>";
        echo "<b>Effect:</b> " . htmlspecialchars($row["effect"]) . "<br>";
        echo "<b>Alternative:</b> " . htmlspecialchars($row["alternative"]) . "<br>";
        echo "<b>More Info:</b> <a href='" . htmlspecialchars($row["link"]) . "' target='_blank'>Click here</a><br>";
        echo "</div><hr>";
    }
} else {
    echo "No results found for '<b>" . htmlspecialchars($query) . "</b>'.";
}

$stmt->close();
$conn->close();
?>
