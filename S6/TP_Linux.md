# TP
## commandes à exécuter dans [JSLinux](https://bellard.org/jslinux/vm.html?url=https://bellard.org/jslinux/buildroot-x86.cfg)
### en tant que root : définir groupe et utilisateurs
* `addgroup eleve`
* `adduser -G eleve max`
* `adduser -G eleve elsa`
* `adduser toto`

### en tant que **max**
* `su max`
* `whoami`
* `cd`
* `pwd`
* `ls`
* `mkdir documents`
* `ls`
* `cd documents/`
* `touch fichier.max`
* `ls -l`
* `chmod o-r fichier.max`
* `ls -l`
* `nano fichier.max`
* avec l'éditeur nano : 
   * écrire une ligne dans le fichier, par exemple : `Ecriture d'une ligne par Max !`
   * sauvegarder avec Ctrl+S
   * quitter nano avec Ctrl+X
 * `cat fichier.max`

### en tant que **elsa**
* `su elsa`
* `whoami`
* `pwd`
* `ls -l`
* `cat fichier.max`
* `nano fichier.max`
   *  Elsa peut-elle écrire dans l'éditeur ? 
   *  Peut-elle sauvegarder les modifications ?

### en tant que **toto**
* `su toto`
* `pwd`
* `ls -l`
* `cat fichier.max`
* `nano fichier.max`
   *  Toto peut-il écrire dans l'éditeur ? 

### Questions : 
1. Elsa peut-elle copier le fichier `/home/max/documents/fichier.max` vers `home/max/copie_fichier.max` ?
2. Elsa peut-elle copier le fichier `/home/max/documents/fichier.max` vers `home/elsa/copie_fichier.max` ?
3. Toto peut-il copier le fichier `/home/max/documents/fichier.max` vers `home/max/copie_fichier.max` ?
4. Toto peut-il copier le fichier `/home/max/documents/fichier.max` vers `home/toto/copie_fichier.max` ?


# Exercices
## EX1
On suppose que le répertoire personnel de l'utilisateur courant est vide. 
* décrire l'effet de chaque  commande ci-dessous, en supposant qu'elles sont effectuées dans l'ordre
* tester en exécutant ces commandes avec  [JSLinux](https://bellard.org/jslinux/vm.html?url=https://bellard.org/jslinux/buildroot-x86.cfg)

1. cd ~
2. mkdir NSI
3. mkdir NSI/TP
4. cd NSI
5. ls
6. cd TP
7. cd ..
8. ls
9. touch fic1
10. touch TP/fic2
12. ls
13. ls TP
14. mv fic1 TP
15. ls
16. cd TP
17. ls
18. cp fic2 ..
19. ls
20. cd ..
21. ls

## Ex2
On suppose que le répertoire personnel de l'utilisateur courant est vide. 
* décrire l'effet de chaque  commande ci-dessous, en supposant qu'elles sont effectuées dans l'ordre
* tester en exécutant ces commandes avec  [JSLinux](https://bellard.org/jslinux/vm.html?url=https://bellard.org/jslinux/buildroot-x86.cfg)

1. cd 
2. mkdir TEST
3. cd TEST
4. touch fichier
5. touch ../fic
6. ls -l
7. chmod o+w fichier
8. ls -l
9. chmod a-w fichier
10. ls -l

## Ex3
On suppose que le répertoire personnel de l'utilisateur courant est vide. 
* tester les commandes suivantes avec  [JSLinux](https://bellard.org/jslinux/vm.html?url=https://bellard.org/jslinux/buildroot-x86.cfg)
* que pouvez-vous en conclure sur le rôle du caractère `*` dans les noms de fichiers ?

1. `touch a1.txt a2.txt a1.py a2.py b1.py`
2. `ls` 
3. `ls *.txt`
4. `ls a*.py`
5. `ls a2.*`
6. `mkdir sauvegarde`
7. `mv *1.* sauvegarde`
8. `cp a* sauvegarde`
9. `ls sauvegarde`
10. `ls`
11. `rm *2.*`
12. `ls`
