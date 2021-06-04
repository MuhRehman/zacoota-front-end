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
                            <a class="nav-link active" id="electrical-safety-tab" data-toggle="tab"
                               href="#electrical-safety"
                               role="tab">Electrical Safety</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="photography-tab" data-toggle="tab" href="#photography" role="tab">Photography And Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="inventory-tab" data-toggle="tab" href="#inventory" role="tab">Inventory And Check In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tenant-referencing-tab" data-toggle="tab" href="#tenant-referencing"
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
            <h2>Electrical Safety</h2>
        </div>

        <div class="service-head d-view">
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
        <div class="service-head m-view">
            <div class="row">
                <div class="col-12">
                    <h3>Address & Contact Details</h3>
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
                        <div class="contact-details">
                            <h6>Person onsite details  <span>*</span></h6>
                            <p>Please provide contact details of the person that will be onsite. This is the person that
                                will give the engineer access to enter the property.</p>
                            <p><b>Name:</b> <span class="output-FirstName">Sam</span> <span
                                        class="output-Surname">Malik</span> - <b>Phone:</b> <span
                                        class="output-PhoneNumber">+447715899192</span></p>
                            <button class="edit-form-btn">Edit contact details
                            </button>
                            <div class="contact-details-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Contact_name"
                                                   placeholder="First Name" value="Sam">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact_surname"
                                                   placeholder="Contact Surname" value="Malik">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Contact_number"
                                                   placeholder="Phone Number" value="+447715899192">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact_email"
                                                   placeholder="Email" value="sammalik@gmail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="service-head m-view">
                        <div class="row">
                            <div class="col-9">
                                <h3>Options</h3>
                            </div>
                            <div class="col-3">
                                <h3>Price</h3>
                            </div>
                        </div>
                    </div>
                    <div class="service-options services-booking">
                        <div class="row">
                            <div class="col-9 pr-0">
                                <!--    Add PAT testing   -->
                                <div class="round-box">
                                    <div class="boiler-check-wrap optionals">
                                        <h4>Add PAT Testing</h4>
                                        <div class="form-check">
                                            <input type="checkbox" id="pat_yes" name="pat testing" tabindex="0"
                                                   class="radio-button" value="1" data-val="1">
                                            <label for="pat_yes" class="radio-button__label"></label>
                                        </div>

                                        <span>How many electrical appliances does this property have?</span>
                                        <p>Our PAT pricing is based on the number of electrical appliances. Providing an
                                            incorrect number of appliances will mean the engineer will not be able to create the
                                            report, and a callout charge will be applied.</p>

                                        <div class="info">
                                            <p><span>Note:</span> Hard wired appliances do count here, but only a visual check
                                                and earth check will be performed if the appliance has no plug socket or it
                                                isn't easily accessible</p>
                                        </div>
                                        <div class="pat-appliances mt-3" style="display: none">
                                            <div class="select-wrap">
                                                <select class="form-control" id="pat_appliances">
                                                    <option value="0" selected="selected"> Up To 10 Appliances (+£0.00 )
                                                    </option>
                                                    <option value="1">
                                                        Up To 15 Appliances (+£10.00 )
                                                    </option>
                                                    <option value="2">
                                                        Up To 20 Appliances (+£20.00 )
                                                    </option>
                                                    <option value="3">
                                                        Up To 25 Appliances (+£30.00 )
                                                    </option>
                                                    <option value="4">
                                                        Up To 30 Appliances (+£40.00 )
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div">
                                    <div class=" add-EICR-val">
                                        <p>1x Pat Certificate</p>
                                        <input type="text" value="£69" class="price">
                                    </div>
                                </div>
                                <div class="price-div">
                                    <div class="pat-appliances-price">
                                        <div class=" add-EICR-val">
                                            <p>10x Appliances</p>
                                            <input type="text" value="£0" class="price">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-9 pr-0">
                                <!--    EICR  -->
                                <div class="round-box">
                                    <div class="boiler-check-wrap optionals">
                                        <h4>Add Electrical Installation Condition Report (EICR)</h4>
                                        <div class="form-check">
                                            <input type="checkbox" id="EICR" name="EICR" tabindex="0"
                                                   class="radio-button" value="1" data-val="1">
                                            <label for="EICR" class="radio-button__label"></label>
                                        </div>


                                        <p>If you select to have an EICR, this will include up to 8 circuits. Most residential
                                            properties have less than 8 circuits - but we must state more circuits than this
                                            will be charged later at £15 each. If you are unsure about this, please ask the
                                            electrician when they call to confirm the inspection date.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div">
                                    <div class=" add-EICR-val">
                                        <input type="text" value="£129" class="price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 pr-0">
                                <!--    number of bedrooms  -->
                                <div class="round-box eicr-bedrooms" style="display: none">
                                    <div class="boiler-check-wrap optionals">
                                        <h4>How many bedrooms are there in the property?</h4>

                                        <p>There is an additional charge of £10 per bedroom if you are adding an Electrical
                                            Installation Condition report (EICR)</p>

                                        <div class=" mt-3">
                                            <div class="select-wrap">
                                                <select class="form-control" id="eicr_bedrooms">
                                                    <option value="">Select</option>
                                                    <option value="1">1Bedroom
                                                    </option>
                                                    <option value="2">2Bedroom
                                                    </option>
                                                    <option value="3">3Bedroom
                                                    </option>
                                                    <option value="4">4Bedroom
                                                    </option>
                                                    <option value="5">5Bedroom
                                                    </option>
                                                    <option value="6">6Bedroom
                                                    </option>
                                                    <option value="7">7Bedroom
                                                    </option>
                                                    <option value="8">8Bedroom
                                                    </option>
                                                    <option value="9">9Bedroom
                                                    </option>
                                                    <option value="10">10Bedroom
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div">
                                    <div class=" add-EICR-val">
                                        <input type="text" value="£0" class="price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 pr-0">
                                <!--    Desired Dates   -->
                                <div class="round-box">
                                    <h4>Select Desired Dates:<a tabindex="0" role="button" class="" data-container="body"
                                                                data-toggle="popover" data-trigger="focus"
                                                                data-placement="top" title=""
                                                                data-content="<span>Although we endeavour to accommodate your requested dates, this however, is not always possible.</span><hr><span>Our engineer will make contact with the specified 'person of contact' to confirm, change or adjust the exact date and time for the inspection.</span><hr><span>If a date and time cannot be agreed upon, you will be refunded in full.</span>  "
                                                                data-original-title="">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </a></h4>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div id="yourBox" class="styled-checkbox" onclick="Dateselect11();">
                                                <div class="form-group">
                                                    <input type="checkbox" class="form-check-input" id="asap3" value="ASAP2"
                                                           name="ASAP2">
                                                    <label for="asap3" class="form-check-label">As soon as
                                                        possible</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 text-center">
                                            <p class="date-or">or</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input id="es_datepicker" placeholder="Select date" class="hasDatepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">

                            </div>
                            <div class="col-9 pr-0">
                                <!--    Message Engineer   -->
                                <div class="round-box">
                                    <div class="message-engineer">
                                        <h6>Message to Engineer: (optional)</h6>
                                        <textarea style="padding-top: 15px;" class="form-control" id="eng-messege"
                                                  name="message"
                                                  placeholder="e.g. &quot;only on weekends&quot; or &quot;before 12pm on Mondays &amp; Thursdays&quot;"
                                                  cols="10" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

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
        $("input#pat_yes[type='checkbox']").change(function () {
            if ($(this).is(':checked')) {
                $(".pat-appliances").show();
            } else {
                $(".pat-appliances").hide();
            }
        });
        $("input#EICR[type='checkbox']").change(function () {
            if ($(this).is(':checked')) {
                $(".eicr-bedrooms").show();
            } else {
                $(".eicr-bedrooms").hide();
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
