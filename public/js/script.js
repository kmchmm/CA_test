const openModalButtons = document.querySelectorAll('.open-modal-button');
const modals = document.querySelectorAll('.modal');
const closeButtons = document.querySelectorAll('.close');

openModalButtons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        modals[index].style.display = 'block';
    });
});


closeButtons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        modals[index].style.display = 'none';
    });
});

window.addEventListener('click', (e) => {
    modals.forEach((modal) => {
        if(e.target === modal){
            modal.style.display = 'none';
        }
    })
})


const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
const menu = document.querySelector('.navigation-buttons-mobile');
const menuBrgBfr = document.querySelector('.menu-btn_burger-bfr');
const menuBrgAft = document.querySelector('.menu-btn_burger-aft');
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        menuOpen = true;
        menu.style.display = "block";
        menuBrgBfr.style.backgroundColor = "#ffffff";
        menuBrgAft.style.backgroundColor = "#ffffff";
    } else {
        menuBtn.classList.remove('open');
        menuOpen = false;
        menu.style.display = "none";
        menuBrgBfr.style.backgroundColor = "#212529";
        menuBrgAft.style.backgroundColor = "#212529";
    }
})
