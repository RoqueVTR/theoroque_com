/* Top Button */
$(window).scroll(function(){
    if($(this).scrollTop() >= 90) {
        $('#topBtn,#app-logo').css({'display':'block'});
    }
    else {
        $('#topBtn,#app-logo').fadeOut('fast');
    }
});

$('#topBtn,#app-logo').click(function() {
    $('body,html').animate({ scrollTop:0 });
});

/* About */
$(window).scroll(function(){
    if($(this).scrollTop() < 700) {
        $('#profile-second').css({'display':'none'});
        $('#profile-first').css({'display':'block'});
    }
    if($(this).scrollTop() > 700) {
        $('#profile-first').css({'display':'none'});
        $('#profile-second').css({'display':'block'});
    }
});

/* Project */
$('.project-description').hide();

function seeMore(id) {
    $(id).slideDown();
    $(id+'-btn').children('i').removeClass('fa-chevron-down');
    $(id+'-btn').children('i').addClass('fa-chevron-up');
    $(id+'-btn').attr('onclick', 'seeLess("'+id+'")');
}

function seeLess(id) {
    $(id).slideUp();
    $(id+'-btn').children('i').removeClass('fa-chevron-up');
    $(id+'-btn').children('i').addClass('fa-chevron-down');
    $(id+'-btn').attr('onclick', 'seeMore("'+id+'")');
}

function openModal() {
    $('#modal').modal('show');
}

/* Contact */
function addressMap() {
    var balagtas = {lat:14.8185048, lng:120.9006352}
    var mapOptions = {
        center: balagtas,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var marker = new google.maps.Marker({
      position: balagtas,
      map: map
    });
}