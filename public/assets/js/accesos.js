document.querySelectorAll(".deshabilitar").forEach((element) => {
  element.addEventListener("change", (e) => {
    const tr = element.parentNode.parentNode;
    const id = tr.children[0].children[0].children[0].children[0].value;
    const activo = tr.children[2].children[0];
    const inactivo = tr.children[2].children[1];
    let formData = new FormData();
    if (e.target.checked) {
      formData.append("habilitado", 1);
      formData.append("id", id);
      fetch("habilitar", {
        method: "POST",
        body: formData,
      }).then(() => {
        activo.style.display = "block";
        inactivo.style.display = "none";
      });
    } else {
      formData.append("habilitado", 0);
      formData.append("id", id);
      fetch("habilitar", {
        method: "POST",
        body: formData,
      }).then(() => {
        activo.style.display = "none";
        inactivo.style.display = "block";
      });
    }
  });
});

document.querySelectorAll(".habilitar").forEach((element) => {
  element.addEventListener("change", (e) => {
    const tr = element.parentNode.parentNode;
    const id = tr.children[0].children[0].children[0].children[0].value;
    const activo = tr.children[2].children[0];
    const inactivo = tr.children[2].children[1];
    let formData = new FormData();
    if (e.target.checked) {
      formData.append("id", id);
      formData.append("habilitado", 1);
      fetch("habilitar", {
        method: "POST",
        body: formData,
      }).then(() => {
        inactivo.style.display = "none";
        activo.style.display = "block";
      });
    } else {
      formData.append("id", id);
      formData.append("habilitado", 0);
      fetch("habilitar", {
        method: "POST",
        body: formData,
      }).then(() => {
        inactivo.style.display = "block";
        activo.style.display = "none";
      });
    }
  });
});
