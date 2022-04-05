<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Timeline</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./styles/desktop.css" media="all and (min-width:768px)">
  <link rel="stylesheet" type="text/css" href="./styles/mobile.css" media="all and (max-width:767px)">
  <link rel="stylesheet" type="text/css" media="print" href="./styles/print.css">
  <link rel="icon" href="./images/favicon.png" type="image/png"/>
  <link rel="apple-touch-icon" sizes="196x196" href="./images/favicon-196.png" />
  <link rel="apple-touch-icon" sizes="192x192" href="./images/favicon-192.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon-180.png" />
  <link rel="apple-touch-icon" sizes="128x128" href="./images/favicon-128.png" />  

  <style>
    
    #timeline_section_container{
      margin: 0 auto;
      max-width: 760px;
      padding-bottom: 70px;
    }
    
    .timeline_img_wrapper{
      float: left;
    }
    
    h1{
      font-size: 3.5em;
      padding-top: 70px;
      padding-bottom: 90px;
      padding-left: 30px;
      margin-left: 250px;
    }
    
    table{
      width: 700px;
      border-collapse: collapse;
      clear: both;
    }

    th, td{
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #bbb;
      font-size: 2em;
      padding-top: 30px;
      padding-bottom: 30px;
    }

    tr:nth-child(odd) th,tr:nth-child(odd) td{
      background-color: #eee;
    }

    th{
      padding-left: 50px;
      border-left: 5px solid #95CD40;
    }

    tr:nth-child(2) th{
      border-left: 5px solid #DF4E46;
    }
  
    @media screen and (max-width:767px){
      th, td{
        font-size: 20px;
      }
      
      table{
        margin-left: 60px;
        width: 410px;
      }
      
      #timeline_section_container h1{
        padding-right: 0;
        font-size: 2em;
        margin: 0;
        margin-left: 30px;
      }
    }
    
  </style>

</head>
<!--  
  /////////////////////////////////////////////////////////////
  //                                                         //
  //                                                         //
  //          ██╗  ██╗████████╗███╗   ███╗██╗                //
  //          ██║  ██║╚══██╔══╝████╗ ████║██║                //
  //          ███████║   ██║   ██╔████╔██║██║                //
  //          ██╔══██║   ██║   ██║╚██╔╝██║██║                //
  //          ██║  ██║   ██║   ██║ ╚═╝ ██║███████╗           //
  //          ╚═╝  ╚═╝   ╚═╝   ╚═╝     ╚═╝╚══════╝           //
  //                                                         //
  //                                                         //
  //                      LIHANG YAO                         //
  //                                                         //
  //              WDD CAPSTONE FINAL PROJECT                 //
  //                                                         //
  //               INSTRUCTOR : BRENT SCOTT                  //
  //                                                         //
  //                                                         //
  /////////////////////////////////////////////////////////////
  
 -->
