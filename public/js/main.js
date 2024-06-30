let btns = document.querySelectorAll('.answer');
let form = document.querySelector('.main-form');


for(let i =0;i<btns.length;i++)
{
    btns[i].addEventListener('click',function(e){
        e.preventDefault();
        this.insertAdjacentHTML("afterend",form.outerHTML);
        form.innerHTML = '';
    })
}