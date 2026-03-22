<select>
<?php
$year = date("Y");
for($i=1900;$i<=$year;$i++){
    echo "<option>$i</option>";
}
?>
</select>
