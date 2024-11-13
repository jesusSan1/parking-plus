class Card extends HTMLElement {
  constructor() {
    super();
    this.titulo = this.getAttribute("titulo");
    this.contenido = this.getAttribute("contenido");
  }
  connectedCallback() {
    this.innerHTML = /* HTML */ `
      <div class="card mb-3">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">
                  ${this.titulo}
                </p>
                <h5 class="font-weight-bolder">${this.contenido}</h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div
                class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle"
              >
                <i
                  class="ni ni-money-coins text-lg opacity-10"
                  aria-hidden="true"
                ></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    `;
  }
}

window.customElements.define("card-dashboard", Card);
