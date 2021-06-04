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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i> Services Dashboard
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="epc-tab" data-toggle="tab" href="#epc" role="tab">Energy Performance
                                Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="cp12-tab" data-toggle="tab" href="#cp_12" role="tab">Gas Safety Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="electrical-safety-tab" data-toggle="tab" href="#electrical-safety" role="tab">Electrical Safety</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="photography-tab" data-toggle="tab" href="#photography" role="tab">Photography</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="inventory-tab" data-toggle="tab" href="inventory.php" role="tab">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tenant-referencing-tab" data-toggle="tab" href="referencing.php#tenant-referencing" role="tab">Referencing</a>
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
        <!--                Tenant Referencing    -->
        <div class="tab-pane fade show active" id="tenant-referencing" role="tabpanel" aria-labelledby="tenant-referencing-tab">
            <div class="services-heading">
                <h2>Tenant Referencing</h2>
            </div>
            <div class="row">

                <!--                main content-->

                <div class="col-md-8">
                    <!--    services booking -->
                    <section class="services-booking">
                        <div class="services-booking-inner">
                            <div class="row ">

                                <div class="col-md-12">
                                    <div class="services-booking-head">
                                        <h3>Property Details :</h3>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-code-row">
                                        <div class="form-group">
                                            <div class="select-wrap">
                                                <select class="form-control" id="propertiesdropdown">
                                                    <option value="0" selected="selected"> Select a property</option>
                                                    <option class="propertiesdropdown-adress" value="1">A S K Letting Ltd, 148 Cranbrook Road,
                                                        Ilford, ig1 4lz
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <button id="tenant_add_new" class="add-form-btn">Add new property
                                        </button>
                                    </div>

                                    <div class="addressgetbox" id="tenant_adressgetbox">
                                        <p>A S K Letting Ltd<br>
                                            148 Cranbrook Road<br>
                                            Ilford<br>
                                            IG1 4LZ</p>
                                    </div>
                                </div>

                            </div>
                            <div class="tenant_property_form">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ad-one">Flat or house number</label>
                                            <input type="text" class="form-control" id="ad-one" placeholder="e.g. Flat 1 or 5 Abbey Road">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ad-line">Address Line 1</label>
                                            <input type="text" class="form-control" id="ad-line" placeholder="e.g. 5 Abbey Road or Westminister">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ad-line-two">Address Line 2</label>
                                            <input type="text" class="form-control" id="ad-line-two" placeholder="(Optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="town">Town</label>
                                            <input type="text" class="form-control" id="town" placeholder="e.g. London or Manchester">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="psot_code">Post Code</label>
                                            <input type="text" class="form-control" id="psot_code" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="tenant_new_property btn">
                                            <i class="fa fa-remove"></i>Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--                                    guarantor details -->
                            <div class="guarantor-details-wrap">
                                <div class="guarantor-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Tenant / Guarantor Details:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="firstname" value="" class="form-control" type="text" placeholder="First Name" id="fn">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="surname" value="" class="form-control" type="text" placeholder="Surname" id="sn">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="phonee" value="" class="form-control" type="text" placeholder="Phone Number" id="ph">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="emaill" value="" class="form-control" type="text" placeholder="Email" id="em">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="radio-button-list">
                                                <li>
                                                    <input type="radio" id="cpg" name="check" tabindex="0" class="radio-button" value="1">
                                                    <label for="cpg" class="radio-button__label" style="width: 150px;margin-right: 10px;">Guarantor</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="cpt" name="check" tabindex="0" class="radio-button" value="2">
                                                    <label for="cpt" class="radio-button__label" style="width: 150px;margin-right: 10px;">Tenant</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-danger remove" type="button"><i class="fa fa-remove"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="guarantor-details-new">

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mt-4">
                                    <button  class="btn" id="add_guarantor">Add addional Tenant or Guarantor</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--    end services booking -->



                </div>
                <!--                siderbar-->
                <div class="col-md-4">
                    <div class="services-sidebar">
                        <div class="check_card_wrap">
                            <!--                    checkout heading-->
                            <div class="verified-badge with-tip">
                                <i class="sl sl-icon-check"></i> Checkout

                            </div>
                            <!--                    check out card-->
                            <div class="check_card">

                                <div class="check_card_body">
                                    <div class="check_card_guest">
                                        <div class=" text-center">
                                            <h6>Order Summary</h6>
                                        </div>

                                        <div class="input-append-group">

                                        </div>
                                        <div class="input-append-group2">

                                        </div>
                                    </div>


                                    <div class="check_card_total">
                                        <div class="row">
                                            <div class="col-8 col-sm-9">
                                                <h6>Total</h6>
                                            </div>
                                            <div class="col-4 col-sm-3">
                                                <h6><input type="text" class="total-price" value="£0"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check_card_collection">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button><i class="fa fa-lock" aria-hidden="true"></i> Checkout Securely
                                                </button>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="payment-ways-img">
                                                    <img src="assets/images/payment-way.png" class="img-fluid" alt="zacoota payments ways">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<?php
include('footer.php');
?>
