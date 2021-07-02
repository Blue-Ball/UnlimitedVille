<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- App Metadata -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="eHJ1jMagWSM79uzObaMMzGV1KhZc436u3qR45P7I">
    <meta name="stripe-key" content="">

    <!-- Page Metadata -->
    <title>Welcome | Unlimitedville</title>
    <meta name="description"
        content="Welcome to Unlimitedville, your home for mobile high-speed Internet. No contracts. No credit checks. No data limits. No throttling. 14-day money-back guarantee.">

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Scripts -->
</head>

<body class="home" id="">
    <div class="page-wrap " id="app">

        <!-- Header -->
        <header class="globalheader">

            <nav class="small-device navbar d-lg-none bg-white navbar-light px-0">
                <button class="hamburger-menu bg-white" type="button" data-toggle="collapse" data-target="#mobile-nav"
                    aria-controls="mobile-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fal fa-bars"></i>
                </button>
                <a class="navbar-brand d-lg-none" href="/">
                    <img src="/svg/uv-logomark.svg" height="40">
                </a>
                <a class="btn btn-outline-dark d-lg-none" href="/plans">Plans</a>
                <div class="navbar-collapse collapse mt-4" id="mobile-nav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="/plans"><i class="far fa-signal"></i>&nbsp;&nbsp;Membership
                                Plans</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/reviews"><i class="far fa-comments"></i>&nbsp;&nbsp;Reviews</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/support"><i
                                    class="far fa-question-circle"></i>&nbsp;&nbsp;Support &amp; FAQs</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/login"><i class="far fa-user"></i>&nbsp;&nbsp;Member Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-large d-none d-lg-block navbar-expand-lg navbar-light bg-white">
                <div class="container">
                    <div class="navbar-collapse" id="primary-nav">
                        <ul class="navbar-nav w-100 justify-content-between">
                            <li class="nav-item nav-logo">
                                <a href="/"><img src="/svg/uv-logo-inverted.svg" width="200"></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/plans">Membership Plans</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/reviews">Reviews</a>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="/support">Support &amp; FAQs</a>
                            </li>
                            <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="btn btn-outline-light" href="/plans">Join Now&nbsp;&nbsp;<i
                                        class="far fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Page -->
        <div class="page-content ">

            <header class="hero bg-dark text-light text-center">
                <div class="container">
                    <h1 class="mb-5">Wireless High-Speed Internet.<br>
                        Unlimited. Unthrottled.</h1>
                    <h2 class="subhead mb-5 mb-md-8">
                        <span class="text-primary">No</span>&nbsp;Data&nbsp;Limits.&nbsp;
                        <span class="text-primary">No</span>&nbsp;Throttling.&nbsp;
                        <span class="text-primary">No</span>&nbsp;Contracts. <span>No</span>&nbsp;Credit&nbsp;Checks.
                    </h2>
                    <div class="spacer"></div>
                    <a href="#how-it-works" class="btn-rounded-circle btn btn-outline-light scroll-btn smooth-scroll"><i
                            class="fal fa-angle-down"></i></a>
                </div>
                <div class="slides cycle-slideshow" data-slides=".slide" data-cycle-speed="2000"
                    data-cycle-timeout="4000">
                    <div class="slide bg-cover bg-center w3-animate-fading" style="background-image: url(/images/hero/rural-house.jpg)">
                    </div>
                    <div class="slide bg-cover bg-center w3-animate-fading" style="background-image: url(/images/hero/camper.jpg)"></div>
                    <div class="slide bg-cover bg-center w3-animate-fading"
                        style="background-image: url(/images/hero/rural-neighborhood.jpg)"></div>
                    <div class="slide bg-cover bg-center w3-animate-fading" style="background-image: url(/images/hero/tv-streaming.jpg)">
                    </div>
                    <!-- <img class="mySlides w3-animate-fading" src="img_01.jpg"> -->
                </div>
            </header>
            <!-- <script>
                w3.slideshow(".slide", interval (4000));
            </script> -->
            <section class="py-8" id="how-it-works">
                <div class="container">
                    <h2 class="mb-4 text-center display-2">How It Works.</h2>
                    <p class="lead mx-auto mb-5 text-center" style="max-width: 700px">This ain’t your grandpa’s
                        satellite dish. Using the latest cellular technology, we provide truly high-speed wireless
                        internet to virtually every corner of the country.</p>
                    <div class="features row text-center">
                        <div class="col-md">
                            <div class="icon mb-4"><i class="far fa-signal text-success"></i></div>
                            <h4>Cellular Towers</h4>
                            <p>We offer membership options for each of the three major carriers. View our <a
                                    href="/plans">Membership Plans</a> to find out which network has the best coverage
                                for you.</p>
                        </div>
                        <div class="col-md mt-5 mt-md-0">
                            <div class="icon mb-4"><i class="far fa-wifi text-success"></i></div>
                            <h4>Hotspots &amp; Routers</h4>
                            <p>Our Unlimitedville hotspots and routers connect to the nearby cellular towers, providing
                                the device its LTE data connection.</p>
                        </div>
                        <div class="col-md mt-5 mt-md-0">
                            <div class="icon mb-4"><i class="far fa-home text-success"></i></div>
                            <h4>Connected Home</h4>
                            <p>Our devices broadcast a high-speed Wi-Fi signal to all your home and office devices such
                                as laptops, smart TVs, gaming consoles, and more!</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="py-8 bg-dark text-light bg-cover bg-center" id="guarantee"
                style="background-image: url(/images/bg/guarantee.jpg)">
                <div class="container text-center">
                    <div class="mb-4"><i class="icon far fa-retweet"></i></div>
                    <h2 class="mb-4 display-2">14 Day, No Risk, Money-Back Guarantee.</h2>
                    <p class="lead mb-5">‘Unlimited’ sound too good to be true? Try it risk-free and see for yourself.
                    </p>
                    <a href="/plans" class="btn btn-lg btn-primary">View Plans&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <section class="py-8 how-we-do-it">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img class="img-fluid mt-5 mt-md-0" src="/svg/how-we-do-it.svg" alt="How We Do It">
                        </div>
                        <div class="col-md">
                            <h2 class="mb-5 text-center text-md-left display-2"><span class="d-none d-md-inline"><i
                                        class="fal fa-cog"></i>&nbsp;&nbsp;</span>How We Do It.</h2>
                            <p class="lead leading-relaxed pr-md-8 font-weight-400 text-center text-md-left">
                                Unlimitedville is a membership organization that provides Unlimited, Uncapped Wireless
                                Data to our members. We don’t resell our data plans with the 3 major carriers, we simply
                                let you use our Unlimited Routers and Hotspots for as long as you are a member. All
                                carriers have unlimited data plans that are just not available to the public. When you
                                join Unlimitedville, you are now part of our connected community that works to get you
                                online and keep you online with fast, reliable, wireless data.</p>
                        </div>                        
                    </div>
                </div>
            </section>

            <section class="py-8 bg-dark text-light bg-cover bg-center"
                style="background-image: url(images/bg/home-data.jpg);">
                <div class="container text-center">
                    <div class="icon"><img src="/svg/no-phone.svg" alt=""></div>
                    <h2 class="mt-4 mb-5 display-2">Unlimited Phone Data Is Not<br>
                        Unlimited Home Data.</h2>
                    <p class="lead leading-relaxed">The ‘unlimited’ phone plans that carriers offer are ONLY ‘unlimited’
                        for data used on the phone and only allow 5-10gb of tethering/hotspot usage per month. <em>(The
                            ability to use the phone’s data with other Wi-Fi devices such as a computer, tablet,
                            etc.)</em> Our hotspots and routers are specifically designed to broadcast unlimited Wi-Fi
                        for EVERY connected device in your home or office including laptops, smart TVs, gaming consoles
                        and other Wi-Fi connected devices.</p>
                </div>
            </section>

            <section class="join py-8">
                <div class="container text-center">
                    <div class="icon"><img src="/svg/members.svg" alt="Members"></div>
                    <h2 class="my-5 display-2">Join the Unlimited<span class="text-primary">Ville</span> Community
                        Today.</h2>
                    <div>
                        <a href="/plans" class="btn btn-lg btn-primary">View Plans&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </section>

            <section class="reviews py-9 bg-dark text-light bg-cover bg-center"
                style="background-image: url(images/bg/laptop.jpg)">
                <div class="container text-center">
                    <div class="icon"><i class="far fa-comments text-white"></i></div>
                    <div class="cycle-slideshow" data-cycle-slides="article" data-cycle-timeout="7000"
                        data-pause-on-hover="true">
                        <article class="review">
                            <div class="review-body">
                                <p>So far, so good. I got my hotspot today and it worked instantly. This is the first
                                    time since we have moved to our house in a rural area that we have had the freedom
                                    to do some of the things we need to stay connected without worrying about data usage
                                    and...</p>
                            </div>
                            <div class="review-author">Jennifer C.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>The Hot Spot arrived on time as promised. Opened up the box. Turned it on and PRESTO
                                    it worked immediately. I have several hot spots that support my job and business
                                    from various companies and are very expensive. I am going to cancel them all.
                                    Unlimited w...</p>
                            </div>
                            <div class="review-author">Richard N.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I&#039;ve had Unlimitedville service for almost 3 months now....The saying &quot;it
                                    is what it is&quot; is what this service is. I pay my bill on time every month and I
                                    get great fast unlimited service ...I live in the country and this plan was tailored
                                    to me...Thanks U...</p>
                            </div>
                            <div class="review-author">Rockie D.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This is the real deal. Got the Pink plan and hotspot arrived 2 days later. Hooked up
                                    in minutes (turn it on, that&#039;s it) and I&#039;m getting 22mb down and 12 mb up.
                                    Highly recommend. Break the cable monopoly people!</p>
                            </div>
                            <div class="review-author">Tim W.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I used them for about 5 months while our home was being built, the price was what
                                    they said it would be. Never a hassle with the bill or service, I highly recommend
                                    them.</p>
                            </div>
                            <div class="review-author">Mike R.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>If you think this is just for checking email and surfing the web, you&#039;d be
                                    pleasantly surprised. I can stream full HD movies, attend online meetings for
                                    school, Skype video chat, even play Xbox Live! A great alternative for those of us
                                    that live &#039;off grid...</p>
                            </div>
                            <div class="review-author">Becca M.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Excellent service for those in rural areas or travelers. Been a customer for almost a
                                    year, forced to cancel due to real life issues. I was using the $250 plan, and
                                    streamed movies (like a madman, love my movies), xbox live online gaming, fps pc/ps4
                                    games...</p>
                            </div>
                            <div class="review-author">Chris A.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>If your a traveler by trade like me. There is no other service in the world that can
                                    help you. Unlimitedville has worked for me 100%. Absolutely love the service! I have
                                    the AT&amp;T package, have only 4 bars were I am. Yet I play Xbox live every day!
                                    Watch N...</p>
                            </div>
                            <div class="review-author">James W.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I would definitely give you guys 5/5! one of the best tech/general support and
                                    business that i have dealt with. Fast on the draw with mailing and fast and
                                    effiecent on the tech support!</p>
                            </div>
                            <div class="review-author">Forrest P.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We have been searching for a solution to the slow DSL speed that we had, and we had
                                    just about given up on streaming movies.  When we discovered Unlimitedville, it
                                    solved the problem with faster speed than we thought we would ever see in our rural
                                    setti...</p>
                            </div>
                            <div class="review-author">Julian R.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Hotspot is working great!! It has been a miracle solution for my house and my
                                    business. I work from home and have a small warehouse next door. We&#039;ve dropped
                                    exede internet and directTV and just watch netflix at night before bed. Everything
                                    has worked out...</p>
                            </div>
                            <div class="review-author">Josh K.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Hello Unlimitedville!! and skeptical shoppers trying to read reviews! :) I&#039;m
                                    beyond happy as I sit over here grinning ear to ear with my new fast unlimited high
                                    speed internet!! I live in Buckingham county VA, go ahead google it. ITS IN THE
                                    MIDDLE OF NO...</p>
                            </div>
                            <div class="review-author">Abbie W.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>First off this is a legitimate service. They do offer high speed internet to those
                                    unable to get high speed internet in there area. I was skeptical at first due to how
                                    much hassle our current company freedomnet gives us and it being through cellular
                                    compa...</p>
                            </div>
                            <div class="review-author">Gary P.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Thank you guys for everything! You provide such a fantastic service to people like
                                    myself that live in a rural area where the major internet providers won&#039;t lay
                                    down cable, and your customer support is some of the best customer support i&#039;ve
                                    ever experien...</p>
                            </div>
                            <div class="review-author">Michael S.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Love the service you provide and it has been a great option for someone in the
                                    country with few choices in decent broadband service. My MOFI unit went out
                                    unexpectedly earlier this week and your team has been fantastic from the moment I
                                    contacted support...</p>
                            </div>
                            <div class="review-author">Jason C.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Oh my goodness, hands down, without a doubt, this is the single best customer service
                                    I have ever received. You guys are incredible, and thank you so much for actually
                                    trying to solve my problem. I have hit wall after wall with trying to get internet
                                    reso...</p>
                            </div>
                            <div class="review-author">John M.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Just had to say AWESOME SERVICE!!!!!! I thought I was stuck with our local rinky-dink
                                    internet service that was averaging less than 1mbps with constant outages. Then I
                                    ran across reviews mentioning Unlimitedville and I thought I would give it a try.
                                    ABSOL...</p>
                            </div>
                            <div class="review-author">Anonymous</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>At first I was worried this was a scam, I&#039;m a trucker and having to use HotSpot
                                    for internet was horrible, I decided to go against my gut instinct and try this out.
                                    I absolutely love it, whether I&#039;m home or on the road for long periods of time,
                                    I have con...</p>
                            </div>
                            <div class="review-author">Anonymous</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Your support has been excellent. Stuff breaks, can&#039;t make that the issue.
                                    Getting it fixed is the issue and you guys dealt with it quickly. Great!</p>
                            </div>
                            <div class="review-author">Peter K</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>You might have the happiest new unlimitedville customers yet! My husband was able to
                                    work from home this morning with no issues. My daughters were also delighted that
                                    Netflix is working without any buffering. We appreciate your quick service and ease
                                    of e...</p>
                            </div>
                            <div class="review-author">Jessica R</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I live in the middle of nowhere (att doesn&#039;t even work here) so internet is next
                                    to impossible to get. The service with the pink plan works wonderfully. We always
                                    have at least 3 devices connected and the average dl speed is 30mb/s even while
                                    other device...</p>
                            </div>
                            <div class="review-author">Joshua A.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I tried it here in Pottsville,Pa. Constantly buffering. Worst hotspot i ever had. I
                                    been using Visible for $40 a month on their ZTE R2 $19 phone. I have use it 16 to 20
                                    hours a day for the last 25 days watching tv on Sling and Stirr and movies on Amazon
                                    P...</p>
                            </div>
                            <div class="review-author">Johnny Blanco</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This is the worst customer service I have experienced in a long time!</p>
                            </div>
                            <div class="review-author">Cameron Scartozzi</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We moved into our rv 6 months ago, and We love this service. I homeschool my son and
                                    we are gamers. We can have all 3 phones plus two computers a roku and PlayStation
                                    all working perfectly at the same time. We love staying connected while moving
                                    around.</p>
                            </div>
                            <div class="review-author">Mary C.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Well, I’m super excited to write this review. I do some gaming at night after kids go
                                    to bed and this has been highly anticipated since I discovered it! Here’s my
                                    situation for some back story so y’all know how I got here. We live in the “count...
                                </p>
                            </div>
                            <div class="review-author">Benjamin D.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I am so happy to share our great experience with the Unlimitedville internet service.
                                    We purchased a home in a rural area of Northern California and moved into it in May.
                                    Our only option for home internet provider was AT&amp;T Basic 5 service. That was 5
                                    m...</p>
                            </div>
                            <div class="review-author">Jeff K.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I never leave reviews but Unlimitedville has truly solved an issue I have had for
                                    close to 20 years! We&#039;re semi-rural in Arkansas with no internet running down
                                    our road. We&#039;ve tried everything available to us from Hughes Net to using our
                                    phones as hotspot...</p>
                            </div>
                            <div class="review-author">Jennifer</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Very impressed so far. I ordered the yellow plan, however within 24hrs got an email
                                    letting me know that the pink plan would work better for me, many thanks! I will
                                    update when the service is active, looking forward to it!!</p>
                            </div>
                            <div class="review-author">Christopher S</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I&#039;d ordered the pink plan, as it was recommended for my area. I connected the
                                    router, tested it in different areas and levels in my home, and the connection is
                                    absolutely terrible. I am now writing this review on my personal hotspot. Dropped
                                    $400 for this...</p>
                            </div>
                            <div class="review-author">David</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Unbelievably and staggeringly awful. We have had the service for about 7 months and
                                    we have been patient for that long, but it is rapidly running out. We have three
                                    towers nearby and our internet stops working 4 times on average every day before
                                    11am. I a...</p>
                            </div>
                            <div class="review-author">Nathan Perkins</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Another skeptical convert. I like most are rural and had HughesNet
                                    &quot;service&quot; and I have to say HughesNet is faster than dialup but not by
                                    much. Dialup is more reliable. Anyway, Unlimitedville is fast and reliable and I am
                                    very happy with Unlimitedville.</p>
                            </div>
                            <div class="review-author">Terry W.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I recently moved from Southern California to Rural Iowa. In California I had Cable
                                    Internet with 100 Mbps down and 100Mbps up included with my homeowner&#039;s
                                    association dues! You can&#039;t imagine my disappointment to be now paying $75 per
                                    month for the very fa...</p>
                            </div>
                            <div class="review-author">Jerry Young</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>After years of satellite internet, I was desperate for a terrestrial internet
                                    provider. When Unlimitedville, became an option, the worry of the initial
                                    investment, the pro&#039;s out weighed the conn&#039;s. I could not be happier with
                                    the choice to use Unlimitedvi...</p>
                            </div>
                            <div class="review-author">Mark</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Everything is great! It is such a relief to have reliable internet without worrying
                                    about data caps and throttling. I&#039;m averaging 30 50 MBPS I never thought I
                                    would see that out where I live. I do have a Boost antenna so that with your
                                    Equipment its wonde...</p>
                            </div>
                            <div class="review-author">Craig D.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I&#039;ve been with Unlimitedville for 2 years now. I work in an urban area with a
                                    ton of options for cellular data plans, but they all throttle after 22GB. I use an
                                    average 300GB a month downloading or uploading large data sets that sometimes exceed
                                    20GB in a...</p>
                            </div>
                            <div class="review-author">Tim H.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I live in an area between two cities that border each other closely. The area is only
                                    about ~7 minutes away from town and where other service providers have been able to
                                    provide much faster service to other residents. Previously, I was stuck on a DSL
                                    line...</p>
                            </div>
                            <div class="review-author">Ryan X</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>14 days is not enough. Yes you get throttled. Yes you just ate 400 dollars as of day
                                    15. Buyer beware!! This company should be ashamed.</p>
                            </div>
                            <div class="review-author">Brandon Crossman</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I live in the country and was skeptical at first,but this is the real deal!
                                    I went with the blue plan and it is amazing!</p>
                            </div>
                            <div class="review-author">MK</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>If you live in the country and struggle with bad internet, this is what you need to
                                    get! </p>
                                <p>It is AMAZING!! We were so skeptical at first. </p>
                                <p>We live in the country in central Alabama. No cable companies come out here, so we
                                    were stuck with satellite in...</p>
                            </div>
                            <div class="review-author">Z.Taylor</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>It’s more than anyone could ask for. Y’all’s customer service is beyond amazing.
                                    (Which I value most) There’s no better feeling knowing that you don’t have to worry
                                    about overage charges. I take my Mofi device every time I travel, and not once h...
                                </p>
                            </div>
                            <div class="review-author">Jake B.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Not a great experience. I am a Network engineer and needed a backup for internet so I
                                    purchased from Unlimitedville. Unfortunately from the first day I started, it only
                                    allowed 5mb download no matter where I was. I also have the exact same wireless
                                    pro...</p>
                            </div>
                            <div class="review-author">Ryan Friesenhahn</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>My wife and I moved to a rural area where nothing, literally nothing else reasonable
                                    was available to us. The local carrier offers 500K/bps download (think America
                                    Online days here...), satellite service is available on a limited basis (with
                                    terrible late...</p>
                            </div>
                            <div class="review-author">John K.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>It looks like I&#039;m going to be the only sad story here. I wasn&#039;t able to get
                                    this set up because the site you need to go to for setting it up is unreachable no
                                    matter what browser I try and I&#039;ve tried 6 of them. So after a few days of
                                    unsuccessfully trying...</p>
                            </div>
                            <div class="review-author">S.W</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Very good and reliable internet service. Worth every penny paid. I would definitely
                                    recommend this to anyone who is looking for better internet.</p>
                            </div>
                            <div class="review-author">S.W</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Was great at first, but now the service has been cut off for the second time in a
                                    month, of course att is to blame. Yea sure, im here because they havent fixed it yet
                                    and will not answer my phone calls now, so unlimitedville if you see this and my
                                    email,...</p>
                            </div>
                            <div class="review-author">Chris</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>My internet quit working after 28 days. I cannot get anyone from tech support to
                                    answer a call, a text, or an email query. I’m not at all happy with this situation.
                                </p>
                            </div>
                            <div class="review-author">Tate Cockerill</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>My internet stopped working after 28 days. I cannot get anyone from tech services to
                                    answer a call, a voicemail, a text, or an email. Very upsetting.</p>
                            </div>
                            <div class="review-author">Isaac Cockerill</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Anyone on here able to tell me how I can switch from one plan to another?</p>
                            </div>
                            <div class="review-author">Brett D.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>They are the Best! No complaints just grateful they are available in my rural town!
                                </p>
                            </div>
                            <div class="review-author">Elba.G</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We are living the full time RV life now!! Good unlimited internet was a challenge. We
                                    could not get traditional wired internet and the cell phone companies just
                                    don&#039;t have a product with enough high speed internet. Problem solved thanks to
                                    Unlimitedvil...</p>
                            </div>
                            <div class="review-author">Chris.H</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I have used Unlimitedville simply because it is the best option. I say that because
                                    there is really no other option where I live unfortunately. I started off with
                                    T-Mobile (pink plan) and the speeds were phenomenal but the buffering was always an
                                    issue...</p>
                            </div>
                            <div class="review-author">Jeff</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I&#039;ve had Unlimitedville for 3 years now. We are a half mile from a Sprint tower
                                    out in the country. So we have the yellow plan. We consistently get 100% reliable 50
                                    to 100mbps service. I also use Unlimitedville at my office in a very small town and
                                    it...</p>
                            </div>
                            <div class="review-author">Rodney B</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We were stuck with satellite which, when good, gives 20mb but during the shutdown we
                                    were getting less than 1mb due to so many people using the same satellite orbiting
                                    the earth. Before that was DSL which was terrible. Real Cable internet stops about
                                    1/...</p>
                            </div>
                            <div class="review-author">Robert R.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Flat out false advertising. I was so excited and could not be more let down.
                                    &quot;SUPER FAST&quot; is a flat out lie. I used to have dial up internet that was
                                    faster. Streaming is not even an option. AND M-F customer support is another lie. I
                                    called on a Friday ar...</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Worse than dial up! Do not waste your money im getting .06 mbps download and. 29
                                    upload. Two thumbs wayyyy down</p>
                            </div>
                            <div class="review-author">William G</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We tested Unlimitedville while we were looking for home internet options while we
                                    were displaced by COVID. The worked decently at our location and the customer
                                    service was amazing! We ended up picking another service that offered a directional
                                    long-range...</p>
                            </div>
                            <div class="review-author">Kyle Z.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Well I was very skeptical this would actually work. We live in a remote area and only
                                    have satellite and went through hoops trying to get on a very slow satellite plan
                                    which was unsuccessful so I went online to research and found this site and was as I
                                    sa...</p>
                            </div>
                            <div class="review-author">David C.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>No actual customer service. On the rare chance you reach someone, they have no idea
                                    what they&#039;re doing and aren&#039;t interested in troubleshooting. Will not
                                    ensure connectivity. Far more expensive than other LTE offerings. Don&#039;t waste
                                    your time.</p>
                            </div>
                            <div class="review-author">Charles Walker</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I have the blue plan, and the internet is AMAZING! it&#039;s so fast, and in my home
                                    we have multiple devices connected at once. Video streaming is so fast and
                                    there&#039;s no lag whatsoever. Couldn&#039;t be happier with my service. I live in
                                    an area where theres 2 int...</p>
                            </div>
                            <div class="review-author">Krystal P.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Unlimitedville is great... when it works. We&#039;ve had it now for just over a month
                                    and have had two &quot;Verizon&quot; interruptions. The first took 4 days to
                                    resolve, the other is ongoing. The support is poor - 24-48 hours to respond to
                                    &quot;tickets&quot;, which actually ta...</p>
                            </div>
                            <div class="review-author">Adam Dykstra</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This is truly garbage internet, and unfortunately the only option for my area. Worst
                                    customer service, sketchy tech support and the Mofi device is a dated piece of
                                    garbage. The price monthly should be half of what they charge. My device decided to
                                    stop w...</p>
                            </div>
                            <div class="review-author">Caleb Phelps</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We have the pink plan based on where we live. We live really and have NEVER had
                                    anything available to us except satellite or the use of our phones hotspot. We are
                                    now able to work from home, stream on our tv ...the speed is fantastic....We have
                                    multip!e...</p>
                            </div>
                            <div class="review-author">Elizabeth Abel</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I&#039;ve e had this system for 8 or 9 months everything was perfect til April. I
                                    have no internet got good wifi signal just no internet, I hate to put a bad review
                                    on anything but after weeks of no phone contact and dozens of emails now I have
                                    nothing ask ab...</p>
                            </div>
                            <div class="review-author">Max Metcalf</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I have reached out to this company numerous times through email and phone and they
                                    quit communicating when there was an issue. I went 2 months with not internet on one
                                    of my plans, they continued to charge me. I called at least 10 times and SMS them
                                    and...</p>
                            </div>
                            <div class="review-author">Jeff Bosler</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I have reached out to this company numerous times through email and phone and they
                                    quit communicating when there was an issue. I went 2 months with not internet on one
                                    of my plans, they continued to charge me. I called at least 10 times and SMS them
                                    and...</p>
                            </div>
                            <div class="review-author">Jeff Bosler</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We have suffered with horrible DSL speeds for years! I stumbled on Unlimitedville
                                    while searching for a work from home solution. I can not express how impressed and
                                    satisfied we have been thus far. Every day is like Christmas! Years of not being
                                    able to w...</p>
                            </div>
                            <div class="review-author">Tim Almond</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I live in the Florida Keys in a location that I do not have access to traditional
                                    internet options. After reading about this service I was a bit skeptical but decided
                                    to sign up. I was most surprised by the excellent customer service I had received
                                    when a...</p>
                            </div>
                            <div class="review-author">Cody P.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>After years of subpar internet service in my rural community, I found Unlimitedville!
                                    I’ve had the pink plan for a few weeks and am so pleased with the speed. I streamed
                                    a movie tonight....NO BUFFERING! Yes!! My initial reluctance has turned to joy!
                                    Tha...</p>
                            </div>
                            <div class="review-author">Darci R.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Started out great but cannot set up a password. I cannot get in touch with anyone
                                    except via email and the page will not load for me to set up a password so my
                                    neighbors are on it and I cant use it due to them using it.. I&#039;m starting to
                                    get upset because...</p>
                            </div>
                            <div class="review-author">Krystal Payne</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>dsdasdasda</p>
                            </div>
                            <div class="review-author">dsdfsd</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>this is very good product i have seen since my childhood please guys don&#039;t think
                                    twice to buy this item. it&#039;s amazing.</p>
                            </div>
                            <div class="review-author">sunny</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Have used their service since 2016!
                                    If you need consistent 24/7 coverage for business, do NOT sign up for this service.
                                    You will receive no tech support, we stayed because we had support from James, but
                                    then we were &quot;put in a different group&quot; and never a...</p>
                            </div>
                            <div class="review-author">Tim Dyer</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Worked great for the 14 day trial period but after that speeds seem to drop a little
                                    more every day my last seed test on my 28in smart tv(connected my ethernet) was 329
                                    k /s
                                    Vs the 8000 kb/s on day 1</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This seemed to be the answer to my internet issue we are staying in a rv for a while
                                    and cant get traditional cable internet and satellite is expensive and not usually
                                    unlimited.
                                    Wifi to my phone always seems to work well, but I get slower speeds on any o...</p>
                            </div>
                            <div class="review-author">Nathan White</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I signed up for unlimitedville on 4/11. ($400) Paid first bill on 5/25 ($149)
                                    Now....They will no longer have service in my area. Now......By my numbers means I
                                    have paid over $68 PER WEEK for internet because they refuse to refund my membership
                                    fee....</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Unlimitedville changed our lives. We were actually going to move due to our
                                    teenagers&#039; streaming and no good ISP alternatives. Then, we found this site. We
                                    have 2 Pink plans in place for several years, and my house is happily using
                                    AppleTV/XBox/PC/YT/Zoom...</p>
                            </div>
                            <div class="review-author">Happy Dad</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>The customer service is beyond exceptional! The Support team was very responsive and
                                    ensured that every thing that I made mistakes on was corrected. They were pleasant
                                    and helpful! I would recommend this service to anyone! Not to forget to mention, the
                                    se...</p>
                            </div>
                            <div class="review-author">Justin S.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>For nearly a year, the service worked as advertised, but something happened in late
                                    March of 2020. Connection to the internet was lost. After a couple of days, I
                                    received a replacement SIM that got me back in business, but it wasn&#039;t long
                                    before the prob...</p>
                            </div>
                            <div class="review-author">Larry Purvis</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We received the equipment, set it up and it is extremely slow with the wheel spinning
                                    as it tries to load as we try to view anything like Netflix for example. It is not
                                    faster so we thought perhaps we need to try a different carrier. We called
                                    Unlimitedvi...</p>
                            </div>
                            <div class="review-author">Donna Murphy</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I got the machine and its hitting it at 14mbs. so far so good. Plug and play. It was
                                    easy. will update. its 1630 hrs. on a friday and no lag. speed test is good as of
                                    yet.</p>
                            </div>
                            <div class="review-author">R.Misner</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Is this a &quot;real&quot; company. I can&#039;t seem to find your street address.
                                    Why are you hiding your physical location?</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I needed some reliable internet while going on a trip across multiple states and then
                                    staying in a place with no internet. I was seriously shocked at how well it worked
                                    while we were in the car. I think we only had one spot where it dropped the internet
                                    w...</p>
                            </div>
                            <div class="review-author">Eli Clark</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>On month three and still going strong. Unlimitedville is the real deal for those of
                                    us to choose to live outside of the city. Thank you again for bringing us into the
                                    world of streaming. For anyone hesitant about Unlimitedville (like I was) take the
                                    14 da...</p>
                            </div>
                            <div class="review-author">T.Almond</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Seriously...no joke. This is hands down the best option, PERIOD, if you&#039;re
                                    living in a rural area. I thought we were doomed. No internet providers.
                                    UnlimitedVille came to the rescue. We now pull a solid 15-20mbps. We had 1 bar of
                                    reception out here..got a...</p>
                            </div>
                            <div class="review-author">Zac C.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>My modem stopped picking up the internet on Saturday morning. I cannot believe there
                                    is no technical support over the weekend. I tried troubleshooting from information
                                    on Knowledge Base. No success. Now it is Monday morning and I can’t speak with a
                                    huma...</p>
                            </div>
                            <div class="review-author">Julie Duke</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Unlimitedville never worked and they will not refund my money. Do not use this
                                    service. It appears to be a scam.</p>
                            </div>
                            <div class="review-author">Candace</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Have been using their red plan for the past 5 years. The past year I have experience
                                    constant throttling down to 1.5mbps. Its usable, but just barely and hard to justify
                                    the $250/month price.</p>
                            </div>
                            <div class="review-author">Brandon R</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Not a scam, but also a scam... It&#039;s definitely capped, overpriced, and even
                                    though I have full bars, it&#039;s slow. Watching youtube at 144p, anything more
                                    buffers. I live in the country, but I have a Tmobile tower about 5 miles from my
                                    house, and since I liv...</p>
                            </div>
                            <div class="review-author">Joseph Bennett</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We live in Northcentral Wisconsin. There are some broadband companies but mostly
                                    don&#039;t reach the really rural areas where we are on the river. Viasat was the
                                    only option. At first it wasn&#039;t terrible but in the evenings it would be hard
                                    to watch a show all...</p>
                            </div>
                            <div class="review-author">Kristin</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>At first I was not sure if this would work, as I do not believe in completely
                                    unlimited plans, there is always something hidden. In this case there is not. Fixed
                                    cost, no limit, no throttling or anything. Next to that, their technical support is
                                    nice (and...</p>
                            </div>
                            <div class="review-author">Gerben Kranenborg</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Horrific customer service. Initially I was pleased with the service. Just as my two
                                    week service was ending, I receive an email on a Tuesday saying your SIM card may be
                                    defective. You need to confirm your shipping address so we can send a new one or
                                    your...</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Works great until it doesn&#039;t! My sim card was supposed to stop working on 9/14.
                                    I was sent a card on 9/8 that is supposed to arrive by 9/14. Maybe it will, but mine
                                    stopped on 9/10. Turns out this was known to tech support but they failed to tell
                                    me. WOW...</p>
                            </div>
                            <div class="review-author">Don</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I have had service for a few months, but yesterday my service turned off, and no one
                                    can be reached to assist me. I woek from home usomg this service, but now I could
                                    loose my job.</p>
                            </div>
                            <div class="review-author">Brandi Grimes</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Initially, the internet worked well. However, after a year of service the router no
                                    longer connected to the service provider. I contacted support team and they sent out
                                    a new SIMS card. Replaced the SIMS card and this did not fix the problem. They then
                                    se...</p>
                            </div>
                            <div class="review-author">Jessica</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Mine is super slow and I&#039;m less then 200 yards from a cell tower .</p>
                            </div>
                            <div class="review-author">DANIEL SHOEMAKER</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>They do not have inventory of their product right now and delivery is weeks out. Sure
                                    would have been nice to disclose this at check out or somewhere on the faqs or
                                    webpage.</p>
                            </div>
                            <div class="review-author">New user No inventory:(</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>The service is not very good it quits working all the time and no one will answer the
                                    phone</p>
                            </div>
                            <div class="review-author">Kevin Whitaker</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Not a joke when they say Unlimited and No Throttling, my speeds are good which I knew
                                    they would be since my cell gets good speed and signal using the blue plan. </p>
                                <p>The Netgear Box is very reliable..Overall so far very good.</p>
                            </div>
                            <div class="review-author">Kevin S.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Was just about to decide between ya&#039;ll and another service exactly like yours,
                                    different device. When I read that I can&#039;t keep the device...ummm...it
                                    doesn&#039;t take long to see that ya&#039;ll are outsourced to stop and control the
                                    overwhelming response to this...</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Technical support is a joke just want to resolve via email. Been almost a week still
                                    no internet and yet to call me after a several pleas for them to call me. I would
                                    look elsewhere if I were you. Only reason I’m still trying to hang on is cause a
                                    littl...</p>
                            </div>
                            <div class="review-author">Wade</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I live in the County of Sonoma. You would think I would have better option than ATT
                                    DSL 3, which is max 3 MPS download. I tried satellite and point to point microwave
                                    and the best I could do was 12mps download for $150 per month with microwave PTP but
                                    the...</p>
                            </div>
                            <div class="review-author">Amir</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I am 200ft from my local cable company that would give me good internet speeds. When
                                    i asked them to extend and offered to pay, the manager talked to me like I was a dog
                                    and made me cry.
                                    Im not sure if i saw and ad on Facebook or if i was just scrolling...</p>
                            </div>
                            <div class="review-author">Pamela V.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I didn&#039;t find this service worked for me at all to effectively work from a rural
                                    locations. During the day roughly 9am-6pmPT I my speed tests on my hotspot were
                                    averaging 1.5mbps download - which means I couldn&#039;t even load a webpage.
                                    Tethering from my pho...</p>
                            </div>
                            <div class="review-author">Tiffany Scoggins</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Overpriced service, garbage connectivity backed by garbage support.</p>
                            </div>
                            <div class="review-author">Michael Jones</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This internet has been like an abusive relationship. We were in rural Alaska and when
                                    we first received it, it was the best thing we could have ever hoped for. Streaming,
                                    work, school, multiple users came effortlessly. It was simply amazing! Mostly
                                    becaus...</p>
                            </div>
                            <div class="review-author">Chana</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I have a yacht on Lake Texoma north of Dallas Texas - and was constantly running out
                                    of data on my Verizon plan. The Unlimitedville Pink plan works flawlessly at anchor
                                    and it is a relief to know I won&#039;t be needing to purchase Data Boosts
                                    mid-stream when...</p>
                            </div>
                            <div class="review-author">Michael G.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This one is tough to write. When I first got the product, everything seemed to work
                                    great. It fit my needs in a really hard to service area. However, constantly my plan
                                    would change. While they were great about honoring pricing, the instability of their
                                    p...</p>
                            </div>
                            <div class="review-author">Larry Long</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>After only 2 1/2 months the only plan that worked for me, the blue plan, is now not
                                    available. I invested the high membership fee believing I would have an available
                                    option for more than the 2 1/2 months that I have used it. When I first looked into
                                    this...</p>
                            </div>
                            <div class="review-author">Roy Sowerby</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We had great service for 2 months, then we were notified they didn&#039;t have a
                                    contract with AT&amp;T any longer. So, just be careful. It cost us a small fortune
                                    to have internet for 2 months as we did not get our $250.00 one time fee back, or
                                    pro-rated. I think...</p>
                            </div>
                            <div class="review-author">Diane Heide</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Quiero wi fi</p>
                            </div>
                            <div class="review-author">Javier</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I live in the outskirts of Titus county, also know as the sticks here in East Texas
                                    and have been with UnlimitedVille for several years now. I work from home and a
                                    reliable internet is an absolute requirement, albeit a rather illusive service to
                                    obtain i...</p>
                            </div>
                            <div class="review-author">Christopher Hack</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I cannot get customer service to call me back and they aren&#039;t answering. I have
                                    been a member for 2 years and only have problems with the SIM card needing
                                    replacement. This time I dont kniw what is going on and they won&#039;t call me</p>
                            </div>
                            <div class="review-author">Angela Williamson</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Ever since they signed on with T Mobile we have the world&#039;s worst internet
                                    overage, actually we have no internet. It&#039;s been 72 hours and no one will call
                                    us back.</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>DO NOT USE THIS COMPANY....I have been with them for almost 2 years ( I pay them $300
                                    a month for 2 accounts) I have NOT had service at my business for a week now ( I
                                    have lost customers) I have called, sent emails, left voice messages... to no
                                    avail... I...</p>
                            </div>
                            <div class="review-author">Jimmie Dasch</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I received the pink plan worked for one evening then slowed down so much it won’t
                                    even load a webpage. The customer service is nonexistent. No one answers the phone
                                    and all responses from email and live chat are automated. Would highly recommend not
                                    was...</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I just got my router last week and I’m so disappointed with everything, the support
                                    and service. The speed I got is 0.05 mbps and I had tried to call many times and
                                    sent 3 emails with no success. I DO NOT RECOMMEND IT.
                                    O hope someone from UNLIMITEDVILLE...</p>
                            </div>
                            <div class="review-author">Filenes Lima</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I doubt this review will show up on this page since it’s moderated by the owners, but
                                    my experience has been awful. I subscribed to the blue plan in July. Two months into
                                    my service, my internet was disabled so they could replace my SIM card. That took...
                                </p>
                            </div>
                            <div class="review-author">Timothy Bradford</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Thier service doesn&#039;t usually work, even with a good connection, also there is
                                    no one who will answer your calls, messages, or emails, definitely do not use this
                                    service unless you want to be ripped off.</p>
                            </div>
                            <div class="review-author">Damien Nichols</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>It&#039;s a rip-off, but the best thing available. $150 a month for capped services,
                                    where 200-300 ping is good, and 1-2 mbps up and down is average. Did I mention I
                                    have full bars with weboost&#039;s signal booster? Yeah, but they censor the
                                    reviews, so only the p...</p>
                            </div>
                            <div class="review-author">Joseph Bennett</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I am very disappointed with the Unlimitedville customer service department. About 10
                                    days ago, our internet service went out completely. We live in the country so there
                                    are not many options so finding Unlimitedville was a very welcome improvement. We
                                    advi...</p>
                            </div>
                            <div class="review-author">Joe</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Within two weeks of my order, I&#039;m told that the plan I purchased will no longer
                                    be available and I would have to switch plans. The new plan barely serves my minimal
                                    needs and is much slower and unreliable in my area. This company had no right to
                                    sell me...</p>
                            </div>
                            <div class="review-author">Andrew S.</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Worst thing I&#039;ve ever had worked good til I was past my money back trial. I
                                    guess when your stealing service this is what happens</p>
                            </div>
                            <div class="review-author">Max Metcalf</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Terrible customer service. I do not recommend this service. Very expensive. Too
                                    expensive to have such horrive customer service.</p>
                            </div>
                            <div class="review-author">Travis</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We have used this service for about 3 years. Up until the past month, I have had no
                                    consistent complaints. We are rural with few options for internet connections, so
                                    some slow speeds on occasion. But as of the past month, our internet has gone from
                                    dec...</p>
                            </div>
                            <div class="review-author">Lauren Yarger</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Rural area hit or miss for good speeds avg around 6-8mb download terrible I know but
                                    only option 150 a month with random down time from the company could be days or
                                    weeks no customer service or warnings when the network goes down does not reimburse
                                    even i...</p>
                            </div>
                            <div class="review-author">Anthony</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>We for this as we couldn&#039;t find other options. Then the plan we had was
                                    cancelled. Now they&#039;re refusing to refund money. Go elsewhere.</p>
                            </div>
                            <div class="review-author">Katharynne Nusbaum</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Was hoping this was going to be a solution for me as I had read previous reviews that
                                    worked great, however my experience is a bit different. My download speeds vary from
                                    0.5 MBPS down to sometimes 6 MPBS down. Majority of the time it is below 1 MBPS
                                    whic...</p>
                            </div>
                            <div class="review-author">Justin Thomason</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Overall I would not recommend this service. Its like having the old dial up service -
                                    very slow. The hotspot on my Iphone is much faster than this service and for the
                                    price - no way. Its taking over 2 minutes to send this review.</p>
                            </div>
                            <div class="review-author">RT</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>So far I&#039;ve had it for a month and couple weeks now i can tell you its the
                                    better option I&#039;ve tried out of everybody else. Ive tried Nomad they
                                    didn&#039;t work and had horrible customer service. I chose T-Mobile Pink plan, it
                                    truly is unlimited no data caps i...</p>
                            </div>
                            <div class="review-author">B.Bosley</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Worked flawlessly for the first year, about 3 weeks ago I lost internet connection
                                    they have been extremely slow to fix it.</p>
                            </div>
                            <div class="review-author">Richard</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This service is really great. We live in a rural area with DSL and cell phone hot
                                    spots our only data options. The DSL is slow (6-8Mb/s down and 600k up) and subject
                                    to many outages (once it was out for 3 months). Phone hot spots have data caps and
                                    are us...</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This is a fake review designed to test if this will actually post because I
                                    don&#039;t believe these reviews are real.</p>
                            </div>
                            <div class="review-author">Fake Person</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Unlimitedville is misleading name. As it turns out there is a limit and you&#039;ll
                                    get cancelled with zero notice. Need to be online for your video conference? Nope
                                    not gonna happen. Kids need internet for school? They don&#039;t care. I cancelled
                                    my service only...</p>
                            </div>
                            <div class="review-author">Benjamin Girard</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Worked for the first week, then not at all. Costumer service is terrible with
                                    responses and wouldn&#039;t have the problem fixed for over a week. Do not
                                    recommend, glad I was able to return it.</p>
                            </div>
                            <div class="review-author">M Huson</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I found the positive reviews a bit hard to believe as I was in the same predicament
                                    many of them described. Years of poor quality as well as very slow and unreliable
                                    internet on top of massive overage fees since my dsl provider did not have unlimited
                                    as...</p>
                            </div>
                            <div class="review-author">A.Bills</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Lifesaving service. My whole family has a pink plan, and honestly if we didn&#039;t
                                    have several of these devices in our house I don&#039;t think we could live here. My
                                    parents are able to work from home remotely on constant meetings with extremely rare
                                    interruptio...</p>
                            </div>
                            <div class="review-author">D.Russ</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>So I live out in the country and the pink plan can only gets two bars. So I figured I
                                    would call and get the next option which it the bike plan. Customer service sucks!
                                    You not only have to pay shipping to have it delivered to you you have to pays
                                    shippin...</p>
                            </div>
                            <div class="review-author">Hailey Tidwell</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>No one is returning my call- I have no internet. I live in rural Hawaii and have a
                                    job in telehealth meaning my internet connection is essential and saves lives. I
                                    called, emailed, and have tried text support but no one is answering. I don’t know
                                    what h...</p>
                            </div>
                            <div class="review-author">Bodhi</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>The service has usually been pretty good. I live in an area with not many internet
                                    options. My biggest complaint is the customer service is the worst I have ever
                                    experienced! I have no service now for 2 days and have run all recommended tests and
                                    I stil...</p>
                            </div>
                            <div class="review-author">Tom Fischer</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Unlimitedville was a life saver when we purchased it last summer. We live in a rural
                                    area AND live in a metal home so other options just didn&#039;t work. It is a very
                                    expensive plan but has worked well for us until this week. Tuesday, mid morning, our
                                    interne...</p>
                            </div>
                            <div class="review-author">Cheryl Porter</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>At the current time, I have requested support for the last 2 days since loss of
                                    internet. I have left messages and sent emails regarding my outage to only receive
                                    an email back with troubleshooting steps. After doing the steps and supplying photos
                                    of sc...</p>
                            </div>
                            <div class="review-author">D. Martin</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I want my money back.</p>
                            </div>
                            <div class="review-author">Joseph Fugazi</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>When service works, it is a great solution for people without access to broadband.
                                    The problem sets in when you have issues. There is no live tech support agent to
                                    immediately address issues. The only way that I have been able to get a response is
                                    thro...</p>
                            </div>
                            <div class="review-author"></div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Customer service is the worst. They never answer the phone or call back . Internet
                                    has been down for week with no answers.</p>
                            </div>
                            <div class="review-author">Brandon Spangler</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>No help, no service, constantly down with another sim card in the mail. No help AT
                                    ALL, no response to calls.</p>
                            </div>
                            <div class="review-author">Don Webster</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Only had the service for a few months - they will not call you back or respond to
                                    emails. There is no customer service. I have not had internet for a week now and can
                                    not get a hold of anyone. Would not recommend this service to anyone.</p>
                            </div>
                            <div class="review-author">Jason</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>For everyone out there thinking of using this company don’t waste your time.
                                    Expensive and not worth it it didn’t matter where I was the service was garbage.
                                    Even In a city with towers you would think that would for sure make a difference
                                    right? Think...</p>
                            </div>
                            <div class="review-author">A. Lopez</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I have used unlimitedville 2 separate times. The first time I had it for a few years
                                    and it stopped working. At that time (at least a year ago) I was able to get someone
                                    on the phone but after a week they still didn’t have it fixed so I cancelled and
                                    w...</p>
                            </div>
                            <div class="review-author">Winter Oliver</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>It&#039;s the only service we have ever had work at our house. Mountain location with
                                    no cable or dsl. It is kinda frustrating having the service switch a few times so
                                    far from blue plan to pink plan then back to blue plan and now an email saying back
                                    to pin...</p>
                            </div>
                            <div class="review-author">Gary Mitchell</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>This service started out great but its become really unreliable. We&#039;ve already
                                    had our service cut off once. We have the blue plan sometimes it works when ATT
                                    signal is strong sometimes it doesn&#039;t I live in an RV and move constantly.
                                    They&#039;ve told me to se...</p>
                            </div>
                            <div class="review-author">Moriah Hammond</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Why so expensive? My electric bill is one third of your lowest price and it runs my
                                    water well, refrigerator, heater, TVs, computers, coolers, lights, etc and all you
                                    offer is a connection to the internet.</p>
                            </div>
                            <div class="review-author">Terry Watt</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>100% Worth it. Now if you live in a City, like where I live. And also live in a Hotel
                                    that has spotty internet here and there.. This internet that I recently came across
                                    on GOOGLE i might add.. Is totally worth it. My husband and I, were a little
                                    skeptic...</p>
                            </div>
                            <div class="review-author">Jennifer Ottenthal</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I&#039;ve been using Unlimitedville since late 2017 from a remote rural location in
                                    Southern Missouri. Very little is available in reliable, functional internet in this
                                    area. Over the course of three-years-plus, I&#039;ve tried all three plans offered
                                    by Unlimitedv...</p>
                            </div>
                            <div class="review-author">David Niklasson</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I ordered the device on the 14th of April. Here it is the 22nd of April and still no
                                    device. No phone number to call. Not starting off very well.</p>
                            </div>
                            <div class="review-author">Scarlett K Bowman</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>The customer support team is really amazing. I am always blown away by how quick they
                                    get back to me when I have a question. They are super helpful and will actually
                                    listen to you. Customer support like this is rare and makes me never want to leave
                                    as a c...</p>
                            </div>
                            <div class="review-author">Eric</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Unlimitedville is a game changer if, like me, you live in a rural area without
                                    hi-speed service options. </p>
                                <p>My home is at the very top of a mountain - elevation 2500 feet - completely
                                    surrounded by trees. Comcast doesn’t offer service here, satellite i...</p>
                            </div>
                            <div class="review-author">Steve</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I live on a mountain , plus in between citys internet aka dead zone.. At first,
                                    unlimited was amazing.. Than November 2020 my internet stopped working.. Customer
                                    service, if they actually were there, absolutely terrible.. I only talked on pbone
                                    once to t...</p>
                            </div>
                            <div class="review-author">Tony Sousa</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>Hi.</p>
                                <p>My router went out about 6 times in the first few months. I was sent a sim card which
                                    never arrived. I was ignored until phone support started about 5 months into my
                                    service.</p>
                                <p>After that, i finally got someone on the phone with less than a weeks wort...</p>
                            </div>
                            <div class="review-author">Michael</div>
                        </article>
                        <article class="review">
                            <div class="review-body">
                                <p>I went with Unlimitedville because it was the only service I could get in my old
                                    building at the time and we needed internet for school. I live in a very populated
                                    city and got horrible service. Constant loading, and days where we just had nothing
                                    for hou...</p>
                            </div>
                            <div class="review-author">Rachael Henry</div>
                        </article>
                    </div>
                    <div class="mt-5 text-center">
                        <a class="btn btn-outline-light btn-lg" href="/reviews">More&nbsp;&nbsp;<i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </section>

            <section class="answers py-8">
                <div class="container">
                    <div class="text-center">
                        <div class="icon mb-4">
                            <i class="fal fa-lightbulb"></i>
                        </div>
                        <h2 class="mb-3 display-2">We’ve Got Answers.</h2>
                        <p class="lead mb-6">See the frequently asked questions below to learn more about Unlimitedville
                            membership.</p>
                    </div>
                    <div class="faqs row">
                        <article class="faq col-md-6 mb-5">
                            <h4>Is all of this for real? This seems too good to be true!</h4>
                            <p class="answer text-justify">
                                <expand-collapse>
                                    YES we are for real! We started the Unlimitedville Community years ago to provide
                                    flat-rate, affordable internet access to individuals who do not have access to
                                    traditional high-speed internet options and suffer from extreme overage charges. Our
                                    community of members benefit from our unlimited and unthrottled plans/devices which
                                    they are able to utilize during their membership. Our mission is to connect the
                                    unconnected.
                                </expand-collapse>
                            </p>
                        </article>
                        <article class="faq col-md-6 mb-5">
                            <h4>Do I have to sign a contract? Credit check? Are these really month-to-month plans?</h4>
                            <p class="answer text-justify">
                                <expand-collapse>
                                    All of our plans require no contract, and no credit checks! Yes, these are month to
                                    month plans. Each payment pre-pays for your next 30 days of membership. You may of
                                    course cancel your subscription with us at anytime by simply returning your device
                                    to Unlimitedville. Monthly charges will continue until the device has been received.
                                    Additionally, our 14-Day Money Back Guarantee allows you to try our service at No
                                    Risk! If the service does not meet your needs in any way, simply return the device
                                    for a complete refund of your entire order!
                                </expand-collapse>
                            </p>
                        </article>
                        <article class="faq col-md-6 mb-5">
                            <h4>How is this different from my Unlimited Phone plan?</h4>
                            <p class="answer text-justify">
                                <expand-collapse>
                                    Unlimited phone plans are ONLY unlimited for PHONE data use. Unlimited phone plans
                                    only allow 5-10gb of tethering. (the ability to use the phones data with your
                                    computer, tablet, or other connected devices.) That is the equivalent of streaming a
                                    couple HD Netflix movies. Unlike an unlimited phone plan, our plans and devices can
                                    entirely replace your slow home or office internet solution for an unlimited,
                                    unthrottled, high-speed wireless data connection.
                                </expand-collapse>
                            </p>
                        </article>
                        <article class="faq col-md-6 mb-5">
                            <h4>WHICH PLAN IS BEST FOR ME?</h4>
                            <p class="answer text-justify">
                                <expand-collapse>
                                    Each color represents one of the four major cellular carrier networks. Therefore,
                                    the primary difference between each plan is the coverage each network provides. View
                                    each of our plan’s coverage to identify which is most likely to work at your usage
                                    location(s). For help with selecting a plan, visit the Help Me Choose page for
                                    detailed step-by-step instructions.


                                    <a href="/help-me-choose">Unlimitedville.com/help-me-choose</a>
                                </expand-collapse>
                            </p>
                        </article>
                        <article class="faq col-md-6 mb-5">
                            <h4>Which Device Is Right For Me?</h4>
                            <p class="answer text-justify">
                                <expand-collapse>
                                    The two main devices we offer are hotspots and routers. Routers are best for most
                                    home/office setups, as they provide far superior range and connectivity. Hotspots
                                    provide a battery powered solution to take your WIFI on the go. All of our devices
                                    ship pre-configured and plug-and-play, which means setup is simply connecting the
                                    power cable to the wall…so you can spend less time setting-up and more time surfing
                                    the web! Goodbye invasive installs. Hello Unlimitedville.
                                </expand-collapse>
                            </p>
                        </article>
                        <article class="faq col-md-6 mb-5">
                            <h4>What Happens If What I Choose Doesn’t Work?</h4>
                            <p class="answer text-justify">
                                <expand-collapse>
                                    If the plan you initially choose does not connect or is slower than expected, this
                                    most likely means a lack of LTE coverage/reception at your location, or less
                                    commonly, the cellular tower your device is connecting to is either using outdated
                                    antennas or is congested from high usage in your area. Regardless of the reason, our
                                    14-Day No Risk Return Policy has you completely covered. Simply return your device
                                    for a 100% Refund and let us help you choose another plan that’s best for you!
                                </expand-collapse>
                            </p>
                        </article>
                    </div>
                    <div class="text-center mt-6">
                        <a href="/support" class="btn btn-lg btn-secondary">More Answers&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </section>
        </div>


        <!-- Footer -->
        <footer class="globalfooter">
            <section class="bg-gray-700">
                <div class="container py-3">
                    <ul class="nav nav-fill">
                        <li class="footer-logomark nav-item d-none d-md-block">
                            <a href="/"><img src="/svg/uv-logomark-inverted.svg"></a>
                        </li>
                        <li class="nav-item">
                            <a href="/plans" class="nav-link"><span
                                    class="d-none d-lg-inline">Membership&nbsp;</span>Plans</a>
                        </li>
                        <li class="nav-item">
                            <a href="/reviews" class="nav-link">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a href="/support" class="nav-link">Support<span
                                    class="d-none d-lg-inline">&nbsp;&amp;&nbsp;FAQs</span></a>
                        </li>
                        <li class="nav-item d-none d-lg-inline">
                            <a href="/login" class="btn btn-outline-light"><i class="fa fa-user"></i>&nbsp;&nbsp;Member
                                Login</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="bg-gray-800 pb-4">
                <div class="footer-text container text-center text-gray-600">
                    <div class="footer-logo py-6 mx-auto">
                        <img class="img-fluid" src="/svg/uv-logo-inverted.svg">
                    </div>
                    <p class="leading-normal">Unlimitedville is a community of individuals who do not have access to
                        traditional high-speed internet options and suffer from extreme overage charges. Our members
                        benefit from our unlimited and unthrottled plans/devices which they are able to utilize during
                        their membership. Our mission is to connect the unconnected. These membership plans include
                        unlimited high speed 4G LTE mobile hotspot data (wherever you have a 4G LTE signal) for normal
                        internet usage. All offers, content, promotions &amp; prices listed today are subject to change
                        without prior notice. We are not responsible for agreements that are currently in place with
                        major carriers should they change. We have no control over possible network optimizations being
                        conducted by major carriers or cell tower deprioritizing in congested areas.</p>
                    <div>©2021 Unlimitedville™. All rights reserved.</div>
                </div>
            </section>
        </footer>



    </div>
    <!-- .page-wrap -->
    <!-- Scripts -->
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/jquery-2.1.3.min.js"></script>    
    <!-- Page Scripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script> -->
</body>

</html>
