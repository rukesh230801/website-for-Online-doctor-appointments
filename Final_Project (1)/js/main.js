//Image slider
const slides = document.querySelectorAll(".slide");
const next = document.querySelector(".next");
const prev = document.querySelector(".prev");
const auto = false;
const intervalTime = 5000;
let slideInterval;
//Image Slider

//Rating Slider
const boxes = document.querySelectorAll(".box");
const right = document.querySelectorAll(".right");
const left = document.querySelectorAll(".left");
//Rating Slider

//Specialty Slider
const chars = document.querySelectorAll(".char");

//See more button
const link = document.querySelectorAll(".link");

//Tab button
const click = document.querySelectorAll(".click");

//Functions of Image slider(intro)
const nextSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.nextElementSibling) {
    current.nextElementSibling.classList.add("current");
  } else {
    slides[0].classList.add("current");
  }
  setTimeout(() => {
    current.classList.remove("current");
  }, 200);
};
next.addEventListener("click", (e) => {
  nextSlide();
  //To reset the time interval after we click next for auto
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});
const prevSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add("current");
  } else {
    slides[slides.length - 1].classList.add("current");
  }
  setTimeout(() => {
    current.classList.remove("current");
  }, 200);
};
prev.addEventListener("click", (e) => {
  prevSlide();
  //To reset the time interval after we click previous for auto
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});
//Auto next slide
if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}
//Functions of Image Slider Ends

//The Book Button
function setFocus() {
  const input = document.querySelector(".search-box");
  input.focus();
}

//Functions Of Rating Slider

//Moving Left
const leftSlide = () => {
  const box1 = document.querySelectorAll(".box1");
  const box2 = document.querySelectorAll(".box2");
  const box3 = document.querySelectorAll(".box3");

  box1[0].classList.remove("box1");
  box2[0].classList.remove("box2");
  box3[0].classList.remove("box3");
  if (box1[0].previousElementSibling) {
    if (box1[0].previousElementSibling) {
      box1[0].previousElementSibling.classList.add("box1");
    }
    if (box2[0].previousElementSibling) {
      box2[0].previousElementSibling.classList.add("box2");
    }
    if (box3[0].previousElementSibling) {
      box3[0].previousElementSibling.classList.add("box3");
    }
  } else {
    boxes[boxes.length - 3].classList.add("box1");
    boxes[boxes.length - 2].classList.add("box2");
    boxes[boxes.length - 1].classList.add("box3");
  }

  //See more
  if (box3[0] == boxes[2]) {
    link[0].style.visibility = "visible";
  }
  setTimeout(() => {
    box1[0].classList.remove("box1");
    box2[0].classList.remove("box2");
    box3[0].classList.remove("box3");
  }, 200);
};
left[0].addEventListener("click", (e) => {
  leftSlide();
});

//Moving Right
const rightSlide = () => {
  const box1 = document.querySelectorAll(".box1");
  const box2 = document.querySelectorAll(".box2");
  const box3 = document.querySelectorAll(".box3");

  box1[0].classList.remove("box1");
  box2[0].classList.remove("box2");
  box3[0].classList.remove("box3");
  if (box3[0].nextElementSibling) {
    if (box1[0].nextElementSibling) {
      box1[0].nextElementSibling.classList.add("box1");
    }
    if (box2[0].nextElementSibling) {
      box2[0].nextElementSibling.classList.add("box2");
    }
    if (box3[0].nextElementSibling) {
      box3[0].nextElementSibling.classList.add("box3");
    }
  } else {
    boxes[0].classList.add("box1");
    boxes[1].classList.add("box2");
    boxes[2].classList.add("box3");
  }

  //See more
  if (box3[0] == boxes[boxes.length - 2]) {
    link[0].style.visibility = "visible";
  }
  setTimeout(() => {
    box1[0].classList.remove("box1");
    box2[0].classList.remove("box2");
    box3[0].classList.remove("box3");
  }, 200);
};
right[0].addEventListener("click", (e) => {
  rightSlide();
});

//Functions of Specialty Slider

//Moving Left
const moveLeft = () => {
  const box1 = document.querySelectorAll(".box1");
  const box2 = document.querySelectorAll(".box2");
  const box3 = document.querySelectorAll(".box3");

  box1[1].classList.remove("box1");
  box2[1].classList.remove("box2");
  box3[1].classList.remove("box3");
  if (box1[1].previousElementSibling) {
    if (box1[1].previousElementSibling) {
      box1[1].previousElementSibling.classList.add("box1");
    }
    if (box2[1].previousElementSibling) {
      box2[1].previousElementSibling.classList.add("box2");
    }
    if (box3[1].previousElementSibling) {
      box3[1].previousElementSibling.classList.add("box3");
    }
  } else {
    chars[chars.length - 3].classList.add("box1");
    chars[chars.length - 2].classList.add("box2");
    chars[chars.length - 1].classList.add("box3");
  }

  //See more
  if (box3[1] == chars[2]) {
    link[1].style.visibility = "visible";
  }
  setTimeout(() => {
    box1[1].classList.remove("box1");
    box2[1].classList.remove("box2");
    box3[1].classList.remove("box3");
  }, 200);
};
left[1].addEventListener("click", (e) => {
  moveLeft();
});

//Moving Right
const moveRight = () => {
  const box1 = document.querySelectorAll(".box1");
  const box2 = document.querySelectorAll(".box2");
  const box3 = document.querySelectorAll(".box3");

  box1[1].classList.remove("box1");
  box2[1].classList.remove("box2");
  box3[1].classList.remove("box3");
  if (box3[1].nextElementSibling) {
    if (box1[1].nextElementSibling) {
      box1[1].nextElementSibling.classList.add("box1");
    }
    if (box2[1].nextElementSibling) {
      box2[1].nextElementSibling.classList.add("box2");
    }
    if (box3[1].nextElementSibling) {
      box3[1].nextElementSibling.classList.add("box3");
    }
  } else {
    chars[0].classList.add("box1");
    chars[1].classList.add("box2");
    chars[2].classList.add("box3");
  }

  //See more
  if (box3[1] == chars[chars.length - 2]) {
    link[1].style.visibility = "visible";
  }
  setTimeout(() => {
    box1[1].classList.remove("box1");
    box2[1].classList.remove("box2");
    box3[1].classList.remove("box3");
  }, 200);
};
right[1].addEventListener("click", (e) => {
  moveRight();
});

// Tab Function

const changeState = (j) => {
  const active = document.querySelector(".active");
  active.classList.remove("active");
  click[j].classList.add("active");
  setTimeout(() => {
    active.classList.remove("active");
  }, 200);
};
for (let j = 0; j < 4; j++) {
  click[j].addEventListener("click", (e) => {
    changeState(j);
  });
}
