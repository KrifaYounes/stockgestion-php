
- Ouvrir GitBash puis aller dans le répertoire www
cd C  ---> cd wamp ---> cd www
- dans gitbash dans le répertoire gestionstock lancer les commandes suivantes :
- git config --global user.name "Mariem"
- git config --global user.email "mariouma.mhenni@gmail.com"
- git clone https://github.com/KrifaYounes/stockgestion-php.git
- démarrer le server wamp ( l'icone doit etre verte en bas à droite )
- aller dans http://localhost/stockgestion-php/index.php



- télécharger le logiciel suivant :
- https://www.jetbrains.com/idea/download/#section=mac
- installer le logiciel 
    - ouvrir le projet stockgestion-php avec le logiciel
    - ouvrir phpMyAdmin puis créer la base de données gestionstock
    - dans la base de données gestionstock créer la table Stock(id : int , value : int , name: varchar 255)
    - FAIRE des insert dans la table Stock
    - dans le logicial intellij à droite cliquer sur database 
puis cliquer sur + puis cliquer sur Data source puis cliquer sur Mysql puis mettre 
    - host: localhost
    - user : root
    - password : ne rien mettre
    - database : gestionstock
    - cliquer sur testConection -> SUCCESS -> Cliquer sur Apply


- pour faire un commit sur github 
    - aller dans le répertoire stockgestion-php avec gitbash
    - lancer les commandes suivantes dans l'ordre
    - git add .
    - git commit -m "update project"
    - git push
    
    
    
    
    ANNEXE
    on Windows do Ctrl + Alt + L
    
    on Linux do Ctrl + Windows Key + Alt + L
    
    on Mac do CMD + Alt + L