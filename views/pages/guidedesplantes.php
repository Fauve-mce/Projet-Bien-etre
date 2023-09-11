<main>
  <div class="titre h-40">
    <h1 class="text-blue-700 mt-16 ml-15 text-6xl flex justify-center">Guide des plantes</h1>
  </div>

      <!-- Barre de recherche -->
<div id="search-container">
  <input type="text" id="search-input" placeholder="Rechercher une plante">
</div>

<!-- Tableau de filtres -->
<div id="filter-options">
  <h2>Filtres</h2>
  <label><input type="checkbox" class="filter-checkbox" value="Tous"> Tous</label>
  <label><input type="checkbox" class="filter-checkbox" value="Migraine"> Migraine</label>
  <label><input type="checkbox" class="filter-checkbox" value="Stress"> Stress</label>
  <label><input type="checkbox" class="filter-checkbox" value="Constipation"> Constipation</label>
  <label><input type="checkbox" class="filter-checkbox" value="Insomnie"> Insomnie</label>
  <label><input type="checkbox" class="filter-checkbox" value="Acné"> Acné</label>
  <label><input type="checkbox" class="filter-checkbox" value="Surpois"> Surpois</label>
  <label><input type="checkbox" class="filter-checkbox" value="Cheveux"> Cheveux</label>
</div>

<!-- Liste des plantes -->
<div id="plant-list">
  <!-- Les résultats de la recherche seront affichés ici -->
</div>

    <!-- <div class="bg-red-400">Hibou</div>
    <h2>Les cours : </h2>
    <ul class="list-disc ml-12">
        <li>HTML/CSS</li>
        <li>JavaScript</li>
        <li>PhP</li>
    </ul>
    <a href="/">Clique ici</a>
    <button class="btn">Click Me</button>  -->

    <!-- <div class="hidden md:flex w-full bg-pink-500">
        <p>Coucou je suis un menu responsive</p>
    </div> -->
    

  <div class="grid grid-cols-3 gap-3 w-2/7 ml-10">
      <div class="card w-96 bg-base-100 shadow-xl mb-10">
        <figure class="px-10 pt-10">
          <img src="assets/img/Basilic-Feuille.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Basilic</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl mb-10">
        <figure class="px-10 pt-10">
          <img src="assets/img/Coriandre-Bouquet-Feuilles.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Coriandre</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl mb-10">
        <figure class="px-10 pt-10">
          <img src="assets/img/13180792.webp" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Passiflor</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="assets/img/Menthe-Feuille.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Menthe</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="assets/img/Ortie-Feuilles.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Ortie</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="assets/img/Romarin-Feuille.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Romarin</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="assets/img/Giroflier.webp" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Giroflier</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="assets/img/algue nori.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Algue Nori</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="assets/img/Algue-Wakamé.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Algue Wakamé</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions">
            <button class="btn btn-primary">Consulter</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>