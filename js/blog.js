"use strict";
const addClassCategoryBlog = document.querySelectorAll('.blog-news-categorys__item');
const addListNewsItem = document.querySelectorAll('.blog-news-categorys__listnews');
const blognewitem = 'active';
const addnewClass = 'hide';
const activeMenus = document.querySelectorAll('.blog-nvbar__items');



function getActiveMenusBlog() {
    activeMenus.forEach((menuitem) => {
        menuitem.addEventListener('click', () => {
            for (let menuitem of activeMenus) {
                if (menuitem.classList.contains(blognewitem)) {
                    menuitem.classList.remove(blognewitem);
                }
            }
            menuitem.classList.add(blognewitem);
        });
    });
}
getActiveMenusBlog();


function additems() {

    addClassCategoryBlog.forEach((menuitem) => {

        menuitem.addEventListener('click', () => {

            // menu
            for (let menuitem of addClassCategoryBlog) {

                if (menuitem.classList.contains(blognewitem)) {
                    menuitem.classList.remove(blognewitem);
                }
            }
            menuitem.classList.add(blognewitem);

            let datafilter = menuitem.getAttribute('data-filter');

            for (let k of addListNewsItem) {
                k.classList.remove(blognewitem);
                k.classList.add(addnewClass);
                if (k.getAttribute('data-item') == datafilter) {
                    k.classList.remove(addnewClass);
                    k.classList.add(blognewitem);
                }
            }
        })
    });

}
additems();

window.addEventListener('scroll', function () {
    var header = document.querySelector('.vmc-blog-header');
    header.classList.toggle("sticky", window.scrollY > 250);
    var postdetailnext = document.querySelector('.vmc-blog-main-detail__prev-post');
    var postdetailprev = document.querySelector('.vmc-blog-main-detail__next-post');
    var postdetailshares = document.querySelector('.post-detail__shares');
    postdetailshares.classList.toggle('strick', window.scrollY > 250);
    postdetailnext.classList.toggle('strick', window.scrollY > 350);
    postdetailprev.classList.toggle('strick', window.scrollY > 350);
});

const menusmbopen = document.querySelector('.vmc-blog-header-mb__menusv');
const menumbclose = document.querySelector('.blog-nvbar-mb__close');
menusmbopen.addEventListener('click', () => {
    document.querySelector('.blog-nvbar-mb__content').classList.toggle('active');

});

menumbclose.addEventListener('click', () => {
    document.querySelector('.blog-nvbar-mb__content').classList.toggle('active');
});