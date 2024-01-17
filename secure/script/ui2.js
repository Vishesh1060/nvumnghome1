
function selectMonth(months) {
    document.getElementById('selectedMonth').value = months;
    // Unselect other buttons if necessary and perform any other UI updates
  }
  
  function toggleCustomInput() {
    var customButton = document.getElementById('customButton');
    var customInput = document.getElementById('customInput');
    customButton.style.display = 'none';
    customInput.style.display = 'block';
    customInput.focus();
  }
  
  function setCustomMonth(value) {
    document.getElementById('selectedMonth').value = value;
    // Hide input and show button again if necessary
  }
  
  const miniButtons = document.querySelectorAll(".btn.btn-outline-dark.mini-button:not(.extra)");
  
  function makeButtonActive(e) {
    // Remove active class from all mini-buttons
    miniButtons.forEach(button => {
      button.classList.remove('active');
    });
  
    // Add active class to the clicked button
    e.target.classList.add('active');
  }
  
  miniButtons.forEach(button => {
    button.addEventListener('click', makeButtonActive);
  });

  document.addEventListener('DOMContentLoaded', function() {
    var extraOD = document.getElementById('extraOD');
    var noneBtn = document.getElementById('noneBtn');
  
    extraOD.addEventListener('click', function() {
      if (!this.classList.contains('active')) {
        noneBtn.classList.remove('active');
        this.classList.add('active');
        var input = document.createElement('input');
        input.type = 'text';
        input.value = '₹ ';
        input.size = 9;
        this.parentNode.replaceChild(input, this);
        input.focus();
      }
    });
  
    noneBtn.addEventListener('click', function() {
      if (!this.classList.contains('active')) {
        extraOD.classList.remove('active');
        this.classList.add('active');
        var span = document.createElement('a');
        span.id = 'extraOD';
        span.className = 'btn btn-outline-dark mini-button extra';
        span.textContent = 'Extra OD Deposit';
        this.parentNode.parentNode.querySelector('.col').replaceChild(span, this.parentNode.querySelector('input'));
      }
    });
  });