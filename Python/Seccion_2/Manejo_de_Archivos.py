"""
    El manejo de archivos en Python es un conjunto de técnicas y herramientas que permiten
    trabajar con archivos de diferentes tipos, como por ejemplo archivos de texto.

    Python ofrece una serie de funciones y módulos integrados que permiten la lectura, escritura, 
    creación, modificación y eliminación de archivos.


    1 - Se utiliza la función open() para abrir un archivo y asignarlo a una variable. 
    La función open() toma como parámetros el nombre del archivo 
    y el modo de apertura (lectura, escritura, etc.).

    Sintaxis: archivo = open('ruta_del_archivo', 'modo_de_apertura')

    El modo de apertura es el modo en el que deseas abrir el archivo. 
    Hay varios modos de apertura:

    'r': (read) modo de lectura, el archivo se abre para lectura. Este modo es solo para archivos existentes, 
    por lo tanto, si intentas abrir un archivo con "r" que no existe, se producirá un error.

    'w': (write) modo de escritura, Crea un nuevo archivo para escritura y si el archivo ya existe, sobrescribe su contenido.

    'a': (append) modo de escritura, Crea un nuevo archivo para escritura y si ya existe, se añade contenido al final del mismo.

    'x': Crea un nuevo archivo para escritura, pero produce un error si el archivo ya existe. Si el archivo no existe, lo crea.


    # Metodos de manejo de archivos Binarios
    'b': modo binario, se abre el archivo en modo binario.
    't': modo de texto, se abre el archivo en modo texto (por defecto).
"""



# Ejemplo de como abrir archivos

# Las rutas se pueden definir sin el ./ que habitualmente usamos
miDocumento = open("./mi_archivo.txt", "r")


# Una vez que tengas el objeto de archivo, puedes realizar varias operaciones con él:

# Lectura:
# read(): lee todo el contenido del archivo y lo devuelve como una cadena.
# readline(): lee una línea del archivo.
# readlines(): lee todas las líneas del archivo y las devuelve como una lista.
