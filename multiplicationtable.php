<?php
	echo "
	<h1>Please enter the number of rows and columns</h1>
	
	<form method='GET'  action =' '> 
	You can only enter numbers! <br><br>
	Rows <input type='number' name='fbox'><br>
	Columns <input type='number' name='sbox'><br>

	<input type='submit' name='button' value='Make Table'/>
	</form>";
	 
	//fbox = rows of the multiplication table
	//sbox = columns of the multiplication table
	echo "<table border=1>";
	if(isset($_GET['fbox']) && isset($_GET['sbox'])) {  
		for($rows = 1; $rows <= $_GET['fbox']; $rows++) {
			echo'<tr>';
			for($columns = 1; $columns <= $_GET['sbox']; $columns++)
				echo '<td>' . $columns * $row .'</td>'; 
		   echo '</tr>'; 
		}
	}
	echo "
	</table>
	";
?>