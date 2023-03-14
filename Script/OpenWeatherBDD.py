import requests
import mysql.connector
import datetime

# Définition des données liées à l'API
api_key = 'fca3e81d6c82bf8535af66bac6331c7a'
url = f'http://api.openweathermap.org/data/2.5/weather?q=Pau,fr&appid={api_key}'

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

# Récupérer les données de l'API
response = requests.get(url)

if response.status_code == 200:
    data = response.json()
    temperature = data['main']['temp']
    humidity = data['main']['humidity']
    pressure = data['main']['pressure']
    date_time = datetime.datetime.now()
    referencement = 'OPM'
    ville = 'Pau'
else:
    print(f"Erreur : {response.status_code}")

# Insérer les valeurs dans la base de données
cursor = conn.cursor()
query = "INSERT INTO meteo (temperature, humidite, pression, date_heure, referencement, ville) VALUES (%s, %s, %s, %s, %s, %s);"
values = (temperature, humidity, pressure, date_time, referencement, ville)
cursor.execute(query, values)
conn.commit()

# Fermer la connexion à la base de données
cursor.close()
conn.close()