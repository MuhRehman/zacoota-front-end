<?php
include('header.php');
?>

<!--tenant inquiries-->
<section class="tenant-inquiries">
    <div class="container">
        <div class="tenant-inquiries-inner">
            <div class="title">
                <h3>Tenant Enquiries</h3>
            </div>
            <div class="property-details">
                <h6>Your Property Summery</h6>
                <div class="flex">
                    <div class="property-image">
                        <img src="assets/images/savings-card.jpg" class="img-fluid" alt="sam">
                    </div>
                    <div class="property-text">
                        <p>2 Bed Detached House</p>
                        <p>117 Huxley Road, London</p>
                        <div class="flex property-details-btn">
                          <div>
                              <a href="#">
                                  View My Listing
                              </a>
                          </div>
<!--                            if property is expired  then show (Publish My Listing) in this button-->
                           <div>
                               <a href="#">
                                   Published
                               </a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 order-two">
                    <div class="instarent-div">
                        <div class="icon">
                            <img src="assets/images/shield.png" class="img-fluid">
                        </div>
                        <div class="close">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <h5>Check or install detectors</h5>
                        <p> Have smoke and carbon monoxide detectors? Great! It is the landlords legal obligation to check that they are in working order. For more information on The Smoke and Carbon Monoxide Alarm (England) Regulations 2015 please click the button below. </p>

                        <a target="_blank" href="https://www.gov.uk/government/publications/smoke-and-carbon-monoxide-alarms-explanatory-booklet-for-landlords/the-smoke-and-carbon-monoxide-alarm-england-regulations-2015-qa-booklet-for-the-private-rented-sector-landlords-and-tenants#responsibilities">Learn more</a>
                    </div>

<!--                    if service is free and have Enquiries-->

                    <div class="service-upgrade">
                        <h6>Would You Like More People To See Your Ad? </h6>
                        <a href="upgrade.php">Upgrade your Ad, list on Rightmove, Zoopla + many more portals</a>

                    </div>
                 <div class="inquiries">

                     <h6>Your Enquiries</h6>
                        <div class="inquiries-filters">
                            <div class="dropdown ">
                                <a class="btn dropdown-toggle" href="#" role="button" id="filters" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-filter" aria-hidden="true"></i>   Filters
                                </a>

                                <div class="dropdown-menu" aria-labelledby="filters">
                                    <a class="dropdown-item" href="#"><i class="fa fa-check" aria-hidden="true"></i> All</a>
                                    <a class="dropdown-item" href="#"><i class="filter-icon fa fa-share-square" aria-hidden="true"></i> Unread</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favorite</a>
                                </div>
                            </div>
                        </div>

                     <div class="tenant-inquiries-messages">
                         <!--                            if no message-->
                         <div class="no-enquiries">
                             <p>You have no tenant enquiries</p>
<!--                             if service is free and dont have enquiries-->
                             <a href="upgrade.php">Upgrade your Ad. List on Rightmove, Zoopla & more </a>
<!--                             if service is paid  and dont have enquiries-->
                             <a href="dashboard.php">Go back to dashboard </a>
                         </div>
                         <ul>
                             <li>
                                 <a href="#">
                                     <div class="flex">
                                         <div class="message-avatar">
                                             <img src="assets/images/savings-card.jpg" class="img-fluid" alt="sam">
                                         </div>
                                         <div class="message-by">
                                             <h4>Zakk <span>14 minutes ago</span></h4>
                                             <p>Hey, i was wondering if it was ok for me to book with you. I coming from
                                                 Birmingham with my partner for a few days </p>

                                         </div>
                                     </div>
                                     <span class="like-icon"></span>
                                 </a>
                             </li>
                             <li>
                                 <a href="#">
                                     <div class="flex">
                                         <div class="message-avatar">
                                             <img src="assets/images/savings-card.jpg" class="img-fluid" alt="sam">
                                         </div>
                                         <div class="message-by">
                                             <h4>Zakk <span>1 day ago</span></h4>
                                             <p>Hey, i was wondering if it was ok for me to book with you. I coming from
                                                 Birmingham with my partner for a few days </p>
                                         </div>
                                     </div>
                                     <span class="like-icon"></span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
                </div>
                <div class="col-lg-4 order-one">
                  <div class="sidebar">
                      <div class="listing-progress">
                          <h4>Listing progress</h4>
                          <div class="row">
                              <div class=" col-6 col-sm-6">
                                  <p>Property status</p>
                              </div>

                              <div class="col-6 col-sm-6 text-right">
                                  <p class="available"><span>Available</span></p>
                                  <p class="agreed" style="display: none"><span>Let agreed</span></p>
                              </div>
                          </div>

                          <div class="row">
                              <div class=" col-6 col-sm-6">
                                  <p>Tenant enquiries</p>
                              </div>

                              <div class="col-6 col-sm-6 text-right">
                                  <p><span>2</span></p>
                              </div>
                          </div>
                          <div class="row">
                              <div class=" col-6 col-sm-6">
                                  <p>Date listed</p>
                              </div>

                              <div class="col-6 col-sm-6 text-right">
                                  <p><span>02 Nov 20</span></p>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-6 col-sm-6">
                                  <p>Listing time</p>
                              </div>

                              <div class="col-6 col-sm-6 text-right">
                                  <p><span>90 days </span></p>
                              </div>
                          </div>
                      </div>
                      <div class="meet-up">
                          <p>Meeting tenants</p>
                          <h4>Basic Requirements</h4>
                          <p>Set yourself up for success every time you advertise on Zacoota. Tenants appreciate a helpful and informative landlord so be responsive and answer all tenant queries.  Always be warm and welcoming to any viewing requests made by the tenants. Prompt replies to tenant messages ensures a quick and successful let.  </p>
                      </div>
                  </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    $(".instarent-div .close").click(function(){

        $(".instarent-div").remove();

    });
</script>

<?php
include('footer.php');
?>
