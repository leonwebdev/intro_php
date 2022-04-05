<?php

include __DIR__ . '/../includes/functions.php';

$title = "Newsletter";

include __DIR__ . '/../includes/header.inc.php';

?>

  <section id="newsletter_section">
    
    <div id="newsletter_section_wrapper" class="main_wrapper">
      
      <div>
        
        <h1>Subscribe Our Newsletter</h1>
        <p id="h1_p">Fulfill the information form, and click button to receive our brief newsletter weekly!</p>
        
      </div>
      
      <form action="http://scott-media.com/test/form_display.php"
            method="post"
            id="content_form"
            autocomplete="on">
        <fieldset id="fs_1">
          <legend>Subscription Info</legend>
          <p>
            <label for="account">Name : </label>
            <input type="text"
                   name="account"
                   id="account"
                   maxlength="50"
                   title="Insert Your Name"
                   placeholder="Input your name"
                   required="required">
          </p>
          
          <p>
            <label for="email_addr">Email : </label>
            <input type="email"
                   name="email_addr"
                   id="email_addr"
                   maxlength="100"
                   title="Insert Email Address"
                   placeholder="user@website.com"
                   required="required">
          </p>

          <p>
            <label for="phone">Telephone : </label>
            <input type="tel"
                   name="phone"
                   id="phone"
                   title="Insert Telephone Number"
                   placeholder="123-123-1234"
                   required="required">
          </p>
  
          <p>
            <label for="promo_code">Promo Code : </label>
            <input type="number"
                   name="promo_code"
                   id="promo_code"
                   title="Insert Your 9-digit Promo Code"
                   placeholder="123456789"
                   required="required">
          </p>
           
          <p>
            <label for="p_word">Password : </label>
            <input type="password"
                   name="p_word"
                   id="p_word"
                   maxlength="32"
                   minlength="8"
                   title="Insert a password between 8 and 32 characters"
                   placeholder="Insert password"
                   required="required">
          </p>
          
        </fieldset>

        
        <div id="third_fieldset">
        
        <p>
           
          <input type="checkbox"
                 id="consent"
                 name="consent"
                 value="yes_consent">
          <label for="consent">Do you consent our terms and conditions?</label>
          
        </p>
          
        <p>
            <input type="submit" value="Send Form" > &nbsp; 
            <input type="reset" value="Clear Form" > &nbsp;
        </p>
        
        </div>
        
      </form>
      <div>
        
        <h1>Find <a style="text-decoration: none; color: #f00;" 
                 target="_blank" 
                 title="Click and go to Marks Page" 
                 href="http://salsa.uwdce.ca/~lyao/HTML_CSS/project/Marking/Marks.html">Marks.html</a> here.</h1>
        
      </div>
      
    </div>
    
  </section>
  <!--[if LTE IE 8]>
   <p>Throw your MacBook out of your Windows.</p>
  <![endif]--> 
  <footer>
    
    <div id="footer_wrapper" class="main_wrapper">
      
      <div id="footer_col_1" class="footer_col">
        
        <div class="footer_th"><a href="#">Account</a></div>
        
        <div class="footer_td"><a href="#">User Name</a></div>
        <div class="footer_td"><a href="#">Profile</a></div>
        <div class="footer_td"><a href="#">Email</a></div>
        <div class="footer_td"><a href="#">Password</a></div>
        <div class="footer_td"><a href="#">Address</a></div>
        <div class="footer_td"><a href="#">Telephone</a></div>
        
      </div>
      <div id="footer_col_2" class="footer_col">
        
        <div class="footer_th"><a href="#">Timeline</a></div>
        
        <div class="footer_td"><a href="#">My Items</a></div>
        <div class="footer_td"><a href="#">My Lists</a></div>
        <div class="footer_td"><a href="#">Events</a></div>
        <div class="footer_td"><a href="#">Alerts</a></div>
        <div class="footer_td"><a href="#">Reminder</a></div>
        <div class="footer_td"><a href="#">New Routine</a></div>
        
      </div>
      <div id="footer_col_3" class="footer_col">
        
        <div class="footer_th"><a href="#">Community</a></div>
        
        <div class="footer_td"><a href="#">Top Trends</a></div>
        <div class="footer_td"><a href="#">My Posts</a></div>
        <div class="footer_td"><a href="#">Likes</a></div>
        <div class="footer_td"><a href="#">Comments</a></div>
        <div class="footer_td"><a href="#">Messages</a></div>
        <div class="footer_td"><a href="#">New Posts</a></div>
        
      </div>
      <div id="footer_col_4" class="footer_col">
        
        <div class="footer_th"><a href="#">Store</a></div>
        
        <div class="footer_td"><a href="#">Orders</a></div>
        <div class="footer_td"><a href="#">Cart</a></div>
        <div class="footer_td"><a href="#">Returns</a></div>
        <div class="footer_td"><a href="#">Shipping</a></div>
        <div class="footer_td"><a href="#">Customer Service</a></div>
        <div class="footer_td"><a href="#">FAQ</a></div>
        
      </div>
      
      <div id="footer_socialmedia">
        
        <div class="footer_sm"><img src="./images/fb.svg" alt="fb" width="24" height="24"></div>
        <div class="footer_sm"><img src="./images/ig.svg" alt="ig" width="24" height="24"></div>
        <div class="footer_sm"><img src="./images/yt.svg" alt="yt" width="24" height="24"></div>
        <div class="footer_sm"><img src="./images/tw.svg" alt="tw" width="24" height="24"></div>
        
      </div>
      
      <hr class="footer">
      
      <div id="footer_bottom_section">
      
      <div class="footer_td"><a href="#">&copy; 2021-2022. Lihang Yao. MB R3B 0E3</a></div>
      
      <div id="footer_bottom_section_box">
      
      <div class="footer_td"><a href="#">Privacy Policy</a></div>
      <div class="footer_td"><a href="#">Terms &amp; conditions</a></div>
      <div class="footer_td"><a href="#">Sitemap</a></div>
      <div class="footer_td"><a href="#">Contact us</a></div>
      <div class="footer_td"><a href="#">Career</a></div>
      
      </div>
      </div>
      
      <div id="last_modified">
        <script>
          document.scripts[document.scripts.length-1].parentNode.innerHTML = "Last Modified: " + document.lastModified;
        </script>
      </div>
      
    </div>
    
  </footer>
  
</body>
</html>