<html>
    <head>
        <title>
    
        </title>
    </head>
    <body>
 <form action=validation.php method="POST">
     <table>
     <tr>
         <td><label>Name:</label></td><td><input type="text" name="name" required</td>
         <td><label>Email:</label></td><td><input type="email" name="email" required</td>
         <td><label>Password:</label></td><td><input type="password" name="email" required</td>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
 </form>
 <img src = "download.jpg" id="lapi" onclick = "addimage()"/>
 <img src = "download (1).jpg" id="b"/>
 <script type = "text/javascript">
 function selectImage(j,lapi){
     var y;
     y.onselect = function(e){lapi.j = this.result; };
     j.addEventListener("")
 }
 </script>
 <img id="target" />
<input type="file" id="select_image" name="image" onchange="putImage()"> </input>
 <script type ="text/javascript">
 function showImage(src, target) {
    var fr = new FileReader();

    fr.onload = function (e) { target.src = this.result; };

    src.addEventListener("change", function () {

        fr.readAsDataURL(src.files[0]);
    });

}
function putImage() {
    var src = document.getElementById("select_image");
    var target = document.getElementById("target");
    showImage(src, target);
}
 </script>
 <?php
 if (!empty($_POST['name'])) {
     $name=$_POST['name'];
 }else{
     $name=NULL;
     echo '<p class="error"> You forgot to enter your name!!</p>';
 }
 #Validate the email
 if (!empty($_POST['email'])){
     $email=$_REQUEST['email'];
 }else{
     $email=NULL;
     echo '<p class ="error">You forgot to enter your email!!</p>';
 }
 #validate the password
 if (!empty($_REQUEST['password'])){
     $password = $_REQUEST['password'];
 }elseif ($password = NULL){
echo '<p class = "Error"> You have not entered your password!!</p>';
}elseif($name && $email && $password){
    echo "<p> Thank you $name we will get you soon on $email";
}else{
    echo "<p> Thank you $name we will get you soon on $email";
}
 ?>
    </body>
</html>