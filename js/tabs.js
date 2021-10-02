export default function Tabs(){

    const btn = document.querySelectorAll('[data-tab="button"]');
    const conteudo = document.querySelectorAll('[data-tab="content"]');

    function navTab(index){
        conteudo.forEach((item) => {
            item.classList.remove('active')
        });
        conteudo[index].classList.add('active')
    }

    btn.forEach((element,index) => {
        element.addEventListener('click',(e) => {
            e.preventDefault();
            navTab(index)
        })
    })







}