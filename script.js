function actualizarPrefijo() {
  const paisSelect = document.getElementById("pais");
  const prefijo =
    paisSelect.options[paisSelect.selectedIndex].getAttribute("data-prefijo");
  const telefonoInput = document.getElementById("telef");

  telefonoInput.value = prefijo;
}
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
