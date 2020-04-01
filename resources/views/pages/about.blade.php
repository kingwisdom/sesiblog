@extends('layouts.temp')

@section('title')
    About
@endsection

@section('content')
    <!--main-->
    <div class="jumbotron1">
        <h1>Helping You Make the <br>
            Most of Your Time Online </h1>
    </div>
    
    <main class="container">
        <!--main starts here-->
        <h3>What you need to Know</h3>
        <div class="why-mma ">
            <div class="solutions">
                <h4>Why MMA</h4>
                <p>
                    MAA stands for Mobile Advertising Agents, an advertising firm currently building an advertising
                    community to be made up of broadcasters, clients, audience and agent, with the aim and objective of
                    promoting and advertising members businesses by broadcasting / posting / sharing using the most
                    widely use and effective social media platform: Whatsapp.
                    <br><br>The community already have over 200,000 members throughout the country and this is expanding
                    geometrically on daily bases. The driving force for this expansion is the scheme introduced by MAA,
                    where broadcasters and agents
                    are paid for sharing information on WHATSAPP.
                    Presently MAA is the only firm that pay you for such service, we believed data can be effectively
                    use to promote ones business or others business (advertisement) and get paid than using the data for
                    non profitable activities..</p>
            </div>
            <div class="solutions">
                <h4>Why Should I Join MAA</h4>
                <p> One of the benefit Of MAA is that every member of MAA community is entitle to a discounted advert
                    rate on his or her
                    business, besides that, a BROADCASTER -get paid for using its data to promote and advertise goods,
                    products or services of other members of the community,<br>
                    <ul>
                        <li> Belong to a business community of over 200,000 members scattered nationwide.
                        </li>
                        <li> Access to an average of 6 paid ad per week.</li>
                        <li> An AGENT have a certain commission for facilitating client for MAA</li>
                        <li>An AUDIENCE get update of goods, services and products within its locality at the most
                            affordable price
                            a CLIENT have its products, goods and services broadcasted and delivered to the public smart
                            phones nationwide, making his/her business -GO VIRAL.</li>
                    </ul>



                    Why MAA Pay You As a smart phone user with active whatsapp account, no doubt you have friends
                    (contacts) who are equally having active whatsapp account too, if MAA uploaded an advert and you
                    download and share the ad to other whatsapp friends on your phone, you are surely advertising MAA
                    clients business, in doing this you're using your expensive data to promote others businesses, MAA
                    pays you for the data used, the payment is a function of numbers of your friends who see the ad and
                    the ad rate. the clients already make payment to MAA for such advertising service.<br><br><br>

                    <h4>How Does MAA Gets Its Money </h4><br>
                    For every advert services run by MAA for a client, we
                    have a fix percentage as commission billed into the service charge, to be borne by the client.
                    We pay tax, bank commission and charges and we maintain staff and our systems. the service charge
                    paid by client is a function of ad rates, bouquet, ad type, ad platform etc. eg if a client want a
                    5000 audience (ie bouquet) for an advert rate of 1.5, (banner), the client will pay (5000 x 1.5) +
                    25% of (5000 x 1.5). the 25% is for MAA while the (5000 x 1.5) is for broadcasters who distributed
                    the adverts to their friends, each broadcasters get 1.5 x No of friends who received and see the
                    advert.<br><br><br>

                    <h4>Basic Requirement To Join MAA </h4><br>
                    <ul>
                        <li> A smart phone with a whatsapp account and screenshot function
                        </li>
                        <li> A minimum of 50 contacts also with active whatsapp account </li>
                        <li> an AGENT have a certain commission for facilitating client for MAA</li>
                        <li>A business, service, products or skill you want people to know. (optional)
                            affordable price</li>
                        <li> A bank account</li>
                    </ul>

                </p>
            </div>
            <div class="solutions terms">
                <h4>Basic term in MAA</h4>
                <p>
                    A BROADCASTER: a certify member of the MAA community who share, paid or non-paid ad to contacts
                    (audience) on his/her phone and get paid for such services<br> <br>


                    AUDIENCE (Recipients) Active whatsapp account owners in a broadcaster’s phone contact, listed in the
                    broadcast page<br> <br>

                    AUDIENCE (Recipients): Active whatsapp account owners in a broadcaster’s phone contact, listed in
                    the broadcast page
                    SCREENSHOT: Picture of the current image or information on the broadcaster’s phone screen.<br> <br>


                    NEW BROADCAST:
                    A whatsapp menu feature to create a broadcast page.<br> <br>

                    BROADCASTING:
                    the act of distributing information to many audiences at once.<br> <br>


                    ADVERT (AD):
                    Information about business with details of contacts and other relevant details.<br> <br>


                    ADVERT TYPE (AT): medium in which the advert is conveying, i.e., TEXT, link, slide, video,
                    picture/banner/photo, voice, Gif etc <br> <br>
                    ADVERT RATE (AR): amount charge per advert type, this is a
                    function of seconds in video, Gif and voice advert. <br> <br>
                    ADVERT CATEGORY (AC): ad can be classify as
                    Fashion (F), Automobile (Au), Food and Drinks (Fd), Phones and Accessories (Pa), Others (O)
                    ADVERT GROUP (AG): ad can be classify as political, religious, public announcement, business or
                    general BOUQUET: numbers of audience requested by client in an advert service, minimum is 2000
                    COST OF BROADCAST (COB): ad rate x bouquet. <br> <br>

                    SERVICE CHARGE (SC): certain percentage (%) of COB +
                    COB CLIENT: individual, company or corporate firm requesting the service of MAA. AGENT:
                    individual or organization sourcing for client for MAA, may also be a member of the community or
                    not. <br> <br>
                    PAID Ad (PA): Advert submitted and paid for by client to be broadcasted / post / shared
                    <br> <br>
                    NON-PAID Ad (NPA): sample of Ad use for training purpose or MAA sponsored add for its member(s)
                    for awareness or otherwise. <br> <br>
                </p>

            </div>
        </div>
    </main>
    <div class="payments ">

        <div class="easy-payments">
            <!--easy payments-->
            <img src="{{ asset('theme/images/money.png') }}" alt="payments" />
            <div class="shift">
                <h3>Easy and Secure Payments</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim tristique lorem
                    pulvinar cursus augue
                    dictum quis massa. Dui pharetra morbi arcu . <br>


                </p>
                <div class="div"><a href="{{route('register')}}">Get Started</a> </div>
            </div>

        </div>


    </div>
    <div class="solutions container">
        <h4>Other Terms in MAA</h4>
        <p> EVIDENCE OF VIEW (EOV): a screen shot revealing the numbers of viewers on the
            broadcasters status on a given ad <br> <br>
            EVIDENCE OF CONTACTS (EOC): a screen shot showing the actual
            numbers of contact on a broadcasters phone, its phone contact. CLAIM: payment entitlement after
            every paid ad is broadcasted. This is a function of numbers of the broadcaster’s audience who
            actually see the ad after two days of broadcast. <br> <br>
            ADVERT PLATFORM (AP) MAA have three platforms
            to place an ad, by broadcasting, by sharing / posting in a group or by placing on broadcaster’s
            status. Broadcasters have the option of participating in any of the platform. Each platform have
            different ad rate and modality of operations. <br> <br>
            CLAIM VALUE (CV): Amount calculated by MAA account
            department or the broadcaster for the service of broadcasting / posting / sharing, every
            broadcaster should know how claims are calculated, and should be sent forward for verification
            and reconciliation before claims are paid.
            EVIDENCE OF BROADCAST (EOB); A screen shot proving the broadcaster
            broadcasted the given Ad. <br> <br>
            TIME, DATE OF BROADCAST (TDOB); typing the time and date in which the
            broadcast was made, this is type below the EOB above, time is 24 hours e.g. 18 Aug 2019, 16:27.
            Every member is expected to change their phone time setting to 24 hour. <br> <br>
            EVIDENCE OF SEEN (EOS):
            a screen shot showing numbers of broadcaster’s audiences (recipients) who actually see the
            broadcasted ad. <br> <br>
        </p>
    </div>

    <div class="cta">

        <button class="action"><img src="{{ asset('theme/images/logos_whatsapp.png') }}" alt=""><a>
                Join Our WhatsApp Platform
            </a></button>
    </div>


@endsection