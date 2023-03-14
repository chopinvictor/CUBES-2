import mysql.connector

# Connexion à la base de données MySQL
mydb = mysql.connector.connect(
    host="localhost",
    user="juliette",
    password="Quinou123",
    database="cube2"
)

# Récupérer les données à afficher
mycursor = mydb.cursor()
mycursor.execute("SELECT * FROM meteo")

# Créer une chaîne de caractères HTML pour afficher les données dans un tableau
table_html = "<table><tr><th>Colonne 1</th><th>Colonne 2</th><th>Colonne 3</th></tr>"
for x in mycursor:
    table_html += "<tr>"
    for y in x:
        table_html += "<td>" + str(y) + "</td>"
    table_html += "</tr>"
table_html += "</table>"

# Générez la page web complète
page_html = "<html><head><title>Ma page web</title></head><body>" + table_html + "</body></html>"

# Enregistrez la page web dans un fichier HTML
with open("index.html", "w") as f:
    f.write(page_html)
