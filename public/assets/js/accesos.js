function data(element) {
  const tr = element.parentNode.parentNode;
  const id = tr.children[0].children[0].children[0].children[0].value;
  const activo = tr.children[2].children[0];
  const inactivo = tr.children[2].children[1];
  return { tr, id, activo, inactivo };
}

async function sendData(element, formData, habilitado, param1, param2) {
  const { id, activo, inactivo } = data(element);
  formData.append("habilitado", habilitado);
  formData.append("id", id);
  fetch("habilitar", {
    method: "POST",
    body: formData,
  }).then(() => {
    activo.style.display = param1;
    inactivo.style.display = param2;
  });
}
document.querySelectorAll(".deshabilitar").forEach((element) => {
  element.addEventListener("change", (e) => {
    let formData = new FormData();
    if (e.target.checked) {
      sendData(element, formData, 1, "block", "none");
    } else {
      sendData(element, formData, 0, "none", "block");
    }
  });
});

document.querySelectorAll(".habilitar").forEach((element) => {
  element.addEventListener("change", (e) => {
    let formData = new FormData();
    if (e.target.checked) {
      sendData(element, formData, 1, "block", "none");
    } else {
      sendData(element, formData, 0, "none", "block");
    }
  });
});
