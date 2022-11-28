import { parents } from '../utils/helpers';

class Navbar {
    dropdownMenu: NodeListOf<Element>;
    hamburger: HTMLElement | null;
    body: HTMLBodyElement | null;
    navBar: HTMLElement | null;
    header: HTMLElement | null;
    headerContainer: HTMLElement | null;
    windowWidth: number;
    containerWidth: number;

    constructor() {
        // Grab the elements
        this.header = document.querySelector('.header');
        this.headerContainer = document.querySelector('.header__container');
        this.dropdownMenu = document.querySelectorAll('.menu-item-has-children');
        this.hamburger = document.getElementById('hamburger-menu');
        this.navBar = document.querySelector('.navigation-menus');
        this.body = document.querySelector('body');
        this.windowWidth = document.body.clientWidth;
        this.containerWidth = 0;

        this.events();
    }

    events() {
        this.dropdownMenu.forEach((element) => {
            element.addEventListener('click', this.toggleDropdownMenu);
        });

        this.hamburger?.addEventListener('click', (event: Event) => {
            this.toggleMobileNavigationMenu(event);
            this.toggleNavbarSliding(event);
        });

        this.body?.addEventListener('click', (event: Event) => {
            this.removeActiveClassFromDropdown(event);
            this.closeNavbar(event);
        });

        // window.addEventListener('resize', () => {
        //     this.makeNavigationResponsive();
        // });

        window.addEventListener('load', () => {
            this.makeNavigationResponsive();
        });
    }

    toggleDropdownMenu(event: Event) {
        const target = event.target as Element;

        // Toggle active class on the element & activate the submenu
        target.classList.toggle('menu-item-has-children--active');
        target.querySelector('.sub-menu')?.classList.toggle('sub-menu--active');
    }

    /**
     * Remove active class from the element if it's clicked outside of the element
     * @param {Event} event
     * @memberof Navbar
     */
    removeActiveClassFromDropdown(event: Event) {
        const target = event.target as Element;

        this.dropdownMenu.forEach((element) => {
            // console.log(target, element);
            if (target !== element) {
                element.classList.remove('menu-item-has-children--active');
                element.querySelector('.sub-menu')?.classList.remove('sub-menu--active');
            }
        });
    }

    toggleMobileNavigationMenu(event: Event) {
        event.stopPropagation();
        event.preventDefault();
        event.stopImmediatePropagation();

        const target = event.target as Element;
        target.classList.toggle('hamburger-menu--active');
    }

    toggleNavbarSliding(event: Event) {
        this.navBar?.classList.toggle('navigation-menus--slide-active');
    }

    /**
     * Remove active class from the element if it's clicked outside of the element
     * @param {Event} event
     * @memberof Navbar
     */
    closeNavbar(event: Event) {
        const target = event.target as Element;

        if (parents(target, 'navigation-menus') !== true) {
            this.hamburger?.classList.remove('hamburger-menu--active');
            this.navBar?.classList.remove('navigation-menus--slide-active');
        }
    }

    /**
     * Make the navigation responsive when user resize the window
     * @memberof Navbar
     */
    makeNavigationResponsive() {
        const windowWidth = document.body.clientWidth;

        if (!this.containerWidth) this.containerWidth = this.headerContainer?.getBoundingClientRect().width as number;

        if (this.containerWidth + 216 + 25 + 80 > windowWidth && windowWidth > 1280) {
            this.header?.classList.add('header--activate-mobile');
        } else {
            this.header?.classList.remove('header--activate-mobile');
        }
    }
}

export default Navbar;
