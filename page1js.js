
// Fonction pour basculer l'affichage d'un menu
function toggleMenu(menuId) {
    const menu = document.getElementById(menuId);
    // Vérifie si le menu a la classe 'active'
    if (menu.classList.contains('active')) {
        menu.classList.remove('active'); // Masque le menu
    } else {
        // Masque tous les autres sous-menus avant d'afficher le menu sélectionné
        const allMenus = document.querySelectorAll('.burger-menu');
        allMenus.forEach(m => m.classList.remove('active'));
        menu.classList.add('active'); // Affiche le menu
    }
}