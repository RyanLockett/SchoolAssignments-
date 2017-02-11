<?php
// making everything blank first
$fname= $lname="";
$age="";
$town="";
$animal="";
$color="";
$happy="";
$chappy = "";

if (isset ($_POST['counter'])){
	$counter=$_POST['counter'];
}
else {
	$counter=1;
}

if (isset ($_POST['next'])){
	$counter++;
	
}

if( isset($_POST['back'])){
	$counter--;
	
}


if (isset ($_POST['Firstname'])){
	$fname=$_POST['Firstname'];
	
	
}

if (isset ($_POST['Lastname'])){
	$lname=$_POST['Lastname'];
}


if (isset ($_POST['age'])){
	$age=$_POST['age'];
}


if (isset ($_POST['FavoriteColor'])){
	$color=$_POST['FavoriteColor'];
}


if (isset ($_POST['HomeTown'])){
	$town=$_POST['HomeTown'];
}


if (isset ($_POST['FavoriteAnimal'])){
	$animal=$_POST['FavoriteAnimal'];
}


if (isset($_POST['checkhappy'])) {
	$chappy = "checked";
}
if (isset($_POST['checkhappyhidden'])) {
	if ($_POST['checkhappyhidden'] ==  "checked") {
	$happy = "checked";
	$chappy = "checked";
	}
}



if ($counter==1){
echo "
<html>
<body>
<h1> Please enter your information accurately!</h1>
<form method= 'post' action='' >
Firstname	<input type='text' name='Firstname' value='$fname' <br><br>
Lastname	<input type='test' name='Lastname' value='$lname' <br>

<br>Are you happy? <input type='checkbox' name='checkhappy' $happy> <br>
		
		<!-- hidden input tags-->
		
		<input type='hidden' name='counter' value='$counter'> <!-- counter -->
		<input type='submit' name='next' value='next'><br> <!-- counter-->
			
			
			<input type='hidden' name='age' value='$age' >
			<input type='hidden' name='FavoriteColor' value='$color'> 
			<input type='hidden' name='HomeTown' value='$town' >
			<input type='hidden' name='FavoriteAnimal' value='$animal'> 
		
		
		
		</form>
	
</form>





</body>
</html>";
}


if ($counter==2){
	echo "<h1> Page Two</h1>";
	echo "<html>
			<body>
				<form method= 'post' action='' >
				Age:			   <input type='number' name='age' value='$age' ><br>
				Favorite Color: <input type='text' name='FavoriteColor' value='$color'> <br><br>
				Hometown:       <input type='text' name='HomeTown' value='$town'> <br>
				Favorite Animal: <input type='text' name='FavoriteAnimal' value='$animal'> <br> 
				
				<!-- hidden input tags-->
				
					<input type='hidden' name='Firstname' value='$fname'> <br><br>
					<input type='hidden' name='Lastname' value='$lname'> <br>
					<input type='hidden' name='checkhappyhidden' value='$chappy'> <br>
					
				<input type='hidden' name='counter' value='$counter'/><br> <!-- always include these three lines of code when ending a page block -->
				<input type='submit' name='back' value='back'/> <!-- always include these three lines of code when ending a page block -->
				<input type='submit' name='next' value='next'/><br> <!-- always include these three lines of code when ending a page block -->
				
				</form>
			</body>
		</html>";
}

if ($counter==3){
	echo "<h1> Page 3</h1>";
	echo "<html>
			<body>
				<form method= 'post' action='' >

				
					
				<table>
					<tr> First name: <b>$fname </b></tr>,<br>
					<tr> Last name: <b>$lname </b></tr><br>	
					<tr> Age: <b>$age </b></tr><br>
					<tr> Favorite Color: <b>$color</b></tr><br>
					<tr> HomeTown: <b>$town </b></tr><br>
					<tr> Favorite Animal: <b>$animal </b></tr><br>
					<tr> Are you happy? <b> $happy </b></tr><br>
					</table>
				<!-- hidden input tags-->
				
					<input type='hidden' name='Firstname' value='$fname'> <br><br>
					<input type='hidden' name='Lastname' value='$lname'> <br>
					<input type='hidden' name='checkhappyhidden' value='$chappy'> <br>
					
					<input type='hidden' name='counter' value='$counter'/><br> 
					<input type='submit' name='back' value='back'/> 
					
				
				<input type='hidden' name='age' value='$age' >
				<input type='hidden' name='FavoriteColor' value='$color'> 
				<input type='hidden' name='HomeTown' value='$town' >
				<input type='hidden' name='FavoriteAnimal' value='$animal'> 
				</form>
			
			</body>
		</html>";	
				}


?>