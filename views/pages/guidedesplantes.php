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

      <input class="font-bold uppercase rounded-full w-full py-4 pl-4 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline lg:text-sm text-xs" type="text" placeholder="Search">

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
        <!-- <div>
          <label for="SortBy" class="block text-xs font-medium text-gray-700">
            Sort By
          </label>

          <select id="SortBy" class="mt-1 rounded border-gray-300 text-sm">
            <option>Sort By</option>
            <option value="Title, DESC">Title, DESC</option>
            <option value="Title, ASC">Title, ASC</option>
            <option value="Price, DESC">Price, DESC</option>
            <option value="Price, ASC">Price, ASC</option>
          </select>
        </div> -->

        <div>
          <p class="block text-xs font-medium text-gray-700">Filtres</p>

          <div class="mt-1 space-y-2">
            <details
              class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
            >
              <summary
                class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
              >
                <span class="text-sm font-medium"> Categorie des plantes  </span>

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
                        Tout (30+)
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
                        Constipation (10+)
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
<!-- 
            <details
              class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
            >
              <summary
                class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
              >
                <span class="text-sm font-medium"> Price </span>

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
                  <span class="text-sm text-gray-700">
                    The highest price is $600
                  </span>

                  <button
                    type="button"
                    class="text-sm text-gray-900 underline underline-offset-4"
                  >
                    Reset
                  </button>
                </header>

                <div class="border-t border-gray-200 p-4">
                  <div class="flex justify-between gap-4">
                    <label
                      for="FilterPriceFrom"
                      class="flex items-center gap-2"
                    >
                      <span class="text-sm text-gray-600">$</span>

                      <input
                        type="number"
                        id="FilterPriceFrom"
                        placeholder="From"
                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                      />
                    </label>

                    <label for="FilterPriceTo" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>

                      <input
                        type="number"
                        id="FilterPriceTo"
                        placeholder="To"
                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                      />
                    </label>
                  </div>
                </div>
              </div>
            </details> -->

            <!-- <details
              class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
            >
              <summary
                class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
              >
                <span class="text-sm font-medium"> Colors </span>

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
                  <span class="text-sm text-gray-700"> 0 Selected </span>

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
                      for="FilterRed"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterRed"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Red
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterBlue"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterBlue"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Blue
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterGreen"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterGreen"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Green
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterOrange"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterOrange"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Orange
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterPurple"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterPurple"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Purple
                      </span>
                    </label>
                  </li>

                  <li>
                    <label
                      for="FilterTeal"
                      class="inline-flex items-center gap-2"
                    >
                      <input
                        type="checkbox"
                        id="FilterTeal"
                        class="h-5 w-5 rounded border-gray-300"
                      />

                      <span class="text-sm font-medium text-gray-700">
                        Teal
                      </span>
                    </label>
                  </li>
                </ul>
              </div>
            </details> -->
          </div>
        </div>
      </div>

      <div class="lg:col-span-3">
        <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <li>
            <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/la passiflore3.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/la passiflore4.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="text-xl font-medium text-white">Passiflore</h3>

                <p class="mt-1.5 max-w-[40ch] text-xs text-gray-800">
                La passiflore est une plante grimpante aux fleurs exotiques, 
                prisée pour son aspect ornemental et ses vertus apaisantes.
                </p>

                <button
                  type="button"
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                  Découvrir
                </button>
              </div>
            </a>
          </li>

          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="assets/img/thé vert.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="assets/img/thé vert1.jpg"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="text-xl font-medium text-white">Thé vert</h3>

                <p class="mt-1.5 max-w-[40ch] text-xs text-white">
                Le thé vert est une boisson populaire riche en antioxydants, bénéfique pour la santé,
                principalement consommée pour ses propriétés stimulantes et ses effets positifs sur le métabolisme.
                </p>

                <button
                  type="button"
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                  Découvrir
                </button>
              </div>
            </a>
          </li>

          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="https://images.unsplash.com/photo-1593795899630-b6033c0fa58d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                <p class="mt-1.5 max-w-[40ch] text-xs text-white">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi
                  dicta impedit aperiam ipsum!
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                >
                  Shop Now
                </span>
              </div>
            </a>
          </li>
          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="https://images.unsplash.com/photo-1593795899630-b6033c0fa58d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                <p class="mt-1.5 max-w-[40ch] text-xs text-white">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi
                  dicta impedit aperiam ipsum!
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                >
                  Shop Now
                </span>
              </div>
            </a>
          </li>
          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="https://images.unsplash.com/photo-1593795899630-b6033c0fa58d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                <p class="mt-1.5 max-w-[40ch] text-xs text-white">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi
                  dicta impedit aperiam ipsum!
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                >
                  Shop Now
                </span>
              </div>
            </a>
          </li>
          <li>
          <a href="#" class="group relative block">
              <div class="relative h-[350px] sm:h-[450px]">
                <img
                  src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0"
                />

                <img
                  src="https://images.unsplash.com/photo-1593795899630-b6033c0fa58d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                  alt=""
                  class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100"
                />
              </div>

              <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                <p class="mt-1.5 max-w-[40ch] text-xs text-white">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi
                  dicta impedit aperiam ipsum!
                </p>

                <span
                  class="mt-3 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                >
                  Shop Now
                </span>
              </div>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</section>