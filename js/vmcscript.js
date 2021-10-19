const slider = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;

//image slider next button
nextBtn.addEventListener('click', () => {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });

    slideNumber++;

    if (slideNumber > (numberOfSlides - 1)) {
        slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
});

//image slider previous button
prevBtn.addEventListener("click", () => {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });

    slideNumber--;

    if (slideNumber < 0) {
        slideNumber = numberOfSlides - 1;
    }
    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
}); //image slider autoplay var playSlider; var
repeater = () => {
    playSlider = setInterval(function () {
        slides.forEach((slide) => {
            slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
        });

        slideNumber++;

        if (slideNumber > (numberOfSlides - 1)) {
            slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
    }, 5000);
}
repeater();

//stop the image slider autoplay on mouseover
slider.addEventListener("mouseover", () => {
    clearInterval(playSlider);
});

//start the image slider autoplay again on mouseout
slider.addEventListener("mouseout", () => {
    repeater();

});

//  views course

document.querySelector('.vieweds_products').addEventListener("mouseover", mouseovers)
document.querySelector('.vieweds_products').addEventListener("mouseout", mouseOut)
// 
document.querySelector('.viewed-products').addEventListener("mouseover", mouseovers);
document.querySelector('.viewed-products').addEventListener("mouseout", mouseOut);


// best course
document.querySelector('.best-sellre').addEventListener("mouseover", mouseoversSale);
document.querySelector('.best-sellre').addEventListener("mouseout", mouseOutSale);
document.querySelector('.selling-course').addEventListener("mouseover", mouseoversSale);
document.querySelector('.selling-course').addEventListener("mouseout", mouseOutSale);


function mouseovers() {
    document.querySelector('.viewed-products').style.display = 'block';

}

function mouseOut() {
    document.querySelector('.viewed-products').style.display = "none";

}

function mouseoversSale() {
    //document.querySelector('.viewed-products').style.display = 'block';
    document.querySelector('.selling-course').style.display = 'block';
}

function mouseOutSale() {
    // document.querySelector('.viewed-products').style.display = "none";
    document.querySelector('.selling-course').style.display = 'none';
    // document.querySelector('.viewed-products').style.transition = 'all 4s';
}

// 
productScroll();

function productScroll() {
    let slider = document.getElementById("selling-course-slider");
    let next = document.getElementsByClassName("pro-next");
    let prev = document.getElementsByClassName("pro-prev");
    let slide = document.getElementById("selling-course-slide");
    let item = document.getElementById("selling-course-slide");

    for (let i = 0; i < next.length; i++) {
        //refer elements by class name

        let position = 0; //slider postion

        prev[i].addEventListener("click", function () {
            //click previos button
            if (position > 0) {
                //avoid slide left beyond the first item
                position -= 1;
                translateX(position); //translate items
            }
        });

        next[i].addEventListener("click", function () {
            if (position >= 0 && position < hiddenItems()) {
                //avoid slide right beyond the last item
                position += 1;
                translateX(position); //translate items
            }
        });
    }

    function hiddenItems() {
        //get hidden items
        let items = getCount(item, false);
        let visibleItems = slider.offsetWidth / 270;
        return items - Math.ceil(visibleItems);
    }

    function translateX(position) {
        //translate items
        slide.style.left = position * -270 + "px";
    }
}



function getCount(parent, getChildrensChildren) {
    //count no of items
    let relevantChildren = 0;
    let children = parent.childNodes.length;
    for (let i = 0; i < children; i++) {
        if (parent.childNodes[i].nodeType != 3) {
            if (getChildrensChildren)
                relevantChildren += getCount(parent.childNodes[i], true);
            relevantChildren++;
        }
    }
    return relevantChildren;
}

//  slider events 
const vmcEventPrew = document.querySelector('.event-prew');
const vmcEventNext = document.querySelector('.event-next');



var slideEventbt = 1;
showvmcEventSlider(slideEventbt);

function plusEventvmcSlider(n) {
    showvmcEventSlider(slideEventbt += n);
}

function showvmcEventSlider(n) {
    var i;
    var x = document.getElementsByClassName("event--item");
    if (n > x.length) {
        slideEventbt = 1
    }
    if (n < 1) {
        slideEventbt = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";

    }
    x[slideEventbt - 1].style.display = "block";

}
// header

const navmb = document.querySelector('.nav-mb');
const vmcclose = document.querySelector('.vmc-close');
const popupclose = document.querySelector('.vmc-popup-close');
const openchatbot = document.querySelector('.vmc-chatbot-title');
navmb.addEventListener('click', () => {
    document.querySelector('.vmc-header-mb__category').classList.toggle('active');
    document.querySelector('body').classList.toggle('afters');
});

vmcclose.addEventListener('click', () => {
    document.querySelector('.vmc-header-mb__category').classList.toggle('active');
    document.querySelector('body').classList.toggle('afters');

});

function addpopup() {
    document.querySelector('.vmc-popup').classList.toggle('active');
}

popupclose.addEventListener('click', addpopup);
setTimeout(addpopup, 6000);

openchatbot.addEventListener('click', () => {
    document.querySelector('.vmc-chatbot').classList.toggle('active');
})