<body>
  
  <header>
    
    <div id="header_wrapper" class="main_wrapper">
      <a target="_blank" href="./index.html" title="Gardener Home">
      <img src="./images/logo.svg" alt="logo" width="315" height="70">
      </a>
      <nav>
        
        <ul id="navlist">
          <li><a target="_blank" href="./index.html" title="Gardener Home">Home</a></li>
          <li><a target="_blank" href="./mine.html" title="Gardener Mine tells you items you owns">Mine</a></li>
          <li><a target="_blank" href="./timeline.html" title="Gardener Timeline shows your tracking of your plants">Timeline</a></li>
          <li><a target="_blank" href="./community.html" title="Gardener Community shows what other people is doing">Community</a></li>
          <li><a target="_blank" href="./newsletter.html" title="Click and subscribe our newsletter weekly">Newsletter</a></li>
        </ul>
        
      </nav>
      
      <div id="hamburger_icon">
        <div class="hamburger_icon_element"></div>
        <div class="hamburger_icon_element"></div>
        <div class="hamburger_icon_element"></div>
      </div>
      
      <div id="search_bar">
        
        <span>Search here</span>
        
        <svg class="magnifier" width="24" height="24">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M13.98 15.395a6.294 6.294 0 111.414-1.414l4.602 4.601-1.414 1.414-4.602-4.601zm.607-5.101a4.294 4.294 0 11-8.587 0 4.294 4.294 0 018.587 0z" fill="#111"></path>
        </svg>
        
      </div>

      <div id="account_login">
        
        <svg class="account_icon" width="24" height="24" viewBox="0 0 24 24" fill="#333">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6724 6.4678c.2734-.2812.6804-.4707 1.3493-.4707.3971 0 .705.0838.9529.2225.241.1348.4379.3311.5934.6193l.0033.006c.1394.2541.237.6185.237 1.1403 0 .7856-.2046 1.2451-.4796 1.5278l-.0048.005c-.2759.2876-.679.4764-1.334.4764-.3857 0-.6962-.082-.956-.2241-.2388-.1344-.4342-.3293-.5888-.6147-.1454-.275-.2419-.652-.2419-1.1704 0-.7902.2035-1.2442.4692-1.5174zm1.3493-2.4717c-1.0834 0-2.054.3262-2.7838 1.0766-.7376.7583-1.0358 1.781-1.0358 2.9125 0 .7656.1431 1.483.4773 2.112l.0031.0058c.3249.602.785 1.084 1.3777 1.4154l.0062.0035c.5874.323 1.2368.4736 1.9235.4736 1.0818 0 2.0484-.3333 2.7755-1.0896.7406-.7627 1.044-1.786 1.044-2.9207 0-.7629-.1421-1.4784-.482-2.0996-.3247-.6006-.7844-1.0815-1.376-1.4125-.5858-.3276-1.2388-.477-1.9297-.477zM6.4691 16.8582c.2983-.5803.7228-1.0273 1.29-1.3572.5582-.3191 1.2834-.5049 2.2209-.5049h4.04c.9375 0 1.6626.1858 2.2209.5049.5672.3299.9917.7769 1.29 1.3572.3031.5896.4691 1.2936.4691 2.1379v1h2v-1c0-1.1122-.2205-2.1384-.6904-3.0523a5.3218 5.3218 0 0 0-2.0722-2.1769c-.9279-.5315-2.0157-.7708-3.2174-.7708H9.98c-1.1145 0-2.2483.212-3.2225.7737-.8982.5215-1.5928 1.2515-2.0671 2.174C4.2205 16.8577 4 17.8839 4 18.9961v1h2v-1c0-.8443.166-1.5483.4691-2.1379z"></path>
        </svg>
        
        <span>Hi, Leon!</span>
        
      </div>
      
    </div>
  
  </header>
  
  <section id="timeline_section">
    
    <div id="timeline_section_wrapper" class="main_wrapper">
      
      <div id="timeline_section_container">
      <div>
       
        <div class="timeline_img_wrapper">
          <img src="./images/rose.jpg" alt="mine_rose" width="200" height="200">
        </div>
        
        <h1>Roses Timeline</h1>
        
      </div>
      
      <table>
        
        <tr class="serial_event">
          
          <th class="date_event">Oct. 3</th>
          <td class="name_event">Watering</td>
          <td class="content_event">500ml</td>
          
        </tr>
        
        <tr class="serial_event">
          
          <th class="date_event">Nov. 17</th>
          <td class="name_event">Fertilizing</td>
          <td class="content_event">5g</td>
          
        </tr>
        
        <tr class="serial_event">
          
          <th class="date_event">Nov. 23</th>
          <td class="name_event">Watering</td>
          <td class="content_event">300ml</td>
          
        </tr>
        
        <tr class="serial_event">
          
          <th class="date_event">Nov. 27</th>
          <td class="name_event">Watering</td>
          <td class="content_event">450ml</td>
          
        </tr>
        
        <tr class="serial_event">
          
          <th class="date_event">Dec. 2</th>
          <td class="name_event">Watering</td>
          <td class="content_event">350ml</td>
          
        </tr>
        
      </table>
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
