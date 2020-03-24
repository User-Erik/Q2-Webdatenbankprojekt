# Q2-Webdatenbankprojekt

## ER und Relationenmodell: 
![ERD-Diagramm](/Documentation/ERD.png)

Termine(**TerminId**, ↑SchülerId, Titel, Beschreibung, Datum, Fach, Art)  
Schüler(**SchülerId**, Name, PasswordHash)  
Kursbelegung(**↑KursId**, **↑SchülerId**, Name, Fach, Lehrer(Name))  
Kurse(**KursId**, Fach, Halbjahr, ↑Lehrer)  
Lehrer(**LehrerId**, Name, Mail)  



## Server-Adresse:
noch nicht verfügbar
