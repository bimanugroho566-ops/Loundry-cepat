/* ======================================
   LOADING
====================================== */

window.addEventListener("load", function () {
  document.body.style.opacity = "1";
});

/* ======================================
   NAVBAR SCROLL
====================================== */

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", function () {
  if (window.scrollY > 50) {
    navbar.style.background = "#1d4ed8";
    navbar.style.boxShadow = "0 10px 30px rgba(0,0,0,.2)";
  } else {
    navbar.style.background = "rgba(37,99,235,.85)";
    navbar.style.boxShadow = "none";
  }
});

/* ======================================
   HERO BUTTON
====================================== */

const btnMulai = document.querySelector(".btn-primary");

btnMulai.addEventListener("click", function (e) {
  e.preventDefault();

  alert("Menu Login Admin akan segera dibuat.");
});

/* ======================================
   COUNTER ANIMATION
====================================== */

const counters = document.querySelectorAll("h2");

counters.forEach((counter) => {
  const update = () => {
    const target = Number(counter.innerText.replace(/\D/g, ""));

    if (target == 0) return;

    let count = Number(counter.getAttribute("data-count")) || 0;

    let increment = Math.ceil(target / 80);

    if (count < target) {
      count += increment;

      if (count > target) count = target;

      counter.innerText = count + (counter.innerText.includes("%") ? "%" : "+");

      counter.setAttribute("data-count", count);

      setTimeout(update, 20);
    }
  };

  update();
});

/* ======================================
   SCROLL ANIMATION
====================================== */

const cards = document.querySelectorAll(".card");

window.addEventListener("scroll", () => {
  cards.forEach((card) => {
    const posisi = card.getBoundingClientRect().top;

    const layar = window.innerHeight - 100;

    if (posisi < layar) {
      card.style.opacity = "1";
      card.style.transform = "translateY(0)";
    }
  });
});

/* ======================================
   SERVICE BOX
====================================== */

const service = document.querySelectorAll(".service-box");

service.forEach((box) => {
  box.addEventListener("mouseenter", () => {
    box.style.transform = "translateY(-15px)";
  });

  box.addEventListener("mouseleave", () => {
    box.style.transform = "translateY(0px)";
  });
});

/* ======================================
   COPYRIGHT
====================================== */

console.log("LaundryPro Premium © 2026");
