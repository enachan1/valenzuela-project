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
