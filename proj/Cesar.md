# Mini-projet 3
* Pour ce mini-projet, le travail s'effectue de préférence par binôme.
* Chaque binôme rend un seul `fichier.py` avec le code produit.
* Chaque élève rend un **document d'explication individuel**, sous forme numérique, qui doit: 
   *  préciser ce que l'élève a personnellent réalisé dans le projet  (voir le paragraphe **2.** ci-dessous)
   *  préciser comment la réalisation du projet a été découpée en plusieurs fonctions.
   *  donner la spécification des fonctions, c'est à dire : 
      *  le rôle et le type des paramètres 
      *  le rôle et le type de la valeur renvoyée
      *  le traitement réalisé par la fonction
      *  le choix des structures d'exécution (boucle, conditionnelle, etc...)
      *  les **tests** réalisés pour cette fonction
   

# Chiffrement de César 
## Principe
Le principe du chiffrement de César est simple : il consiste à décaler chaque lettre de l'alphabet d'une certaine valeur, appelée la clé de chiffrement.  
Par exemple, avec une clé **k=3**, toutes les lettres de l'alphabet sont décalées de trois.

A ===> D  
B ===> E  
C ===> F  
et ainsi de suite...  

Ainsi le mot BAC sera chiffré EDF ! 


en fin d'alphabet, on revient au début :  
X ===> A  
Y ===> B  
Z ===> C  

Pour le déchiffrement, on procède de même en décalant dans l'autre sens.

# 1. Partie TP : chiffrement
* Programmer en Python les fonctions suivantes décrites dans leur chaîne de documentation
* tester chaque fonction sur des exemples pertinents. 

#### Fonction `cherche_indice`
```Python
def cherche_indice(car, texte):
    """car est un caractère, texte est une chaîne de caractères
    la fonction renvoie -1 si car ne figure pas dans texte
    sinon, elle renvoie le premier indice de car dans texte"""
```
exemples : 
```
>>> cherche_indice('A', 'ABCD')
0
>>> cherche_indice('D', 'ABCD')
3
>>> cherche_indice('X', 'ABCD')
-1
```

#### Fonction `lettre_numero`
```Python
ALPHABET = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'

def lettre_numero(n):
    """renvoie la lettre de l'ALPHABET dont le rang est n
    que n soit compris entre 0 et 25 ou pas ! """
```
exemples : 
```Python
>>> lettre_numero(0)
'A'
>>> lettre_numero(25)
'Z'
>>> lettre_numero(26)
'A'
>>> lettre_numero(28)
'C'
>>> lettre_numero(-2)
'Y'
```

#### Fonction `cesar`
```Python
def cesar(texte, decalage):
    """l'argument texte est écrit en MAJUSCULES (sans accents)
    Renvoie le texte chiffré avec le méthode de César,
    en prenant pour clé l'argument decalage """
```
exemples : 
```Python
>>> cesar('ABC', 1)
'BCD'
>>> cesar('ABC', -1)
'ZAB'
>>> cesar('BONJOUR, COMMENT CA VA ?', 11)
'MZYUZFC, NZXXPYE NL GL ?'
>>> cesar('MZYUZFC, NZXXPYE NL GL ?', -11)
'BONJOUR, COMMENT CA VA ?'
```



## 2. Partie projet : un programme qui craque un message
Le chiffrement de César est facile à casser si on connaît la lettre la plus fréquente du message (en français, par exemple, le E).

On pourra commencer par programmer la fonction suivante 
#### Fonction `occurrences`
```Python
def occurrences(txt):
    """txt est un texte écrit en MAJUSCULES
    la fonction renvoie un tableau contenant, pour chaque lettre de l'alphabet,
    le nombre de fois où elle apparaît dans txt"""
```
exemples : 
```Python
>>> occurrences('AAAA BBB CC D ZZZZZ')
[4, 3, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5]
```

### Une fonction qui déchiffre des textes en français... 
On donne ci-dessous plusieurs messages à déchiffrer. 
Ecrire une fonction capable de déchiffrer tous ces messages, en trouvant la clé de chiffrement (décalage) grâce à la recherche de la lettre la plus fréquente dans le texte chiffré. 

