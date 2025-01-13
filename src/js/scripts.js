var body = document.querySelector("body");

function openMenu() {
  var element = document.querySelectorAll(".header--content--menu");
  element.forEach(function (el) {
    el.classList.add("openned");
  });
  scrollTop();
  body.classList.add("overflow-hidden");
}

function closeMenu() {
  var close = document.querySelectorAll(".header--content--menu");
  close.forEach(function (item) {
    item.classList.remove("openned");
  });
  body.classList.remove("overflow-hidden");
}

document.addEventListener('DOMContentLoaded', function() {
  var menuModal = document.querySelector('.header--content--menu');
  var menuItems = document.querySelectorAll('.header--content--menu li a');

  // Close the modal when any menu item is clicked
  menuItems.forEach(function(item) {
    item.addEventListener('click', function() {
      menuModal.classList.remove("openned");
      body.classList.remove("overflow-hidden");
    });
  });
});