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
        zoom: 13
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var marker = new google.maps.Marker({
      position: balagtas,
      map: map
    });
}

// $( '#form-contact' ).on( 'submit', function() {
//     var data = {
//         "_token": $( this ).find( 'input[name=_token]' ).val(),
//         'name':$('#name').val(),
//         'email':$('#email').val(),
//         'subject':$('#subject').val(),
//         'message':$('#message').val()
//     }
//     $.ajax({ 
//         url: '/contact',
//         async: true,
//         type: 'POST',
//         data: data,
//         dataType: 'json',
//         success: function(obj) {
//             if (obj.status == 'success') {
//                 $('.message').html(obj.notification);
//                 $('#submit').html('Please wait...');
//                 setTimeout(function() {
//                     $('#alert-success').css({'display':'block'});
//                     $('#form-contact').find("input, textarea").val("");
//                     $('#submit').html('Submit');
//                 }, 3000);
//             }
//             else {
//                 console.log(obj.errors);
//             }
//         }
//     });
//     return false;
// });