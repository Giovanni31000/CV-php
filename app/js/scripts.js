// Fonction pour envoyé le formulaire de contact
document.querySelector('.contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    showToast('Formulaire de contact soumis!', 'success');
});