# Server config

#:small_blue_diamond: Ports par défaut à ouvrir pour l’hébergement :

```
Port    Protocole    Usage
2001    UDP    Port public
17777    UDP    Steam Query (A2S)
19999    UDP    RCON (Remote Console)
```

#:small_blue_diamond: Paramètres principaux du serveur (JSON)

# :one: Réseau et Connexion

```
bindAddress : Adresse IP liée au serveur (laisser vide pour 0.0.0.0).
bindPort : Port UDP du serveur (2001 par défaut).
publicAddress : Adresse IP publique enregistrée (laisser vide pour détection auto).
publicPort : Port public du serveur (généralement identique à bindPort).
```

# :two: Steam Query (A2S)

```
address : IP liée au service A2S.
port : Port UDP utilisé pour les requêtes Steam Query (17777 par défaut).
```

# :three: RCON (Remote Console)

```
address : IP liée au service RCON.
port : Port RCON (19999 par défaut).
password : Mot de passe RCON (obligatoire, min. 3 caractères, sans espace).
maxClients : Nombre max de connexions simultanées à RCON (16 par défaut).
permission : admin (contrôle total) ou monitor (lecture seule).
blacklist / whitelist : Liste des commandes interdites/autorisées.
```

#:small_blue_diamond: Paramètres du Jeu

# :four: Paramètres généraux

```
name : Nom du serveur.
password : Mot de passe pour rejoindre le serveur (optionnel).
passwordAdmin : Mot de passe administrateur.
admins : Liste des Steam ID ou Identity ID des administrateurs.
scenarioId : ID du scénario à charger (fichier .conf).
maxPlayers : Nombre maximum de joueurs (1 à 128, 64 par défaut).
visible : true (serveur visible) ou false (privé).
crossPlatform : true (active le crossplay PC/Xbox/PS, si applicable).
supportedPlatforms : Plateformes acceptées (PLATFORM_PC, PLATFORM_XBL, PLATFORM_PSN).
```

# :five: Paramètres avancés du jeu

```
serverMaxViewDistance : Distance max d'affichage (500 à 10 000, défaut 1600).
serverMinGrassDistance : Distance min de rendu de l’herbe (0 à 150, défaut 0).
fastValidation : true (valider les entités pour éviter des bugs de synchronisation).
networkViewDistance : Distance max de streaming réseau (500 à 5000, défaut 1500).
battlEye : true (active la protection anti-triche).
disableThirdPerson : true (vue FPS obligatoire).
VONDisableUI : true (désactive l’UI du chat vocal).
VONDisableDirectSpeechUI : true (désactive l’UI de la communication en proximité).
VONCanTransmitCrossFaction : true (communication radio inter-faction activée).
```
# :small_blue_diamond: Gestion des Mods

```
modsRequiredByDefault : true (tous les mods sont obligatoires par défaut).
mods : Liste des mods requis pour le serveur :
modID : GUID du mod.
name : Nom du mod (commentaire).
version : Version spécifique (sinon, la plus récente est prise).
required : true (mod obligatoire) ou false (optionnel).
🔹 Paramètres du Serveur
```
# :six: Gestion et Performance

```
disableServerShutdown : true (le serveur ne s’éteint pas en cas de perte de connexion).
disableAI : true (désactive l’IA du serveur).
playerSaveTime : Sauvegarde des joueurs (en secondes, défaut 120).
aiLimit : Nombre max d’IA (défaut -1, pas de limite).
slotReservationTimeout : Temps de réservation des slots (5 à 300s, défaut 60).
joinQueue : File d'attente pour rejoindre le serveur.
maxSize : Nombre max de joueurs en file d'attente (0 à 50, défaut 0 = désactivé).
```

# :white_check_mark: Conseils pour un bon hébergement

```
Gardez fastValidation sur true pour éviter des incohérences de chargement.
Limitez les FPS avec -maxFPS pour optimiser les performances.
N’activez crossPlatform que si nécessaire pour éviter des incompatibilités avec les mods.
```
# Exemple de config.json

```
{
    "bindAddress": "0.0.0.0",
    "bindPort": 2001,
    "publicAddress": "192.168.9.10",
    "publicPort": 2001,
    "a2s": {
        "address": "0.0.0.0",
        "port": 17777
    },
    "rcon": {
        "address": "0.0.0.0",
        "port": 19999,
        "password": "changeme_withoutspaces",
        "permission": "monitor",
        "blacklist": [],
        "whitelist": []
    },
    "game": {
        "name": "Server Name - Mission Name",
        "password": "",
        "passwordAdmin": "changeme",
        "admins" : [
            "76561198200329058"
        ],
        "scenarioId": "{ECC61978EDCC2B5A}Missions/23_Campaign.conf",
        "maxPlayers": 32,
        "visible": true,
        "crossPlatform": true,
        "supportedPlatforms": [
            "PLATFORM_PC",
            "PLATFORM_XBL"
        ],
        "gameProperties": {
            "serverMaxViewDistance": 2500,
            "serverMinGrassDistance": 50,
            "networkViewDistance": 1000,
            "disableThirdPerson": true,
            "fastValidation": true,
            "battlEye": true,
            "VONDisableUI": true,
            "VONDisableDirectSpeechUI": true,
            "missionHeader": {
                "m_iPlayerCount": 40,
                "m_eEditableGameFlags": 6,
                "m_eDefaultGameFlags": 6,
                "other": "values"
            }
        },
        "mods": [
            {
                "modId": "59727DAE364DEADB",
                "name": "WeaponSwitching",
                "version": "1.0.1"
            },
            {
                "modId": "59727DAE32981C7D",
                "name": "Explosive Goats beta",
                "version": "0.5.42"
            }
        ]
    },
    "operating": {
        "lobbyPlayerSynchronise": true,
        "joinQueue" : {
            "maxSize" : 12
        },
        "disableNavmeshStreaming": [
            "Soldiers",
            "BTRlike"
        ]
    }
}
```
