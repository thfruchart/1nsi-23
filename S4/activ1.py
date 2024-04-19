import csv

#ouverture du fichier csv
def lecture_fichier(nom_fichier):
    with open(nom_fichier, mode='r') as fichier_ouvert:
        return list(csv.reader(fichier_ouvert,delimiter=","))
                

