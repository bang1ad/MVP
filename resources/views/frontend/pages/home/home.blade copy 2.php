@extends('frontend.layouts.app')
@section('content')
<section>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex">
            <a href="#" class="mb-4">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="white" stroke-width="6.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>            
            </a>
          </div>
          <ul class="MultiTab justify-content-center mx-auto d-none d-md-flex">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z" fill="currentColor"/>
                <path d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z" fill="currentColor"/>
              </svg>              
              Find Address              
            </li>
            <li>
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z" fill="currentColor"/>
                <path d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z" fill="currentColor"/>
                <path d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z" fill="currentColor"/>
                <path d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z" fill="currentColor"/>
                <path d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z" fill="currentColor"/>
                <path d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z" fill="currentColor"/>
                <path d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z" fill="currentColor"/>
              </svg>              
              Enter Details
            </li>
            <li>
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z" fill="currentColor"/>
                <path d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z" fill="currentColor"/>
              </svg>              
              Confirmation
            </li>
          </ul>
        </div>
        <div class="MdlSec d-flex justify-content-center align-items-center">
          <h5>Great! BANGS are available if you live in the  Westminster postcode area</h5>
        </div>
      </div>
      <div class="centerSec">
        <div class="BtmSec text-center">
          <img src="{{asset('frontend/images/logo-header-1.png')}} " height="83" width="auto" alt="" />
          <h4 class="text-white mb-0">You’re about to BANG!</h4>
        </div>
      </div>
      <div class="LastSec bg-primary">
        <div class="container">
          <div class="row mx-0">
            <div class="col-lg-5">
              <img src="{{asset('frontend/images/img1.png')}}" alt="" width="100%" />
              <div class="w-100 px-4">
                <h5 class="m-0 text-white">So you need a plumber?<Br> No problem!</h5>
                <h6 class="text-white pe-2">The first price you should check is your home’s BANG! Price. Start by finding your home.</h6>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="w-100 text-center">
                <h4 class="text-white">FIND YOUR HOME </h4>
                <h5 class="text-white">Type a part of postcode or address</h5>
              </div>
              <form>
                <div>
                 
                  <select class="form-select" aria-label=".form-select-lg example">

                    <option selected>Find address</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="textareaSec">
                  <div class="d-flex">
                    <img src="{{asset('frontend/images/img2.png')}} " alt="" width="60" height="60" />
                    <div class="ms-6">
                      <h3>Location</h3>
                      <h6>You have told us you live at W2 4EB 29 Pembridge Gardens London</h6>
                    </div>
                  </div>
                </div>
                <div class="nav MultiTab justify-content-center mx-auto" id="nav-tab" role="tablist">
                  <button class="form-btn border-0 w-100 mb-4 next_show_map_step"  id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Next Step</button>
                </div>
                <h6 class="text-white">In the next step we’ll ask you for your email so we can send you your home’s BANG!</h6>
                </form>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex">
            <a href="#" class="mb-4">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="white" stroke-width="6.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>            
            </a>
          </div>
          <ul class="MultiTab d-flex justify-content-center mx-auto">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z" fill="currentColor"/>
                <path d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z" fill="currentColor"/>
              </svg>              
              Find Address              
            </li>
            <li class="active">
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z" fill="currentColor"/>
                <path d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z" fill="currentColor"/>
                <path d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z" fill="currentColor"/>
                <path d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z" fill="currentColor"/>
                <path d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z" fill="currentColor"/>
                <path d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z" fill="currentColor"/>
                <path d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z" fill="currentColor"/>
              </svg>              
              Enter Details
            </li>
            <li>
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z" fill="currentColor"/>
                <path d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z" fill="currentColor"/>
              </svg>              
              Confirmation
            </li>
          </ul>
        </div>
        <div class="MdlSec d-flex justify-content-center align-items-center">
          <h5>Great! BANGS are available if you live in the  Westminster postcode area</h5>
        </div>
      </div>
      <div class="centerSec">
        <div class="BtmSec text-center">
          <img src="{{asset('frontend/images/logo-header-1.png')}} " height="83" width="auto" alt="" />
          <h6 class="text-white"> You’re requesting the TRADESPERSON BANG! for</h6>
          <h5 class="text-white"> 15, Smith St, London, W12 2AD.</h5>
          <img src="{{asset('frontend/images/img3.png')}} " height="375" width="auto" alt="" />
        </div>
      </div>
      <div class="LastSec2 bg-primary">
        <div class="container">
          <div class="row mx-0">
            <div class="col-lg-6">
              <h3>WHATS NEXT?</h3>
              <ul class="m-0 p-0">
                <li class="d-flex justify-content-start align-items-center"><span class="d-flex justify-content-center align-items-center me-3">1</span> Receive your BANGS! by email</li>
                <li class="d-flex justify-content-start align-items-center"><span class="d-flex justify-content-center align-items-center me-3">2</span>Call your local BANGS! HQ</li>
                <li class="d-flex justify-content-start align-items-center"><span class="d-flex justify-content-center align-items-center me-3">3</span>Get your BANGS! price</li>
              </ul>
            </div>
            <div class="col-lg-6 formTabTwo">
              <h3>LETS BANG!</h3>
              <div class="row text-start">
                <div class="col-lg-6 mb-6">
                  <input type="text" placeholder="First Name" />
                </div>
                <div class="col-lg-6 mb-6">
                  <input type="text" placeholder="Last Name" />
                </div>
                <div class="col-lg-12 mb-6">
                  <input type="text" placeholder="Enter email" />
                  <span class="mt-3 d-block">For safe keeping we’ll send your BANG! by email</span>
                </div>
                <div class="col-lg-12 mb-6">
                  <input type="number" placeholder="Enter mobile number" />
                  <span class="mt-3 d-block">We’ll send your BANG! ID by text too</span>
                </div>
                <div class="col-lg-12">
                  <div class="nav MultiTab justify-content-center mx-auto" id="nav-tab" role="tablist">
                    <button class="form-btn border-0 w-100 mb-4" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Get my BANG</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex">
            <a href="#" class="mb-4">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="white" stroke-width="6.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>            
            </a>
          </div>
          <ul class="MultiTab d-flex justify-content-center mx-auto">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z" fill="currentColor"/>
                <path d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z" fill="currentColor"/>
              </svg>              
              Find Address              
            </li>
            <li class="active">
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z" fill="currentColor"/>
                <path d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z" fill="currentColor"/>
                <path d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z" fill="currentColor"/>
                <path d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z" fill="currentColor"/>
                <path d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z" fill="currentColor"/>
                <path d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z" fill="currentColor"/>
                <path d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z" fill="currentColor"/>
              </svg>              
              Enter Details
            </li>
            <li class="active">
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z" fill="currentColor"/>
                <path d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z" fill="currentColor"/>
              </svg>              
              Confirmation
            </li>
          </ul>
        </div>
        <div class="MdlSec d-flex justify-content-center align-items-center">
          <h5>Great! BANGS are available if you live in the  Westminster postcode area</h5>
        </div>
      </div>
      <div class="centerSec">
        <div class="BtmSec text-center">
          <img src="{{asset('frontend/images/logo-header-1.png')}}" height="83" width="auto" alt="" />
          <h4 class="text-white mb-5">Your BANG! is on it’s way </h4>
          <img src="{{asset('frontend/images/img3.png')}}" height="375" width="auto" alt="" />
          <div class="w-100 pt-5 mt-3">
            <button class="form-btn2 text-white border-0">FINISH</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="Faqs text-center">
    <div class="container">
      <h2 class="text-white">FAQS</h2>
      <div class="accordion text-start mx-auto" id="accordionExample">
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingOne">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What’s a Tradesperson BANG! ?
            </button>
          </h3>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingTwo">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              How many BANG!S does my home have?
            </button>
          </h3>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingThree">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              Who does the work?
            </button>
          </h3>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingFour">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              Can I get another BANG! ?
            </button>
          </h3>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
@section('script')
@endsection