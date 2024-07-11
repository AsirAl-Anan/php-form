
<?PHP
$fullname = $nickname = $fname = $mname = $address = $phone =$dob = $gender= $email = $hobby = $sscyear = $sscboard = $hscyear = $hscboard = $sscresult = $hscresult = $about = '';
$fullnameErr = $nicknameErr = $fnameErr = $mnameErr = $addressErr = $phoneErr =$emailErr =$dobErr = $genderErr = $tableErr= '';

if(isset($_POST['submit'])){
  if(empty($_POST['fullname'])) {
    $fullnameErr = "Full Name is required";
}else{
  $fullname = $_POST['fullname'];
}
if(empty($_POST['nickname'])) {
  $nicknameErr = "Nickname is required";
}else{
$nickname = $_POST['nickname'];
}
if(empty($_POST['fname'])) {
  $fnameErr = "Father's Name is required";
}else{
$fname = $_POST['fname'];
}
if(empty($_POST['mname'])) {
  $mnameErr = "Mother's Name is required";
}else{
$mname = $_POST['mname'];
}
if(empty($_POST['address'])) {
  $addressErr = "Adress is required";
}else{
$address = $_POST['address'];
}
if(empty($_POST['phone'])) {
  $phoneErr = "Phone number is required";
}else{
$phone = $_POST['phone'];
}
if(empty($_POST['dob'])) {
  $dobErr = "dob is required";
}else{
$dob = $_POST['dob'];
}
if(empty($_POST['email'])) {
  $emailErr = "Email is required";
}$email = $_POST['email'];
}
if(empty($_POST['hobby'])) {

}else{
$hobby = implode(", ", $_POST['hobby']);
}
if(empty($_POST['gender'])) {
  $genderErr = "Gender is required";
}else{
$gender = $_POST['gender'];
}

if(empty($_POST['about' ])) {
  
}else{
  $about = $_POST['about'];
  
}

?>














<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      .error{
        color: red;
        display: inline;
      }
    </style>
  </head>
  <body>
    <div class="form">
      <form action="" method="post" style="width: 100%">
        <div class="header" style="text-align = center">
          <h1 class="h01" style="text-align: center; padding-left: 250px">
            ABC University
          </h1>
          <p
            class="h01"
            style="text-align: center; padding: auto; padding-left: 250px"
          >
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia
            saepe beatae esse deserunt, consequuntur quasi rem tenetur iusto
            quas, quisquam quaerat porro voluptatum modi. Vitae blanditiis quo,
            porro natus odit voluptas animi incidunt quod neque pariatur
            excepturi? Assumenda, ab aspernatur?

          </p>
          <h4>* means the input should not be empty</h4>
          <div class="img"></div>
          <h2 style="text-align: center">Admission form</h2>
        </div>

        <div class="namePart">
          <h2 style="text-align: center">Personal Information</h2>
          <label for="">Full Name: </label>
          <input type="text" name="fullname" id="textBox" placeholder="Enter Full Name" />
          <div class="error">*<?PHP
          echo $fullnameErr;
        ?></div>
          <br /><br />
          <label for="">Nick Name:</label>
          <input
            type="text"
            name="nickname"
            id="textBox"
            style="margin-left: 45px"
            placeholder="Enter Nick Name"
          />  <div class="error">*<?PHP
          echo $nicknameErr;
        ?></div>
          <br /><br /> 
          <label for="">Father's Name:</label>
          <input
            type="text"
            name="fname"
            id="textBox"
            style="margin-left: 15px"
            placeholder="Enter Father's Name"
          />
          <div class="error">*<?PHP
          echo $fnameErr;
        ?></div>
          <br /><br />
          <label for="">Mother's Name: </label>
          <input
            type="text"
            name="mname"
            id="textBox"
            style="margin-left: 11px"
            placeholder="Enter Mother's Name"
          />
          <div class="error">*<?PHP
          echo $mnameErr;
        ?></div>
          <br /><br />
          <label for="">Address:</label>
          <input
            type="text"
            name="address"
            id="textBox"
            style="margin-left: 68px"
            placeholder="House No."
          />

          <div class="error">*<?PHP
          echo $addressErr;
        ?></div>
          <br /><br />
          <label for="">Phone no:</label>
          <input
            type="number"
            name="number"
            id="textBox"
            style="margin-left: 58px"
            placeholder="eg: 03xxxxxxxxx"
          />
          <div class="error">*<?PHP
          echo $phoneErr;
        ?></div>
          <br /><br />
          <label for="">Email:</label>
          <input
            type="email"
            name="email"
            id="textBox"
            style="margin-left: 91px"
            placeholder="eg: xyz@gmail.com"
          />
          <div class="error">*<?PHP
          echo $emailErr;
        ?></div>
          <br /><br />
          <label for="">Date of Birth: </label>
          <input type="date" name="dob" id="" style="margin-left: 37px" />
          <div class="error">*<?PHP
          echo $dobErr;
        ?></div>
          <br /><br />
          <label for="">Gender: </label>
          <input
            type="radio"
            name="gender"
            id=""
            style="margin-left: 75px"
          />Male <input type="radio" name="gender" id="" />Female
          <input type="radio" name="gender" id="" />Others 
          <div class="error">*<?PHP
          echo $genderErr;
        ?></div>
          <br /><br />
          
          <label for="">Hobbies:</label>
          <input
            type="checkbox"
            name="hobby[]"
            id=""
            style="margin-left: 70px"
            value="Singing"
          />Singing <input type="checkbox" name="hobby[]" id="" value="dancing" />Dancing
          <input type="checkbox" name="hobby[]" id="" value="drawing" />Drawing
          <input type="checkbox" name="hobby[]" id="" value="gardening" />Gardening 
          
         
          <br /><br />
          <label for="">About</label>
          <textarea name="about" id="" rows="10" cols="50" placeholder="say something about yourself"></textarea>
        </div>
     
    </div>
    <br><br>
   
      
        
        <div class="" style="display: flex;
  justify-content: center; padding= 20px;">
    
       <input type="submit" value="submit" id="submit" name="submit">
       </div>
      </form>
      <div class="output">
        <h3>Your Inputs:</h3>
        <?PHP
        echo $fullname. '<br>';
        echo $nickname .'<br>';
        echo $fname.'<br>';
        echo $mname.'<br>';
        echo $address .'<br>';
        echo $phone.'<br>';
        echo $dob.'<br>';
        echo $gender.'<br>';
        echo $email.'<br>';
        echo $hobby .'<br>';
        echo $about .'<br>';
       
        ?>
      </div>
    </div>
  </body>
</html>

