# Paramètre supplémentaire
```md
-loadSessionSave -AILimit 200 -nds -maxFPS 60
```

# Config.json
```
{
    "a2s": {
        "address": "0.0.0.0",
        "port": 0
    },
    "bindAddress": "0.0.0.0",
    "bindPort": 0,
    "game": {
        "admins": [],
        "crossPlatform": true,
        "gameProperties": {
            "VONDisableDirectSpeechUI": false,
            "VONDisableUI": false,
            "battlEye": true,
            "disableThirdPerson": false,
            "fastValidation": true,
            "missionHeader": {
                "m_eDefaultGameFlags": 6,
                "m_eEditableGameFlags": 6,
                "m_iPlayerCount": 40,
                "other": "values"
            },
            "networkViewDistance": 1500,
            "serverMaxViewDistance": 3000,
            "serverMinGrassDistance": 100
        },
        "maxPlayers": 128,
        "mods": [],
        "name": "",
        "password": "",
        "passwordAdmin": "",
        "scenarioId": "",
        "supportedPlatforms": [
            "PLATFORM_PC",
            "PLATFORM_XBL",
            "PLATFORM_PSN"
        ],
        "visible": true
    },
    "operating": {
        "disableNavmeshStreaming": [],
        "joinQueue": {
            "maxSize": 40
        },
        "lobbyPlayerSynchronise": true
    },
    "publicAddress": "",
    "publicPort": 0,
    "rcon": {
        "address": "0.0.0.0",
        "blacklist": [],
        "password": "",
        "permission": "monitor",
        "port": 0,
        "whitelist": []
    }
}
```