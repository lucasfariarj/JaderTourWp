export default function Menu(){

    const btnMenu = document.querySelector('[data-menu="button"]');
    const listMenu = document.querySelector('[data-menu="list"]');

    const openMenu = ()=>{
        listMenu.classList.toggle('active');
    };

    btnMenu.addEventListener('click',openMenu);


}
