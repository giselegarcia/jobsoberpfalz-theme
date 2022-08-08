const database = $("#database");
const btnShare = document.querySelector('#btn-share');
const btnLike = $('#btn-like');
let objLikes = [];
let objLikesData = [];
btnShare.onclick = async () => {
    if(navigator.share) { try { await navigator.share(shareData); } catch(err) { } } 
    else { console.warn('Native Web Sharing not supported'); }
}
$(window).on('load', function(){
    if(localStorage.getItem("likes") != null) objLikes = JSON.parse(localStorage.getItem("likes"));
    if(localStorage.getItem("likes_data") != null) objLikesData = JSON.parse(localStorage.getItem("likes_data"));
    showMobileCalltoaction();
    newIsLike();
    $(window).scroll(windowScroll);
    btnLike.click(buttonClickLike);
    if(!localStorage.getItem("content_visualized")){
        setTimeout(function(){
            $.ajax({
                url: $('#count-view').attr('data-url'),
                type: "get", cache : false, processData: false, contentType: false,
                success: function (response) { localStorage.setItem("content_visualized", true); console.log(response); },
                error: function(error) { console.log(error); }
            });
        },3000);
    }
});

var input = document.querySelector(".phone");
var iti = window.intlTelInput(input, {
    initialCountry: "de", geoIpLookup: function(callback) {
        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "us";
            callback(countryCode);
        });
    },
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.11/js/utils.min.js",
});
$("#formPost").submit(function() {
    if (iti.isValidNumber() == false) {
        alert('Telefonnummer nicht gültig!');
        return false;
    }
    return true;
});