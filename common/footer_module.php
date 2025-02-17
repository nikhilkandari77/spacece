<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<!--bug id  0000115 -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

<style>
.fa {
  padding: 2px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-telegram {
  background: #125688;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
@media only screen and (max-width: 600px) {
  .on-desktop {
   display:none;
  }
 .on-mobile {
   display:block;
  }
}

@media (min-width: 1025px) and (max-width: 1280px) {

  .on-desktop {
   display:block;
  }
 .on-mobile {
   display:none;
  }

}
</style>
</head>
<div class="container">
<footer class="footer-section set-bg" style="
        background-color: orange;
        border-collapse: collapse;
        border: 2px solid navy;
        opacity: 0.9;
        padding: 30px 30px;
      ">
      
    <div class="row">
        <div class="col-lg-3 footer-widget ">
            <img src="<?= isset($module_logo) ? $module_logo : './img/logo/SpacECELogo.jpg' ?>" class="img img-fluid img-thumbnail img-circle" alt="" style="width: 150px" /><a href="./index.php">
                       
                    </a>

            <div class="social">
                <a href="https://www.facebook.com/SpacECEIn"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/spacece.in/"><i class="fa fa-instagram"></i></a>
                <a href="https://t.me/joinchat/EtMJq_3BKL4zNGE1"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/spacece-co/"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3  footer-widget">
            <p style="color: black">
                Still delaying your child's health concerns ?
            </p>
            <p style="color: black">Connect with India's top doctors online</p>
        </div>
        <div class="col-lg-3  footer-widget">
            <div class="contact-widget">
                <h5 class="fw-title text-center" style="color: black">
                    CONTACT US
                </h5>
                <p style="color: black">
                    <a href="http://www.spacece.in/" style="color: black">
                        <i class="fa fa-map-marker"></i>
                        SPACE-ECE
                    </a>
                </p>
                <p style="color: black">
                    <a href="tel: +919096305648" target="_blank" rel="noopener" style="color: black">
                        <i class="fa fa-phone" style="color: black"></i>
                        +91 90963 05648
                    </a>
                    <!-- bug id 0000080-->
                            <!-- <div class="on-mobile">
                       <a href="tel:+919096305648"  target="_blank" rel="noopener" style="color: black">
                        <i class="fa fa-phone" style="color: black"></i>919096305648</a>
                      </div>
                </p> -->
                <p style="color: black">
                <!-- bug id-0000081 -->
                    <a href="mailto: events@spacece.co" target="_blank" rel="noopener" style="color: black">
                        <i class="fa fa-envelope" style="color: black"></i>
                        events@spacece.co
                    </a>
                </p>
                <p style="color: black">
                    <i class="fa fa-clock-o" style="color: black"></i>
                    Mon - Sat, 8AM - 6PM
                </p>
            </div>
        </div>

        <div class="col-lg-3  footer-widget">
            <div class="newslatter-widget">
                <h5 class="fw-title" style="color: black; text-align: center">
                    NEWSLETTER
                </h5>
                <p style="color: black">
                    Subscribe your email to get the latest news and new offer also
                    discount
                </p>
                <form class="footer-newslatter-form" id="sub" name="sub" method="POST" >
                    <input type="email" name="email" id="email" placeholder="Email address" required />
                   
                    <button type="submit" style="cursor: pointer" >
                        <i class="fa fa-send"></i> 
                     </button>
                </form>
            </div>
        </div>
    </div>

</div>
</footer>
<p class="font_10" style="line-height: 1.8em; text-align: center; font-size: 20px">
    <span style="font-size: 20px"><span class="color_15">&copy;2021 by spaceECE INDIA FOUNDATION</span></span>
</p>



<?= isset($extra_scripts) ? $extra_scripts : null ?>

</body>
<script>
  $(document).ready(function(){
    $('#sub').on('submit',function(e){
      e.preventDefault();
      var email=$('#email').val();
     // alert(email);
     
     $.ajax({
       method:"POST",
      data:{
         subscribe:1,
         email:email
       },
       url:"./common/function.php",
       success:function(data){
        // alert(data);
        if(data==='Error'){
          swal("Error!", "You have already subscribed to this site!", "error");
        }

if(data==='Success'){
  swal("Good job!", "You have subscribed !", "success");

} 
if(data==='Invalid'){
          swal("Error!", "Please Emter a Valid Email!", "error");
        }


       }
     })
    })
  })
  </script>
</html>