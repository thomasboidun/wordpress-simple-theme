import { MegaMenu } from "./MegaMenu";

export var MegaMenuFactory = {
    megaMenuList : [],

    build(block) {
        if (!block) {
            return console.error(`MegaMenu block #${this.megaMenuList.length + 1} cannot be null.`);
        }

        if(!block.classList.contains('mega-menu')) {
            return console.error('Block must have the CSS class "mega-menu".');
        }

        if (!block.id) {
            return console.error(`The MegaMenu block #${this.megaMenuList.length + 1} must have a HTML anchor.`);
        }

        const hash = `#${block.id}`;
        const trigger = document.querySelector(`header a[href="${hash}"]`);

        if(!trigger) {
            return console.error(`No link in the header points to the HTML anchor ${hash}.`);
        }

        const megaMenu = new MegaMenu();
        megaMenu.block = block;
        megaMenu.block.setAttribute('tabindex', -1);
        megaMenu.trigger = trigger;
        megaMenu.trigger.addEventListener('click', event => {
            event.preventDefault();
            megaMenu.focus();
        });

        return this.megaMenuList.push(megaMenu);
    }

};