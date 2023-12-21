# Découverte de Pyxel
* [documentation pyxel](https://github.com/kitao/pyxel/blob/main/docs/README.fr.md#comment-cr%C3%A9er-une-ressource)
* [exemple : snake sur Pyxel](Snake_Pyxel.pdf)


## Exemple 1
1. Copier le code ci-dessous, puis l'exécuter : quel est le rôle de la commande `pyxel.rect` 
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
## Exemple 2
1. Copier le code ci-dessous (`exemple2.py`), et le sauvegarder sur le lecteur Z: dans un répertoire dont vous choisirez le nom
2. Télécharger le fichier `monfichier.pyxres` et le sauvegarder dans le même répertoire que le code `exemple2.py`
3. Pour visualiser le contenu de ce fichier ressource, il faut
   1. ouvrir une console, depuis Thonny : Outil/Ouvrir la console du système
   2. exécuter dans la console la commande : `pyxel edit monfichier.pyxres`
5. Exécuter le code, puis le modifier afin de comprendre le rôle des paramètres de la commande `pyxrel.blt`
```python
import pyxel

pyxel.init(160, 120)
pyxel.load("monfichier.pyxres")

coord = [10,10]

def update():
    if pyxel.btn(pyxel.KEY_Q):
        pyxel.quit()
    if pyxel.btn(pyxel.KEY_DOWN):
        coord[1] = (1+coord[1]) % 120
    if pyxel.btn(pyxel.KEY_RIGHT):
        coord[0] = (1+coord[0]) % 160
    return

def draw():
    pyxel.cls(0)
    x_img,y_img,w_img,h_img = 8,0,8,8
    pyxel.blt(10, 2,0,x_img,y_img,w_img,h_img)
#     x_img,y_img,w_img,h_img = 8,8,8,-8
#     pyxel.blt(coord[0], coord[1],0,x_img,y_img,w_img,h_img)
    
pyxel.run(update, draw)

```
