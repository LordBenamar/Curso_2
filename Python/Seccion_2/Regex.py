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

    



    Coincidencias Basicas
        .       - Cualquier Caracter, excepto nueva linea
        \       - Indica que el siguiente caracter se debe tratar de manera especial o "escaparse".
        \d      - Cualquier Digitos (0-9)
        \D      - No es un Digito (0-9)
        \w      - Caracter de Palabra (a-z, A-Z, 0-9, _)
        \W      - No es un Caracter de Palabra.
        \s      - Espacios de cualquier tipo. (espacio, tab, nueva linea)
        \S      - No es un Espacio, Tab o nueva linea.

        Limites
        \b      - Limite de Palabra
        \B      - No es un Limite de Palabra
        ^       - Inicio de una cadena de texto
        $       - Final de una cadena de texto

        Cuantificadores:
        *       - Coincide con 0 o más coincidencias del patrón anterior.
        +       - Coincide con 1 o más coincidencias del patrón anterior.
        ?       - Coincide con 0 o 1 ocurrencia del patrón anterior.
        {3}     - Numero Exacto
        {3,4}   - Rango de Numeros (Minimo, Maximo)
        {3,}     - Desde un numero en adelante

        Conjuntos de Caracteres
        []      - Caracteres dentro de los brackets
        [^]    - Caracteres que NO ESTAN dentro de los brackets

        Grupos
        ( )     - Grupo
        |       - Uno u otro

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





system("cls")



# re.findall(patron, string): Encuentra todas las coincidencias del patrón de expresión regular en la cadena de texto y devuelve
# una lista de todas las coincidencias encontradas.




# Ejemplo 1 findall()
texto = "Este es un TEXTO de Ejemplo CON Palabras MAYUSCULAS"

# Buscar solo las palabras con mayusculas
patron = r"\b[A-Z]+\b"



coincidencias = re.findall(patron, texto)
print(f"Las palabras con mayuscula son: {coincidencias}")





system("cls")


# Ejemplo 2 findall()
# Buscar todas las etiquetas HTML en el texto.

texto = "<section><h1>Titulo</h1><div><p>Parrafo</p><a href='instagram.com/lexpinonline'>Instagram</a></div></section>"
patron = r"<[^>]+>"


coincidencias = re.findall(patron, texto)
print(f"Las etiquetas HTML son: {coincidencias}")



system("cls")


# re.sub(patron, reemplazo, string): Reemplaza todas las coincidencias del patrón en la cadena de texto con
# otra cadena especificada.


# Ejemplo 1:
texto = "Estamos buscanco con JavaScript las coincidencias y reemplazandolas, JavaScript es genial!."
patron = r"JavaScript"


#------------- re.sub(patron, reemplazo, string_a_evaluar)
coincidencia = re.sub(patron, "Python", texto)

print(coincidencia)





system("cls")





# Ejemplo 2:
texto =  "El caballo verde de Bolivar era muy veloz."
patron = r"verde"


#------------- re.sub(patron, reemplazo, string_a_evaluar)
coincidencia = re.sub(patron, "Blanco", texto)

print(coincidencia)