<!doctype html>
<html>
<! IS Project #1 Page HTML
   Michael Grinaway -->

<body>
    <h1> <center>Create Log in Access for IS218</center></h1>
        <form action="email.php" method = "post">
            <center><label>Email: <input type="text" name="email"></label>

                <center><label>Password:<input type="Password" name="Password"></label></center>
                <input type="submit" value="Submit">
        </form>

    <! Registration Form -->
    <h1> <center> Create Registration</h1>
    <form action="reg.php" method = "post">
             <label> First Name: <input type="text" name="first"> </label>
              Last Name : <input type="text" name="Last">
              Birthday  : <input type="text" name="Birthday">
              Email     : <input type="text" name="Email">
              Password  : <input type="Password" name="Password">
            <input type="submit" value="Submit">
    </form>

    <! Question Form displays the field and pulls information page from php-->

    <h1><center>  Question </center></h1>
        <form action=" Questions.php" method="post">
               Question:   <textarea name="question" rows="5" cols="40"></textarea>
            Question Body:  <textarea name="body" rows="5" cols="40"></textarea>
            <input type="submit" value="Submit">
        </form>



</body>







</html>
