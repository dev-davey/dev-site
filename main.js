function projectEffect(project) {
  project.classList.add("animate__swing");
  console.log("working");
}

function removeProjectEffect(project) {
  project.classList.remove("animate__swing");
}


function bounceImg(img){
  img.classList.add("animate__bounce")
} 

function removeBounceImg(img){
  img.classList.remove("animate__bounce");
}

function onLinkClick(id) {
  document.getElementById(id).scrollIntoView();
  console.log('is this working')
  // will scroll to 4th h3 element
}


$(document).on('click', 'a.nav-link', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - $(".navbar.sticky-top").height()
    }, 500);
});