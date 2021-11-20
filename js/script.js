let navigation = document.querySelector('.navigation');

document.querySelector('#main-btn').onclick = () =>{
    navigation.classList.toggle('active');
    searchingForm.classList.remove('active');
    cartEntity.classList.remove('active');
}

let searchingForm = document.querySelector('.searching-form');

document.querySelector('#search-btn').onclick = () =>{
    searchingForm.classList.toggle('active');
    navigation.classList.remove('active');
    cartEntity.classList.remove('active');
}

let cartEntity = document.querySelector('.cart');

document.querySelector('#cart-btn').onclick = () =>{
    cartEntity.classList.toggle('active');
    navigation.classList.remove('active');
    searchingForm.classList.remove('active');
}

window.onscroll = () =>{
    navigation.classList.remove('active');
    searchingForm.classList.remove('active');
    cartEntity.classList.remove('active');
}
