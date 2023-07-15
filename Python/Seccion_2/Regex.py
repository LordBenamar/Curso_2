"""
    Las expresiones regulares son patrones de búsqueda utilizados para encontrar y manipular texto. 
    Son una secuencia de caracteres que define un conjunto de cadenas de texto que coinciden con un 
    patrón específico. 
    
    Se usan comúnmente en la programación para realizar operaciones como búsqueda, reemplazo, 
    extracción y validación de cadenas de texto.

    En Python, puedemos utilizar el módulo "re" para trabajar con expresiones regulares, por lo que
    es necesario importarlo.

    La sintaxis básica de una expresión regular es:

    - varRegex = r"hola"
    - texto = "Hola mundo"

    En este ejemplo, la expresión regular es "hola", y el texto es "Hola mundo".
    Se aplica de la siguiente manera:

    - coincidencia = re.search(varRegex, texto)

"""

import re
from os import system


# Expresión regular y texto a evaluar
cadena = "Hola!, estamos aprendiendo regex con Python en Nexpin"
varRegex = r"Lexpin"


# coincidencia
# re.search(patron, string): Busca la primera coincidencia del patrón en la cadena de texto y 
# devuelve un objeto de coincidencia si se encuentra, o None en caso contrario.


coincidencia = re.search(varRegex, cadena)

if coincidencia:
    print("Coincidencia encontrada")
    print(coincidencia)
    print(coincidencia.group())
else:
    print("Coincidencia no encontrada")
    print(coincidencia)




# Metodos de regex


# re.match(patron, string): Comprueba si el patrón coincide al comienzo de la cadena de texto y devuelve 
# un objeto de coincidencia si se encuentra, o None en caso contrario.

system("cls")


# Ejemplo 1:
patron = r"^\+\d{1,3}\-\d{3}\-\d{3}\-\d{3,4}$"
telefono = "+56-934-887-809"
telefono2 = "+58-412-887-8090"

coincidencia = re.match(patron, telefono)
coincidencia2 = re.match(patron, telefono2)

print(coincidencia.group())
print(coincidencia2.group())