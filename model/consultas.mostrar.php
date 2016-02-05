<?php
$i = 0;
	while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
                        echo "<tr valign='bottom'>";
			echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        echo "</tr>";
                    	}
			echo "<tr valign='middle'>";
          echo "<td>".$row['nombre1']."&nbsp;".$row['apellido1']."</td>";
          echo "<td>".$row['ext']."</td>";
          echo "<td>".$row['puesto']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "</tr>";
		}
                    $i++;
?>