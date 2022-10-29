"use strict";

const description = document.querySelectorAll(".des");
const form = document.getElementById("formulario");
const reset = document.querySelector(".btn-secondary");

form.addEventListener("submit", () => {
  description.forEach(des => {
    des.textContent = "";
  });
});

reset.addEventListener("click", () => {
  description.forEach(des => {
    des.textContent = "";
  });
});
