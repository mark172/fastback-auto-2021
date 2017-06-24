<?php include 'header.php' ?>

<?php
  if (isset($$_POST['submit'])) {
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $private_key = '6Lfesh8TAAAAADiCYnN2pfB_MOQUBmiNd42Bq-5N';
    
    $response = file_get_contents($url."?secrect=".$private_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $data = json_decode($response);
    
    if (isset($data->success) AND $data->success==true) {
      header('Location: contact/form-handler.php');
      
    } else {
      
    }
  }


?>

  <div class="offset"></div>
  <div class="light-wrapper page-title">
    <div class="container inner">
      <h1>Get In Touch</h1>
    </div>
  </div>
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="post-title">Feel Free to Drop Us a Line</h1>
          <p>Give us a ring or send us a message with your contact information and we'll talk about the cars we have in inventory.</p>
          <div class="divide20"></div>
          <div class="form-container">
            <div class="response alert alert-success"></div>
            <form class="forms" action="contact/form-handler.php" method="post">
              <fieldset>
                <ol>
                  <li class="form-row text-input-row name-field">
                    <input type="text" name="name" class="text-input defaultText required" title="Name (Required)" required />
                  </li>
                  <li class="form-row text-input-row email-field">
                    <input type="text" name="email" class="text-input defaultText required email" title="Email (Required)" required />
                  </li>
                  <li class="form-row text-input-row subject-field">
                    <input type="text" name="subject" class="text-input defaultText" title="Subject"/>
                  </li>
                  <li class="form-row text-area-row">
                    <textarea name="message" class="text-area required"></textarea>
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="nocomment">
                    <label for="nocomment">Leave This Field Empty</label>
                    <input id="nocomment" value="" name="nocomment" />
                  </li>
                  <li class="button-row">
                    <div class="g-recaptcha" data-sitekey="6Lfesh8TAAAAAF--ttXVIfjOEVwwQyWUJKfW6lT2"></div>
                    <br/>
                    <input type="submit" value="Submit" name="submit" class="btn btn-submit bm0" />
                  </li>
                </ol>
                <input type="hidden" name="v_error" id="v-error" value="Required" />
                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
              </fieldset>
            </form>
          </div>
           <!--/.form-container -->
        </div>
        <!-- /.span8 -->
        <aside class="col-sm-4 sidebar lp20">
          <div class="sidebox widget">
            <!--<h3>Address</h3>-->
            <address>
            <strong>Fastback Auto</strong><br>
            St. Charles, IL 60174<br>
            <abbr title="Phone">P:</abbr> (630) 440-9198 <br>
            <abbr title="Email">E:</abbr> <a href="mailto:info@fastback.com">info@fastbackauto.com</a>
            </address>
          </div>
          <ul class="social">
              <li><a href="https://twitter.com/FastbackAuto" target="_blank"><i class="icon-s-twitter"></i></a></li>
              <li><a href=" https://www.facebook.com/FastbackAutocom-761828930585099/" target="_blank"><i class="icon-s-facebook"></i></a></li>
              <li><a href="https://www.linkedin.com/company/fastback-auto" target="_blank"><i class="icon-s-linkedin"></i></a></li>
            </ul>
          <!-- /.widget --> 
        </aside>
        <!-- /.span4 --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
  </div>
<?php include_once("analyticstracking.php") ?>
<?php include 'footer.php' ?>