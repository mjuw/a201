<!DOCTYPE html>
<html lang="en">
<!--Tyler Waite's HTML 5 assignment 4-18-2016-->  
<head>
  <meta charset="utf-8" />
  <title>Massage by Tyler - Tutorial - Agile Development</title>
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  
  <style>
    body{
      background: #F1F0D1;
      font-family: Verdana, Tahoma, Arial, sans-serif;
      font-size: 18px;
      overflow: auto;
    }
    h1, h2, h3 {
      text-align: center;
      padding-left: 5%;
      color: #878e63;
    }
    
    p {
      padding: 2%;
      color: #878e63;
    }
  
    img {
      text-align: center;
      max-width: 100%;
      height: auto;
      width: auto;
    }
    
    #wrapper {
      margin: 0 auto;
      max-width: 1020px;
      width: 98%;
      background: #FEFBE8;
      border: 1px solid #878e63;
      border-radius: 2px;
      box-shadow: 0 0 10px 0px rgba(12, 3, 25, 0.8);
    }
    
    #callout {
      width: 100%;
      height: auto;
      background: #878e63;
      overflow: hidden;
      overflow: hidden;
    }
    
    #callout p {
      text-align: right;
      font-size: 13px;
      padding: 0.1% 5% 0 0;
      color: #F1F0D1;
      font-family: Verdana, Tahoma, Arial, sans-serif;
    }
    
    #callout p a {
      color: #f1f0d1;
      text-decoration: none;
    }
    
    header {
      width: 96%;
      min-height: 125px;
      padding: 5px;
      text-align: center;
    }
    
    nav ul {
      list-style: none;
      margin: 0;
      padding-left: 50px;
    }
    
    nav ul li {
      float: left;
      border: 1px solid #878e63;
      width: 15%;
    }
    
    nav ul li a {
      background: #f1f0d1;
      display: block;
      padding: 5% 12%;
      font-weight: bold;
      font-size: 18px;
      color:#878e63;
      text-decoration: none;
      text-align: center;
    }
    
    nav ul li a:hover, nav ul li.active a {
      background-color: #878e63;
      color: #F1F0D1;
    }
    
    .banner img {
      width: 100%;
      border-top: 1px solid #878e63;
      border-bottom: 1px solid #878e63;
    }
    
    .clearfix {
      clear: both;
    }
    
    .left-col {
      width: 55%;
      float: left;
      margin: -2% 1% 1% 1%;
    }
    
    .sidebar {
      width: 40%;
      float: right;
      margin: 1%;
      text-align: center;
    
    }
    
    .therapy {
      float: left;
      margin: 0 auto;
      width: 100%;
      height: auto;
      padding: 1%;
    
    }
    
    .section {
      width: 29%;
      float: left;
      margin: 2% 2%;
      text-align: center;
    }
    
    footer {
      background: #878e63;
      width: 100%;
      overflow: hidden;
    
    } 
    
    footer p, footer h3 {
      color: #f1f0d1;
    
    }
    
    footer p a {
      color: #f1f0d1;
      text-decoration: none;
    }
    
    ul {
      list-style:none;
      margin: 0;
      padding: 0;
    }
    
    li {
      display: inline;
      
    }
    
    ul li img {
      height: 50px;
    }
    
    /*-----------Media!!---------------*/
    @media screen and (max-width: 478px) {
      body {
        font-size: 13px;
      }
    }
    @media screen and (max-width: 740px) {
      nav {
        width: 100%;
        margin-bottom: 10px;
      }
      
      nav ul{
        list-style: none;
        margin: 0;
        padding-left: 0;
        
      }
      
      nav ul li {
        text-align: center;
        margin-left: 0 auto;
        width: 100%;
        border-top: 1px solid #878e63;
        border-right: 0px solid #878e63;
        border-bottom: 1px solid #878e63;
        border-left: 0px solid #878e63;
      }
      nav ul li a {
        padding: 8px 0;
        font-size: 16px;
      }
      .left-col {
        width: 100%
      }
      .sidebar {
        width: 100%
      }
      .section{
        float: left;
        width: 100%;
        margin: 0;
        
      }
    }
  </style>
  
  </head>  
  <body>
    <div id="wrapper">
      <div id="callout">
        <p>Call us at <b>215-555-5555</b></p>
      </div>
      <header>
        <a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/massagelogo.png" alt="Massage by Tia" title="Massage by Tia"/></a>
      </header>
      <nav>
        <ul>
          <li class='active'><a href="#">Home</a></li>
          <li class=''><a href="#">Facility</a></li>
          <li class=''><a href="#">Services</a></li>
          <li class=''><a href="#">Pricing</a></li>
          <li class=''><a href="#">Hours</a></li>
          <li class=''><a href="#">Contact</a></li>
        </ul>
        <div class="clearfix"></div>
      </nav>
      <div class="banner">
        <img src="http://www.w3newbie.com/wp-content/uploads/massagebanner.png" alt="Massage by Tia, banner" title="Massage by Tia"/>
      </div>
      
      <center><img src="http://www.w3newbie.com/wp-content/uploads/three_sayings.png" alt="Massage by Tia, banner" title="Massage by Tia"/></center>
      
      <section class="left-col">
        <p style="text-indent: 50px;">The time somewhere is {{ sometime }}. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis mauris iaculis, tincidunt mi id, ultrices erat. Nam ullamcorper, velit sed ultrices dapibus, leo eros accumsan metus, at pellentesque purus lectus sed nisi. Fusce turpis libero, efficitur id quam nec, blandit porttitor nibh. Phasellus quis dolor vehicula, interdum elit nec, efficitur sapien. Donec nec pulvinar odio, quis hendrerit ante. Donec porta dignissim sem, non tincidunt nibh tincidunt a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras eget dolor arcu. Phasellus vitae vulputate erat, vitae aliquam eros.</p>
        
        <p style="text-indent: 50px;">Nulla nec ligula nulla. Maecenas dapibus, tellus id posuere vehicula, diam enim maximus justo, nec accumsan velit turpis at purus. Nullam vehicula orci a rutrum malesuada. Pellentesque euismod turpis sed nulla efficitur ultrices. Cras non imperdiet justo. Maecenas scelerisque nec tortor sed viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ut condimentum magna, quis consequat sapien. Morbi et lectus posuere eros lobortis aliquet. Phasellus tempus velit eu ligula sollicitudin, vitae consequat elit luctus</p>
        
      </section>
      <aside class="sidebar">
        <div class="therapy">
          <img src="http://www.w3newbie.com/wp-content/uploads/therapist.jpg" alt="therapist graphic" title="therapy"/>
        </div>
      </aside>
     <div class="clearfix"></div> 
        <div class="section">
          <h3>Private Massage Area</h3>
          <img src="http://www.w3newbie.com/wp-content/uploads/private.png" alt="private massage graphic" title="therapy"/>
        <p>Morbi ullamcorper purus arcu, et hendrerit leo condimentum vel. Ut id ultrices nisl, quis bibendum purus. Maecenas vel leo nec metus consequat vehicula non nec nibh. Ut dignissim nibh eu tellus tristique pulvinar vel at nisl. Duis id rutrum est. Suspendisse risus neque, euismod maximus tempus et, viverra ultricies justo. Sed in mollis ligula. Phasellus aliquet magna sed mollis molestie. Etiam eget porta velit. Nulla eros nulla, convallis sed maximus in, sagittis non arcu. Nam eu condimentum massa, sed cursus felis. Morbi interdum porta odio eu accumsan. Mauris lobortis risus ac ante luctus, sed rutrum velit ultrices. Sed imperdiet tortor ut magna interdum mattis.</p>
        </div>
        
        <div class="section">
          <h3>Sauna and Steam Room</h3>
          <img src="http://www.w3newbie.com/wp-content/uploads/sauna-steam.png" alt="sauna graphic" title="therapy"/>
          <p>Maecenas pretium malesuada nisi eget porttitor. Pellentesque urna ipsum, commodo vel felis at, hendrerit mollis erat. Nunc consequat lobortis risus id dapibus. Curabitur ullamcorper a orci eu ultrices. Vestibulum faucibus venenatis semper. Nulla facilisi. Aenean dignissim magna nec felis sodales ullamcorper. Sed eget nibh condimentum felis placerat blandit vel in nulla. Suspendisse potenti.</p>

