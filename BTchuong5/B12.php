<table width="400px" cellspacing="0px" cellpadding="0px" border="1px" style="border-collapse: collapse;">
<?php
    for($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for($col = 1; $col <= 8; $col++) {
            $total = $row + $col;
            if($total % 2 == 0) {
                $bgColor = "#ffffff";
            } else {
                $bgColor = "#000000";
            }
            echo "<td height='50px' width='50px' bgcolor='$bgColor'></td>";
        }      
        echo "</tr>";
    }
?>
</table>