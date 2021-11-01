<TABLE border=1>
<?php
for($i=0; $i < 10; $i++) {
	echo("<tr>");
	for($k=0; $k < 10; $k++) {
		if (($i*10+$k+1) % 2 == 0)
			echo ("<td style='color: red;'>". ($i*10+$k+1) ."</td>");
		else
			echo ("<td>". ($i*10+$k+1) ."</td>");
	}
	echo("</tr>");
}
?>
</TABLE>
