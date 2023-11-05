document
  .getElementById("ticketsForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    let name = event.target.formName.value;
    let surname = event.target.formSurname.value;
    let email = event.target.formEmail.value;
    let amount = event.target.formAmount.value;
    let category = event.target.formCategories.value;

    document.getElementById("formAlert").textContent =
      "Total a pagar: $" + ((amount * 200) / 100) * (100 - category);

    event.target.formName.value = "";
    event.target.formSurname.value = "";
    event.target.formEmail.value = "";
    event.target.formAmount.value = "";
    event.target.formCategories.value = "";
  });


