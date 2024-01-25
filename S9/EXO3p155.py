#exo 3 p. 155
import time

def puissance1(x,n) :
    p = 1
    for i in range(n) :
        p = p*x
    return p

def puissance2(x,n) :
    p = 1
    while n>0 :
        if n%2 == 1 : # n est impair
            p = p * x
        x = x * x
        n = n // 2
    return p

start = time.time()
puissance1(2,500000)
stop =  time.time()
print("puissance1 :", stop - start )

start = time.time()
puissance2(2,500000)
stop =  time.time()
print("puissance2 :", stop - start )
