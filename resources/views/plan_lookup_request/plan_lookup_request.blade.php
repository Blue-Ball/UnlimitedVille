@extends('layouts.default')
@section('content')
<section class="bg-gray-100 py-5">
    <div class="container">
        <h3 class="text-center mb-4"><i class="far fa-home"></i>&nbsp;&nbsp;Address Lookup Request</h3>
        <div>
            <form>
                <p><strong>Unsure of which plan is best at your address?</strong> Fill out
                    the form below and let our in-house team of experts recommend the right
                    plan for you! We will analyze the connectivity at your location and
                    respond within one business day.
                </p>
                <div class="form-row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="first_name" class="sr-only">First Name</label> <input
                                type="text" name="first_name" id="first_name" placeholder="First Name"
                                required="required" class="form-control"> <small class="form-text text-danger"
                                style="display: none;"></small></div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="email" class="sr-only">Email</label> <input type="email"
                                name="email" id="email" placeholder="Email" required="required" class="form-control">
                            <small class="form-text text-danger" style="display: none;"></small></div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="address.address" class="sr-only">Street Address</label> <input
                            type="text" name="address.address" id="address.address" placeholder="Street Address"
                            required="required" class="form-control"> <small class="form-text text-danger"
                            style="display: none;"></small></div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="address.city" class="sr-only">City</label> <input
                            type="text" name="address.city" id="address.city" placeholder="City" required="required"
                            class="form-control"> <small class="form-text text-danger"
                            style="display: none;"></small></div>
                    </div>
                    <div class="col-md-3"></div>
                </div>                
                <div class="form-row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address.state" class="sr-only">State</label> 
                            <select
                                    name="address.state" id="address.state" required="required" class="form-control">
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
                            </select> 
                            <small class="form-text text-danger" style="display: none;"></small>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="form-row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="address.zip" class="sr-only">ZIP</label> <input type="text"
                                    name="address.zip" id="address.zip" placeholder="ZIP" required="required"
                                    class="form-control"> <small class="form-text text-danger"
                                    style="display: none;"></small></div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
                <div class="alert alert-danger" style="display: none;">
                    <ul class="mb-0"></ul>
                </div>
                <div class="mt-4 text-center"><button type="submit" class="btn btn-primary">
                        <!----> Submit <span>&nbsp;<i class="fa-fw fas fa-angle-right"></i></span></button></div>
                <div class="smaller text-center mt-4">
                    Unlimitedville values your privacy. Your information will not be shared.
                </div>
            </form>
        </div>
        <div class="text-center mt-5"><a href="https://unlimitedville.com/plans" class="btn btn-outline-secondary"><i
                    class="fa fa-angle-left"></i>&nbsp;&nbsp;Back to Plans</a></div>
    </div>
</section>
@stop
