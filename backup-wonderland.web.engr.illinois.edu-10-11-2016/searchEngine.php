<div style="float: left; margin-right:20px;">
  
    <!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <form method="post" name="commentForm" id="commentForm" action="addForm.php">

      <div style="float: left; margin-right:20px;">

      <div>
      Title:<br><input type="text" name="postTitle" size="41" value="">
      <br><br>
      </div>

      <div>
      startDate:<br><input type="date" name="startDate" rows="20" cols="30">
      <br><br>
      </div>

      <div>
      endDate:<br><input type="date" name="endDate" rows="20" cols="30">
      <br><br>
      </div>

      <div>
      pricePerMonth(between 50 and 5000):<br><input type="number" name="pricePerMonth" min="50" max="5000">
      <br><br>
      </div>

      <div>
      noOfBedrooms(between 1 and 8):<br><input type="number" name="noOfBedrooms" min="1" max="8">
      <br><br>
      </div>

      <div>
      address:<br><input type="text" name="address" size="41" value="">
      <br><br>
      </div>

      <div>
      provider:(CPM, University Group, JSM or Personal)<br><input type="text" name="provider" size="41" value="">
      <br><br>
      </div>

      </div>

      <div style="float: left;">
      Content:<br><textarea name="postContent" rows="30" cols="50"></textarea>
      </div>
      <br><br>


      <input type="submit" name="submit" value="Submit"> 
    </form>
    <div id="commentFormReturn"></div>
  </div>