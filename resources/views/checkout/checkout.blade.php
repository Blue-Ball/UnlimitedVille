@extends('layouts.default')
@section('content')
<div class="page-content ">
    <section class="py-6 bg-gray-100">
        <div class="container">
            <!-- <checkout-page
                :initial-cart="{&quot;items&quot;:[{&quot;id&quot;:9,&quot;model&quot;:&quot;MOFI SIM4 Router (Pink)&quot;,&quot;price&quot;:&quot;249.00&quot;,&quot;accept_backorders&quot;:true,&quot;backorder_message&quot;:null,&quot;image_uri&quot;:&quot;https:\/\/res.cloudinary.com\/unlimitedville\/image\/upload\/images\/bf4d223388d40c2c7abf698447c6960c.jpeg&quot;,&quot;backordered&quot;:false,&quot;date_available&quot;:null,&quot;plan&quot;:{&quot;id&quot;:3,&quot;name&quot;:&quot;Pink&quot;,&quot;price&quot;:&quot;149.00&quot;,&quot;coverage_map&quot;:&quot;https:\/\/www.t-mobile.com\/coverage-map.html&quot;,&quot;unavailable&quot;:false,&quot;available_exclusive&quot;:true},&quot;qty&quot;:1}],&quot;subtotal&quot;:398,&quot;discount_code&quot;:null,&quot;item_count&quot;:1,&quot;rates&quot;:[],&quot;shipping&quot;:null,&quot;customer&quot;:null,&quot;selected_rate_id&quot;:null}"
                shipping-disclaimer="Orders for in-stock items placed before 11:00 a.m. CDT Mon-Fri will ship the same day. Orders placed after 11:00 a.m. CDT will ship the next business day. USPS Express is guaranteed 1-2 business days if placed before 11:00 a.m. CDT Mon–Fri.
    "
            ></checkout-page> -->
            <div>
                <div class="card">
                    <div class="card-body border-bottom border-gray-200">
                        <div class="d-md-flex align-items-center smaller text-center">
                            <img src="https://res.cloudinary.com/unlimitedville/image/upload/images/bf4d223388d40c2c7abf698447c6960c.jpeg"
                                width="40" class="mr-2 mr-md-4">
                            <div class="mr-2">Qty 1
                            </div>
                            <div class="flex-grow text-wrap">
                                <strong>Blue</strong> Plan w/
                                <strong>MOFI SIM4 Router (Blue)</strong>
                                <br>$249.00 One-Time <span class="d-none d-md-inline">Member Registration</span> Fee +
                                <br class="d-lg-none">$199.00 First Month’s <span
                                    class="d-none d-md-inline">Membership</span> Prepayment
                            </div>
                            <div class="text-md-right justify-self-end font-weight-bold ml-md-4">$448.00</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white smaller text-center p-1 mb-5">
                    <div class="text-gray-600 text-uppercase font-weight-600">Subtotal: $448.00</div>
                    <!---->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card card-body p-5">
                                <h4 class="text-center mb-5"><i class="far fa-map-marker"></i>&nbsp;&nbsp;Shipping
                                    Address</h4>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="shipping.first_name" class="sr-only">First
                                                Name</label> <input type="text" name="shipping.first_name"
                                                id="shipping.first_name" placeholder="First Name"
                                                autofill="shipping given-name" required="required"
                                                class="form-control form-control-lg"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="shipping.last_name" class="sr-only">Last
                                                Name</label> <input type="text" name="shipping.last_name"
                                                id="shipping.last_name" placeholder="Last Name"
                                                autofill="shipping family-name" required="required"
                                                class="form-control form-control-lg"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="shipping.address_1" class="sr-only">Address Line
                                        1</label> <input type="text" name="shipping.address_1" id="shipping.address_1"
                                        placeholder="Address Line 1" autofill="shipping address-line1"
                                        required="required" class="form-control form-control-lg"> <small
                                        class="form-text text-danger" style="display: none;"></small></div>
                                <div class="form-group"><label for="shipping.address_2" class="sr-only">Address Line
                                        2</label> <input type="text" name="shipping.address_2" id="shipping.address_2"
                                        placeholder="Address Line 2" autofill="shipping address-line2"
                                        class="form-control form-control-lg"> <small class="form-text text-danger"
                                        style="display: none;"></small></div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="shipping.city" class="sr-only">City</label>
                                            <input type="text" name="shipping.city" id="shipping.city"
                                                placeholder="City" autofill="shipping address-level2"
                                                required="required" class="form-control form-control-lg"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="shipping.state"
                                                class="sr-only">State</label> <select name="shipping.state"
                                                id="shipping.state" autofill="shipping address-level1"
                                                required="required" class="form-control form-control-lg">
                                                <option value="" disabled="disabled">State…</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select> <small class="form-text text-danger"
                                                style="display: none;"></small></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="shipping.zip" class="sr-only">ZIP</label>
                                            <input type="text" name="shipping.zip" id="shipping.zip" placeholder="ZIP"
                                                autofill="shipping postal-code" required="required"
                                                class="form-control form-control-lg"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="phone" class="sr-only">Phone</label> <input
                                                type="tel" name="phone" id="phone" placeholder="Phone" autofill="tel"
                                                required="required" class="form-control form-control-lg"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="email" class="sr-only">Email</label> <input
                                                type="email" name="email" id="email" placeholder="Email"
                                                autofill="email" required="required"
                                                class="form-control form-control-lg"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mt-5 mt-lg-0">
                            <div class="card card-body p-5">
                                <h4 class="text-center mb-5"><i class="far fa-map-marker"></i>&nbsp;&nbsp;Billing
                                    Address</h4>
                                <div class="form-check mx-auto py-3 mb-2"><input type="checkbox" name="use_shipping"
                                        id="use_shipping" value="1" class="form-check-input" checked="true"> <label for="use_shipping"
                                        class="form-check-label">
                                        Same As Shipping
                                    </label></div> <small class="form-text text-danger" style="display: none;"></small>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="billing.first_name" class="sr-only">First
                                                Name</label> <input type="text" name="billing.first_name"
                                                id="billing.first_name" placeholder="First Name"
                                                autofill="billing given-name" required="required" disabled="disabled"
                                                class="form-control form-control-lg billinginfo"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="billing.last_name" class="sr-only">Last
                                                Name</label> <input type="text" name="billing.last_name"
                                                id="billing.last_name" placeholder="Last Name"
                                                autofill="billing family-name" required="required" disabled="disabled"
                                                class="form-control form-control-lg billinginfo"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="billing.address_1" class="sr-only">Address Line
                                        1</label> <input type="text" name="billing.address_1" id="billing.address_1"
                                        placeholder="Address Line 1" autofill="billing address-line1"
                                        required="required" disabled="disabled" class="form-control form-control-lg billinginfo">
                                    <small class="form-text text-danger" style="display: none;"></small></div>
                                <div class="form-group"><label for="billing.address_2" class="sr-only">Address Line
                                        2</label> <input type="text" name="billing.address_2" id="billing.address_2"
                                        placeholder="Address Line 2" autofill="billing address-line2"
                                        disabled="disabled" class="form-control form-control-lg billinginfo"> <small
                                        class="form-text text-danger" style="display: none;"></small></div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="billing.city" class="sr-only">City</label>
                                            <input type="text" name="billing.city" id="billing.city" placeholder="City"
                                                autofill="billing address-level2" required="required"
                                                disabled="disabled" class="form-control form-control-lg billinginfo"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="billing.state" class="sr-only">State</label>
                                            <select name="billing.state" id="billing.state"
                                                autofill="billing address-level1" required="required"
                                                disabled="disabled" class="form-control form-control-lg billinginfo">
                                                <option value="" disabled="disabled">State…</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select> <small class="form-text text-danger"
                                                style="display: none;"></small></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="billing.zip" class="sr-only">ZIP</label>
                                            <input type="text" name="billing.zip" id="billing.zip" placeholder="ZIP"
                                                autofill="billing postal-code" required="required" disabled="disabled"
                                                class="form-control form-control-lg billinginfo"> <small
                                                class="form-text text-danger" style="display: none;"></small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body p-5 mt-5">
                        <h4 class="text-center mb-5"><i class="far fa-truck"></i>&nbsp;&nbsp;Shipping Method</h4>
                        <p class="smaller text-muted text-center mx-auto mb-5" style="max-width: 500px;">Orders for
                            in-stock items placed before 11:00 a.m. CDT Mon-Fri will ship the same day. Orders placed
                            after 11:00 a.m. CDT will ship the next business day. USPS Express is guaranteed 1-2
                            business days if placed before 11:00 a.m. CDT Mon–Fri.
                        </p>
                        <!---->
                        <div class="text-center">
                            <!---->
                            <div class="text-gray-500 smaller">Please provide a complete shipping address.</div> <button
                                disabled="disabled" class="btn btn-outline-dark btn-lg"><i
                                    class="fa fa-sync-alt"></i>&nbsp;&nbsp;Calculate Shipping</button>
                        </div>
                    </div>
                    <div style="display: none;">
                        <div class="card card-body py-5 mt-5">
                            <h4 class="text-center mb-5"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Payment Info</h4>
                            <div class="form-row">
                                <div class="col-md-5">
                                    <div class="form-group"><label for="card_number" class="sr-only">Card Number</label>
                                        <input type="text" name="card_number" id="card_number" placeholder="Card Number"
                                            required="required" autocomplete="cc-number"
                                            class="form-control form-control-lg"> <small
                                            class="form-text text-danger d-none" style="display: none;"></small></div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group"><label for="exp_month" class="sr-only">Card Expiration
                                            Month</label> <select name="exp_month" id="exp_month"
                                            autocomplete="cc-exp-month" class="form-control form-control-lg">
                                            <option value="" disabled="disabled">Month</option>
                                            <option value="01">January (01)</option>
                                            <option value="02">February (02)</option>
                                            <option value="03">March (03)</option>
                                            <option value="04">April (04)</option>
                                            <option value="05">May (05)</option>
                                            <option value="06">June (06)</option>
                                            <option value="07">July (07)</option>
                                            <option value="08">August (08)</option>
                                            <option value="09">September (09)</option>
                                            <option value="10">October (10)</option>
                                            <option value="11">November (11)</option>
                                            <option value="12">December (12)</option>
                                        </select> <small class="form-text text-danger" style="display: none;"></small>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group"><label for="exp_year" class="sr-only">Card Expiration
                                            Year</label> <select name="exp_year" id="exp_year"
                                            autocomplete="cc-exp-year" class="form-control form-control-lg">
                                            <option value="" disabled="disabled">Year</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select> <small class="form-text text-danger" style="display: none;"></small>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group"><label for="cvv" class="sr-only">CVV</label> <input
                                            type="text" name="cvv" id="cvv" placeholder="Security Code"
                                            required="required" autocomplete="cc-csc"
                                            class="form-control form-control-lg"> <small class="form-text text-danger"
                                            style="display: none;"></small></div>
                                </div>
                            </div>
                            <div class="text-center text-muted smaller"><i
                                    class="fa fa-lock"></i>&nbsp;&nbsp;Transactions are secure and encrypted.</div>
                        </div>
                        <div class="mt-5 mx-auto" style="max-width: 500px;">
                            <div class="form-check"><input type="checkbox" name="terms" id="terms" value="1"
                                    class="form-check-input"> <label for="terms" class="form-check-label">
                                    I have read and agree to the Unlimitedville <a href="/terms" target="_blank">terms
                                        of service</a> and agree to uphold such terms until the termination of
                                    membership.
                                </label> <small class="form-text text-danger" style="display: none;"></small></div>
                        </div>
                        <div class="alert alert-danger my-4 mx-auto" style="max-width: 500px; display: none;">
                            <ul class="list-unstyled mb-0 text-center"></ul>
                        </div>
                        <div class="mt-5 text-center"><button type="submit" class="btn-lg btn btn-primary"
                                disabled="disabled">
                                <!---->
                                Submit Order ($448.00)
                                <span>&nbsp;<i class="fa-fw fas fa-angle-right"></i></span></button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@stop
