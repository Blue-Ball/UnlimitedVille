@extends('layouts.default')
@section('content')
<div class="page-content bg-gray-100">
    <section class="py-6">
        <div class="container">
            <!-- <shopping-cart :initial-cart="{&quot;items&quot;:[{&quot;id&quot;:9,&quot;model&quot;:&quot;MOFI SIM4 Router (Pink)&quot;,&quot;price&quot;:&quot;249.00&quot;,&quot;accept_backorders&quot;:true,&quot;backorder_message&quot;:null,&quot;image_uri&quot;:&quot;https:\/\/res.cloudinary.com\/unlimitedville\/image\/upload\/images\/bf4d223388d40c2c7abf698447c6960c.jpeg&quot;,&quot;backordered&quot;:false,&quot;date_available&quot;:null,&quot;plan&quot;:{&quot;id&quot;:3,&quot;name&quot;:&quot;Pink&quot;,&quot;price&quot;:&quot;149.00&quot;,&quot;coverage_map&quot;:&quot;https:\/\/www.t-mobile.com\/coverage-map.html&quot;,&quot;unavailable&quot;:false,&quot;available_exclusive&quot;:true},&quot;qty&quot;:1}],&quot;subtotal&quot;:398,&quot;discount_code&quot;:null,&quot;item_count&quot;:1,&quot;rates&quot;:[],&quot;shipping&quot;:null,&quot;customer&quot;:null,&quot;selected_rate_id&quot;:null}"></shopping-cart> -->
            <div class="card border-0">
                <div class="card-body px-5 py-6">
                    <div class="mb-5 text-center d-lg-none"><a href="/checkout" class="btn btn-outline-primary"
                            data-nsfw-filter-status="swf">Checkout&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="position-absolute d-none d-lg-block" style="right: 30px;"><a href="/checkout"
                            class="btn btn-outline-primary" data-nsfw-filter-status="swf">Checkout&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i></a></div>
                    <h1 class="text-center mb-6 text-uppercase"><i class="fal fa-shopping-cart"></i>&nbsp;&nbsp;Your
                        Cart</h1>
                    <div class="position-relative table-responsive">
                        <div class="ajax-overlay" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
                        <table class="cart table">
                            <thead>
                                <tr class="text-center">
                                    <th>Remove</th>
                                    <th class="text-left">Description</th>
                                    <th>Price</th>
                                    <th class="d-none d-lg-table-cell">Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3" class="align-middle text-center d-none d-lg-table-cell"><a
                                            href="javascript:;" class="text-dark" data-nsfw-filter-status="swf"><i
                                                class="far fa-lg fa-times"></i></a></td>
                                    <td class="pt-5">
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="far fa-fw fa-sync-alt"></i>&nbsp;&nbsp;Membership Plan:
                                                <strong>Pink</strong></li>
                                            <li><i class="far fa-fw fa-mobile-alt"></i>&nbsp;&nbsp;Included Device:
                                                <strong>MOFI SIM4 Router (Pink)</strong>
                                                <!---->
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="spacer">&nbsp;</td>
                                    <td class="text-center align-middle py-3"><span class="d-lg-none"
                                            data-nsfw-filter-status="swf">Qty: </span> <select
                                            class="form-control mx-auto">
                                            <option>1</option>
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
                                            <option>35</option>
                                            <option>36</option>
                                            <option>37</option>
                                            <option>38</option>
                                            <option>39</option>
                                            <option>40</option>
                                            <option>41</option>
                                            <option>42</option>
                                            <option>43</option>
                                            <option>44</option>
                                            <option>45</option>
                                            <option>46</option>
                                            <option>47</option>
                                            <option>48</option>
                                            <option>49</option>
                                            <option>50</option>
                                        </select></td>
                                    <td class="spacer">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th>
                                        One-Time Member Registration Fee&nbsp;
                                        <a href="/membership-fee" class="modal-link" data-nsfw-filter-status="swf"><i
                                                class="fa fa-question-circle"></i></a></th>
                                    <td class="text-center">
                                        $249.00/one-time
                                        <span class="d-lg-none" data-nsfw-filter-status="swf">(Qty: <span class="qty"
                                                data-nsfw-filter-status="swf">2</span>)</span></td>
                                    <td class="text-center d-none d-lg-table-cell"><span class="qty"
                                            data-nsfw-filter-status="swf">2</span></td>
                                    <td class="text-center"><span class="d-lg-none" data-nsfw-filter-status="swf">Total:
                                        </span>$498.00
                                    </td>
                                </tr>
                                <tr>
                                    <th class="pb-5">First Month’s Membership Prepayment
                                        <div class="disclaimer">*Your monthly membership prepayment will automatically
                                            be charged each month hereafter via the payment method provided below until
                                            membership is canceled. When becoming a member you are responsible for
                                            paying for your first month of service as well as a One-Time membership fee
                                            that covers the administration of your account. You may of course cancel
                                            your subscription with us at anytime by simply returning your device.</div>
                                    </th>
                                    <td class="text-center">$149.00/monthly
                                        <span class="d-lg-none" data-nsfw-filter-status="swf"> (Qty: 2)</span></td>
                                    <td class="text-center d-none d-lg-table-cell">
                                        2
                                    </td>
                                    <td class="text-center"><span class="d-lg-none" data-nsfw-filter-status="swf">Total:
                                        </span>$298.00
                                    </td>
                                </tr>
                                <tr class="d-lg-none">
                                    <td colspan="4">
                                        <div class="p-4"><button class="btn btn-outline-dark"><i
                                                    class="fa fa-times"></i>&nbsp;&nbsp;Remove Plan</button></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center py-5"><a href="/plans"
                            data-nsfw-filter-status="swf"><i class="far fa-angle-left"></i>&nbsp;&nbsp;Continue
                            Shopping</a>
                        <div>
                            <div><strong>Subtotal: $796.00</strong></div>
                            <div class="text-success" style="display: none;"><i
                                    class="fa fa-check-circle"></i>&nbsp;&nbsp;Code Applied!</div>
                        </div>
                    </div>
                    <div class="border-top border-bottom border-gray-500 py-5">
                        <div class="row">
                            <div class="col-lg-7 guarantee">
                                <h4>14-Day Money Back Guarantee</h4>
                                <p data-nsfw-filter-status="swf">Each membership includes 14 days from the date of
                                    RECEIPT OF HOTSPOT to test out the device and service at no risk. If the device or
                                    service does not meet your expectations and you would like a full refund for both
                                    the One-Time Membership Fee and the First Month’s Membership Pre-Payment, the device
                                    must be shipped back within 14 days from the date at which you received it. Devices
                                    returned after this period will not be entitled to a refund for either the One-Time
                                    Membership Fee or any Monthly Membership Prepayments.</p>
                            </div>
                            <div class="col-lg d-flex align-items-center justify-content-end">
                                <div>
                                    <div class="d-flex">
                                        <!----> <label for="discount_code" class="sr-only">Code</label> <input
                                            type="text" name="discount_code" id="discount_code"
                                            placeholder="Referral/Promo Code" class="form-control form-control-lg">
                                        <button class="btn btn-outline-dark btn-lg ml-1">Apply</button></div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 text-center"><a href="/checkout" class="btn btn-primary btn-lg"
                            data-nsfw-filter-status="swf">Proceed to Checkout&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i></a></div>
                </div>
                <div class="v-portal" style="display: none;"></div>
            </div>
        </div>
    </section>
</div>
@stop
