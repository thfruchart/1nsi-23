# Exercice 1 de la séquence 4
import csv

def lecture_fichier(nom_fichier):
    with open(nom_fichier, "r") as fichier:
        return [ligne for ligne in csv.reader(fichier)]

def exporter(tableau, nom_fichier):
    with open(nom_fichier, "w") as fichier:
        csv.writer(fichier).writerows(tableau)
