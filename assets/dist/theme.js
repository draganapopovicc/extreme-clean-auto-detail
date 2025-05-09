"use strict";

jQuery(document).ready(function ($) {
  // Mobile navigation
  $(".menu-toggle").click(function () {
    $(".main-navigation_wrap").fadeToggle();
    $(this).toggleClass("menu-open");
    $(this).hasClass("menu-open") ? $("body").css("overflow", "hidden") : $("body").css("overflow", "auto");
  });

  // Sub Menu Trigger
  $(".sub-menu-trigger").click(function () {
    $(this).parent().toggleClass("sub-menu-open");
    $(this).siblings(".sub-menu").slideToggle();
  });

  //Sticky Header
  $(window).on("load scroll", function () {
    var header = $(".header-main");
    var scrollHeader = window.scrollY;
    if (scrollHeader >= 200) {
      header.addClass("sticky-header");
    } else {
      header.removeClass("sticky-header");
    }
  });

  // Accordion
  $(".st_accordion-header").click(function () {
    $(this).siblings(".st_accordion-body").slideToggle();
    $(this).parent(".st_accordion-item ").toggleClass("open");
  });
});