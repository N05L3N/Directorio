<?php
	
	if(!@mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M")) {
		echo "<h2>".$TEXT['cds-error']."</h2>";
			die();
	}
	mysql_select_db("cdcol");
	mysql_query("SET NAMES 'utf8'"); 

?>
<div style="background-color:#fff;">
<div id="consultas-todos">
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
		</tr>
<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

                $result = mysql_query("SELECT * FROM appsdirecorio.test ORDER BY nombre ASC limit 0,1000");

                $i = 0;
                while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
                        echo "<tr valign='bottom'>";
			echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        echo "</tr>";
                    	}
			echo "<tr valign='middle'>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['nombre']."</td>";
		}
                    echo "</tr>";
                    $i++;
					
                }
            ?>
	</table>
</div>