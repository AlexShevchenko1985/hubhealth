const header_mega_menu = () => {
    document.addEventListener('DOMContentLoaded', () => {
        const mainMenuBlock = document.querySelector('.submenu-block');
        if (!mainMenuBlock) return;

        const liItems = Array.from(mainMenuBlock.querySelectorAll('li.submenu-l2'));

        if (liItems.length === 0) return;

        liItems.forEach((li, idx) => {
            if (idx === 0) {
                li.classList.add('show-menu');
            } else {
                li.classList.remove('show-menu');
            }

            li.addEventListener('click', event => {
                event.preventDefault();
                liItems.forEach(item => {
                    item.classList.toggle('show-menu', item === li);
                });
            });
        });
    });
};

export default header_mega_menu;