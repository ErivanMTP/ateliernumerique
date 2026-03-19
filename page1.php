<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Outils Bureautiques et Créatifs</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">

<!-- Navbar style VK -->
<header class="bg-white border-b border-gray-300 w-full p-3 shadow-sm">
    <div class="max-w-6xl mx-auto flex items-center justify-between">
        <h1 class="text-blue-600 font-bold text-lg">Atelier Numérique</h1>
        <nav class="space-x-4 text-gray-700 font-medium text-sm">
            <a href="index.php" class="hover:text-blue-600 transition">Accueil</a>
            <a href="#" class="hover:text-blue-600 transition">Profil</a>
            <a href="#" class="hover:text-blue-600 transition">Aide</a>
        </nav>
    </div>
</header>

<main class="max-w-5xl mx-auto p-6">

<h2 class="text-2xl font-bold text-gray-800 mb-6">Outils Bureautiques et Créatifs</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

    <!-- Microsoft Office -->
    <div class="bg-white p-5 rounded-lg shadow hover:shadow-md transition tool-card">
        <div class="flex items-center mb-3">
          
            <h3 class="text-xl font-semibold text-gray-800">Microsoft Office</h3>
        </div>
        <input type="text" placeholder="Rechercher un lien..." class="w-full mb-4 p-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 search-input">
        <p class="text-gray-700 text-base mb-3">
            Microsoft Office comprend Word, Excel et PowerPoint. Voici des ressources gratuites pour apprendre à les utiliser efficacement.
        </p>
        <div class="flex flex-col space-y-2 mb-3">
            <a href="https://www.office.com/" target="_blank" class="text-blue-600 hover:underline font-medium">Accéder à Office en ligne</a>
            <a href="https://support.microsoft.com/fr-fr/office" target="_blank" class="text-blue-600 hover:underline font-medium">Support et tutoriels officiels Microsoft</a>
            <a href="https://www.microsoft.com/fr-fr/microsoft-365/free-office-online-for-the-web" target="_blank" class="text-blue-600 hover:underline font-medium">Office gratuit sur le Web (Word/Excel/PowerPoint)</a>
            <a href="https://www.youtube.com/watch?v=vhxIqJfCqLE" target="_blank" class="text-blue-600 hover:underline font-medium">Cours Word & Excel (YouTube)</a>
            <a href="https://www.classcentral.com/course/youtube-microsoft-office-tutorial-learn-excel-powerpoint-and-word-9-hour-ms-office-course-117828" target="_blank" class="text-blue-600 hover:underline font-medium">Tutoriel Office complet</a>
            <a href="https://www.learnfree.org/explore/microsoft-office-tutorials" target="_blank" class="text-blue-600 hover:underline font-medium">Cours gratuits GCFLearnFree Office</a>
        </div>
    </div>

    <!-- Canva -->
    <div class="bg-white p-5 rounded-lg shadow hover:shadow-md transition tool-card">
        <div class="flex items-center mb-3">
           
            <h3 class="text-xl font-semibold text-gray-800">Canva</h3>
        </div>
        <input type="text" placeholder="Rechercher un lien..." class="w-full mb-4 p-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 search-input">
        <p class="text-gray-700 text-base mb-3">
            Canva est une plateforme de création graphique intuitive pour CV, lettres de motivation, présentations et réseaux sociaux.
        </p>
        <div class="flex flex-col space-y-2 mb-3">
            <a href="https://www.canva.com/" target="_blank" class="text-blue-600 hover:underline font-medium">Accéder à Canva</a>
            <a href="https://www.canva.com/help/" target="_blank" class="text-blue-600 hover:underline font-medium">Centre d’aide Canva</a>
            <a href="https://www.canva.com/create/resumes/" target="_blank" class="text-blue-600 hover:underline font-medium">Créer un CV gratuitement sur Canva</a>
            <a href="https://www.canva.com/create/cover-letters/" target="_blank" class="text-blue-600 hover:underline font-medium">Créer une lettre de motivation gratuite</a>
            <a href="https://www.youtube.com/watch?v=9L-BfD0w0xU" target="_blank" class="text-blue-600 hover:underline font-medium">Tutoriel vidéo : Comment faire un CV sur Canva</a>
            <a href="https://www.youtube.com/watch?v=lzW5YCpCwS0" target="_blank" class="text-blue-600 hover:underline font-medium">Tutoriel Canva : CV professionnel + modèles gratuits</a>
            <a href="https://www.canva.com/learn/design-cover-letters-free/" target="_blank" class="text-blue-600 hover:underline font-medium">Guide Canva gratuit pour lettre de motivation</a>
        </div>
    </div>

    <!-- Adobe -->
    <div class="bg-white p-5 rounded-lg shadow hover:shadow-md transition tool-card">
        <div class="flex items-center mb-3">
            
            <h3 class="text-xl font-semibold text-gray-800">Adobe</h3>
        </div>
        <input type="text" placeholder="Rechercher un lien..." class="w-full mb-4 p-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 search-input">
        <p class="text-gray-700 text-base mb-3">
            Adobe propose Photoshop, Illustrator, Premiere Pro et Acrobat. Découvrez des tutoriels et ressources gratuites pour apprendre à les utiliser.
        </p>
        <div class="flex flex-col space-y-2 mb-3">
            <a href="https://www.adobe.com/fr/" target="_blank" class="text-blue-600 hover:underline font-medium">Accéder à Adobe</a>
            <a href="https://helpx.adobe.com/fr/support.php" target="_blank" class="text-blue-600 hover:underline font-medium">Support et tutoriels</a>
            <a href="https://helpx.adobe.com/fr/learning.php" target="_blank" class="text-blue-600 hover:underline font-medium">Cours gratuits Adobe</a>
        </div>
    </div>

</div>

<!-- Section conseils -->
<section class="bg-white p-5 rounded-lg shadow mt-6">
    <h3 class="text-xl font-semibold text-gray-800 mb-3">Conseils pour bien utiliser ces outils</h3>
    <ul class="list-disc list-inside text-gray-700">
        <li>Explorez les modèles proposés pour gagner du temps.</li>
        <li>Apprenez les raccourcis clavier pour être plus efficace.</li>
        <li>Sauvegardez régulièrement vos projets sur le cloud.</li>
        <li>Suivez des tutoriels pour maîtriser les fonctionnalités avancées.</li>
    </ul>
</section>

</main>

<!-- Script pour filtrage interne par carte -->
<script>
document.querySelectorAll('.tool-card').forEach(card => {
    const input = card.querySelector('.search-input');
    input.addEventListener('input', () => {
        const filter = input.value.toLowerCase();
        card.querySelectorAll('a').forEach(link => {
            link.style.display = link.innerText.toLowerCase().includes(filter) ? '' : 'none';
        });
    });
});
</script>

</body>
</html>