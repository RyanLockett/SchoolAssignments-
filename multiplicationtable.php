<?php
echo "<h1> Please enter your numbers</h1>
<form method='GET'  action =' '> 
you can only enter in numbers! <br><br>
First number <input type='number' name='fbox'><br>
Second number <input type='number' name='sbox'><br>

<input type='submit' name='button' value='calculate'/>
</form>";

echo "<table border=1>";
if (isset( $_GET['fbox']) and isset( $_GET['sbox'])){  // setting the first and second box



	
        for ($r =1; $r <= $_GET['fbox']; $r++){

            echo'<tr>';

            for ($c = 1; $c <= $_GET['sbox']; $c++)
                echo '<td>' .$c*$r.'</td>'; // logic for the table
           echo '</tr>'; 
		   

        }
	}
	

  echo"</table>";
  ?>