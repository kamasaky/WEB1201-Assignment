let navigation = document.querySelector('.navigation');

document.querySelector('#main').onclick = () =>{
    navigation.classList.toggle('active');
    Searchingform.classList.remove('active');
    cartentity.classList.remove('active');
}

let Searchingform = document.querySelector('.search-form');

document.querySelector('#search').onclick = () =>{
    Searchingform.classList.toggle('active');
    navigation.classList.remove('active');
    cartentity.classList.remove('active');
}

let cartentity = document.querySelector('.cart-items-container');

document.querySelector('#cart').onclick = () =>{
    cartentity.classList.toggle('active');
    navigation.classList.remove('active');
    Searchingform.classList.remove('active');
}

window.onscroll = () =>{
    navigation.classList.remove('active');
    Searchingform.classList.remove('active');
    cartentity.classList.remove('active');
}