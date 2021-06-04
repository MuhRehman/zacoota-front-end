<?php
include('header.php');
?>

<!--
          Services nav bar
  ===========================================-->
<div class="services-nav">
    <div class="container">
        <div class="col-md-12 p-0">
            <nav class="navbar navbar-expand-lg pl-0 pr-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                    <i class="fa fa-bars"></i> Services Dashboard
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="epc-tab" data-toggle="tab" href="#epc" role="tab">Energy
                                Performance
                                Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="cp12-tab" data-toggle="tab" href="#cp_12" role="tab">Gas
                                Safety Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="electrical-safety-tab" data-toggle="tab" href="#electrical-safety"
                               role="tab">Electrical Safety</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="photography-tab" data-toggle="tab" href="#photography" role="tab">Photography
                                And Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="inventory-tab" data-toggle="tab" href="#inventory" role="tab">Inventory
                                And Check In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tenant-referencing-tab" data-toggle="tab"
                               href="#tenant-referencing"
                               role="tab">Referencing</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>

<div class="services-back">
    <div class="container">
        <div class="services-back-btn">
            <a href="services.php"><i class="fa fa-chevron-left" aria-hidden="true"></i> Go back</a>
        </div>
    </div>
</div>

<!--    main content wraper-->

<div class="content-wrap services_content">
    <div class="container">
        <div class="services-heading text-center">
            <h2>Tenant Referencing</h2>
        </div>

        <div class="service-head">
            <div class="row">
                <div class="col-md-4">
                    <h3>Address & Contact Details</h3>
                </div>
                <div class="col-md-6">
                    <h3>Options</h3>
                </div>
                <div class="col-md-2">
                    <h3>Price</h3>
                </div>
            </div>
        </div>
        <div class="service-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-description">
                        <div class="address-details">

                            <div class="form-group">
                                <div class="select-wrap" style="">
                                    <select class="form-control" id="propertiesdropdown">
                                        <option value="0" selected="selected"> Select a property</option>
                                        <option class="propertiesdropdown-adress" value="1">A S K Letting Ltd, 148
                                            Cranbrook Road,
                                            Ilford, ig1 4lz
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <button id="formbut" class="add-form-btn">Enter address manually
                            </button>

                            <div class="new_form">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ad-one">Flat or house number</label>
                                            <input type="text" class="form-control" id="ad-one"
                                                   placeholder="e.g. Flat 1 or 5 Abbey Road">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="town">Town</label>
                                            <input type="text" class="form-control" id="town"
                                                   placeholder="e.g. London or Manchester">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="psot_code">Post Code</label>
                                            <input type="text" class="form-control" id="psot_code"
                                                   placeholder="e.g. W11 1JA">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="remove_form btn">
                                            <i class="fa fa-remove"></i>Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-8">
                    <div class="service-options services-booking">
                        <div class="row">
                            <div class="col-9 pr-0">
                                <!--    Referencing Type    -->
                                <div class="round-box">
                                    <h4> Referencing Type</h4>
                                    <ul class="radio-button-list">
                                        <li>
                                            <input type="radio" id="comprehensive" name="service-type" tabindex="0"
                                                   class="radio-button" value="comprehensive" checked>
                                            <label for="comprehensive" class="radio-button__label">Comprehensive</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="swift" name="service-type" tabindex="0" class="radio-button"
                                                   value="swift">
                                            <label for="swift" class="radio-button__label" style="width: 120px;">swift</label>
                                        </li>
                                    </ul>
                                    <div class="comparison">
                                        <a class="btn " data-toggle="modal" data-target="#tenant_ref_opt">
                                            Compare Referencing Options <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">

                            </div>
                            <div class="col-9 pr-0">
                                <!--     add Tenant and  Referencing   -->
                                <div class="round-box">
                                    <div class="add-tenant">
                                        <h4>Add Tenant / Guarantor</h4>


                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <span>Mark ott</span>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn remove"> Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Mark ott</span>
                                                </td>
                                                <td>grarantor</td>
                                                <td>
                                                    <a href="#" class="btn remove"> Remove</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>Mark ott</span>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <a href="#" class="btn remove"> Remove</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <div class="action-btn">
                                            <a class="btn add" data-toggle="modal" data-target="#prop_date">
                                                Add New Tenant
                                                or Guarantor
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div" style="display:block;">
                                    <div class=" add-EICR-val">
                                        <p>1x Reference</p>
                                        <input type="text" value="£20" class="price">
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
        <!--service checkout-->
        <div class="service-checkout">
            <div class="inner">
                <div class="total">

                    <p><span>Total</span> £60.00</p>
                    <a href="#" class="btn">Checkout now</a>
                    <img src="assets/images/payment-way.png" class="img-fluid" alt="payment">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tenant referencing opt Modal -->
