const Flickity = require('flickity');

// deklarowanie obiektu
const products = {
  init() {
    this.products = new Flickity('.products-carousel', {
      prevNextButtons: true,
      pageDots: true,
      wrapAround: true,
      autoPlay: 4000,
    });
    this.resize();
  },

  resize() {
    window.onload = () => {
      this.products.resize();
    };
  },
}

export default products;