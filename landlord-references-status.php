<?php
include('header.php');
?>
<!--breadcrumb-->
<div class="insta-breadcrumb">
    <div class="container">
        <ul>
            <li class="complete">
                <div class="caption"><span>Tenants initiate Rent Now </span></div>
            </li>
            <li class="current">
                <div class="caption"><span> Tenants credit check</span></div>
            </li>
            <li class="">
                <div class="caption"><span> Contract Signing</span></div>
            </li>
            <li>
                <div class="caption"><span> Pay Deposit &amp; Rent</span></div>
            </li>
            <li>
                <div class="caption"><span> Complete</span></div>
            </li>
        </ul>

    </div>
</div>
<div class="insta-progress-bar">
    <div class="container">
        <a class="collapsed" data-toggle="collapse" href="#progress_bar" role="button" aria-expanded="false">
            <span class="count">1</span> Tenants initiate Rent Now
        </a>
        <div class="collapse " id="progress_bar" style="">
            <div class="card card-body">
                <div class="insta-progress-bar-step complete">
                    <h5>Tenants initiate Rent Now</h5>
                </div>
                <div class="insta-progress-bar-step current">
                    <h5>Tenants credit check</h5>
                </div>
                <div class="insta-progress-bar-step  ">
                    <h5>Contract Signing&lt;</h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Pay Deposit &amp; Rent</h5>
                </div>
                <div class="insta-progress-bar-step">
                    <h5>Complete</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="references-status">
    <div class="container">
        <div class="content-wrap">
            <div class="heading-text content">
                <h3>Tenancy referencing status - in progress</h3>
            </div>
            <!--     referencing in Progress -->
            <div class="references content">
                <h3>In Progress</h3>
                <p>Once we've completed referencing, we will send you an email with a summary of what we've found a
                    full detailed report </p>
                <p>For further information about your references please contact Rentguard: 01227 467 250</p>
                <table class="table references-table">
                    <tbody>
                    <tr>
                        <td>
                            <span class="name">Mark ott </span> (Guarantor)<br>
                            Comprehensive Reference
                        </td>
                        <td>
                            <span class="status">Awaiting tenant to complete referencing application</span>
                        </td>
                        <td>
                            <a href="#" class="report">view report</a>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span class="name">Khuram qadeer</span> <br>
                            Comprehensive Reference
                        </td>
                        <td>
                            <span class="status">Awaiting tenant to complete referencing application</span>
                        </td>
                        <td>
                            <a href="#" class="report">view report</a>
                        </td>

                    </tr>

                    </tbody>
                </table>

            </div>
            <!--    Not Being Referenced -->
            <div class="references content">
                <h3>Not Being Referenced</h3>
                <p>This is a list of the tenant(s) you have not selected to be referenced, you can change this by
                    clicking the button below.</p>
                <table class="table references-table">
                    <tbody>
                    <tr>
                        <td>
                            <span class="name"> Mark ott </span>(Lead tenant)
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <span class="name"> Sam Malik</span>
                        </td>


                    </tr>

                    </tbody>
                </table>
                <div class="edit-btn">
                    <a href="#">Edit Reference</a>
                </div>
            </div>

            <div class="content references">
                <h3>Need to ask your applicants a question?</h3>
                <div class="contact-btn">
                    <a href="#"  data-toggle="modal" data-target="#contact_tenant">Send message</a>
                </div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="content attention">
                <h3> You have pending tenant and guarantor
                    applications awaiting for your consideration and approval. </h3>
                <p> To show proposed tenants / guarantors click <a href="javascript:void(0)">Here</a></p>
            </div>
        </div>
        <div class="content-wrap proposed-applicant" style="display: none">
            <!--    Proposed Applicant      -->
            <div class="proposed-applicant content">
                <h3>Proposed Tenants / Guarantor</h3>
                <ul>
                    <li>
                        <h6>Zakk joe</h6>
                        <span> Guarantor for sam malik</span>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> sammalik@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +447932107444</p>
                        <a href="javascript:void(0)" class="approve">Accept</a>
                        <a href="javascript:void(0)" class="remove" data-toggle="modal" data-target="#tenant_rejected">Reject</a>

                    </li>
                    <li>
                        <h6>ALi waris</h6>
                        <span> tenant</span>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> sammalik@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +447932107444</p>
                        <a href="javascript:void(0)" class="approve">Accept</a>
                        <a href="javascript:void(0)" class="remove" data-toggle="modal"
                           data-target="#guarantor_rejected">Reject</a>

                    </li>
                </ul>
            </div>
            <!--   add tenants and  guarantor -->
            <div class="new-applicant h-100 content">
                <div class="row align-items-center h-100">
                    <div class="col-md-6 mx-auto">
                        <h6>Add Additional Tenant or request Guarantor</h6>
                        <div class="action-btn ">
                            <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                                <i class="fa fa-user-plus" aria-hidden="true"></i> Add tenant
                            </a>
                            <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                                <i class="fa fa-user-plus" aria-hidden="true"></i> Add or Request Guarantor
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info">
                            <p>Additional application can be added later. with tenants also able to propose additional
                                applicants for approval. However if you know you want to ad an additional tenant, or a
                                guarantor, please click the applicant link.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap">
            <div class="content proceed-options">
                <h3>How would you like to proceed?</h3>
                <div class="flex">
                    <a href="#" data-toggle="modal" data-target="#referenc-option">Check all Options </a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal right fade refe-option-modal" id="referenc-option" tabindex="-1" role="dialog" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Satisfied with the references?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="references-options">
                    <h6>By proceeding you are agreeing to accepting these tenants on condition that they:</h6>
                    <p>
                        <i class="fa fa-check" aria-hidden="true"></i> Sign the <a
                                href="#">Zacoota tenancy agreement</a><br>
                        <i class="fa fa-check" aria-hidden="true"></i> Pay any required deposit and
                        rent
                    </p>
                    <p><i class="fa fa-info-circle" aria-hidden="true"></i> The <strong>first month's rent</strong> will
                        be paid directly to OpenRent, and passed to you <strong><a href="#" target="_blank">10 days
                                after move-in</a></strong>.</p>
                </div>
            </div>
            <div class="modal-footer">
                <div class="flex">
                    <a href="#"> Accept References - Review & Edit Contract</a>
                    <a href="#" class="btn-3"> Cancel Application</a>
                    <a href="#" class="btn-1">Edit Tenancy Details</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--contact tenant modal-->
