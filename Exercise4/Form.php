<!DOCTYPE HTML>  
<html>
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

textarea{
  width: 230px;
  height: 50px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;

}

textarea:focus {
    width: 75%;
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

#tb1 {
  margin-left: 13.5%;
}
#tb2 {
  margin-left: 15.5%;
}
#tb3 {
  margin-left: 19%;
}
#tb4 {
  margin-left: 4%;
}
#tb5 {
  margin-left: 7%;
}
#tb6 {
  margin-left: 12%;
}
#submit{
  position: absolute;
  margin-left: 90px;
}

.error {
  color: #FF0000;
 
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

<?php
// define variables and set to empty values
$fnameErr = $nicknameErr = $emailErr = $genderErr = $homeAddErr = $phoneNumErr = "";
$fname =  $nickname = $email = $gender = $comment = $homeAdd = $phoneNum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Full Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if fname only contains letters and numbers
    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $fname)) {
      $fnameErr = "Only letters and numbers allowed"; 
    }
  }

  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["homeAdd"])) {
    $homeAdd = "";
  } else {
    $homeAdd = test_input($_POST["homeAdd"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["phoneNum"])) {
    $phoneNumErr = "Phone Number is required";
  } else {
    $phoneNum = test_input($_POST["phoneNum"]);
    // check if phoneNum only contains numbers
    if (!preg_match("/^[0-9]*$/",$phoneNum)) {
      $phoneNumErr = "Only numbers are allowed"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<div style="position: relative">
  <div class="box">
    <h2 id="formvalid"> Form Validation </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      Full Name: <input id="tb1" type="text" name="fname" value="<?php echo $fname;?>">
      <span class="error">* <br><?php echo $fnameErr;?></span>
      <br>

      Nickname: <input id="tb2" type="text" name="nickname" value="<?php echo $nickname;?>">
      <span class="error">* <br><?php echo $nicknameErr;?></span>
      <br>
      
      E-mail: <input id="tb3" type="text" name="email" value="<?php echo $email;?>">
      <span class="error">* <br><?php echo $emailErr;?></span>
      <br>
      
      Home Address: <input id="tb4" type="text" name="homeAdd" value="<?php echo $homeAdd;?>">
      <span class="error"><?php echo $homeAddErr;?></span>
      <br><br>

      Gender:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
      <span class="error">* <br><?php echo $genderErr;?></span>
      <br>

      Phone Number: <input id="tb5" type="text" name="phoneNum" value="<?php echo $phoneNum;?>">
      <span class="error">* <br><?php echo $phoneNumErr;?></span>
      <br>
      
      Comment: <textarea id="tb6" name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <br><br>

      <p><span class="error" id="error">* required field.</span>
      <input onclick="showButton()" id="submit" type="submit" name="submit" value="Submit"> </p>
    </form>
  </div>

  <?php
    echo '<div class="input">';
    echo "<h2>Information:</h2>";
    echo $fname;
    echo "<br><br>";
    echo $nickname;
    echo "<br><br>";
    echo $email;
    echo "<br><br>";
    echo $homeAdd;
    echo "<br><br>";
    echo $gender;
    echo "<br><br>";
    echo $phoneNum;
    echo "<br><br>";
    echo $comment;
    echo '<div class="web_button">';
    echo "My Website";
    echo '</div>';
    echo '</div>';
  ?>

</body>
</html>