import time # Afexim funcionalitats que no hi estan en el Python.
import sys
import os
h= 23  # Declarem les variables, per donar-li un valor a les hores, els minuts i els segons.
m= 59
s= 55

def Timer():
    global s  # Hi es una variable pùblica, que ajuda a definir als minuts, segons i les hores.
    global m
    global h
    while True:
        clear = lambda: os.system('cls')
        clear()
        print(str(h)+":"+str(m)+":"+str(s)+"     ", end='\r') # Fa que els if següents facin la seva funció i ajuda a reiniciar el contador.
        sys.stdout.flush()
        s = s + 1
        if(s>=60): # Fa que quan els segons arribin a 60, als minuts sumi 1.
            s = 0
            m = m + 1
        if(m>=60): # Fa que quan els minuts arribin a 60, a les hores li sumi 1.
            m = 0
            h = h + 1
        if(h>=24): # Fa que quan les hores arribin a 24, tornin totes les variables a 0.
            h = 0
            m = 0
            s = 0
        time.sleep(1)

Timer()