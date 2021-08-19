$(document).ready(function () {

  $(".nav-dropdown").hover(function () {
    $(this).addClass("open")
  }, function () {
    $(this).removeClass("open")
  })

  $("#btn-next").click(function (e) {
    var slide_next = $(".slide-item.active").next();

    if (slide_next.length != 0) {
      $(".slide-item.active")
        .addClass("go-to-left")
        .one("webkitAnimationStart", function () {
          $(".slide-btn").css("opacity", 0)
        })
        .one("webkitAnimationEnd", function (e) {
          $(".go-to-left").removeClass("go-to-left").removeClass("active");
          $(".slide-btn").css("opacity", 1)
        });
      slide_next
        .addClass("active")
        .addClass("go-to-right")
        .one("webkitAnimationEnd", function (e) {
          $(".go-to-right").removeClass("go-to-right");
        });
    } else {
        $(".slide-item.active")
        .addClass("go-to-left")
        .one("webkitAnimationStart", function () {
          $(".slide-btn").css("opacity", 0)
        })
        .one("webkitAnimationEnd", function (e) {
          $(".go-to-left").removeClass("go-to-left").removeClass("active");
          $(".slide-btn").css("opacity", 1)
        });
        $('.slide-item:first-child').addClass("active")
        .addClass("go-to-right")
        .one("webkitAnimationEnd", function (e) {
          $(".go-to-right").removeClass("go-to-right");
        });
    }
  });

  $("#btn-prev").click(function (e) {
    var slide_prev = $(".slide-item.active").prev();
    if (slide_prev.length != 0) {
    $(".slide-item.active")
      .addClass("go-to-left2")
      .one("webkitAnimationStart", function () {
        $(".slide-btn").css("opacity", 0)
      })
      .one("webkitAnimationEnd", function (e) {
        $(".go-to-left2").removeClass("go-to-left2").removeClass("active");
        $(".slide-btn").css("opacity", 1)
      });
    slide_prev
      .addClass("active")
      .addClass("go-to-right2")
      .one("webkitAnimationEnd", function (e) {
        $(".go-to-right2").removeClass("go-to-right2");
      });
    } else {
        $(".slide-item.active")
        .addClass("go-to-left2")
        .one("webkitAnimationStart", function () {
          $(".slide-btn").css("opacity", 0)
        })
        .one("webkitAnimationEnd", function (e) {
          $(".go-to-left2").removeClass("go-to-left2").removeClass("active");
          $(".slide-btn").css("opacity", 1)
        });
        $('.slide-item:last-child').addClass("active")
        .addClass("go-to-right2")
        .one("webkitAnimationEnd", function (e) {
          $(".go-to-right2").removeClass("go-to-right2");
        });
    }
  });

  var slidesLength = $(".slides li").length

  $(".news-tab__item").click(function (e) {
    e.preventDefault();
    var idEvent = $(".news-tab__item.selected").attr("href")
    $(".news-tab__item.selected").removeClass("selected");
    $(idEvent).css('display', 'none');

    $(this).addClass("selected");
    idEvent = $(".news-tab__item.selected").attr("href")
    $(idEvent).css('display', 'block');
  })

  $(".flex-prev").click(function (e) {
    e.preventDefault();
    $("ul.slides").css('margin-left', '0')
  })

  $(".flex-next").click(function (e) {
    e.preventDefault();
    $("ul.slides").css('margin-left', '-100%')
    if (!$("ul.slides").css('margin-left')) {
      $("ul.slides").css('margin-left', '-200%')
    }
    console.log($("ul.slides").css('margin-left'))
  })

  $("#btn-search").click(function (e) {
    $(".input-search").addClass("open")
  })

  $("#close-search").click(function (e) {
    $(".input-search").removeClass("open")
  })

});
