# "Installer Tailwind"
* Via CDN : https://tailwindcss.com/docs/installation/play-cdn
```
    Rajouter dans le head :
    <script src="https://cdn.tailwindcss.com"></script>
```
* On verra quand on fera React comment faire une install propre avec npm

# Pour customiser Tailwind
* On rajoute dans le head :
```
  <script>
        tailwind.config = {
          theme: {
            extend: { 
                //extend : important pour avoir couleurs de base + customs, si on l'enlève, on n'a plus que nos couleurs custom
              colors: {
                primary: {
                    '50' : '#BAC7C9',
                    '250' : '#5A6F72',
                    '500' : '#394648',
                    '750' : '#242C2E',
                    '950' : '#121617'
                },
                secondary : '#69995D',
                tertiary : '#CBAC88'
              }
            }
          }
        }
      </script>
```
# Pour "ranger" un peu le html :
```
<style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
```