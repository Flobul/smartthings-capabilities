<?php
/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/

class smartthings_translate
{
    public static $enums;
    public static $cmdName;
    public static $cycles;

    public function __construct()
    {
        $this->enums = [
            "acceleration" => [
                "inactive" => __("Aucune vibration", __FILE__),
                "active"   => __("Vibration détectée", __FILE__)
            ],

            "activity" => [
                "noActivity" => __("Aucune activité détectée", __FILE__),
                "falling"    => __("Chute détectée", __FILE__),
                "standing"   => __("Position debout détectée", __FILE__),
                "eating"     => __("Prise de repas détectée", __FILE__),
                "sitting"    => __("Position assise détectée", __FILE__),
                "lying"      => __("Position allongée détectée", __FILE__)
            ],
            "amount" => [
                "standard" => __("Standard", __FILE__),
                "extra"    => __("Surplus", __FILE__),
                "none"     => __("Aucune", __FILE__),
                "less"     => __("Faible", __FILE__)
            ],
            "fanMode" => [
                "high"     => __("Élevé", __FILE__),
                "medium"   => __("Moyenne", __FILE__),
                "pet"      => __("Animal de compagnie", __FILE__),
                "auto"     => __("Automatique", __FILE__),
                "sleep"    => __("Veille", __FILE__),
                "windFree" => __("Sans courant d'air", __FILE__),
                "smart"    => __("Intelligent", __FILE__),
                "low"      => __("Faible", __FILE__),
                "turbo"    => __("Turbo", __FILE__)
            ],
            "airConditionerMode" => [
                "auto"           => __("Automatique", __FILE__),
                "cool"           => __("Refroidissement", __FILE__),
                "heat"           => __("Chauffage", __FILE__),
                "clean"          => __("Purification", __FILE__),
                "dry"            => __("Séchage", __FILE__),
                "coolClean"      => __("Froid, purification", __FILE__),
                "dryClean"       => __("Sec, purification", __FILE__),
                "heatClean"      => __("Chaud, purification", __FILE__),
                "comfortCooling" => __("Refroidissement confortable", __FILE__),
                "aIComfort"      => __("IA Refroidissement confortable", __FILE__),
                "fan"            => __("Ventilateur", __FILE__),
                "fanOnly"        => __("Purification", __FILE__),
                "wind"           => __("Purifier", __FILE__),
                "notSupported"   => __("Non supporté", __FILE__)
            ],
            "alarm" => [
                "siren"  => __("Sirène", __FILE__),
                "strobe" => __("Clignotement", __FILE__),
                "off"    => __("Désactivée", __FILE__),
                "both"   => __("Sirène et clignotement", __FILE__)
            ],
            "airConditionerOdorControllerState" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "acOptionalMode" => [
                "motionDirect"   => __("Mouvement direct", __FILE__),
                "windFree"       => __("Sans courant d'air", __FILE__),
                "windFreeSleep"  => __("Nuit sans courant d'air", __FILE__),
                "energySaving"   => __("Économiseur d'énergie", __FILE__),
                "motionIndirect" => __("Mouvement indirect", __FILE__),
                "off"            => __("Désactivé", __FILE__),
                "speed"          => __("Rapide", __FILE__),
                "smart"          => __("Intelligent", __FILE__),
                "comfort"        => __("Confort", __FILE__),
                "sleep"          => __("Nuit", __FILE__),
                "longWind"       => __("Longue portée d’air", __FILE__),
                "quiet"          => __("Silencieux", __FILE__),
                "cubePurify"     => __("cubePurify", __FILE__),
                "dlightCool"     => __("Refroidissemnt d'light", __FILE__),
                "twoStep"        => __("2 étapes", __FILE__)
            ],
            "autoCleaningMode" => [
                "quietClean" => __("Nettoyage silencieux", __FILE__),
                "speedClean" => __("Nettoyage rapide", __FILE__),
                "off"        => __("Désactivé", __FILE__),
                "on"         => __("Activé", __FILE__)
            ],
            "brightnessLevel" => [
                "high" => __("Haute", __FILE__),
                "low"  => __("Faible", __FILE__),
                "mid"  => __("Moyenne", __FILE__),
                "off"  => __("Désactivée", __FILE__)
            ],
            "button" => [
                "up_hold"   => __("Cliquer en haut et maintenir", __FILE__),
                "up_5x"     => __("Cliquer en haut cinq fois", __FILE__),
                "up_6x"     => __("Cliquer en haut six fois", __FILE__),
                "held"      => __("Maintenue appuyée", __FILE__),
                "double"    => __("Appuyer deux fois sur la touche", __FILE__),
                "down_6x"   => __("Cliquer en bas six fois", __FILE__),
                "up_3x"     => __("Cliquer en haut trois fois", __FILE__),
                "down"      => __("Cliquer en bas", __FILE__),
                "up_4x"     => __("Cliquer en haut quatre fois", __FILE__),
                "up_2x"     => __("Cliquer en haut deux fois", __FILE__),
                "pushed_2x" => __("Appuyer deux fois sur la touche", __FILE__),
                "pushed_6x" => __("Appuyer six fois sur la touche", __FILE__),
                "pushed_5x" => __("Appuyer cinq fois sur la touche", __FILE__),
                "pushed_4x" => __("Appuyer quatre fois sur la touche", __FILE__),
                "pushed_3x" => __("Appuyer trois fois sur la touche", __FILE__),
                "down_4x"   => __("Cliquer en bas quatre fois", __FILE__),
                "down_hold" => __("Cliquer en bas et maintenir", __FILE__),
                "down_5x"   => __("Cliquer en bas cinq fois", __FILE__),
                "down_2x"   => __("Cliquer en bas deux fois", __FILE__),
                "down_3x"   => __("Cliquer en bas trois fois", __FILE__),
                "up"        => __("Cliquer en haut", __FILE__),
                "pushed"    => __("Appuyée", __FILE__)
            ],
            "bypassStatus" => [
                "ready"    => __("Prêt", __FILE__),
                "bypassed" => __("Contourné", __FILE__),
                "notReady" => __("Pas prêt", __FILE__)
            ],
            "camera" => [
                "restarting"  => __("Redémarrage", __FILE__),
                "unavailable" => __("Non disponible", __FILE__),
                "off"         => __("Désactivée", __FILE__),
                "on"          => __("Activée", __FILE__)
            ],
            "carbonMonoxide" => [
                "tested"   => __("Testée", __FILE__),
                "clear"    => __("Absente", __FILE__),
                "detected" => __("Détectée", __FILE__)
            ],
            "connection" => [
                "connected" => __("Connecté", __FILE__)
            ],
            "contact" => [
                "closed" => __("Fermée", __FILE__),
                "open"   => __("Ouverte", __FILE__)
            ],
            "defrost" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "density" => [
                "normal"    => __("Normale", __FILE__),
                "high"      => __("Élevée", __FILE__),
                "extraHigh" => __("Très élevée", __FILE__),
                "none"      => __("Aucune", __FILE__)
            ],
            "detergentType" => [
                "capsule"  => __("Dosette", __FILE__),
                "liquid"   => __("Liquide", __FILE__),
                "none"     => __("Aucun", __FILE__),
                "drySheet" => __("Lingettes", __FILE__),
                "unknown"  => __("Inconnu", __FILE__)
            ],
            "deodorFilterStatus" => [
                "notused" => __("Non utilisé", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "dependencyStatus" => [
                "slave"  => __("Esclave", __FILE__),
                "single" => __("Seul", __FILE__),
                "master" => __("Maître", __FILE__)
            ],
            "DeviceWatch-DeviceStatus" => [
                "offline" => __("Hors ligne", __FILE__),
                "online"  => __("En ligne", __FILE__)
            ],
            "deviceType" => [
                "winecellar"     => __("Cave à vin", __FILE__),
                "oven"           => __("Four", __FILE__),
                "robotcleaner"   => __("Robot nettoyeur", __FILE__),
                "dishwasher"     => __("Lave-vaisselle", __FILE__),
                "range"          => __("Cuisinière", __FILE__),
                "krefrigerator"  => __("Réfrigérateur Kimchi", __FILE__),
                "airpurifier"    => __("Purificateur d'air", __FILE__),
                "cooktop"        => __("Plaque de cuisson", __FILE__),
                "dryer"          => __("Sèche-linge", __FILE__),
                "washer"         => __("Lave-linge", __FILE__),
                "airconditioner" => __("Climatiseur", __FILE__),
                "refrigerator"   => __("Réfrigérateur", __FILE__),
                "microwave"      => __("Micro-onde", __FILE__),
                "steamcloset"    => __("Armoire à vapeur", __FILE__)
            ],
            "dishwasherDiagnosis" => [
                "unkown" => __("Inconnu", __FILE__),
                "ready"  => __("Prêt", __FILE__),
                "run"    => __("En fonctionnement", __FILE__),
                "pause"  => __("En pause", __FILE__)
            ],
            "dishwasherHighTempDry" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dishwasherKidsLock" => [
                "unkown" => __("Inconnu", __FILE__),
                "ready"  => __("Prêt", __FILE__),
                "run"    => __("En fonctionnement", __FILE__),
                "pause"  => __("En pause", __FILE__)
            ],
            "dishwasherOperatingProgress" => [
                "sud"            => __("sud", __FILE__), // à traduire
                "weightsensing"  => __("Détection de poids", __FILE__),
                "wash"           => __("Lavage", __FILE__),
                "none"           => __("Aucun", __FILE__),
                "prewash"        => __("Prélavage", __FILE__),
                "predrain"       => __("Trempage", __FILE__),
                "airwash"        => __("Nettoyage à l'air", __FILE__),
                "waitend"        => __("Attendre la fin", __FILE__),
                "drying"         => __("Séchage", __FILE__),
                "spin"           => __("Essorage", __FILE__),
                "wrinkleprevent" => __("Traitement anti-traces", __FILE__),
                "cooling"        => __("Refroidissement", __FILE__),
                "finish"         => __("Finition", __FILE__),
                "delaywash"      => __("Lavage différé", __FILE__),
                "rinse"          => __("Rinçage", __FILE__)
            ],
            "dishwasherOperatingSuppProgress" => [
                "sud"            => __("sud", __FILE__), // à traduire
                "weightsensing"  => __("Détection de poids", __FILE__),
                "wash"           => __("Lavage", __FILE__),
                "none"           => __("Aucun", __FILE__),
                "prewash"        => __("Prélavage", __FILE__),
                "predrain"       => __("Trempage", __FILE__),
                "airwash"        => __("Nettoyage à l'air", __FILE__),
                "waitend"        => __("Attendre la fin", __FILE__),
                "drying"         => __("Séchage", __FILE__),
                "spin"           => __("Essorage", __FILE__),
                "wrinkleprevent" => __("Traitement anti-traces", __FILE__),
                "cooling"        => __("Refroidissement", __FILE__),
                "finish"         => __("Finition", __FILE__),
                "delaywash"      => __("Lavage différé", __FILE__),
                "rinse"          => __("Rinçage", __FILE__)
            ],
            "dishwasherSanitize" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dishwasherSelectedZone" => [
                "offOn"  => __("offOn", __FILE__),
                "offOff" => __("offOff", __FILE__),
                "onOn"   => __("onOn", __FILE__),
                "onOff"  => __("onOff", __FILE__)
            ],
            "dishwasherSpeedBooster" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dishwasherSuppHighTempDry" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dishwasherSuppSanitize" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dishwasherSuppSelectedZone" => [
                "offOn"  => __("offOn", __FILE__),
                "offOff" => __("offOff", __FILE__),
                "onOn"   => __("onOn", __FILE__),
                "onOff"  => __("onOff", __FILE__)
            ],
            "dishwasherSuppSpeedBooster" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dishwasherSuppZoneBooster" => [
                "offOn"  => __("offOn", __FILE__),
                "offOff" => __("offOff", __FILE__),
                "onOn"   => __("onOn", __FILE__),
                "onOff"  => __("onOff", __FILE__)
            ],
            "dishwasherZoneBooster" => [
                "offOn"  => __("offOn", __FILE__),
                "offOff" => __("offOff", __FILE__),
                "onOn"   => __("onOn", __FILE__),
                "onOff"  => __("onOff", __FILE__)
            ],
            "dishwasherJobState" => [
                "preDrain"       => __("Trempage", __FILE__),
                "drying"         => __("Séchage", __FILE__),
                "spin"           => __("Essorage", __FILE__),
                "cooling"        => __("Refroidissement", __FILE__),
                "wash"           => __("Lavage", __FILE__),
                "wrinklePrevent" => __("Traitement anti-traces", __FILE__),
                "finish"         => __("Fin", __FILE__),
                "prewash"        => __("Prélavage", __FILE__),
                "airwash"        => __("Nettoyage à l'air", __FILE__),
                "rinse"          => __("Rinçage", __FILE__),
                "unknown"        => __("Inconnu", __FILE__)
            ],
            "door" => [
                "closing" => __("Fermeture…", __FILE__),
                "closed"  => __("Fermée", __FILE__),
                "opening" => __("Ouverture…", __FILE__),
                "open"    => __("Ouverte", __FILE__),
                "unknown" => __("Inconnu", __FILE__)
            ],
            "doorState" => [
                "closed" => __("Fermée", __FILE__),
                "open"   => __("Ouverte", __FILE__)
            ],
            "dryerAutoCycleLink" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dryingTemperature" => [
                "tapCold"   => __("Eau froide", __FILE__),
                "mediumLow" => __("Moyenne basse", __FILE__),
                "semiHot"   => __("Tiède", __FILE__),
                "cold"      => __("Froide", __FILE__),
                "none"      => __("Aucune", __FILE__),
                "medium"    => __("Moyenne", __FILE__),
                "hot"       => __("Chaude", __FILE__),
                "extraLow"  => __("Très froid", __FILE__),
                "warm"      => __("Chaud", __FILE__),
                "high"      => __("Élevée", __FILE__),
                "extraHot"  => __("Très chaude", __FILE__),
                "low"       => __("Basse", __FILE__),
                "90"        => __("90", __FILE__),
                "80"        => __("80", __FILE__),
                "70"        => __("70", __FILE__),
                "60"        => __("60", __FILE__),
                "50"        => __("50", __FILE__),
                "40"        => __("40", __FILE__),
                "95"        => __("95", __FILE__),
                "ecoWarm"   => __("Chaud éco", __FILE__),
                "30"        => __("30", __FILE__),
                "20"        => __("20", __FILE__),
                "75"        => __("75", __FILE__),
                "65"        => __("65", __FILE__)
            ],
            "dryerMode" => [
                "highHeat" => __("Haute température", __FILE__),
                "regular"  => __("Normal", __FILE__),
                "lowHeat"  => __("Basse température", __FILE__)
            ],
            "dryerJobState" => [
                "weightSensing"  => __("Détection de poids", __FILE__),
                "drying"         => __("Séchage", __FILE__),
                "refreshing"     => __("Rafraîchissant", __FILE__),
                "cooling"        => __("Refroidissement", __FILE__),
                "wrinklePrevent" => __("Traitement anti-traces", __FILE__),
                "sanitizing"     => __("Assainissement", __FILE__),
                "delayWash"      => __("Lavage différé", __FILE__),
                "finished"       => __("Fin", __FILE__),
                "internalCare"   => __("Prudence", __FILE__),
                "none"           => __("Aucun", __FILE__),
                "dehumidifying"  => __("Déshumidificateur", __FILE__),
                "aIDrying"       => __("IA séchage", __FILE__)
            ],
            "doNotDisturb" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dryerDryLevel" => [
                "very"     => __("Très sec", __FILE__),
                "delicate" => __("Délicat", __FILE__),
                "none"     => __("Aucun", __FILE__),
                "270"      => __("270", __FILE__),
                "150"      => __("150", __FILE__),
                "damp"     => __("Humide", __FILE__),
                "210"      => __("210", __FILE__),
                "extra"    => __("Extra", __FILE__),
                "90"       => __("90", __FILE__),
                "30"       => __("30", __FILE__),
                "normal"   => __("Normal", __FILE__),
                "more"     => __("Plus", __FILE__),
                "180"      => __("180", __FILE__),
                "less"     => __("Moins", __FILE__),
                "cupboard" => __("Prêt à ranger", __FILE__),
                "240"      => __("240", __FILE__),
                "120"      => __("120", __FILE__),
                "0"        => __("0", __FILE__),
                "1"        => __("1", __FILE__),
                "2"        => __("2", __FILE__),
                "3"        => __("3", __FILE__),
                "shirt"    => __("Chemise", __FILE__),
                "4"        => __("4", __FILE__),
                "5"        => __("5", __FILE__),
                "60"       => __("60", __FILE__)
            ],
            "dryerWrinklePrevent" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "dustFilterStatus" => [
                "notused" => __("Non utilisé", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "electricHepaFilterStatus" => [
                "notused" => __("Non utilisé", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "encryption" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "fanOscillationMode" => [
                "all"         => __("Toutes directions", __FILE__),
                "fixed"       => __("Fixe", __FILE__),
                "vertical"    => __("Flux d’air vertical", __FILE__),
                "horizontal"  => __("Flux d’air horizontal", __FILE__),
                "indirect"    => __("Éviter les personnes", __FILE__),
                "fixedCenter" => __("Fixe centre", __FILE__),
                "fixedLeft"   => __("Fixe gauche", __FILE__),
                "fixedRight"  => __("Fixe droite", __FILE__),
                "far"         => __("Éloigné", __FILE__),
                "direct"      => __("En direction des personnes", __FILE__),
                "wide"        => __("Large", __FILE__),
                "mid"         => __("Intermédiaire", __FILE__),
                "spot"        => __("Zone", __FILE__),
                "swing"       => __("Oscillations", __FILE__)
            ],
            "groupMute" => [
                "unmuted" => __("Son activé", __FILE__),
                "muted"   => __("Son coupé", __FILE__)
            ],
            "groupRole" => [
                "ungrouped" => __("Sans groupe", __FILE__),
                "auxilary"  => __("Auxiliaire", __FILE__),
                "primary"   => __("Principal", __FILE__)
            ],
            "health" => [
                "ONLINE"  => __("EN LIGNE", __FILE__),
                "OFFLINE" => __("HORS LIGNE", __FILE__),
                "UNKNOWN" => __("INCONNU", __FILE__)
            ],
            "healthStatus" => [
                "offline" => __("Hors ligne", __FILE__),
                "online"  => __("En ligne", __FILE__)
            ],
            "hepaFilterStatus" => [
                "notused" => __("Non utilisé", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "humidifierMode" => [
                "auto"   => __("Auto", __FILE__),
                "high"   => __("Haute", __FILE__),
                "low"    => __("Faible", __FILE__),
                "medium" => __("Moyen", __FILE__)
            ],
            "inputSource" => [
                "digital"   => __("Numérique", __FILE__),
                "CD"        => __("CD", __FILE__),
                "wifi"      => __("Wi-Fi", __FILE__),
                "USB"       => __("USB", __FILE__),
                "aux"       => __("AUX", __FILE__),
                "FM"        => __("FM", __FILE__),
                "HDMI6"     => __("HDMI6", __FILE__),
                "HDMI4"     => __("HDMI4", __FILE__),
                "HDMI5"     => __("HDMI5", __FILE__),
                "AM"        => __("AM", __FILE__),
                "HDMI2"     => __("HDMI2", __FILE__),
                "HDMI3"     => __("HDMI3", __FILE__),
                "YouTube"   => __("YouTube", __FILE__),
                "HDMI1"     => __("HDMI1", __FILE__),
                "digitalTv" => __("TV numérique", __FILE__),
                "bluetooth" => __("Bluetooth", __FILE__),
                "HDMI"      => __("HDMI", __FILE__),
                "melon"     => __("melon", __FILE__)
            ],
            "jobBeginningStatus" => [
                "ReadyToRun" => __("Disponible", __FILE__),
                "None"       => __("Aucun", __FILE__)
            ],
            "lightingMode" => [
                "computer"         => __("Ordinateur", __FILE__),
                "sleepPreparation" => __("Sommeil", __FILE__),
                "cozy"             => __("Cosy", __FILE__),
                "writing"          => __("Écriture", __FILE__),
                "night"            => __("Nuit", __FILE__),
                "reading"          => __("Lecture", __FILE__),
                "day"              => __("Lumière du jour", __FILE__),
                "soft"             => __("Doux", __FILE__)
            ],
            "lock" => [
                "unlocked with timeout" => __("Déverrouillé avec expiration", __FILE__),
                "locked"                => __("Verrouillé", __FILE__),
                "unlocked"              => __("Déverrouillé", __FILE__),
                "unknown"               => __("Inconnu", __FILE__)
            ],
            "lockState" => [
                "paused"   => __("Pause", __FILE__),
                "locked"   => __("Verrouillé", __FILE__),
                "unlocked" => __("Déverrouillé", __FILE__)
            ],
            "machineState" => [
                "stop"    => __("Arrêt", __FILE__),
                "run"     => __("Marche", __FILE__),
                "pause"   => __("Pause", __FILE__),
                "running" => __("Fonctionnement", __FILE__),
                "paused"  => __("Mis en pause", __FILE__),
                "ready"   => __("Prêt", __FILE__)
            ],
            "motion" => [
                "inactive" => __("Aucun mouvement", __FILE__),
                "active"   => __("Mouvement détecté", __FILE__)
            ],
            "mute" => [
                "unmuted" => __("Son activé", __FILE__),
                "muted"   => __("Son coupé", __FILE__),
                "unknown" => __("Inconnu", __FILE__)
            ],
            "occupancy" => [
                "occupied"   => __("Occupé(e)", __FILE__),
                "unoccupied" => __("Inoccupé(e)", __FILE__)
            ],
            "outingMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "ovenMode" => [
                "Microwave"                     => __("Micro-onde", __FILE__),
                "SteamRoast"                    => __("Rôtissage vapeur", __FILE__),
                "Conventional"                  => __("Conventional", __FILE__),
                "BottomHeat"                    => __("Chaleur par le bas", __FILE__),
                "MWplusHotBlast2"               => __("Micro-onde + Air chaud 2", __FILE__),
                "SteamBake"                     => __("Cuisson vapeur", __FILE__),
                "heating"                       => __("Chauffage", __FILE__),
                "SlimStrong"                    => __("Fin épais", __FILE__),
                "MWplusHotBlast"                => __("Micro-onde + Air chaud", __FILE__),
                "Others"                        => __("Autres", __FILE__),
                "Bake"                          => __("Cuisson", __FILE__),
                "ConvectionBake"                => __("Cuisson par convection", __FILE__),
                "SteamBottomHeatplusConvection" => __("Vapeur par le bas + convection", __FILE__),
                "SteamCook"                     => __("Cuisson à la vapeur", __FILE__),
                "Dehydrate"                     => __("Déshydratation", __FILE__),
                "SlowCook"                      => __("Cuisson lente", __FILE__),
                "Broil"                         => __("Gril", __FILE__),
                "warming"                       => __("Réchauffage", __FILE__),
                "Proof"                         => __("Levage", __FILE__),
                "ConvectionBroil"               => __("Gril par convection", __FILE__),
                "MWplusGrill"                   => __("Micro-onde + Gril", __FILE__),
                "ConvectionRoast"               => __("Rôtissage par convection", __FILE__),
                "defrosting"                    => __("Décongélation", __FILE__),
                "grill"                         => __("Gril", __FILE__),
                "MWplusConvection"              => __("Micro-onde + Convection", __FILE__),
                "SlimMiddle"                    => __("Fin moyen", __FILE__)
            ],
            "ovenJobState" => [
                "cleaning"        => __("Nettoyage", __FILE__),
                "sensing"         => __("Détection", __FILE__),
                "stoneHeating"    => __("Chauffage en pierre natuelle", __FILE__),
                "fastPreheat"     => __("Préchauffage rapide", __FILE__),
                "scheduledEnd"    => __("Fin de programme", __FILE__),
                "finished"        => __("Fin", __FILE__),
                "searing"         => __("Griller", __FILE__),
                "preheat"         => __("Préchauffage", __FILE__),
                "rinsing"         => __("Rinçage", __FILE__),
                "ready"           => __("Prêt", __FILE__),
                "draining"        => __("Catalyse\/pyrolyse", __FILE__),
                "cooling"         => __("Refroidissement", __FILE__),
                "warming"         => __("Réchauffage", __FILE__),
                "timeHoldPreheat" => __("Maintien en préchauffage", __FILE__),
                "cooking"         => __("Cuisson", __FILE__),
                "defrosting"      => __("Décongélation", __FILE__),
                "scheduledStart"  => __("Début de programme", __FILE__)
            ],
            "panicAlarm" => [
                "clear" => __("Désactivée", __FILE__),
                "panic" => __("Panique", __FILE__)
            ],
            "periodicSensing" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "periodicSensingStatus" => [
                "nonprocessing" => __("Aucun traitement en cours", __FILE__),
                "processing"    => __("Traitement en cours", __FILE__)
            ],
            "pictureMode" => [
                "standard" => __("Standard", __FILE__),
                "movie"    => __("Film", __FILE__),
                "dynamic"  => __("Dynamique", __FILE__),
                "unknown"  => __("Inconnu", __FILE__)
            ],
            "playbackStatus" => [
                "play"            => __("Lecture", __FILE__),
                "paused"          => __("Mis en pause", __FILE__),
                "stopped"         => __("Arrêté", __FILE__),
                "stop"            => __("Arrêt", __FILE__),
                "rewind"          => __("Rembobinage", __FILE__),
                "rewinding"       => __("Rembobinage en cours", __FILE__),
                "playing"         => __("En lecture", __FILE__),
                "fast forwarding" => __("Avance rapide en cours", __FILE__),
                "fastForward"     => __("Avance rapide", __FILE__),
                "pause"           => __("Pause", __FILE__)
            ],
            "playbackRepeatMode" => [
                "all" => __("Tous", __FILE__),
                "one" => __("Une fois", __FILE__),
                "off" => __("Désactivé", __FILE__)
            ],
            "playbackShuffle" => [
                "disabled" => __("Désactivé", __FILE__),
                "enabled"  => __("Activé", __FILE__)
            ],
            "powerSource" => [
                "mains"   => __("Alimentation CA", __FILE__),
                "battery" => __("Batterie", __FILE__),
                "dc"      => __("Alimentation CC", __FILE__),
                "unknown" => __("Inconnu", __FILE__)
            ],
            "powerState" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "presence" => [
                "not present" => __("Parti", __FILE__),
                "present"     => __("Arrivé", __FILE__)
            ],
            "rapidCooling" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "rapidFreezing" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "remoteControlEnabled" => [
                "false" => __("Désactivé", __FILE__),
                "true"  => __("Activée", __FILE__)
            ],
            "reportStateRealtimePeriod" => [
                "disabled" => __("Désactivé", __FILE__),
                "enabled"  => __("Activé", __FILE__)
            ],
            "remainingAmount" => [
                "normal"  => __("normal", __FILE__),
                "less"    => __("less", __FILE__),
                "empty"   => __("empty", __FILE__),
                "unknown" => __("Inconnu", __FILE__)
            ],
            "reportStatePeriod" => [
                "disabled" => __("Désactivé", __FILE__),
                "enabled"  => __("Activé", __FILE__)
            ],
            "robotCleanerCleaningMode" => [
                "auto"   => __("Automatique", __FILE__),
                "stop"   => __("Arrêter", __FILE__),
                "part"   => __("Zone", __FILE__),
                "repeat" => __("Répétition", __FILE__),
                "manual" => __("Manuel", __FILE__),
                "map"    => __("Carte", __FILE__)
            ],
            "robotCleanerMovement" => [
                "cleaning" => __("Nettoyage", __FILE__),
                "idle"     => __("En veille", __FILE__),
                "powerOff" => __("Désactivé", __FILE__),
                "charging" => __("Chargement", __FILE__),
                "alarm"    => __("Erreur", __FILE__),
                "reserve"  => __("Programmé", __FILE__),
                "homing"   => __("Retour sur la station d'accueil", __FILE__),
                "after"    => __("Rechargement avant nettoyage", __FILE__),
                "point"    => __("Nettoyage ciblé", __FILE__),
                "pause"    => __("Pause", __FILE__)
            ],
            "robotCleanerTurboState" => [
                "turboSilence" => __("Turbo silencieux", __FILE__),
                "turboOff"     => __("Turbo désactivé", __FILE__),
                "turboOn"      => __("Turbo activé", __FILE__)
            ],
            "robotCleanerCleaningState" => [
                "cleaningPart"   => __("Nettoyage localisé", __FILE__),
                "cleaningManual" => __("Nettoyage manuel", __FILE__),
                "cleaningStop"   => __("Arrêt nettoyage", __FILE__),
                "cleaningRepeat" => __("Nettoyage répété", __FILE__),
                "cleaningAuto"   => __("Nettoyage automatique", __FILE__)
            ],
            "robotCleanerControlState" => [
                "controlPowerOff" => __("controlPowerOff", __FILE__),
                "controlCleaning" => __("controlCleaning", __FILE__),
                "controlAfter"    => __("controlAfter", __FILE__),
                "controlReserve"  => __("controlReserve", __FILE__),
                "controlAlarm"    => __("controlAlarm", __FILE__),
                "controlCharging" => __("controlCharging", __FILE__),
                "controlHoming"   => __("controlHoming", __FILE__),
                "controlPause"    => __("controlPause", __FILE__),
                "controlPoint"    => __("controlPoint", __FILE__),
                "controlIdle"     => __("controlIdle", __FILE__)
            ],
            "robotCleanerBatteryFullStatus" => [
                "notFull" => __("Batterie pas pleine", __FILE__),
                "full"    => __("Batterie pleine", __FILE__)
            ],
            "robotCleanerBehavior" => [
                "stop"    => __("Arrêt", __FILE__),
                "left"    => __("Gauche", __FILE__),
                "forward" => __("Avancer", __FILE__),
                "right"   => __("Droite", __FILE__)
            ],
            "robotCleanerEnergyMonitorSupport" => [
                "enable"  => __("enable", __FILE__),
                "disable" => __("disable", __FILE__)
            ],
            "robotCleanerHistorySupport" => [
                "enable"  => __("Activer", __FILE__),
                "disable" => __("Désactiver", __FILE__)
            ],
            "robotCleanerHrmSupport" => [
                "homecareWizardV2" => __("homecareWizardV2", __FILE__)
            ],
            "robotCleanerRepeatCleanOption" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "robotCleanerRepeatCleanSupport" => [
                "enable"  => __("Activer", __FILE__),
                "disable" => __("Désactiver", __FILE__)
            ],
            "robotCleanerReserveCleanType" => [
                "a" => __("a", __FILE__),
                "b" => __("b", __FILE__)
            ],
            "robotCleanerSmartControl" => [
                "accessLock"   => __("Verrouillé", __FILE__),
                "accessUnlock" => __("Déverrouillé", __FILE__)
            ],
            "robotCleanerSmartTurboMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "robotCleanerSoundSet" => [
                "voiceM"      => __("Voix masculine", __FILE__),
                "starWars"    => __("Star Wars", __FILE__),
                "soundEffect" => __("Effet sonore", __FILE__),
                "mute"        => __("Silencieux", __FILE__),
                "voiceW"      => __("Voix feminine", __FILE__),
                "voiceFeed"   => __("VoiceFeed", __FILE__)
            ],
            "robotCleanerSuctionType" => [
                "a" => __("a", __FILE__),
                "b" => __("b", __FILE__),
                "c" => __("c", __FILE__),
                "d" => __("d", __FILE__)
            ],
            "supportsPowerOnByOcf" => [
                "true"  => __("Vrai", __FILE__),
                "false" => __("Faux", __FILE__)
            ],
            "securitySystemStatus" => [
                "disarmed"  => __("Désactivé", __FILE__),
                "armedStay" => __("Activé (présent)", __FILE__),
                "armedAway" => __("Activé (absent)", __FILE__)
            ],
            "sleeping" => [
                "not sleeping" => __("Allumé", __FILE__),
                "sleeping"     => __("Veille", __FILE__)
            ],
            "smoke" => [
                "tested"   => __("Testée", __FILE__),
                "clear"    => __("Absente", __FILE__),
                "detected" => __("Détectée", __FILE__)
            ],
            "soundDetectionState" => [
                "disabled" => __("Désactivé", __FILE__),
                "enabled"  => __("Activé", __FILE__)
            ],
            "soundDetected" => [
                "dogBarking"    => __("Aboiement de chien détecté", __FILE__),
                "noSound"       => __("Aucune", __FILE__),
                "catMeowing"    => __("Miaulement de chat détecté", __FILE__),
                "doorKnocking"  => __("Frappement à la porte détecté", __FILE__),
                "babyCrying"    => __("Bébé en train de pleurer", __FILE__),
                "glassBreaking" => __("Bris de verre", __FILE__),
                "fireAlarm"     => __("Alarme incendie", __FILE__)
            ],
            "sound" => [
                "not detected" => __("Aucun son", __FILE__),
                "detected"     => __("Son détecté", __FILE__)
            ],
            "searchingStatus" => [
                "stopByServer" => __("Arrêté par le serveur", __FILE__),
                "stop"         => __("Arrêt", __FILE__),
                "searching"    => __("En cours de recherche", __FILE__),
                "spotted"      => __("Trouvé", __FILE__)
            ],
            "soundMode" => [
                "standard"    => __("Standard", __FILE__),
                "music"       => __("Musique", __FILE__),
                "movie"       => __("Film", __FILE__),
                "clear voice" => __("Voix claire", __FILE__),
                "unknown"     => __("Inconnu", __FILE__)
            ],
            "switch" => [
                "off"    => __("Désactivé", __FILE__),
                "on"     => __("Activé", __FILE__)
            ],
            "softenerType" => [
                "liquid"  => __("Liquide", __FILE__),
                "none"    => __("Aucun", __FILE__),
                "unknown" => __("Inconnu", __FILE__)
            ],
            "spiMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "start" => [
                "Microwave"                     => __("Micro-onde", __FILE__),
                "SteamRoast"                    => __("Rôtissage vapeur", __FILE__),
                "Conventional"                  => __("Conventional", __FILE__),
                "BottomHeat"                    => __("Chaleur par le bas", __FILE__),
                "MWplusHotBlast2"               => __("Micro-onde + Air chaud 2", __FILE__),
                "SteamBake"                     => __("Cuisson vapeur", __FILE__),
                "heating"                       => __("Chauffage", __FILE__),
                "SlimStrong"                    => __("Fin épais", __FILE__),
                "MWplusHotBlast"                => __("Micro-onde + Air chaud", __FILE__),
                "Others"                        => __("Autres", __FILE__),
                "Bake"                          => __("Cuisson", __FILE__),
                "ConvectionBake"                => __("Cuisson par convection", __FILE__),
                "SteamBottomHeatplusConvection" => __("Vapeur par le bas + convection", __FILE__),
                "SteamCook"                     => __("Cuisson à la vapeur", __FILE__),
                "Dehydrate"                     => __("Déshydratation", __FILE__),
                "SlowCook"                      => __("Cuisson lente", __FILE__),
                "Broil"                         => __("Gril", __FILE__),
                "warming"                       => __("Réchauffage", __FILE__),
                "Proof"                         => __("Levage", __FILE__),
                "ConvectionBroil"               => __("Gril par convection", __FILE__),
                "MWplusGrill"                   => __("Micro-onde + Gril", __FILE__),
                "ConvectionRoast"               => __("Rôtissage par convection", __FILE__),
                "defrosting"                    => __("Décongélation", __FILE__),
                "grill"                         => __("Gril", __FILE__),
                "MWplusConvection"              => __("Micro-onde + Convection", __FILE__),
                "SlimMiddle"                    => __("Fin moyen", __FILE__)
            ],
            "status" => [
                "pause" => __("Pause", __FILE__),
                "play"  => __("Lecture", __FILE__),
                "stop"  => __("Arrêt", __FILE__),
                "off"   => __("Désactivé", __FILE__),
                "on"    => __("Activé", __FILE__)
            ],
            "steamClosetCourse" => [
                "standard"         => __("Standard", __FILE__),
                "sensorDry"        => __("Séchage automatique", __FILE__),
                "denim"            => __("Denim", __FILE__),
                "quick"            => __("Rapide", __FILE__),
                "wool"             => __("Laine", __FILE__),
                "babywearSanitize" => __("Vêtements de bébés/désinfecter", __FILE__),
                "roomCare2hr"      => __("Entretien (pièce) 2 h", __FILE__),
                "timeDry2hr"       => __("Séchage programmé 2 h", __FILE__),
                "timeDry3hr"       => __("Séchage programmé 3 h", __FILE__),
                "roomCare4hr"      => __("Entretien (pièce) 4 h", __FILE__),
                "timeDry1hr"       => __("Séchage programmé 1 h", __FILE__),
                "suits"            => __("Costumes", __FILE__),
                "winterCoat"       => __("Manteau d'hiver", __FILE__),
                "dollSanitize"     => __("Poupée/désinfecter", __FILE__),
                "dustFree"         => __("Dépoussièrage", __FILE__),
                "schoolWear"       => __("Uniforme scolaire", __FILE__),
                "blouse"           => __("Chemisiers", __FILE__),
                "paddedJacket"     => __("Veste rembourrée", __FILE__),
                "accessories"      => __("Accessoires", __FILE__),
                "paddedDry"        => __("Rebourrage/Sec", __FILE__),
                "beddingSanitize"  => __("Literie/désinfecter", __FILE__),
                "outdoor"          => __("Extérieur", __FILE__),
                "furLeather"       => __("Fourrure/cuir", __FILE__),
                "heavyDuty"        => __("Usage intensif", __FILE__),
                "selfClean"        => __("Auto-nettoyant", __FILE__),
                "suit"             => __("Costume", __FILE__),
                "sanitize"         => __("Désinfecter", __FILE__)
            ],
            "steamClosetMachineState" => [
                "stop"  => __("Arrêté", __FILE__),
                "run"   => __("Démarré", __FILE__),
                "pause" => __("En pause", __FILE__)
            ],
            "steamClosetJobState" => [
                "sterilizing"   => __("Désinfection en cours", __FILE__),
                "drying"        => __("Séchage en cours", __FILE__),
                "airwashing"    => __("Nettoyage à l'air en cours", __FILE__),
                "finish"        => __("Finition", __FILE__),
                "none"          => __("Aucun", __FILE__),
                "delaywash"     => __("Lavage différé", __FILE__),
                "keepFresh"     => __("Préservation de la fraîcheur", __FILE__),
                "dehumidifying" => __("Déshumidification en cours", __FILE__),
                "steaming"      => __("Application de vapeur en cours", __FILE__)
            ],
            "steamClosetSilentMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "steamClosetWrinklePrevent" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "supportedMachineStates" => [
                "ready"   => __("Prêt", __FILE__),
                "running" => __("Fonctionnement", __FILE__),
                "paused"  => __("Mis en pause", __FILE__)
            ],
            "tagButton" => [
                "pushed_2x" => __("Appuyer deux fois sur la touche", __FILE__),
                "held"      => __("Maintenue appuyée", __FILE__),
                "pushed_3x" => __("Appuyer trois fois sur la touche", __FILE__),
                "pushed"    => __("Appuyée", __FILE__)
            ],
            "tagStatus" => [
                "connected"       => __("Lieux proches", __FILE__),
                "disconnected"    => __("Pas à proximité de vous", __FILE__),
                "found"           => __("Trouvé", __FILE__),
                "lost"            => __("Perdu", __FILE__),
                "d2dConnected"    => __("Connecté", __FILE__),
                "d2dScanned"      => __("Lieux proches", __FILE__),
                "d2dDisconnected" => __("Pas à proximité de vous", __FILE__)
            ],
            "tamper" => [
                "clear"    => __("Non trafiqué", __FILE__),
                "detected" => __("Trafiqué", __FILE__)
            ],
            "temperatureAlarm" => [
                "heat"       => __("Chaleur", __FILE__),
                "freeze"     => __("Gel", __FILE__),
                "rateOfRise" => __("Taux d'augmentation", __FILE__),
                "cleared"    => __("Désactivée", __FILE__)
            ],
            "thermostatOperatingState" => [
                "idle"            => __("Inactif", __FILE__),
                "pending heat"    => __("Chauffage en cours", __FILE__),
                "vent economizer" => __("Economie de ventilation", __FILE__),
                "cooling"         => __("Refroidissement", __FILE__),
                "pending cool"    => __("Refroidissement en cours", __FILE__),
                "fan only"        => __("Ventilation uniquement", __FILE__),
                "heating"         => __("Chauffage", __FILE__)
            ],
            "thermostatFanMode" => [
                "followschedule" => __("Suivre le programme", __FILE__),
                "auto"           => __("Automatique", __FILE__),
                "circulate"      => __("Circulation", __FILE__),
                "on"             => __("Activé", __FILE__)
            ],
            "thermostatMode" => [
                "heat"                   => __("Chaleur", __FILE__),
                "autowithreset"          => __("Automatique + reset", __FILE__),
                "autochangeoveractive"   => __("Permutation automatique activée", __FILE__),
                "auto"                   => __("Automatique", __FILE__),
                "away"                   => __("Parti", __FILE__),
                "furnace"                => __("Air chaud", __FILE__),
                "auxiliaryemergencyheat" => __("Chauffage d'appoint d'urgence", __FILE__),
                "moistair"               => __("Air humide", __FILE__),
                "manual"                 => __("Manuel", __FILE__),
                "out"                    => __("Sortie", __FILE__),
                "eco"                    => __("Éco", __FILE__),
                "energysavecool"         => __("Froid économiseur d'énergie", __FILE__),
                "autoheat"               => __("Chaud auto", __FILE__),
                "rush hour"              => __("rush hour", __FILE__), // à traduire
                "auxheatonly"            => __("Chauffage d'appoint uniquement", __FILE__),
                "rushhour"               => __("rushhour", __FILE__),
                "asleep"                 => __("Endormi", __FILE__),
                "emergencyheat"          => __("Chaleur d'urgence", __FILE__),
                "heatingoff"             => __("Chauffage éteint", __FILE__),
                "dryair"                 => __("Air sec", __FILE__),
                "emergencyheatactive"    => __("Chaleur d'urgence active", __FILE__),
                "autowitheco"            => __("Auto + éco", __FILE__),
                "resume"                 => __("Reprendre", __FILE__),
                "emergency heat"         => __("Chaleur urgente", __FILE__),
                "in"                     => __("Rentré", __FILE__),
                "cool"                   => __("Froid", __FILE__),
                "custom"                 => __("Personalisé", __FILE__),
                "dayoff"                 => __("Congés", __FILE__),
                "energysaveheat"         => __("Chaud économiseur d'énergie", __FILE__),
                "off"                    => __("Désactivé", __FILE__),
                "home"                   => __("Maison", __FILE__),
                "autocool"               => __("Froid auto", __FILE__),
                "schedule"               => __("Programme", __FILE__),
                "fanonly"                => __("Ventilateur", __FILE__),
                "autochangeover"         => __("Permutation automatique", __FILE__),
                "frostguard"             => __("Hors gel", __FILE__),
                "southernaway"           => __("southernaway", __FILE__) // à traduire
            ],
            "type" => [
                "oven"      => __("Four", __FILE__),
                "range"     => __("Cuisinière", __FILE__),
                "cooktop"   => __("Plaque de cuisson", __FILE__),
                "microwave" => __("Micro-onde", __FILE__),
            ],
            "uwbActivation" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "valve" => [
                "closed" => __("Fermée", __FILE__),
                "open"   => __("Ouverte", __FILE__)
            ],
            "veryFineDustFilterStatus" => [
                "notused" => __("Bon état", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "virusDoctorMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "washerAutoDetergent" => [
                "notSupported" => __("Non supporté", __FILE__),
                "notUsed"      => __("Non utilisé", __FILE__),
                "off"          => __("Désactivé", __FILE__),
                "on"           => __("Activé", __FILE__)
            ],
            "washerAutoSoftener" => [
                "notSupported" => __("Non supporté", __FILE__),
                "notUsed"      => __("Non utilisé", __FILE__),
                "off"          => __("Désactivé", __FILE__),
                "on"           => __("Activé", __FILE__)
            ],
            "washerRinseCycles" => [
                "0" => __("0", __FILE__),
                "1" => __("1", __FILE__),
                "2" => __("2", __FILE__),
                "3" => __("3", __FILE__),
                "4" => __("4", __FILE__),
                "5" => __("5", __FILE__)
            ],
            "washerSoilLevel" => [
                "normal"     => __("Normal", __FILE__),
                "extraLight" => __("Très peu sale", __FILE__),
                "light"      => __("Peu sale", __FILE__),
                "none"       => __("Aucun", __FILE__),
                "up"         => __("Augmenter", __FILE__),
                "down"       => __("Diminuer", __FILE__),
                "heavy"      => __("Très sale", __FILE__),
                "extraHeavy" => __("Extrèmement sale", __FILE__)
            ],
            "washerSpinLevel" => [
                "delicate"  => __("Délicat", __FILE__),
                "1000"      => __("1000", __FILE__),
                "none"      => __("none", __FILE__),
                "medium"    => __("Moyen", __FILE__),
                "extraLow"  => __("Très faible", __FILE__),
                "high"      => __("Élevé", __FILE__),
                "200"       => __("200", __FILE__),
                "1600"      => __("1600", __FILE__),
                "extraHigh" => __("Très élévé", __FILE__),
                "400"       => __("400", __FILE__),
                "1400"      => __("1400", __FILE__),
                "low"       => __("Faible", __FILE__),
                "600"       => __("600", __FILE__),
                "1200"      => __("1200", __FILE__),
                "800"       => __("800", __FILE__),
                "rinseHold" => __("Arrêt cuve pleine", __FILE__),
                "noSpin"    => __("Sans essorage", __FILE__)
            ],
            "washerWaterTemperature" => [
                "tapCold"   => __("Eau froide", __FILE__),
                "semiHot"   => __("Tiède", __FILE__),
                "cold"      => __("Froide", __FILE__),
                "none"      => __("Aucune", __FILE__),
                "medium"    => __("Moyenne", __FILE__),
                "hot"       => __("Chaud", __FILE__),
                "extraLow"  => __("Très froid", __FILE__),
                "high"      => __("Élevée", __FILE__),
                "low"       => __("Basse", __FILE__),
                "90"        => __("90", __FILE__),
                "70"        => __("70", __FILE__),
                "50"        => __("50", __FILE__),
                "95"        => __("95", __FILE__),
                "30"        => __("30", __FILE__),
                "75"        => __("75", __FILE__),
                "mediumLow" => __("Froid à tiède", __FILE__),
                "cool"      => __("Frais", __FILE__),
                "warm"      => __("Chaud", __FILE__),
                "extraHot"  => __("Très chaud", __FILE__),
                "80"        => __("80", __FILE__),
                "60"        => __("60", __FILE__),
                "40"        => __("40", __FILE__),
                "ecoWarm"   => __("Chaud éco", __FILE__),
                "20"        => __("20", __FILE__),
                "65"        => __("65", __FILE__)
            ],
            "waterFilterStatus" => [
                "notused" => __("Non utilisé", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "welcomeCareMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "waterLevel" => [
                "11"        => __("11", __FILE__),
                "12"        => __("12", __FILE__),
                "13"        => __("13", __FILE__),
                "14"        => __("14", __FILE__),
                "15"        => __("15", __FILE__),
                "noDisplay" => __("Aucun affichage", __FILE__),
                "0"         => __("0", __FILE__),
                "1"         => __("1", __FILE__),
                "2"         => __("2", __FILE__),
                "3"         => __("3", __FILE__),
                "4"         => __("4", __FILE__),
                "5"         => __("5", __FILE__),
                "6"         => __("6", __FILE__),
                "7"         => __("7", __FILE__),
                "8"         => __("8", __FILE__),
                "9"         => __("9", __FILE__),
                "10"        => __("10", __FILE__)
            ],
            "waterValve" => [
                "warm" => __("Tiède", __FILE__),
                "cold" => __("Froid", __FILE__),
                "hot"  => __("Chaud", __FILE__)
            ],
            "washerJobState" => [
                "aIRinse"        => __("IA rinçage", __FILE__),
                "weightSensing"  => __("Détection de poids", __FILE__),
                "wash"           => __("Lavage", __FILE__),
                "wrinklePrevent" => __("Traitement anti-traces", __FILE__),
                "delayWash"      => __("Lavage différé", __FILE__),
                "none"           => __("Aucun", __FILE__),
                "airWash"        => __("Lavage à l'air", __FILE__),
                "aIWash"         => __("IA lavage", __FILE__),
                "drying"         => __("Séchage", __FILE__),
                "spin"           => __("Essorage", __FILE__),
                "aISpin"         => __("IA essorage", __FILE__),
                "cooling"        => __("Refroidissement", __FILE__),
                "preWash"        => __("Prélavage", __FILE__),
                "finish"         => __("Fin", __FILE__),
                "rinse"          => __("Rinçage", __FILE__)
            ],
            "water" => [
                "wet" => __("Humide", __FILE__),
                "dry" => __("Sec", __FILE__)
            ],
            "wifiGuestNetworkStatus" => [
                "disabled"       => __("Désactivé", __FILE__),
                "not configured" => __("Non configuré", __FILE__),
                "enabled"        => __("Activé", __FILE__)
            ],
            "wifiNetworkStatus" => [
                "disabled"       => __("Désactivé", __FILE__),
                "not configured" => __("Non configuré", __FILE__),
                "enabled"        => __("Activé", __FILE__)
            ],
            "windowShade" => [
                "closing"        => __("Fermeture…", __FILE__),
                "partially open" => __("Partiellement ouvert(e)", __FILE__),
                "closed"         => __("Fermée", __FILE__),
                "opening"        => __("Ouverture…", __FILE__),
                "open"           => __("Ouverte", __FILE__),
                "unknown"        => __("Inconnu", __FILE__)
            ],
            "wirelessOperatingMode" => [
                "whenNeeded" => __("Si nécessaire", __FILE__),
                "alwaysOn"   => __("Toujours activé", __FILE__)
            ]
        ];

        $this->cmdName = [
            "accelerationSensor" => [
                "acceleration" => __("Vibration", __FILE__)
            ],
            "activityLightingMode" => [
                "lightingMode"    => __("Mode d'éclairage", __FILE__),
                "setLightingMode" => __("Changer le mode d'éclairage", __FILE__)
            ],
            "activitySensor" => [
                "activity" => __("Activité", __FILE__)
            ],
            "airConditionerFanMode" => [
                "fanMode"             => __("Mode de ventilation du climatiseur", __FILE__),
                "supportedAcFanModes" => __("Modes de ventilation du climatiseur pris en charge", __FILE__),
                "setFanMode"          => __("Changer le mode de ventilation du climatiseur", __FILE__)
            ],
            "airConditionerMode" => [
                "supportedAcModes"      => __("Modes du climatiseur pris en charge", __FILE__),
                "setAirConditionerMode" => __("Changer le mode du climatiseur", __FILE__),
                "airConditionerMode"    => __("Mode du climatiseur", __FILE__)
            ],
            "airFlowDirection" => [
                "airFlowDirection"    => __("Direction du flux d'air", __FILE__),
                "setAirFlowDirection" => __("Changer la direction du flux d'air", __FILE__)
            ],
            "airPurifierFanMode" => [
                "supportedAirPurifierFanModes" => __("Modes de ventilation pris en charge", __FILE__),
                "airPurifierFanMode"           => __("Mode de ventilation", __FILE__),
                "setAirPurifierFanMode"        => __("Changer le mode de ventilation", __FILE__)
            ],
            "airQuality" => [
                "airQualityIndex" => __("Indice de qualité de l'air", __FILE__),
                "expirationTime"  => __("Date d'expiration", __FILE__),
                "no2Amount"       => __("Quantité de dioxyde d'azote", __FILE__),
                "no2Index"        => __("Indice de dioxyde d'azote", __FILE__),
                "o3Amount"        => __("Quantité d'ozone", __FILE__),
                "o3Index"         => __("Indice d'ozone", __FILE__),
                "so2Amount"       => __("Quantité de dioxyde de soufre", __FILE__),
                "so2Index"        => __("Indice de dioxyde de soufre", __FILE__),
                "coAmount"        => __("Quantité de monoxyde de carbone", __FILE__),
                "coIndex"         => __("Indice de monoxyde de carbone", __FILE__),
                "pm10Amount"      => __("Quantité de particules en suspension de moins de 10 microns", __FILE__),
                "pm10Index"       => __("Indice de particules en suspension de moins de 10 microns", __FILE__),
                "pm25Amount"      => __("Quantité de particules en suspension de moins de 25 microns", __FILE__),
                "pm25Index"       => __("Indice de particules en suspension de moins de 25 microns", __FILE__),
                "lastUpdateTime"  => __("Qualité de l'air : Date de dernière mise à jour", __FILE__)
            ],
            "airQualitySensor" => [
                "airQuality" => __("Qualité de l'air", __FILE__)
            ],
            "alarm" => [
                "alarm"  => __("Type d'alarme", __FILE__),
                "siren"  => __("Alarme : Sirène", __FILE__),
                "strobe" => __("Alarme : Clignotement", __FILE__),
                "off"    => __("Désactiver l'alarme", __FILE__),
                "both"   => __("Alarme : Sirène + clignotement", __FILE__)
            ],
            "atmosphericPressureMeasurement" => [
                "atmosphericPressure" => __("Pression atmosphérique", __FILE__)
            ],
            "audioMute" => [
                "mute"           => __("Désactivation du son", __FILE__),
                "setMutemuted"   => __("Désactiver le son", __FILE__),
                "setMuteunmuted" => __("Activer le son", __FILE__),
                "mute::"         => __("Couper le son", __FILE__),
                "unmute"         => __("Remettre le son", __FILE__)
            ],
            "audioStream" => [
                "uri"        => __("URI", __FILE__),
                "startAudio" => __("Démarrer le flux audio", __FILE__),
                "stopAudio"  => __("Arrêter le flux audio", __FILE__)
            ],
            "audioTrackData" => [
                "totalTime"      => __("Temps total", __FILE__),
                "audioTrackData" => __("Données de piste audio", __FILE__),
                "elapsedTime"    => __("Temps écoulé", __FILE__)
            ],
            "audioTrackAddressing" => [
                "setAudioTrack"    => __("Changer l'adressage d'une piste audio", __FILE__)
            ],
            "audioVolume" => [
                "volume"     => __("Volume", __FILE__),
                "volumeDown" => __("Volume -", __FILE__),
                "volumeUp"   => __("Volume +", __FILE__),
                "setVolume"  => __("Changer le volume", __FILE__)
            ],
            "battery" => [
                "battery" => __("Batterie", __FILE__)
            ],
            "bodyMassIndexMeasurement" => [
                "bmiMeasurement" => __("Indice de masse corporelle", __FILE__)
            ],
            "bodyWeightMeasurement" => [
                "bodyWeightMeasurement" => __("Poids corporel", __FILE__)
            ],
            "bufferedVideoCapture" => [
                "clip"    => __("Clip", __FILE__),
                "capture" => __("Démarrer enregistrement", __FILE__)
            ],
            "button" => [
                "button"                => __("Bouton", __FILE__),
                "numberOfButtons"       => __("Nombre de boutons", __FILE__),
                "supportedButtonValues" => __("Valeurs de boutons pris en charge", __FILE__)
            ],
            "bypassable" => [
                "bypassStatus" => __("Statut de contournement", __FILE__)
            ],
            "carbonDioxideMeasurement" => [
                "carbonDioxide" => __("Niveau de dioxyde de carbone", __FILE__)
            ],
            "carbonMonoxideDetector" => [
                "carbonMonoxide" => __("Monoxyde de carbone", __FILE__)
            ],
            "carbonMonoxideMeasurement" => [
                "carbonMonoxideLevel" => __("Niveau de monoxyde de carbone", __FILE__)
            ],
            "category" => [
                "id" => __("Catégorie", __FILE__)
            ],
            "chime" => [
                "chime"   => __("Sonner", __FILE__),
                "off"     => __("Désctiver la sonnerie", __FILE__),
                "chime::" => __("Activer la sonnerie", __FILE__)
            ],
            "color" => [
                "colorValue"    => __("Variateur de couleur", __FILE__),
                "setColorValue" => __("Faire varier la couleur", __FILE__)
            ],
            "colorControl" => [
                "saturation"    => __("Saturation", __FILE__),
                "color"         => __("Couleur", __FILE__),
                "hue"           => __("Nuance", __FILE__),
                "setColor"      => __("Changer la couleur", __FILE__),
                "setHue"        => __("Changer la nuance", __FILE__),
                "setSaturation" => __("Changer la saturation", __FILE__)
            ],
            "colorTemperature" => [
                "colorTemperature"    => __("Température de couleur", __FILE__),
                "setColorTemperature" => __("Changer la température de couleur", __FILE__)
            ],
            "consumable" => [
                "consumableStatus"    => __("Statut des consommables", __FILE__),
                "setConsumableStatus" => __("Changer le statut des consommables", __FILE__)
            ],
            "contactSensor" => [
                "contact" => __("Contact", __FILE__)
            ],
            "coordinate" => [
                "city" => __("Ville", __FILE__)
            ],
            "custom.airConditionerOdorController" => [
                "airConditionerOdorControllerProgress"    => __("Progression du contrôleur d'odeur du climatiseur", __FILE__),
                "airConditionerOdorControllerState"       => __("Statut du contrôleur d'odeur du climatiseur", __FILE__),
                "setAirConditionerOdorControllerStateoff" => __("Désactiver le statut du contrôleur d'odeur du climatiseur", __FILE__),
                "setAirConditionerOdorControllerStateon"  => __("Activer le statut du contrôleur d'odeur du climatiseur", __FILE__)
            ],
            "custom.airConditionerOptionalMode" => [
                "supportedAcOptionalMode" => __("Fonctions de refroidissement prises en charge", __FILE__),
                "setAcOptionalMode"       => __("Changer la fonction de refroidissement", __FILE__),
                "acOptionalMode"          => __("Fonction de refroidissement", __FILE__)
            ],
            "custom.airConditionerTropicalNightMode" => [
                "setAcTropicalNightModeLevel" => __("Changer le niveau du mode de nuit tropicale", __FILE__),
                "acTropicalNightModeLevel"    => __("Mode de nuit tropicale", __FILE__)
            ],
            "custom.airPurifierOperationMode" => [
                "apOperationMode"          => __("Mode de fonctionnement du purificateur d'air", __FILE__),
                "supportedApOperationMode" => __("Modes de fonctionnement du purificateur d'air pris en charge", __FILE__),
                "setApOperationMode"       => __("Changer le mode de fonctionnement du purificateur d'air", __FILE__)
            ],
            "custom.airQualityMaxLevel" => [
                "airQualityMaxLevel" => __("Niveau maximum de qualité d'air", __FILE__)
            ],
            "custom.autoCleaningMode" => [
                "autoCleaningMode"    => __("Mode de purification automatique", __FILE__),
                "setAutoCleaningMode" => __("Changer le mode de purification automatique", __FILE__)
            ],
            "custom.deodorFilter" => [
                "deodorFilterCapacity"      => __("Capacité du filtre désodorisant", __FILE__),
                "deodorFilterLastResetDate" => __("Dernière réinitialisation du filtre désodorisant", __FILE__),
                "deodorFilterResetType"     => __("Type de réinitialisation du filtre désodorisant", __FILE__),
                "deodorFilterStatus"        => __("État du filtre désodorisant", __FILE__),
                "deodorFilterUsage"         => __("Utilisation du filtre désodorisant", __FILE__),
                "deodorFilterUsageStep"     => __("Niveau d'utilisation du filtre désodorisant", __FILE__),
                "resetDeodorFilter"         => __("Réinitialiser le filtre désodorisant", __FILE__)
            ],
            "custom.deviceDependencyStatus" => [
                "subDeviceActive"    => __("Déport actif", __FILE__),
                "dependencyStatus"   => __("Statut des dépandances", __FILE__),
                "numberOfSubDevices" => __("Nombre de déports", __FILE__)
            ],
            "custom.deviceInfo" => [
                "deviceType"   => __("Type d'appareil", __FILE__),
                "serialNumber" => __("Numéro de série", __FILE__),
                "modelNumber"  => __("Numéro de modèle", __FILE__)
            ],
            "custom.deviceReportStateConfiguration" => [
                "reportStateRealtimePeriod"            => __("Intervalle du rapport d'état", __FILE__),
                "reportStateRealtime"                  => __("Durée de l'intervalle du rapport d'état", __FILE__),
                "reportStatePeriod"                    => __("Remontée du rapport d'état", __FILE__),
                "setReportStateRealtimePerioddisabled" => __("Désactiver la période en temps réel du rapport d'état", __FILE__),
                "setReportStateRealtimePeriodenabled"  => __("Activer la période en temps réel du rapport d'état", __FILE__),
                "setReportStatePerioddisabled"         => __("Désactiver la période du rapport d'état", __FILE__),
                "setReportStatePeriodenabled"          => __("Activer la période du rapport d'état", __FILE__),
                "setReportStateRealtime"               => __("Définir le rapport d'état en temps réel", __FILE__)
            ],
            "custom.disabledCapabilities" => [
                "disabledCapabilities" => __("Capacités désactivées", __FILE__)
            ],
            "custom.disabledComponents" => [
                "disabledComponents" => __("Éléments désactivés", __FILE__)
            ],
            "custom.dishwasherDelayStartTime" => [
                "dishwasherDelayStartTime"    => __("Heure de départ différé", __FILE__),
                "setDishwasherDelayStartTime" => __("Changer l'heure de départ différé", __FILE__)
            ],
            "custom.dishwasherDiagnosis" => [
                "dishwasherDiagnosis"    => __("Diagnostique", __FILE__),
                "setDishwasherDiagnosis" => __("Établir un diagnostique", __FILE__)
            ],
            "custom.dishwasherHighTempDry" => [
                "dishwasherHighTempDry"       => __("Séchage à haute température", __FILE__),
                "setDishwasherHighTempDryon"  => __("Activer le séchage à haute température", __FILE__),
                "setDishwasherHighTempDryoff" => __("Désactiver le séchage à haute température", __FILE__)
            ],
            "custom.dishwasherKidsLock" => [
                "dishwasherKidsLock" => __("Sécurité enfants", __FILE__)
            ],
            "custom.dishwasherOperatingPercentage" => [
                "dishwasherOperatingPercentage" => __("Pourcentage de fonctionnement", __FILE__)
            ],
            "custom.dishwasherOperatingProgress" => [
                "dishwasherOperatingProgress" => __("Progression de fonctionnement", __FILE__)
            ],
            "custom.dishwasherOperatingSuppProgress" => [
                "dishwasherOperatingSuppProgress" => __("Progression additionnelle de fonctionnement", __FILE__)
            ],
            "custom.dishwasherSanitize" => [
                "dishwasherSanitize"       => __("Désinfecter", __FILE__),
                "setDishwasherSanitizeon"  => __("Activer la désinfection", __FILE__),
                "setDishwasherSanitizeoff" => __("Désactiver la désinfection", __FILE__)
            ],
            "custom.dishwasherSelectedZone" => [
                "dishwasherSelectedZone"    => __("Zone selectionnée", __FILE__),
                "setDishwasherSelectedZone" => __("Changer la zone selectionnée", __FILE__)
            ],
            "custom.dishwasherSpeedBooster" => [
                "dishwasherSpeedBooster"       => __("Vitesse accélérée", __FILE__),
                "setDishwasherSpeedBoosteron"  => __("Activer la vitesse accélérée", __FILE__),
                "setDishwasherSpeedBoosteroff" => __("Désactiver la vitesse accélérée", __FILE__)
            ],
            "custom.dishwasherSuppHighTempDry" => [
                "dishwasherSuppHighTempDry" => __("Séchage additionnel à haute température", __FILE__)
            ],
            "custom.dishwasherSuppOptions" => [
                "dishwasherSuppOptions" => __("Options additionelles", __FILE__)
            ],
            "custom.dishwasherSuppSanitize" => [
                "dishwasherSuppSanitize" => __("Désinfection additionnelle", __FILE__)
            ],
            "custom.dishwasherSuppSelectedZone" => [
                "dishwasherSuppSelectedZone" => __("Zone selectionnée additionnel", __FILE__)
            ],
            "custom.dishwasherSuppSpeedBooster" => [
                "dishwasherSuppSpeedBooster" => __("Vitesse accélérée additionnel", __FILE__)
            ],
            "custom.dishwasherSuppZoneBooster" => [
                "dishwasherSuppZoneBooster" => __("Zone additionnelle accélérée", __FILE__)
            ],
            "custom.dishwasherZoneBooster" => [
                "dishwasherZoneBooster"    => __("Zone accélérée", __FILE__),
                "setDishwasherZoneBooster" => __("Définir la zone accélérée", __FILE__)
            ],
            "custom.doNotDisturbMode" => [
                "doNotDisturb"        => __("Ne pas déranger", __FILE__),
                "startTime"           => __("Heure de début", __FILE__),
                "endTime"             => __("Heure de fin", __FILE__),
                "setDoNotDisturbMode" => __("Planifier le mode Ne pas déranger", __FILE__),
                "doNotDisturbOff"     => __("Activer Ne pas déranger", __FILE__),
                "doNotDisturbOn"      => __("Désactiver Ne pas déranger", __FILE__)
            ],
            "custom.dryerDryLevel" => [
                "dryerDryLevel"          => __("Vitesse de séchage", __FILE__),
                "supportedDryerDryLevel" => __("Vitesses de séchage prise en charge", __FILE__),
                "setDryerDryLevel"       => __("Changer la vitesse de séchage", __FILE__)
            ],
            "custom.dryerWrinklePrevent" => [
                "dryerWrinklePrevent"       => __("Prévention des faux-plis", __FILE__),
                "setDryerWrinklePreventoff" => __("Désactiver la prévention des faux-plis", __FILE__),
                "setDryerWrinklePreventon"  => __("Activer la prévention des faux-plis", __FILE__)
            ],
            "custom.dthVersion" => [
                "versionNumber" => __("Numéro de version DTH", __FILE__)
            ],
            "custom.dustFilter" => [
                "dustFilterCapacity"      => __("Capacité du filtre à poussière", __FILE__),
                "dustFilterLastResetDate" => __("Dernière réinitialisation du filtre à poussière", __FILE__),
                "dustFilterResetType"     => __("Type de réinitialisation du filtre à poussière", __FILE__),
                "dustFilterStatus"        => __("État du filtre à poussière", __FILE__),
                "dustFilterUsage"         => __("Utilisation du filtre à poussière", __FILE__),
                "dustFilterUsageStep"     => __("Niveau d'utilisation du filtre à poussière", __FILE__),
                "resetDustFilter"         => __("Réinitialiser le filtre à poussière", __FILE__)
            ],
            "custom.electricHepaFilter" => [
                "electricHepaFilterCapacity"      => __("Capacité du filtre électrique HEPA", __FILE__),
                "electricHepaFilterUsageStep"     => __("Niveau d'utilisation du filtre électrique HEPA", __FILE__),
                "electricHepaFilterLastResetDate" => __("Dernière réinitialisation du filtre électrique HEPA", __FILE__),
                "electricHepaFilterStatus"        => __("État du filtre électrique HEPA", __FILE__),
                "electricHepaFilterUsage"         => __("Utilisation du filtre électrique HEPA", __FILE__),
                "electricHepaFilterResetType"     => __("Type de réinitialisation du filtre électrique HEPA", __FILE__),
                "resetElectricHepaFilter"         => __("Réinitialiser le filtre électrique HEPA", __FILE__)
            ],
            "custom.energyType" => [
                "energyType" => __("Type d'énergie", __FILE__)
            ],
            "custom.error" => [
                "error"    => __("Erreur", __FILE__),
                "setError" => __("Envoyer une erreur", __FILE__)
            ],
            "custom.filterUsageTime" => [
                "usageTime"            => __("Durée d'utilisaton du filtre", __FILE__),
                "resetFilterUsageTime" => __("Réinitialiser la durée d'utilisaton du filtre", __FILE__)
            ],
            "custom.firmwareVersion" => [
                "updatedTime"        => __("Date de mise à jour du firmware", __FILE__),
                "firmwareVersion"    => __("Version du firmware", __FILE__)
            ],
            "custom.fridgeMode" => [
                "fridgeModeValue" => __("Valeur du mode de réfrigération", __FILE__),
                "fridgeMode"      => __("Mode de réfrigération", __FILE__)
            ],
            "custom.hepaFilter" => [
                "hepaFilterCapacity"      => __("Capacité du filtre HEPA", __FILE__),
                "hepaFilterStatus"        => __("État du filtre électrique HEPA", __FILE__),
                "hepaFilterResetType"     => __("Type de réinitialisation du filtre électrique HEPA", __FILE__),
                "hepaFilterUsageStep"     => __("Niveau d'utilisation du filtre HEPA", __FILE__),
                "hepaFilterUsage"         => __("Utilisation du filtre HEPA", __FILE__),
                "hepaFilterLastResetDate" => __("Dernière réinitialisation du filtre HEPA", __FILE__),
                "resetHepaFilter"         => __("Réinitialiser le filtre HEPA", __FILE__)
            ],
            "custom.jobBeginningStatus" => [
                "jobBeginningStatus" => __("Statut de la tâche de démarrage", __FILE__)
            ],
            "custom.lowerDevicePower" => [
                "powerState"       => __("Réduction de consommation d'énergie", __FILE__),
                "setPowerStateon"  => __("Activer la réduction de consommation d'énergie", __FILE__),
                "setPowerStateoff" => __("Désactiver la réduction de consommation d'énergie", __FILE__)
            ],
            "custom.outingMode" => [
                "outingMode"       => __("Mode Absence", __FILE__),
                "setOutingModeon"  => __("Activer le mode Absence", __FILE__),
                "setOutingModeoff" => __("Désactiver le mode Absence", __FILE__)
            ],
            "custom.ovenCavityStatus" => [
                "ovenCavityStatus" => __("État de la cavité du four", __FILE__)
            ],
            "custom.periodicSensing" => [
                "automaticExecutionSetting"          => __("Paramètre d'exécution automatique", __FILE__),
                "automaticExecutionMode"             => __("Mode d'exécution automatique", __FILE__),
                "supportedAutomaticExecutionSetting" => __("Paramètres d'exécution automatique pris en charge", __FILE__),
                "supportedAutomaticExecutionMode"    => __("Mode d'exécution automatique", __FILE__),
                "periodicSensing"                    => __("Détection périodique", __FILE__),
                "periodicSensingInterval"            => __("Intervale de détection périodique", __FILE__),
                "lastSensingTime"                    => __("Dernier temps de détection", __FILE__),
                "lastSensingLevel"                   => __("Dernier niveau de détection", __FILE__),
                "periodicSensingStatus"              => __("Statut de la détection périodique", __FILE__),
                "periodicSensingOn"                  => __("Activer la Détection périodique", __FILE__),
                "setPeriodicSensingInterval"         => __("Changer l'intervale de détection périodique", __FILE__),
                "setPeriodicSensing"                 => __("Changer la détection périodique", __FILE__),
                "setAutomaticExecutionMode"          => __("Changer le mode d'exécution automatique", __FILE__),
                "setAutomaticExecutionSetting"       => __("Changer le paramètre d'exécution automatique", __FILE__),
                "periodicSensingOff"                 => __("Désactiver la détection périodique", __FILE__),
                "triggerManualSensing"               => __("Déclenchement de la détection manuelle", __FILE__)
            ],
            "custom.picturemode" => [
                "pictureMode"              => __("Mode image", __FILE__),
                "supportedPictureModes"    => __("Modes image pris en charge", __FILE__),
                "supportedPictureModesMap" => __("Modes image pris en charge (map)", __FILE__),
                "setPictureMode"           => __("Modifier le Mode image", __FILE__)
            ],
            "custom.region" => [
                "region" => __("Région", __FILE__)
            ],
            "custom.robotCleanerBatteryFullStatus" => [
                "robotCleanerBatteryFullStatus"           => __("Statut de charge complète", __FILE__),
                "setRobotCleanerBatteryFullStatusfull"    => __("Indiquer la charge complète", __FILE__),
                "setRobotCleanerBatteryFullStatusnotFull" => __("Indiquer la charge incomplète", __FILE__)
            ],
            "custom.robotCleanerBehavior" => [
                "robotCleanerBehavior"    => __("Direction", __FILE__),
                "setRobotCleanerBehavior" => __("Changer de direction", __FILE__)
            ],
            "custom.robotCleanerEnergyMonitorSupport" => [
                "robotCleanerEnergyMonitorSupport" => __("Support du contrôle d'énergie", __FILE__)
            ],
            "custom.robotCleanerHistorySupport" => [
                "robotCleanerHistorySupport" => __("Support d'historique", __FILE__)
            ],
            "custom.robotCleanerHrmSupport" => [
                "robotCleanerHrmSupport" => __("Support HRM", __FILE__)
            ],
            "custom.robotCleanerRepeatCleanOption" => [
                "robotCleanerRepeatCleanOption"      => __("Option de répétition de nettoyage", __FILE__),
                "setRobotCleanerRepeatCleanOptionon" => __("Activer l'option de répétition de nettoyage", __FILE__),
                "setRobotCleanerRepeatCleanOptionon" => __("Désactiver l'option de répétition de nettoyage", __FILE__)
            ],
            "custom.robotCleanerRepeatCleanSupport" => [
                "robotCleanerRepeatCleanSupport"           => __("Support de répétition de nettoyage", __FILE__),
                "setRobotCleanerRepeatCleanSupportenable"  => __("Activer le support de répétition de nettoyage", __FILE__),
                "setRobotCleanerRepeatCleanSupportdisable" => __("Désactiver le support de répétition de nettoyage", __FILE__)
            ],
            "custom.robotCleanerReserveCleanType" => [
                "robotCleanerReserveCleanType" => __("Type de stock de nettoyage", __FILE__)
            ],
            "custom.robotCleanerSmartControl" => [
                "robotCleanerSmartControl"                 => __("Contrôle à distance", __FILE__),
                "setRobotCleanerSmartControlaccessLock"    => __("Bloquer le contrôle à distance", __FILE__),
                "setRobotCleanerSmartControlaaccessUnlock" => __("Débloquer le contrôle à distance", __FILE__)
            ],
            "custom.robotCleanerSmartTurboMode" => [
                "robotCleanerSmartTurboMode"       => __("Mode turbo intelligent", __FILE__),
                "setRobotCleanerSmartTurboModeon"  => __("Activer le mode turbo intelligent", __FILE__),
                "setRobotCleanerSmartTurboModeoff" => __("Désactiver le mode turbo intelligent", __FILE__)
            ],
            "custom.robotCleanerSoundSet" => [
                "robotCleanerSoundSet"    => __("Guide vocal", __FILE__),
                "setRobotCleanerSoundSet" => __("Changer le guide vocal", __FILE__)
            ],
            "custom.robotCleanerSuctionType" => [
                "robotCleanerSuctionType" => __("Type d'aspiration", __FILE__)
            ],
            "custom.soundmode" => [
                "supportedSoundModesMap" => __("Modes son pris en charge (map)", __FILE__),
                "soundMode"              => __("Mode son", __FILE__),
                "supportedSoundModes"    => __("Modes son pris en charge", __FILE__),
                "setSoundMode"           => __("Modifier le Mode son", __FILE__)
            ],
            "custom.spiMode" => [
                "spiMode"       => __("Mode S-Plasma ion", __FILE__),
                "setSpiModeon"  => __("Lancer le mode S-Plasma ion", __FILE__),
                "setSpiModeoff" => __("Arrêter le mode S-Plasma ion", __FILE__)
            ],
            "custom.steamClosetCourse" => [
                "supportedSteamCloseCourse" => __("Cycles pris en charge", __FILE__),
                "steamClosetCourse"         => __("Cycle", __FILE__),
                "setSteamClosetCourse"      => __("Changer le cycle", __FILE__)
            ],
            "custom.steamClosetOperatingState"     => [
                "supportedSteamClosetJobState"     => __("Statuts de tâche prix en charge", __FILE__),
                "completionTime"                   => __("Heure de fin", __FILE__),
                "steamClosetMachineState"          => __("Statut de machine", __FILE__),
                "supportedSteamClosetMachineState" => __("Statuts de machine pris en charge", __FILE__),
                "steamClosetJobState"              => __("Statut de tâche", __FILE__),
                "steamClosetDelayEndTime"          => __("Fin différée", __FILE__),
                "setSteamClosetDelayEndTime"       => __("Changer le délais de fin différée", __FILE__),
                "setSteamClosetMachineState"       => __("Changer le statut de machine", __FILE__)
            ],
            "custom.steamClosetSilentMode" => [
                "steamClosetSilentMode"       => __("Mode silencieux", __FILE__),
                "setSteamClosetSilentModeon"  => __("Activer le mode silencieux", __FILE__),
                "setSteamClosetSilentModeoff" => __("Désactiver le mode silencieux", __FILE__)
            ],
            "custom.steamClosetWrinklePrevent" => [
                "steamClosetWrinklePrevent"       => __("Prévention des faux-plis", __FILE__),
                "setSteamClosetWrinklePreventon"  => __("Activer la prévention des faux-plis", __FILE__),
                "setSteamClosetWrinklePreventoff" => __("Désactiver la prévention des faux-plis", __FILE__)
            ],
            "custom.supportedOptions" => [
                "referenceTable"   => __("Options prises en charge : Table de référence", __FILE__),
                "supportedCourses" => __("Options prises en charge : Cycles", __FILE__)
            ],
            "custom.thermostatSetpointControl" => [
                "minimumSetpoint" => __("Température de refroidissement minimum", __FILE__),
                "maximumSetpoint" => __("Température de refroidissement maximum", __FILE__),
                "lowerSetpoint"   => __("Baisser la température de refroidissement", __FILE__),
                "raiseSetpoint"   => __("Monter la température de refroidissement", __FILE__)
            ],
            "custom.veryFineDustFilter" => [
                "veryFineDustFilterStatus"        => __("Statut du filtre à particules fines", __FILE__),
                "veryFineDustFilterResetType"     => __("Type de réinitilisation du filtre à particules fines", __FILE__),
                "veryFineDustFilterUsage"         => __("Utilisation du filtre à particules fines", __FILE__),
                "veryFineDustFilterLastResetDate" => __("Dernière réinitialisation du filtre à particules fines", __FILE__),
                "veryFineDustFilterUsageStep"     => __("Niveau d'utilisation du filtre à particules fines", __FILE__),
                "veryFineDustFilterCapacity"      => __("Capacité du filtre à particules fines", __FILE__),
                "resetVeryFineDustFilter"         => __("Réinitialiser le filtre à particules fines", __FILE__)
            ],
            "custom.virusDoctorMode" => [
                "virusDoctorMode"       => __("Mode anti-virus", __FILE__),
                "setVirusDoctorModeon"  => __("Activer le mode anti-virus", __FILE__),
                "setVirusDoctorModeoff" => __("Désactiver le mode anti-virus", __FILE__)
            ],
            "custom.washerAddwashAlarm" => [
                "washerAddwashAlarm"    => __("Alarme ajout de linge en cours de cycle", __FILE__),
                "setWasherAddwashAlarm" => __("Changer l'alarme d'ajout de linge en cours de cycle", __FILE__)
            ],
            "custom.washerRinseCycles" => [
                "supportedWasherRinseCycles" => __("Nombres de cycles de rinçage pris en charge", __FILE__),
                "washerRinseCycles"          => __("Nombre de cycles de rinçage", __FILE__),
                "setWasherRinseCycles"       => __("Changer le nombre de cycles de rinçage", __FILE__)
            ],
            "custom.washerSpinLevel" => [
                "washerSpinLevel"          => __("Vitesse d'essorage", __FILE__),
                "setWasherSpinLevel"       => __("Changer la vitesse d'essorage", __FILE__),
                "supportedWasherSpinLevel" => __("Vitesses d'essorage prises en charge", __FILE__)
            ],
            "custom.washerWaterTemperature" => [
                "supportedWasherWaterTemperature" => __("Températures de lavage prises en charge", __FILE__),
                "washerWaterTemperature"          => __("Température de lavage", __FILE__),
                "setWasherWaterTemperature"       => __("Changer la température de lavage", __FILE__)
            ],
            "custom.washerAutoDetergent" => [
                "setWasherAutoDetergentoff" => __("Désactiver le distributeur de produit de lavage", __FILE__),
                "setWasherAutoDetergenton"  => __("Activer le distributeur de produit de lavage", __FILE__),
                "washerAutoDetergent"       => __("État du distributeur de produit de lavage", __FILE__)
            ],
            "custom.washerAutoSoftener" => [
                "setWasherAutoSofteneroff"   => __("Désactiver le distributeur d'adoucissant", __FILE__),
                "setWasherAutoSofteneron"    => __("Activer le distributeur d'adoucissant", __FILE__),
                "washerAutoSoftener"         => __("État du distributeur d'adoucissant", __FILE__)
            ],
            "custom.washerSoilLevel" => [
                "supportedWasherSoilLevel" => __("Degrés de salissure pris en charge", __FILE__),
                "setWasherSoilLevel"       => __("Changer le degré de salissure", __FILE__),
                "washerSoilLevel"          => __("Degré de salissure", __FILE__)
            ],
            "custom.waterFilter" => [
                "waterFilterUsageStep"     => __("Niveau d'utilisation du filtre à eau", __FILE__),
                "waterFilterResetType"     => __("Type de réinitialisation du filtre à eau", __FILE__),
                "waterFilterCapacity"      => __("Capacité du filtre à eau", __FILE__),
                "waterFilterLastResetDate" => __("Dernière réinitialisation du filtre à eau", __FILE__),
                "waterFilterUsage"         => __("Utilisation du filtre à eau", __FILE__),
                "waterFilterStatus"        => __("État du filtre à eau", __FILE__),
                "resetWaterFilter"         => __("Réinitialiser le filtre à eau", __FILE__)
            ],
            "custom.welcomeCareMode" => [
                "welcomeCareMode"   => __("Mode d'accueil", __FILE__),
                "turnWelcomeCareOn" => __("Activer le mode d'accueil", __FILE__)
            ],
            "demandResponseLoadControl" => [
                "drlcStatus"         => __("Statut de la dernière demande DRLC", __FILE__),
                "overrideDrlcAction" => __("Outrepasser la demande de réduction de charge demandée", __FILE__),
                "requestDrlcAction"  => __("Demander de réduire la charge pour alléger la demande du réseau électrique", __FILE__)
            ],
            "dishwasherMode" => [
                "dishwasherMode"    => __("Mode du lave-vaisselle", __FILE__),
                "setDishwasherMode" => __("Changer le mode du lave-vaisselle", __FILE__)
            ],
            "dishwasherOperatingState" => [
                "completionTime"         => __("Heure de fin", __FILE__),
                "machineState"           => __("Statut de machine", __FILE__),
                "supportedMachineStates" => __("Statuts de machine pris en charge", __FILE__),
                "dishwasherJobState"     => __("Statut de tâche", __FILE__),
                "setMachineState"        => __("Changer le statut de machine", __FILE__)
            ],
            "dishwasherOperationalState" => [
                "completionTime"         => __("Heure de fin", __FILE__),
                "machineState"           => __("Statut de machine", __FILE__),
                "supportedMachineStates" => __("Statuts de machine pris en charge", __FILE__),
                "dishwasherJobState"     => __("Statut de tâche", __FILE__),
                "setMachineState"        => __("Changer le statut de machine", __FILE__)
            ],
            "doorControl" => [
                "door"  => __("Porte", __FILE__),
                "close" => __("Fermer la porte", __FILE__),
                "open"  => __("Ouvrir la porte", __FILE__)
            ],
            "dryerMode" => [
                "dryerMode"    => __("Mode du sèche-linge", __FILE__),
                "setDryerMode" => __("Changer le mode du sèche-linge", __FILE__)
            ],
            "dryerOperatingState" => [
                "completionTime"         => __("Heure de fin", __FILE__),
                "machineState"           => __("Statut de machine", __FILE__),
                "supportedMachineStates" => __("Statuts de machine pris en charge", __FILE__),
                "dryerJobState"          => __("Statut de tâche", __FILE__),
                "setMachineState"        => __("Changer le statut de machine", __FILE__)
            ],
            "dustSensor" => [
                "dustLevel"     => __("Quantité de poussière", __FILE__),
                "fineDustLevel" => __("Niveau de poussière fine", __FILE__)
            ],
            "energyMeter" => [
                "energy"           => __("Consommation d'énergie", __FILE__),
                "resetEnergyMeter" => __("Réinitialiser le compteur de consommation d'énergie", __FILE__)
            ],
            "equivalentCarbonDioxideMeasurement" => [
                "equivalentCarbonDioxideMeasurement" => __("Équivalent en dioxyde de carbone", __FILE__)
            ],
            "estimatedTimeOfArrival" => [
                "eta" => __("Heure d'arrivée estimée", __FILE__)
            ],
            "execute" => [
                "data"               => __("Données", __FILE__),
                "execute"            => __("Executer une commande", __FILE__),
                "remainingTime"      => __("Temps restant", __FILE__),
                "progressPercentage" => __("Progression", __FILE__),
                "rssi"               => __("RSSI", __FILE__)
            ],
            "fanOscillationMode" => [
                "supportedFanOscillationModes" => __("Modes d'oscillations pris en charge", __FILE__),
                "fanOscillationMode"           => __("Mode d'oscillations", __FILE__),
                "setFanOscillationMode"        => __("Changer le mode d'oscillations", __FILE__)
            ],
            "fanSpeed" => [
                "fanSpeed"    => __("Vitesse de ventilation", __FILE__),
                "setFanSpeed" => __("Changer la vitesse de ventilation", __FILE__)
            ],
            "filterState" => [
                "filterLifeRemaining" => __("Autonomie restante du filtre", __FILE__)
            ],
            "forecast" => [
                "precip1Hour"             => __("Prévision de précipitations 1 h", __FILE__),
                "precip6Hour"             => __("Prévision de précipitations 6 h", __FILE__),
                "precip24Hour"            => __("Prévision de précipitations 24 h", __FILE__),
                "snow1Hour"               => __("Prévision de neige 1 h", __FILE__),
                "snow6Hour"               => __("Prévision de neige 6 h", __FILE__),
                "snow24Hour"              => __("Prévision de neige 24 h", __FILE__),
                "temperatureAmount1Hour"  => __("Prévision de température 1 h", __FILE__),
                "temperatureAmount2Hour"  => __("Prévision de température 2 h", __FILE__),
                "temperatureAmount3Hour"  => __("Prévision de température 3 h", __FILE__),
                "temperatureAmount4Hour"  => __("Prévision de température 4 h", __FILE__),
                "temperatureAmount5Hour"  => __("Prévision de température 5 h", __FILE__),
                "temperatureAmount6Hour"  => __("Prévision de température 6 h", __FILE__),
                "temperatureAmount7Hour"  => __("Prévision de température 7 h", __FILE__),
                "temperatureAmount8Hour"  => __("Prévision de température 8 h", __FILE__),
                "temperatureAmount9Hour"  => __("Prévision de température 9 h", __FILE__),
                "temperatureAmount10Hour" => __("Prévision de température 10 h", __FILE__),
                "temperatureAmount11Hour" => __("Prévision de température 11 h", __FILE__),
                "temperatureAmount12Hour" => __("Prévision de température 12 h", __FILE__),
                "lastUpdateTime"          => __("Prévision : Date de dernière mise à jour", __FILE__)
            ],
            "formaldehydeMeasurement" => [
                "formaldehydeLevel" => __("Niveau de formaldéhyde", __FILE__)
            ],
            "garageDoorControl" => [
                "door"  => __("Porte de garage", __FILE__),
                "close" => __("Ouvrir la porte de garage", __FILE__),
                "open"  => __("Fermer la porte de garage", __FILE__)
            ],
            "gasMeter" => [
                "gasMeterPrecision"  => __("Précision des mesures", __FILE__),
                "gasMeterCalorific"  => __("Énergie calorifique", __FILE__),
                "gasMeterTime"       => __("Heure du relevé de compteur", __FILE__),
                "gasMeterVolume"     => __("Volume de gaz", __FILE__),
                "gasMeterConversion" => __("Facteur de conversion", __FILE__),
                "gasMeter"           => __("Mesure de gaz", __FILE__)
            ],
            "geofence" => [
                "enableState"            => __("État d'activation", __FILE__),
                "setEnableStateenabled"  => __("Activer l'état d'activation", __FILE__),
                "setEnableStatedisabled" => __("Désactiver l'état d'activation", __FILE__),
                "geofence"               => __("Géorepérage", __FILE__),
                "setGeofenceenabled"     => __("Activer le géorepérage", __FILE__),
                "setGeofencedisabled"    => __("Désactiver le géorepérage", __FILE__),
                "name"                   => __("Nom (géorepérage)", __FILE__),
                "setName"                => __("Changer le nom (géorepérage)", __FILE__)
            ],
            "geolocation" => [
                "method"           => __("Méthode de géolocalisation", __FILE__),
                "heading"          => __("Direction de géolocalisation", __FILE__),
                "latitude"         => __("Latitude de géolocalisation", __FILE__),
                "accuracy"         => __("Précision de géolocalisation", __FILE__),
                "altitudeAccuracy" => __("Précision de l'altitude de géolocalisation", __FILE__),
                "speed"            => __("Vitesse de géolocalisation", __FILE__),
                "longitude"        => __("Longitude de géolocalisation", __FILE__),
                "lastUpdateTime"   => __("Heure de dernière géolocalisation", __FILE__)
            ],
            "healthCheck" => [
                "checkInterval"            => __("Intervalle de vérification", __FILE__),
                "healthStatus"             => __("État de santé", __FILE__),
                "DeviceWatch-Enroll"       => __("Enrôlement en surveillance de l'appareil", __FILE__),
                "DeviceWatch-DeviceStatus" => __("Surveillance de l'appareil - Statut de l'appareil", __FILE__),
                "ping"                     => __("Pinguer l'appareil", __FILE__)
            ],
            "history" => [
                "lasthistory" => __("Dernier évènement", __FILE__)
            ],
            "holdableButton" => [
                "button"          => __("Bouton", __FILE__),
                "numberOfButtons" => __("Nombre de boutons", __FILE__)
            ],
            "humidifierMode" => [
                "humidifierMode"    => __("Mode de l'humidificateur", __FILE__),
                "setHumidifierMode" => __("Changer le mode de l'humidificateur", __FILE__)
            ],
            "illuminanceMeasurement" => [
                "illuminance" => __("Éclairement", __FILE__)
            ],
            "imageCapture" => [
                "image"       => __("Image", __FILE__),
                "encrypted"   => __("Chiffré", __FILE__),
                "captureTime" => __("Temps de capture", __FILE__),
                "take"        => __("Prendre une capture", __FILE__)
            ],
            "infraredLevel" => [
                "infraredLevel"    => __("Niveau d'infrarouge", __FILE__),
                "setInfraredLevel" => __("Changer le niveau d'infrarouge", __FILE__)
            ],
            "languageSetting" => [
                "supportedLanguages" => __("Langues prises en charge", __FILE__),
                "language"           => __("Langue", __FILE__),
                "setLanguage"        => __("Changer la langue", __FILE__)
            ],
            "locationMode" => [
                "mode"    => __("Mode", __FILE__),
                "setMode" => __("Changer le mode", __FILE__)
            ],
            "lock" => [
                "lock"   => __("État de verrouillage", __FILE__),
                "unlock" => __("Déverrouiller", __FILE__),
                "lock::" => __("Verrouiller", __FILE__)
            ],
            "lockCodes" => [
                "codeLength"        => __("Longueur de code", __FILE__),
                "maxCodes"          => __("Nombre maximum de codes", __FILE__),
                "maxCodeLength"     => __("Longueur maximum de code", __FILE__),
                "codeChanged"       => __("Code modifié", __FILE__),
                "lock"              => __("État de verrouillage", __FILE__),
                "lock::"            => __("Verrouiller", __FILE__),
                "minCodeLength"     => __("Longueur minimum de code", __FILE__),
                "codeReport"        => __("Rapport de code", __FILE__),
                "scanCodes"         => __("Codes de numérisation", __FILE__),
                "lockCodes"         => __("Codes de verrouillage", __FILE__),
                "updateCodes"       => __("Mettre à jour les codes", __FILE__),
                "deleteCode"        => __("Supprimer les codes", __FILE__),
                "reloadAllCodes"    => __("Recharger tous les codes", __FILE__),
                "requestCode"       => __("Demander un code", __FILE__),
                "setCode"           => __("Changer un code", __FILE__),
                "unlock"            => __("Déverrouiller", __FILE__),
                "unlockWithTimeout" => __("Déverrouiller avec temporisation", __FILE__),
                "setCodeLength"     => __("Changer longueur de code", __FILE__),
                "nameSlot"          => __("Changer l'emplacement et le nom", __FILE__)
            ],
            "lockOnly" => [
                "lock"   => __("État de verrouillage", __FILE__),
                "lock::" => __("Verrouiller", __FILE__)
            ],
            "mediaController" => [
                "currentActivity" => __("Activité actuelle", __FILE__),
                "activities"      => __("Activités", __FILE__),
                "startActivity"   => __("Démarrer l'activité", __FILE__)
            ],
            "mediaGroup" => [
                "groupMute"            => __("Statut du son du groupe", __FILE__),
                "setGroupMutemuted"    => __("Désactiver le son du groupe", __FILE__),
                "setGroupMuteunmuted"  => __("Activer le son du groupe", __FILE__),
                "muteGroup"            => __("Désactiver le son du groupe", __FILE__),
                "unmuteGroup"          => __("Activer le son du groupe", __FILE__),
                "groupPrimaryDeviceId" => __("Identification du contrôleur du groupe", __FILE__),
                "groupId"              => __("Identification groupée", __FILE__),
                "groupVolume"          => __("Volume du groupe", __FILE__),
                "groupRole"            => __("Rôle dans le groupe", __FILE__),
                "groupVolumeUp"        => __("Volume + du groupe", __FILE__),
                "groupVolumeDown"      => __("Volume - du groupe", __FILE__),
                "setGroupVolume"       => __("Changer le volume du groupe", __FILE__)
            ],
            "mediaInputSource" => [
                "supportedInputSources" => __("Sources d'entrée prises en charge", __FILE__),
                "inputSource"           => __("Source d'entrée", __FILE__),
                "setInputSource"        => __("Changer la source d'entrée", __FILE__)
            ],
            "mediaPlayback" => [
                "supportedPlaybackCommands" => __("Commandes de lecture prises en charge", __FILE__),
                "playbackStatus"            => __("Statut de lecture", __FILE__),
                "play"                      => __("Démarrer la lecture", __FILE__),
                "stop"                      => __("Arrêter la lecture", __FILE__),
                "rewind"                    => __("Rembobiner", __FILE__),
                "fastForward"               => __("Avance rapide", __FILE__),
                "pause"                     => __("Mettre en pause la lecture", __FILE__),
                "setPlaybackStatus"         => __("Changer le contrôle de lecture", __FILE__)
            ],
            "mediaPlaybackRepeat" => [
                "playbackRepeatMode"    => __("Mode de répétition de la lecture", __FILE__),
                "setPlaybackRepeatMode" => __("Passer en mode de répétition de la lecture", __FILE__)
            ],
            "mediaPlaybackShuffle" => [
                "playbackShuffle"    => __("Lecture aléatoire", __FILE__),
                "setPlaybackShuffle" => __("Passer en lecture aléatoire", __FILE__)
            ],
            "mediaPresets" => [
                "presets"    => __("Préréglages", __FILE__),
                "playPreset" => __("Lire un préréglage", __FILE__)
            ],
            "mediaTrackControl" => [
                "mediaTrackControl"             => __("Contrôle des pistes", __FILE__),
                "supportedTrackControlCommands" => __("Commandes de contrôle des pistes prises en charge", __FILE__),
                "previousTrack"                 => __("Piste précédente", __FILE__),
                "nextTrack"                     => __("Piste suivante", __FILE__)
            ],
            "motionSensor" => [
                "motion" => __("Détection de mouvement", __FILE__)
            ],
            "musicPlayer" => [
                "trackDescription" => __("Description de la tâche", __FILE__),
                "level"            => __("Volume", __FILE__),
                "trackData"        => __("Données de piste", __FILE__),
                "status"           => __("Statut", __FILE__),
                "play"             => __("Démarrer la lecture", __FILE__),
                "restoreTrack"     => __("Restaurer la lecture de la piste", __FILE__),
                "resumeTrack"      => __("Reprendre la lecture de la piste", __FILE__),
                "stop"             => __("Arrêter la lecture", __FILE__),
                "previousTrack"    => __("Piste précédente", __FILE__),
                "nextTrack"        => __("Piste suivante", __FILE__),
                "mute"             => __("Désactivation du son", __FILE__),
                "mute::"           => __("Désactiver le son", __FILE__),
                "setTrack"         => __("Changer la piste", __FILE__),
                "unmute"           => __("Activer le son", __FILE__),
                "playTrack"        => __("Lire la piste", __FILE__),
                "pause"            => __("Mettre en pause", __FILE__),
                "setLevel"         => __("Changer le volume", __FILE__)
            ],
            "networkMeter" => [
                "uplinkSpeed"   => __("Vitesse de la liaison montante", __FILE__),
                "downlinkSpeed" => __("Vitesse de la liaison descendante", __FILE__)
            ],
            "notification" => [
                "lastNotification"   => __("Dernière notification", __FILE__),
                "sendNotification"   => __("Envoyer une notification", __FILE__),
                "deviceNotification" => __("Envoyer une notification à l'appareil", __FILE__)
            ],
            "objectDetection" => [
                "detected"        => __("Détectée", __FILE__),
                "supportedValues" => __("Valeurs prises en charge", __FILE__)
            ],
            "occupancySensor" => [
                "occupancy" => __("Occupation", __FILE__)
            ],
            "ocf" => [
                "st"             => __("Temps du système", __FILE__),
                "mndt"           => __("Date de fabrication", __FILE__),
                "mnfv"           => __("Version du firmware", __FILE__),
                "mnhw"           => __("Version matérielle", __FILE__),
                "di"             => __("Identifiant appareil", __FILE__),
                "mnsl"           => __("Lien du support", __FILE__),
                "dmv"            => __("OCF version spécifique", __FILE__),
                "n"              => __("Nom de l'appareil", __FILE__),
                "mnmo"           => __("Numéro du modèle", __FILE__),
                "vid"            => __("Identifiant du vendeur", __FILE__),
                "mnmn"           => __("Nom du fabricant", __FILE__),
                "mnml"           => __("Lien constructeur", __FILE__),
                "mnpv"           => __("Version plateforme", __FILE__),
                "mnos"           => __("Version de l'OS", __FILE__),
                "pi"             => __("Identifiant platforme", __FILE__),
                "icv"            => __("Version du core", __FILE__),
                "postOcfCommand" => __("Exécuter une commande postOcf", __FILE__)
            ],
            "odorSensor" => [
                "odorLevel" => __("Niveau d'odeur", __FILE__)
            ],
            "ovenMode" => [
                "supportedOvenModes" => __("Modes du four pris en charge", __FILE__),
                "ovenMode"           => __("Mode du four", __FILE__),
                "setOvenMode"        => __("Change le mode du four", __FILE__)
            ],
            "ovenOperationalState" => [
                "completionTime"         => __("Heure de fin (old)", __FILE__),
                "machineState"           => __("Statut de la machine (old)", __FILE__),
                "supportedMachineStates" => __("Statuts de la machine pris en charge (old)", __FILE__),
                "setMachineState"        => __("Changer le statut de la machine (old)", __FILE__),
                "progress"               => __("Progression (old)", __FILE__),
                "ovenJobState"           => __("Statut de tâche (old)", __FILE__),
                "operationTime"          => __("Temps de fonctionnement (old)", __FILE__),
                "stop"                   => __("Arrêter le four (old)", __FILE__)
            ],
            "ovenOperatingState" => [
                "completionTime"         => __("Heure de fin", __FILE__),
                "machineState"           => __("Statut de la machine", __FILE__),
                "supportedMachineStates" => __("Statuts de la machine pris en charge", __FILE__),
                "setMachineState"        => __("Changer le statut de la machine", __FILE__),
                "progress"               => __("Progression", __FILE__),
                "ovenJobState"           => __("Statut de tâche", __FILE__),
                "operationTime"          => __("Temps de fonctionnement", __FILE__),
                "stop"                   => __("Arrêter le four", __FILE__),
                "start"                  => __("Démarrer le four", __FILE__)
            ],
            "ovenSetpoint" => [
                "ovenSetpoint"    => __("Température du four", __FILE__),
                "setOvenSetpoint" => __("Changer la température du four", __FILE__)
            ],
            "pHMeasurement" => [
                "pH" => __("pH", __FILE__)
            ],
            "panicAlarm" => [
                "panicAlarm" => __("Alarme de panique", __FILE__)
            ],
            "powerConsumptionReport" => [
                "powerConsumption" => [
                    "start"           => __("Début de consommation", __FILE__),
                    "end"             => __("Fin de consommation", __FILE__),
                    "energy"          => __("Consommation totale", __FILE__),
                    "power"           => __("Puissance", __FILE__),
                    "deltaEnergy"     => __("Delta de consommation", __FILE__),
                    "powerEnergy"     => __("Énergie électrique", __FILE__),
                    "energySaved"     => __("Énergie économisée", __FILE__),
                    "persistedEnergy" => __("Énergie persistante", __FILE__)
                ]
            ],
            "powerMeter" => [
                "power" => __("Wattmètre", __FILE__)
            ],
            "powerSource" => [
                "powerSource" => __("Alimentation", __FILE__)
            ],
            "presenceSensor" => [
                "presence" => __("Présence", __FILE__)
            ],
            "refresh" => [
                "refresh" => __("Rafraîchir", __FILE__)
            ],
            "refrigeration" => [
                "defrost"             => __("Décongélation", __FILE__),
                "setDefroston"        => __("Activer la décongélation", __FILE__),
                "setDefrostoff"       => __("Désactiver la décongélation", __FILE__),
                "rapidCooling"        => __("Refroidissement rapide", __FILE__),
                "setRapidCoolingon"   => __("Activer le refroidissement rapide", __FILE__),
                "setRapidCoolingoff"  => __("Désactiver le refroidissement rapide", __FILE__),
                "rapidFreezing"       => __("Congélation rapide", __FILE__),
                "setRapidFreezingon"  => __("Activer le refroidissement rapide", __FILE__),
                "setRapidFreezingoff" => __("Désactiver le refroidissement rapide", __FILE__)
            ],
            "refrigerationSetpoint" => [
                "refrigerationSetpoint"    => __("Température de réfrigération", __FILE__),
                "setRefrigerationSetpoint" => __("Changer la température de réfrigération", __FILE__)
            ],
            "relativeBrightness" => [
                "brightnessIntensity" => __("Niveau de luminosité", __FILE__)
            ],
            "relativeHumidityMeasurement" => [
                "humidity" => __("Humidité relative", __FILE__)
            ],
            "remoteControlStatus" => [
                "remoteControlEnabled" => __("Contrôle à distance", __FILE__)
            ],
            "robotCleanerCleaningMode" => [
                "robotCleanerCleaningMode"    => __("Mode de nettoyage", __FILE__),
                "setRobotCleanerCleaningMode" => __("Changer le mode de nettoyage", __FILE__)
            ],
            "robotCleanerMovement" => [
                "robotCleanerMovement"    => __("Mouvement", __FILE__),
                "setRobotCleanerMovement" => __("Changer le mouvement", __FILE__)
            ],
            "robotCleanerState" => [
                "robotCleanerTurboState"       => __("Statut turbo du robot de nettoyage", __FILE__),
                "robotCleanerCleaningState"    => __("Statut de nettoyage du robot de nettoyage", __FILE__),
                "supportedRobotCleanerStates"  => __("Statuts de nettoyage du robot pris en charge", __FILE__),
                "robotCleanerControlState"     => __("Statut de contrôle du robot de nettoyage", __FILE__),
                "setRobotCleanerCleaningState" => __("Changer le statut de nettoyage du robot de nettoyage", __FILE__),
                "setRobotCleanerControlState"  => __("Changer le statut de contrôle du robot de nettoyage", __FILE__),
                "setRobotCleanerTurboState"    => __("Changer le statut turbo du robot de nettoyage", __FILE__),
                "stop"                         => __("Arrêter le nettoyage", __FILE__)
            ],
            "samsungTV" => [
                "volume"         => __("Volume", __FILE__),
                "pictureMode"    => __("Mode Photo", __FILE__),
                "messageButton"  => __("Bouton Message", __FILE__),
                "soundMode"      => __("Mode Son", __FILE__),
                "switch"         => __("Interrupteur", __FILE__),
                "mute"           => __("Désactivation du son", __FILE__),
                "mute::"         => __("Désactiver le son", __FILE__),
                "on"             => __("Allumer", __FILE__),
                "off"            => __("Éteindre", __FILE__),
                "setPictureMode" => __("Changer le mode Photo", __FILE__),
                "setSoundMode"   => __("Changer le mode Son", __FILE__),
                "setVolume"      => __("Changer le volume", __FILE__),
                "showMessage"    => __("Afficher un message", __FILE__),
                "unmute"         => __("Activer le son", __FILE__),
                "volumeUp"       => __("Volume +", __FILE__),
                "volumeDown"     => __("Volume -", __FILE__)
            ],
            "samsungce.deviceIdentification" => [
                "micomAssayCode"          => __("Code d'analyse Micom", __FILE__),
                "modelName"               => __("Modèle", __FILE__),
                "serialNumber"            => __("Numéro de série", __FILE__),
                "serialNumberExtra"       => __("Numéro de série supplémentaire", __FILE__),
                "modelClassificationCode" => __("Code de classification du modèle", __FILE__),
                "description"             => __("Description", __FILE__),
                "binaryId"                => __("Identifiant binaire", __FILE__)
            ],
            "samsungce.doorState" => [
                "doorState" => __("Statut de la porte", __FILE__)
            ],
            "samsungce.driverVersion" => [
                "versionNumber" => __("Numéro de version du pilote", __FILE__)
            ],
            "samsungce.dryerAutoCycleLink" => [
                "linkDryerCycle"           => __("Lien au cycle auto de séchage", __FILE__),
                "dryerAutoCycleLink"       => __("Cycle auto de séchage", __FILE__),
                "setDryerAutoCycleLinkoff" => __("Délier du cycle auto de séchage", __FILE__),
                "setDryerAutoCycleLinkon"  => __("Lier au cycle auto de séchage", __FILE__)
            ],
            "samsungce.dryerCycle" => [
                "dryerCycle"      => __("Cycle de séchage", __FILE__),
                "setDryerCycle"   => __("Changer le cycle de séchage", __FILE__),
                "supportedCycles" => __("Cycles de séchage pris en charge", __FILE__),
                "referenceTable"  => __("Table de référence", __FILE__)
            ],
            "samsungce.dryerCyclePreset" => [
                "maxNumberOfPresets"   => __("Nombre maximum de préréglages de cycle", __FILE__),
                "presets"              => __("Préréglages de cycle", __FILE__),
                "setDryerCyclePreset"  => __("Créer un préréglage de cycle", __FILE__),
                "delete"               => __("Supprimer un préréglage de cycle", __FILE__)
            ],
            "samsungce.dryerDryingTemperature" => [
                "dryingTemperature"          => __("Température de séchage", __FILE__),
                "setDryingTemperature"       => __("Changer la température de séchage", __FILE__),
                "supportedDryingTemperature" => __("Températures de séchage prises en charge", __FILE__)
            ],
            "samsungce.dryerDryingTime" => [
                "supportedDryingTime" => __("Temps de séchage pris en charge", __FILE__),
                "dryingTime"          => __("Temps de séchage", __FILE__),
                "setDryingTime"       => __("Changer le temps de séchage", __FILE__)
            ],
            "samsungce.kitchenDeviceIdentification" => [
                "regionCode" => __("Code de région", __FILE__),
                "modelCode"  => __("Code de modèle", __FILE__),
                "type"       => __("Type d'appareil", __FILE__)
            ],
            "samsungce.kidsLock" => [
                "lock"      => __("Activer la sécurité enfant", __FILE__),
                "unlock"    => __("Désactiver la sécurité enfant", __FILE__),
                "lockState" => __("Statut de la sécurité enfant", __FILE__)
            ],
            "samsungce.lamp" => [
                "brightnessLevel"          => __("Niveau de luminosité", __FILE__),
                "setBrightnessLevel"       => __("Changer le niveau de luminosité", __FILE__),
                "supportedBrightnessLevel" => __("Niveaux de luminosité pris en charge", __FILE__)
            ],
            "samsungce.powerCool" => [
                "activated"  => __("Fonction de refroidissement", __FILE__),
                "activate"   => __("Activer la fonction de refroidissement", __FILE__),
                "deactivate" => __("Désactiver la fonction de refroidissement", __FILE__)
            ],
            "samsungce.powerFreeze" => [
                "activated"  => __("Fonction de gel", __FILE__),
                "activate"   => __("Activer la fonction de gel", __FILE__),
                "deactivate" => __("Désactiver la fonction de gel", __FILE__)
            ],
            "samsungce.softenerOrder" => [
                "enableAlarm"       => __("Activer l'alarme de l'adoucissant", __FILE__),
                "disableAlarm"      => __("Désactiver l'alarme de l'adoucissant", __FILE__),
                "alarmEnabled"      => __("Alarme de l'adoucissant activée", __FILE__),
                "orderThreshold"    => __("Seuil de commande d'adoucissant", __FILE__),
                "setOrderThreshold" => __("Changer le seuil de commande d'adoucissant", __FILE__)
            ],
            "samsungce.softenerState" => [
                "remainingAmount"    => __("Quantité d'adoucissant restant", __FILE__),
                "setRemainingAmount" => __("Changer la quantité d'adoucissant restant", __FILE__),
                "initialAmount"      => __("Quantité d'adoucissant initiale", __FILE__),
                "setInitialAmount"   => __("Changer la quantité d'adoucissant initiale", __FILE__),
                "softenerType"       => __("Type d'adoucissant", __FILE__),
                "setSoftenerType"    => __("Changer le type d'adoucissant", __FILE__),
                "dosage"             => __("Dosage de l'adoucissant", __FILE__),
                "setDosage"          => __("Changer le dosage de l'adoucissant", __FILE__)
            ],
            "samsungce.washerBubbleSoak" => [
                "status" => __("État du lavage à bulles", __FILE__),
                "on"     => __("Activer le lavage à bulles", __FILE__),
                "off"    => __("Désactiver le lavage à bulles", __FILE__)
            ],
            "samsungce.washerCycle" => [
                "supportedCycles" => __("Cycles de lavage pris en charge", __FILE__),
                "washerCycle"     => __("Cycle de lavage", __FILE__),
                "setWasherCycle"  => __("Changer le cycle de lavage", __FILE__),
                "referenceTable"  => __("Table de référence", __FILE__)
            ],
            "samsungce.washerCyclePreset" => [
                "maxNumberOfPresets"   => __("Nombre maximum de préréglages de cycle", __FILE__),
                "presets"              => __("Préréglages de cycle", __FILE__),
                "setWasherCyclePreset" => __("Créer un préréglage de cycle", __FILE__),
                "delete"               => __("Supprimer un préréglage de cycle", __FILE__)
            ],
            "samsungce.washerWashingTime" => [
                "supportedWashingTimes" => __("Temps de lavage pris en charge", __FILE__),
                "washingTime"           => __("Temps de lavage", __FILE__),
                "setWashingTime"        => __("Changer le temps de lavage", __FILE__)
            ],
            "samsungce.washerWaterLevel" => [
                "supportedWaterLevel" => __("Niveaux d'eau pris en charge", __FILE__),
                "waterLevel"          => __("Niveau d'eau", __FILE__),
                "setWaterLevel"       => __("Changer le niveau d'eau", __FILE__)
            ],
            "samsungce.washerWaterValve" => [
                "waterValve"          => __("Alimentation en eau", __FILE__),
                "setWaterValve"       => __("Changer l'alimentation en eau", __FILE__),
                "supportedWaterValve" => __("Alimentations en eau pris en charge", __FILE__)
            ],
            "samsungce.waterConsumptionReport" => [
                "waterConsumption" => __("Consommation d'eau", __FILE__)
            ],
            "samsungce.welcomeMessage" => [
                "welcomeMessage"       => __("Message de bienvenue", __FILE__),
                "setWelcomeMessage"    => __("Changer le message de bienvenue", __FILE__),
                "deleteWelcomeMessage" => __("Supprimer le message de bienvenue", __FILE__)
            ],
            "samsungce.autoDispenseSoftener" => [
                "supportedDensity" => __("Densités du distributeur d'adoucissant prises en charge", __FILE__),
                "supportedAmount"  => __("Quantités du distributeur d'adoucissant prises en charge", __FILE__),
                "remainingAmount"  => __("Quantité du distributeur d'adoucissant restante", __FILE__),
                "amount"           => __("Quantité du distributeur d'adoucissant", __FILE__),
                "setAmount"        => __("Changer la quantité du distributeur d'adoucissant", __FILE__),
                "density"          => __("Densité du distributeur d'adoucissant", __FILE__),
                "setDensity"       => __("Changer la densité du distributeur d'adoucissant", __FILE__)
            ],
            "samsungce.detergentOrder" => [
                "enableAlarm"       => __("Activer l'alarme du produit de lavage", __FILE__),
                "disableAlarm"      => __("Désactiver l'alarme du produit de lavage", __FILE__),
                "alarmEnabled"      => __("Alarme du produit de lavage activée", __FILE__),
                "orderThreshold"    => __("Seuil de commande du produit de lavage", __FILE__),
                "setOrderThreshold" => __("Changer le seuil du produit de lavage", __FILE__)
            ],
            "samsungce.detergentState" => [
                "remainingAmount"    => __("Quantité de produit de lavage restante", __FILE__),
                "setRemainingAmount" => __("Changer la quantité de produit de lavage restant", __FILE__),
                "initialAmount"      => __("Quantité de produit de lavage initiale", __FILE__),
                "setInitialAmount"   => __("Changer la quantité de produit de lavage initiale", __FILE__),
                "detergentType"      => __("Type de produit de lavage", __FILE__),
                "setDetergentType"   => __("Changer le type de produit de lavage", __FILE__),
                "dosage"             => __("Dosage du produit de lavage", __FILE__),
                "setDosage"          => __("Changer le dosage du produit de lavage", __FILE__)
            ],
            "samsungce.autoDispenseDetergent" => [
                "supportedDensity" => __("Densités du distributeur de produit de lavage prises en charge", __FILE__),
                "supportedAmount"  => __("Quantités du distributeur de produit de lavage prises en charge", __FILE__),
                "remainingAmount"  => __("Quantité du distributeur de produit de lavage restante", __FILE__),
                "amount"           => __("Quantité du distributeur de produit de lavage", __FILE__),
                "setAmount"        => __("Changer la quantité du distributeur de produit de lavage", __FILE__),
                "density"          => __("Densité du distributeur de produit de lavage", __FILE__),
                "setDensity"       => __("Changer la densité du distributeur de produit de lavage", __FILE__)
            ],
            "samsungtv.firmwareVersion" => [
                "firmwareVersion"    => __("Version du firmware", __FILE__),
                "setFirmwareVersion" => __("Changer la version du firmware", __FILE__)
            ],
            "samsungtv.supportsPowerOnByOcf" => [
                "supportsPowerOnByOcf" => __("Allumage par OCF pris en charge", __FILE__)
            ],
            "samsungvd.ambient" => [
                "setAmbientOn" => __("Ambient Mode Activé", __FILE__)
            ],
            "samsungvd.ambient18" => [
                "setAmbientOn" => __("Ambient Mode Activé", __FILE__)
            ],
            "samsungvd.ambientContent" => [
                "supportedAmbientApps" => __("Ambient Apps prises en charge", __FILE__),
                "setAmbientContent"    => __("Contenu Ambient Mode", __FILE__)
            ],
            "samsungvd.firmwareVersion" => [
                "firmwareVersion"    =>  __("Version du firmware", __FILE__),
                "setFirmwareVersion" => __("Changer la version du firmware", __FILE__)
            ],
            "samsungvd.mediaInputSource" => [
                "supportedInputSources" => __("Sources d'entrée prises en charge (Map)", __FILE__),
                "inputSource"           => __("Source d'entrée (Map)", __FILE__),
                "setInputSource"        => __("Changer la source d'entrée (Map)", __FILE__)
            ],
            "samsungvd.supportsPowerOnByOcf" => [
                "supportsPowerOnByOcf" => __("Allumage par OCF pris en charge", __FILE__)
            ],
            "scent" => [
                "scentName"         => __("Nom d'odeur", __FILE__),
                "scentIntensity"    => __("Intensité d'odeur", __FILE__),
                "setScentIntensity" => __("Changer l'intensité d'odeur", __FILE__)
            ],
            "securitySystem" => [
                "alarm"                => __("Alarme", __FILE__),
                "securitySystemStatus" => __("Statut du système de sécurité", __FILE__),
                "armStay"              => __("Activer l'alarme (présent)", __FILE__),
                "disarm"               => __("Désarmer l'alarme", __FILE__),
                "armAway"              => __("Activer l'alarme (absent)", __FILE__)
            ],
            "signalStrength" => [
                "rssi" => __("RSSI", __FILE__),
                "lqi"  => __("Indicateur de qualité de la liaison", __FILE__)
            ],
            "sleepSensor" => [
                "sleeping" => __("Détecteur de veille", __FILE__)
            ],
            "smokeDetector" => [
                "smoke" => __("Détecteur de fumée", __FILE__)
            ],
            "soundDetection" => [
                "soundDetectionState"   => __("Status de détection de son", __FILE__),
                "supportedSoundTypes"   => __("Types de son pris en charge", __FILE__),
                "soundDetected"         => __("Détection de son", __FILE__),
                "disableSoundDetection" => __("Désactivé", __FILE__),
                "enableSoundDetection"  => __("Activé", __FILE__)
            ],
            "soundPressureLevel" => [
                "soundPressureLevel" => __("Niveau de pression sonore", __FILE__)
            ],
            "soundSensor" => [
                "sound" => __("Détection de son", __FILE__)
            ],
            "speechRecognition" => [
                "phraseSpoken" => __("Phrase énoncée", __FILE__)
            ],
            "statelessAirCleanerModeButton" => [
                "availableAirCleanerModeButtons" => __("Boutons mode épurateur d'air disponibles", __FILE__),
                "setButton"                      => __("Simuler l'appui sur le bouton mode épurateur d'air", __FILE__)
            ],
            "statelessAudioVolumeButton" => [
                "availableAudioVolumeButtons" => __("Boutons volume sonore disponibles", __FILE__),
                "setButton"                   => __("Simuler l'appui sur le bouton volume sonore", __FILE__)
            ],
            "statelessAudioMuteButton" => [
                "availableAudioMuteButtons" => __("Boutons désactivation du son disponibles", __FILE__),
                "setButton"                 => __("Simuler l'appui sur le bouton désactivation du son", __FILE__)
            ],
            "statelessChannelButton" => [
                "availableChannelButtons" => __("Boutons chaînes disponibles", __FILE__),
                "setButton"               => __("Simuler l'appui sur le bouton chaînes", __FILE__)
            ],
            "statelessCurtainPowerButton" => [
                "availableCurtainPowerButtons" => __("Boutons d'ouverture de rideau disponibles", __FILE__),
                "setButton"                    => __("Simuler l'appui sur le bouton d'ouverture de rideau", __FILE__)
            ],
            "statelessCustomButton" => [
                "availableCustomButtons" => __("Boutons personnalisés disponibles", __FILE__),
                "setButton"              => __("Simuler l'appui sur le bouton personnalisé", __FILE__)
            ],
            "statelessFanspeedButton" => [
                "availableFanspeedButtons" => __("Boutons vitesse de ventilation disponibles", __FILE__),
                "setButton"                => __("Simuler l'appui sur le bouton vitesse de ventilation", __FILE__)
            ],
            "statelessFanspeedModeButton" => [
                "availableFanspeedModeButtons" => __("Boutons mode de vitesse de ventilation disponibles", __FILE__),
                "setButton"                    => __("Simuler l'appui sur le bouton mode de vitesse de ventilation", __FILE__)
            ],
            "statelessHumidifierModeButton" => [
                "availableHumidifierModeButtons" => __("Boutons mode d'humidificateur disponibles", __FILE__),
                "setButton"                      => __("Simuler l'appui sur le bouton mode d'humidificateur", __FILE__)
            ],
            "statelessMediaPlaybackButton" => [
                "availableMediaPlaybackButtons" => __("Boutons de commandes de lecture disponibles", __FILE__),
                "setButton"                     => __("Simuler l'appui sur le bouton commande de lecture", __FILE__)
            ],
            "statelessPowerButton" => [
                "availablePowerButtons" => __("Boutons power disponibles", __FILE__),
                "setButton"             => __("Simuler l'appui sur le bouton power", __FILE__)
            ],
            "statelessPowerToggleButton" => [
                "availablePowerToggleButtons" => __("Boutons power toggle disponibles", __FILE__),
                "setButton"                   => __("Simuler l'appui sur le bouton power toggle", __FILE__)
            ],
            "statelessRobotCleanerActionButton" => [
                "availableRobotCleanerActionButtons" => __("Boutons actions robot nettoyeur disponibles", __FILE__),
                "setButton"                          => __("Simuler l'appui sur le bouton action robot nettoyeur", __FILE__)
            ],
            "statelessRobotCleanerHomeButton" => [
                "availableRobotCleanerHomeButtons" => __("Boutons retour robot nettoyeur disponibles", __FILE__),
                "setButton"                        => __("Simuler l'appui sur le bouton retour robot nettoyeur", __FILE__)
            ],
            "statelessRobotCleanerToggleButton" => [
                "availableRobotCleanerToggleButtons" => __("Boutons toggle robot nettoyeur disponibles", __FILE__),
                "setButton"                          => __("Simuler l'appui sur le bouton toggle robot nettoyeur", __FILE__)
            ],
            "statelessSetChannelButton" => [
                "setChannel" => __("Simuler l'appui sur le bouton changer de chaîne", __FILE__)
            ],
            "statelessSetChannelByContentButton" => [
                "setChannelByContent" => __("Simuler l'appui sur le bouton changer de chaîne à partir du nom du contenu", __FILE__)
            ],
            "statelessSetChannelByNameButton" => [
                "setChannelByName" =>  __("Simuler l'appui sur le bouton changer de chaîne à partir du nom de chaîne", __FILE__)
            ],
            "statelessTemperatureButton" => [
                "availableTemperatureButtons" => __("Boutons température disponibles", __FILE__),
                "setChannelByName" =>  __("Simuler l'appui sur le bouton température", __FILE__)
            ],
            "statelessVolumeButtonWithRepetition" => [
                "volumeUp"   => __("Simuler l'appui sur le bouton volume + répétitivement", __FILE__),
                "volumeDown" => __("Simuler l'appui sur le bouton volume - répétitivement", __FILE__)
            ],
            "stepSensor" => [
                "goal"  => __("Objectif", __FILE__),
                "steps" => __("Pas", __FILE__)
            ],
            "switch" => [
                "switch" => __("Interrupteur", __FILE__),
                "on"     => __("Allumer", __FILE__),
                "off"    => __("Éteindre", __FILE__)
            ],
            "switchLevel" => [
                "level"    => __("Variateur de lumière", __FILE__),
                "setLevel" => __("Faire varier la luminosité", __FILE__)
            ],
            "tV" => [
                "volume"      => __("Volume", __FILE__),
                "movieMode"   => __("Mode Film", __FILE__),
                "sound"       => __("Son", __FILE__),
                "channel"     => __("Chaîne", __FILE__),
                "power"       => __("Marche", __FILE__),
                "picture"     => __("Photo", __FILE__),
                "channelUp"   => __("Chaîne +", __FILE__),
                "channelDown" => __("Chaîne -", __FILE__),
                "volumeUp"    => __("Volume +", __FILE__),
                "volumeDown"  => __("Volume -", __FILE__)
            ],
            "tag.e2eEncryption" => [
                "encryption" => __("Chiffrement", __FILE__),
                "on"         => __("Activer le chiffrement", __FILE__),
                "off"        => __("Désactiver le chiffrement", __FILE__)
            ],
            "tag.searchingStatus" => [
                "searchingStatus" => __("Résultat de recherche", __FILE__)
            ],
            "tag.tagButton" => [
                "tagButton"                   => __("Bouton", __FILE__),
                "setButtonDoublePushdisabled" => __("Désactiver double pression", __FILE__),
                "setButtonDoublePushenabled"  => __("Activer double pression", __FILE__),
                "setButtonHolddisabled"       => __("Désactiver mainteint enfoncé", __FILE__),
                "setButtonHoldenabled"        => __("Activer mainteint enfoncé", __FILE__),
                "setButtonPushdisabled"       => __("Désactiver simple pression", __FILE__),
                "setButtonPushenabled"        => __("Activer simple pression", __FILE__),
                "setButtonTriplePushdisabled" => __("Désactiver triple pression", __FILE__),
                "setButtonTriplePushenabled"  => __("Activer triple pression", __FILE__)
            ],
            "tag.tagStatus" => [
                "tagStatus"         => __("Statut", __FILE__),
                "connectedDeviceId" => __("Identifiant de l'appareil connecté", __FILE__),
                "connectedUserId"   => __("Identifiant de l'utilisateur connecté", __FILE__)
            ],
            "tag.updatedInfo" => [
                "connection" => __("Connexion", __FILE__),
                "update"     => __("Mise à jour", __FILE__)
            ],
            "tag.uwbActivation" => [
                "uwbActivation" => __("Activation Ultra Large Bande", __FILE__),
                "on"            => __("Activer Ultra Large Bande", __FILE__),
                "off"           => __("Désactiver Ultra Large Bande", __FILE__)
            ],
            "tamperAlert" => [
                "tamper" => __("Statut d'altération", __FILE__)
            ],
            "temperatureAlarm" => [
                "temperatureAlarm" => __("Alarme de température", __FILE__)
            ],
            "temperatureMeasurement" => [
                "temperature" => __("Température", __FILE__)
            ],
            "thermostat" => [
                "thermostatSetpointRange"     => __("Plage de températures du thermostat", __FILE__),
                "heatingSetpointRange"        => __("Plage de températures de chauffage", __FILE__),
                "thermostatSetpoint"          => __("Température du thermostat", __FILE__),
                "supportedThermostatFanModes" => __("Modes de ventilation du thermostat pris en charge", __FILE__),
                "schedule"                    => __("Programme", __FILE__),
                "setSchedule"                 => __("Changer le programme", __FILE__),
                "coolingSetpointRange"        => __("Plage de températures de refroidissement", __FILE__),
                "heatingSetpoint"             => __("Température de chauffe", __FILE__),
                "setHeatingSetpoint"          => __("Changer la température de chauffe", __FILE__),
                "coolingSetpoint"             => __("Température de refroidissement", __FILE__),
                "setCoolingSetpoint"          => __("Changer la température de refroidissement", __FILE__),
                "thermostatOperatingState"    => __("État de fonctionnement du thermostat", __FILE__),
                "temperature"                 => __("Température", __FILE__),
                "thermostatFanMode"           => __("Mode de ventilation du thermostat", __FILE__),
                "setThermostatFanMode"        => __("Changer le mode de ventilation du thermostat", __FILE__),
                "thermostatMode"              => __("Mode du thermostat", __FILE__),
                "setThermostatMode"           => __("Changer le mode du thermostat", __FILE__),
                "supportedThermostatModes"    => __("Modes de thermostat pris en charge", __FILE__),
                "fanAuto"                     => __("Ventilation automatique", __FILE__),
                "off"                         => __("Désactiver", __FILE__),
                "fanCirculate"                => __("Circulation de l'air", __FILE__),
                "cool"                        => __("Froid", __FILE__),
                "heat"                        => __("Chauffage", __FILE__),
                "emergencyHeat"               => __("Chaleur d'urgence", __FILE__),
                "auto"                        => __("Automatique", __FILE__),
                "fanOn"                       => __("Ventilation activée", __FILE__)
            ],
            "thermostatCoolingSetpoint" => [
                "coolingSetpoint"    => __("Température de refroidissement", __FILE__),
                "setCoolingSetpoint" => __("Changer la température de refroidissement", __FILE__)
            ],
            "thermostatFanMode" => [
                "thermostatFanMode"           => __("Mode de ventilation du thermostat", __FILE__),
                "setThermostatFanMode"        => __("Changer le mode de ventilation du thermostat", __FILE__),
                "supportedThermostatFanModes" => __("Modes de ventilation du thermostat pris en charge", __FILE__),
                "fanCirculate"                => __("Circulation de l'air", __FILE__),
                "fanOn"                       => __("Ventilation activée", __FILE__),
                "fanAuto"                     => __("Ventilation automatique", __FILE__)
            ],
            "thermostatHeatingSetpoint" => [
                "heatingSetpoint"    => __("Température de chauffe", __FILE__),
                "setHeatingSetpoint" => __("Changer la température de chauffe", __FILE__)
            ],
            "thermostatMode" => [
                "supportedThermostatModes" => __("Modes de thermostat pris en charge", __FILE__),
                "thermostatMode"           => __("Mode du thermostat", __FILE__),
                "setThermostatMode"        => __("Changer le mode du thermostat", __FILE__),
                "heat"                     => __("Mode du thermostat : Chaleur", __FILE__),
                "auto"                     => __("Mode du thermostat : Automatique", __FILE__),
                "cool"                     => __("Mode du thermostat : Refroidissement", __FILE__),
                "emergencyHeat"            => __("Mode du thermostat : Chaleur d'urgence", __FILE__),
                "off"                      => __("Mode du thermostat : Arrêt", __FILE__)
            ],
            "thermostatOperatingState" => [
                "thermostatOperatingState" => __("Statut de tâche", __FILE__)
            ],
            "thermostatSchedule" => [
                "schedule"    => __("Programme", __FILE__),
                "setSchedule" => __("Changer le programme", __FILE__)
            ],
            "threeAxis" => [
                "threeAxis" => __("Capteur 3 axes", __FILE__)
            ],
            "tvChannel" => [
                "tvChannel"        => __("Chaîne TV", __FILE__),
                "tvChannelName"    => __("Nom de la chaîne TV", __FILE__),
                "channelDown"      => __("Chaîne -", __FILE__),
                "channelUp"        => __("Chaîne +", __FILE__),
                "setTvChannel"     => __("Changer la chaîne TV", __FILE__),
                "setTvChannelName" => __("Changer le nom de la chaîne TV", __FILE__)
            ],
            "tvocMeasurement" => [
                "tvocLevel" => __("Niveau du total des composés organiques volatiles", __FILE__)
            ],
            "ultravioletIndex" => [
                "ultravioletIndex" => __("Indice UV", __FILE__)
            ],
            "valve" => [
                "valve" => __("Vanne", __FILE__),
                "close" => __("Fermer la vanne", __FILE__),
                "open"  => __("Ouvrir la vanne", __FILE__)
            ],
            "veryFineDustSensor" => [
                "veryFineDustLevel" => __("Niveau de poussière fine", __FILE__)
            ],
            "videoCapture" => [
                "stream"  => __("Flux", __FILE__),
                "clip"    => __("Clip", __FILE__),
                "capture" => __("Démarrer enregistrement", __FILE__)
            ],
            "videoCamera" => [
                "settings"      => __("Paramètres vidéo", __FILE__),
                "mute"          => __("Coupure du son", __FILE__),
                "camera"        => __("Caméra", __FILE__),
                "statusMessage" => __("Message de statut vidéo", __FILE__),
                "mute::"        => __("Désactiver le son", __FILE__),
                "unmute"        => __("Activer le son", __FILE__),
                "flip"          => __("Retouner la vidéo", __FILE__),
                "off"           => __("Désactiver la vidéo", __FILE__),
                "on"            => __("Activer la vidéo", __FILE__)
            ],
            "videoClips" => [
                "videoClip"   => __("Clip vidéo", __FILE__),
                "captureClip" => __("Prendre un clip vidéo", __FILE__)
            ],
            "videoStream" => [
                "stream"      => __("Flux vidéo", __FILE__),
                "startStream" => __("Démarrer le flux vidéo", __FILE__),
                "stopStream"  => __("Arrêter le flux vidéo", __FILE__)
            ],
            "voltageMeasurement" => [
                "voltage" => __("Tension", __FILE__)
            ],
            "washerMode" => [
                "washerMode"    => __("Mode de lavage", __FILE__),
                "setWasherMode" => __("Changer le mode de lavage", __FILE__)
            ],
            "washerOperatingState" => [
                "completionTime"         => __("Heure de fin", __FILE__),
                "machineState"           => __("Statut de machine", __FILE__),
                "setMachineState"        => __("Changer le statut de la machine", __FILE__),
                "washerJobState"         => __("Statut de tâche", __FILE__),
                "supportedMachineStates" => __("Statuts de machine pris en charge", __FILE__)
            ],
            "washerOperationalState" => [
                "completionTime"         => __("Heure de fin", __FILE__),
                "machineState"           => __("Statut de machine", __FILE__),
                "setMachineState"        => __("Changer le statut de la machine", __FILE__),
                "washerJobState"         => __("Statut de tâche", __FILE__),
                "supportedMachineStates" => __("Statuts de machine pris en charge", __FILE__)
            ],
            "waterSensor" => [
                "water" => __("Eau", __FILE__)
            ],
            "weather" => [
                "iconCode"              => __("Code d'icône", __FILE__),
                "cloudCoverPhrase"      => __("Phrase de couverture nuageuse", __FILE__),
                "cloudCeiling"          => __("Plafond nuageux", __FILE__),
                "expirationTime"        => __("Date d'expiration", __FILE__),
                "relativeHumidity"      => __("Humidité", __FILE__),
                "sunriseTimeLocal"      => __("Lever de soleil", __FILE__),
                "sunsetTimeLocal"       => __("Coucher de soleil", __FILE__),
                "temperature"           => __("Température", __FILE__),
                "temperatureFeelsLike"  => __("Température ressentie", __FILE__),
                "uvDescription"         => __("Description d'indice UV ", __FILE__),
                "uvIndex"               => __("Indice UV", __FILE__),
                "visibility"            => __("Visibilité", __FILE__),
                "windDirection"         => __("Direction du vent", __FILE__),
                "windDirectionCardinal" => __("Rose des vents", __FILE__),
                "windSpeed"             => __("Vitesse du vent", __FILE__),
                "wxPhraseLong"          => __("Phrase météo", __FILE__),
                "weatherDetailUrl"      => __("URL détail météo", __FILE__),
                "vendor"                => __("Fournisseur du service", __FILE__),
                "version"               => __("Version", __FILE__),
                "lastUpdateTime"        => __("Météo : Date de dernière mise à jour", __FILE__)
            ],
            "wifiMeshRouter" => [
                "disconnectedRouterCount" => __("Nombre de routeurs déconnectés", __FILE__),
                "wifiGuestNetworkStatus"  => __("Statut du réseau d'invité Wi-Fi", __FILE__),
                "connectedRouterCount"    => __("Nombre de routeurs connectés", __FILE__),
                "connectedDeviceCount"    => __("Nombre d'appareils connectés", __FILE__),
                "wifiNetworkName"         => __("Nom du réseau Wi-Fi", __FILE__),
                "wifiGuestNetworkName"    => __("Nom du réseau d'invité Wi-Fi", __FILE__),
                "wifiNetworkStatus"       => __("Statut du réseau Wi-Fi", __FILE__),
                "enableWifiGuestNetwork"  => __("Activer le réseau d'invité Wi-Fi", __FILE__),
                "disableWifiNetwork"      => __("Désactiver le réseau Wi-Fi", __FILE__),
                "enableWifiNetwork"       => __("Activer le réseau Wi-Fi", __FILE__),
                "disableWifiGuestNetwork" => __("Désactiver le réseau d'invité Wi-Fi", __FILE__)
            ],
            "windowShade" => [
                "supportedWindowShadeCommands" => __("Commandes de store de fenêtre prises en charge", __FILE__),
                "windowShade"                  => __("Store de fenêtre", __FILE__),
                "close"                        => __("Fermer", __FILE__),
                "open"                         => __("Ouvrir", __FILE__),
                "pause"                        => __("Pause", __FILE__)
            ],
            "windowShadeLevel" => [
                "shadeLevel"    => __("Niveau d'ouverture du store", __FILE__),
                "setShadeLevel" => __("Changer le niveau d'ouverture du store", __FILE__)
            ],
            "wirelessOperatingMode" => [
                "wirelessOperatingMode"    => __("Mode de fonctionnement sans fil", __FILE__),
                "setWirelessOperatingMode" => __("Changer le mode de fonctionnement sans fil", __FILE__)
            ],
            "zwMultichannel" => [
                "epEvent"        => __("Événement de point de terminaison", __FILE__),
                "epInfo"         => __("Informations sur le point de terminaison", __FILE__),
                "enableEpEvents" => __("Activer les événement de point de terminaison", __FILE__),
                "epCmd"          => __("Commander le point de terminaison", __FILE__)
            ]
        ];

        $this->cycles = [
            "Table_00" => [
                "Course_BA" => __("Vidange / essorage", __FILE__),
                "Course_D0" => __("Coton", __FILE__),
                "Course_D1" => __("eCoton", __FILE__),
                "Course_D2" => __("Synthétiques", __FILE__),
                "Course_D3" => __("Délicat", __FILE__),
                "Course_D4" => __("Rinçage + essorage", __FILE__),
                "Course_D5" => __("Nettoyage tambour", __FILE__),
                "Course_D6" => __("Draps", __FILE__),
                "Course_D7" => __("Imperméable", __FILE__),
                "Course_D8" => __("Laine", __FILE__),
                "Course_D9" => __("Couleurs", __FILE__),
                "Course_DA" => __("Eco", __FILE__),
                "Course_DB" => __("Super rapide", __FILE__),
                "Course_DC" => __("Express 15 min", __FILE__),
                "Course_5B" => __("Coton", __FILE__),
                "Course_5C" => __("Super rapide", __FILE__),
                "Course_5D" => __("Eco", __FILE__),
                "Course_5E" => __("Délicat", __FILE__),
                "Course_5F" => __("Bébé coton", __FILE__),
                "Course_60" => __("Imperméable", __FILE__),
                "Course_61" => __("Couleur", __FILE__),
                "Course_63" => __("Nettoyage tambour", __FILE__),
                "Course_64" => __("Rinçage + essorage", __FILE__),
                "Course_65" => __("Laine", __FILE__),
                "Course_66" => __("Draps", __FILE__),
                "Course_67" => __("Synthétique", __FILE__),
                "Course_68" => __("ECoton", __FILE__),
                "Course_6B" => __("Nouveau2 (Merci de me remonter le cycle)", __FILE__),
                "Course_6C" => __("Jeans", __FILE__)
            ],
            "Table_02" => [
                "Course_1B" => __("Coton", __FILE__),
                "Course_1C" => __("Eco 40-60", __FILE__),
                "Course_1D" => __("Ultra rapide (à confirmer)", __FILE__),
                "Course_1E" => __("Express 15 min", __FILE__),
                "Course_1F" => __("Intensif à froid", __FILE__),
                "Course_20" => __("Anti-allergènes", __FILE__),
                "Course_21" => __("Couleurs", __FILE__),
                "Course_22" => __("Laine", __FILE__),
                "Course_23" => __("Extérieur", __FILE__),
                "Course_24" => __("Draps", __FILE__),
                "Course_25" => __("Synthétique", __FILE__),
                "Course_26" => __("Délicat", __FILE__),
                "Course_27" => __("Rinçage + Essorage", __FILE__),
                "Course_28" => __("Vidange / Essorage", __FILE__),
                "Course_29" => __("Nettoyage du tambour", __FILE__),
                "Course_2A" => __("Jeans", __FILE__),
                "Course_2B" => __("Tout laver (à confirmer)", __FILE__),
                "Course_2D" => __("Lavage Silencieux", __FILE__),
                "Course_2E" => __("Bébé Coton", __FILE__),
                "Course_2F" => __("Sport", __FILE__),
                "Course_30" => __("Journée nuageuse", __FILE__),
                "Course_32" => __("Chemises", __FILE__),
                "Course_33" => __("Serviettes", __FILE__),
                "Course_34" => __("Mix", __FILE__),
                "Course_36" => __("Lavage + Séchage", __FILE__),
                "Course_37" => __("Air wash", __FILE__),
                "Course_38" => __("Séchage coton", __FILE__),
                "Course_39" => __("Séchage synthétique", __FILE__),
                "Course_3A" => __("Nettoyage Tambour", __FILE__)
            ],
            "Table_03" => [
                "Course_16" =>  __("Coton", __FILE__),
                "Course_17" =>  __("Rapide (à confirmer)", __FILE__),
                "Course_18" =>  __("Synthétiques", __FILE__),
                "Course_19" =>  __("Délicat", __FILE__),
                "Course_1A" =>  __("Laine", __FILE__),
                "Course_1B" =>  __("Draps", __FILE__),
                "Course_1C" =>  __("Chemises", __FILE__),
                "Course_1D" =>  __("Serviettes", __FILE__),
                "Course_1E" =>  __("Vêtements de sport", __FILE__),
                "Course_1F" =>  __("Mix", __FILE__),
                "Course_20" =>  __("Prêt à repasser", __FILE__),
                "Course_21" =>  __("Anti-allergènes", __FILE__),
                "Course_23" =>  __("Séchage rapide 35 min", __FILE__),
                "Course_24" =>  __("Air froid", __FILE__),
                "Course_25" =>  __("Air chaud", __FILE__),
                "Course_26" =>  __("Air wash", __FILE__),
                "Course_27" =>  __("Minuterie", __FILE__)
            ]
        ];
    }
}
