<?php
include 'db.php';

$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);

echo '<table border="1"><tr><th>Full Name</th><th>Email</th><th>Message</th><th>Created At</th></tr>';
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['full_name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['message']}</td>
        <td>{$row['created_at']}</td>
    </tr>";
}
echo '</table>';
?>
