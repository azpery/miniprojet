# FrameCloud
FrameCloud est une galerie photo permettant de stocker vos photos en ligne.
##Installation de la base de donnée
Ouvrez votre système de gestion de base de données et créez une nouvelle base de donnée nommée "miniprojet". Importez le script SQL "miniprojet.sql".
##Configuration des paramètres de l'application
Vérifier que les paramètres de l'application correspondent bien aux vôtres. Pour cela vous devez vous rendre dans le fichier /miniprojet/app/config/parameters.yml et vérifier que les numéros de ports, nom d'utilisateur et mot de passe de la base de donnée correspondent bien aux vôtres.
##Installation d'un serveur d'application Symfony
Pour installer le serveur d'application ouvrez votre terminal et rendez-vous au niveau de la racine de votre projet. Entrez la commande suivante "php app/console server:run". Celle-ci devrait vous donnez un url que vous copier/coller dans votre navigateur préféré afin de pourvoir accepter à notre galerie photo FrameCloud.
