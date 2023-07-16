# En esta app se debe elaborar la logica para enviar mensajes 
# instantaneamente a un usuario cada 20 segundos usando la libreria pywhatkit.


import pywhatkit as whatsapp
import time



# De esta manera podemos enviar un mensaje instantaneamente.

for i in range(1, 11):
    # Mensaje que se envia a una sola persona de manera instantanea
    # whatsapp.sendwhatmsg_instantly("+584122222222", f"Este mensaje se esta enviando automaticamente con Python, desde un bot de whatsapp!")

    # Mensaje que se envia a un grupo. 
    whatsapp.sendwhatmsg_to_group_instantly("FU5pMtD9LyMJ9VDjbpAX0v", "Mensaje enviado desde python")

    time.sleep(10)





"""
    Cosas que puedes hacer con esta libreria:

    # Enviar un mensaje a un contacto a una hora determinada, Ejemplo: 1:30 PM
    whatsapp.sendwhatmsg("+telefono", "Mensaje aqui", 13, 30)

    # Enviar un mensaje a un contacto instantaneamente.
    whatsapp.sendwhatmsg_instantly("telefono", "Mensaje aqui")

    # Enviar un mensaje a un grupo a una hora determinada, Ejemplo: 12:00 AM
    whatsapp.sendwhatmsg_to_group("id_del_grupo", "Hola todos!", 0, 0)

    # Enviar un mensaje a un grupo instantaneamente.
    whatsapp.sendwhatmsg_to_group_instantly("id_del_grupo", "Hola todos!")

"""

