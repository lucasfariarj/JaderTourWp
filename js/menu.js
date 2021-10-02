export default function Menu(){

    const btnMenu = document.querySelector('[data-menu="button"]');
    const listMenu = document.querySelector('[data-menu="list"]');

    const openMenu = (event)=>{
        listMenu.classList.toggle('active');
        btnMenu.classList.add('active');
    };

    btnMenu.addEventListener('click',openMenu);


}
