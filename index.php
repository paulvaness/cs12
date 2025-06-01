<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    echo "<h1>Multiplication Table</h1>";
    
    echo "<table border='1'>";
    
    $max = 10;
    
    for ($i = 0; $i <= $max; $i++) {
        echo "<tr>";
        
        for ($j = 0; $j <= $max; $j++) {
            $product = $i * $j;
            
            $bgcolor = '';
            if ($i % 2 == 0) {
                $bgcolor = ($j % 2 == 0) ? 'blue' : 'aliceblue';
            } else {
                $bgcolor = ($j % 2 == 0) ? 'aliceblue' : 'blue';
            }
            
            echo "<td bgcolor='$bgcolor' width='40' height='40' align='center'><b>$product</b></td>";
        }
        
        echo "</tr>";
    }
    
    echo "</table>";
    
    ?>
</body>
</html>