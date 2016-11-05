<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		
<script type="text/javascript">
function init(){
	var sun = document.createElement("div");
	    sun.setAttribute("id","sun");
	    document.body.appendChild(sun);

	for(var i=0; i<=200; i++){
	  var size = Math.round(Math.random()*3,2);
	  var star = document.createElement("div");
	      star.style.position = 'absolute';
	      star.style.backgroundColor = '#ffffff';
	      star.style.width = star.style.height = size +"px";
	      star.style.borderRadius = size/2 +"px";
	      star.style.boxShadow = "0px 0px "+Math.round(Math.random()*30)+"px #ffffff";
	      star.style.top = Math.round(Math.random()*window.innerHeight)-5 + "px";
	      star.style.left = Math.round(Math.random()*window.innerWidth)-5 + "px";
	  document.body.appendChild(star);
	}

}

function  info1(){
	var answer1 = "Japan!";
	document.getElementById("answer1").innerHTML = answer1;
	
}

function  info2(){
	var answer2 = "Paranaque City!";
	document.getElementById("answer2").innerHTML = answer2;
	
}

function  info3(){
	var answer3 = "Pink!";
	document.getElementById("answer3").innerHTML = answer3;
	
}

function  info4(){
	var answer4 = "Definetly No!";
	document.getElementById("answer4").innerHTML = answer4;
	
}

function  info5(){
	var answer5 = "Travelling!";
	document.getElementById("answer5").innerHTML = answer5;
	
}

function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='Homepage.php?delete_id='+id;
 }
}

</script>

<body  onload = "init()">
	<div id = "picframe">
		<img src= "5.jpg" id = "picture1">
		<img src= "3.jpg" id = "picture2">
		<img src= "4.jpg" id = "picture3">
		<img src= "2.jpg" id = "picture4">
		<img src= "6.jpg" id = "picture5">
			
	</div>
	
	<div id = "content">
	
	<h2 id = "name">Marc Anthony Nares</h2>

	<audio controls loop autoplay id="audio">

  <source src="goflex.ogg" type="audio/ogg">
  <source src="goflex.mp3" type="audio/mpeg">
	</audio>

	<p id = "nickname">Marc | Mac | Marky</p>

	<h3 id = "hobbies">Hobbies</h3>
	<p id = "hobbies2">Playing different kinds of sports | Playing video games</p>
	<p id = "hobbies3">Travelling | Eating | Listening to music | Chilling</p>

	<h3 id = "interest">Interest</h3>
	<p id = "interest2"> Playing musical instruments | Photography | Painting </p>
	<p id = "interest3"> Game developer | Cooking | Mechanic </p>

	<h3 id = "websites"> Favorite Websites </h3>
	</div>

	<div> 
		<a href = "https://www.facebook.com/" target="_blank">
			<img src= "facebook.png" id = "facebook">
		</a>

		<a href = "https://www.twitter.com/" target="_blank">
			<img src= "twitter.png" id = "twitter">
		</a>

		<a href = "https://www.youtube.com/" target="_blank">
			<img src= "youtube.png" id = "youtube">
		</a>

		<a href = "http://www.nba.com/" target="_blank">
			 <img src="10.png" id = "nba">
		</a>

	</div>

	<div id = "trivia">	
		<h3 id ="triviaName">Trivia</h3>
		
		<form id="trivia1">
		<p>1st Trivia <br> <br>
			Where were <br> I born?</p>
		<br>
		<input class="button" type="button" value="Find out!" onclick="info1()" />
		
		<p id="answer1"></p>
		</form>
		
		<form id="trivia2">
		<p>2nd Trivia <br><br>
			What's my all-time <br> favorite town or <br> city? </p>
		<input class="button" type="button" value="Find out!" onclick="info2()"/>
		<p id="answer2"></p>
		</form>

		<form id="trivia3">
		<p>3rd Trivia <br><br>
			Red or Pink?</p>
		<br>
		<br>
		<input class="button" type="button" value="Find out!" onclick="info3()"/>
		<p id="answer3"></p>
		
		</form>

		<form id="trivia4">
		<p>4th Trivia <br><br>
			Do you think <br> I'm strong?</p>
		<br>
		<input class="button" type="button" value="Find out!" onclick="info4()"/>
		<p id="answer4"></p>
		</form>

		<form id="trivia5">
		<p>5th Trivia <br><br>
			What do you think <br> I love to do most?</p>
		<br>
		<input class="button" type="button" value="Find out!" onclick="info5()"/>
		<p id="answer5"></p>
		</form>

		<h3 id ="formName">C.R.U.D</h3>
	
		<div id="body">
 		<div id="data">
    		<table align="center">
    		<tr>
    		<th id="add_data"colspan="10" onclick="window.location='form.php'" style="cursor: pointer"> Input Data Here </a></th>
    		</tr>
    		<th>Full Name</th>
    		<th>Nickame</th>
    		<th>Email</th>
    		<th>Home Address</th>
    		<th>Gender</th>
    		<th>Phone Number</th>
    		<th>Comment</th>
    		<th colspan="2">Operations</th>
    		</tr>
    
    	<?php
 		$sql_query="SELECT * FROM users";
 		$result_set=mysql_query($sql_query);
 		while($row=mysql_fetch_row($result_set))
 		{
  		?>

        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
  		<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="p_edit.png" align="EDIT" style="width: 20px"/></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="p_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

	</div>
	
</body>
</html>