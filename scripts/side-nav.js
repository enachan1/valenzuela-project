//Sidebar Navigation
function closeAllCollapsibleDropdownsExcept(activeDropdown) {
  var dropdowns = document.querySelectorAll('.sidebar-item .collapse');
  dropdowns.forEach(function(dropdown) {
      if (dropdown !== activeDropdown) {
          dropdown.classList.remove('show');
      }
  });
}

document.querySelectorAll('.sidebar-item').forEach(function(item) {
  item.addEventListener('click', function(event) {
      closeAllCollapsibleDropdownsExcept(null);
  });
});

document.querySelectorAll('.sidebar-item .dropdown-toggle').forEach(function(toggle) {
  toggle.addEventListener('click', function(event) {
      var dropdown = document.querySelector(toggle.getAttribute('data-bs-target'));
      closeAllDropdownsExcept(dropdown);
  });
});

document.querySelectorAll('.sidebar-item .collapse').forEach(function(dropdown) {
  dropdown.addEventListener('click', function(event) {
      event.stopPropagation();
  });
});

document.addEventListener('click', function(event) {
  if (!event.target.matches('.list-group-item-action') && !event.target.closest('.sidebar-item')) {
      closeAllCollapsibleDropdownsExcept(null);
  }
});


// Offcanvas Navigation
function closeAllOffcanvasDropdownsExcept(activeDropdown) {
  var dropdowns = document.querySelectorAll('.offcanvas-body .collapse');
  dropdowns.forEach(function(dropdown) {
      if (dropdown !== activeDropdown) {
          dropdown.classList.remove('show');
      }
  });
}

document.querySelectorAll('.offcanvas-body .nav-item').forEach(function(item) {
  item.addEventListener('click', function(event) {
      closeAllOffcanvasDropdownsExcept(null);
  });
});

document.querySelectorAll('.offcanvas-body .dropdown-toggle').forEach(function(toggle) {
  toggle.addEventListener('click', function(event) {
      var dropdown = document.querySelector(toggle.getAttribute('data-bs-target'));
      closeAllDropdownsExcept(dropdown);
  });
});

document.querySelectorAll('.offcanvas-body .collapse').forEach(function(dropdown) {
  dropdown.addEventListener('click', function(event) {
      event.stopPropagation();
  });
});

document.addEventListener('click', function(event) {
  if (!event.target.matches('.tabShow') && !event.target.closest('.offcanvas-body')) {
      closeAllOffcanvasDropdownsExcept(null);
  }
});

// Active
document.addEventListener('DOMContentLoaded', function() {
  function updateActiveLink(activeLinkHref) {
    document.querySelectorAll('.sidebar-nav .tabShow, .offcanvas .nav-link').forEach(function(link) {
      link.classList.remove('active');
    });

    document.querySelectorAll('.sidebar-nav .tabShow[href="' + activeLinkHref + '"], .offcanvas .nav-link[href="' + activeLinkHref + '"]').forEach(function(link) {
      link.classList.add('active');
    });
  }

  document.querySelectorAll('.sidebar-nav .tabShow').forEach(function(link) {
    link.addEventListener('click', function() {
      updateActiveLink(this.getAttribute('href'));
    });
  });

  document.querySelectorAll('.offcanvas .nav-link').forEach(function(link) {
    link.addEventListener('click', function() {
      updateActiveLink(this.getAttribute('href'));
      var offcanvasMenu = document.querySelector('.offcanvas.show');
      if (offcanvasMenu) {
        var bsOffcanvas = new bootstrap.Offcanvas(offcanvasMenu);
        bsOffcanvas.hide();
      }
    });
  });
});

// Tab Link of offcanvas
document.addEventListener('DOMContentLoaded', function() {
  var offcanvasLinks = document.querySelectorAll('.offcanvas .nav-link');

  offcanvasLinks.forEach(function(link) {

    link.addEventListener('click', function(event) {
      var targetPaneId = this.getAttribute('href');
      var targetPane = document.querySelector(targetPaneId);

      var tabPanes = document.querySelectorAll('.tab-pane');
      tabPanes.forEach(function(pane) {
        pane.classList.remove('active');
        pane.classList.remove('show');
      });

      if (targetPane) {
        targetPane.classList.add('active');
        targetPane.classList.add('show');
      }

      var offcanvasMenu = document.querySelector('.offcanvas.show');
      if (offcanvasMenu) {
        var bsOffcanvas = new bootstrap.Offcanvas(offcanvasMenu);
        bsOffcanvas.hide();
      }
    });
  });
});