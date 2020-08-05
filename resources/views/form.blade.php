<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Login SanberBook</title>
  </head>
  <body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
   
    <form action="/welcome">
      <label for="fname">First name:</label><br><br>
      <input type="text" id="fname" name="fname" value=""><br><br>
      <label for="lname">Last name:</label><br><br>
      <input type="text" id="lname" name="lname" value=""><br><br>
      
      <label for="gender">Gender:</label><br><br>
      <input type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label><br>
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label><br><br>
      
      <label for="nationality">Nationailty:</label><br><br>
      <select name="nationality">
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean </option>
        <option value="malaysian">Malaysian</option>
        <option value="australian">Australian</option>
      </select><br><br>
      
      <label for="lspoken">Language Spoken:</label><br><br>
      <input type="radio" id="bindonesia" name="lspoken" value="bindonesia">
      <label for="bindonesia">Bahasa Indonesia </label><br>
      <input type="radio" id="english" name="lspoken" value="english">
      <label for="english">English</label><br>
      <input type="radio" id="other" name="lspoken" value="other">
      <label for="other">Other</label><br><br>
      
      <label for="bio">Bio:</label><br><br>
      <textarea id="bio" name="bio" rows="14" cols="40">
      </textarea><br><br>
      
      <input type="submit" value="Sign Up">
    </form>
  </body>
</html>


















