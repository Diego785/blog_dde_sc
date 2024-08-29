document.addEventListener("DOMContentLoaded", () => {
  const nameInput = document.getElementById("nameInput");
  const cargoInput = document.getElementById("cargoInput");
  const addBtn = document.getElementById("addBtn");
  const personList = document.getElementById("personList");

  let persons = [];

  function renderPersons() {
    personList.innerHTML = "";
    persons.forEach((person, index) => {
      const li = document.createElement("li");
      li.textContent = `Nombre: ${person.name}, Cargo: ${person.cargo}`;

      const editBtn = document.createElement("span");
      editBtn.textContent = "Edit";
      editBtn.classList.add("edit-btn");
      editBtn.addEventListener("click", () => editPerson(index));

      const deleteBtn = document.createElement("span");
      deleteBtn.textContent = "Delete";
      deleteBtn.classList.add("delete-btn");
      deleteBtn.addEventListener("click", () => deletePerson(index));

      li.appendChild(editBtn);
      li.appendChild(deleteBtn);

      personList.appendChild(li);
    });

    // Adjust the height of the form page dynamically
    adjustFormPageHeight();
  }

  function adjustFormPageHeight() {
    const formPage = document.querySelector(".form-outer form .page");
    const newHeight = Math.max(
      90,
      (formPage.scrollHeight / window.innerHeight) * 110
    );
    formPage.style.height = newHeight + "vh";
  }

  function addPerson() {
    event.preventDefault();
    const name = nameInput.value.trim();
    const cargo = cargoInput.value.trim();
    if (name || cargo) {
      persons.push({ name: name, cargo: cargo });
      nameInput.value = "";
      cargoInput.value = "";
      renderPersons();
    }
  }

  function editPerson(index) {
    const newName = prompt("Edit name:", persons[index].name);
    const newCargo = prompt("Edit cargo:", persons[index].cargo);
    if (
      newName !== null &&
      newName.trim() &&
      newCargo !== null &&
      newCargo.trim()
    ) {
      persons[index].name = newName.trim();
      persons[index].cargo = newCargo.trim();
      renderPersons();
    }
  }

  function deletePerson(index) {
    persons.splice(index, 1);
    renderPersons();
  }

  addBtn.addEventListener("click", addPerson);
});