<p>Curabitur blandit ante felis, eu placerat augue malesuada ut. Donec tincidunt vel sem non venenatis. Aliquam leo lacus, scelerisque vel tortor at, accumsan sagittis augue. Sed gravida ante vitae sem ornare ultrices. In fermentum nulla eu quam pulvinar feugiat sodales sed risus. Nunc et scelerisque lorem, vel eleifend dui. Sed vitae condimentum est, ac auctor velit</p>
        </div>
        
        <div class="section">
          <h3>Our Resort Retreat</h3>
          <img src="http://www.w3newbie.com/wp-content/uploads/retreat.png" alt="retreat graphic" title="therapy"/>
                    <p>Aliquam bibendum arcu vel purus lobortis, a suscipit ipsum rhoncus. Nullam eget risus lobortis, egestas nunc facilisis, convallis felis. Mauris nisi augue, elementum vel pretium et, eleifend sit amet eros. Cras tortor sapien, fringilla sit amet risus sed, imperdiet porta velit. Suspendisse tellus nulla, blandit in velit sed, eleifend ullamcorper nibh. Quisque gravida sapien in ornare ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer aliquet gravida nunc, in facilisis leo faucibus at. Vivamus massa erat, viverra id augue nec, vestibulum varius dolor. Sed ac enim vitae dui accumsan suscipit non eu leo. In sollicitudin, risus eget auctor varius, est libero scelerisque magna, quis rutrum dolor massa eget neque. Vivamus blandit, magna vitae vehicula ornare, augue quam varius ligula, et porta risus augue nec arcu. Suspendisse augue risus, laoreet id ultrices non, dignissim non nibh. Morbi suscipit faucibus lacus ut tempor. Donec at ex eu justo semper semper vitae eu eros. Sed at neque in quam cursus sollicitudin eget a dui.</p>

        </div>
        
        <center><img src="http://www.w3newbie.com/wp-content/uploads/ease.png" /></center>
      
        <footer>
          <div class="section">
            <p>Massage by Tia</p>
            <p><b>215-555-5555</b><br>
            1700 Chestnut Street<br>
            Philadelphia, PA 19100<br>
            tia@massage.com
            </p>
          
          </div>
          
          <div class="section">
            <ul>
              <li>
                <a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/facebook1.png" /></a>   </li>
                <li> <a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/googleplus.png" /></a>   </li>
               <li>  <a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/twitter1.png" /></a>   </li>
               <li>  <a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/youtube1.png" /></a>  
              </li>
            
            </ul>
          
          </div>
          
          <div class="section">
          <p>Connect With Us!</p>
          <a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/plant.png" /></a>  
          </div>
        </footer>
    </div>
    <p style="text-align: center; padding: 0px;">&#169; Copyright - Massage by Tia</p>
    
    
    
    
    
  </body>
</html>
