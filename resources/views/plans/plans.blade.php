@extends('layouts.default')
@section('content')

<div class="page-content ">
    <header class="page-header bg-gray-900 text-light bg-cover bg-bottom bg-fixed clip-arrow"
        style="background-image: url(/images/bg/stars.jpg);">
        <div class="container">
            <div class="icon mb-4">
                <img alt="Network" src="/svg/network-inverted.svg" width="30" />
            </div>
            <h1 class="mb-4 pageTitle">Membership Plans.</h1>
            <p class="subhead mx-auto" style="max-width: 680px">
                Browse below to find the coverage plan that best fits you.
            </p>
            <p class="subhead mx-auto" style="max-width: 680px">
                Unsure of which plan is best at your address? Let us <a class="modal-link"
                    href="/plan-lookup-request-modal" data-modal-width="800">recommend the right plan for you</a>.
            </p>
        </div>
    </header>
    <div class="container" id="plans">
        <div class="row plans-row">
            <div class="col-lg-6">
                <!-- <plan-listing pink
                    :plan="{&quot;id&quot;:3,&quot;name&quot;:&quot;Pink&quot;,&quot;price&quot;:&quot;149.00&quot;,&quot;coverage_map&quot;:&quot;https:\/\/www.t-mobile.com\/coverage-map.html&quot;,&quot;unavailable&quot;:false,&quot;available_exclusive&quot;:true,&quot;products&quot;:[{&quot;id&quot;:9,&quot;model&quot;:&quot;MOFI SIM4 Router (Pink)&quot;,&quot;price&quot;:&quot;249.00&quot;,&quot;accept_backorders&quot;:true,&quot;backorder_message&quot;:null,&quot;image_uri&quot;:&quot;https:\/\/res.cloudinary.com\/unlimitedville\/image\/upload\/images\/bf4d223388d40c2c7abf698447c6960c.jpeg&quot;,&quot;backordered&quot;:false,&quot;date_available&quot;:null}]}"
                    :is-exclusive="false"
                    :ordering-disabled="false"
                ></plan-listing> -->
                <div class="plan-listing card border border-plan-pink">
                    <form>
                        <csrf-field></csrf-field>
                        <div class="p-5 text-center text-light bg-plan-pink">
                            <h3><i class="fa fa-signal"></i>&nbsp;
                                <strong class="font-weight-600">Pink</strong> Plan
                            </h3>
                        </div>
                        <div class="card-body p-5 p-md-6 p-lg-5 py-xl-6">
                            <div class="product row">
                                <div class="col-md">
                                    <div class="px-2 px-lg-0"><img alt="Product Image"
                                            src="https://res.cloudinary.com/unlimitedville/image/upload/images/bf4d223388d40c2c7abf698447c6960c.jpeg"
                                            class="product-image img-fluid" data-nsfw-filter-status="sfw"
                                            style="visibility: visible;"></div>
                                </div>
                                <div class="col-md d-flex flex-column justify-content-between text-center">
                                    <div>
                                        <div class="price"><sup>$</sup> <strong>149</strong> <span
                                                data-nsfw-filter-status="swf">/mo</span></div>
                                        <div class="fee text-nowrap">
                                            +
                                            <strong>$249</strong> One-Time
                                            Membership Fee
                                            <a href="/membership-fee-modal" class="modal-link"
                                                data-nsfw-filter-status="swf"><i class="fa fa-question-circle"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div><label for="product_id" class="sr-only">Product</label>
                                            <div><span class="text-gray-400 smaller text-uppercase"
                                                    data-nsfw-filter-status="swf">Hardware:</span><br>
                                                MOFI SIM4 Router (Pink)
                                            </div> <small class="form-text text-danger" style="display: none;"></small>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="features row mt-4">
                                <div class="col-md">
                                    <ul class="list-unstyled mb-0 border-top">
                                        <li><i class="fa fa-check text-primary"></i> Unlimited 4G LTE</li>
                                        <li><i class="fa fa-check text-primary"></i> No Data Limit</li>
                                        <li><i class="fa fa-check text-primary"></i> No Throttling</li>
                                    </ul>
                                </div>
                                <div class="col-md">
                                    <ul class="list-unstyled column-collapse">
                                        <li><i class="fa fa-check text-primary"></i> No Contract</li>
                                        <li><i class="fa fa-check text-primary"></i> No Credit Check</li>
                                        <li><i class="fa fa-check text-primary"></i> <a href="/guarantee-modal"
                                                class="text-400 modal-link" data-nsfw-filter-status="swf">14-Day No
                                                Risk</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alert alert-danger" style="display: none;">
                                <ul class="mb-0"></ul>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md col-lg-12 col-xl"><a
                                        href="https://href.li/?https://www.t-mobile.com/coverage-map.html"
                                        target="_blank" class="btn btn-lg btn-block btn-outline-plan-pink"
                                        data-nsfw-filter-status="swf"><i class="fa fa-signal"></i>&nbsp;&nbsp;Plan
                                        Coverage
                                    </a></div>
                                <div class="col-md col-lg-12 col-xl mt-4 mt-md-0 mt-lg-4 mt-xl-0">
                                    <!-- <submit-button data-icon="fas fa-shopping-cart" data-icon-position="left"
                                        class="btn-lg btn-block">Choose Plan</submit-button> -->
                                    <button type="submit" class="addcart btn-lg btn-block btn btn-primary"><span
                                            data-nsfw-filter-status="swf"><i
                                                class="fa-fw fas fa-shopping-cart"></i>&nbsp;</span> Choose Plan
                                    </button>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </form>
                    <div tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                        class="modal fade">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center bg-warning">
                                    <h4 class="modal-title"><i class="far fa-truck"></i>&nbsp;&nbsp;Shipping Notice
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p class="font-weight-600 text-center" data-nsfw-filter-status="swf"><span
                                            data-nsfw-filter-status="swf">Due to the COVID-19 pandemic, this item is
                                            currently on backorder</span>
                                        <!---->.
                                    </p>
                                    <p data-nsfw-filter-status="swf">
                                        If you choose to continue placing an order for this product, you
                                        will be charged at checkout and once in stock, your order will be
                                        fulfilled in the order it was received. Both your first month of
                                        service and 14-Day Risk-Free period will begin when you receive
                                        the device.
                                    </p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary"><i
                                            class="fas fa-angle-left"></i>&nbsp;&nbsp;Back to Plans
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Continue Order&nbsp;&nbsp;<i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <plan-listing red
                    :plan="{&quot;id&quot;:4,&quot;name&quot;:&quot;Red&quot;,&quot;price&quot;:&quot;249.00&quot;,&quot;coverage_map&quot;:&quot;http:\/\/verizon.cellmaps.com&quot;,&quot;unavailable&quot;:true,&quot;available_exclusive&quot;:true,&quot;products&quot;:[{&quot;id&quot;:8,&quot;model&quot;:&quot;MOFI SIM4 Router (Red)&quot;,&quot;price&quot;:&quot;249.00&quot;,&quot;accept_backorders&quot;:true,&quot;backorder_message&quot;:null,&quot;image_uri&quot;:&quot;https:\/\/res.cloudinary.com\/unlimitedville\/image\/upload\/images\/bf4d223388d40c2c7abf698447c6960c.jpeg&quot;,&quot;backordered&quot;:true,&quot;date_available&quot;:&quot;July 15th&quot;}]}"
                    :is-exclusive="false" :ordering-disabled="false"></plan-listing> -->
                <div class="plan-listing card border border-plan-red">
                    <form>
                        <csrf-field></csrf-field>
                        <div class="p-5 text-center text-light bg-plan-red">
                            <h3><i class="fa fa-signal"></i>&nbsp;
                                <strong class="font-weight-600">Red</strong> Plan
                            </h3>
                        </div>
                        <div class="card-body p-5 p-md-6 p-lg-5 py-xl-6">
                            <div class="product row">
                                <div class="col-md">
                                    <div class="px-2 px-lg-0"><img alt="Product Image"
                                            src="https://res.cloudinary.com/unlimitedville/image/upload/images/bf4d223388d40c2c7abf698447c6960c.jpeg"
                                            class="product-image img-fluid" data-nsfw-filter-status="sfw"
                                            style="visibility: visible;"></div>
                                </div>
                                <div class="col-md d-flex flex-column justify-content-between text-center">
                                    <div>
                                        <div class="price"><sup>$</sup> <strong>249</strong> <span
                                                data-nsfw-filter-status="swf">/mo</span></div>
                                        <div class="fee text-nowrap">
                                            +
                                            <strong>$249</strong> One-Time
                                            Membership Fee
                                            <a href="/membership-fee-modal" class="modal-link"
                                                data-nsfw-filter-status="swf"><i class="fa fa-question-circle"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div><label for="product_id" class="sr-only">Product</label>
                                            <div><span class="text-gray-400 smaller text-uppercase"
                                                    data-nsfw-filter-status="swf">Hardware:</span><br>
                                                MOFI SIM4 Router (Red)
                                            </div> <small class="form-text text-danger" style="display: none;"></small>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="features row mt-4">
                                <div class="col-md">
                                    <ul class="list-unstyled mb-0 border-top">
                                        <li><i class="fa fa-check text-primary"></i> Unlimited 4G LTE</li>
                                        <li><i class="fa fa-check text-primary"></i> No Data Limit</li>
                                        <li><i class="fa fa-check text-primary"></i> No Throttling</li>
                                    </ul>
                                </div>
                                <div class="col-md">
                                    <ul class="list-unstyled column-collapse">
                                        <li><i class="fa fa-check text-primary"></i> No Contract</li>
                                        <li><i class="fa fa-check text-primary"></i> No Credit Check</li>
                                        <li><i class="fa fa-check text-primary"></i> <a href="/guarantee-modal"
                                                class="text-400 modal-link" data-nsfw-filter-status="swf">14-Day No
                                                Risk</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alert alert-danger" style="display: none;">
                                <ul class="mb-0"></ul>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md col-lg-12 col-xl"><a
                                        href="https://href.li/?http://verizon.cellmaps.com" target="_blank"
                                        class="btn btn-lg btn-block btn-outline-plan-red"
                                        data-nsfw-filter-status="swf"><i class="fa fa-signal"></i>&nbsp;&nbsp;Plan
                                        Coverage
                                    </a></div>
                                <div class="col-md col-lg-12 col-xl mt-4 mt-md-0 mt-lg-4 mt-xl-0"><a disabled="disabled"
                                        href="javascript:;" class="btn btn-lg btn-block btn-primary disabled"
                                        data-nsfw-filter-status="swf"><i
                                            class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Unavailable</a></div>
                            </div>
                            <!---->
                        </div>
                    </form>
                    <div tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                        class="modal fade">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center bg-warning">
                                    <h4 class="modal-title"><i class="far fa-truck"></i>&nbsp;&nbsp;Shipping Notice
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p class="font-weight-600 text-center" data-nsfw-filter-status="swf"><span
                                            data-nsfw-filter-status="swf">Due to the COVID-19 pandemic, this item is
                                            currently on backorder</span><span data-nsfw-filter-status="swf">
                                            and is now expected to ship on<br><strong class="text-danger">
                                                July 15th</strong></span>.
                                    </p>
                                    <p data-nsfw-filter-status="swf">
                                        If you choose to continue placing an order for this product, you
                                        will be charged at checkout and once in stock, your order will be
                                        fulfilled in the order it was received. Both your first month of
                                        service and 14-Day Risk-Free period will begin when you receive
                                        the device.
                                    </p>
                                </div>
                                <div class="modal-footer justify-content-center"><button type="button"
                                        data-dismiss="modal" class="btn btn-outline-secondary"><i
                                            class="fas fa-angle-left"></i>&nbsp;&nbsp;Back to Plans
                                    </button> <button type="button" class="btn btn-primary">
                                        Continue Order&nbsp;&nbsp;<i class="fas fa-angle-right"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <plan-listing blue
                    :plan="{&quot;id&quot;:1,&quot;name&quot;:&quot;Blue&quot;,&quot;price&quot;:&quot;199.00&quot;,&quot;coverage_map&quot;:&quot;https:\/\/www.att.com\/maps\/wireless-coverage.html&quot;,&quot;unavailable&quot;:false,&quot;available_exclusive&quot;:true,&quot;products&quot;:[{&quot;id&quot;:10,&quot;model&quot;:&quot;MOFI SIM4 Router (Blue)&quot;,&quot;price&quot;:&quot;249.00&quot;,&quot;accept_backorders&quot;:true,&quot;backorder_message&quot;:null,&quot;image_uri&quot;:&quot;https:\/\/res.cloudinary.com\/unlimitedville\/image\/upload\/images\/bf4d223388d40c2c7abf698447c6960c.jpeg&quot;,&quot;backordered&quot;:true,&quot;date_available&quot;:&quot;June 28th&quot;}]}"
                    :is-exclusive="false" :ordering-disabled="false"></plan-listing> -->
                <div class="plan-listing card border border-plan-blue">
                    <form>
                        <csrf-field></csrf-field>
                        <div class="p-5 text-center text-light bg-plan-blue">
                            <h3><i class="fa fa-signal"></i>&nbsp;
                                <strong class="font-weight-600">Blue</strong> Plan
                            </h3>
                        </div>
                        <div class="card-body p-5 p-md-6 p-lg-5 py-xl-6">
                            <div class="product row">
                                <div class="col-md">
                                    <div class="px-2 px-lg-0"><img alt="Product Image"
                                            src="https://res.cloudinary.com/unlimitedville/image/upload/images/bf4d223388d40c2c7abf698447c6960c.jpeg"
                                            class="product-image img-fluid" data-nsfw-filter-status="sfw"
                                            style="visibility: visible;"></div>
                                </div>
                                <div class="col-md d-flex flex-column justify-content-between text-center">
                                    <div>
                                        <div class="price"><sup>$</sup> <strong>199</strong> <span
                                                data-nsfw-filter-status="swf">/mo</span></div>
                                        <div class="fee text-nowrap">
                                            +
                                            <strong>$249</strong> One-Time
                                            Membership Fee
                                            <a href="/membership-fee-modal" class="modal-link"
                                                data-nsfw-filter-status="swf"><i class="fa fa-question-circle"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div><label for="product_id" class="sr-only">Product</label>
                                            <div><span class="text-gray-400 smaller text-uppercase"
                                                    data-nsfw-filter-status="swf">Hardware:</span><br>
                                                MOFI SIM4 Router (Blue)
                                            </div> <small class="form-text text-danger" style="display: none;"></small>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="features row mt-4">
                                <div class="col-md">
                                    <ul class="list-unstyled mb-0 border-top">
                                        <li><i class="fa fa-check text-primary"></i> Unlimited 4G LTE</li>
                                        <li><i class="fa fa-check text-primary"></i> No Data Limit</li>
                                        <li><i class="fa fa-check text-primary"></i> No Throttling</li>
                                    </ul>
                                </div>
                                <div class="col-md">
                                    <ul class="list-unstyled column-collapse">
                                        <li><i class="fa fa-check text-primary"></i> No Contract</li>
                                        <li><i class="fa fa-check text-primary"></i> No Credit Check</li>
                                        <li><i class="fa fa-check text-primary"></i> <a href="/guarantee-modal"
                                                class="text-400 modal-link" data-nsfw-filter-status="swf">14-Day No
                                                Risk</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alert alert-danger" style="display: none;">
                                <ul class="mb-0"></ul>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md col-lg-12 col-xl"><a
                                        href="https://href.li/?https://www.att.com/maps/wireless-coverage.html"
                                        target="_blank" class="btn btn-lg btn-block btn-outline-plan-blue"
                                        data-nsfw-filter-status="swf"><i class="fa fa-signal"></i>&nbsp;&nbsp;Plan
                                        Coverage
                                    </a></div>
                                <div class="col-md col-lg-12 col-xl mt-4 mt-md-0 mt-lg-4 mt-xl-0">
                                    <!-- <submit-button data-icon="fas fa-shopping-cart" data-icon-position="left"
                                        class="btn-lg btn-block">Choose Plan</submit-button> -->
                                    <button level="medium" type="submit"
                                        class="backorder btn-lg btn-block btn btn-primary"><span
                                            data-nsfw-filter-status="swf"><i
                                                class="fa-fw fas fa-shopping-cart"></i>&nbsp;</span> Choose Plan
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                    <div tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                        class="backorder modal fade">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center bg-warning">
                                    <h4 class="modal-title"><i class="far fa-truck"></i>&nbsp;&nbsp;Shipping Notice
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <p class="font-weight-600 text-center" data-nsfw-filter-status="swf"><span
                                            data-nsfw-filter-status="swf">Due to the COVID-19 pandemic, this item is
                                            currently on backorder</span><span data-nsfw-filter-status="swf">
                                            and is now expected to ship on<br><strong class="text-danger">
                                                June 28th</strong></span>.
                                    </p>
                                    <p data-nsfw-filter-status="swf">
                                        If you choose to continue placing an order for this product, you
                                        will be charged at checkout and once in stock, your order will be
                                        fulfilled in the order it was received. Both your first month of
                                        service and 14-Day Risk-Free period will begin when you receive
                                        the device.
                                    </p>
                                </div>
                                <div class="modal-footer justify-content-center"><button type="button"
                                        data-dismiss="modal" class="btn btn-outline-secondary"><i
                                            class="fas fa-angle-left"></i>&nbsp;&nbsp;Back to Plans
                                    </button> <button type="button" class="addcart btn btn-primary">
                                        Continue Order&nbsp;&nbsp;<i class="fas fa-angle-right"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="col-lg-6">
                <div class="h-100" style="padding-bottom: 72px;">
                    <div class="card border h-100 border-gray-400">
                        <div class="card-body p-6" style="font-size: 0.9rem">
                            <h3 class="text-no-transform mb-3"><i class="fal fa-signal"></i>&nbsp;&nbsp;Which Plan Is
                                Right for Me?</h3>
                            <p class="text-justify text-hyphenate">Each color represents one of the three major cellular
                                carrier networks. Therefore, the primary difference between each plan is the coverage
                                each network provides. View each of our plans’ coverage to identify which is most likely
                                to work at your usage location(s). Start with the lowest cost option first. For help
                                with selecting a plan, visit the
                                <a class="modal-link text-400" data-break-point="1200" data-modal-width="1200"
                                    href="/help-me-choose-modal">
                                    Help Me Choose
                                </a>
                                page.
                            </p>

                            <h3 class="text-no-transform mt-6 mb-3"><i class="fal fa-undo-alt"></i>&nbsp;&nbsp;What if
                                It Doesn’t Work for Me?</h3>
                            <p class="text-justify text-hyphenate mb-0">If the plan you initially choose does not
                                connect or is slower than expected, this most likely means a lack of LTE
                                coverage/reception at your location, or less commonly, the cellular tower your device is
                                connecting to is either using outdated antennas or is congested from high usage in your
                                area. Regardless of the reason, our <a class="modal-link" href="/guarantee-modal">14-Day
                                    No-Risk Return Policy</a> has you completely covered. Simply return your device for
                                a 100% refund and let us help you choose another plan that’s right for you!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-primary py-6 px-4 text-center mb-6">
            <p class="h2">Unsure of which plan is best at your&nbsp;address?</p>
            <p class="h2 text-primary">Let us recommend the right plan&nbsp;for&nbsp;you.</p>
            <div class="mt-5">
                <a class="btn btn-primary btn-lg modal-link" href="/plan-lookup-request-modal" data-modal-width=800>
                    <i class="far fa-home"></i>&nbsp;&nbsp;Address Lookup Request
                </a>
            </div>
        </div>
    </div>
</div>
@stop