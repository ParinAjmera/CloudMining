</div>

 <!-- Footer -->
 
      <footer class="row">
        <div class="large-12 columns"><hr />
          <div class="row">
 
            <div class="large-6 columns">
              <p>&copy; Copyright Retail Store Automation</p>
            </div>
 
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                
                
              </ul>
            </div>
 
          </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
   

</div>
</div>

    <div id="facebook" class="reveal-modal" >
	<center><h3>Our Facebook Page</h3>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Daily-Vendor/513798352049541?skip_nax_wizard=true" data-width="450" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
	</center>
	<a class="close-reveal-modal">&#215;</a>
	</div>
	<div id="twitter" class="reveal-modal" >
	<center><h3>Our Twitter Page</h3>
	<a class="twitter-timeline" href="https://twitter.com/hearsh007" data-widget-id="390720185117573121">Tweets by @hearsh007</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	
</center>
	<a class="close-reveal-modal">&#215;</a>
	</div>

   <div id="checkout" class="reveal-modal" > 
     <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST" >
 <fieldset>
 <legend>Payment Gateway</legend>
 <div class="row">
 <div class="large-12 columns">
 <label>Credit Card Number</label><input type="text" name="card" maxlength="50">
 </div>
</div>
 <div class="row">
 <div class="large-6 columns">
 <label>Expiry Date(Valid Thru)</label><input type="text" name="expir" maxlength="50" placeholder="MM-YY">
 </div>
 <div class="large-4 columns">
 <label>CW</label><input type="text" name="cw" maxlength="30">
 </div>
  <div class="large-2 columns">
  <br/><img src="img/cd.png">
 </div>
 </div>
  <div class="row">
 <div class="large-12 columns">
 <label>Name On Card</label><input type="text" name="name" maxlength="50">
 </div>
</div>
 <div class="row">
 <div class="large-12 columns">
<input type="submit" name="cout" class="button" value="Pay &raquo;" data-reveal-id="secondModal" />
 </div>
</div>

 </fieldset>
 
  

  <a class="close-reveal-modal">&#215;</a>
</div>
 <div id="secondModal" class="reveal-modal">
   <h3>Confirm Payment</h3>
   <input type="submit" name="cout" class="secondary button" value="Confirm &raquo;"/>
	<a class="close-reveal-modal">&#215;</a>
	</form>
  </div>

<div id="edit" class="reveal-modal">
<form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
 <fieldset>
 <legend>Delete</legend>
 <div class="row">
<div class="large-12 columns">
 <label>Enter the product ID of the item you would like to delete</label><input type="text" name="delete" maxlength="30">
</div>
</div>
<div class="row">
<div class="large-12 columns">
<input type="submit" name="del" class="button" value="Delete from Cart &raquo;" />
</div>
</div>
 </fieldset>
 </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
 <div class="reveal-modal" id="mapModal">
    <h4>Where We Are</h4>
    <p><img src="img/mp.png" /></p>
 
    <!-- Any anchor with this class will close the modal. This also inherits certain styles, which can be overriden. -->
    <a href="#" class="close-reveal-modal">&times;</a>
  </div>
<?php
mysqli_close($con);
?>
 <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
    
  <script src="js/foundation.min.js"></script>
    <script>
    $(document).foundation();
  </script>
</body>
</html>