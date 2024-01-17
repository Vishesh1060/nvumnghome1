/*
document.getElementById('editAccountData').addEventListener('click', function() {
    document.getElementById('editOptions').classList.toggle('d-none');
  });
document.getElementById('editAccountData').addEventListener('click', function() {
    document.getElementById('editAccountData').classList.toggle('d-none');
  });
*/
let optionsButton = document.getElementById('editOptions');

let editButton = document.getElementById('editAccountData');
editButton.addEventListener('click', function() {
  optionsButton.classList.toggle('d-none');
  optionsButton.animate(keyframes, options);
  
  editButton.classList.toggle('d-none');

});


let options = {
    duration: 500,
    easing: 'ease-in-out',
    fill: 'forwards'
  };
let keyframes = [
    {left: '0' },
    {left: '50%'}
  ]

//editButton.animate(keyframes, options);
