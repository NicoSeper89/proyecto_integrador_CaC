window.addEventListener("load", function () {
  const forms = document.querySelectorAll(".form");

  forms.forEach((form) => {
    
    const inputs = document.querySelectorAll(".inputText" + form.id.substring(4));

    form.addEventListener("submit", (e) => {
      let isOk = true;

      inputs.forEach((input) => {
        if (!input.classList.contains("is-valid")) {
          input.classList.add("is-invalid");
          isOk = false;
        }
      });

      if (!isOk) {
        e.preventDefault();
      }

    });

 
    inputs.forEach((input) => {

      input.addEventListener("input", (event) => {
        let value = event.target.value;

        if (!value || value == "" || /^\s/.test(value)) {
          input.classList.remove("is-valid");
          input.classList.add("is-invalid");
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
          }
        }
      });
    });
    
  });
});
