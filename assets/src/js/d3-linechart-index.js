const btns = document.querySelectorAll('.btn-danger');
const form = document.querySelector('form');
const formAct = document.querySelector('form span');
const input = document.querySelector('input');
const error = document.querySelector('.error');

let activity = 'cycling';

// console.log(btns);

btns.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    // GET ACTIVITY
    activity = e.target.dataset.activity;
    // console.log(activity);

    // REMOVE AND ADD ACTIVE CLASS
    btns.forEach((btn) => btn.classList.remove('active'));
    e.target.classList.add('active');

    // SET ID OF INPUT FIELD
    input.setAttribute('id', activity);

    // SET TEXT OF THE FORM SPAN
    formAct.textContent = activity;
  });
});

// console.log(`this is db: ${db}`);

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const distance = parseInt(input.value);
  if (distance) {
    db.collection('activities')
      .add({
        distance,
        activity,
        date: new Date().toString()
      })
      .then(() => {
        error.textContent = '';
        input.value = '';
      });
  } else {
    error.textContent = 'Please enter a valid distance';
  }
});
