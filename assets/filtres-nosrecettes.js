document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search-input');
    const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
    const plantList = document.getElementById('plant-list');

    const plantData = [
        { nom: "Masque à la lavande",
        categorie: "Soins du visage",
        image1: "assets/img/lavande-masque.jpg",
        image2: "assets/img/lavande-masque.jpg",
        description: "Masque du visage. ",
    },
        { nom: "Soins pointe sèche",
        categorie: "Soins capillaires",
        image1: "assets/img/cheveux-pointe-sèche.jpg",
        image2: "assets/img/cheveux-pointe-sèche.jpg",
        description: "Soins pour cheveux secs.",
    },
        { nom: "Bain des pieds",
        categorie: "Soins des pieds",
        image1: "assets/img/bain-de-pieds.jpg",
        image2: "assets/img/bain-de-pieds.jpg",
        description: "Bain des pieds.",
    },
        { nom: "Brume sensuelle",
        categorie: "Parfums et fragrances",
        image1: "assets/img/brume-sensuelle.webp",
        image2: "assets/img/brume-sensuelle.webp",
        description: "Brume sensuelle et envoutante à l'orange et au gingembre.",
    },

        { nom: "Tisane Pêquerette",
        categorie: "Boissons à base de plantes",
        image1: "assets/img/tisane-paquerette.jpeg",
        image2: "assets/img/tisane-paquerette.jpeg",
        description: "Le sirop antitoux.",
    },
        { nom: "Rouleau Anti-Stress",
        categorie: "Rouleau d'huiles essentielles",
        image1: "assets/img/roll-anti-stress.jpg",
        image2: "assets/img/roll-anti-stress.jpg",
        description: "Roll Anti-Stress aux huilles essentielles.",
    },
        { nom: "Huille de Ricin", categorie: "Cheveux" },
        { nom: "Romarin", categorie: "Constipation" },
        { nom: "Eucalyptus ", categorie: "Stress" },
        { nom: "Coco", categorie: "Cheveux" },
        { nom: "Basilic", categorie: "Acné" },
        { nom: "Fenouil", categorie: "Surpois" },
        { nom: "Houblon", categorie: "Stress" },
        { nom: "Plante 13", categorie: "Insomnie" },
        { nom: "Plante 14", categorie: "Migraine", },
        { nom: "Plante 15", categorie: "Cheveux" },
        { nom: "Plante 16", categorie: "Constipation" },
        { nom: "Plante 17", categorie: "Acné" },
        { nom: "Plante 18", categorie: "Insomnie" },
        { nom: "Plante 19", categorie: "Constipation" },
        { nom: "Plante 20", categorie: "Acné" },
        // Ajoutez les autres plantes ici
    ];

    // Fonction pour afficher les plantes en fonction des filtres
    function displayPlants() {
        const keyword = searchInput.value.toLowerCase();
        const selectedCategories = Array.from(filterCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

    // Si "Tous" est sélectionné, incluez toutes les catégories
    if (selectedCategories.includes('Tous')) {
        selectedCategories.splice(selectedCategories.indexOf('Tous'), 1); // Supprimer "Tous"
        selectedCategories.push('Soins du visage', 'Soins capillaires', 'Soins du corps', 'Soins des ongles', 'Soins des pieds', 'Soins spécifiques', 'Parfums et fragrances', 'Boissons à base de plantes', 'Salades et légumes', 'Soupes et potages', 'Plats principaux végétariens', 'Plats à base de céréales et de légumineuses', 'Desserts à base de plantes', 'Collations et en-cas', 'Pains et produits de boulangerie', 'Condiments et sauces', 'Boissons rafraîchissantes', "Rouleau d'huiles essentielles", "Mélange d'huiles essentielles", "Vaporisateur d'huile essentielle",)
    }

        // Filtrer les plantes en fonction du mot-clé et des catégories sélectionnées
        const filteredPlants = plantData.filter(plant => {
            const nameMatches = plant.nom.toLowerCase().includes(keyword);
            const categoryMatches = selectedCategories.length === 0 || selectedCategories.includes(plant.categorie);
            return nameMatches && categoryMatches;
        });


         // Construire et afficher les cartes HTML pour chaque plante
const plantListHTML = filteredPlants.map(plant => {
    return `
    <li>
      <div href="#" class="group relative block">
        <div class="relative h-[350px] sm:h-[450px]">
          <img
            src="${plant.image1}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover opacity-60 group-hover:opacity-0"
          />
          <img
            src="${plant.image2}"
            alt=""
            class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
          />
        </div>
        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
          <h3 class="text-2xl font-medium text-black group-hover:opacity-0">${plant.nom}</h3>
          <p class="mt-1.5 max-w-[40ch] text-xl text-black group-hover:opacity-0">${plant.description}</p>
          <button
            type="button"
            class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
            <a href="?page=découvrir">
            Découvrir
            </a>
          </button>
        </div>
      </div>
    </li>
    `;
});

const plantListContainer = document.getElementById('plant-list'); // Ciblez le conteneur extérieur

// plantListContainer.innerHTML = `<ul>${plantListHTML.join('')}</ul>`; 
// Utilisez .join('') pour convertir le tableau en une seule chaîne.

plantListContainer.innerHTML = `${plantListHTML.join('')}`;
}

 // Gérer les événements de recherche et de filtrage
 searchInput.addEventListener('input', displayPlants);
 filterCheckboxes.forEach(checkbox => checkbox.addEventListener('change', displayPlants));

 // Afficher toutes les plantes au chargement initial
 displayPlants();
 
});
 





