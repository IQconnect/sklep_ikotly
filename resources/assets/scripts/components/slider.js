const Flickity = require('flickity');

// deklarowanie obiektu
const slider = {
  init() {
    this.slider = new Flickity('.main-carousel', {
      prevNextButtons: true,
      pageDots: true,
      wrapAround: true,
      autoPlay: 4000,
    });
    this.resize();
  },

  resize() {
    window.onload = () => {
      this.slider.resize();
    };
  },
}

export default slider;