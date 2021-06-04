<?php
include('header.php');
?>

    <!--breadcrumbs-->

    <div class="insta-breadcrumb">
        <div class="container">
            <ul>
                <li class="current">
                    <div class="caption"><span>Tenants initiate Rent Now </span></div>
                </li>
                <li class="">
                    <div class="caption"><span> Tenants credit check</span></div>
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
    <div class="insta-progress-bar">
        <div class="container">
            <a class="collapsed" data-toggle="collapse" href="#progress_bar" role="button" aria-expanded="false">
                <span class="count">1</span> Tenants initiate Rent Now
            </a>
            <div class="collapse " id="progress_bar" style="">
                <div class="card card-body">
                    <div class="insta-progress-bar-step current">
                        <h5>Tenants initiate Rent Now</h5>
                    </div>
                    <div class="insta-progress-bar-step">
                        <h5>Tenants credit check</h5>
                    </div>
                    <div class="insta-progress-bar-step">
                        <h5>Contract Signing<</h5>
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

    <!--proceed contract-->

    <div class="proceed-contract">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Please Confirm Contract Details</h2>
                    <p>Please make any amendments, and then confirm all information is correct. This will form the basis
                        of your contract.</p>


                    <!--     Applicant      -->
                    <div class="applicant">
                        <div class="title">
                            <h4>Applicant</h4>
                        </div>
                        <div class="inner">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td><span>Sam malik (Lead Tenant)</span> sammalik@gmail.com - +447932107444</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="action-bottom text-right">
                                            <a href="#" class="btn remove"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>khuram qadeer</span> zaki2144@gmail.com - +447932107444</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="action-bottom text-right">
                                            <a href="#" class="btn remove"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span>Zaki shah(Guarantor)</span> zaki2144@gmail.com - +447932107444</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="action-bottom text-right">
                                            <a href="#" class="btn remove"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table
                        </div>
                    </div>

                    <!--    Proposed Applicant      -->
                    <div class="proposed-applicant">
                        <div class="title">
                            <h4>Proposed Tenants</h4>
                        </div>
                        <div class="inner">

                            <table class="table">
                                <tbody>
                                <tr>
                                    <td><span>Ali shah </span>
                                        alishah@gmail.com - +447932107444
                                    </td>
                                    <td>
                                        <div class="action-btn">
                                            <a href="#" class="btn accept">
                                                <i class="fa fa-check"></i> Accept
                                            </a>
                                            <a href="#" class="btn reject">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--    add new Applicant      -->
                    <div class="new-applicant">
                        <div class="inner">
                            <h6>Still want to edit applicants on contract?</h6>
                            <p>Normally, we'd expect all tenants to be added and confirmed before the referencing
                                stage (so it's clear who's proceeding). However, if a mistake has been made and an
                                additional party needs to be added, you can do so here.</p>
                            <div class="action-btn ">
                                <a href="#" class="btn" data-toggle="modal" data-target="#Add_tenant_options">
                                    Add Additional Tenant or request Guarantor <i class="fa fa-angle-right"
                                                                                  aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--    tenancy details      -->
                    <div class="tenancy-details">
                        <div class="title">
                            <h4>Tenancy Details</h4>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>Landlord First Name</span>
                                <input type="text" class="form-control" value="Nasim">
                            </div>
                            <div class="col">
                                <span>Landlord Surname</span>
                                <input type="text" class="form-control" value="Akhtar">
                            </div>
                        </div>
                        <div class="onbehalf-text mb-3">

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="on_behalf">
                                        <label class="form-check-label" for="on_behalf">
                                            Need to sign on behalf of another person?
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="onbehalf-input">
                                        <span>Sign on Behalf of:</span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="onbehalf-input">
                                        <div class="info">
                                            <p>If you are signing the tenancy agreement on behalf of another person
                                                (natural or legal), enter the person's name here.</p>
                                            <p>Examples of when to do this are if you are signing on behalf of a
                                                company, or acting as an executor.</p>
                                            <p>We advise that in most cases, you should sign the contract directly as
                                                yourself.</p>
                                            <p>Zacoota does not and cannot verify whether any signatory is authorised by
                                                the named person to sign on their behalf.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--    Landlord Co-Signatories     -->
                        <div class="co-signatories wraper">
                            <h6>Landlord Co-Signatories</h6>
                            <div class="info">
                                <p>More than one landlord signing the contract?</p>
                                <p>Generally, even in a shared ownership structure, a single landlord signatory is all
                                    that is required.
                                    However, if you'd like to add further landlord signatories, you are welcome to do
                                    so.</p>
                                <a href="#"></a>
                            </div>
                            <div class="action-btn ">
                                <a href="#" class="btn" data-toggle="modal" data-target="#Add_tenant_options">
                                    Add New Co-Signatory <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <!--    Rental Amount     -->
                        <div class="rental-amount wraper pb-3">
                            <h6>Rental Amount (Per Month)</h6>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" value="100">
                                </div>
                            </div>
                        </div>

                        <!--    Deposit Amount     -->
                        <div class="deposit-amount wraper pb-3 ">
                            <h6>Deposit Amount</h6>
                            <p>The deposit will be protected by Zacoota with the Custodial Scheme of MyDeposits</p>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" value="20">
                                </div>
                            </div>
                        </div>

                        <!--    Move In Date     -->
                        <div class="move-date wraper pb-3 ">
                            <h6>Move In Date</h6>

                            <div class="row">
                                <div class="col-6">
                                    <input type="date" class="form-control" value="21 January 2021">
                                </div>
                            </div>
                        </div>

                        <!--    Fixed Term Length (Months)     -->
                        <div class="term-length wraper pb-3 ">
                            <h6>Fixed Term Length (Months)</h6>
                            <p>This is the fixed length of the contract, after this period, your contract will turn into
                                a periodic tenancy (which is a valid form of AST). This means no renewal fees, or
                                additional contract signing fees.</p>
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" class="form-control" value="6">
                                </div>
                            </div>
                        </div>

                        <!--   Maximum Number of Occupants     -->
                        <div class="occupants wraper pb-3 ">
                            <h6>Maximum Number of Occupants</h6>
                            <p>We recommend that anyone over the age of 18 who will be renting as part of this tenancy
                                should be named on and sign the AST. This entry however will set in contract the maximum
                                permanent occupants covered by this agreement, and should be a count of all named
                                tenants, plus any under-18s or those not named for any other reasons.</p>
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" class="form-control" value="6">
                                </div>
                            </div>
                        </div>

                        <!--   Landlord Notice Address     -->
                        <div class="notice-address wraper pb-3 ">
                            <h6>Landlord Notice Address </h6>
                            <p>It is a legal requirement to provide the landlord's residential address (not a P.O. Box).
                                If the landlord's home address is not in England or Wales, you must provide an address
                                in England or Wales at which notices can be served. This address cannot normally be the
                                address of the rental property.</p>
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="form-control" rows="4"
                                              placeholder="Please enter entire postal address & post code. For example:Flat 1,12 Test Road,Test Region,Test Town,A1 1AA"></textarea>
                                </div>
                            </div>
                        </div>

                        <!--   Shared Room Description    -->
                        <div class="description wraper pb-3 ">
                            <h6>Shared Room Description</h6>
                            <p>Please identify which room in the house is being let. The wording here will determine
                                which room in the house the agreement is over.</p>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!--   Full Address of your rental property    -->
                        <div class="rental-address wraper pb-3 ">
                            <h6>Full Address of your rental property</h6>
                            <p>Ensure your property address is correctly stated to the right. Including house / flat
                                numbers, and full correct post code</p>
                            <div class="row">
                                <div class="col-6">
                                    <span>Line 1</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <span>Line 2 (optional)</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <span>Line 3 (optional)</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <span>Town</span>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <span>PostCode</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>


                    </div>

                    <!--    Smart Rent Collection     -->
                    <div class="rent-collection mt-3">
                        <div class="title">
                            <h4>Smart Rent Collection</h4>
                        </div>
                        <p>OpenRent can collect the monthly rent payments from the tenants on your behalf.</p>
                        <h6>Exclusive to Rent Now Landlords:</h6>
                        <p>We've handled over £351.9 million in rent and deposit payments for over 2.9 million landlords
                            and tenants, with client money protection to ensure your money and the tenants money is
                            always protected</p>
                        <ul>
                            <li> We directly transfer you any rental money received without delay</li>
                            <li>We monitor for and chase late payments automatically</li>
                            <li>Relax knowing your rent has been received, or is being chased</li>
                            <li>Dashboard showing the payment status in real-tim</li>
                            <li> Save you hours of admin work</li>
                            <li>Cancel Rent Collection Any Time - No Quibble</li>
                        </ul>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rent_collection">
                            <label class="form-check-label" for="rent_collection">
                                I am a UK resident & OpenRent will collect the ongoing rent payments on my behalf.
                            </label>
                        </div>
                    </div>

                    <!--    Legal Disclaimers    -->
                    <div class="legal-disclaimers mt-3">
                        <div class="title">
                            <h4>Legal Disclaimers</h4>
                        </div>
                        <p>By completing this checklist you are confirming that these legal requirements have been met,
                            or that they do not apply to this tenancy. Note: this list is not exhaustive. You can find a
                            full breakdown of your legal requirements <a href="javascript:void(0)">here</a> .</p>
                        <h6>Exclusive to Rent Now Landlords:</h6>
                        <p>Adding an expiry date, if known, will give both the tenants and you a clear picture of the
                            current state of these obligations. It will also help to remind you of upcoming renewals</p>
                        <ul>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="gas-safety">
                                    <label class="form-check-label" for="gas-safety">
                                        Property has a valid Gas Safety Certificate (CP12) or one is not required
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="insurance">
                                    <label class="form-check-label" for="gas-safety">
                                        Property has a valid buildings insurance policy
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="electrical-safety">
                                    <label class="form-check-label" for="electrical-safety">
                                        Property has a valid Electrical Safety Certificate (EICR)
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="eicr">
                                    <label class="form-check-label" for="eicr">
                                        Property has a valid PAT Certificate or all portable appliances have been
                                        checked by a competent person
                                    </label>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <!--   Advanced Contract Settings   -->
                    <div class="advanced-settings mt-3">
                        <div class="title">
                            <a class="collapsed" data-toggle="collapse" href="#does-zacoota" role="button"
                               aria-expanded="false">
                                Click to Show / Hide Advanced Contract Settings
                            </a>
                        </div>
                        <div class="collapse" id="does-zacoota" style="">
                            <div class="card card-body">
                                <h4>Please Note - Zacoota does not advise changing these settings.</h4>
                                <p><b>Any changes made in this section will result in the tenant being notified you are
                                        using a non-default contract which the tenants aren't obliged to agree to.</b>
                                </p>
                                <div class="activation-length">
                                    <h6>Break Clause Activation Length</h6>
                                    <p>All standard OpenRent contracts have a break clause. This ensures a 2 month
                                        notice can be served by either party after a period of 4 months (default value).
                                        We do not recommend changing this. Our experience shows that having no break
                                        clause, or an extremely long break clause period, results in substantial loss of
                                        money and time as eviction is made much more difficult.</p>

                                    <div class="form-group">
                                        <span>Number of months until break clause becomes active:</span>
                                        <div class="select-wrap">
                                            <select class="form-control" id="BreakClause" name="BreakClause">
                                                <option value="0">Remove Break Clause</option>
                                                <option selected="selected" value="4">4 (Default)</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                                <option>32</option>
                                                <option>33</option>
                                                <option>34</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h6> Q. Why is there no option for less than 4 months?</h6>
                                    <p>A. Because the housing act makes it very difficult for any eviction to occur
                                        before the first 6 months of an AST.</p>
                                </div>
                                <div class="contract-clauses">
                                    <h6>Custom Contract Clauses</h6>
                                    <p>Our policy is to provide an AST that is broad reaching and which reflects
                                        industry best practice in terms of protecting the interests of both parties.
                                        However, we are aware landlords used to sign additional paper agreements with
                                        tenants which go beyond the terms of the contract we provide them, so to make
                                        this simpler, we allow you to add clauses here. Any clauses you add are not
                                        endorsed by OpenRent, and their enforceability and legality will need to be
                                        discussed with your own lawyer(s). The tenants will be made aware of this</p>
                                    <p>Add your custom clauses below. All you need to do is add the text you want, and
                                        we'll append the clauses to the contract in a section entitled Custom
                                        Clauses.</p>
                                    <div id="addNewClauseDiv">
                                        Add Clause C<span class="customClauseNumber">1</span>: <br>
                                        <textarea id="customClauseText"
                                                  placeholder="The Tenants must... / The Landlord agrees to..."
                                                  style="width:90%;" class="valid" aria-invalid="false"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-primary" value="Add Custom Clause"
                                                onclick="AddCustomClause();return false;">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Add Custom Clause
                                        </button>
                                    </div>
                                </div>
                                <div class="rent-advance">
                                    <h6>Rent In Advance</h6>
                                    <p>If required we are able to collect a number of months rent in advance from the
                                        tenants before they move in. Taking rent in advance is a common solution when a
                                        tenant is unable to provide a guarantor, but must be considered separate from
                                        the deposit.</p>
                                    <div class="form-group">
                                        <span>Number of months rent in advance to pay:</span>
                                        <div class="select-wrap">
                                            <select class="form-control" id="rent_advance" name="MonthsRentInAdvance">
                                                <option value="">1 (Default)</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>
    </div>


    <script>
        $(function () {
            $(".tenancy-details input[type='checkbox']").change(function () {
                if ($(this).is(':checked')) {
                    $(".onbehalf-input").show();
                } else {
                    $(".onbehalf-input").hide();
                }
            });
        });

    </script>

<?php
include('footer.php');
?>