#### message 1
```python
m1 = "NP BFT PELTE NPCELTY EZFEPQZTD, N'PDE BFP, OPAFTD OP WZYRFPD LYYPPD, ASTWPLD QZRR Y'LGLTE ALD BFTEEP WZYOCPD. NPFI BFT LGLTPYE W'SZYYPFC OP WP NZYYLTECP FY APF AWFD BFP WPD LFECPD LEEPDELTPYE BFP (DT NP Y'PDE DFC NP NSPXTY OTCPNE BF'TW ALCNZFCLTE NSLBFP UZFC AZFC GPYTC OP DL XLTDZY LF NWFM) APCDZYYP YP AZFGLTE ACPEPYOCP W'LGZTC ULXLTD GF LTWWPFCD. DZY DPFW ALDDP-EPXAD PELTE OP WTCP WPD UZFCYLFI PE OP UZFPC LF HSTDE. L NP UPF OF DTWPYNP, DT MTPY LAACZACTP L DL YLEFCP, TW RLRYLTE DZFGPYE, XLTD DPD RLTYD Y'PYECLTPYE ULXLTD OLYD DL MZFCDP PE QTRFCLTPYE AZFC FYP DZXXP TXAZCELYEP L DZY MFORPE OP NSLCTEP. O'LTWWPFCD, TW QLFE WP CPXLCBFPC, XC. QZRR UZFLTE PGTOPXXPYE AZFC UZFPC, YZY AZFC RLRYPC. WP UPF PELTE AZFC WFT FY NZXMLE, FYP WFEEP NZYECP FYP OTQQTNFWEP, XLTD FYP WFEEP DLYD XZFGPXPYE, DLYD OPAWLNPXPYE, DLYD QLETRFP, PE NPWL LWWLTE L DZY NLCLNEPCP."
```

#### message 2
```python
m2 = "HCIH O QCID ZSG GCZROHG RS QSHHS DSHWHS HFCIDS R'OJOBH-UOFRS SIFSBH QS HFSGGOWZZSASBH QCBBI RSG QVOGGSIFG EIW WBRWEIS EI'CB HCIQVS OI UWHS. CB OJOWH SBHSBRI QCAAS IB GCITTZS OI QSBHFS R'IB TCIFFS, SH WZ GSAPZOWH EI'CB JSBOWH RS JCWF IB ACIJSASBH ROBG ZSG TSIWZZSG. ZSG GCZROHG GS TWFSBH GWUBS."
```

#### message 3
```python
m3 = "TMA JIBIQTTWVA MVDWGMA LM XIZQA MV DMVLMM KWUXBIQMVB VMCN KMVB LWCHM PWUUMA. KPIYCM JIBIQTTWV IDIQB BZWQA XQMKMA LM KIVWV. QTA IDIQMVB MBM ZIXQLMUMVB UQA ACZ XQML. TM 25 IDZQT, OWPQMZ MBIVB UQVQABZM LM TI RCABQKM MB JWCKPWBBM MBIVB UQVQABZM LM TI OCMZZM, TI AMKBQWV LC JWV-KWVAMQT IDIQB XZWXWAM L'MVDWGMZ LMA JIBIQTTWVA LM DWTWVBIQZMA MV DMVLMM; TM UMUJZM LM TI KWUUCVM TCJQV IDIQB NIQB TM ZIXXWZB; TM 1MZ UIQ, AIVBMZZM MBIQB XZMB I NIQZM XIZBQZ LWCHM UQTTM AWTLIBA, BZMVBM XQMKMA LM KIUXIOVM MB CV JIBIQTTWV LM KIVWVVQMZA."
```

## Pour aller plus loin... 
#### message 0
```python
m0 = "XA AJX HJUUXI PADGH S'N PEEGDUDCSXG HDC PVDCXHPCI UGPCVXC EDJG KDXG H'PRRDBEAXG HDC UDGUPXI FJX, EPG HJGRGDXI, EGDUXIP PJ EPNH, EJXHFJ'JC BDXH EAJH IPGS, IDJI JC RWPRJC H'PRRDGSPXI EDJG CPCIXG A'XCIGXVPCI UAJM FJX HDJGSPXI SJ EJXIH S'JC UDGI EDJKDXG RJGPIXU, HJGIDJI PCIXRPIPGGWPA, BPXH H'PEEAXFJPCI PJHHX À A'PAQJVD, À A'PCRWXADEH, PJM QJQDCH, PJM RPARJAH, PJM RWPAPOXDCH, PJ IGXHBJH, PJ EXINGXPHXH, PJ BPA QAPCR, PJ EGJGXVD, PJ BPA RPSJR, PJ VADHHPCIWGPM."
```
