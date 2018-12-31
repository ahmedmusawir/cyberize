class DonutApp {
  constructor() {
    console.info('ES6 App Initialized! - From D3 Donut Index!');
    this.form = document.querySelector('form');
    this.name = document.querySelector('#name');
    this.cost = document.querySelector('#cost');
    this.error = document.querySelector('#error');
  }
  onSubmit() {
    this.form.addEventListener('submit', (e) => {
      e.preventDefault();

      if (name.value && cost.value) {
        alert('form submitted');
      } else {
        this.error.textContent = 'Please enter values ...';
      }
    });
  }
}

const app = new DonutApp();
app.onSubmit();
