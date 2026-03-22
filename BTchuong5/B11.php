<?php
$colors = ['black', 'blue', 'green', 'red', 'brown', 'magenta'];
echo "<h3>Danh sách các màu:</h3>";
foreach ($colors as $value) {
    echo "<p style='color: $value; font-weight: bold;'>$value</p>";
}
?>