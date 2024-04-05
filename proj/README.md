# Mini projets
1. [Binaire flottant](https://notebook.basthon.fr/?from=https://raw.githubusercontent.com/thfruchart/1nsi/main/proj/BinaireFlottant.ipynb)
2. [Découverte de pyxel](Pyxel)
3. [Craquer César](Cesar.md)

### Nuit du Code
* [Premiers pas...](https://nuit-du-code.forge.apps.education.fr/DOCUMENTATION/PYTHON/TUTORIELS/1-premiers-pas-avec-pyxel-premiere/)
* [Documentation](https://github.com/kitao/pyxel/blob/main/docs/README.fr.md#comment-cr%C3%A9er-une-ressource)
   
### conseils pour expliquer votre code
Il s'agit d'expliquer la **raison** pour laquelle telle ou telle instruction réaliser le traitement qu'on attend.

* s'il s'agit d'une boucle
  - pourquoi la tâche à réaliser est-elle répétitive?
  - qu'est-ce qui se répète, et qu'est-ce qui change à chaque itération?
  - en un mot : expliquer comment le traitement "global" se décompose en une répétition de traitements répétitifs.

* si vous avez créé une variable 
  - préciser son type
  - expliquer son rôle : quelle information est représentée par la variable (par ex : un compteur, ou un entier qui parcours tous les indices d'un tableau, ou certains indices seulement => lesquels, pourquoi?)
  - à quel moment cette variable reçoit-elle une nouvelle valeur, et pourquoi (quelle nouvelle information est alors stockée?)

* si vous utilisez une condition, expliquer en français ce que vous testez
  - exemple : "tant que i est un indice valide du tableau" est plus clair que "tant que i est strictement inférieur à la longueur de t" 



Normalement, le programme est décomposé en plusieurs **fonctions** qui réalisent chacune un traitement particulier (à préciser).

Vous pouvez expliquer ligne par ligne, mais ce n'est pas obligatoire pour tout le code!

Vous pouvez aussi expliquer par "variable" (si cela vous semble préférable)
* on dispose de telle ou telle information dans les paramètres d'une fonction
* on a besoin de telle information nouvelle (que la fonction doit renvoyer)
* on crée une variable de tel type pour pouvoir stocker l'information qu'on cherche à déterminer
* on écrit certaines valeurs dans cette variable pour répondre à telle question (avec un test, une boucle, un appel à une autre fonction... suivant les cas)
* on utilise ensuite cette variable pour tel usage

vous pouvez ainsi expliquer ensemble plusieurs instructions qui concernent une même variable.
