const toggleButton = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        const sections = document.querySelectorAll('.main-section');
        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
        sidebarLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
    
                const targetId = link.getAttribute('data-target');
    
                sections.forEach(section => {
                    section.classList.remove('active');
                });
    
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.classList.add('active');
                }
            });
        });