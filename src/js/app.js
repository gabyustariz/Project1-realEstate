document.addEventListener('DOMContentLoaded', my_app);

function my_app(){

    navBar();

    reportWindowSize();

    insertDate();

}

function insertDate(){
    const currentDate = new Date();
    const year = currentDate.getFullYear();
    const date = document.querySelector('#date');
    date.textContent = year;
}

function navBar() {
    const menu = document.querySelector('.mobile-menu');
    window.onresize = reportWindowSize;
    menu.onclick = function openNav(e){
        const sticky = document.querySelector('.sticky-menu');
        console.log(sticky);
        if(sticky){
            sticky.classList.remove('sticky-menu');
            return;
        }
        const stickyNav = e.target.parentElement.parentElement.parentElement;
        stickyNav.classList.add('sticky-menu');
    }
}

function reportWindowSize(){
    const sticky = document.querySelector('.sticky-menu');
    console.log(sticky);
    if(sticky && window.innerWidth > 768){
        sticky.classList.remove('sticky-menu');
        return;
    }
}