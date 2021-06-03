function projectEffect(project) {
  project.classList.add("animate__tada");
  console.log("working");
}

function removeProjectEffect(project) {
  project.classList.remove("animate__tada");
}


function bounceImg(img){
  img.classList.add("animate__bounce")
} 

function removeBounceImg(img){
  img.classList.remove("animate__bounce");
}