const navSlide = () =>{
    const burguer = document.querySelector('#burguer');
    const nav = document.querySelector('#nav-ul');
    burguer.addEventListener('click', () =>{
    nav.classList.toggle('nav-active');
});
}

navSlide();

let ubicaciónPrincipal = window.pageYOffset;

window.addEventListener("scroll", function(){
    let desplazamientoAcual = window.pageYOffset;
    if(ubicaciónPrincipal>=desplazamientoAcual){
        document.getElementsByTagName("nav")[0].style.top = "0px"
    } else{
        document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
    ubicaciónPrincipal = desplazamientoAcual;
})





