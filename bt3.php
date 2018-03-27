<form method="POST">
    Name:    <input type="text" name="ten" value="<?php if(isset($_POST['ten'])){echo $_POST['ten'];}?>"/>  <br/> <br/>
   E-mail:  <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"/>  <br> <br>
   Website: <input type="text" name="website" value="<?php if(isset($_POST['website'])){echo $_POST['website'];}?>"/>  <br> <br>
   Comment: <textarea rows="4" cols="40" name="comment" value="<?php if(isset($_POST['comment'])){echo $_POST['comment'];}?>"></textarea>  <br> <br>
   Gender: <input type="radio" name="comment" value="<?php if(isset($_POST['submit'])){echo $_POST['submit'];}?>"/> Female <input type="radio"/>Male   <br> <br>
    <button type="submit" value="submit"/> Submit </button>

</form>

