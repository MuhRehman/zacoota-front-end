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
                            <a class="nav-link active" id="photography-tab" data-toggle="tab" href="#photography" role="tab">Photography And Floor Plans</a>
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
            <h2>Photography And Floor Plans</h2>
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
                        <div class="contact-details">
                            <h6>Person onsite  details  <span>*</span></h6>
                            <p>Please provide contact details of the person that will be onsite. This is the person that will give the engineer access to enter the property.</p>
                            <p><b>Name:</b> <span class="output-FirstName">Sam</span> <span class="output-Surname">Malik</span> - <b>Phone:</b> <span class="output-PhoneNumber">+447715899192</span></p>
                            <button  class="edit-form-btn">Edit contact details
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
                    <div class="service-options services-booking">
                        <div class="row">
                            <div class="col-9 pr-0">
                                <!--    Professional Photography  -->
                                <div class="round-box selected">
                                    <div class="boiler-check-wrap">
                                        <h4>Professional Photography
                                        </h4>
                                        <div class="form-check">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </div>

                                        <span>Boiler Check Included -
                                The boiler check is included in the base price and covers any hot water appliances connected at no extra cost (e.g. showers, radiators)</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div" style="display: block">
                                    <input type="text" value="£75" data-value="15" id="appliance_price"
                                           class="price">
                                </div>
                            </div>
                            <div class="col-9 pr-0">
                                <!--     Floor Plan   -->
                                <div class="round-box">
                                    <div class="floor-plan boiler-check-wrap optionals">
                                        <h4>Select Floor Plan:</h4>
                                        <div class="form-check">
                                            <input type="checkbox" id="floor_plan" name="floor plan" tabindex="0" class="radio-button" value="1" data-val="1">
                                            <label for="floor_plan" class="radio-button__label"></label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-3">
                                <div class="price-div" >

                                    <input type="text" value="£25" data-value="15" id="appliance_price"
                                           class="price">
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
    $("button.edit-form-btn").click(function(){
        $(this).toggleClass("show");
        $(".contact-details-form ").toggle();
    });
</script>
<?php
include('footer.php');
?>
