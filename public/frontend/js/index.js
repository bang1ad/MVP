
var isMobileView = false;
let userBangObj = {};
if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i)
                || navigator.userAgent.match(/Windows Phone/i)) {
                  isMobileView = true;
           }
const changeFontColor = () => {
  let text1 = document.querySelector(".issue2-heading-2");
  let belowTxt = document.querySelector(".issue2-end-text");
  let issue3heading2 = document.querySelector(".issue3-heading-2");

  let issue3text2 = document.querySelector(".issue3-text-2");

  let mapBg = document.querySelector(
    ".hero-card.step-3.p-4.sub-section .map-item"
  );

  text1.style.color = "#fff";
  belowTxt.style = `
  font-size: 16px;
  display: flex;
  align-items: center;
  text-align: justify; 
  margin: 20px auto;`;

  mapBg.style.background = " #FEDD00";
  issue3heading2.style = "color:#fff !important";

  $(".issue2-down-arrow").addClass("issue3-down-arrow");

  issue3text2.style = "color:#000 !important; padding: 0 5px 10px 5px;";
};

const tradeCard = document.querySelector("#traderpersonCard");
const bikeCard = document.querySelector("#bikeCard");
tradeCard.style.display = "none";
bikeCard.style.display = "none";

const mobTradeCard = document.querySelector("#mobTradeCard");
const mobBikeCard = document.querySelector("#mobBikeCard");
mobBikeCard.style.display = "none";
mobTradeCard.style.display = "none";

const mobS1FaqTr1 = document.querySelector("#mob-s1FaqTr1");
const mobS1FaqBi1 = document.querySelector("#mob-s1FaqBi1");

mobS1FaqBi1.style.display = "none";
mobS1FaqTr1.style.display = "none";

const mobS1FaqTr2 = document.querySelector("#mob-s1FaqTr2");
const mobS1FaqBi2 = document.querySelector("#mob-s1FaqBi2");

mobS1FaqBi2.style.display = "none";
mobS1FaqTr2.style.display = "none";

const s1FaqTr1 = document.querySelector("#s1FaqTr1");
const s1FaqTr2 = document.querySelector("#s1FaqTr2");
s1FaqTr1.style.display = "none";
s1FaqTr2.style.display = "none";

const s1FaqBi1 = document.querySelector("#s1FaqBi1");
const s1FaqBi2 = document.querySelector("#s1FaqBi2");
s1FaqBi1.style.display = "none";
s1FaqBi2.style.display = "none";

const s2FaqTr1 = document.querySelector("#s2FaqTr1");
const s2FaqTr2 = document.querySelector("#s2FaqTr2");
s2FaqTr1.style.display = "none";
s2FaqTr2.style.display = "none";

const s2FaqBi1 = document.querySelector("#s2FaqBi1");
const s2FaqBi2 = document.querySelector("#s2FaqBi2");
s2FaqBi1.style.display = "none";
s2FaqBi2.style.display = "none";

const s3FaqTr1 = document.querySelector("#s3FaqTr1");
const s3FaqTr2 = document.querySelector("#s3FaqTr2");
s3FaqTr1.style.display = "none";
s3FaqTr2.style.display = "none";

const s3FaqBi1 = document.querySelector("#s3FaqBi1");
const s3FaqBi2 = document.querySelector("#s3FaqBi2");
s3FaqBi1.style.display = "none";
s3FaqBi2.style.display = "none";

const myPage = document.querySelector("#myPage");
const body = document.querySelector("body");

function scrollToElement(element) {
  window.scroll({
    behavior: "smooth",
    left: 0,
    top: element.offsetTop,
  });
}

