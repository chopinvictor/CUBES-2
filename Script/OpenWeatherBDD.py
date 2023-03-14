import requests #module permettant d'effectuer des requêtes http
import mysql.connector #module de connexion à la BDD
import datetime #module qui fournit des classes permettant de manipuler les dates et les heures

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

# Clé de l'api + lien qui redirige les données de pau 
api_key = 'fca3e81d6c82bf8535af66bac6331c7a'
url = f'http://api.openweathermap.org/data/2.5/weather?q=Pau,fr&appid={api_key}&units=metric'

# Récupérer les données de l'API
response = requests.get(url) #On fait une requête afin de récupérer l'url renseigné plus haut

if response.status_code == 200: #response.status_code retourne un nombre qui est le code de statut de la requête HTML. 200 succès, 404 erreur
    data = response.json() #retourne un objet json
    temperature = data['main']['temp'] #On crée des variables pour stocker et afficher des données que l'on récupère dans l'API
    humidity = data['main']['humidity']
    pressure = data['main']['pressure']
    date_time = datetime.datetime.now()
    referencement = 'OPM' #Pour faire la différence entre le capteur (SEN) et OPM
    ville = 'Pau'
else:
    print(f"Erreur : {response.status_code}") #Affiche le statut de la requête si celui-ci n'est pas 200

# Insérer les valeurs dans la base de données
cursor = conn.cursor() #Permet de pouvoir effectuer des requêtes dans la BDD, cursor est un tampon mémoire intermédiaire
query = "INSERT INTO meteo (temperature, humidite, pression, date_heure, referencement, ville) VALUES (%s, %s, %s, %s, %s, %s);" #Query permet d'effectuer une requête dans la bdd
values = (temperature, humidity, pressure, date_time, referencement, ville)
cursor.execute(query, values) #Execute query et value
conn.commit() #validation et transfert dans la BDD

# Fermer la connexion à la base de données
cursor.close()
conn.close()
