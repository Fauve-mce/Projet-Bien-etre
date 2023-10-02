<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.

  Plugins:
    - @tailwindcss/forms
-->

<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header>
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
        Guide des plantes
      </h2>

      <!-- component -->

<div class="flex flex-col p-2 py-6 m-h-screen">

  <div class="bg-white items-center justify-between  flex rounded-full shadow-lg p-2 mb-5 sticky" style="top: 5px">

      <div>

          <div class="p-2 mr-1 rounded-full hover:bg-gray-100 cursor-pointer">

              <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>

          </div>

      </div>

      <input class="font-bold uppercase rounded-full w-full py-4 pl-4 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline lg:text-sm text-xs" type="text" placeholder="Cherchez une plante">

          <div class="bg-gray-600 p-2 hover:bg-blue-400 cursor-pointer mx-2 rounded-full">

              <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>

          </div>

  </div>
</div>

    </header>

    <div class="mt-8 block lg:hidden">
      <button
        class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
      >
        <span class="text-sm font-medium"> Filters & Sorting </span>

        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-4 w-4 rtl:rotate-180"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5"
          />
        </svg>
      </button>
    </div>

    <div class="mt-4 lg:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-8">
      <div class="hidden space-y-4 lg:block">
    

        <div>
          <p class="block text-xs font-medium text-gray-700">Filtres</p>

          <div class="mt-1 space-y-2">
            <details
              class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
            >
              <summary
                class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
              >
                <span class="text-sm font-medium"> Médicinal  </span>

                <span class="transition group-open:-rotate-180">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-4 w-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg>
                </span>
              </summary>

              <div class="border-t border-gray-200 bg-white">
                <header class="flex items-center justify-between p-4">
                  <span class="text-sm text-gray-700"> 0 Selection </span>

                  <button
                    type="button"
                    class="text-sm text-gray-900 underline underline-offset-4"
                  >
                    Reset
                  </button>
                </header>

                <ul class="space-y-1 border-t border-gray-200 p-4">
                  <li>
                    <label
                      for="FilterInStock"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterInStock"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Tous (30+)
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterPreOrder"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterPreOrder"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Perte de poids (3+)
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterOutOfStock"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Prise de poids (10+)
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterOutOfStock"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Anti-Stress (10+)
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterOutOfStock"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Digestion (10+)
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterOutOfStock"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Anti-Diabète (10+)
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterOutOfStock"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        système immunitaire (10+)
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterOutOfStock"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Insomnie (10+)
                      </span>
                    </label>
                  </li>
                </ul>
              </div>
            </details>
          </div>
        </div>
      </div>

      <div class="lg:col-span-3">
        <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <li>
            <div href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/la passiflore3.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/la passiflore4.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-50"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class=" group-hover:opacity-0 text-2xl font-medium text-black mb-40 ml-16">Passiflore</h3>

                <p class="mt-1.5 max-w-[40ch] text-xl text-black opacity-0 group-hover:opacity-100">
                La passiflore est une plante grimpante aux fleurs exotiques, 
                prisée pour son aspect ornemental et ses vertus apaisantes.
                </p>

                <a href="?page=découvrirplantes">
                <button
                  type="button"
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white opacity-0 group-hover:opacity-100">
                  Découvrir
                </button>
                </a>
              </div>
            </div>
          </li>

          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/thé vert1.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/thé vert.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-50"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="group-hover:opacity-0 text-2xl font-medium text-black mb-12 ml-16">Thé vert</h3>

                <p class="mt-1.5 max-w-[40ch] text-xl text-black opacity-0 group-hover:opacity-100">
                Le thé vert est une boisson populaire riche en antioxydants, bénéfique pour la santé,
                principalement consommée pour ses propriétés stimulantes et ses effets positifs sur le métabolisme.
                </p>

                <button
                  type="button"
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white opacity-0 group-hover:opacity-100">
                  Découvrir
                </button>
              </div>
            </a>
          </li>

          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/artichaut3.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/artichaut2.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-50"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="group-hover:opacity-0 text-3xl font-medium text-black mb-32 ml-16">Artichaut</h3>

                <p class="mt-1.5 max-w-[40ch] text-xl text-black opacity-0 group-hover:opacity-100">
                  L'artichaut est un légume à feuilles vertes, réputé pour sa saveur délicate et ses bienfaits pour la digestion,
                  souvent apprécié pour son cœur tendre et comestible.
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white opacity-0 group-hover:opacity-100"
                >
                  Découvrir
                </span>
              </div>
            </a>
          </li>

          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/le séné1.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/le séné.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-50"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="group-hover:opacity-0 text-3xl font-medium text-black mb-32 ml-16">Le Séné</h3>

                <p class="mt-1.5 max-w-[40ch] text-xl text-black opacity-0 group-hover:opacity-100">
                Le séné est une plante utilisée pour ses propriétés laxatives...
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white opacity-0 group-hover:opacity-100"
                >
                  Découvrir
                </span>
              </div>
            </a>
          </li>

          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/ravintsara2.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/ravintsara.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-50"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="group-hover:opacity-0 text-2xl font-medium text-black mb- ml-16">Ravintsara</h3>

                <p class="mt-1.5 max-w-[40ch] text-xl text-black opacity-0 group-hover:opacity-100">
                Le ravintsara est une plante aromatique originaire de Madagascar, 
                connue pour ses propriétés antivirales et ses utilisations courantes en aromathérapie
                pour soutenir le système immunitaire et soulager les affections respiratoires.
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white opacity-0 group-hover:opacity-100"
                >
                  Découvrir
                </span>
              </div>
            </a>
          </li>
          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/lavande2.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/lavande1.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-50"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="group-hover:opacity-0 text-3xl font-medium text-black mb-20 ml-16">Lavande</h3>

                <p class="mt-1.5 max-w-[40ch] text-xl text-black opacity-0 group-hover:opacity-100">
                La lavande est une plante aromatique appréciée pour son parfum envoûtant et ses multiples usages,
                notamment en aromathérapie, pour ses propriétés apaisantes et relaxantes.
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white opacity-0 group-hover:opacity-100"
                >
                  Découvrir
                </span>
              </div>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </div>
</section>