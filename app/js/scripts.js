// scripts.js

// Fonction pour afficher des notifications
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.textContent = message;
    document.body.appendChild(toast);

    setTimeout(() => {
        toast.classList.add('show');
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 300);
        }, 3000);
    }, 100);
}

// Fonction pour soumettre le formulaire de contact
document.querySelector('.contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    showToast('Formulaire de contact soumis!', 'success');
});

// Fonction pour ajouter des projets en favoris
document.querySelectorAll('.favorite-button').forEach(button => {
    button.addEventListener('click', function () {
        showToast('Projet ajouté aux favoris!', 'success');
        this.classList.toggle('favorited');
    });
});

// Fonction pour basculer les sections de profil
document.querySelectorAll('.profile-tab').forEach(tab => {
    tab.addEventListener('click', function () {
        const target = this.getAttribute('data-target');
        document.querySelectorAll('.profile-section').forEach(section => {
            section.classList.remove('active');
        });
        document.querySelector(`#${target}`).classList.add('active');
    });
});
