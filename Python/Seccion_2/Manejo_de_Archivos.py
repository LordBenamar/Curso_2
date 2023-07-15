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


# Una vez que tengas el archivo, puedes realizar varias operaciones con él:

# Lectura:
#   read(): lee todo el contenido del archivo y lo retorna como una cadena.
#   readline(): lee una línea del archivo. admite como parametro la cantidad de caracteres que retornara.
#   readlines(): lee todas las líneas del archivo y las retorna en formato de lista.
#   Posteriormente se puede utilizar el indice de la linea que deseas obtener.


# NOTA: en la consola debes estar ubicado en la ruta donde esta de tu archivo .py
# de lo contrario podras recibir el error:

# Traceback (most recent call last):
#     File "c:\Users\haont\Desktop\content-course\Python\Manejo_de_Archivos.py", line 27, in <module>
#         Documento = open("nombre-del-archivo","r")
#                     ^^^^^^^^^^^^^^^^^^^^^^^^^^^
#  FileNotFoundError: [Errno 2] No such file or directory: 'nombre-del-archivo'


# Lectura de todo el contenido
contenidoDocumento1 = miDocumento.read()

# Lectura de una linea
# print(miDocumento.readline())

# Lectura de una linea en especifico.
# print(miDocumento.readlines()[2])





# Escritura:
# write(cadena): escribe la cadena en el archivo.
# writelines(lista): escribe cada elemento de la lista en el archivo.
# close(): cierra el archivo.


# Siempre, despues de trabajar con un archivo debes cerrarlo de la siguiente manera:
# miDocumento.close()


# Apertura de documento con proposito de escritura:
# NOTA: Ya que este documento no existe, se creara y podremos escribir en el.

# Abriendo con 'w' (si es primera vez), crea el archivo, sino se sobreescribe:
miSegundoArchivo = open("./mi_segundo_archivo.txt", "w")

# Añadiendo contenido al documento:
# miSegundoArchivo.write("Estamos aprendiendo a sobreescribir archivos usando python, en Lexpin.\nEsta es la segunda lines del documento\nY esta es la tercera linea\nEsta linea se acaba de añadir, pero las lineas anteriores dan la ilusion de que no se modificaron\ncuando en relidad si se volvieron a crear.")

miSegundoArchivo.write(contenidoDocumento1)

# Cerrando el documento:
miSegundoArchivo.close()