<div class="modal fade custom-modal" id="contact_tenant" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Message Tenants</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="message-send">
                    <textarea name="message" id="send-message-text" class="form-control" style="height: 100px;" placeholder="Type your message here"></textarea>
                </div>

              <div class="select-tenants">
                  <h6>Select tenants you want to message.</h6>
                  <ul>
                      <li><div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tennat-0">
                              <label class="form-check-label" for="tennat-0">
                                  <span class="name"> Mark ott </span>(Lead tenant)
                              </label>
                          </div>
                      </li>
                      <li>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tennat-1">
                              <label class="form-check-label" for="tennat-1">
                                  <span class="name"> Sam Malik</span>
                              </label>
                          </div>
                      </li>
                      <li>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tennat-2">
                              <label class="form-check-label" for="tennat-2">
                                  <span class="name">Muhammd yaqoob</span>
                              </label>
                          </div>
                      </li>
                      <li>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tennat-3">
                              <label class="form-check-label" for="tennat-3">
                                  <span class="name"> Khuram qadeer</span>
                              </label>
                          </div>
                      </li>
                      <li>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tennat-4">
                              <label class="form-check-label" for="tennat-4">
                                  <span class="name"> Zaki shah</span>
                              </label>
                          </div>
                      </li>
                  </ul>
              </div>


            </div>
            <div class="modal-footer">

                <button type="button" class="btn">Send Message</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('.content.attention a').click(function () {
        $(".proposed-applicant").show()

    });
</script>
<?php
include('footer.php');
?>
