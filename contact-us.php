<?php
include('header.php');
?>

<section class="property-management-banner contact-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h3>Need some answers?<span class="font-family-1 gradient-1 gradient-text1">Get in touch.</span> </h3>

            </div>
        </div>
    </div>
</section>


<!--live chat-->

<section class="live-chat">
    <div class="container">
      <div class="row">
          <div class="col-md-7 contact-main">
              <div class="contact-main-inner">
                  <div class="col-md-12 live-chat-right">
                      <div class="">
                          <h4>Live chat</h4>
                          <p>Chat to a real expert with market knowledge. Available from 9am - 5.30pm between Monday and Saturday.</p>
                          <a href="#">Start chat</a>
                      </div>
                  </div>
                  <div class="col-md-12 live-chat-right">
                      <div class="">
                          <h4>Call us</h4>
                          <p>Speak to one of our customer service experts.
                              Please note we are unable to offer you any advice on financial products.</p>
                          <p><b> <i class="fa fa-phone"></i>0333 344 7071</b></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-5">
              <aside class="contact_sidebar " >
                  <h4>Write to us</h4>
                  <hr class="rdLine">
                  <p>
                      Write to us and we’ll get back to you within one working day.
                  </p>
                  <div class="before-submit">
                      <form id="contact-form" class="go-bottom">
                          <div class="form-group">
                              <!-- field 1 dropdown -->
                              <div class="select-wrap">
                                  <select class="form-control " name="realtor_type" id="realtor_type">
                                      <option value=""> I am a...</option>
                                      <option value="Using this site to search">Landlord</option>
                                      <option value="Using this site for non-real estate">Tenant</option>

                                  </select>
                              </div>

                          </div>


                          <!-- field 3 input -->
                          <div class="form-group">
                              <input type="email" class="form-control" id="" placeholder="Email">
                          </div>
                          <!-- field 4 input -->
                          <div class="form-group">
                              <input class="form-control" id="" name="subject" placeholder="subject" type="text">

                          </div>
                          <!-- field 5 text area -->
                          <div class="form-group">
                              <textarea class="form-control" id="" placeholder="Message" rows="3"></textarea>
                          </div>
                          <!-- field 6 button -->
                          <button class="btn">Submit</button>
                      </form>
                  </div>
                  <div class="after-submit" style="display:none">
                      Thank you for your submission and interest in Move®. Your inquiry has been forwarded to one of our marketing professionals and they will be contacting you within 48 hours.<br><br>Sincerely,<br>The Move Team
                  </div>

              </aside>
          </div>
      </div>
    </div>
</section>


<?php
include('footer.php');
?>
