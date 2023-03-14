import smbus2
import bme280
import datetime
import time
import mysql.connector

# Renseigner les valeurs utiles à la connexion
host = 'localhost'
user = 'juliette'
password = 'Quinou123'
database = 'cube2'

# Établir une connexion à la base de données
try:
        conn = mysql.connector.connect(host=host, user=user, password=password, database=database)
        print("Connexion à la base de données réussie !")
except mysql.connector.Error as err:
        print(f"Erreur de connexion à la base de données : {err}")

# Initialiser le capteur BME
port = 1
address = 0x76
bus = smbus2.SMBus(port)
calibration_params = bme280.load_calibration_params(bus, address)


# Récupérer les données envoyées par la capteur
data = bme280.sample(bus, address, calibration_params)
temperature = data.temperature
humidity = data.humidity
pressure = data.pressure
date_time = datetime.datetime.now()

# Insérer les valeurs dans la base de données
cursor = conn.cursor()
query = "INSERT INTO meteo (temperature, humidite, pression, date_heure) VALUES (%s, %s, %s, %s);"
values = (temperature, humidity, pressure, date_time)
cursor.execute(query, values)
conn.commit()

# Afficher un message de confirmation
print(f"Données insérées dans la base de données : {temperature} °C, {humidity} %, {pressure} hPa, à {date_time}")

# Fermer la connexion à la base de données
cursor.close()
conn.close()