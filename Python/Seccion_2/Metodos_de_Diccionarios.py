"""
    Un diccionario es una estructura de datos que permite almacenar y organizar datos de manera flexible. 
    A diferencia de las listas/arrays, que se indexan con números enteros, los diccionarios se indexan 
    con claves, que pueden ser de cualquier tipo inmutable como cadenas de texto o números.
"""

from os import system


persona = {
    "Nombre": "Mario", 
    "Ciudad": "Barquisimeto", 
    "Edad": 25
}



# get(key/propiedad): devuelve el valor asociado a la clave/propiedad dada.

Nombre = persona.get("Nombre")
Ciudad = persona.get("Ciudad")
Edad = persona.get("Edad")

print(f"get\nNombre: {Nombre}\nCiudad: {Ciudad}\nEdad: {Edad}")


system("cls")



# setdefault(key/propiedad): devuelve el valor asociado a la propiedad indicada, o agrega 
# la propiedad y un valor predeterminado si la propiedad no existe en el diccionario.


# Observamos el objeto antes de ser modificado 
print(f"\n{persona}")


# Mostramos una propiedad en caso de que exista
print(persona.setdefault("Nombre","mario@gmail.com")) # Mario


# Modificamos el objeto (Añadimos nueva propiedad)
persona.setdefault("Correo","mario@gmail.com") # Se añade la propiedad "Correo"



# Observamos el objeto despues de ser modificado 
print(f"\n{persona}")



# Importamos system para limpiar la consola.
from os import system
system("cls")



# items(): devuelve una vista iterable de pares (clave, valor) en el diccionario/objeto
listaPersona = persona.items()
print(f"\nLos items son: {listaPersona}")





"""
    En este caso, listaPersona no es una lista, sino un objeto de tipo dict_items, que es un tipo de vista 
    de diccionario que representa una lista de pares clave-valor(tuplas). 
    Para acceder al elemento en el índice 1, primero debemos convertir(formatear) listaPersona en una lista. 
    Luego podemos acceder al elemento en el índice 1 con la sintaxis de lista normal 
"""

listaPersona = list(listaPersona)
print(f"\nLa lista formateada es: {listaPersona}")
print(f"El indice 1 es: {listaPersona[1]}")
print(f"El indice 2 es: {listaPersona[2]}")
print(f"El indice 3 es: {listaPersona[3]}")


# Se pueden visualizar a modo de matriz, de manera que podemos acceder a los 
# valores de las tuplas en un determinado indice.
print(f"\nEl valor del indice 3 es: {listaPersona[3][1]}")




# system("cls")





# keys(): devuelve una vista iterable de las claves/propiedades en el diccionario/objeto
# propiedadesDelObjeto = persona.keys()
# print(propiedadesDelObjeto)

# propiedadesDelObjeto = list(propiedadesDelObjeto)
# print(f"\n{propiedadesDelObjeto}")
# print(f"El indice 0 de las keys es: {propiedadesDelObjeto[0]}")
# print(f"El indice 2 de las keys es: {propiedadesDelObjeto[2]}")





# system("cls")





# values(): devuelve una vista iterable de los valores en el diccionario/objeto
valoresDelObjeto = persona.values()
print(valoresDelObjeto)

valoresDelObjeto = list(persona.values())
print(f"\n{valoresDelObjeto}")
print(f"El indice 0 de los values es: {valoresDelObjeto[0]}")
print(f"El indice 2 de los values es: {valoresDelObjeto[2]}")




# system("cls")


# pop(key/propiedad): elimina la clave dada y devuelve el valor asociado a ella, o un valor 
# predeterminado si la clave no está en el diccionario
valorPropiedadEliminada = persona.pop("Correo")
print(f"\n{valorPropiedadEliminada}")
print(persona)





# popitem(): elimina y devuelve un par (clave, valor) aleatorio del diccionario/objeto
# propiedadEliminada2 = persona.popitem()
# print(f"\npopitem\nSe elimino {propiedadEliminada2}")
# print(persona)


system("cls")



# update([otherObject]): actualiza el diccionario con los pares clave-valor de otro diccionario 
# o de una secuencia de pares clave-valor

actualizaciones = {"Nombre": "Carlos", "Ciudad": "Bogota"}
print(f"objeto original es: {persona}")

persona.update(actualizaciones)
print(f"objeto actualizado es: {persona}")

persona.update({"Edad": 27})
print(f"objeto actualizado nuevamente es: {persona}")




# system("cls")




# copy(): devuelve una copia superficial del diccionario/objeto

# Sin copy
copiaPersona = persona

# Con copy
copiaDeObjetoPersona = persona.copy()


print(f"\nObjeto original:{persona}")

persona.update({"Nombre": "Diego", "Ciudad": "Santiago de Chile", "Edad": 27})

print(f"Objeto copia SIN copy: {copiaPersona}")
print(f"Objeto copia CON copy: {copiaDeObjetoPersona}")





system("cls")


# clear(): elimina todos los elementos del diccionario
persona.clear()


print(f"\nObjeto original:{persona}")
print(f"Objeto copia SIN copy: {copiaPersona}")
print(f"Objeto copia CON copy: {copiaDeObjetoPersona}")