<div class="modal right fade option-modal " id="tenant_ref_opt" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>View Tenant Referencing Options</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrap">
                    <p>I would like Zacoota to reference these tenants. If they pass referencing, I am happy to move to
                        contract signing, and these Is can move into my property upon contract signing, and payment of
                        deposit and rent money to Zacoota.</p>
                </div>

                <div class="included">
                    <div class="wrap">
                        <h4>What's Included?</h4>
                        <ul>
                            <li>Cost per reference: £20.00</li>
                            <li>Cost for entire tenancy set up if tenants move in: £49.00 (deducted form your first
                                month
                                payment)
                            </li>
                            <li>Support and options if tenants fail references</li>
                            <li>Holding deposit (£23.00) passed on to landlord if tenants withdraw thier application
                                after 72
                                hours.
                            </li>
                            <li>You will be provided with a completion report once references are complete (full details
                                below).
                            </li>
                            <li>Zacoota will proces the deposit and first month's rent from the tenant. The landlord
                                should not
                                process money.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wrap">
                    <h4>Full Service Breakdown</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th aria-hidden="true">Comprehensive<br> Referencing</th>
                            <th aria-hidden="true">Speedy<br> Referencing</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Time Taken</td>
                            <td>
                                3-5 Working Days<br> (On Average)
                            </td>
                            <td>
                                1 Working Days<br> (On Average)
                            </td>
                        </tr>
                        <tr>
                            <td>Credit Check</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Fraud Checks</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Outstanding Debt Search</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Right to REnt Check Advice</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>

                            </td>
                        </tr>
                        <tr>
                            <td>Affordability Rating</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#d42114" width="24px"
                                     height="24px">
                                    <path d="M6.188 18.872A9 9 0 0 0 18.872 6.188L6.188 18.872zm-1.06-1.06L17.812 5.128A9 9 0 0 0 5.128 17.812zM12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5z"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>Previous Landlord Reference (if applicable)</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#d42114" width="24px"
                                     height="24px">
                                    <path d="M6.188 18.872A9 9 0 0 0 18.872 6.188L6.188 18.872zm-1.06-1.06L17.812 5.128A9 9 0 0 0 5.128 17.812zM12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5z"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>Income Check</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#008542" width="24px"
                                     height="24px">
                                    <path d="M12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5zM8.03 11.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l6-6a.75.75 0 0 0-1.06-1.06l-5.47 5.47-2.47-2.47z"></path>
                                </svg>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#d42114" width="24px"
                                     height="24px">
                                    <path d="M6.188 18.872A9 9 0 0 0 18.872 6.188L6.188 18.872zm-1.06-1.06L17.812 5.128A9 9 0 0 0 5.128 17.812zM12 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5z"></path>
                                </svg>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade custom-modal" id="prop_date" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4>Add additional Tenant or Guarantor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
               <form>
                   <div class="row tg services-booking" id="tg_form_1" data-no="1">
                       <div class="col-md-6">
                           <div class="form-group">
                               <input name="first_name_1" id="first_name_1" value="" class="form-control" type="text" placeholder="First Name">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <input name="last_name_1" id="last_name_1" value="" class="form-control" type="text" placeholder="Last Name">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <input name="phone_1" id="phone_1" value="" class="form-control" type="text" placeholder="Phone Number">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <input name="email_1" id="email_1" value="" class="form-control" type="text" placeholder="Email">
                           </div>
                       </div>
                       <div class="col-md-8">
                           <ul class="radio-button-list" id="user_type_1">
                               <li>
                                   <input type="radio" id="guarantor_1" name="user_1" tabindex="0" class="radio-button" value="guarantor">
                                   <label for="guarantor_1" class="radio-button__label" style="width: 150px;margin-right: 10px;">Guarantor</label>
                               </li>
                               <li>
                                   <input type="radio" id="tenant_1" name="user_1" tabindex="0" class="radio-button" value="tenant">
                                   <label for="tenant_1" class="radio-button__label" style="width: 150px;margin-right: 10px;">Tenant</label>
                               </li>
                           </ul>
                       </div>

                   </div>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn next">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('button.add-form-btn').click(function () {
        $(" .new_form").show();
        $(" .select-wrap").hide();
    });
    $('button.remove_form').click(function () {
        $(" .new_form").hide();
        $(" .select-wrap").show();
    });
</script>
<script>
    $(function () {
        $(".optionals input[type='checkbox']").change(function () {
            if ($(this).is(':checked')) {
                $(".services-booking .price-div").show();
            } else {
                $(".services-booking .price-div").hide();
            }
        });
    });

</script>

<script>
    $("button.edit-form-btn").click(function () {
        $(this).toggleClass("show");
        $(".contact-details-form ").toggle();
    });
</script>
<?php
include('footer.php');
?>
