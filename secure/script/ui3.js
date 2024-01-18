document.querySelectorAll('#v-pills-tab button').forEach(button => {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      let tabTrigger = new bootstrap.Tab(this);
      tabTrigger.show();
    });
  });
  
  var tabEl = document.querySelectorAll('#v-pills-tab button')
  tabEl.forEach(function (el) {
    el.addEventListener('shown.bs.tab', function (e) {
      var target = e.target.getAttribute('data-bs-target');
      document.querySelectorAll('.tab-pane').forEach(function (pane) {
        if ('#' + pane.id !== target) {
          pane.classList.remove('show', 'active');
        }
      });
    });
  });
  