const nextTrade = () => {
  let issue3text2 = document.querySelector(".issue3-text-2");
  issue3text2.style = "color:#000 !important; padding: 0 5px 10px 5px;";
  $(".apply-mobile-theam-ryw").removeClass("mobile-yrb").addClass("mobile-ryw");
  $(".apply-mobile-theam-yrb").removeClass("mobile-ryw").addClass("mobile-yrb");
  $(".apply-mobile-theam-ryw").removeClass("theam_b");
  $(".apply-mobile-theam-yrb").removeClass("theam_b");
  $(".bang_type").val('tradesperson');
  if (
    bikeCard.style.display === "flex" ||
    mobBikeCard.style.display === "flex"
  ) {
    mobBikeCard.style.display = "none";
    bikeCard.style.display = "none";
    tradeCard.style.display = "flex";
    mobTradeCard.style.display = "flex";
  } else {
    tradeCard.style.display = "flex";
    mobTradeCard.style.display = "flex";
  }
  nextStep();
  if (s1FaqTr1.style.display === "none") {
    s1FaqTr1.style.display = "flex";
    s1FaqTr2.style.display = "flex";
    s2FaqTr1.style.display = "flex";
    s2FaqTr2.style.display = "flex";
    s3FaqTr1.style.display = "flex";
    s3FaqTr2.style.display = "flex";
    s1FaqBi1.style.display = "none";
    s1FaqBi2.style.display = "none";
    s2FaqBi1.style.display = "none";
    s2FaqBi2.style.display = "none";
    s3FaqBi1.style.display = "none";
    s3FaqBi2.style.display = "none";
    mobS1FaqTr1.style.display = "flex";
    mobS1FaqTr2.style.display = "flex";
    mobS1FaqBi1.style.display = "none";
    mobS1FaqBi2.style.display = "none";
  }
};

const nextBike = () => {
  $(".apply-mobile-theam-yrb").removeClass("mobile-yrb").addClass("mobile-ryw");
  $(".apply-mobile-theam-ryw").removeClass("mobile-ryw").addClass("mobile-yrb");
  $(".apply-mobile-theam-ryw").addClass("theam_b");
  $(".apply-mobile-theam-yrb").addClass("theam_b");
  $(".bang_type").val('bikeservice');
  changeFontColor();

  if (
    tradeCard.style.display === "flex" ||
    mobTradeCard.style.display === "flex"
  ) {
    tradeCard.style.display = "none";
    mobTradeCard.style.display = "none";
    bikeCard.style.display = "flex";
    mobBikeCard.style.display = "flex";
  } else {
    bikeCard.style.display = "flex";
    mobBikeCard.style.display = "flex";
  }
  nextStep();
  if (s1FaqBi1.style.display === "none") {
    s1FaqBi1.style.display = "flex";
    s1FaqBi2.style.display = "flex";
    s2FaqBi1.style.display = "flex";
    s2FaqBi2.style.display = "flex";
    s3FaqBi1.style.display = "flex";
    s3FaqBi2.style.display = "flex";
    s1FaqTr1.style.display = "none";
    s1FaqTr2.style.display = "none";
    s2FaqTr1.style.display = "none";
    s2FaqTr2.style.display = "none";
    s3FaqTr1.style.display = "none";
    s3FaqTr2.style.display = "none";
    mobS1FaqBi1.style.display = "flex";
    mobS1FaqBi2.style.display = "flex";
    mobS1FaqTr1.style.display = "none";
    mobS1FaqTr2.style.display = "none";
  }
};

// scroll-icon code starts here
const headerClass = document.querySelector(".header");

window.addEventListener("scroll", () => {
  console.log("called");
  if (window.pageYOffset > 0) {
    headerClass.classList.add("sticky");
  } else {
    headerClass.classList.remove("sticky");
  }
});

