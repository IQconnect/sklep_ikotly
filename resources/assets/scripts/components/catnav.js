const catnav = {
  init() {
    const button = document.querySelector('.cat-nav__button');
    const nav = document.querySelector('.cat-nav');

    button && (
      button.addEventListener('click', () => {
        nav.classList.toggle('cat-nav--active');
        console.log(nav)
      }))
  },
};

export default catnav;