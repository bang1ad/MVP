

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
   $("body").on('click','.finish_steps_button', function() {
      finishSteps($(this));
   });
   $("body").on('click','.c2a_results li',function() {
      $(".search_address_input").val($(this).text());
      $(".search_address_text").text($(this).text());
   });

});

if (isMobileView) {
 initFetchify('search_1');
  }else {
 initFetchify('search');
 }
 function finishSteps(obj){
    let bangId = generateUniqueNumber();
    let postalCode = $("input[name='post_code']").val();
    userBangObj.bangId = bangId;
    userBangObj.postalCode = postalCode;
    console.log('userBangObj', userBangObj);  
    $(obj).addClass('disable_class');  
    $.ajax({
       url: base_url+"/bang/request/submit",
       method: 'POST',
       data: JSON.stringify(userBangObj),
       contentType: "application/json",
       success: function(response){ 
            $(obj).removeClass('disable_class'); 
            toastr.success('The bang request has been sent!', 'Thanks');
            setTimeout(function(){
                location.reload();
            },3000);
            // window.location.reload();
       }
    });
 }
// Function to generate a 5-digit unique number
function generateUniqueNumber() {
  let uniqueNumber = "";
  do {
    uniqueNumber = Math.floor(Math.random() * 100000).toString().padStart(5, '0');
  } while (uniqueNumber.charAt(0) === '0');
  return uniqueNumber;
}
// fetchify API 
function initFetchify(search) {
    new clickToAddress({
        accessToken: '72336-c68cb-b16f6-08f3c',
        dom: {
            search:		search,
            town:		'town',
            postcode:	'post_code',
            country:	'country',
            line_1:		'addr_line_1',
            line_2:		'addr_line_2',
            longitude:'addr_longitude',
            latitude:'addr_latitude'
        },
        texts: {
            default_placeholder: 'Find Address', 
        },
        showLogo: false,
        onResultSelected: function(c2a, elements, address){
             let locality = address.locality;
             let province = address.province;
             let country_name = address.country_name;
             let completeAddress = `${locality}  ${country_name}`;
             $("input[name='post_code']").val(address.postal_code);
           
        },
        gfxMode: 2
    });
}

function showMapAddress(containerId){
    let latLong = [-74.5, 40];
    mapboxgl.accessToken = 'pk.eyJ1Ijoid29ybGR3IiwiYSI6ImNsZ2psd3RsdDBnbnQzY29iaHl1OWNrMjUifQ.gBsEkpBcRLSho6G60Qyc3w';
    const map = new mapboxgl.Map({
        container: containerId, // container ID
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12', // style URL
        center: latLong, // starting position [lng, lat]
        zoom: 9// starting zoom
    });
    var marker = new mapboxgl.Marker( {
        /* anchor: 'bottom' */
      }).setLngLat(latLong).addTo(map);
}