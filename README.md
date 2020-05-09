# Q2-Webdatenbankprojekt

## ER und Relationenmodell:
![ERD-Diagramm](/Documentation/ERD.png)

Termine(**TerminId**, ↑SchülerId, Titel, Beschreibung, Datum, Art)  
Schüler(**SchülerId**, Name, PasswordHash)  
Kursbelegung(**↑KursId**, **↑SchülerId**, Name, ↑Fach, Lehrer(Name))  
Kurse(**KursId**, Halbjahr, ↑Lehrer, ↑Fach)  
Lehrer(**LehrerId**, Name, Mail)  



## Server-Adresse:
http://84.60.123.107
