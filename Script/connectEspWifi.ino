/*
Script pour connecter l'ESP à Internet
*/

#include "ESP8266WiFi.h"                      // Inclure la librairie qui fournit des fonctions Wi-Fi basiques spécifiques à l'ESP8266
                                              // dont nous allons nous servir pour nous connecter au réseau

const char* SSID = "iPhone de Victor";        // Définition de deux constantes représentant le nom du routeur 
const char* mdp = "mdpmdpmdp";                // ainsi que son mot de passe


void setup(void)                              // La procédure setup() ne s'éxecute qu'une fois au démarrage 
{
  Serial.begin(9600);                         // Définie la vitesse de transmission des données (Baud rate) à 9600 bits/seconde
  WiFi.begin(SSID, mdp);                      // Démarre la connexion à la WiFi 
  Serial.println("Connexion en cours :");
  
  
  while (WiFi.status() != WL_CONNECTED)       // Boucle s'éxecutant si la connexion n'est pas encore établie
  {
    delay(750);                               // Ajout d'un delai pour ne pas afficher trop de '.'
    Serial.println("*");                       // Affichage de point toutes les secondes durant la connexion

    if(WiFi.status() == WL_CONNECT_FAILED)    // Si la connexion échoue 
    {
        Serial.println("Échec de la connexion. Veuillez réessayer");
        break;
    }
  }

if(WiFi.status() == WL_CONNECTED)
{
    Serial.println("");                           // Ajout d'une ligne vide dans la console
    Serial.println("Connexion réussie");
    Serial.println(WiFi.localIP());               // Affichage de l'ip de l'ESP
}

}

void loop() {           
    
}
