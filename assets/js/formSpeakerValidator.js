const inputsArray = Array.from(document.getElementsByClassName("inputText"));

inputsArray.forEach((input) => {
  input.addEventListener("input", (event) => {
    let value = event.target.value;
    isvalid = true;

    if (!value || value == "" || /^\s/.test(value)) {
      input.classList.remove("is-valid");
      input.classList.add("is-invalid");
      isvalid = false;
    } else {
      input.classList.remove("is-invalid");
      input.classList.add("is-valid");
    }
    if (input.name === "email") {
      if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
        input.classList.remove("is-invalid");
        input.classList.add("is-valid");
      } else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        isvalid = false;
      }
    }
  });
});

const form = document.getElementById("form");

form.addEventListener("submit", (e) => {
  let isOk = true;

  inputsArray.forEach((input) => {
    if (!input.classList.contains("is-valid")) {
      input.classList.add("is-invalid");
      isOk = false;
    }
  });

  if (!isOk) {
    e.preventDefault();
  }
});