// scroll-icon code ends here
// step code starts here
let currentStep = 1;
const page = document.getElementById("myPage");
const progressbar1 = document.querySelector(".progressbar1");
const progressbar2 = document.querySelector(".progressbar2");
const progressbar3 = document.querySelector(".progressbar3");
function nextStep() {
  $(".error_text").remove();
  let status = true;
  let address = $(".search_address_input").val();
  if(isMobileView){
    address = $(".mob_search_input").val();
  }
  let bangType = $('.bang_type').val();
  let bangName = (bangType == 'tradesperson' ? 'Tradesperson' : 'Bike Service')
  userBangObj.bang_type = bangType;
  userBangObj.address = address;
  $(".bang_address_label").text(`${bangName} BANGS! are available at ${address}`);  
  if(currentStep == 2) {
    if($.trim(address) == "") {
      toastr.error('Please enter address', 'Error');
      status = false;
    }
    if(status){
      currentStep++;
      moveNextStep(currentStep,body);
      showMapAddress('address_map_1');
      //
    }
  }else if(currentStep == 3){
    let userValidateStatus = validateUserInformation();
    if(userValidateStatus){
      currentStep++;
      moveNextStep(currentStep,body);
      showMapAddress('address_map_3');
      $(".bang_address_label").text();
    }
     
  }else {
    currentStep++;
    moveNextStep(currentStep,body)
  }
 
}

$("body").on('keyup','.validate_email',function(){
  $(".error_text").remove();
  $(".card-right1").find('br').remove();
  let status = validateEmail($(this).val());
  if(!status){
    $(".user_email").after(`<small class="error_text">Please enter valid email</small><br>`);
  }
});
function validateEmail($email) {
  let status = true;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test( $email ) ) {
    status = false;
  } else {
    status = true;
  }
  return status;
}
function moveNextStep(currentStep,body){
  showStep(currentStep);
  scrollToElement(body);
}

function validateUserInformation(){
  $(".error_text").remove();
  let status = true;
  let userEmail = $(".user_email").val();
  let userMobileNumber = $(".user_mobile_number").val();
  let u_email = '.user_email';
  let u_mob_number = '.user_mobile_number';
  if(isMobileView){
     u_email = '.mob_user_email';
     u_mob_number = '.mob_user_mobile_number';
     userEmail = $(".mob_user_email").val();
     userMobileNumber = $(".mob_user_mobile_number").val();
  }
  if($.trim(userEmail) == ""){
    toastr.error('Please enter email', 'Error');
    status = false;
  }
  if($.trim(userMobileNumber) == ""){
    toastr.error('Please enter mobile number', 'Error');
    status = false;
  }
  userBangObj.email = userEmail;
  userBangObj.mobile_number = userMobileNumber;
  return status;
}

function previousStep() {
  currentStep--;
  showStep(currentStep);
  scrollToElement(body);
}

function showStep(step) {
  const steps = document.getElementsByClassName("step");
  for (let i = 0; i < steps.length; i++) {
    steps[i].style.display = "none";
  }
  steps[step - 1].style.display = "block";
  if (step === steps.length) {
    page.addEventListener("submit", submitForm);
  } else {
    page.removeEventListener("submit", submitForm);
  }
}

function submitForm(event) {
  event.preventDefault();
  const formData = new FormData(event.target);
  const data = Object.fromEntries(formData.entries());
  console.log(data); // replace this with your own code to submit the form data
}
//step-1 arrow

var arrow1 = document.querySelector(".arrow1");
var faqArrowIcon1 = document.querySelector(".faq-arrow-icon1");
var answer1 = document.querySelector(".answer1");
arrow1.addEventListener("click", function () {
  if (answer1.style.display === "none") {
    answer1.style.display = "block";
    faqArrowIcon1.style.transform = "rotate(225deg)";
  } else {
    answer1.style.display = "none";
    faqArrowIcon1.style.transform = "rotate(45deg)";
  }
});

