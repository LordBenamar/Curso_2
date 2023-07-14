"""
    try-except es una estructura de control utilizada para manejar excepciones y errores en el código. 

    El bloque try permite probar un bloque de código en busca de errores, mientras que el bloque except permite 
    manejar cualquier excepción que se produzca en el bloque try.

    También se puede agregar un bloque else opcional que se ejecutará si no se produce ninguna excepción

    Y un bloque finally, tambien opcional, que se ejecutará siempre, independientemente de si se produce 
    una excepción o no.

    la sintaxis basica de try-except es:
    try:
        # Código a probar
    except Excepcion:
        # Código a ejecutar en caso de que se produzca la excepción
    else:
        # Código a ejecutar si no se produce ninguna excepción
    finally:
        # Código a ejecutar siempre

    Tipos de Excepciones comunes:

        Existen varios tipos de excepciones que pueden ser lanzadas durante la ejecución de un programa. 

        - TypeError: se produce cuando se realiza una operación o función en un tipo dato que no es 
        compatible con ella.

        - ValueError: se produce cuando se llama a una función o método con un argumento 
        que tiene un valor inesperado.

        - IndexError: se produce cuando se intenta acceder a un elemento fuera del rango 
        de índices de una secuencia (lista, tupla, etc.).

        - KeyError: se produce cuando se intenta acceder a una clave que no está presente en un diccionario.

        - NameError: se produce cuando se intenta utilizar una variable o nombre que no ha sido definido.


        - FileNotFoundError: se produce cuando se intenta acceder a un archivo que no existe o no se puede abrir.


    IMPORTANTE SABER: Es opcional definir la excepción que se espera manejar en una estructura try-except. 
    Si no se especifica una excepción en la cláusula except, capturará cualquier excepción que ocurra 
    en el bloque try. Sin embargo, es buena práctica especificar la excepción para que el manejo de 
    excepciones sea más preciso y para evitar capturar excepciones que no se espera manejar.
"""


from os import system
system("cls") # Limpia la consola del texto previamente impreso.



# Ejemplo 1
# valorIngresado = str(input("Ingrese un numero: "))


# try:
#     total = valorIngresado * valorIngresado
#     print(total)
# except:
#     print("Ocurrio un error")


# print("Gracias a que except pudo manejar la excepcion correctamente, podremos leer esta linea en la consola.")



# Ejemplo 2:

valorIngresado = int(input("Ingrese un numero: "))
# valorIngresado = str(input("Ingrese un numero: "))

try:
    total = valorIngresado * valorIngresado
    print(total)
except:
    print("Ocurrio un error")
else:
    print("Mensaje que se muestra gracias a else, ya que try se ejecuto sin generar una excepcion.")
finally:
    print("Mensaje que se muestra siempre, sin importar si se genero o no una excepcion.")