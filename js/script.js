const value = document.querySelector("#value");
const input = document.querySelector("#range");

value.textContent = input.value;

input.addEventListener("input", (event) => {
  value.textContent = event.target.value;
});