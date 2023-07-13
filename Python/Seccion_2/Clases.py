"""
    En la programación orientada a objetos, una clase es un conjunto de atributos y métodos que definen un objeto 
    en particular. Los atributos son las características o propiedades del objeto, mientras que los métodos son 
    las funciones o acciones que puede realizar el objeto.

    En Python, se definen las clases utilizando la palabra clave "class". 
    Dentro de la clase, se pueden definir los atributos y los métodos, y luego se puede crear uno o varios 
    objetos de esa clase, los cuales tendrán los mismos atributos y métodos definidos en la clase.

    En pocas palabras, las clases pueden considerarse como plantillas o moldes a partir de los cuales se crean 
    objetos. 

    Cada objeto creado a partir de una clase tendrá las mismas propiedades y métodos definidos en la clase(molde), 
    pero cada objeto tendrá sus propios valores para esas propiedades.

"""


class Persona:
    # self es una referencia al objeto actual que se está creando a partir de la clase.
    # Al utilizar self, se puede acceder a los atributos y métodos de la instancia de 
    # la clase en la que se está trabajando. En pocas palabras permite acceder al los 
    # valores entre los diferentes metodos de la clase.
    def __init__(self, paramNombre, paramEdad):
        # __init__ es un método especial en Python que se usa para inicializar los atributos de una clase. 
        # Es decir, es el constructor de la clase.
        self.nombre = paramNombre
        self.edad = paramEdad

    # Definimos un metodo que podra realizar esta persona.
    def saludar(self):
        return f"Hola, mi nombre es {self.nombre} y tengo {self.edad} años de edad."



# Creando una nueva instancia de la clase Persona.
cesar = Persona("Cesar", 25)
diego = Persona("Diego", 30)
francisco = Persona("Francisco", 35)
jesus = Persona("Jesus", 40)
cesart = Persona("Cesart", 25)


print(f"{cesar.saludar()}")
print(f"{diego.nombre}")
print(f"{francisco.edad}")
print(f"{jesus.saludar()}")
print(f"{cesart.nombre}")





# Ejemplo 2, instanciando clase Persona2 con valores recibidos desde un input

# Definimos la clase Persona2
class Persona2: 
    def __init__(self, usuarioNombre, usuarioNacionalidad, usuarioProfesion):
        self.nombre = usuarioNombre
        self.nacionalidad = usuarioNacionalidad
        self.profesion = usuarioProfesion

    def miFuncion(self):
        return f"Hola, mi nombre es {self.nombre} naci en {self.nacionalidad} y soy {self.profesion}"


from os import system
system("cls")

respuesta = input("Para iniciar escribe si: ")

while respuesta == "si":
    minombre = input("¿Cual es tu nombre?: ")
    miPais = input("¿Donde Naciste?: ")
    miProfesion = input("¿Cual es tu profesion?: ")

    system("cls")

    usuarioInfo = Persona2(minombre, miPais, miProfesion)
    print( usuarioInfo.miFuncion() )
    
    respuesta = input("\nPara continuar escribe si: ")