var s1arrow1bi = document.querySelector(".s1arrow1bi");
var s1faqArrowIcon1bi = document.querySelector(".s1faq-arrow-icon1bi");
var s1answer1bi = document.querySelector(".s1answer1bi");
s1arrow1bi.addEventListener("click", function () {
  if (s1answer1bi.style.display === "none") {
    s1answer1bi.style.display = "block";
    s1faqArrowIcon1bi.style.transform = "rotate(225deg)";
  } else {
    s1answer1bi.style.display = "none";
    s1faqArrowIcon1bi.style.transform = "rotate(45deg)";
  }
});

var arrow2 = document.querySelector(".arrow2");
var faqArrowIcon2 = document.querySelector(".faq-arrow-icon2");
var answer2 = document.querySelector(".answer2");
arrow2.addEventListener("click", function () {
  if (answer2.style.display === "none") {
    answer2.style.display = "block";
    faqArrowIcon2.style.transform = "rotate(225deg)";
  } else {
    answer2.style.display = "none";
    faqArrowIcon2.style.transform = "rotate(45deg)";
  }
});

var arrow3 = document.querySelector(".arrow3");
var faqArrowIcon3 = document.querySelector(".faq-arrow-icon3");
var answer3 = document.querySelector(".answer3");
arrow3.addEventListener("click", function () {
  if (answer3.style.display === "none") {
    answer3.style.display = "block";
    faqArrowIcon3.style.transform = "rotate(225deg)";
  } else {
    answer3.style.display = "none";
    faqArrowIcon3.style.transform = "rotate(45deg)";
  }
});

var s1arrow3bi = document.querySelector(".s1arrow3bi");
var s1faqArrowIcon3bi = document.querySelector(".s1faq-arrow-icon3bi");
var s1answer3bi = document.querySelector(".s1answer3bi");
s1arrow3bi.addEventListener("click", function () {
  if (s1answer3bi.style.display === "none") {
    s1answer3bi.style.display = "block";
    s1faqArrowIcon3bi.style.transform = "rotate(225deg)";
  } else {
    s1answer3bi.style.display = "none";
    s1faqArrowIcon3bi.style.transform = "rotate(45deg)";
  }
});

var arrow4 = document.querySelector(".arrow4");
var faqArrowIcon4 = document.querySelector(".faq-arrow-icon4");
var answer4 = document.querySelector(".answer4");
arrow4.addEventListener("click", function () {
  if (answer4.style.display === "none") {
    answer4.style.display = "block";
    faqArrowIcon4.style.transform = "rotate(225deg)";
  } else {
    answer4.style.display = "none";
    faqArrowIcon4.style.transform = "rotate(45deg)";
  }
});
//step2 arrow
var s2arrow1 = document.querySelector(".s2arrow1");
var s2faqArrowIcon1 = document.querySelector(".s2faq-arrow-icon1");
var s2answer1 = document.querySelector(".s2answer1");
s2arrow1.addEventListener("click", function (e) {
  if (s2answer1.style.display === "none") {
    s2answer1.style.display = "block";
    s2faqArrowIcon1.style.transform = "rotate(225deg)";
  } else {
    s2answer1.style.display = "none";
    s2faqArrowIcon1.style.transform = "rotate(45deg)";
  }
});

var s2arrow1bi = document.querySelector(".s2arrow1bi");
var s2faqArrowIcon1bi = document.querySelector(".s2faq-arrow-icon1bi");
var s2answer1bi = document.querySelector(".s2answer1bi");
s2arrow1bi.addEventListener("click", function (e) {
  if (s2answer1bi.style.display === "none") {
    s2answer1bi.style.display = "block";
    s2faqArrowIcon1bi.style.transform = "rotate(225deg)";
  } else {
    s2answer1bi.style.display = "none";
    s2faqArrowIcon1bi.style.transform = "rotate(45deg)";
  }
});

