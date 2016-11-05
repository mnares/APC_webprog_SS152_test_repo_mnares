<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}

$Err = $fullnameErr = $nicknameErr = $emailErr = $genderErr = $addressErr = $phoneNumErr = "";
	
if(isset($_POST['btn-update'])){
 // variables for input data
  
  $fullname = test_input($_POST["fullname"]);
  
  // check if fname only contains letters and numbers
  if (!preg_match("/^[a-zA-Z0-9 ]*$/", $fullname)) {
    $fullnameErr = "Only letters and numbers allowed"; 
    $Err = "Err";
  }
  
  $nickname = test_input($_POST["nickname"]);
  
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
    $nicknameErr = "Only letters and white space allowed"; 
    $Err = "Err";
  }

  $email = test_input($_POST["email"]);
    
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
    $Err = "Err";
  }

  $address = test_input($_POST["address"]);
    
  // check if homeAdd only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
    $addressErr = "Only letters and white space allowed";
    $Err = "Err"; 
  }

  if (empty($_POST["gender"])) { 
    $genderErr = "Input gender";  
    $Err = "Err";    
  } else {    
    $gender = test_input($_POST["gender"]);   
  }
  
  $phoneNum = test_input($_POST["phoneNum"]);
    
  // check if phoneNum only contains numbers
  if (!preg_match("/^[0-9]*$/",$phoneNum)) {
    $phoneNumErr = "Only numbers are allowed";
    $Err = "Err"; 
  }

  if (empty($_POST["comment"])) {    
    $comment = "";    
  } else {    
    $comment = test_input($_POST["comment"]);   
  }

 // sql query for update data into database
  if($Err != "Err"){
    $sql_query = "UPDATE users SET fullname='$fullname',nickname='$nickname',email='$email',address='$address',gender='$gender',phoneNum='$phoneNum',comment='$comment' WHERE user_id=".$_GET['edit_id'];
  }

  if(mysql_query($sql_query) && $Err != "Err"){
    ?>
    <script type="text/javascript">
    alert('Data Are Updated Successfully');
    window.location.href='Homepage.php';
    </script>
    <?php
  }
  else{
    ?>
    <script type="text/javascript">
    alert('error occured while updating data');
    </script>
    <?php
  }
}

if(isset($_POST['btn-cancel']))
{
 header("Location: Homepage.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE HTML>  
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<style>
  
body {
  background-color: #383838; 
  font-family:courier;
  margin:0;padding:0;outline:0;list-style:none;
}

.box{
  position: absolute;
  left: 20%;
  margin-top: 20px;
  background-color: #5B5552;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  font-family: courier;
  width: 500px;
  height: 565px;
  color: #EEE7DA;
  text-align: center;

}

input[type=text], select {
  width: 50%;
  height: 10px;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}

.input{
  position: absolute;
  left: 65%;
  margin-top: 20px;
  background-color: #5B5552;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  font-family: courier;
  width: 250px;
  height: 450px;
  color: #EEE7DA;
  text-align: center;
}

.web_button{
  display: none;
  margin-top: 100px;
  margin-left: 65px;
  background-color: #EEE7DA;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  font-family: calibri;
  width: 120px;
  height: 30px;
  color: #5B5552;
  line-height: 2em;
  cursor: pointer;
}

.web_button:hover{
  background-color: #f9f7f3;
}

#formvalid {
  text-align: center;
}

#submit{
  position: absolute;
  margin-left: 90px;
}

.error {
  color: #FF0000;
 
}

#tb1 {
  margin-left: 10px;
}

#tb2 {
  margin-left: 20px;
}

#tb3 {
  margin-left: 45px;
}

#tb4 {
  margin-left: 25px;
}

#tb5 {
  margin-left: 10px;
}

#tb6 {
  margin-left: 20px;
}

#tb7 {
  margin-left: 10px;
}





#sun {
        position: absolute;
        width: 20em; height: 20em;
        top: -10em; left: -10em;
        background: #ffffff;
        -webkit-border-radius: 10em;
        -moz-border-radius: 10em;
        border-radius: 10em;
        -webkit-animation: flow 10s infinite alternate;
        -moz-animation: flow 10s infinite alternate;
        animation: flow 10s infinite alternate;
        z-index: 1000;
    }

    @-webkit-keyframes flow {
        0% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 150px #ffad01;
            
        }
        25% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        50% {
        box-shadow: 0 0 100px #fffc01,
                    0 0 300px #ffad01;
            
        }
        75% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        100% {
        box-shadow: 0 0 20px #fffc01,
                    0 0 150px #ffad01;
        }
    }

    @-moz-keyframes flow {
        0% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 150px #ffad01;
            
        }
        25% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        50% {
        box-shadow: 0 0 100px #fffc01,
                    0 0 300px #ffad01;
            
        }
        75% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        100% {
        box-shadow: 0 0 0px #fffc01,
                    0 0 150px #ffad01;
        }
    }

    @-o-keyframes flow {
        0% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 150px #ffad01;
            
        }
        25% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        50% {
        box-shadow: 0 0 100px #fffc01,
                    0 0 300px #ffad01;
            
        }
        75% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        100% {
        box-shadow: 0 0 0px #fffc01,
                    0 0 150px #ffad01;
        }
    }

    @keyframes flow {
        0% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 150px #ffad01;
            
        }
        25% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        50% {
        box-shadow: 0 0 100px #fffc01,
                    0 0 300px #ffad01;
            
        }
        75% {
        box-shadow: 0 0 50px #fffc01,
                    0 0 200px #ffad01;
            
        }
        100% {
        box-shadow: 0 0 0px #fffc01,
                    0 0 150px #ffad01;
        }
    }

    #form{
      background-color: #808080;
      opacity: 0.6;
      width: 500px;
      position: absolute;
      top: 200px;
      left: 450px;

    }

</style>
</head>
<body  onload = "init()">
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

</script>  

<div style="position: relative">
  <div class="box">
    <h2 id="formValid"> Form Validation </h2>
    <form method="post">  
     
        <tr>
          <td><a href = "Homepage.php"> Back to Main Page </a></td> 
        </tr>
      <br>
        <tr>
          <td>
          Full Name:
            <input type="text" name="fullname" placeholder="Full Name" value="<?php echo $fetched_row['fullname']; ?>" required />
            <span class="error">* <br><?php echo $fullnameErr;?></span>
          </td>
        </tr>
      <br>
        <tr>
          <td>
          Nickname:
            <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required />
            <span class="error">* <br><?php echo $nicknameErr;?></span>
          </td>
        </tr>
      <br>
        <tr>
          <td>
            Email:
            <input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required />
            <span class="error">* <br><?php echo $emailErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            Address:
            <input type="text" name="address" placeholder="Home Address" value="<?php echo $fetched_row['address']; ?>" />
            <span class="error">* <br><?php echo $addressErr;?></span>
          </td>
        </tr>
        
        </tr>
          <td>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female 
            <span class="error">* <br><?php echo $genderErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            Phone #:
            <input type="text" name="phoneNum" placeholder="Phone Number" value="<?php echo $fetched_row['phoneNum']; ?>" required />
            <span class="error">* <br><?php echo $phoneNumErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
             Comment:
                <input type="text" name="comment" placeholder="Comment" value="<?php echo $fetched_row['comment']; ?>">
          </td>
        </tr>
      <br>
        <td>
          <p><span class="error">* required field </span></p>
          <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
          <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
        </td>
        </tr>
    </form>
  </div>
</body>
</html>