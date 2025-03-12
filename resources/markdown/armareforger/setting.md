# 1. Général

```
-addons : Charge une liste de mods au démarrage.
```
```
-addonsDir : Spécifie des dossiers additionnels pour rechercher les mods.
```
```
-addonDownloadDir : Définit l’emplacement de téléchargement des mods.
```
```
-backendDisableStorage : Désactive le stockage, empêche les sauvegardes.
```
```
-backendFreshSession : Démarre une session vierge sur serveur dédié.
```
```
-backendLocalStorage : Stocke les données de sauvegarde en local (JSON).
```
```
-freezeCheck : Définit le temps avant qu’un freeze ne force un crash.
```
```
-cfg : Charge une configuration spécifique pour le moteur.
```
```
-GPUAdapter : Force l’utilisation d’un GPU spécifique.
```
```
-language : Définit la langue du jeu.
```
```
-noBackend : Désactive les communications HTTP avec le backend.
```
```
-noSound : Désactive le son.
```
```
-noSplash : Désactive l’écran d’intro au lancement.
```
```
-noThrow : Désactive les messages d’erreur.
```
```
-profile : Définit le dossier de profil utilisé.
```
```
-singleThreadedUpdate : Désactive l’optimisation multi-thread.
```

# 2. Fenêtre et Affichage

```
-window : Démarre le jeu en mode fenêtré.
```
```
-posX / -posY : Définit la position de la fenêtre sur l’écran.
```
```
-screenWidth / -screenHeight : Définit la taille de la fenêtre.
```
```
-forceUpdate : Force l’actualisation même hors focus.
```
```
-noFocus : Empêche le jeu de prendre le focus au lancement.
```

# 3. Workbench (Outils de Dev)

```
-wbModule : Lance un module spécifique du Workbench (éditeur, scripts, ressources…).
```
```
-packAddon : Emballe un mod pour distribution.
```
```
-publishAddon : Publie un mod.
```
```
-rebuild-database-only : Reconstruit la base de données sans lancer l’éditeur.
```

# 4. Hosting (Serveur Dédié)

```
-a2sIpAddress / -a2sPort : Définit l’IP et le port pour Steam Query Protocol.
```
```
-autoreload : Relance automatiquement le scénario à la fin d’une session.
```
```
-bindIP / -bindPort : Spécifie l’IP et le port d’hébergement du serveur.
```
```
-config : Charge un fichier de configuration serveur JSON.
```
```
-listScenarios : Liste les scénarios disponibles.
```
```
-logStats : Active l’enregistrement des statistiques serveur.
```
```
-maxFPS : Définit la limite de FPS serveur.
```

# 5. Réglages Réseau

```
-nds : Active la simulation dynamique réseau pour optimiser le trafic.
```
```
-nwkResolution : Définit la résolution du streaming réseau.
```
```
-rpl-timeout-ms : Définit le timeout client/serveur.
```
```
-rpl-validation- (rdb, scr, version, devbin)* : Désactive les validations réseau.
```

# 6. Debug et Profiling

```
-AILimit : Définit une limite d’IA.
```
```
-disableAI : Désactive totalement l’IA.
```
```
-disableCrashReporter : Désactive l’envoi automatique des crashs.
```
```
-disableNavmeshStreaming : Désactive le streaming des navmeshes (IA).
```
```
-logLevel : Définit le niveau de logs (normal, warning, error…).
```
```
-logsDir : Définit un dossier spécifique pour les logs.
```
```
-minidump : Spécifie le type de minidump généré en cas de crash.
```

# 7. Exemples d’utilisation


# 1 Démarrer le serveur avec un mod et une configuration spécifique :

```
ArmaReforgerServer.exe -config serverConfig.json -addons MyMod -bindIP 192.168.1.10 -bindPort 2302 -maxFPS 60
 ```

# 2 Lancer le jeu en mode fenêtré avec une langue et un mod spécifique :

```
ArmaReforgerSteam.exe -window -screenWidth 1920 -screenHeight 1080 -language fr_fr -addons MonMod
```

# 3 Compiler et publier un mod via le Workbench :

```
ArmaReforgerWorkbenchSteamDiag.exe -wbModule=ResourceManager -packAddon -publishAddon -publishAddonDir "D:\Mods\MyMod"
```

# Conclusion

```
Ces paramètres permettent de configurer le jeu, optimiser le serveur, déboguer et publier des mods. Pour un serveur performant, il est recommandé d’utiliser -config, -maxFPS, -logStats et -nds. Pour un client fluide, -window, -noSplash, -GPUAdapter et -language peuvent être utiles.
```
