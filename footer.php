

<footer>
  <div class="web-whatapp">
    <a onclick= whatapp(<?= $url['whatsapp']; ?>) target="_blank"><img src="./assets/images/whatapp-logo.png" alt=""></a>
    <script>
      function detectmob() {
        return navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ? true : false
      }
      function whatapp(mobile){
        let url = detectmob() === true ? "https://api.whatsapp.com/send" : "https://web.whatsapp.com/send";
        let w_m = url + "?phone=+91" + mobile + "&text=*Hi, Sir!*";
        window.open(w_m, "_blank").focus();
      }
    </script>
  </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Interior Website</h4>
            <p>An interior design company is a creative and innovative team of professionals dedicated to transforming spaces into captivating environments.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="<?= $url['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?= $url['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?= $url['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Our Services</h4>
            <ul class="menu-list">
              <li><a href="living-room.php">Living Room</a></li>
              <li><a href="bedroom.php">Bedroom</a></li>
              <li><a href="balcony.php">Balcony</a></li>
              <li><a href="kitchen.php">Kitchen</a></li>
              <li><a href="theater.php">Theater</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="about.php">About Us</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="controllers/AppController.php?action=send_request" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id=""  placeholder="Phone no: " required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
              Copyright © 2024 DineshRanaEnterprises
              - Designed by: <a href="#">Development Team</a>
          </p>
          </div>
        </div>
      </div>
    </div>
