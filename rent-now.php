<?php
include('header.php');
?>


<section class="main-silder">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="item imageGallery1">
                    <div class="lSSlideOuter ">
                        <div class="lSSlideWrapper usingCss"
                             style="transition-duration: 1000ms; transition-timing-function: ease;">
                            <ul id="content-slider" class="content-slider lightSlider lSSlide lsGrab"
                                style="width: 5160px; transform: translate3d(-645px, 0px, 0px); height: 350px; padding-bottom: 0%;">
                                <li class="clone left" style="width: 635px; margin-right: 10px;">
                                    <img src="assets/images/category-box-01.jpg">
                                </li>
                                <li class="lslide active" style="width: 635px; margin-right: 10px;">
                                    <div class="preview-img-wrap">
                                        <a href="assets/images/savings-card.jpg" rel="lightbox[a]"> <img
                                                    src="assets/images/savings-card.jpg" class="img-fluid"></a>

                                    </div>
                                </li>
                                <li class="lslide" style="width: 635px; margin-right: 10px;">
                                    <div class="preview-img-wrap">
                                        <a href="assets/images/slider-img.jpg" rel="lightbox[a]"> <img
                                                    src="assets/images/slider-img.jpg" class="img-fluid"></a>
                                    </div>
                                </li>
                                <li class="lslide" style="width: 635px; margin-right: 10px;">
                                    <img src="assets/images/category-box-03.jpg">
                                </li>
                                <li class="lslide" style="width: 635px; margin-right: 10px;">
                                    <img src="assets/images/category-box-01.jpg">
                                </li>
                                <li class="lslide" style="width: 635px; margin-right: 10px;">
                                    <img src="assets/images/category-box-01.jpg">
                                </li>
                                <li class="lslide" style="width: 635px; margin-right: 10px;">
                                    <img src="assets/images/category-box-01.jpg">
                                </li>
                                <li class="clone right" style="width: 635px; margin-right: 10px;">
                                    <div class="preview-img-wrap">
                                        <a href="assets/images/savings-card.jpg" rel="lightbox[a]"> <img
                                                    src="assets/images/savings-card.jpg" class="img-fluid"></a>

                                    </div>
                                </li>
                            </ul>
                            <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5 payment-box-col">
                <!--                payment details-->

                <div class="rent-now-payment-detail">
                    <h5>Payment details for Room in a shared house</h5>
                    <h6><i class="fa fa-map-marker"></i> 2726 Shinn Street, New York</h6>

                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>Item
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Holding Deposit Amount<br> (payable now)</td>
                            <td>£161.00</td>
                        </tr>
                        <!---->
                        <!--                        <tr>-->
                        <!--                            <td>This will go towards paying your first mont's rent.</td>-->
                        <!---->
                        <!--                        </tr>-->
                        <tr>
                            <td>Rent Amount (first month due after contract signing)</td>
                            <td>£600.00 Per Month (£161.00 Per Week)</td>
                        </tr>
                        <tr>
                            <td>Deposit (due after contract signing)</td>
                            <td>£807.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!--main content-->
<div class="instarent-content-wrap">
    <div class="container">
        <div class="row">

            <!--                main content-->

            <div class="col-md-8 ">
                <div class="instarent-title">
                    <h3>Details</h3>
                </div>
                <div class="instarent-content-inner">
                    <!--review box-->
                    <div class="review-commit-box">
                        <h3>Review and commit to rental agreement</h3>

                        <p> Prior to commencing Rent Now, Zacoota always recommends viewing the property first.</p>
                        <p> If you haven't viewed yet we urge you to do so first before continuing.</p>
                        <div class="publish-button">
                            <a href="#">Request viewing</a>
                        </div>
                    </div>

                    <!--                tenant details-->

                    <div class="instarent-tenants">
                        <h3>Name the tenant</h3>
                        <p>Name all additional tenants whbow are over 18 and will be sharing this property with you.
                            The following people will be place on the tenancy agreement:</p>
                        <form>
                            <div class="tenant-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="fn">First Name</label>
                                            <input name="firstname" value="" class="form-control" type="text"
                                                   id="fn">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="sn">Last Name</label>
                                            <input name="surname" value="" class="form-control" type="text" id="sn">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="ph">Phone Number</label>
                                            <input name="phone" value="" class="form-control" type="number" id="ph">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-check-label" for="em">Email</label>
                                            <input name="email" value="" class="form-control" type="email" id="em">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn remove">Remove</button>
                                    </div>
                                </div>

                            </div>
                            <div class="tenant-details-new">

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mt-4">
                                    <button class="btn add-tenant" id="add_tenant">Add additional Tenant</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--                place holding deposit-->

                    <div class="instarent-deposit">
                        <h3>Place Holding Deposit</h3>
                        <p>Please note: You must be a tenant to place a holding deposit. Guarantor can be added when
                            required. </p>
                        <div class="form-check">
                            <input class="form-check-input" id="payment_agreement" type="checkbox">
                            <label class="form-check-label" for="payment_agreement">I understand this payment is a
                                request to put down a holding deposit. The landlord must be agree to your application
                                before there nis any agreement in place</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="terms_conditions" type="checkbox">
                            <label class="form-check-label" for="terms_conditions">I confirm that I have read and agree
                                to all the terms and conditions and privacy policy.</label>
                        </div>
                        <div class="payable-amount">
                            <div class="row">
                                <div class="col-7">
                                    <h5>Amount payable now:</h5>
                                </div>
                                <div class="col-5 text-right">
                                    <h5> £161.00</h5>
                                </div>
                            </div>

                          <div class="check-out-btn">
                              <button class="btn"><i class="fa fa-lock" aria-hidden="true"></i> Checkout Securely
                              </button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                side bar-->
            <div class="col-md-4">
                <div class="instarent-sidebar">
                    <h3>Move in date</h3>
                    <div class="form-group">
                        <div id="move_in_date"></div>
                    </div>
                </div>
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
            defaultDate: today,


        });

        $("#move_in_date").datepicker("setDate", "today");

        $("#move_in_date").datepicker("show");
    });

</script>
<script>
    $(document).ready(function () {
        $("#add_tenant").click(function () {

            $(".tenant-details").clone().appendTo(".tenant-details-new");
        });
        $(".remove").click(function () {

            $(this).parent('.tenant-details').remove();
        });
    });
</script>

<?php
include('footer.php');
?>
