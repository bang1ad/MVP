@extends('frontend.layouts.app')
@section('content')
<main id="myPage">
    <section id="step1" class="step">
      <input type="hidden" class="bang_type" name="" value=""/>
      <div class="y-section issue-yellow">
        <div class="container issue-1-set">
          <div class="top-section align-items-center">
            <div class="col-lg-6">
              <div class="section-left-items margin0">
                <span class="issue-font issue-start">
                  <span class="large-font">
                    Need a plumber?<br />
                    <br />
                  </span>
                  Or maybe you need a bike service? Well, the first price you
                  should check is your home's 2023 BANG! price
                </span>
                <div class="bang-text p-3">
                  <a href="#" class="issue-btn" role="button"
                    >Set The Bangs!
                    <span
                      class="btn-arrow-icon align-middle material-symbols-outlined"
                    >
                      arrow_forward
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 only-desktop">
              <img class="section-img-1" src="{{asset('frontend/img/phone-group.png')}}" />
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 text-black text-bold margin0">
              <span
                class="text-black h3 text-bold issue-1-text issue-font-family issue-font"
              >
                OK! I’m intrigued, what are BANGS!
              </span>
              <p class="issue-2-text">
                BANGS! are exclusive prices for your home. You get 1 BANG! in
                each category and they can be used by you and anyone you live
                with.
              </p>
            </div>
          </div>
          <div class="col-lg-6 issue-image-container only-mobile">
            <img class="issue-image" src="{{asset('frontend/img/phone-group.png')}}" />
          </div>
        </div>
      </div>

      <div class="b-section issue-black">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-12 text-center text-white text-bold my-4 margin0"
            >
              <h1 class="issue-3-heading">The 2023 BANGS</h1>
              <p class="max-width-500 margin0 font-size-20 issue-3-text">
                BANGS! are available in some in some parts of London and
                Manchester. More locations and BANG! categories coming soon
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="r-section">
        <div class="container">
          <div class="row only-mobile">
            <div class="col-lg-12 text-center text-white">
              <h1 class="issue-4-heading-1 issue-font-family">
                YOUR HOME’S 2023
              </h1>
              <h2 class="issue-font issue-4-heading-2">TRADESPERSON BANG!</h2>
            </div>
          </div>

          <div class="top-section top-section_b align-items-center">
            <div class="col-lg-6 issue-4-image">
              <img class="section-img-b" src="{{asset('frontend/img/card-tradersperson.png')}}" />
            </div>
            <div class="col-lg-6 mx-auto">
              <div
                class="section-left-items margin0 text-white max-width-400 issue-4-set-2"
              >
                <span class="h4 text-bold issue-4-heading-3">
                  Need a tradesperson ?
                </span>

                <p class="text-bold issue-4-text">
                  Use you home’s annual tradesperson BANG! for 2023 and SAVE!
                </p>
                <span class="issue-down-arrow">
                  <span
                    id="issue-down-arrow"
                    onclick="toggleIssueDropdown()"
                  ></span>
                </span>
                <ul
                  class="margin-left-20 only-desktop"
                  id="issue-down-arrow-visible"
                >
                  <li>Your home gets 1 tradespersion BANG! a year</li>
                  <li>Jobs completed by local experts</li>
                  <li>SAVE MONEY!</li>
                  <li>Transparent prices</li>
                </ul>
                <div class="bang-white padding-left-0 p-5">
                  <a
                    href="#"
                    onclick="nextTrade()"
                    class="width-300 btn text-black btn-yellow issue-4-btn"
                    role="button"
                    >GET YOUR HOME’S BANG!</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="y-section">
        <div class="container">
          <div class="row only-mobile">
            <div class="col-lg-12 text-center text-black">
              <h1 class="issue-4-heading-1 issue-font-family">
                YOUR HOME’S 2023
              </h1>
              <h2 class="issue-font issue-10-text">BIKE SERVICE BANG!</h2>
            </div>
          </div>
          <div class="top-section top-section_b align-items-center">
            <div class="col-lg-6 only-mobile issue-5-image">
              <img class="section-img-b" src="{{asset('frontend/img/card-bike.png')}}" />
            </div>
            <div class="col-lg-6 mx-auto">
              <div class="section-left-items margin0">
                <span class="text-black h4 text-bold"
                  >Need a bike service ?</span
                >
                <p class="text-bold issue-4-text">
                  Use you home’s annual Bike Service BANG! for 2023 and SAVE!
                </p>
                <span class="issue-down-arrow-2">
                  <span
                    id="issue-down-arrow-2"
                    onclick="toggleIssueDropdown2()"
                    class="text-black"
                  ></span>
                </span>
                <ul
                  class="margin-left-20 only-desktop"
                  id="issue-down-arrow-visible-2"
                >
                  <li>Your home gets 1 tradespersion BANG! a year</li>
                  <li>Jobs completed by local experts</li>
                  <li>SAVE MONEY!</li>
                  <li>Transparent prices</li>
                </ul>
                <div class="bang-text padding-left-0 p-5">
                  <a
                    href="#"
                    onclick="nextBike()"
                    class="width-300 btn text-white btn-red issue-5-btn"
                    role="button"
                  >
                    GET YOUR HOME'S BANG!</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-6 only-desktop">
              <img class="section-img-b" src="{{asset('frontend/img/card-bike.png')}}" />
            </div>
          </div>
        </div>
      </div>

      <div class="b-section">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-12 text-center text-white text-bold pedding-rem5 margin0 issue-6-set-1"
            >
              <div class="lower-bottom-section">
                <h4
                  class="heading-4 text-uppercase issue-font issue-6-heading"
                >
                  How it works?
                </h4>
                <div class="lower-text">
                  <span class="issue-4-text issue-6-heading">
                    It’s expensive out there, right? Fear not, your home has 1
                    BANG a year in each <br />
                    category and guarantees you an exclusive price. Here’s how
                    it works.</span
                  >
                </div>
                <div class="bottom-items text-black">
                  <div class="bottom-item-card yellow-bg issue-7-container">
                    <div class="check-mark issue-7-check-mark">
                      <img src="{{asset('frontend/img/click.png')}}" alt="" />
                    </div>
                    <div class="bottom-item-info">
                      <h4 class="issue-7-heading">Unlock</h4>
                      <p class="issue-7-text">
                        Select the BANG! type, enter your postcode and find
                        your home
                      </p>
                    </div>
                  </div>

                  <div class="bottom-item-card yellow-bg issue-7-container">
                    <div class="check-mark issue-7-check-mark">
                      <img src="{{asset('frontend/img/click.png')}}" alt="" />
                    </div>
                    <div class="bottom-item-info">
                      <h4 class="issue-7-heading">Email</h4>
                      <p class="issue-7-text">
                        Enter your email and you’ll receive your unique BANG!
                        code shortly after
                      </p>
                    </div>
                  </div>

                  <div class="bottom-item-card yellow-bg issue-7-container">
                    <div class="check-mark issue-7-check-mark">
                      <img src="{{asset('frontend/img/click.png')}}" alt="" />
                    </div>
                    <div class="bottom-item-info">
                      <h4 class="issue-7-heading">Book</h4>
                      <p class="issue-7-text">
                        Follow the instructions to book a quote from your
                        home’s team of experts
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- find Address  -->
    <section id="step2" class="step step-subpage main-section">
      <div class="full-section desktop-yrb mobile-yrb apply-mobile-theam-yrb">
        <div class="container desktop-only">
          <div class="align-items-center">
            <!-- <span>
              <button class="less-arrow" onclick="previousStep()">
                <img width="7" src="img/less-than-arrow.png" alt="" />
              </button>
            </span> -->
            <div>
              <button
                onclick="previousStep()"
                class="less-arrow btn-arrow-icon-back align-middle material-symbols-outlined issue2-hide"
              >
                arrow_back
              </button>
            </div>
            <div class="row justify-content-center process_nav issue2-hide">
              <nav class="nav">
                <a class="nav-link active" href="#">
                  <span class="align-middle material-symbols-outlined">
                    pin_drop
                  </span>
                  Find Address</a
                >
                <a class="nav-link" href="#">
                  <span class="align-middle material-symbols-outlined"
                    >event_note
                  </span>
                  Enter Details</a
                >
                <a class="nav-link" href="#">
                  <span class="align-middle material-symbols-outlined"
                    >check_circle
                  </span>
                  Confirmation</a
                >
              </nav>
            </div>
          </div>
        </div>

        <div class="mobile-only sub-section">
          <div
            class="d-flex justify-content-between align-items-center issue2-1-set"
          >
            <span>
              <button class="less-arrow back-arrow" onclick="previousStep()">
                <!-- <span
                  class="btn-arrow-icon-back align-middle material-symbols-outlined issue2-hide text-"
                >
                  arrow_back
                </span> -->
                <span></span>
              </button>
            </span>

            <span class="heading-4-center mobile-only issue2-heading-1">
              Find your address
            </span>
            <div class="mobile-progressbar1">
              <span class="text-black">1 of 3</span>
            </div>
          </div>
        </div>

        <div class="row">
          <a href="index.html" class="margin0 p-2">
            <img class="star-logo-3" src="{{asset('frontend/img/logo-header-1.png')}}" alt="" />
          </a>
        </div>
        <div class="row p-2 sub-section">
          <h4
            class="heading-4 text-center margin0 font-waigt-600 issue2-heading-2"
          >
            You’re about to BANG!
          </h4>
        </div>
      </div>

      <div class="desktop-only">
        <div class="mobile-yrb apply-mobile-theam-yrb desktop-ryw">
          <div class="container sub-section">
            <div class="hero-card">
              <div class="row card-info">
                <div class="col-lg-6">
                  <div id="traderpersonCard" class="card-left">
                    <div>
                      <img
                        class="card-img"
                        src="{{asset('frontend/img/tradesperson-2.png')}}"
                        alt=""
                      />
                    </div>
                    <div class="card-info-text">
                      <span class="h4 text-bold">So you need a plumber?</span>
                      <span class="h4 text-bold">No problem!</span>

                      <p>
                        The first price you should check is your home’s BANG!
                        Price. Start by finding your home.
                      </p>
                    </div>
                  </div>
                  <div id="bikeCard" class="card-left">
                    <div>
                      <img
                        class="card-img"
                        src="{{asset('frontend/img/bike-card-plain.png')}}"
                        alt=""
                      />
                    </div>
                    <div class="card-info-text">
                      <span class="h4 text-bold">Bike need a service? </span>
                      <span class="h4 text-bold">We’ve got you. </span>

                      <p>
                        When your bike needs a service the first price you
                        should check is your home’s bike service BANG! for
                        2023.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card-right sub-section">
                    <h4 class="">FIND YOUR HOME</h4>
                    <p class="">Type a part of postcode or address</p>
                    <div class="card_custom-select">
                      <input name="search" class="card_select_Address search_address_input"/>
                      <input name="addr_longitude" value="" type="hidden" />
                      <input name="addr_latitude" value="" type="hidden" />
                      <input name="post_code" value="" type="hidden" />
                    </div>
                    <div class="step-item-card location-block">
                      <div class="check-mark blockbg">
                        <img width="14" src="{{asset('frontend/img/map-pin.png')}}" alt="map-pin" />
                      </div>
                      <div class="step-item-info">
                        <h4>Location</h4>
                        <p class="search_address_text">
                          You have told us you live at W2 4EB 29 Pembridge
                          Gardens London
                        </p>
                      </div>
                    </div>
                    <button
                      onclick="nextStep()"
                      class="btn-2 blockbtn op-color"
                    >
                      Next Step
                    </button>
                    <span class=""
                      >In the next step we’ll ask you for your email so we can
                      send you your home’s BANG!</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="main-wrapper desktop-yrb">
          <div class="faqs sub-section">
            <h4 class="heading-3 mb-4">FAQS</h4>
            <div id="s1FaqTr1" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading">
                  What’s a Tradesperson BANG! ?</span
                >
                <span class="down-arrow arrow1 issue2-down-arrow">
                  <span class="faq-arrow-icon1"> </span>
                  <!-- <img
                    class="faq-arrow-icon1"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down1"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text answer1">
                A BANG! is an an exclusive price for a local plumber, heating
                engineer or electrician. Don’t worry other trades are coming
                soon.
              </p>
            </div>
            <div id="s1FaqBi1" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading"
                  >What’s a Bike Service BANG! ?</span
                >
                <span class="down-arrow s1arrow1bi issue2-down-arrow">
                  <span class="s1faq-arrow-icon1bi"></span>
                  <!-- <img
                    class="s1faq-arrow-icon1bi"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down1"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text s1answer1bi">
                A Bike Service BANG! is an exclusive price for 1 local bike
                service in 2023. If your bike needs a service this year make
                sure you check your home’s BANG! price first
              </p>
            </div>
            <div class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading"
                  >How many BANG!S does my home have?</span
                >
                <span class="down-arrow arrow2 issue2-down-arrow">
                  <span class="faq-arrow-icon2"> </span>
                  <!-- <img
                    class="faq-arrow-icon2"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down2"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text answer2">
                Each year we allocate your home with 1 tradesperson BANG!
                which can be used by you and the people you live with.
              </p>
            </div>
            <div id="s1FaqTr2" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading">Who does the work?</span
                ><span class="down-arrow arrow3 issue2-down-arrow"
                  ><span class="faq-arrow-icon3"></span>
                  <!-- <img
                    class="faq-arrow-icon3"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down3"
                /> -->
                </span>
              </div>
              <p class="faqs-item-text answer3">
                We only partner with local experts so not only do you get a
                great price you can be assured that the work is carried out by
                approved and reliable tradespeople.
              </p>
            </div>
            <div id="s1FaqBi2" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading">Who does the work?</span
                ><span class="down-arrow s1arrow3bi issue2-down-arrow">
                  <span class="s1faq-arrow-icon3bi"></span>
                  <!-- <img
                    class="s1faq-arrow-icon3bi"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down3"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text s1answer3bi">
                We partner up with expert local bike technicians to ensure
                you’re not just getting a fantastic price but you’re also
                getting a premium level bike service at the same time. After
                all, that’s what BANG! is all about.
              </p>
            </div>
            <div class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading"
                  >Can I get another BANG! ?</span
                >
                <span class="down-arrow arrow4 issue2-down-arrow">
                  <span class="faq-arrow-icon4"></span>
                  <!-- <img
                    class="faq-arrow-icon4"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down4"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text answer4">
                Of course! Just add the BANG! onto your order so it’s ready to
                use the next time you need an expert
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- need to change -->
      <div class="mobile-only">
        <div class="mobile-ryw apply-mobile-theam-ryw">
          <div class="container pedding-rem2 sub-section">
            <div class="card-information">
              <div id="mobTradeCard" class="card-left">
                <img
                  class="card-img margin0"
                  src="{{asset('frontend/img/tradesperson-2.png')}}"
                  alt=""
                />

                <div class="card-info-text p-2">
                  <span class="subheading-2">
                    So you need a plumber? No problem!
                  </span>
                  <p>
                    The first price you should check is your home’s BANG!
                    Price. Start by finding your home.
                  </p>
                </div>
              </div>
              <div id="mobBikeCard" class="card-left">
                <img
                  class="card-img margin0"
                  src="{{asset('frontend/img/bike-card-plain.png')}}"
                  alt=""
                />
                <div class="card-info-text p-2">
                  <span class="subheading-2 bike-card-heading"
                    >So you need a bike service? No problem!</span
                  >
                  <p>
                    The first price you should check is your home’s BANG!
                    Price. Start by finding your home.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="faqs p-4 sub-section mt-4">
            <h4 class="heading-3 mb-4">FAQS</h4>
            <div id="mob-s1FaqTr1" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading">
                  What’s a Tradesperson BANG! ?
                </span>
                <span class="down-arrow mob-arrow1 issue2-down-arrow">
                  <span class="mob-faq-arrow-icon1"></span>
                  <!-- <img
                    class="mob-faq-arrow-icon1"
                    width="15"
                    src="img/arrow-down-vector.png"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text mob-answer1">
                A BANG! is an an exclusive price for a local plumber, heating
                engineer or electrician. Don’t worry other trades are coming
                soon.
              </p>
            </div>

            <div id="mob-s1FaqBi1" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading"
                  >What’s a Bike Service BANG! ?</span
                >
                <span class="down-arrow mob-s1arrow1bi issue3-down-arrow">
                  <span class="mob-s1faq-arrow-icon1bi"></span>
                  <!-- <img
                    class="mob-s1faq-arrow-icon1bi"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down1"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text mob-s1answer1bi">
                A Bike Service BANG! is an exclusive price for 1 local bike
                service in 2023. If your bike needs a service this year make
                sure you check your home’s BANG! price first
              </p>
            </div>

            <div class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading"
                  >How many BANG!S does my home have?</span
                ><span class="down-arrow mob-arrow2 issue2-down-arrow">
                  <span class="mob-faq-arrow-icon2"></span>
                  <!-- <img
                    class="mob-faq-arrow-icon2"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down2"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text mob-answer2">
                Each year we allocate your home with 1 tradesperson BANG!
                which can be used by you and the people you live with.
              </p>
            </div>

            <div id="mob-s1FaqTr2" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading">Who does the work?</span
                ><span class="down-arrow mob-arrow3 issue2-down-arrow">
                  <span class="mob-faq-arrow-icon3"></span>
                  <!-- <img
                    class="mob-faq-arrow-icon3"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down3"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text mob-answer3">
                We only partner with local experts so not only do you get a
                great price you can be assured that the work is carried out by
                approved and reliable tradespeople.
              </p>
            </div>

            <div id="mob-s1FaqBi2" class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading">Who does the work?</span
                ><span class="down-arrow mob-s1arrow3bi issue2-down-arrow">
                  <span class="mob-s1faq-arrow-icon3bi"></span>
                  <!-- <img
                    class="mob-s1faq-arrow-icon3bi"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down3"
                  /> -->
                </span>
              </div>
              <p class="faqs-item-text mob-s1answer3bi">
                We partner up with expert local bike technicians to ensure
                you’re not just getting a fantastic price but you’re also
                getting a premium level bike service at the same time. After
                all, that’s what BANG! is all about.
              </p>
            </div>

            <div class="faqs-item">
              <div class="d-flex justify-content-between">
                <span class="faqs-item-heading"
                  >Can I get another BANG! ?</span
                >
                <span class="down-arrow mob-arrow4 issue2-down-arrow">
                  <span class="mob-faq-arrow-icon4"></span>
                  <!-- <img
                    class="mob-faq-arrow-icon4"
                    width="15"
                    src="img/arrow-down-vector.png"
                    alt="arrow-down4"
                /> -->
                </span>
              </div>
              <p class="faqs-item-text mob-answer4">
                Of course! Just add the BANG! onto your order so it’s ready to
                use the next time you need an expert
              </p>
            </div>
          </div>
        </div>
        <div class="mobile-yrb apply-mobile-theam-yrb">
          <div class="card-right p-4 sub-section">
            <h4 class="issue2-heading-3">FIND YOUR HOME</h4>
            <p class="issue-2-text-3">Type a part of postcode or address</p>
            <div class="card_custom-select">
              <input name="search_1" class="card_select_Address mob_search_input search_address_input"/>
              {{-- <select class="card_select_Address">
                <option class="custom_address_box" disabled selected>
                  Find Address
                </option>
                <option
                  style="white-space: pre-wrap"
                  class="custom_address_box text-black bg-success"
                  disabled
                >
                  We've just lanuched! BANGS! <br />are available in these
                  postcode <br />areas only.
                </option>

                <option class="custom_address_box">
                  W2, Westminister, London
                </option>
                <option class="custom_address_box">
                  NW8, Kilburn, London
                </option>
                <option class="custom_address_box">
                  SW1E, Victoria, London
                </option>
              </select> --}}
            </div>
            <div class="step-item-card location-block">
              <div class="check-mark blockbg">
                <img width="14" src="{{asset('frontend/img/map-pin.png')}}" alt="map-pin" />
              </div>
              <div class="step-item-info">
                <h4>Location</h4>
                <p>
                  You have told us you live at W2 4EB 29 Pembridge Gardens
                  London
                </p>
              </div>
            </div>
            <button
              onclick="nextStep()"
              class="btn-2 blockbtn op-color yellow-bg-btn"
            >
              Next Step
            </button>
            <span class="issue2-end-text"
              >In the next step we’ll ask you for your email so we can send
              you your home’s BANG!</span
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Enter details  -->
    <section id="step3" class="step step-subpage main-section">
      <div class="full-section desktop-yrb mobile-yrb apply-mobile-theam-yrb">
        <div class="container desktop-only">
          <div class="align-items-center">
            <!-- <span>
              <button class="less-arrow" onclick="previousStep()">
                <img width="7" src="img/less-than-arrow.png" alt="" />
              </button>
            </span> -->
            <div>
              <button
                onclick="previousStep()"
                class="less-arrow btn-arrow-icon-back align-middle material-symbols-outlined issue2-hide text-"
              >
                arrow_back
              </button>
            </div>

            <div class="row justify-content-center process_nav issue2-hide">
              <nav class="nav">
                <a class="nav-link active" href="#">
                  <span class="align-middle material-symbols-outlined"
                    >pin_drop
                  </span>
                  Find Address</a
                >
                <a class="nav-link active" href="#">
                  <span class="align-middle material-symbols-outlined"
                    >event_note
                  </span>
                  Enter Details</a
                >
                <a class="nav-link" href="#">
                  <span class="align-middle material-symbols-outlined">
                    check_circle
                  </span>
                  Confirmation
                </a>
              </nav>
            </div>
          </div>
        </div>

        <div class="mobile-only sub-section">
          <div
            class="d-flex justify-content-between align-items-center issue2-1-set"
          >
            <span>
              <button class="less-arrow back-arrow" onclick="previousStep()">
                <!-- <span
                  class="btn-arrow-icon-back align-middle material-symbols-outlined"
                >
                  arrow_back
                </span> -->
                <span></span>
              </button>
            </span>
            <span class="heading-4-center mobile-only mb-1">
              Enter Details
            </span>
            <div class="mobile-progressbar2">
              <span class="text-black">2 of 3</span>
            </div>
          </div>
        </div>

        <div class="row">
          <a href="index.html" class="margin0 p-2">
            <img class="star-logo-3" src="{{asset('frontend/img/logo-header-1.png')}}" alt="" />
          </a>
        </div>
        <div class="row p-2 sub-section">
          <h4
            class="heading-4 text-center margin0 font-waigt-600 issue3-heading-1"
          >
            GREAT NEWS!
          </h4>
        </div>
      </div>

      <div class="full-section desktop-ryw desktop-only">
        <div class="hero-card step-3 sub-section">
          <span
            class="blockbg text-white d-flex align-items-center flex-column map-item"
            style="border-radius: 20px"
          >
            {{-- <img class="map-img" src="{{asset('frontend/img/map.png')}}" alt="map1" /> --}}
            <div class="map-img" id='address_map_1' style='width: 350px; height: 312px;'></div>

            <span class="bang_address_label" style="padding: 5px">
              Tradesperson BANGS! are available at 15 Smith Street London W2
              4EB</span
            >
          </span>

          <div class="card-info1 p-4">
            <div class="card-left1">
              <h4 class="heading-4">WHATS NEXT?</h4>
              <div class="card-left2">
                <div class="vertical-line"></div>
                <div class="item-lists">
                  <div class="number-item">
                    <div class="circle">
                      <span class="step_count">1</span>
                    </div>
                    <div class="item-desc">Receive your BANGS! by email</div>
                  </div>

                  <div class="number-item">
                    <div class="circle">
                      <span class="step_count">2</span>
                    </div>
                    <div class="item-desc">Call your local BANGS! HQ</div>
                  </div>

                  <div class="number-item">
                    <div class="circle">
                      <span class="step_count">3</span>
                    </div>
                    <div class="item-desc">Get your BANGS! price</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-right1">
              <h4 class="heading-4 text-center">LETS BANG!</h4>
              <div class="form-group">
                <input
                  class="custom-input user_email validate_email"
                  type="text"
                  placeholder="Enter email"
                />
                <small class="text-small"
                  >For safe keeping we'll send your BANG! by emaik</small
                >
              </div>
              <div class="form-group">
                <input
                  class="custom-input user_mobile_number"
                  type="text"
                  placeholder="Enter mobile number"
                />
                <small class="text-small"
                  >We'll send your BANG! by text too</small
                >
              </div>
              <button onclick="nextStep()" class="btn-2 blockbtn op-color">
                Get my BANG
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="full-section desktop-yrb desktop-only">
        <div class="faqs">
          <h4 class="heading-3 mb-4 text-black">FAQS</h4>
          <div id="s2FaqTr1" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading text-black"
                >What’s a Tradesperson BANG! ?</span
              ><span class="down-arrow s2arrow1 issue2-down-arrow">
                <span class="s2faq-arrow-icon1"></span>
                <!-- <img
                  class="s2faq-arrow-icon1"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down1"
                /> -->
              </span>
            </div>
            <p class="faqs-item-text s2answer1">
              A BANG! is an an exclusive price for a local plumber, heating
              engineer or electrician. Don’t worry other trades are coming
              soon.
            </p>
          </div>
          <div id="s2FaqBi1" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading text-black"
                >What’s a Bike Service BANG! ?</span
              ><span class="down-arrow s2arrow1bi issue2-down-arrow">
                <span class="s2faq-arrow-icon1bi"></span>
                <!-- <img
                  class="s2faq-arrow-icon1bi"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down1"
              />  -->
              </span>
            </div>
            <p class="faqs-item-text s2answer1bi">
              A Bike Service BANG! is an exclusive price for 1 local bike
              service in 2023. If your bike needs a service this year make
              sure you check your home’s BANG! price first
            </p>
          </div>
          <div class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading text-black">
                How many BANG!S does my home have?</span
              ><span class="down-arrow s2arrow2 issue2-down-arrow">
                <span class="s2faq-arrow-icon2"></span>
                <!-- <img
                  class="s2faq-arrow-icon2"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down2"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s2answer2">
              Each year we allocate your home with 1 tradesperson BANG! which
              can be used by you and the people you live with.
            </p>
          </div>
          <div id="s2FaqTr2" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading text-black"
                >Who does the work?</span
              ><span class="down-arrow s2arrow3 issue2-down-arrow">
                <span class="s2faq-arrow-icon3"></span>
                <!-- <img
                  class="s2faq-arrow-icon3"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down3"
                /> -->
              </span>
            </div>
            <p class="faqs-item-text s2answer3">
              We only partner with local experts so not only do you get a
              great price you can be assured that the work is carried out by
              approved and reliable tradespeople.
            </p>
          </div>
          <div id="s2FaqBi2" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading text-black"
                >Who does the work?</span
              ><span class="down-arrow s2arrow3bi issue2-down-arrow">
                <span class="s2faq-arrow-icon3bi"></span>
                <!-- <img
                  class="s2faq-arrow-icon3bi"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down3"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s2answer3bi">
              We partner up with expert local bike technicians to ensure
              you’re not just getting a fantastic price but you’re also
              getting a premium level bike service at the same time. After
              all, that’s what BANG! is all about.
            </p>
          </div>
          <div class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading text-black"
                >Can I get another BANG! ?</span
              ><span class="down-arrow s2arrow4 issue2-down-arrow">
                <span class="s2faq-arrow-icon4"></span>
                <!-- <img
                  class="s2faq-arrow-icon4"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down4"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s2answer4">
              Of course! Just add the BANG! onto your order so it’s ready to
              use the next time you need an expert
            </p>
          </div>
        </div>
      </div>

      <div class="full-section mobile-yrb apply-mobile-theam-yrb mobile-only">
        <div class="hero-card step-3 p-4 sub-section y">
          <span
            class="blockbg op-color d-flex align-items-center flex-column map-item"
            style="border-radius: 20px"
          >
            {{-- <img class="map-img" src="{{asset('frontend/img/map.png')}} " alt="map1" /> --}}
            <div class="map-img" id='address_map_2' style='width: 350px; height: 312px;'></div>

            <span class="issue3-text" style="padding: 5px">
              Tradesperson BANGS! are available at 15 Smith Street London W2
              4EB
            </span>
          </span>
        </div>
      </div>

      <div class="full-section mobile-ryw apply-mobile-theam-ryw mobile-only">
        <div class="hero-card step-3 sub-section">
          <div class="card-info1 p-4">
            <div class="card-left1">
              <h4 class="heading-4">WHATS NEXT?</h4>
              <div class="card-left2">
                <div class="vertical-line"></div>
                <div class="item-lists">
                  <div class="number-item">
                    <div class="circle">
                      <span class="step_count">1</span>
                    </div>
                    <div class="item-desc">Receive your BANGS! by email</div>
                  </div>

                  <div class="number-item">
                    <div class="circle">
                      <span class="step_count">2</span>
                    </div>
                    <div class="item-desc">Call your local BANGS! HQ</div>
                  </div>

                  <div class="number-item">
                    <div class="circle">
                      <span class="step_count">3</span>
                    </div>
                    <div class="item-desc">Get your BANGS! price</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="full-section mobile-yrb apply-mobile-theam-yrb mobile-only">
        <div class="hero-card step-3 sub-section">
          <div class="card-info1 p-4">
            <div class="card-right1">
              <h4 class="heading-4 text-center">LETS BANG!</h4>
              <div class="form-group">
                <input
                  class="custom-input validate_email mob_user_email"
                  type="text"
                  placeholder="Enter email"
                />
                <small class="text-small"
                  >For safe keeping we'll send your BANG! by email</small
                >
              </div>
              <div class="form-group">
                <input
                  class="custom-input mob_user_mobile_number"
                  type="text"
                  placeholder="Enter mobile number"
                />
                <small class="text-small"
                  >We'll send your BANG! by text too</small
                >
              </div>
              <button
                onclick="nextStep()"
                class="btn-2 blockbtn op-color yellow-bg-btn"
              >
                Get my BANG
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Confirmation -->
    <section id="step4" class="step step-subpage main-section">
      <div class="full-section desktop-yrb mobile-yrb apply-mobile-theam-yrb">
        <div class="container desktop-only">
          <div class="align-items-center">
            <!-- <span>
              <button class="less-arrow" onclick="previousStep()">
                <img width="7" src="img/less-than-arrow.png" alt="" />
              </button>
            </span> -->

            <div>
              <button
                onclick="previousStep()"
                class="less-arrow btn-arrow-icon-back align-middle material-symbols-outlined issue2-hide text-"
              >
                arrow_back
              </button>
            </div>

            <div class="row justify-content-center process_nav issue2-hide">
              <nav class="nav">
                <a class="nav-link active" href="#">
                  <span class="align-middle material-symbols-outlined">
                    pin_drop
                  </span>
                  Find Address</a
                >
                <a class="nav-link active" href="#">
                  <span class="align-middle material-symbols-outlined">
                    event_note
                  </span>
                  Enter Details</a
                >
                <a class="nav-link active" href="#">
                  <span class="align-middle material-symbols-outlined">
                    check_circle
                  </span>
                  Confirmation</a
                >
              </nav>
            </div>
          </div>
        </div>

        <div class="mobile-only sub-section">
          <div
            class="d-flex justify-content-between align-items-center issue2-1-set"
          >
            <span>
              <button class="less-arrow back-arrow" onclick="previousStep()">
                <!-- <span
                  class="btn-arrow-icon-back align-middle material-symbols-outlined"
                >
                  arrow_back
                </span> -->
                <span></span>
              </button>
            </span>
            <span class="heading-4-center mobile-only"> Confirmation </span>
            <div class="mobile-progressbar3">
              <span class="text-black">3 of 3</span>
            </div>
          </div>
        </div>

        <div class="row">
          <a href="index.html" class="margin0 p-2">
            <img class="star-logo-3" src="{{asset('frontend/img/logo-header-1.png')}}" alt="" />
          </a>
        </div>
        <div class="row p-2 sub-section">
          <h4
            class="heading-4 text-center margin0 font-waigt-600 issue3-heading-2"
          >
            Your BANG! is on it’s way
          </h4>
        </div>
      </div>
      <div class="full-section mobile-yrb apply-mobile-theam-yrb desktop-ryw">
        <div class="hero-card step-3 sub-section">
          <div class="hero-card step-4">
            <span
              class="blockbg op-color d-flex align-items-center flex-column map-item"
              style="border-radius: 20px"
            >
              {{-- <img class="map-img" src="{{asset('frontend/img/map.png')}}" alt="map1" /> --}}
              <div class="map-img" id='address_map_3' style='width: 350px; height: 312px;'></div>
              <span  style="padding: 5px" class="issue3-text-2 bang_address_label"
                >The 2023 Tradesperson BANGS! for 15 smith Street London W2
                4EB is on it’s way to your inbox.</span
              >
            </span>
            <button
              class="btn-2 blockbtn op-color yellow-bg-btn finish_steps_button"
              style="padding: 5px"
            >
              FINISH
            </button>
          </div>
        </div>
      </div>
      <div class="desktop-yrb desktop-only">
        <div class="faqs sub-section">
          <h4 class="heading-3 mb-4">FAQS</h4>
          <div id="s3FaqTr1" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading"
                >What’s a Tradesperson BANG! ?</span
              ><span class="down-arrow s3arrow1 issue2-down-arrow">
                <span class="s3faq-arrow-icon1"></span>
                <!-- <img
                  class="s3faq-arrow-icon1"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down1"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s3answer1">
              A BANG! is an an exclusive price for a local plumber, heating
              engineer or electrician. Don’t worry other trades are coming
              soon.
            </p>
          </div>
          <div id="s3FaqBi1" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading"
                >What’s a Bike Service BANG! ?</span
              ><span class="down-arrow s3arrow1bi issue2-down-arrow">
                <span class="s3faq-arrow-icon1bi"></span>
                <!-- <img
                  class="s3faq-arrow-icon1bi"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down1"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s3answer1bi">
              A Bike Service BANG! is an exclusive price for 1 local bike
              service in 2023. If your bike needs a service this year make
              sure you check your home’s BANG! price first
            </p>
          </div>
          <div class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading"
                >How many BANG!S does my home have?</span
              ><span class="down-arrow s3arrow2 issue2-down-arrow">
                <span class="s3faq-arrow-icon2"></span>
                <!-- <img
                  class="s3faq-arrow-icon2"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down2"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s3answer2">
              Each year we allocate your home with 1 tradesperson BANG! which
              can be used by you and the people you live with.
            </p>
          </div>
          <div id="s3FaqTr2" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading">Who does the work?</span
              ><span class="down-arrow s3arrow3 issue2-down-arrow">
                <span class="s3faq-arrow-icon3"></span>
                <!-- <img
                  class="s3faq-arrow-icon3"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down3"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s3answer3">
              We only partner with local experts so not only do you get a
              great price you can be assured that the work is carried out by
              approved and reliable tradespeople.
            </p>
          </div>
          <div id="s3FaqBi2" class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading">Who does the work?</span
              ><span class="down-arrow s3arrow3bi issue2-down-arrow">
                <span class="s3faq-arrow-icon3bi"></span>
                <!-- <img
                  class="s3faq-arrow-icon3bi"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down3"
              /> -->
              </span>
            </div>
            <p class="faqs-item-text s3answer3bi">
              We partner up with expert local bike technicians to ensure
              you’re not just getting a fantastic price but you’re also
              getting a premium level bike service at the same time. After
              all, that’s what BANG! is all about.
            </p>
          </div>
          <div class="faqs-item">
            <div class="d-flex justify-content-between">
              <span class="faqs-item-heading">Can I get another BANG! ?</span
              ><span class="down-arrow s3arrow4 issue2-down-arrow">
                <span class="s3faq-arrow-icon4"></span>
                <!-- <img
                  class="s3faq-arrow-icon4"
                  width="15"
                  src="img/arrow-down-vector.png"
                  alt="arrow-down4"
                /> -->
              </span>
            </div>
            <p class="faqs-item-text s3answer4">
              Of course! Just add the BANG! onto your order so it’s ready to
              use the next time you need an expert
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
@section('script')
@endsection