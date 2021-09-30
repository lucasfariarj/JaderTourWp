export default function Slider() {

    const time = 3000;
    const images = document.querySelectorAll('[data-slide="img"]');
    const maxImages = images.length;
    let current = 0;

    function start(){

        function proximaImagem(){
            images[current].classList.remove('selected');
            current++;
            if(current >= maxImages) {
                current = 0;
            }
            images[current].classList.add('selected');
        }

        function startSlide(){
            setInterval(() => {
                proximaImagem()
            },time);
        }

        window.addEventListener('load',startSlide)

    }

    start()


}