var s2arrow2 = document.querySelector(".s2arrow2");
var s2faqArrowIcon2 = document.querySelector(".s2faq-arrow-icon2");
var s2answer2 = document.querySelector(".s2answer2");
s2arrow2.addEventListener("click", function () {
  if (s2answer2.style.display === "none") {
    s2answer2.style.display = "block";
    s2faqArrowIcon2.style.transform = "rotate(225deg)";
  } else {
    s2answer2.style.display = "none";
    s2faqArrowIcon2.style.transform = "rotate(45deg)";
  }
});

var s2arrow3 = document.querySelector(".s2arrow3");
var s2faqArrowIcon3 = document.querySelector(".s2faq-arrow-icon3");
var s2answer3 = document.querySelector(".s2answer3");
s2arrow3.addEventListener("click", function () {
  if (s2answer3.style.display === "none") {
    s2answer3.style.display = "block";
    s2faqArrowIcon3.style.transform = "rotate(225deg)";
  } else {
    s2answer3.style.display = "none";
    s2faqArrowIcon3.style.transform = "rotate(45deg)";
  }
});

var s2arrow3bi = document.querySelector(".s2arrow3bi");
var s2faqArrowIcon3bi = document.querySelector(".s2faq-arrow-icon3bi");
var s2answer3bi = document.querySelector(".s2answer3bi");
s2arrow3bi.addEventListener("click", function () {
  if (s2answer3bi.style.display === "none") {
    s2answer3bi.style.display = "block";
    s2faqArrowIcon3bi.style.transform = "rotate(225deg)";
  } else {
    s2answer3bi.style.display = "none";
    s2faqArrowIcon3bi.style.transform = "rotate(45deg)";
  }
});

var s2arrow4 = document.querySelector(".s2arrow4");
var s2faqArrowIcon4 = document.querySelector(".s2faq-arrow-icon4");
var s2answer4 = document.querySelector(".s2answer4");
s2arrow4.addEventListener("click", function () {
  if (s2answer4.style.display === "none") {
    s2answer4.style.display = "block";
    s2faqArrowIcon4.style.transform = "rotate(225deg)";
  } else {
    s2answer4.style.display = "none";
    s2faqArrowIcon4.style.transform = "rotate(45deg)";
  }
});

//step3 arrow

var s3arrow1 = document.querySelector(".s3arrow1");
var s3faqArrowIcon1 = document.querySelector(".s3faq-arrow-icon1");
var s3answer1 = document.querySelector(".s3answer1");
s3arrow1.addEventListener("click", function () {
  if (s3answer1.style.display === "none") {
    s3answer1.style.display = "block";
    s3faqArrowIcon1.style.transform = "rotate(225deg)";
  } else {
    s3answer1.style.display = "none";
    s3faqArrowIcon1.style.transform = "rotate(45deg)";
  }
});

var s3arrow1bi = document.querySelector(".s3arrow1bi");
var s3faqArrowIcon1bi = document.querySelector(".s3faq-arrow-icon1bi");
var s3answer1bi = document.querySelector(".s3answer1bi");
s3arrow1bi.addEventListener("click", function () {
  if (s3answer1bi.style.display === "none") {
    s3answer1bi.style.display = "block";
    s3faqArrowIcon1bi.style.transform = "rotate(225deg)";
  } else {
    s3answer1bi.style.display = "none";
    s3faqArrowIcon1bi.style.transform = "rotate(45deg)";
  }
});

var s3arrow2 = document.querySelector(".s3arrow2");
var s3faqArrowIcon2 = document.querySelector(".s3faq-arrow-icon2");
var s3answer2 = document.querySelector(".s3answer2");
s3arrow2.addEventListener("click", function () {
  if (s3answer2.style.display === "none") {
    s3answer2.style.display = "block";
    s3faqArrowIcon2.style.transform = "rotate(225deg)";
  } else {
    s3answer2.style.display = "none";
    s3faqArrowIcon2.style.transform = "rotate(45deg)";
  }
});

