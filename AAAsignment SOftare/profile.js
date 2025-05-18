
    // Simple interactive elements
    document.addEventListener('DOMContentLoaded', function() {
      // Notification button toggle
      const notificationBtn = document.querySelector('.notification-btn');
      notificationBtn.addEventListener('click', function() {
        alert('You have 3 new notifications');
      });

      // Nav item active state
      const navItems = document.querySelectorAll('.nav-item');
      navItems.forEach(item => {
        item.addEventListener('click', function(e) {
          e.preventDefault();
          navItems.forEach(i => i.classList.remove('active'));
          this.classList.add('active');
        });
      });

      // Action buttons
      const actionButtons = document.querySelectorAll('.action-btn');
      actionButtons.forEach(btn => {
        btn.addEventListener('click', function() {
          const action = this.querySelector('.action-label').textContent;
          alert(`Action: ${action} clicked`);
        });
      });
    });
