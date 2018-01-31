//    <!-- skrypt do określania aktywnego linku poprzez dodanie klasy active -->
$(function () {
    var current = location.pathname;
    $('nav li a').each(function () {
        var $this = $(this);
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
})
//skrypt navbara
var lastScrollTop = 0;
$(window).scroll(function (event) {
    var st = $(this).scrollTop();
    if (st > lastScrollTop) {
        $("nav").slideUp(400);

    } else {
        $("nav").slideDown(400);

    }
    lastScrollTop = st;
});

//skrypt dropdowna
//group1
$(".dropdown-toggle1").mouseover(
    function () {
        $('.dropdown-menu1').slideDown('fast');
    });

$(".dropdown-group1").mouseleave(
    function () {
        $('.dropdown-menu1').slideUp('fast');
    });
//group2
$(".dropdown-toggle2").mouseover(
    function () {
        $('.dropdown-menu2').slideDown('fast');
    });

$(".dropdown-group2").mouseleave(
    function () {
        $('.dropdown-menu2').slideUp('fast');
    });
//skrypt walidacji formularza
function formValidate() {
    var id = "#" + $(event.target).attr('id');
    if ($(id).val() == "") {
        $(id).removeClass("correct");
        $(id).addClass("wrong");

    } else if ($(id).val() != "") {
        $(id).removeClass("wrong");
        $(id).addClass("correct");

    }
    var okNr = $('.correct').length;
    console.log(okNr);
    if (okNr >= 9) {
        $('#mailsendBtn').attr('disabled', false);
        $('#mailsendBtn').removeClass('btn-disabled');
        $('#mailsendBtn').addClass('pulse');
    }
    if (okNr < 7) {
        $('#mailsendBtn').attr('disabled', true);
        $('#mailsendBtn').addClass('btn-disabled');
        $('#mailsendBtn').removeClass('pulse');

    }
};
$(function () {
    $("#phone").mask("999-999-999");
    $("#tele").mask("999-999-999");
})
$('input:text,input[type=number],input[type=date],textarea').change(function () {
    formValidate();
});

$(window).ready(function () {
    $('#mailsendBtn').attr('disabled', false);
    $('#mailsendBtn').addClass('btn-disabled');
})

//skrypt wysyłki maila
$('#mailsendBtn').click(function () {
            if ($('#mailsendBtn').hasClass('btn-disabled') == false) {
                $('#mailsendBtn').attr('data-toggle', "modal").attr('data-target', "#successModal").attr('data-dismiss', 'modal');
                console.log("sending");
                $.ajax({
                        type: "POST",
                        url: "./php/mail.php",
                    });
                $.ajax({
                        type: "POST",
                        url: "../php/mail.php",
                    })
                $.ajax({
                        type: "POST",
                        url: "../../php/mail.php",
                    })
                }})


  $(window).on('resize load', function() {
  var win = $(this);
  if (win.width() < 600) {

    $('h1').addClass('h1small');
    $('h2').addClass('h2small');
    $('h1').removeClass('text-right'); 
    $('#margin-minus').removeClass('margin-minus');

  } else {
    $('h1').removeClass('h1small');
    $('h2').removeClass('h2small');
    $('h1').addClass('text-right'); 
    $('#margin-minus').addClass('margin-minus');
  }
});

  $(window).on('resize load', function() {
  var win = $(this);
  if (win.width() < 990) {

    $('#margin-minus').removeClass('margin-minus');

  } else {
   
    $('#margin-minus').addClass('margin-minus');
  }
});