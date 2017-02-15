<SCRIPT LANGUAGE = "JavaScript">
<!--
   function cekNama(form) {
      if ((form.username.value == "")||(form.password.value == "") ) {
         alert("Username dan Passwaord harus dimasukkan");
         form.username.focus();
         form.username.select();
         form.password.focus();
         form.password.select();
         return(false);
      }
      alert("Terima kasih, " + 
            form.username.value + "password" + form.password.value);    
        
      return(true);
   }
//-->
</SCRIPT>
<h2 align="left" style="color: purple">LOGIN</h2>
<form method="post" action="validasi.php" >
  <p>
      <label>Username</label>
    : 
    <input type="text" name="username" id="username" />
  </p>
  <p>
    <label>Password :</label>
    <input type="password" name="password" id="password" />
  </p>
  
  <input type="submit" name="submit" id="submit" value="Login" onclick="cekNama(form)" />  
</form>


