<?php
require '../Models/IndexPageInfo.php'; 

if (isset($data['error'])) {
    echo "Error: " . htmlspecialchars($data['error']);
} else {
    echo "<table border='1'>";
    foreach ($data['ServiceCards'] as $row) {
        echo "<tr>";
  
            echo "<td>" . htmlspecialchars($row[0]) . "</td>";
            echo "<td>" . htmlspecialchars($row[1]) . "</td>";

        echo "</tr>";
    }
    echo "</table>";
}