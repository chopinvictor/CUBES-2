import smbus2 #bibliothèque pour modifier les bus
import bme280
import datetime #bibliothèque qui fournit des classes permettant de manipuler les dates et les heures
import time #bibliothèque qui permet d'obtenir l'heure actuelle
import mysql.connector #bibliothèque de connexion à la BDD

# Renseigner les valeurs utiles à la connexion
host = 'localhost'
user = 'juliette'
password = 'Quinou123'
database = 'cube2'

# Établir une connexion à la base de données
try: #On essaye de se connecter à la BDD avec les infos données plus haut.
        conn = mysql.connector.connect(host=host, user=user, password=password, database=database)
        print("Connexion à la base de données réussie !")
except mysql.connector.Error as err: #Si une exception intervient lors de la connexion, on affiche l'erreur en question
        print(f"Erreur de connexion à la base de données : {err}")

# Initialiser le capteur BME
port = 1 #bus I2C utilisé par le capteur
address = 0x76 #adresse du bus
bus = smbus2.SMBus(port) #Définition du bus concerné
calibration_params = bme280.load_calibration_params(bus, address) #Chargement des paramètres du capteur


# Récupérer les données envoyées par la capteur
data = bme280.sample(bus, address, calibration_params) #.sample prend aléatoirement un élément dans une liste
temperature = data.temperature
humidity = data.humidity
pressure = data.pressure
date_time = datetime.datetime.now()
referencement = "SEN" #Pour faire la différence entre le capteur (SEN) et OPM
ville = "Pau"

# Insérer les valeurs dans la base de données
cursor = conn.cursor() #Permet de pouvoir effectuer des requêtes dans la BDD, cursor est un tampon mémoire intermédiaire
query = "INSERT INTO meteo (temperature, humidite, pression, date_heure, referencement, ville) VALUES (%s, %s, %s, %s, %s, %s);" #Query = permet de réaliser une requête SQL
values = (temperature, humidity, pressure, date_time, referencement, ville)
cursor.execute(query, values) #Exécute query et value
conn.commit() #validation et transfert dans la BDD

# Afficher un message de confirmation
print(f"Données insérées dans la base de données : {temperature} °C, {humidity} %, {pressure} hPa, à {date_time}, mesures prises à {ville}")

# Fermer la connexion à la base de données
cursor.close()
conn.close()