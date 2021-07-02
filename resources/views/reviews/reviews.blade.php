@extends('layouts.default')
@section('content')
<div class="page-content ">
    <header class="page-header arrow">
        <div class="container">
            <div class="icon mb-4">
                <i class="far fa-comments"></i>
            </div>
            <h1 class="mb-4 pageTitle">Reviews.</h1>
            <p class="subhead mx-auto" style="max-width: 680px">
                Get the scoop from real members.
            </p>
        </div>
    </header>
    <div class="pt-8 pb-6">
        <div class="container">
            <div class="text-center mb-6">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewForm">
                    <i class="fa fa-comment"></i>&nbsp;&nbsp;Share Your Story
                </button>
            </div>
            <div class="row">
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Steve</h5>
                                <div class="text-gray-500 smaller">May 11th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Unlimitedville is a game changer if, like me, you live in a rural area without
                        hi-speed service options.

                        My home is at the very top of a mountain - elevation 2500 feet - completely surrounded by trees.
                        Comcast doesn’t offer service here, satellite internet is infuriatingly slow, and even the local
                        ground-based broadband satellite service can’t get a signal to me. But Unlimitedville can. When
                        my router arrived, I simply plugged it in, powered it up and - immediately - there was a
                        hi-speed connection throughout my house. My Samsung TV, iPad, Amazon Fire TV stick and ereader
                        are all running with a lightning fast connection .. and there’s no satellite to put on the roof.

                        As someone who is now permanently telecommuting for my job, Unlimitedville has changed
                        everything for me. Thanks to their service, I can be in my dream home - literally in the middle
                        of nowhere - and still be connected, reliably and without delays and lag time, to the rest of
                        the world. I didn’t believe it would ever be possible, but Unlimitedville has, thankfully,
                        proven me wrong.

                        It is unquestionably worth every penny when compared to the other options - or no option at all.

                        I couldn’t be happier with their service, and am so grateful they are here to provide it. It has
                        changed everything about what I can do from where I live.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Eric</h5>
                                <div class="text-gray-500 smaller">May 4th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">The customer support team is really amazing. I am always blown away by how quick
                        they get back to me when I have a question. They are super helpful and will actually listen to
                        you. Customer support like this is rare and makes me never want to leave as a customer because
                        of it. Telecom support is normally the worst but unlimitedvilles team is 5/5 stars</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">David N.</h5>
                                <div class="text-gray-500 smaller">April 19th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I've been using Unlimitedville since late 2017 from a remote rural location in
                        Southern Missouri. Very little is available in reliable, functional internet in this area. Over
                        the course of three-years-plus, I've tried all three plans offered by Unlimitedville. Even when
                        trouble strikes, Unlimitedville finds a solution to keep me connected, no matter what my
                        download needs.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Jennifer O.</h5>
                                <div class="text-gray-500 smaller">April 18th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">100% Worth it. Now if you live in a City, like where I live. And also live in a
                        Hotel that has spotty internet here and there.. This internet that I recently came across on
                        GOOGLE i might add.. Is totally worth it. My husband and I, were a little skeptic about it, but
                        when we read a review saying it runs on carrier towers, I'm like.... Wait What? Why didn't
                        comcast think of this, lol. My gaming computer is my pride and joy of gaming, so now I can play
                        my age of wushu and FFXIV. :) But most importantly I'm happy I have internet now.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">D.Russ</h5>
                                <div class="text-gray-500 smaller">January 26th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Lifesaving service. My whole family has a pink plan, and honestly if we didn't
                        have several of these devices in our house I don't think we could live here. My parents are able
                        to work from home remotely on constant meetings with extremely rare interruptions, and I'm able
                        to play online competitive games with no lag or stuttering. For example I can play VALORANT,
                        which is a game that relies on split second timing and accuracy, at a completely consistent 60
                        ping, which is more than good enough to play competitively.

                        Have not noticed any issue with downloads being capped. I was able to download a 60gb game
                        overnight and have probably downloaded another 35gb in miscellaneous things, plus the amount of
                        data I've used with videos and livestreams, without noticing any throttling or slowdowns.

                        The ONLY downside I have to share is that if you want a good connection the placement of your
                        device and how close you are matters a lot. Before I decided to just purchase my own device for
                        personal use, I was using my parent's devices, and even if it was just one room over the
                        difference in reliability and speed is MASSIVE. If you don't have access to Ethernet or can't
                        place the device in the same room as what you're trying to connect to it with, I'm not
                        completely sure how much I recommend the service.

                        Overall though, Unlimitedville really was a saving grace for us. The tech support was wonderful
                        and fast (I had an issue when I first purchased my device but it was fixed within 12 minutes)
                        and the referral program is a great way to save money if you want your family to have their own
                        connections. Cannot recommend this service enough.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">A.Bills</h5>
                                <div class="text-gray-500 smaller">January 20th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I found the positive reviews a bit hard to believe as I was in the same
                        predicament many of them described. Years of poor quality as well as very slow and unreliable
                        internet on top of massive overage fees since my dsl provider did not have unlimited as an
                        option. I was having to restart my modem almost every day. After finding a partial solution
                        using a hot spot device with a cellular sim which was limited to one device and while reliable
                        was less than perfect and limited to 5 mbps but we could at least watch streaming television.
                        Then one day I finally came across unlimitedville and while I had to use the most expensive red
                        plan with my location, it would not be more than what I was spending on overage costs and my
                        unlimited one device hotspot. I signed up figuring I would end up sending my device back within
                        the two week return period as I have been disappointed trying other services before.
                        Now you will have to pry it out of my tight grasp to get me to send it back. My internet speed
                        is 8 to 10 times faster than my old unreliable dsl (the speeds I currently have are actually
                        much faster than I was expecting). I have not had one hiccup, I have never once had to restart
                        my modem, it just works. I was able to tie it into my existing mesh WiFi and no one could tell
                        any difference except that it was faster and reliable, which as actually a big difference.
                        Only two weeks in but to this point I am thrilled with the service, it is everything it was
                        promised to be.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">B.Bosley</h5>
                                <div class="text-gray-500 smaller">December 17th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">So far I've had it for a month and couple weeks now i can tell you its the better
                        option I've tried out of everybody else. Ive tried Nomad they didn't work and had horrible
                        customer service. I chose T-Mobile Pink plan, it truly is unlimited no data caps i'm always able
                        to update the big updates on modern warfare, i can play games watch Netflix. I live in the
                        sticks and can't get a land line where we live so so far this is the best option by far anything
                        else I tried.
                        DO NOT WASTE YOUR TIME WITH SATELLITE, DO YOUR RESEARCH WITH WHICH TOWERS ARE CLOSE BY CHOOSE
                        THE CORRECT PLAN AND YOU'LL BE OK.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Michael G.</h5>
                                <div class="text-gray-500 smaller">October 28th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I have a yacht on Lake Texoma north of Dallas Texas - and was constantly running
                        out of data on my Verizon plan. The Unlimitedville Pink plan works flawlessly at anchor and it
                        is a relief to know I won't be needing to purchase Data Boosts mid-stream when watching TV. I
                        initially found the system less reliable at the dock, due to the metal roofs, but found a
                        solution by moving the system to the farthest stern portion of the boat to reduce the metal
                        interference. I highly recommend this product to anyone who wants to stay connected when
                        boating.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Amir</h5>
                                <div class="text-gray-500 smaller">October 5th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I live in the County of Sonoma. You would think I would have better option than
                        ATT DSL 3, which is max 3 MPS download. I tried satellite and point to point microwave and the
                        best I could do was 12mps download for $150 per month with microwave PTP but the service was
                        unreliable. It went down every other week for a day at the time. With Covid and working from
                        home that was not working for me and my family. I recently switched to Unlimitedville. Even
                        though I pay $200 per month, it is well worth it. I have 70 MPs download consistently and
                        reliably. Everyone in the house is happy because we have can all be on a zoom call, email and
                        watch tv without having any internet issues. Don’t waste your time with satellite and if you are
                        not getting good service with your PTO microwave dish service provider, this is the best
                        solution.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Pamela V.</h5>
                                <div class="text-gray-500 smaller">October 5th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I am 200ft from my local cable company that would give me good internet speeds.
                        When i asked them to extend and offered to pay, the manager talked to me like I was a dog and
                        made me cry.
                        Im not sure if i saw and ad on Facebook or if i was just scrolling the internet when i found
                        Unlimitedville. I was afraid it might be some sort of scam because it seemed too good to be
                        true. After thinking about it for days and researching comments, I sent an email asking for
                        recommendations, whomever answered said i didnt have a tower in my area and they were sorry. I
                        can see a tower from my house so I thought well i have 14 days to return if it doesn't work and
                        I get excellent cell phone reception. I ordered it; and have now been using it for 3 days. I
                        wish I could of found this years ago. I highly recommend it!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Kevin S.</h5>
                                <div class="text-gray-500 smaller">September 23rd</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Not a joke when they say Unlimited and No Throttling, my speeds are good which I
                        knew they would be since my cell gets good speed and signal using the blue plan.

                        The Netgear Box is very reliable..Overall so far very good.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Kristin</h5>
                                <div class="text-gray-500 smaller">September 7th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We live in Northcentral Wisconsin. There are some broadband companies but mostly
                        don't reach the really rural areas where we are on the river. Viasat was the only option. At
                        first it wasn't terrible but in the evenings it would be hard to watch a show all the way
                        through with all the buffering and just error messages. Since covid it's been that much more
                        useless. I was paying the most they would let me pay, for 100GB we used in the first 10 days of
                        the cycle. They recommended I get a whole additional receiver and plan to supplement if I
                        needed. I tried the t-mobile receiver just bc it was the cheapest but it didn't work. Decided to
                        just get the blue ATT box as thats what our cell phones are. It's perfect. Nothing will ever be
                        more worth it. Not only has it never buffered once but it's like we got a new TV and devices.
                        The 4k shows are actually 4k. Apparently our TV was not displaying shows in their true format
                        because now they're like beautiful. And it never stops. I don't have to grub data and check
                        where we're at every day. I can leave the tv on while not paying attention and feel ok. My
                        personal assistants respond about 4-5 times faster I'd say. Didn't know this was an issue for
                        them. The impact on quality of life is just huge regardless of whether you hate the digital
                        world we live in. You want it to work when you need it. Can't recommend enough.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Zac C.</h5>
                                <div class="text-gray-500 smaller">July 24th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Seriously...no joke. This is hands down the best option, PERIOD, if you're living
                        in a rural area. I thought we were doomed. No internet providers. UnlimitedVille came to the
                        rescue. We now pull a solid 15-20mbps. We had 1 bar of reception out here..got a WeBoost, and
                        were able to bring it up to 3 bars. Perfect to get the speeds we need. If you have doubts, stop
                        now. This is hands down incredible. Customer for Life.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">T.Almond</h5>
                                <div class="text-gray-500 smaller">July 22nd</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">On month three and still going strong. Unlimitedville is the real deal for those
                        of us to choose to live outside of the city. Thank you again for bringing us into the world of
                        streaming. For anyone hesitant about Unlimitedville (like I was) take the 14 days and try it
                        out. You no longer have to deal with slow DSL or Satellite!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Eli C.</h5>
                                <div class="text-gray-500 smaller">July 21st</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I needed some reliable internet while going on a trip across multiple states and
                        then staying in a place with no internet. I was seriously shocked at how well it worked while we
                        were in the car. I think we only had one spot where it dropped the internet while we were going
                        through a canyon, but we had the internet for well over 13 hours of the 14 hour drive. And since
                        we only needed it for this trip, I'm returning it, but I'm actually kind of sad to be sending it
                        back because of how well it has worked, how easy it is to use, and then how quick their customer
                        service has been to respond. All around, I'd recommend Unlimitedville to anyone.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Justin S.</h5>
                                <div class="text-gray-500 smaller">June 26th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">The customer service is beyond exceptional! The Support team was very responsive
                        and ensured that every thing that I made mistakes on was corrected. They were pleasant and
                        helpful! I would recommend this service to anyone! Not to forget to mention, the service itself
                        is nothing short of amazing!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Happy D.</h5>
                                <div class="text-gray-500 smaller">June 22nd</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Unlimitedville changed our lives. We were actually going to move due to our
                        teenagers' streaming and no good ISP alternatives. Then, we found this site. We have 2 Pink
                        plans in place for several years, and my house is happily using AppleTV/XBox/PC/YT/Zoom, etc.
                        without any issues. It helps to have a cell tower 1/2 mile away, but we also use our MoFi on
                        vacation while driving down the road. We bought the 12V adapter and just stick in the car with
                        us. Works fantastic...</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Darci R.</h5>
                                <div class="text-gray-500 smaller">May 18th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">After years of subpar internet service in my rural community, I found
                        Unlimitedville! I’ve had the pink plan for a few weeks and am so pleased with the speed. I
                        streamed a movie tonight....NO BUFFERING! Yes!! My initial reluctance has turned to joy! Thanks!
                    </div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Cody P.</h5>
                                <div class="text-gray-500 smaller">May 13th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I live in the Florida Keys in a location that I do not have access to traditional
                        internet options. After reading about this service I was a bit skeptical but decided to sign up.
                        I was most surprised by the excellent customer service I had received when asking about shipping
                        information. A job well done!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Tim A.</h5>
                                <div class="text-gray-500 smaller">May 12th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We have suffered with horrible DSL speeds for years! I stumbled on Unlimitedville
                        while searching for a work from home solution. I can not express how impressed and satisfied we
                        have been thus far. Every day is like Christmas! Years of not being able to watch a simple movie
                        without buffering has been replaced with every person in the house being able to what ever they
                        wish with no buffering or throttling. Thank you Unlimitedville!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Elizabeth A.</h5>
                                <div class="text-gray-500 smaller">May 4th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We have the pink plan based on where we live. We live really and have NEVER had
                        anything available to us except satellite or the use of our phones hotspot. We are now able to
                        work from home, stream on our tv ...the speed is fantastic....We have multip!e devices
                        connected....We could not be happier!
                        THANK YOU UNLIMITEDVILLE!!!!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Krystal P.</h5>
                                <div class="text-gray-500 smaller">April 27th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I have the blue plan, and the internet is AMAZING! it's so fast, and in my home we
                        have multiple devices connected at once. Video streaming is so fast and there's no lag
                        whatsoever. Couldn't be happier with my service. I live in an area where theres 2 internet
                        providers and I have been on a waiting list to get service for nearly 3 years! I wish I knew
                        about this service sooner. Thank you unlimitedville. I can stream videos and my kiddo can do her
                        school work online!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">David C.</h5>
                                <div class="text-gray-500 smaller">April 20th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Well I was very skeptical this would actually work. We live in a remote area and
                        only have satellite and went through hoops trying to get on a very slow satellite plan which was
                        unsuccessful so I went online to research and found this site and was as I said skeptical. But
                        come to find out it’s amazing! Plugged it in and immediately started working. I did a speed test
                        and got over 30mb. I’m finally able to stream videos and actuallyu work from home. This is the
                        best thing ever! Thank you</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Kyle Z.</h5>
                                <div class="text-gray-500 smaller">April 13th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We tested Unlimitedville while we were looking for home internet options while we
                        were displaced by COVID. The worked decently at our location and the customer service was
                        amazing! We ended up picking another service that offered a directional long-range antenna but
                        would pick Unlimitedville again for future needs without hesitation.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Robert R.</h5>
                                <div class="text-gray-500 smaller">April 9th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We were stuck with satellite which, when good, gives 20mb but during the shutdown
                        we were getting less than 1mb due to so many people using the same satellite orbiting the earth.
                        Before that was DSL which was terrible. Real Cable internet stops about 1/2 mile away in all
                        directions but will never get extended to our farm. We tried Verizon hotspot too and never got
                        over 2 bars. Moved to this UnlimitedVille via AT&T and we consistently get 40b/sec which is
                        really good; comparable to cable. Shocked and not sure this was going to work, it worked on
                        first try. We moved it around to another window, it got worse, so we put it back. Once you find
                        a good spot that gives over 30mb or more consistently, you are living the dream (if in a cable
                        "hole"). It's just great. I had to submit this review so more people use this as they are doing
                        something right that nobody else is.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Elba.G</h5>
                                <div class="text-gray-500 smaller">March 24th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">They are the Best! No complaints just grateful they are available in my rural
                        town!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Chris.H</h5>
                                <div class="text-gray-500 smaller">March 24th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We are living the full time RV life now!! Good unlimited internet was a challenge.
                        We could not get traditional wired internet and the cell phone companies just don't have a
                        product with enough high speed internet. Problem solved thanks to Unlimitedville. This company
                        has a great product. It really works!! We stream and work from home with no issues. Thanks
                        Unlimitedville!!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">S.W</h5>
                                <div class="text-gray-500 smaller">February 18th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Very good and reliable internet service. Worth every penny paid. I would
                        definitely recommend this to anyone who is looking for better internet.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">John K.</h5>
                                <div class="text-gray-500 smaller">February 14th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">My wife and I moved to a rural area where nothing, literally nothing else
                        reasonable was available to us. The local carrier offers 500K/bps download (think America Online
                        days here...), satellite service is available on a limited basis (with terrible latency and
                        limited data), the individual LTE carriers severely limit the quantity of traffic with very high
                        cost for additional data, there's no cable and certainly no fiber available.

                        Now here's the thing, Unlimitedville is not the only such service but due diligence will show
                        you that they're by far the best. Best as far as the service itself - we're streaming HD quality
                        programming from Netflix and Amazon and our browsing experience is stellar. No hiccups or
                        downtime so far.

                        If you're not network proficient, the system is plug and play and even provides wifi within your
                        home. If you are proficient, you'll find the MoFi device provided to be a robust unit with lots
                        and lots of features including the capacity for vpn. Also, you may (as I did), put the device in
                        bridge mode, turn off its wireless signal and connect to whatever internal network you already
                        have in place.

                        I can't say enough but I'll leave you with what I believe is the best part of dealing with
                        Unlimitedville thus far and that's the people that make up the company. I tried a couple of
                        their plans out before settling on the Blue Plan and throughout the process, the staff was
                        helpful, knowledgeable and beyond accommodating to my needs.

                        Thanks, Unlimitedville, for being one of those few great organizations.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Jake B.</h5>
                                <div class="text-gray-500 smaller">February 10th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">It’s more than anyone could ask for. Y’all’s customer service is beyond amazing.
                        (Which I value most) There’s no better feeling knowing that you don’t have to worry about
                        overage charges. I take my Mofi device every time I travel, and not once has it disappointed
                        me!!! Y’all go above and beyond to make sure everyone is happy. Thank y’all so much! 10/10</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Z.Taylor</h5>
                                <div class="text-gray-500 smaller">February 3rd</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">If you live in the country and struggle with bad internet, this is what you need
                        to get!

                        It is AMAZING!! We were so skeptical at first.

                        We live in the country in central Alabama. No cable companies come out here, so we were stuck
                        with satellite internet companies like viasat.

                        The internet provided through them was horrible.

                        Me and my wife would reach our data cap in the first few days, and even before reaching the data
                        cap every thing we tried to use it for (Netflix, gaming, internet surfing) would be slow, laggy,
                        and buffer. A sprinkle of rain or a cloud would make us lose our signal. We soon realized that
                        satellite internet was not going to cut it, so we got hotspots on our cricket wireless phones
                        and even bought a hotspot device through them. Those were great, except within a week or two at
                        the most once again we reached our data cap and it would be terribly slow, and there was no
                        unlimited option.

                        At this point we had given up, and I assumed that I would never get to play first person shooter
                        games like COD and Fortnite anymore, and that me and my wife would just have to deal with our
                        Netflix shows buffering every 5 seconds.

                        We are also both college students, so we could barely upload assignments, etc. Then the glorious
                        day came when I ran across Unlimitedville on a google search.

                        As I mentioned above, after all the failed attempts at first were we skeptical and felt that it
                        would be a complete waste of money. We read the reviews and thought that they had to be fake,
                        there is no way this can be real, and that all the people reviewing have to be robots or
                        something, lol.

                        We decided we were not going to waste our time and money, until we were offered a one time
                        membership fee waiver without even asking. This made us feel like Unlimitedville really valued
                        getting customers. At this point, me and my wife were like what the heck let's go for it, and we
                        ordered the Pink plan. it got here one week ago. This past week has been wonderful!! Not one
                        slow down. Not one data cap. I can play COD or any first person shooter better than I could with
                        cable internet at my friend's house. We can watch any video or show with NO buffering after the
                        initial start up. And, we can do our school without any uploading issues. This internet is the
                        bomb. It is worth every cent they charge. I can't thank Unlimitedville enough!!! Shopping buyer:
                        Listen to these reviews!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Mk</h5>
                                <div class="text-gray-500 smaller">January 30th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I live in the country and was skeptical at first,but this is the real deal!
                        I went with the blue plan and it is amazing!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Ryan X.</h5>
                                <div class="text-gray-500 smaller">December 27th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I live in an area between two cities that border each other closely. The area is
                        only about ~7 minutes away from town and where other service providers have been able to provide
                        much faster service to other residents. Previously, I was stuck on a DSL line with a full family
                        who loves to stream and game as well. Needless to say our connection was always bogged down from
                        sub-standard speeds and bandwidth being stretched thin. I decided to pull the trigger on this
                        service with the unlimited data cap aspect being one of the main draws (I often download music
                        and large games on Steam). Unlimitedville’s service has truly solved a problem I have had for
                        several years due to lack of competition/service in my area. It functions like a mobile hotspot.
                        (So technically, you can even take it on the go if you want.) The speeds are not anything
                        breathtaking, but they are more than manageable compared to DSL speeds or Satellite latency. It
                        is a bit pricy, but it is definitely worth it if your hobbies involve spending time on the
                        internet. I get speeds of about 35 megabits down/10 up at peak. During high traffic hours this
                        can slow down to as low as 5 megabits/>1 up at times. (However, my MoFi router is not in an
                        optimal area, it is behind a lot of walls on a lower level. I could potentially be getting
                        faster speeds, I have not tested.) The slow downs are not frequent in my experience and are just
                        dependent on when people are bogging down the cell towers. I have not experienced Latency issues
                        at all with ~30ms being my average. I only have a few devices connected at any given time and
                        they even included an Ethernet cable that I use with my PC. So far I’ve experienced little to no
                        lag on online games while in voice chat and with YouTube/Music playing all at the same time.
                        Overall, I’m pretty satisfied with my investment and will likely continue to use the service
                        until a better option appears. If you’re in a similar situation where there are no good ISP’s
                        and you to share a slow connection then I highly suggest this when you have exhausted all other
                        options!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Mark</h5>
                                <div class="text-gray-500 smaller">December 17th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">After years of satellite internet, I was desperate for a terrestrial internet
                        provider. When Unlimitedville, became an option, the worry of the initial investment, the pro's
                        out weighed the conn's. I could not be happier with the choice to use Unlimitedville. Tmobile,
                        has proven to be outstanding.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Craig D.</h5>
                                <div class="text-gray-500 smaller">December 17th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Everything is great! It is such a relief to have reliable internet without
                        worrying about data caps and throttling. I'm averaging 30 50 MBPS I never thought I would see
                        that out where I live. I do have a Boost antenna so that with your Equipment its wonderful. The
                        only bad thing is now I'm up all night gaming... LOL</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Terry W.</h5>
                                <div class="text-gray-500 smaller">December 9th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Another skeptical convert. I like most are rural and had HughesNet "service" and I
                        have to say HughesNet is faster than dialup but not by much. Dialup is more reliable. Anyway,
                        Unlimitedville is fast and reliable and I am very happy with Unlimitedville.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Jennifer</h5>
                                <div class="text-gray-500 smaller">November 1st</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I never leave reviews but Unlimitedville has truly solved an issue I have had for
                        close to 20 years! We're semi-rural in Arkansas with no internet running down our road. We've
                        tried everything available to us from Hughes Net to using our phones as hotspots for home
                        internet. Hughes Net was awful, period; using our hotspots was great- until they started
                        throttling our use at 40gb. I am SO GLAD I found Unlimitedvillle! Yes...the name is cheesy and
                        the causal use of the word "unlimited" makes it sound like it could be a scam. I was very
                        skeptical at first and did not expect much. We have had this service about a year now and I can
                        say it is truly unlimited and well worth the price if you cannot get normal internet service.
                        We're able stream as much as we want with at least 3 devices simultaneously; plus running a home
                        based business as well as a wireless home security system. In the year we've been using
                        Unlimitedville we have had ZERO issues. I had to switch my router when we added the wireless
                        security cameras; I was able to do all this plus get help with setup via live chat. While this
                        may cost a bit more than other services it's worth every penny & really your only option if you
                        need a fast and dependable internet connection with no data cap.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Jeff K.</h5>
                                <div class="text-gray-500 smaller">October 23rd</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I am so happy to share our great experience with the Unlimitedville internet
                        service. We purchased a home in a rural area of Northern California and moved into it in May.
                        Our only option for home internet provider was AT&T Basic 5 service. That was 5 mbps down load
                        and we were lucky to see 1 mbps upload speeds. My wife could not do a Peleton session without it
                        buffering and our highschool aged son who loves photography spent over 2 hours waiting for 19
                        photos to upload from his camera to his laptop. Our phones cell data was so much faster than our
                        home network but of course we were blowing through our data plan of 40 gb monthly causing costly
                        overage costs. I started researching and found Unlimitedville. After reading reviews and
                        watching some Youtube video's of customers who had Unlimiteville I went on line and ordered my
                        unit. It arrived with a week and I hooked it up right away. Super simple process for this tech
                        challenged individual. As soon as my son got home, I had him connect to our new wifi password
                        protected mofi unit and reupload those same 19 photos. It took only a few moments and he said
                        that is so much better. My wife did a Peleton session and no buffering. I signed up for Youtube
                        tv's free trial and connected our apple tv unit to the mofi wifi and started streaming tv. It
                        worked so well that the next day we called and cancelled our hard wired internet service and our
                        SatelliteTV provider. We tool our mofi unit to Yosemite on vacation and had great internet
                        service all week at our campground every evening when we returned from our day of hiking and
                        fishing in the park. This service does exactly what they say they do and have been nothing but
                        stellar in their customer service and billing etc. If you are remotely thinking about it, do it.
                    </div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Mary C.</h5>
                                <div class="text-gray-500 smaller">October 18th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We moved into our rv 6 months ago, and We love this service. I homeschool my son
                        and we are gamers. We can have all 3 phones plus two computers a roku and PlayStation all
                        working perfectly at the same time. We love staying connected while moving around.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Joshua A.</h5>
                                <div class="text-gray-500 smaller">August 30th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I live in the middle of nowhere (att doesn't even work here) so internet is next
                        to impossible to get. The service with the pink plan works wonderfully. We always have at least
                        3 devices connected and the average dl speed is 30mb/s even while other devices are streaming
                        HD. I highly recommend this company for those in rural areas</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Jessica R.</h5>
                                <div class="text-gray-500 smaller">August 22nd</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">You might have the happiest new unlimitedville customers yet! My husband was able
                        to work from home this morning with no issues. My daughters were also delighted that Netflix is
                        working without any buffering. We appreciate your quick service and ease of equipment setup.
                        Thank you!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Peter K.</h5>
                                <div class="text-gray-500 smaller">August 16th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Your support has been excellent. Stuff breaks, can't make that the issue. Getting
                        it fixed is the issue and you guys dealt with it quickly. Great!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Anonymous</h5>
                                <div class="text-gray-500 smaller">June 13th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">At first I was worried this was a scam, I'm a trucker and having to use HotSpot
                        for internet was horrible, I decided to go against my gut instinct and try this out. I
                        absolutely love it, whether I'm home or on the road for long periods of time, I have connection,
                        though it's not fool proof there are areas with weak, or poor signal, or no signal at all, but
                        it's by far better reception than even my phone. I'm glad I went with UnlimitedVille."</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Anonymous</h5>
                                <div class="text-gray-500 smaller">May 20th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Just had to say AWESOME SERVICE!!!!!! I thought I was stuck with our local
                        rinky-dink internet service that was averaging less than 1mbps with constant outages. Then I ran
                        across reviews mentioning Unlimitedville and I thought I would give it a try. ABSOLUTELY
                        SPECTACULAR. Zero issues so far. Easy setup. Reliable and stable. Loving it!!! Averaging daily
                        speeds of 17mbps+.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Jason C.</h5>
                                <div class="text-gray-500 smaller">January 16th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Love the service you provide and it has been a great option for someone in the
                        country with few choices in decent broadband service. My MOFI unit went out unexpectedly earlier
                        this week and your team has been fantastic from the moment I contacted support. The rep
                        responded right away and when I spoke to her on the phone she was happy to chat and very
                        accommodating. Less than 15 minutes later, Tech Support called and again was amazing in walking
                        through the issue and potential fixes. Unfortunately I needed to do a device swap, but again,
                        your team prioritized that quickly and answered any question very quickly.

                        Hats off to a great service and thank you to the support team that makes everything work!
                    </div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">John M.</h5>
                                <div class="text-gray-500 smaller">January 16th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Oh my goodness, hands down, without a doubt, this is the single best customer
                        service I have ever received. You guys are incredible, and thank you so much for actually trying
                        to solve my problem. I have hit wall after wall with trying to get internet resolved and this is
                        the first company that is actually trying to help me. I sincerely appreciate the assistance, and
                        I’m going to tell everyone I can about unlimitedville. I’d give you guys a hug if I could, but
                        it’s a little difficult to do through an email :).</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Michael S.</h5>
                                <div class="text-gray-500 smaller">June 28th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Thank you guys for everything! You provide such a fantastic service to people like
                        myself that live in a rural area where the major internet providers won't lay down cable, and
                        your customer support is some of the best customer support i've ever experienced. Top Notch
                        quality for sure.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Gary P.</h5>
                                <div class="text-gray-500 smaller">June 23rd</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">First off this is a legitimate service. They do offer high speed internet to those
                        unable to get high speed internet in there area. I was skeptical at first due to how much hassle
                        our current company freedomnet gives us and it being through cellular companies, but it does
                        work!
                        There was no throttling and no data caps. Also they have great customer service and do offer a
                        refund if it doesn't work. I strongly recommend this to anyone with satellite internet who is a
                        gamer or is a high data user. Strongly recommend this to anyone struggling to have high speed
                        internet! Thanks Unlimitedville!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Abbie W.</h5>
                                <div class="text-gray-500 smaller">March 24th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Hello Unlimitedville!! and skeptical shoppers trying to read reviews! :) I'm
                        beyond happy as I sit over here grinning ear to ear with my new fast unlimited high speed
                        internet!! I live in Buckingham county VA, go ahead google it. ITS IN THE MIDDLE OF NO WHERE! We
                        are not offered any high speed internet out here. Satellite only! BUMMER. After 3 months of
                        awful awful DISH Internet and waiting 5-7 minutes for pages to load I knew I had to do
                        something! I started researching hotspots. I came across Unlimitedville and was thinking HA,
                        yeah right. Well, I was so desperate to try something...ANYTHING else...I went ahead and
                        ordered! PRAISE THE LORD 4G LTE high speed UNLIMITED internet has come to the Williams house! We
                        live on an old logging back road in the country. And I'm now able to have open multiple tabs,
                        stream videos, have Netflix playing in the living room for the kiddo, all devices are connected
                        and running smoothly. This is almost like a dream! No more fighting with Dish to get someone on
                        the phone, being transferred, explaining my situation all to hear they cant do anything about
                        it, and if I want to cancel its $400! (Which I had to pay, lovely) Do it! Order this hotspot!
                        Contact me personally if you have any questions. I'm not a paid reviewer I'm a VERY satisfied
                        reviewer! For once, in my rural living life, I actually got what was advertised! Truly
                        unlimited, FAST internet! I cant thank you enough!!!!!!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Josh K.</h5>
                                <div class="text-gray-500 smaller">February 14th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Hotspot is working great!! It has been a miracle solution for my house and my
                        business. I work from home and have a small warehouse next door. We've dropped exede internet
                        and directTV and just watch netflix at night before bed. Everything has worked out perfect with
                        this setup. I just wish I had found you guys back 4 years ago when I thought my only option was
                        satellite internet. Thank you very much!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Julian R.</h5>
                                <div class="text-gray-500 smaller">February 4th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">We have been searching for a solution to the slow DSL speed that we had, and we
                        had just about given up on streaming movies.  When we discovered Unlimitedville, it solved the
                        problem with faster speed than we thought we would ever see in our rural setting.  Thank you.
                    </div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Forrest P.</h5>
                                <div class="text-gray-500 smaller">January 27th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I would definitely give you guys 5/5! one of the best tech/general support and
                        business that i have dealt with. Fast on the draw with mailing and fast and effiecent on the
                        tech support!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">James W.</h5>
                                <div class="text-gray-500 smaller">January 4th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">If your a traveler by trade like me. There is no other service in the world that
                        can help you. Unlimitedville has worked for me 100%. Absolutely love the service! I have the
                        AT&T package, have only 4 bars were I am. Yet I play Xbox live every day! Watch Netflix in HD.
                        Never loads or anything of that sort. I actually have higher download speeds then a lot of my
                        family and friends that have land line internet. From my Hotspot. Contact me directly if you
                        believe it to good to be true. I'll show you my downloads speed, Mbs and my face with a big
                        happy smile holding my amazing hotspot. Lol hahaha I'm just a 24 year Texas pipeliner that must
                        have great Internet. Because of Unlimitedville I do.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Chris A.</h5>
                                <div class="text-gray-500 smaller">December 29th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">Excellent service for those in rural areas or travelers. Been a customer for
                        almost a year, forced to cancel due to real life issues. I was using the $250 plan, and streamed
                        movies (like a madman, love my movies), xbox live online gaming, fps pc/ps4 games and everything
                        else that demands great internet. This is the ONLY service in my area that gives me the speeds
                        and download capacity that I require. I intend to resubscribe to the service within the month
                        (when I resolve the rl issue). I will probably go with the $200 plan at that time. If you are
                        considering this service : GET IT!! Small business but excellent support. Check the coverage
                        maps for each device (note: you get what you pay for here folks... the cheapest plan's coverage
                        map SAYS it covers my area, but I know that it is false; it is using a roaming tower. Meaning I
                        would have 0 4g lte service) and pick the best for you. If you have any questions, feel free to
                        add me as a friend and drop me a message! Highly recommended.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Becca M.</h5>
                                <div class="text-gray-500 smaller">December 10th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">If you think this is just for checking email and surfing the web, you'd be
                        pleasantly surprised. I can stream full HD movies, attend online meetings for school, Skype
                        video chat, even play Xbox Live! A great alternative for those of us that live 'off grid' but
                        still want to enjoy a stable internet connection with great speeds, without limits! I am going
                        on my third month. Had an issue with the SIM card, but their customer service is amazing and
                        James went out of his way to solve the problem. If you are thinking about trying their service,
                        go for it!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Mike R.</h5>
                                <div class="text-gray-500 smaller">November 24th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I used them for about 5 months while our home was being built, the price was what
                        they said it would be. Never a hassle with the bill or service, I highly recommend them.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Tim W.</h5>
                                <div class="text-gray-500 smaller">October 18th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">This is the real deal. Got the Pink plan and hotspot arrived 2 days later. Hooked
                        up in minutes (turn it on, that's it) and I'm getting 22mb down and 12 mb up. Highly recommend.
                        Break the cable monopoly people!</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Rockie D.</h5>
                                <div class="text-gray-500 smaller">September 16th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">I've had Unlimitedville service for almost 3 months now....The saying "it is what
                        it is" is what this service is. I pay my bill on time every month and I get great fast unlimited
                        service ...I live in the country and this plan was tailored to me...Thanks Unlimitedville.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Richard N.</h5>
                                <div class="text-gray-500 smaller">August 5th</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">The Hot Spot arrived on time as promised. Opened up the box. Turned it on and
                        PRESTO it worked immediately. I have several hot spots that support my job and business from
                        various companies and are very expensive. I am going to cancel them all. Unlimited will never
                        run out unless you are careless with your use. Hard to go wrong.</div>
                </article>
                <article class="card col-lg-6 mb-4 p-4 border-gray-100">
                    <header>
                        <div class="media">
                            <div class="mr-4">
                                <div class="bg-gray-100 rounded-circle py-1 px-2">
                                    <img src="/svg/uv-logomark.svg" width="20">
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Jennifer C.</h5>
                                <div class="text-gray-500 smaller">August 1st</div>
                            </div>
                            <div class="ml-auto text-success">
                                <i class="fas fa-check-circle"></i>
                                Verified Member
                            </div>
                        </div>
                    </header>
                    <div class="mt-4">So far, so good. I got my hotspot today and it worked instantly. This is the first
                        time since we have moved to our house in a rural area that we have had the freedom to do some of
                        the things we need to stay connected without worrying about data usage and paying overages.
                        Thank you Unlimitedville!</div>
                </article>
            </div>
        </div>
        <div class="container container-sm mt-6">
            <h3 class="text-center mb-4">What’s Your Story?</h3>
            <p class=" text-center mb-4 text-gray-600">Share your experience as an Unlimitedville member.</p>
            <review-form :initial-user="[]"></review-form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="reviewForm" tabindex="-1" role="dialog" aria-labelledby="reviewFormLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewFormLabel">What’s Your Unlimitedville Story?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <review-form :initial-user="[]"></review-form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
