 // this script is required for navbar to toggle on and off, include this wherever the navbar is
 if(document.getElementById("toggle-button")){
    document.getElementsByClassName("navbar-toggler-icon")[0].addEventListener("click",(e)=>{
      console.log(e.target.parentElement.parentElement.children[2]);
      if(e.target.parentElement.parentElement.children[2].classList.contains("collapse")){
        e.target.parentElement.parentElement.children[2].classList.add("show");
        e.target.parentElement.parentElement.children[2].classList.remove("collapse");
      }else{
        e.target.parentElement.parentElement.children[2].classList.add("collapse");
        e.target.parentElement.parentElement.children[2].classList.remove("show");
      }
      console.log(e.target.parentElement.parentElement.children[2].classList);
    })
}else{
    console.log("no");
}