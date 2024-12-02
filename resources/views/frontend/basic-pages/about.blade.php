@extends('frontend.master')
@section('title'){{ 'Biddabari | About Us'}}@endsection
@section('body')
<main>

    <section id="About_us_banner" class="background-res background-opt py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/about-us/about-us-banner.webp')">
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <h2 class="fw-bold text-white" style="font-size: 48px;!important;">আমাদের সম্পর্কে </h2> <br>
                    <p class="text-white" style="line-height: 38px; font-size: 20px;!important;">
                        প্রতিযোগিতামূলক চাকরি পরীক্ষার প্রস্তুতির জন্য <br> দেশের সর্বপ্রথম ও সর্ববৃহৎ অনলাইন প্লাটফর্ম <b> "বিদ্যাবাড়ি"</b>
                    </p>
{{--                    <div class="title-area-button">--}}
{{--                        <a href="" type="button" class="btn btn_warning">Our Course</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <section id="We_are" class="background-res-about py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-bg.png')">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-12 col-lg-6">
                    <div class="we-are-content-area">
                        <div class="we-are-title">
                            <h2 class="fw-bold" style="font-size: 34px;!important;">এক নজরে <span>"বিদ্যাবাড়ি"</span></h2><br>
                            <p style="font-size: 15px;!important;">
                                লক্ষাধিক বেকার শিক্ষার্থী তাদের স্নাতক শেষ করেই সরকারি-বেসরকারি চাকরির জন্য প্রস্তুতি নেয়া শুরু করে। এক্ষেত্রে তারা গাইডলাইন বা পরামর্শের জন্য চাকরির প্রস্তুতিতে সহায়তা করে এরকম বিভিন্ন প্রতিষ্ঠানের শরণাপন্ন হয় এবং বহু অর্থ খরচ করে। কিন্তু এই প্রতিষ্ঠানগুলোর অবস্থান মূলত ঢাকায়, নয়তো দেশের বিভাগীয় শহর গুলোতে। দেশের প্রত্যন্ত অঞ্চলের চাকরি প্রত্যাশীরা চাইলেও সরাসরি গিয়ে সুবিধা নিতে পারেনা।
                                <br><br>
                                তাছাড়া এ সকল প্রতিষ্ঠানে অনেক বেশি কোর্স ফি থাকে এবং পড়াশোনার মান যথার্থ না হওয়ায় চাকরি প্রত্যাশীরা পরিপূর্ণ প্রস্তুতির অভাবে তাদের কাঙ্ক্ষিত লক্ষ্যে পৌঁছাতে পারেন না। এতে সরকারি চাকরির স্বপ্ন অনেক ক্ষেত্রে স্বপ্নই থেকে যায়।
                                <br><br>
                                এ সকল বিষয়গুলো চিন্তা করেই ক্যারিয়ার বিশেষজ্ঞ ও বিসিএস ক্যাডার মাইদুল ইসলাম প্রধান যিনি সবার কাছে এম আই প্রধান মুকুল স্যার হিসেবেই বিশেষ পরিচিত, তিনি ২০১৯ সালের শেষের দিকে <b style="color: #aa076b;">"বিদ্যাবাড়ি"</b> নামে চাকরি প্রস্তুতির জন্য একটি অনলাইন প্লাটফর্ম প্রতিষ্ঠার উদ্যোগ গ্রহণ করেন।
                                <br><br>
                                অজপাড়াগাঁ কিংবা ঢাকার ব্যস্ততায় বিসিএস, ব্যাংক জব, প্রাইমারি শিক্ষক নিয়োগ, শিক্ষক নিবন্ধন, ১১-২০ গ্রেডসহ সকল চাকরি পরীক্ষার গোছানো প্রস্তুতি সেটিও একেবারে বাড়িতে বসেই সম্পন্ন করা যায় অনলাইন ডিজিটাল প্লাটফর্ম <b style="color: #aa076b;">"বিদ্যাবাড়ি"</b> থেকে। জুম লাইভ ক্লাসের মাধ্যমে নানারকম প্রয়োজনীয় ও গুরুত্বপূর্ণ তথ্য সরবরাহ করে সেগুলোর উপর অ্যাসাইনমেন্ট দিয়ে, ফেসবুক লাইভের মাধ্যমে প্রশ্ন সমাধান করে এবং জুম লাইভের মাধ্যমে বিভিন্ন সমস্যার সমাধান করে ও এক্সক্লুসিভ লেকচার শিট কুরিয়ার করে বিদ্যাবাড়ি'র সাথে যুক্ত শিক্ষার্থীদের প্রস্তুত করে তোলা হচ্ছে। এমনভাবে চাকরি প্রত্যাশী শিক্ষার্থীদের অ্যাসাইনমেন্ট দেয়া হচ্ছে যেন তারা একাডেমিক পড়াশোনা করছেন এবং এগুলোর সবই হচ্ছে অনলাইনে।
                                <br><br>
                                বর্তমানে বিদ্যাবাড়ির সামাজিক যোগাযোগ মাধ্যম অর্থাৎ ফেসবুক পেইজ, ইউটিউব চ্যানেলের মাধ্যমে চাকরি প্রত্যাশীরা বিনামূল্যে সেবা পাচ্ছেন। তাছাড়া অ্যাডভান্স প্রস্তুতির জন্য বিদ্যাবাড়ির অ্যাপ এবং ওয়েবসাইট তো রয়েছেই।
                            </p>
                        </div>
                        {{--<div class="we-are-button">
                            <a href="" type="button" class="btn btn_warning">See All</a>
                        </div>--}}
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="we-are-image-area">
                        <img src="{{ asset('frontend') }}/assets/images/about-us/we-are.jpg" class="w-100" alt="" srcset="">
                        <!-- <div class="row">
                            <div class="col-md-9 me_0">
                                <div class="we-are-img1">
                                    <img src="{{ asset('frontend') }}/assets/images/about-us/we-are1.png" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12 ms_0">
                                        <div class="we-are-img2">
                                            <img src="{{ asset('frontend') }}/assets/images/about-us/we-are2.jpeg" alt="" srcset="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 ms_0">
                                        <div class="we-are-img3">
                                            <img src="{{ asset('frontend') }}/assets/images/about-us/we-are-3.jpeg" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="we-are-img4">
                                    <img src="{{ asset('frontend') }}/assets/images/about-us/we-are4.jpeg" alt="" srcset="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Why_biddabari" class="background-res-why background-ats"
        style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/main-category-bg.jpg')">
        <div class="container">
            <div class="row gy-md-4 gy-lg-0 align-items-center">
                <div class="col-md-6">
                    <div class="why-biddabari-img-area">
                        <img src="{{ asset('frontend') }}/assets/images/about-us/why.webp" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-biddabari-content-area">
                        <div class="title-area"><br>
                            <h1 class=" fw-bold text-white">
                                <span>বিদ্যাবাড়ি</span> কেন আলাদা -
                            </h1><br>
                            <p class="text-white">
                                <b style="color: #aa076b; font-size: 17px;!important;"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> বেসিক ক্লাসঃ</b> কোর্সের মূল ক্লাস শুরু হওয়ার পূর্বেই বিষয়ভিত্তিক ৩টি বেসিক ক্লাসের আয়োজন করা হয়, যাতে কোর্স সম্পর্কিত সম্যক ধারণা প্রদান করা হয়।<br><br>
                                <b style="color: #aa076b; font-size: 17px;!important;"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> ওরিয়েন্টেশন ক্লাসঃ</b> মূল ক্লাস শুরুর পূর্বে কোর্স, পরীক্ষা, অ্যাসাইনমেন্ট,বুকলিস্ট, প্রসপেক্টাস, রুটিন, ক্লাসপদ্ধতি, নিয়মনীতি ইত্যাদি সংক্রান্ত বিস্তারিত আলোচনা করা হয়।<br><br>
                                <b style="color: #aa076b; font-size: 17px;!important;"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> পিডিএফঃ</b> প্রতিটি লেকচারের পিডিএফ পূর্বেই ব্যাচে আপলোড করা হয় যাতে করে শিক্ষার্থীরা ক্লাসের পূর্বেই উক্ত ক্লাস সম্পর্কে ধারণা নিতে পারে।<br><br>
                                <b style="color: #aa076b; font-size: 17px;!important;"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> সলভ ক্লাসঃ</b> সমস্যা সমাধানের জন্য রয়েছে অতিরিক্ত লাইভ সলভ ক্লাস।<br><br>
                                <b style="color: #aa076b; font-size: 17px;!important;"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> গাইড লাইনঃ</b> এক্সপার্ট মেন্টরদের সমন্বয়ে বাড়িতে হোম এসাইনমেন্ট দেয়া হয় অর্থাৎ চাকরি প্রত্যাশী শিক্ষার্থীরা বাড়িতে কোন বিষয়ের কোন টপিক কীভাবে পড়বে, কতটুকু পড়বে, তার সঠিক দিকনির্দেশনা দেওয়া হয়।<br><br>
                                <b style="color: #aa076b; font-size: 17px;!important;"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> পরীক্ষাঃ</b> প্রতিটি হোম এসাইনমেন্টের নির্ধারিত সময় শেষে বিদ্যাবাড়ির অ্যাপ ও ওয়েবসাইটের মাধ্যমে পরীক্ষা নেয়া হয়।<br><br>
                                <b style="color: #aa076b; font-size: 17px;!important;"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i> কেয়ার লাইভঃ</b> কোর্স সংক্রান্ত সমস্যাসহ এবং অন্যান্য যে কোনো সমস্যা সমাধানের জন্য প্রতিমাসে একদিন কেয়ার লাইভের মাধ্যমে কোর্সহেড জুম লাইভে সরাসরি শিক্ষার্থীদের সাথে আলোচনা করেন ।<br><br>
                                <br>
                                এ সকল ভিন্নধর্মী সেবার মাধ্যমে অন্যান্য গতানুগতিক অনলাইন শিক্ষার প্ল্যাটফর্ম এর সাথে বিদ্যাবাড়ির একটা সুস্পষ্ট পার্থক্য তৈরি হয়েছে। তাই বর্তমানে হাজার হাজার বিসিএস, ব্যাংক জব, প্রাইমারিসহ সরকারি-বেসরকারি চাকরি প্রস্তুতিতে শিক্ষার্থীদের জন্য এক অনন্য আস্থার নাম বিদ্যাবাড়ি।

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Our_goals" class="background-res background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/home-page-category-bg.png')">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h1 class="fw-bold">আমাদের
                        <span class="">লক্ষ্য</span>
                    </h1><br>
                    <p style="color: #0a080e; font-size: 18px;!important;">
                        বিদ্যাবাড়ি প্রতিযোগিতামূলক চাকরির পরীক্ষার প্রস্তুতির জন্য একটি অনন্য শিক্ষাপ্রতিষ্ঠান। যেখানে শিক্ষার উন্নয়ন, গবেষণা এবং জ্ঞান বৃদ্ধির উদ্দেশ্যে কাজ করা হয়। বিদ্যাবাড়ি চাকরি প্রার্থীদের কাঙ্ক্ষিত সাফল্য অর্জনের জন্য আপ্রাণ চেষ্টা চালিয়ে যাচ্ছে। কারন, চাকরি প্রার্থীদের সাফল্য মানেই বিদ্যাবাড়ির সাফল্য। প্রকৃতপক্ষে, বিদ্যাবাড়ির লক্ষ্য সাধারণভাবে শিক্ষার মাধ্যমে সমাজের উন্নতি ঘটানো, প্রতিভার বিকাশ এবং একটি উন্নত ও বৈষম্যহীন সমাজ প্রতিষ্ঠার জন্য কাজ করা।
                        <br><br>
                        বিদ্যাবাড়ি লক্ষ্য ও উদ্দেশ্য বাস্তবায়নের জন্য নিম্নোক্ত উপায়ে কাজ করে থাকে -

                    </p>
                </div>
            </div>
            <div class="our-goals-card-area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="our-goals-card-content">
                            <div class="our-goals-card-icon">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <div class="our-goals-card-text">
                                <h3>গবেষণা ও উন্নয়ন</h3>
                                <p>
                                    বিদ্যাবাড়ি্র গবেষণা ও উন্নয়ন বিভাগ বিভিন্ন চাকরির পরীক্ষার প্রশ্ন, প্রশ্ন প্যাটার্ন,সিলেবাস ইত্যাদি অ্যানালাইসিস করে প্রশ্নের ব্যাখ্যা,লেকচার শিট প্রণয়ন,আপডেট তথ্য সংযোজন,নতুন নতুন কৌশল সংযোজন,সাজেশন তৈরি,ডাইজেস্ট ইত্যাদি প্রণয়নের মাধ্যমে শিক্ষার্থীদের চাকরি প্রস্তুতিকে ত্বরান্বিত করতে প্রতিনিয়ত নিরলস পরিশ্রম করে যাচ্ছে।
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our-goals-card-content">
                            <div class="our-goals-card-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="our-goals-card-text">
                                <h3>পেশাগত দক্ষতা অর্জন</h3>
                                <p>
                                    শুধু চাকরির পরীক্ষার প্রস্তুতি নয় বরং বিভিন্ন প্রফেশনাল স্কিল (যেমন: ভিডিও এডিটিং,কম্পিউটারের বেসিক দক্ষতা, ডিজিটাল মার্কেটিং ইত্যাদি) ডেভেলপমেন্টের মাধ্যমে তরুন প্রজন্মকে বেকারত্বের হাত থেকে মুক্ত করার চেষ্টা করে যাচ্ছে।
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our-goals-card-content">
                            <div class="our-goals-card-icon">
                                <i class="fa-solid fa-hands-holding-child"></i>
                            </div>
                            <div class="our-goals-card-text">
                                <h3>চাকরির প্রস্তুতি সহজতর করা</h3>
                                <p>
                                    একদল দক্ষ মেন্টর কর্তৃক চাকরি প্রার্থীদের সঠিক এবং কার্যকরী গাইডলাইন প্রদান করা হয় যাতে চাকরি প্রার্থীরা সঠিক প্রস্তুতির মাধ্যমে সরকারি বা বেসরকারি চাকরির পরীক্ষায় সফল হতে পারে।
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our-goals-card-content">
                            <div class="our-goals-card-icon">
                                <i class="fa-solid fa-hands-holding-circle"></i>
                            </div>
                            <div class="our-goals-card-text">
                                <h3>পরীক্ষার পূর্ববর্তী প্রস্তুতি</h3>
                                <p>
                                    অ্যাসাইনমেন্ট টেস্ট, সাবজেক্টিভ টেস্ট, মডেল টেস্ট, উইকলি টেস্ট  এবং মান্থলি টেস্টের আয়োজনের মাধ্যমে শিক্ষার্থীদের বাস্তব পরীক্ষার জন্য প্রস্তুত করে তোলা হয়।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--  <section id="Our_team" class="py-5"--}}
{{--        style="background-image: url('{{ asset('frontend') }}/assets/images/about-us/team-bg.jpg')">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="title-area text-center">--}}
{{--                    <h2 class="fw-bold">Meet Our <span>Team</span>--}}
{{--                    </h2>--}}
{{--                    <br>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="our-team-card-area py-4">--}}
{{--                <div class="row g-4">--}}
{{--                    @foreach($ourTeams as $key => $ourTeam)--}}
{{--                    <div class="col-md-6 col-lg-3">--}}
{{--                        <div class="our-team-card">--}}
{{--                            <div class="our-team-image">--}}
{{--                                <img src="{{ static_asset($ourTeam->image ? $ourTeam->image : 'https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg' ) }}" alt="" srcset="" width="60%">--}}
{{--                            </div>--}}
{{--                            <div class="our-team-content">--}}
{{--                                <h3>{{ $ourTeam->name ?? 'Name' }}</h3>--}}
{{--                                <h6 class="text-muted">Managing Director</h6>--}}
{{--                                <p>{{ $ourTeam->designation ?? 'designation' }}</p>--}}
{{--                            </div>--}}
{{--                            <div class="our-team-social-link">--}}
{{--                                <div class="facebook-icon"><a href="">--}}
{{--                                        <i class="fa-brands fa-facebook-f"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="twiter-icon"><a href="">--}}
{{--                                        <i class="fa-brands fa-twitter"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="insta-icon"><a href="">--}}
{{--                                        <i class="fa-brands fa-instagram"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="github-icon"><a href="">--}}
{{--                                        <i class="fa-brands fa-github"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

</main>

@endsection
