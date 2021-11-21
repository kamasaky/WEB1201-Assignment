let navigation = document.querySelector('.navigation');

document.querySelector('#main').onclick = () =>{
    navigation.classList.toggle('active');
    searchingForm.classList.remove('active');
    cartEntity.classList.remove('active');
}

let searchingForm = document.querySelector('.searching-form');

document.querySelector('#search').onclick = () =>{
    searchingForm.classList.toggle('active');
    navigation.classList.remove('active');
    cartEntity.classList.remove('active');
}

let cartEntity = document.querySelector('.cart-entity');

document.querySelector('#cart').onclick = () =>{
    cartEntity.classList.toggle('active');
    navigation.classList.remove('active');
    searchingForm.classList.remove('active');
}

window.onscroll = () =>{
    navigation.classList.remove('active');
    searchingForm.classList.remove('active');
    cartEntity.classList.remove('active');
}