var s3arrow3 = document.querySelector(".s3arrow3");
var s3faqArrowIcon3 = document.querySelector(".s3faq-arrow-icon3");
var s3answer3 = document.querySelector(".s3answer3");
s3arrow3.addEventListener("click", function () {
  if (s3answer3.style.display === "none") {
    s3answer3.style.display = "block";
    s3faqArrowIcon3.style.transform = "rotate(225deg)";
  } else {
    s3answer3.style.display = "none";
    s3faqArrowIcon3.style.transform = "rotate(45deg)";
  }
});

var s3arrow3bi = document.querySelector(".s3arrow3bi");
var s3faqArrowIcon3bi = document.querySelector(".s3faq-arrow-icon3bi");
var s3answer3bi = document.querySelector(".s3answer3bi");
s3arrow3bi.addEventListener("click", function () {
  if (s3answer3bi.style.display === "none") {
    s3answer3bi.style.display = "block";
    s3faqArrowIcon3bi.style.transform = "rotate(225deg)";
  } else {
    s3answer3bi.style.display = "none";
    s3faqArrowIcon3bi.style.transform = "rotate(45deg)";
  }
});

var s3arrow4 = document.querySelector(".s3arrow4");
var s3faqArrowIcon4 = document.querySelector(".s3faq-arrow-icon4");
var s3answer4 = document.querySelector(".s3answer4");
s3arrow4.addEventListener("click", function () {
  if (s3answer4.style.display === "none") {
    s3answer4.style.display = "block";
    s3faqArrowIcon4.style.transform = "rotate(225deg)";
  } else {
    s3answer4.style.display = "none";
    s3faqArrowIcon4.style.transform = "rotate(45deg)";
  }
});

//mobile arrow

var mobarrow1 = document.querySelector(".mob-arrow1");
var mobfaqArrowIcon1 = document.querySelector(".mob-faq-arrow-icon1");
var mobanswer1 = document.querySelector(".mob-answer1");
mobarrow1.addEventListener("click", function () {
  if (mobanswer1.style.display === "none") {
    mobanswer1.style.display = "block";
    mobfaqArrowIcon1.style.transform = "rotate(225deg)";
  } else {
    mobanswer1.style.display = "none";
    mobfaqArrowIcon1.style.transform = "rotate(45deg)";
  }
});

var mobs1arrow1bi = document.querySelector(".mob-s1arrow1bi");
var mobs1faqArrowIcon1bi = document.querySelector(".mob-s1faq-arrow-icon1bi");
var mobs1answer1bi = document.querySelector(".mob-s1answer1bi");
mobs1arrow1bi.addEventListener("click", function () {
  if (mobs1answer1bi.style.display === "none") {
    mobs1answer1bi.style.display = "block";
    mobs1faqArrowIcon1bi.style.transform = "rotate(225deg)";
  } else {
    mobs1answer1bi.style.display = "none";
    mobs1faqArrowIcon1bi.style.transform = "rotate(45deg)";
  }
});

var mobarrow2 = document.querySelector(".mob-arrow2");
var mobfaqArrowIcon2 = document.querySelector(".mob-faq-arrow-icon2");
var mobanswer2 = document.querySelector(".mob-answer2");
mobarrow2.addEventListener("click", function () {
  if (mobanswer2.style.display === "none") {
    mobanswer2.style.display = "block";
    mobfaqArrowIcon2.style.transform = "rotate(225deg)";
  } else {
    mobanswer2.style.display = "none";
    mobfaqArrowIcon2.style.transform = "rotate(45deg)";
  }
});

var mobarrow3 = document.querySelector(".mob-arrow3");
var mobfaqArrowIcon3 = document.querySelector(".mob-faq-arrow-icon3");
var mobanswer3 = document.querySelector(".mob-answer3");
mobarrow3.addEventListener("click", function () {
  if (mobanswer3.style.display === "none") {
    mobanswer3.style.display = "block";
    mobfaqArrowIcon3.style.transform = "rotate(225deg)";
  } else {
    mobanswer3.style.display = "none";
    mobfaqArrowIcon3.style.transform = "rotate(45deg)";
  }
});

