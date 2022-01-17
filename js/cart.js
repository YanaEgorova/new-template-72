import { products } from './data/products.js';
import { item, heroItem } from './templates/product-item.js';

const productsList = document.querySelector('.js_products__list');
const heroList = document.querySelector('.js_products__list-hero');

products.forEach(product => {
    productsList.insertAdjacentHTML('beforeend',item(product));
    heroList.insertAdjacentHTML('beforeend',heroItem(product));
})
