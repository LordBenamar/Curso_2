# En Python, las listas/arrays tienen una gran cantidad de métodos incorporados.


# Lista de prueba (array)
frutas = ["Manzana","Pera","Banana","Naranja"]
print(f"\nLista Original\n{frutas}")




# append(): permite agrega un elemento al final de la lista.
frutas.append("Piña")
print(f"\nappend\n{frutas}")




# extend(): permite agregar multiples elementos al final de la lista.
dulces = ["Caramelo","Chocolate","Galleta"]
frutas.extend(dulces)
dulces.extend(frutas)
print(f"\nextend dulces a frutas\n{frutas}")
print(f"\nextend frutas a dulces\n{dulces}")




# insert(): permite insertar un elemento en una posición especifica.
frutas.insert(3,"Mango")
print(f"\ninsert\n{frutas}")




# remove(): permite eliminar el primer elemento de la lista que coincida con el valor dado.
frutas.remove("Banana")
print(f"\nremove\n{frutas}")




# index(): devuelve la posición del primer elemento que coincide con el valor dado, como un numero entero.
posicionDelMango = frutas.index("Mango")
print(f"\nEl indice del mango es: {posicionDelMango}")




# count(): cuenta la cantidad de veces que se repite un elemento.
mercado = ["Carne","Verduras","Lacteos","P. Higiene","Galleta","Galleta","Frutas","Galleta","Galleta Mantequilla","Galleta"]
print(f"\ncount\nhay: {mercado.count('Galleta')} galletas\nen la lista{mercado}")




# sort(): Ordena los elementos de la lista de forma ascendente (por defecto).
numeros = [7,1,8,24,64,900,3,325,50,9]
print(f"\nsort\nLos numeros sin orden son: {numeros}")
numeros.sort()
print(f"\nLos numeros ordenados son: {numeros}")




# Ejemplo 2 de sort()
letras = ["z","a","h","p","c","r","f"]
print(f"\nLas letras sin orden son: {letras}")
letras.sort()
print(f"\nLas letras en orden son: {letras}")




# Ejemplo 3 de sort()
palabras = ["zorro","ancla","hilo","perro","cactus","raton","foca"]
print(f"\nLas palabras sin orden son: {palabras}")
palabras.sort()
print(f"\nLas palabras en orden son: {palabras}")




# Ejemplo 4 de sort()
nombres = ["Pedro","Victor","Alfredo","Jesus","Francisco","Wilklert","Diego"]
print(f"\nLos nombres sin orden son: {nombres}")
nombres.sort()
print(f"\nLos nombres en orden son ascendente: {nombres}")




# Ejemplo 5 de sort()
nombres = ["Pedro","Victor","Alfredo","Jesus","Francisco","Wilklert","Diego"]
print(f"\nLos nombres sin orden son: {nombres}")

# Usamos el parametro reverse para indicar la orientacion del orden.
nombres.sort(reverse=True)
print(f"\nLos nombres en orden descendente son: {nombres}")




# Ejemplo 6 de sort()
numeros = [1,5,2,3,4,6,9,8,7,0]
print(f"\nLos numeros sin orden son: {numeros}")
numeros.sort()
print(f"\nLos numeros ordenados ascendentemente son: {numeros}")
numeros.sort(reverse=True)
print(f"\nLos numeros ordenados descendentemente son: {numeros}")




# reverse(): invierte el orden de los elementos en la lista.
listaNumeros = [1,2,3,4,5,6,7,8,9,0]
listaNombres = ["Pedro","Victor","Alfredo","Jesus","Francisco","Wilklert","Diego"]

listaNumeros.reverse()
listaNombres.reverse()

print(f"\nLista Numeros: {listaNumeros}")
print(f"\nLista Nombres: {listaNombres}")