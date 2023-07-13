# Importamos la libreria time quenos permitira trabajar con el reloj del equipo.
import time

# Importamos la libreria system que nos permitira realizar acciones en la consola.
from os import system


# Si recordamos en JavaScript, usabamos la funcion asincrona setInterval() para
# crear un intervalo de tiempo que se ejecutara cada 1000 milisegundos (1seg)
# Capturara la hora actual y la imprimia. por ejemplo:

"""
    setInterval(()=>{
        console.clear()
        tiempo = new Date();
        console.log(tiempo.toLocaleTimeString());
    },1000);
"""



# En python hacemos practicamente lo mismo:

while True:
    time.sleep(1)
    system("cls")
    horaActualizada = time.localtime()
    hora,minutos,segundos = horaActualizada.tm_hour, horaActualizada.tm_min, horaActualizada.tm_sec

    print(f"0{hora}:0{minutos}:0{segundos}" if segundos < 10 and minutos < 10 and hora < 10 else f"0{hora}:0{minutos}:{segundos}" if minutos < 10 and hora < 10 else f"{hora}:{minutos}:{segundos}")














# Ejemplo 2: Cronometro de segundos.
# Definimos un loop
# contador = 1

# while True:
#     contador += 1
#     print(f"{contador} segundos")
#     time.sleep(0.1)
#     system("cls")