var mobs1arrow3bi = document.querySelector(".mob-s1arrow3bi");
var mobs1faqArrowIcon3bi = document.querySelector(".mob-s1faq-arrow-icon3bi");
var mobs1answer3bi = document.querySelector(".mob-s1answer3bi");
mobs1arrow3bi.addEventListener("click", function () {
  if (mobs1answer3bi.style.display === "none") {
    mobs1answer3bi.style.display = "block";
    mobs1faqArrowIcon3bi.style.transform = "rotate(225deg)";
  } else {
    mobs1answer3bi.style.display = "none";
    mobs1faqArrowIcon3bi.style.transform = "rotate(45deg)";
  }
});

var mobarrow4 = document.querySelector(".mob-arrow4");
var mobfaqArrowIcon4 = document.querySelector(".mob-faq-arrow-icon4");
var mobanswer4 = document.querySelector(".mob-answer4");
mobarrow4.addEventListener("click", function () {
  if (mobanswer4.style.display === "none") {
    mobanswer4.style.display = "block";
    mobfaqArrowIcon4.style.transform = "rotate(225deg)";
  } else {
    mobanswer4.style.display = "none";
    mobfaqArrowIcon4.style.transform = "rotate(45deg)";
  }
});

// step code ends here

//Progressbar code here

//Progressbar code here

var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
  spaceBetween: 30,
  breakpoints: {
    575: {
      slidesPerView: 1,
    },
    335: {
      slidesPerView: 2,
      spaceBetween: 10,
      slidesPerView: 1.2,
    },
  },
});

// var swiper_who = new Swiper(".mySwiper_who", {});

var swiper_filled = new Swiper(".mySwiper_filled", {
  breakpoints: {
    770: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    320: {
      slidesPerView: 2,
      spaceBetween: 30,
      slidesPerView: 1.3,
    },
  },
});

var swiper_filled = new Swiper(".mySwiper_filled-2", {
  breakpoints: {
    1230: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    950: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    767: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    335: {
      slidesPerView: 2,
      spaceBetween: 30,
      slidesPerView: 1.3,
    },
  },
});

var swiper_filled = new Swiper(".yellow_mySwiper_filled", {
  breakpoints: {
    870: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    320: {
      slidesPerView: 2,
      spaceBetween: 12,
      slidesPerView: 2.5,
    },
  },
});

var swiper_dropping = new Swiper(".mySwiper_dropping", {
  breakpoints: {
    770: {
      slidesPerView: 3,
      spaceBetween: 30,
      //   slidesPerView: 2.5,
    },
    320: {
      slidesPerView: 2,
      spaceBetween: 30,
      slidesPerView: 1.3,
    },
  },
});

var swiper_dropping = new Swiper(".mySwiper_dropping-2", {
  breakpoints: {
    1230: {
      slidesPerView: 4,
      spaceBetween: 30,
      //   slidesPerView: 2.5,
    },
    950: {
      slidesPerView: 3,
      spaceBetween: 30,
      //   slidesPerView: 2.5,
    },
    767: {
      slidesPerView: 2,
      spaceBetween: 30,
      //   slidesPerView: 2.5,
    },
    335: {
      slidesPerView: 2,
      spaceBetween: 30,
      slidesPerView: 1.3,
    },
  },
});

var burgerMenu = document.getElementById("burger-menu");
var overlay = document.getElementById("menu");
burgerMenu.addEventListener("click", function () {
  this.classList.toggle("close");
  overlay.classList.toggle("overlay");
});

