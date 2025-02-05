// Load Page Parts a Home

$(document).ready(function () {
    $("header").load("includes/header.php");
    $("footer").load("includes/footer.php");
});

// faded scroll
$(function () {
    var documentElement = $(document),
        fadeElement = $('.fade-scroll');


    documentElement.on('scroll', function () {
        var currScrollPos = documentElement.scrollTop();

        fadeElement.each(function () {
            var $this = $(this),
                elemOffsetTop = $this.offset().top;
            if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos - elemOffsetTop) / 400);
        });
    });

});




// showing and hiding notifications panel in admin secyion

$(".admin-notification-button").click(function () {
    $('.admin-notifications').removeClass('hidden-div');
});

$('.admin-notification-button').click(function () {
    $('.admin-notifications').addClass('hidden-div');
});



// Play Button Effect
$('.trailer-item-info').children('i').hover(function () {
    $(this).removeClass("far");
    $(this).toggleClass('fas');

}, function () {
    $(this).removeClass("fas");
    $(this).addClass('far');
});

//multi-step booking form script

$(document).ready(function () {
    $('.form-tab2').hide();
});

$('.form-tab1').children('.form-btn').click(function () {
    $('.form-tab1').hide();
    $('.form-tab2').show();
});


// booking form validatioin
function validate() {
    if (document.getElementsByClassName("form-tab2").fName.value == "") {
        alert("Please provide your name!");
        document.getElementById("form-tab2").fName.focus();
        return false;
    }
    if (document.getElementById("form-tab2").lName.value == "") {
        alert("Please provide your name!");
        document.getElementById("form-tab2").lName.focus();
        return false;
    }
    if (document.getElementById("form-tab2").EMail.value == "") {
        alert("Please provide your Email!");
        document.getElementById("form-tab2").EMail.focus();
        return false;
    }

    return (true)
};

//admin dashboard notidication panel

$('.admin-login-info').children('i').hover(function () {
    $(this).removeClass("far");
    $(this).toggleClass('fas');
}, function () {
    $(this).removeClass("fas");
    $(this).addClass('far');
});


$('.fa-bell').on('click', function () {
    $('.admin-notifications').removeClass("hidden-div");
}, function () {
    $('.admin-notifications').addClass('hidden-div');
});

// showing and hiding booking panel

$(".movie-info a").on('click', function () {
    $('.booking-wrap').show();
});

$(".booking-panel-section2").on('click', function () {
    $('.booking-wrap').hide();
});




