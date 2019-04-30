<?php
$title ="Contacts";

require("templates/header.php");
 ?>

		<main>

      Contact us <br/><br/>
      <form>
    		  <label for = "name"> Name </label>
    		  <input type="text" id="name"> <br> <br>

    		  <label for = "email"> Email </label>
    		  <input type="text" id="email"><br> <br>


    		  <label for = "subject"> Subject </label>
    		  <input type="textarea" id="subject" size="35"><br> <br>


    		  <button type="submit" id="submit" >Submit </button>


	    </form>


		</main>


<?php
require("templates/footer.php")
 ?>
