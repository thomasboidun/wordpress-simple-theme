import { MegaMenuFactory } from './src/MegaMenuFactory';

window.addEventListener('DOMContentLoaded', event => {
    console.log('MegaMenu library works!');

    const megaMenuBlockSelector = '.mega-menu';
    const megaMenuBlockList = [...document.querySelectorAll(megaMenuBlockSelector)];

    megaMenuBlockList.forEach(block => {
        MegaMenuFactory.build(block);
    });

    console.log(MegaMenuFactory.megaMenuList);
});