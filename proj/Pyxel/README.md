# Découverte de Pyxel
* [documentation pyxel](https://github.com/kitao/pyxel/blob/main/docs/README.fr.md#comment-cr%C3%A9er-une-ressource)
* [exemple : snake sur Pyxel](Snake_Pyxel.pdf)


## Exemple 1
1. Copier le code ci-dessous, puis l'exécuter : quel est le rôle de la commande `pyxel.rect` 
2. Décommenter la ligne 23 puis exécuter le programme : repérer le rôle de chaque paramètre de  `pyxel.rect`
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
    pyxel.text(100,100,'Hello',3)
    #global couleur
    #couleur = randint(1,14)
    pyxel.rect(coord[0], coord[1], 20, 20, couleur)
    #pyxel.rectb(50,50,coord[0], coord[0], couleur+1)

pyxel.run(update, draw)

```
## Exemple 2
1. Copier le code ci-dessous (`exemple2.py`), et le sauvegarder sur le lecteur Z: dans un répertoire dont vous choisirez le nom
2. Télécharger le fichier [`monfichier.pyxres`](monfichier.pyxres) et le sauvegarder dans le même répertoire que le code `exemple2.py`
3. Pour visualiser le contenu de ce fichier ressource, il faut
   1. ouvrir une console, depuis Thonny : Outil/Ouvrir la console du système
   2. exécuter dans la console la commande : `pyxel edit monfichier.pyxres`
5. Exécuter `exemple2.py`, puis décommenter, et modifier afin de comprendre le rôle des paramètres de la commande `pyxrel.blt`
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
# Un jeu de Snake
On donne ci-dessous quelques codes permettant de démarrer un jeu de Snake.
Pour chaque fichier, quelques consignes / conseils sont fournis.
## Afficher le "serpent" en mode rectangle
1. Quel est le rôle des constantes LARG, HAUT et CASE ?
2. A quoi correspondent les coordonnées de la liste `serpent`?
```python
import pyxel

DELAI = 5
LARG = 128
HAUT = 128
CASE = 8

pyxel.init(LARG, HAUT)
pyxel.load("monfichier.pyxres")

serpent = [(10,1),(11,1),(12,1)]

def update():
    return

def draw():
    pyxel.cls(0)
    for i in range(len(serpent)):
        element = serpent[i]
        if i == 0:
            couleur = 9
        else :
            couleur = 11
        x, y = element
        pyxel.rect(x*CASE, y*CASE, CASE, CASE, couleur)

    
pyxel.run(update, draw)
```

## Animer le "serpent"
La commande `pop` est une méthode qui supprime le dernier élément d'une liste et renvoie sa valeur.
```
   >>> t = [10,20,30]
   >>> t.pop()
   30
   >>> t
   [10,20]
```
1. Tester la commande pop dans l'interpéteur python
2. Exécuter le code ci-dessous
   1. quel est le rôle de la constante DELAI ?
   2. modifier le code pour éviter de 'rallonger' le serpent à chaque déplacement (on pourra utiliser la commande pop)
```python
import pyxel

DELAI = 10
LARG = 128
HAUT = 128
CASE = 8

pyxel.init(LARG, HAUT)
pyxel.load("monfichier.pyxres")

serpent = [(10,1),(11,1),(12,1)]


def update():
    global direction
    if pyxel.frame_count % DELAI == 0 :
        #coordonnée du premier élément du serpent
        x,y = serpent[0]
        #coordonnées du déplacement
        u,v = -1,0
        #nouvelles coordonnées
        tete = (x+u, y+v)
        #ajout en tete du serpent
        serpent.insert(0,tete)
    return

def draw():
    pyxel.cls(0)
    for i in range(len(serpent)):
        element = serpent[i]
        if i == 0:
            couleur = 9
        else :
            couleur = 11
        x, y = element
        pyxel.rect(x*CASE, y*CASE, CASE, CASE, couleur)

    
pyxel.run(update, draw)
```

## Contrôler le déplacement du "serpent"
Le code fourni ne fonctionne pas correctement : 
1. Tester le programme
2. Modifier le contenu du dictionnaire VECT_DIR avec les valeurs correctes

```python
import pyxel

DELAI = 10
LARG = 128
HAUT = 128
CASE = 8
VECT_DIR = {'Haut':(0,0), 'Bas':(0,0), 'Gauche':(-1,0), 'Droite':(0,0)}

pyxel.init(LARG, HAUT)
pyxel.load("monfichier.pyxres")

serpent = [(10,1),(11,1),(12,1)]
direction = 'Gauche'

def update():
    global direction
    if pyxel.btn(pyxel.KEY_DOWN) :
        direction = 'Bas'
    if pyxel.btn(pyxel.KEY_UP) :
        direction = 'Haut'
    if pyxel.btn(pyxel.KEY_LEFT) :
        direction = 'Gauche'
    if pyxel.btn(pyxel.KEY_RIGHT) :
        direction = 'Droite'
    if pyxel.frame_count % DELAI == 0 :
        #coordonnée du premier élément du serpent
        x,y = serpent[0]
        #coordonnées du déplacement
        u,v = VECT_DIR[direction]
        #nouvelles coordonnées
        tete = (x+u, y+v)
        #ajout en tete du serpent
        serpent.insert(0,tete)
        serpent.pop()
    return

def draw():
    pyxel.cls(0)
    for i in range(len(serpent)):
        element = serpent[i]
        if i == 0:
            couleur = 9
        else :
            couleur = 11
        x, y = element
        pyxel.rect(x*CASE, y*CASE, CASE, CASE, couleur)

    
pyxel.run(update, draw)


```
## Travail à faire
Pour compléter le jeu : 
1. empêcher le serpent de "sortir" de la fenêtre : si c'est le cas, la partie est perdue.
    * on peut utiliser `pyxel.quit()` pour mettre fin au jeu
    * une autre possibilité est de créer un booléen `gameover` pour mettre fin à la partie, en contrôlant l'affichage de fin de partie, ce qui permet de créer un menu du type "voulez-vous rejouer?"... 
2. créer une pomme, que le serpent pourra "manger"
   * lors de la création, la pomme est 'en dehors' du serpent
   * si la tête du serpent est au même lieu que la pomme, le serpent "mange" la pomme : celle-ci disparaît, et le serpent grandit d'une unité.
   * un nouvelle pomme est générée à un autre endroit (en dehors du serpent)
3. créer une variable score :
   * chaque fois que le serpent mange la pomme, le score augmente de 1.
   * le serpent ne doit pas se "manger" lui-même, sinon la partie est perdue : ajouter cette contrainte au jeu.
   * prévoir un affichage du score, pendant la partie et en fin de partie
   * prévoir la possibilité de rejouer
4. Améliorer l'affichage, avec des images du fichier ressource  [`monfichier.pyxres`](monfichier.pyxres) que vous pourrez modifier si besoin.
