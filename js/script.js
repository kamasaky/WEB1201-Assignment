let navigation = document.querySelector('.navigation');

document.querySelector('#menu-btn').onclick = () =>{
    navigation.classList.toggle('active');
    searchForm.classList.remove('active');
    cartEntity.classList.remove('active');
}

let searchForm = document.querySelector('.searching-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navigation.classList.remove('active');
    cartEntity.classList.remove('active');
}

let cartentity = document.querySelector('.product-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartEntity.classList.toggle('active');
    navigation.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navigation.classList.remove('active');
    searchForm.classList.remove('active');
    cartEntity.classList.remove('active');
}
