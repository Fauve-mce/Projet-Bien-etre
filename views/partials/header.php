<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="assets/carousel.js" defer></script>
  <script src="assets/card-click.js" defer></script>
  
<!-- Import du cdn de tailwind -->
<script src="https://cdn.tailwindcss.com"></script>


  <!-- Pour utiliser la librairie daisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js" defer></script>

<link rel="stylesheet" href="assets/styles/style_nav.css">

<link rel="stylesheet" href="assets/styles/style_contact.css">

<link rel="stylesheet" href="assets/styles/style_nosrecettes.css">

<link rel="stylesheet" href="assets/styles/style_inscription.css">

<link rel="styleheet" href="assets/styles/styles.css">

<link rel="styleheet" href="assets/styles/style_accueil.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  

  <!-- Pour custom -->
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: {
              "50": "#eff6ff",
              "100": "#dbeafe",
              "200": "#bfdbfe",
              "300": "#93c5fd",
              "400": "#60a5fa",
              "500": "#3b82f6",
              "600": "#2563eb",
              "700": "#1d4ed8",
              "800": "#1e40af",
              "900": "#1e3a8a",
              "950": "#172554"
            },
            colornav: "E9DFBB",
            colorsousnav: "#FFFFF",
            colorfooter: "#714C4E",
            colorbody: "#",
            containeraccuil: "#f5f5f5",
            voirplusbutton: "#9CB276",

          }
        },
        fontFamily: {
          'body': [
            'Inter',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji'
          ],
          'sans': [
            'Inter',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji'
          ]
        }
      }
    }
  </script>

  <!-- Pour "ranger"" : -->
  <style type="text/tailwindcss">
    /* base : Pour cibler des éléments html existants */
        @layer base {
            h2 {
                @apply text-primary-500 uppercase text-xl
            }
        }

        /* components : Pour cibler via une classe */
        @layer components {
            .btn {
                @apply bg-primary-500 text-primary-50 py-2 px-3 rounded-md hover:bg-primary-50 hover:text-primary-500
            }
            .mycard {
                @apply mb-2 md:mb-0 w-2/3 md:w-1/4 h-1/4 md:h-full  bg-red-50 md:bg-slate-50 drop-shadow-lg rounded-lg flex flex-col justify-evenly items-center py-2 px-3;
            }
            .mycard h2 {
                @apply w-full border-b-2 pb-3 border-secondary mb-2
            }
        }
      </style>
</head>