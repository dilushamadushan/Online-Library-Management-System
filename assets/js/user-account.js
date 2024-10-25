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

const listBookBtn = document.getElementById('list-book');
const returnBookBtn = document.getElementById('return-book');
const issuedBookBtn = document.getElementById('issued-book');

const listBookSection = document.getElementById('list-book-sec');
const returnBookSection = document.getElementById('return-book-sec');
const issuedBookSection = document.getElementById('issued-book-sec');
    
    function showBookSection(sectionToShow) {
            listBookSection.style.display = 'none';
            returnBookSection.style.display = 'none';
            issuedBookSection.style.display = 'none';
    
            sectionToShow.style.display = 'block';
        }
    

listBookBtn.addEventListener('click', () => showBookSection(listBookSection));
returnBookBtn.addEventListener('click', () => showBookSection(returnBookSection));
issuedBookBtn.addEventListener('click', () => showBookSection(issuedBookSection));

const eListBookBtn = document.getElementById('e-list-book');
const eReturnBookBtn = document.getElementById('e-return-book');
const eIssuedBookBtn = document.getElementById('e-issued-book');
const eListBookSection = document.getElementById('e-list-book-sec');
const eReturnBookSection = document.getElementById('e-return-book-sec');
const eIssuedBookSection = document.getElementById('e-issued-book-sec');
        
function showEBookSection(sectionToShow) {
            eListBookSection.style.display = 'none';
            eReturnBookSection.style.display = 'none';
            eIssuedBookSection.style.display = 'none';
            sectionToShow.style.display = 'block';
        }
eListBookBtn.addEventListener('click', () => showEBookSection(eListBookSection));
eReturnBookBtn.addEventListener('click', () => showEBookSection(eReturnBookSection));
eIssuedBookBtn.addEventListener('click', () => showEBookSection(eIssuedBookSection));
        
window.onload = () => {
            showBookSection(listBookSection); 
            showEBookSection(eListBookSection); 
        };

document.getElementById('user-update').addEventListener('click', function() {
            document.querySelector('.user-info-main').style.display = 'none';
            document.querySelector('.update-form').style.display = 'block';
        });
    
document.getElementById('profBack-user').addEventListener('click', function() {
            document.querySelector('.update-form').style.display = 'none';
            document.querySelector('.user-info-main').style.display = 'flex';
        });