const Flickity = require('flickity');

// deklarowanie obiektu
const banner = {
  init() {
    this.banner = new Flickity('.banner-carousel', {
      prevNextButtons: false,
      pageDots: false,
      wrapAround: true,
      autoPlay: 4000,
    });
    this.resize();
  },

  resize() {
    window.onload = () => {
      this.banner.resize();
    };
  },
}

export default banner;