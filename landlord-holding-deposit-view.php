<?php
include('header.php');
?>
<!--breadcrumbs-->

<div class="insta-breadcrumb">
    <div class="container">
        <ul>
            <li class="complete">
                <div class="caption"><span>Tenants initiate Rent Now </span></div>
            </li>
            <li class="current">
                <div class="caption"><span> Tenant credit check</span></div>
            </li>
            <li>
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
<div class="Congrat-div">
    <div class="container h-100">
        <div class="wrap">
            <div class="row align-items-center h-100">
                <div class="col-md-8 mx-auto">
                    <div class="name">
                        <h6> Congratulations Sam!</h6>
                    </div>
                    <p>Your property has received a Rent Now tenancy application  </p>
                </div>
                <div class="col-md-4 text-right">
                  <div class="view-appl">
                      <a href="#">view Application</a>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- instarent breadcrumb-->
<div class="insta_breadcrumb">
    <div class="container">
        <ul class="steps">
            <li class="complete">
                <div class="count">1</div>
                <div class="caption">Tenants initiate Rent Now </div>
            </li>
            <li class="current">
                <div class="count">2</div>
                <div class="caption"> Tenant credit check</div>
            </li>
            <li>
                <div class="count">3</div>
                <div class="caption"> Contract Signing</div>
            </li>
            <li>
                <div class="count">4</div>
                <div class="caption"> Pay Deposit & Rent</div>
            </li>
            <li>
                <div class="count">5</div>
                <div class="caption"> Complete</div>
            </li>


        </ul>
    </div>
</div>


<div class="holding-deposit-view">
    <div class="container">
        <div class="wrap">
            <div class="tenant-details">
                <h3>Tenant details</h3>
                <p>The following tenants have placed £23.00 deposit on your <a href="#">2 Beds Room In A Shared Flat,Huxley Road, London</a> </p>
            </div>

            <!--    house mates            -->
            <div class="housemates">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col"> Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mark ott</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                        <td>
                            <div class="action-bottom">
                                <a href="#" class="btn btn-send-message">
                                    <i class="fa fa-comments"></i> Send Message
                                </a>

                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>Sam Malik</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                        <td>
                            <div class="action-bottom">
                                <a href="#" class="btn btn-send-message">
                                    <i class="fa fa-comments"></i> Send Message
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="action-bottom">
                                <a href="#" class="btn remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <!--    guarantors            -->
            <div class="guarantors">
                <h3>Proposed Guarantors</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col"> Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Guarantors For</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Zaki shah</td>
                        <td>+447932107444</td>
                        <td>oneday2144@gmail.com</td>
                        <td>Sam</td>
                        <td>
                            <div class="action-btn">
                                <a href="#" class="btn accept">
                                    Accept
                                </a>
                                <a href="#" class="btn reject">
                                    Reject
                                </a>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>

            <!--     guarantors and tenants    -->
            <div class="guarantors_tenants landlord_option">
                <div class="inner">
                    <h3>Add Additional Tenant or request Guarantor</h3>
                    <p>Additional application can be added later. with tenants also able to propose additional applicants for approval.<br> However if you know you want to ad an additional tenant, or a guarantor, please click the applicant link.</p>
                    <div class="action-btn ">
                        <a class="btn add-tenant" data-toggle="modal" data-target="#add_tenant">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Add tenant
                        </a>
                        <a class="btn add-guarantor" data-toggle="modal" data-target="#add_guarantor">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Add or Request Guarantor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--     date and rent      -->

<section class="landlord-date-rent">
    <div class="container">
        <h3>Agree move-in date and rental amount</h3>
        <p>Below are two crucial elements of the application we like to get agreed up-front.</p>
        <p>You ate welcome to change either of these now. but note the <b>tenants will be notified,</b> and this may be used as <b>reasonable grounds to withdraw their application - </b>so please <b>make sure any changes are discussed</b> using the contact details above.</p>
      <form>
        <div class="row">
            <div class="col-md-6">
                <div class="move-in-date">
                    <h3>Proposed Move In Date</h3>
                    <p>This is the date the tenants have entered as the pre-agreed move-in-date.</p>
                    <div class="form-inline">
                        <div class="form-group mx-sm-3 mb-2 ml-0">
                            <input  class="form-control" id="move_in_date">
                        </div>
                        <button type="submit" class="btn  mb-2">Change Move In Date</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="rent-amount">
                    <h3>Renal Amount</h3>
                    <p>This is the rantal amount as displayed on your advert.</p>
                    <div class="form-inline">
                        <div class="form-group mx-sm-3 mb-2 ml-0">
                            <input type="password" class="form-control" id="rental_amount">
                        </div>
                        <button type="submit" class="btn mb-2">Change Monthly Rental Amount</button>
                    </div>
                </div>
            </div>
        </div>

      </form>
    </div>
</section>

<!--landlord options-->
<section class="landlord-deposit-option">
    <div class="container">
        <h3>You now have the following options</h3>
    </div>
</section>

<!-- add tenant Modal -->
<div class="modal fade" id="add_tenant" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add Tenant</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group">
                        <input type="text" class="form-control f_name" id="first_name" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control la_name" id="last_name" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control phone_number" id="user_number"
                               placeholder="phone number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control tenant_email" id="user_email"
                               placeholder="Email address">
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- add Guarantor Modal -->
<div class="modal fade" id="add_guarantor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add Guarantor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Add a pre-agreed guarantor to the tenancy:</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control f_name" id="first_name" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control la_name" id="last_name" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control phone_number" id="user_number"
                               placeholder="phone number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control tenant_email" id="user_email"
                               placeholder="Email address">
                    </div>
                    <div class="guarantor-for">
                        <h6>  Guarantor for: (optional)</h6>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check_all">
                                    <label class="form-check-label" for="check_all">Everyone</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="tenant_1">
                                    <label class="form-check-label" for="tenant_1">Zakk Raja</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="tenant_2">
                                    <label class="form-check-label" for="tenant_2">Sam Malik</label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="tenant_3">
                                    <label class="form-check-label" for="tenant_3">Khuram Mughal</label>
                                </div>
                            </li>
                        </ul>
                    </div>

                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn">Add</button>
            </div>
        </div>
    </div>
</div>
<script>
    //move in date
    $(function () {
        var today = new Date();
        var widget = $("#move_in_date").datepicker("widget");
        $("#move_in_date").datepicker({
            minDate: today,
            format: 'dd-mm-yyyy',
        });



    });

</script>

<?php
include('footer.php');
?>
