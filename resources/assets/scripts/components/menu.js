const CONFIG = {
  TRIGGER: '[menu-button]',
  ATTR: 'menu-button',
  CLASS: 'menu__button--active',
};

const menu = {
  init() {
    const { TRIGGER } = CONFIG;
    this.triggers = document.querySelectorAll(TRIGGER);
    this.addEvent();
  },

  addEvent() {
    const { ATTR, CLASS } = CONFIG;
    this.triggers.forEach(item => {
      let name = item.getAttribute(ATTR);
      item.addEventListener('click', (event) => {
        let target = event.currentTarget;
        event.preventDefault();
        console.log(name);
        this.removeActiveClass();
        target.classList.add(CLASS);
      });
    })
  },

  removeActiveClass() {
    const { CLASS } = CONFIG;
    this.triggers.forEach(trigger => {
      trigger.classList.remove(CLASS);
    });
  },
};

export default menu;