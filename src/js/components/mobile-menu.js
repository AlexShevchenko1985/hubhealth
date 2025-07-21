const mobileMenu = () => {
    document.addEventListener('DOMContentLoaded', () => {
        const headerMenu = document.getElementById('Header');
        const menuBtn = document.querySelector('.mobile-menu-btn-holder');
        const menuItems = document.querySelectorAll('.mobile-menu li.has-children > a');
        const body = document.body;

        if (!headerMenu || !menuBtn || menuItems.length === 0) return;

        menuBtn.addEventListener('click', () => {
            const isOpen = headerMenu.classList.toggle('show-menu');
            body.style.overflow = isOpen ? 'hidden' : 'auto';
            menuBtn.classList.toggle('active', isOpen);
        });

        menuItems.forEach(link => {
            link.addEventListener('click', event => {
                event.preventDefault();

                const parentLi = link.closest('li.has-children');
                const submenu = parentLi.querySelector('ul');

                menuItems.forEach(otherLink => {
                    const otherLi = otherLink.closest('li.has-children');
                    const otherUl = otherLi.querySelector('ul');
                    if (otherLi !== parentLi) {
                        otherLi.classList.remove('active');
                        otherUl.style.height = '0';
                    }
                });

                const isCurrentlyActive = parentLi.classList.toggle('active');
                if (submenu) {
                    submenu.style.height = isCurrentlyActive
                        ? `${submenu.scrollHeight}px`
                        : '0';
                }
            });
        });
    });
};

export default mobileMenu;
