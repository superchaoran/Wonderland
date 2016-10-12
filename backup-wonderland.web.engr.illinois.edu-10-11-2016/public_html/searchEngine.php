<div style="float: left; margin-right:20px;">
  
    <!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <form method="post" name="commentForm" id="commentForm" action="addForm.php">

      <div style="float: left; margin-right:20px;">
      <input type="text" placeholder="search" name="searchString" size="20" value="">
      <input id="searchbtn" type="submit" value="search">
      startDate:<input type="date" name="startDate" rows="20" cols="15">
      endDate:<input type="date" name="endDate" rows="20" cols="15">
      rent:<input type="text" name="minPrice" size="10" placeholder="min">
      <input type="text" name="maxPrice" size="10" placeholder="max">

      <select name="noOfBedrooms">
      <option value="1" selected="selected">1+ BR</option>
      <option value="2">2+ BR</option>
      <option value="3">3+ BR</option>
      <option value="4">4+ BR</option>
      <option value="5">5+ BR</option>
      <option value="6">6+ BR</option>
      <option value="7">7+ BR</option>
      <option value="8">8+ BR</option>
      </select>

    </form>

    <div id="commentFormReturn"></div>

  </div>