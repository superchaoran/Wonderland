    <div style="width:980px;margin-left:2px;margin-bottom:20px;margin-top:270px;position:absolute;height:200px;">
  
    <!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <div style="margin-left:auto;margin-right:auto;">
      <form method="post" name="commentForm" id="commentForm" action="/search/searchBackend.php" style="font-size:15px;">

        <input type="text" class="txtfield" style="font-size:24px;width:300px;height:50px;float:left;" name="searchString" size="30" placeholder="address, provider"
        <?php echo "value=\"".$searchString."\">";?>
        <input type="text" class="txtfield" name="minPrice" style="font-size:24px;width:120px;height:50px;float:left;margin-left:10px;" size="10" placeholder="min rent"
        <?php echo "value=\"".$minPrice."\">";?>
        <input type="text" class="txtfield" name="maxPrice" style="font-size:24px;width:120px;height:50px;float:left;margin-left:10px;" size="10" placeholder="max rent"
        <?php echo "value=\"".$maxPrice."\">";?>
        <select class="txtfield" style="font-size:24px;height:31px;width:120px;height:50px;float:left;margin-left:10px;" name="noOfBedrooms" >
        <option value="any"  >Any</option>
        <option value="1" <?php if($noOfBedrooms==="1") echo "selected";?>>1BR</option>
        <option value="2" <?php if($noOfBedrooms==="2") echo "selected";?>>2BR</option>
        <option value="3" <?php if($noOfBedrooms==="3") echo "selected";?>>3BR</option>
        <option value="4" <?php if($noOfBedrooms==="4") echo "selected";?>>4BR</option>
        <option value="5" <?php if($noOfBedrooms==="5") echo "selected";?>>5BR</option>
        <option value="6" <?php if($noOfBedrooms==="6") echo "selected";?>>6BR+</option>
        </select>
        <input class="txtfield" style="font-size:24px;width:270px;height:50px;float:left;margin-left:10px;"id="searchbtn" type="submit" value="search">
      </form>
    </div>
  </div>