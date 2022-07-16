window.addEventListener('scroll', ()=>{
    if(window.scrollY > 275){
        const nav = document.querySelector('#nav-desktop');
        nav.classList.add('position-fixed', 'top-0');
        nav.style.height = '75px';
        nav.style.zIndex = '5';
    }else{
        const nav = document.querySelector('#nav-desktop');
        nav.classList.remove('position-fixed', 'top-0');
        nav.style.height = '75px';
    }
});