// New Code By Mohamed Waled
//swiper new code
// var arrowDown1 = document.querySelector(".arrow-down1");
// var arrowIcon1 = document.querySelector("#arrow-icon1");
// var arrowElement1 = document.querySelector(".arrow-el1");
// arrowDown1.addEventListener("click", function () {
//   if (arrowElement1.style.display === "none") {
//     arrowElement1.style.display = "block";
//     arrowIcon1.style.transform = "rotate(225deg)";
//   } else {
//     arrowElement1.style.display = "none";
//     arrowIcon1.style.transform = "rotate(45deg)";
//   }
// });

// var arrowIcon2 = document.querySelector("#arrow-icon2");
// var arrowDown2 = document.querySelector(".arrow-down2");
// var arrowElement2 = document.querySelector(".arrow-el2");
// arrowDown2.addEventListener("click", function () {
//   if (arrowElement2.style.display === "none") {
//     arrowElement2.style.display = "block";
//     arrowIcon2.style.transform = "rotate(225deg)";
//   } else {
//     arrowElement2.style.display = "none";
//     arrowIcon2.style.transform = "rotate(45deg)";
//   }
// });

// JavaScript code to initialize the Swiper instance
var mySwiper = new Swiper(".swiper-container", {
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});

// Add a slideChange event listener to the Swiper instance
mySwiper.on("slideChange", function () {
  // Get the active slide index
  var activeIndex = mySwiper.activeIndex;

  // Get the swiper-scrollbar-drag element
  var scrollbarDrag = document.querySelector(".swiper-scrollbar-drag");

  // Calculate the scrollbar width and the drag width
  var scrollbarWidth = document.querySelector(".swiper-scrollbar").offsetWidth;
  var dragWidth = 0;
  //   var dragWidth = scrollbarWidth / mySwiper.slides.length;

  // Set the left and width of the swiper-scrollbar-drag element
  scrollbarDrag.style.left = activeIndex * dragWidth + "px";
  scrollbarDrag.style.width = dragWidth + "px";

  // Set the background-color of the first half of the scrollbar
  scrollbarDrag.style.backgroundColor = "#FFF";
});

// Swiper
let swiper_dropfilled = new Swiper(".mySwiper_dropfilled", {
  pagination: {
    el: ".swiper-pagination",
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

// Menu Button

function menu() {
  let menuButton = document.querySelectorAll(".menubutton");
  let menubuttons = Array.from(menuButton);
  menubuttons.forEach((button) => {
    button.addEventListener("click", getButton);
  });

  function getButton() {
    if (
      !document.querySelector(this.dataset.click).classList.contains("active")
    ) {
      document.querySelector(this.dataset.click).style.display = "flex";
      document.querySelector(this.dataset.click).classList.add("active");
    } else {
      document.querySelector(this.dataset.click).style.display = "none";
      document.querySelector(this.dataset.click).classList.remove("active");
    }
  }
}

menu();

$(document).ready(function () {
  $(".panel-collapse").on("show.bs.collapse", function () {
    $(this).siblings(".panel-heading").addClass("active");
  });

  $(".panel-collapse").on("hide.bs.collapse", function () {
    $(this).siblings(".panel-heading").removeClass("active");
  });
});

// New Code By Kajamohan
function toggleIssueDropdown() {
  var dropdown = document.getElementById("issue-down-arrow-visible");
  var downArrowIcon = document.getElementById("issue-down-arrow");

  if (dropdown.style.display === "none") {
    dropdown.style.display = "block";
    downArrowIcon.style.transform = "rotate(225deg)";
  } else {
    dropdown.style.display = "none";
    downArrowIcon.style.transform = "rotate(45deg)";
  }
}

function toggleIssueDropdown2() {
  var dropdown = document.getElementById("issue-down-arrow-visible-2");
  var downArrowIcon = document.querySelector(".issue-down-arrow-2");
  if (dropdown.style.display === "none") {
    dropdown.style.display = "block";
    downArrowIcon.style.transform = "rotate(180deg)";
  } else {
    dropdown.style.display = "none";
    downArrowIcon.style.transform = "rotate(0deg)";
  }
}
