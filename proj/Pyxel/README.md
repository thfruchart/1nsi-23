# Découverte de Pyxel
* [documentation pyxel](https://github.com/kitao/pyxel/blob/main/docs/README.fr.md#comment-cr%C3%A9er-une-ressource)
* [exemple : snake sur Pyxel](Snake_Pyxel.pdf)


## Exemple 1
1. Copier le code suivant, puis l'exécuter : quel est le rôle de la commande `pyxel.rect` 
2. Décommenter la ligne 22 puis exécuter le programme : repérer le rôle de chaque paramètre de  `pyxel.rect`
3. Décommenter les lignes 8 à 14 puis exécuter le programme : quel est le rôle de la fonction `update`?
```python
import pyxel
from random import randint

pyxel.init(160, 120)
coord = [10,10]
couleur = 11

def update():
#     if pyxel.btn(pyxel.KEY_Q):
#         pyxel.quit()
#     if pyxel.btn(pyxel.KEY_DOWN):
#         coord[1] = 20
#     if pyxel.btnp(pyxel.KEY_RIGHT, hold= 20, repeat = 1):
#         coord[0] = (1+coord[0]) % 160
    return

def draw():
    pyxel.cls(0)
    #global couleur
    #couleur = randint(1,14)
    pyxel.rect(coord[0], coord[1], 20, 20, couleur)
    #pyxel.rectb(50,50,coord[0], coord[0], couleur+1)

pyxel.run(update, draw)

```
