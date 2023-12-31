<body>
<main  class="max-h-[120%]">
      <section class="flex flex-col md:flex-row h-screen items-center mt-20">

          <div class=" hidden lg:block w-14 md:w-1/2 xl:w-2/3 h-screen rounded-3xl m-12 pb-40">
            <img src="assets/img/Comment-faire-pour-planter-des-graines.jpg" alt="" class="w-full h-full object-cover rounded-3xl">
          </div>

          <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-70 px-6 lg:px-16 xl:px-12
          flex items-center justify-center pb-52">

          <div class="w-full h-100">


            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Création de votre compte</h1>

            <form class="mt-6" action="#" method="POST">
              <div>
                <label class="block text-gray-700">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Entrez votre Nom" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
              </div>

              <div class="mt-4">
                <label class="block text-gray-700">Prénom</label>
                <input type="text" name="prénom" id="prénom" placeholder="Entrez votre Prénom" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
              </div>

              <div class="mt-4">
                <label class="block text-gray-700">Email</label>
                <input type="text" name="email" id="email" placeholder="Entrez votre Email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
              </div>

              <div class="mt-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="text" name="password" id="password" placeholder="Entrez votre Mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
              </div>

              <div class="mt-4">
                <label class="block text-gray-700">Confirmation du Mot de passe</label>
                <input type="text" name="password" id="password" placeholder="Entrez votre Mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
              </div>

              <!-- //pour vérifier si le deuxième mot de passe est le même
              //FORMULAIRE.password.addEventListener("input", (e) =>{

              })
              //FORMULAIRE.password.addEventListener("input", (e) =>{
                if (e.targer.value !== FORMULAIRE.password.value){
                  MSG_CONFIRM_PWD.innerText ="les mots de passe doivent être égeaux";
                }
                else{
                  MSG_CONFORM_PWD.innerText ="";
                }
              }) -->



              <div class="form-control mt-4">
                <label class="label cursor-pointer">
                <span class="label-text">J'ai lu et j'accepte tous les termes&Conditions</span> 
                <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                </label>
              </div>

              <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Inscription</button>
            </form>

            <hr class="my-6 border-gray-300 w-full">

            <p class="mt-8">Déjà un compte? <a href="?page=connexion" class="text-blue-500 hover:text-blue-700 font-semibold">Connectez-Vous
                </a></p>


          </div>
        </div>

      </section>
</main>
</body>