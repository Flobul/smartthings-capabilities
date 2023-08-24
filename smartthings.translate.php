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
    public $enums;
    public $cmdName;
    public $cycles;

    public function __construct()
    {
        $this->enums = [
            "acceleration" => [
                "inactive" => __("Sans vibration", __FILE__),
                "active"   => __("Vibration détectée", __FILE__)
            ],
            "acOptionalMode" => [
                "motionDirect"   => __("Mouvement direct", __FILE__),
                "windFree"       => __("Sans courant d'air", __FILE__),
                "windFreeSleep"  => __("Sans courant d'air et nuit sereine activés", __FILE__),
                "energySaving"   => __("Économiseur d'énergie", __FILE__),
                "motionIndirect" => __("Mouvement indirect", __FILE__),
                "off"            => __("Options désactivées", __FILE__),
                "speed"          => __("Vitesse activée", __FILE__),
                "smart"          => __("Intelligent", __FILE__),
                "comfort"        => __("Confort", __FILE__),
                "sleep"          => __("Nuit sereine activée", __FILE__),
                "longWind"       => __("Longue portée d’air", __FILE__),
                "quiet"          => __("Silencieux activé", __FILE__),
                "cubePurify"     => __("cubePurify", __FILE__),
                "dlightCool"     => __("Refroidissement progressif", __FILE__),
                "twoStep"        => __("2 étapes", __FILE__)
            ],
            "activity" => [
                "noActivity" => __("Aucune activité", __FILE__),
                "falling"    => __("Chute", __FILE__),
                "standing"   => __("Debout", __FILE__),
                "eating"     => __("Pause repas", __FILE__),
                "sitting"    => __("Assis", __FILE__),
                "lying"      => __("Allongé", __FILE__)
            ],
            "airConditionerMode" => [
                "auto"               => __("Automatique", __FILE__),
                "cool"               => __("Froid", __FILE__),
                "heat"               => __("Chaleur", __FILE__),
                "clean"              => __("Purification", __FILE__),
                "dry"                => __("Séchage", __FILE__),
                "coolClean"          => __("Froid, purification", __FILE__),
                "dryClean"           => __("Sec, purification", __FILE__),
                "heatClean"          => __("Chaud, purification", __FILE__),
                "comfortCooling"     => __("Refroidissement confortable", __FILE__),
                "aIcomfort"          => __("IA Refroidissement confortable", __FILE__),
                "fan"                => __("Ventilateur", __FILE__),
                "airconditionermode" => __("airconditionermode", __FILE__),
                "fanOnly"            => __("Aération", __FILE__),
                "wind"               => __("Purifier", __FILE__),
                "notSupported"       => __("Non supporté", __FILE__),
                "ventilation"        => __("Ventilation", __FILE__),
                "sleep"              => __("Nuit", __FILE__),
                "eco"                => __("Eco", __FILE__),
                "heatex"             => __("Échange de chaleur", __FILE__),
                "purification"       => __("Purification", __FILE__),
                "power"              => __("power", __FILE__),
                "smartventilation"   => __("smartventilation", __FILE__),
                "std"                => __("std", __FILE__),
                "ai"                 => __("IA", __FILE__),
                "bypass"             => __("Ignorer", __FILE__),
                "force"              => __("Forcé", __FILE__)
            ],
            "airFlowDirection" => [
                "all"        => __("Toutes", __FILE__),
                "horizontal" => __("Horizontale", __FILE__),
                "fixed"      => __("Fixe", __FILE__),
                "vertical"   => __("Verticale", __FILE__)
            ],
            "airPurifierFanMode" => [
                "auto"     => __("Automatique", __FILE__),
                "sleep"    => __("Veille", __FILE__),
                "low"      => __("Faible", __FILE__),
                "medium"   => __("Moyen", __FILE__),
                "high"     => __("Intensif", __FILE__),
                "quiet"    => __("Silencieux", __FILE__),
                "windFree" => __("Ventilation autonome", __FILE__)
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
            "alarmSystemArmOnly" =>  [
                "away" => __("Absent", __FILE__),
                "off"  => __("Éteint", __FILE__),
                "stay" => __("Permanent", __FILE__)
            ],
            "alarmSystemStatus" =>  [
                "away" => __("Absent", __FILE__),
                "off"  => __("Éteint", __FILE__),
                "stay" => __("Permanent", __FILE__)
            ],
            "amount" => [
                "standard" => __("Standard", __FILE__),
                "extra"    => __("Surplus", __FILE__),
                "none"     => __("Aucune", __FILE__),
                "custom"   => __("Personnalisé", __FILE__),
                "less"     => __("Faible", __FILE__)
            ],
            "autoCleaningMode" => [
                "quietClean" => __("Nettoyage silencieux", __FILE__),
                "speedClean" => __("Nettoyage rapide", __FILE__),
                "off"        => __("Désactivé", __FILE__),
                "on"         => __("Activé", __FILE__)
            ],
            "babyDetergentType" => [
                "capsule"  => __("Dosette", __FILE__),
                "liquid"   => __("Liquide", __FILE__),
                "none"     => __("Aucun", __FILE__),
                "drySheet" => __("Lingettes", __FILE__)
            ],
            "blockingStatus" => [
                "blocked"   => __("Bloqué", __FILE__),
                "unblocked" => __("Débloqué", __FILE__)
            ],
            "brightnessLevel" => [
                "on"        => __("Activée", __FILE__),
                "extraHigh" => __("Très haute", __FILE__),
                "high"      => __("Haute", __FILE__),
                "low"       => __("Faible", __FILE__),
                "mid"       => __("Moyenne", __FILE__),
                "off"       => __("Désactivée", __FILE__)
            ],
            "brightnessIntensity"=> [
                "1"  => __("Nuit", __FILE__),
                "2"  => __("Crépuscule", __FILE__),
                "3"  => __("Éclairage intérieur faible", __FILE__),
                "4"  => __("Éclairage intérieur modéré", __FILE__),
                "5"  => __("Éclairage de bureau", __FILE__),
                "6"  => __("Journée nuageuse", __FILE__),
                "7"  => __("Luminosité du jour", __FILE__)
            ],
            "button" => [
                "up_hold"     => __("Maintenu vers le haut", __FILE__),
                "up_5x"       => __("Basculé vers le haut 5 fois", __FILE__),
                "up_6x"       => __("Basculé vers le haut 6 fois", __FILE__),
                "held"        => __("Maintenue appuyée", __FILE__),
                "double"      => __("Vous avez appuyé 2 fois", __FILE__),
                "down_6x"     => __("Basculé vers le bas 6 fois", __FILE__),
                "up_3x"       => __("Basculé vers le haut 3 fois", __FILE__),
                "down"        => __("Basculé vers le bas", __FILE__),
                "up_4x"       => __("Basculé vers le haut 4 fois", __FILE__),
                "up_2x"       => __("Basculé vers le haut 2 fois", __FILE__),
                "pushed_2x"   => __("2 appuis effectués", __FILE__),
                "pushed_6x"   => __("6 appuis effectués", __FILE__),
                "pushed_5x"   => __("5 appuis effectués", __FILE__),
                "pushed_4x"   => __("4 appuis effectués", __FILE__),
                "pushed_3x"   => __("3 appuis effectués", __FILE__),
                "down_4x"     => __("Basculé vers le bas 4 fois", __FILE__),
                "down_hold"   => __("Maintenu vers le bas", __FILE__),
                "down_5x"     => __("Basculé vers le bas 5 fois", __FILE__),
                "down_2x"     => __("Basculé vers le bas 2 fois", __FILE__),
                "down_3x"     => __("Basculé vers le bas 3 fois", __FILE__),
                "up"          => __("Basculé vers le haut", __FILE__),
                "pushed"      => __("Appuyée", __FILE__),
                "swipe_left"  => __("Balayé vers la gauche", __FILE__),
                "swipe_right" => __("Balayé vers la droite", __FILE__),
                "swipe_down"  => __("Balayé vers le bas", __FILE__),
                "swipe_up"    => __("Balayé vers le haut", __FILE__),
            ],
            "bypassStatus" => [
                "ready"    => __("Prêt pour l'activation", __FILE__),
                "bypassed" => __("Contourné", __FILE__),
                "notReady" => __("Pas prêt pour l'activation", __FILE__)
            ],
            "callStatus" => [
                "called"  => __("Appelé", __FILE__),
                "standby" => __("Non appelé", __FILE__),
                "unknown" => __("Inconnu", __FILE__),
            ],
            "camera" => [
                "restarting"  => __("Redémarrage", __FILE__),
                "unavailable" => __("Non disponible", __FILE__),
                "off"         => __("Désactivée", __FILE__),
                "on"          => __("Activée", __FILE__)
            ],
            "cameraPreset" => [
                "presets" => __("Orientation caméra sur point passage", __FILE__),
                "create"  => __("Créer l'orientation", __FILE__),
                "update"  => __("Mettre à jour l'orientation", __FILE__),
                "execute" => __("Executer l'orientation", __FILE__),
                "delete"  => __("Supprimer l'orientation", __FILE__)
            ],
            "carbonDioxideHealthConcern" => [
                "veryUnhealthy"     => __("Très mauvais", __FILE__),
                "slightlyUnhealthy" => __("Légèrement mauvais", __FILE__),
                "unhealthy"         => __("Mauvais", __FILE__),
                "hazardous"         => __("Dangereux", __FILE__),
                "good"              => __("Bon", __FILE__),
                "moderate"          => __("Moyen", __FILE__)
            ],
            "cleaningMode" => [
                "stop"            => __("Arrêté", __FILE__),
                "auto"            => __("Auto", __FILE__),
                "manual"          => __("Manuel", __FILE__),
                "spot"            => __("Recoin", __FILE__),
                "creatingMap"     => __("Création de carte", __FILE__),
                "area"            => __("Zone", __FILE__),
                "object"          => __("Objet", __FILE__),
                "map"             => __("Cartographie", __FILE__),
                "pet"             => __("Animal", __FILE__),
                "uncleanedObject" => __("Objet non nettoyé", __FILE__),
                "patternMap"      => __("patternMap", __FILE__)
            ],
            "carbonMonoxide" => [
                "tested"   => __("Testé", __FILE__),
                "clear"    => __("Sain", __FILE__),
                "detected" => __("Détecté", __FILE__)
            ],
            "colorMode" => [
                "other"            => __("Autre", __FILE__),
                "color"            => __("Couleur", __FILE__),
                "colorTemperature" => __("Température de couleur", __FILE__)
            ],
            "connection" => [
                "connected" => __("Connecté", __FILE__)
            ],
            "consumableStatus" => [
                "maintenance_required" => __("Maintenance requise", __FILE__),
                "missing"              => __("Manquant", __FILE__),
                "replace"              => __("Remplacement", __FILE__),
                "good"                 => __("Bon", __FILE__),
                "order"                => __("Commande", __FILE__)
            ],
            "contact" => [
                "closed" => __("Fermée", __FILE__),
                "open"   => __("Ouverte", __FILE__)
            ],
            "cookerMode" => [
                "cooking"      => __("Cuisson", __FILE__),
                "keepWarm"     => __("Chauffage", __FILE__),
                "reheating"    => __("Réchauffage", __FILE__),
                "autoClean"    => __("Nettoyage automatique", __FILE__),
                "soakInnerPot" => __("Trempage dans le pot intérieur", __FILE__)
            ],
            "cookerState" => [
                "ready"     => __("Prêt", __FILE__),
                "running"   => __("Actif", __FILE__),
                "scheduled" => __("Cuisson programmée", __FILE__),
                "error"     => __("Il y a un problème", __FILE__)
            ],
            "cooktopOperatingState" => [
                "paused"   => __("En pause", __FILE__),
                "ready"    => __("Prêt", __FILE__),
                "run"      => __("En fonctionnement", __FILE__),
                "finished" => __("Terminé", __FILE__)
            ],
            "custom.airConditionerOptionalMode"  => [
                "motionDirect"   => __("Mouvement direct", __FILE__),
                "windFree"       => __("Sans courant d'air", __FILE__),
                "windFreeSleep"  => __("Sans courant d'air et nuit sereine activés", __FILE__),
                "energySaving"   => __("Économiseur d'énergie", __FILE__),
                "motionIndirect" => __("Mouvement indirect", __FILE__),
                "off"            => __("Options désactivées", __FILE__),
                "speed"          => __("Vitesse activée", __FILE__),
                "smart"          => __("Intelligent", __FILE__),
                "comfort"        => __("Confort", __FILE__),
                "sleep"          => __("Nuit sereine activée", __FILE__),
                "longWind"       => __("Longue portée d’air", __FILE__),
                "quiet"          => __("Silencieux activé", __FILE__),
                "cubePurify"     => __("cubePurify", __FILE__),
                "dlightCool"     => __("Refroidissemnt d'light", __FILE__),
                "twoStep"        => __("2 étapes", __FILE__)
            ],
            "dayOfWeek" => [
                "Sun" => __("Dimanche", __FILE__),
                "Mon" => __("Lundi", __FILE__),
                "Tue" => __("Mardi", __FILE__),
                "Wed" => __("Mercredi", __FILE__),
                "Thu" => __("Jeudi", __FILE__),
                "Fri" => __("Vendredi", __FILE__),
                "Sat" => __("Samedi", __FILE__)
            ],
            "defrost" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "density" => [
                "normal"    => __("Normale", __FILE__),
                "high"      => __("Élevée", __FILE__),
                "extraHigh" => __("Très élevée", __FILE__),
                "custom"    => __("Personnalisé", __FILE__),
                "none"      => __("Aucune", __FILE__)
            ],
            "detected" => [
              "parcel"  => __("Emballage", __FILE__),
              "human_0" => __("Aucune personne", __FILE__),
              "none"    => __("Aucune", __FILE__),
              "human"   => __("Personne", __FILE__),
              "pet"     => __("Animal", __FILE__)
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
            "dewPoint" => [
                "dewpoint" =>__("Point de ros\u00e9e", __FILE__)
            ],
            "disableAlarm" => [
                "regularDetergent" => __("Lessive ordinaire", __FILE__),
                "neutralDetergent" => __("Lessive neutre", __FILE__),
                "babyDetergent"    => __("Lessive pour bébé", __FILE__)
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
                "weightsensing"  => __("Vérification du poids", __FILE__),
                "wash"           => __("Lavage", __FILE__),
                "none"           => __("Aucun", __FILE__),
                "prewash"        => __("Prélavage", __FILE__),
                "predrain"       => __("Trempage", __FILE__),
                "airwash"        => __("Lavage à l'air", __FILE__),
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
                "weightsensing"  => __("Vérification du poids", __FILE__),
                "wash"           => __("Lavage", __FILE__),
                "none"           => __("Aucun", __FILE__),
                "prewash"        => __("Prélavage", __FILE__),
                "predrain"       => __("Trempage", __FILE__),
                "airwash"        => __("Lavage à l'air", __FILE__),
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
                "airwash"        => __("Lavage à l'air", __FILE__),
                "rinse"          => __("Rinçage", __FILE__),
                "unknown"        => __("Inconnu", __FILE__)
            ],
            "dishwasherMode" => [
                "auto"  => __("Automatique", __FILE__),
                "quick" => __("Rapide", __FILE__),
                "dry"   => __("Sec", __FILE__),
                "rinse" => __("Rinçage", __FILE__)
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
            "drivingStatus" => [
                "driving"     => __("En train de conduire", __FILE__),
                "notDriving"  => __("Pas en train de conduire", __FILE__)
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
                "highHeat" => __("Intensif", __FILE__),
                "regular"  => __("Normal", __FILE__),
                "lowHeat"  => __("Économique", __FILE__)
            ],
            "dryerJobState" => [
                "weightSensing"           => __("Détection de la charge", __FILE__),
                "drying"                  => __("Séchage", __FILE__),
                "refreshing"              => __("Rafraîchissant", __FILE__),
                "cooling"                 => __("Refroidissement", __FILE__),
                "wrinklePrevent"          => __("Anti-froissage", __FILE__),
                "sanitizing"              => __("Désinfection", __FILE__),
                "delayWash"               => __("Lavage différé", __FILE__),
                "finished"                => __("Cycle terminé", __FILE__),
                "internalCare"            => __("Nettoyage", __FILE__),
                "none"                    => __("En cours", __FILE__),
                "dehumidifying"           => __("Déshumidificateur", __FILE__),
                "aIDrying"                => __("IA séchage", __FILE__),
                "humiditySensing"         => __("Détection d'humidité" ,__FILE__),
                "delayDry"                => __("Fin du cycle différé", __FILE__),
                "continuousDehumidifying" => __("Déshumidification", __FILE__),
                "thawingFrozenInside"     => __("Dégivrage", __FILE__),
                "freezeProtection"        => __("Mode antigel", __FILE__)
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
            "dumpType" => [
                "file" => __("Fichier", __FILE__),
                "id"   => __("Identifiant", __FILE__)
            ],
            "durationAlarm" => [
                  "normal"  => __("Normal", __FILE__),
                  "alarm"   => __("Alarme", __FILE__),
                  "warning" => __("Attention", __FILE__),
            ],
            "dustHealthConcern" => [
                "veryUnhealthy"     => __("Très mauvais", __FILE__),
                "slightlyUnhealthy" => __("Légèrement mauvais", __FILE__),
                "unhealthy"         => __("Mauvais", __FILE__),
                "hazardous"         => __("Dangereux", __FILE__),
                "good"              => __("Bon", __FILE__),
                "moderate"          => __("Moyen", __FILE__)
            ],
            "dustSensor" => [
                "dustLevel"     => __("PM 10", __FILE__),
                "fineDustLevel" => __("PM 2,5", __FILE__),
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
            "enableAlarm" => [
                "regularDetergent" => __("Lessive ordinaire", __FILE__),
                "neutralDetergent" => __("Lessive neutre", __FILE__),
                "babyDetergent"    => __("Lessive pour bébé", __FILE__)
            ],
            "encryption" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "endpoint" => [
                "NONE"  => __("AUCUN", __FILE__),
                "PIPER" => __("PIPER", __FILE__),
                "SSM"   => __("SSM", __FILE__),
            ],
            "engineState" => [
                "running"  => __("Actif", __FILE__),
                "starting" => __("Démarrage", __FILE__),
                "off"      => __("Arrêté", __FILE__),
                "unknown"  => __("Inconnu", __FILE__)
            ],
            "event" => [
                "cookingComplete"      => __("Cuisson terminée", __FILE__),
                "keepWarmComplete"     => __("Maintien au chaud arrêté", __FILE__),
                "reheatingComplete"    => __("Réchauffage terminé", __FILE__),
                "autoCleanComplete"    => __("Nettoyage automatique terminé", __FILE__),
                "soakInnerPotComplete" => __("Trempage dans le pot intérieur terminé", __FILE__),
                "steamEmission"        => __("Libération de la vapeur", __FILE__)
            ],
            "execute::OperationState" => [
                    "Ready" => __("Prêt", __FILE__),
                    "Run"   => __("Allumé", __FILE__),
            ],
            "execute::HotSurface" => [
                "Normal" => __("Normal", __FILE__)
            ],
            "execute::IndependentTimerCheck" => [
                "Enable"  => __("Activé", __FILE__),
                "Disable" => __("Désactivé", __FILE__),
            ],
            "execute::MainTimerState" => [
                "Run"    => __("Lancé", __FILE__),
                "Finish" => __("Terminé", __FILE__),
                "Ready"  => __("Prêt", __FILE__),
            ],
            "execute::PowerLevel" => [
                "KeepWarm" => __("Maintien au chaud", __FILE__),
                "Boost"    => __("Boost", __FILE__),
                "0"        => __("0", __FILE__),
                "1"        => __("1", __FILE__),
                "2"        => __("2", __FILE__),
                "3"        => __("3", __FILE__),
                "4"        => __("4", __FILE__),
                "5"        => __("5", __FILE__),
                "6"        => __("6", __FILE__),
                "7"        => __("7", __FILE__),
                "8"        => __("8", __FILE__),
                "9"        => __("9", __FILE__),
                "10"        => __("10", __FILE__),
                "11"        => __("11", __FILE__),
                "12"        => __("12", __FILE__),
                "13"        => __("13", __FILE__),
                "14"        => __("14", __FILE__),
                "15"        => __("15", __FILE__)
            ],
            "fanMode" => [
                "high"     => __("Élevée", __FILE__),
                "max"      => __("Maximum", __FILE__),
                "medium"   => __("Moyenne", __FILE__),
                "pet"      => __("Animal de compagnie", __FILE__),
                "auto"     => __("Automatique", __FILE__),
                "sleep"    => __("Veille", __FILE__),
                "windFree" => __("Ventilation autonome", __FILE__),
                "smart"    => __("Intelligent", __FILE__),
                "low"      => __("Basse", __FILE__),
                "quite"    => __("Assez rapide", __FILE__),
                "quiet"    => __("Silencieux", __FILE__),
                "turbo"    => __("Turbo", __FILE__),
                "1"        => __("1", __FILE__),
                "2"        => __("2", __FILE__),
                "3"        => __("3", __FILE__),
                "4"        => __("4", __FILE__),
                "5"        => __("5", __FILE__)
            ],
            "fanOscillationMode" => [
                "all"         => __("Toutes", __FILE__),
                "fixed"       => __("Fixe", __FILE__),
                "vertical"    => __("Verticale", __FILE__),
                "horizontal"  => __("Horizontale", __FILE__),
                "indirect"    => __("Indirecte", __FILE__),
                "individual"  => __("Individuelle", __FILE__),
                "fixedCenter" => __("Au centre", __FILE__),
                "fixedLeft"   => __("À gauche", __FILE__),
                "fixedRight"  => __("À droite", __FILE__),
                "far"         => __("Longue", __FILE__),
                "off"         => __("Désactivée", __FILE__),
                "direct"      => __("Directe", __FILE__),
                "wide"        => __("Ample", __FILE__),
                "mid"         => __("Intermédiaire", __FILE__),
                "spot"        => __("Fixe", __FILE__),
                "swing"       => __("Balayage", __FILE__)
            ],
            "fanSpeed" => [
                "off"    => __("Désactivée", __FILE__),
                "low"    => __("Basse", __FILE__),
                "medium" => __("Moyenne", __FILE__),
                "high"   => __("Élevée", __FILE__),
                "max"    => __("Maximale", __FILE__)
            ],
            "filterStatus" => [
                "normal"  => __("Normal", __FILE__),
                "replace" => __("Remplacement requis", __FILE__)
            ],
            "fineDustHealthConcern" => [
                "veryUnhealthy"     => __("Très mauvais", __FILE__),
                "slightlyUnhealthy" => __("Légèrement mauvais", __FILE__),
                "unhealthy"         => __("Mauvais", __FILE__),
                "hazardous"         => __("Dangereux", __FILE__),
                "good"              => __("Bon", __FILE__),
                "moderate"          => __("Moyen", __FILE__)
            ],
            "gas" => [
                "tested"   => __("Appareil testé", __FILE__),
                "clear"    => __("Sain", __FILE__),
                "detected" => __("Gaz détecté", __FILE__)
            ],
            "gasMeterPrecision" => [
                "conversion" => __("Conversion", __FILE__),
                "volume"     => __("Volume", __FILE__),
                "calorific"  => __("Calorifique", __FILE__)
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
            "heatingMode" => [
                "melt"         => __("Faire fondre", __FILE__),
                "keepWarm"     => __("Maintien au chaud", __FILE__),
                "quickPreheat" => __("Préchauffage rapide", __FILE__),
                "defrost"      => __("Décongélation", __FILE__),
                "boost"        => __("Boost", __FILE__),
                "simmer"       => __("Mijoter", __FILE__),
                "manual"       => __("Manuel", __FILE__),
                "off"          => __("Eteint", __FILE__),
                "onOff"        => __("On Off", __FILE__)
            ],
            "hepaFilterStatus" => [
                "notused" => __("Non utilisé", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "homingReason" => [
                "cleaningCompleted" => __("Nettoyage terminé", __FILE__),
                "mapCreated"        => __("Carte créée", __FILE__),
                "lowBattery"        => __("Batterie faible", __FILE__),
                "doNotDisturb"      => __("Ne pas déranger", __FILE__),
                "dustFulled"        => __("Poussiéreux", __FILE__),
                "none"              => __("Aucun", __FILE__),
                "relocalFailed"     => __("Erreur de localisation", __FILE__),
                "cleaningCanceled"  => __("Nettoyage annulé", __FILE__),
            ],
            "humidifierMode" => [
                "auto"   => __("Automatique", __FILE__),
                "high"   => __("Élevé", __FILE__),
                "low"    => __("Faible", __FILE__),
                "medium" => __("Moyen", __FILE__)
            ],
            "indicatorStatus" => [
                "never"    => __("Jamais", __FILE__),
                "when off" => __("Quand le commutateur est éteint", __FILE__),
                "when on"  => __("Quand le commutateur est allumé", __FILE__),
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
            "lastSensingLevel" => [
                "computer" => __("Ordinateur", __FILE__),
                "cn2"      => __("Mod\u00e9r\u00e9", __FILE__),
                "cn1"      => __("Bon", __FILE__),
                "cn4"      => __("Insalubre", __FILE__),
                "cn3"      => __("Insalubre pour les populations \u00e0 risque", __FILE__),
                "cn6"      => __("Dangereux", __FILE__),
                "kr2"      => __("Normal", __FILE__),
                "cn5"      => __("Tr\u00e8s insalubre", __FILE__),
                "kr1"      => __("Bon", __FILE__),
                "kr4"      => __("Tr\u00e8s mauvais", __FILE__),
                "kr3"      => __("Mauvais", __FILE__)
            ],
            "level" => [
                "low"    => __("Bas", __FILE__),
                "medium" => __("Moyen", __FILE__),
                "high"   => __("Élevé", __FILE__)
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
                "unlocked with timeout" => __("Déverrouillé temporairement", __FILE__),
                "not fully locked"      => __("Pas complètement verrouillé", __FILE__),
                "locked"                => __("Verrouillé", __FILE__),
                "unlocked"              => __("Déverrouillé", __FILE__),
                "unknown"               => __("Inconnu", __FILE__)
            ],
            "lockState" => [
                "paused"   => __("Pause", __FILE__),
                "locked"   => __("Verrouillé", __FILE__),
                "unlocked" => __("Déverrouillé", __FILE__)
            ],
            "logType" => [
                "errCode" => __("Code d'erreur", __FILE__),
                "dump"    => __("Vidage", __FILE__)
            ],
            "machineState" => [
                "stop"    => __("Arrêté", __FILE__),
                "run"     => __("Marche", __FILE__),
                "pause"   => __("Mis en pause", __FILE__),
                "running" => __("Fonctionnement", __FILE__),
                "paused"  => __("Mis en pause", __FILE__),
                "ready"   => __("Prêt", __FILE__)
            ],
            "menu" => [
                "stickyPlainRice" => __("Riz blanc collant", __FILE__),
                "wellCookedPlainRice" => __("Riz blanc bien cuit", __FILE__),
                "frozenPlainRice" => __("Riz blanc surgelé", __FILE__),
                "mixedGrains" => __("Mélange de céréales", __FILE__),
                "brownRice100" => __("100 % de riz brun", __FILE__),
                "riceWithBeans" => __("Riz avec haricots", __FILE__),
                "barleyMixedGrainRice" => __("Orge riz à grains mélangés", __FILE__),
                "superGrains" => __("Riz avec super céréales", __FILE__),
                "frozenMixedGrain" => __("Céréales mélangées surgelées", __FILE__),
                "cauldronRice" => __("Riz cuit dans un pot en grès", __FILE__),
                "riceForGimbap" => __("Riz pour gimbap", __FILE__),
                "plainQuick" => __("Riz blanc rapide", __FILE__),
                "konjacRice" => __("Riz de Konjac", __FILE__),
                "mixedGrainForSalad" => __("Mélange de céréales en salade", __FILE__),
                "mixedGrainsQuick" => __("Mélange de céréales rapide", __FILE__),
                "nutritiousRiceInHotPot" => __("Riz nutritif cuit dans un pot en grès", __FILE__),
                "steamedDish" => __("Plat à la vapeur", __FILE__),
                "nutritiousPorridge" => __("Porridge nutritif", __FILE__),
                "scorchedRiceTea" => __("Thé de croûte de riz", __FILE__),
                "bakedEgg" => __("Œufs cuits", __FILE__),
                "sousVide" => __("Sous-vide", __FILE__),
                "scorchedRice" => __("Croûte de riz", __FILE__),
                "babyFoodStep1" => __("Nourriture pour bébé étape 1", __FILE__),
                "babyFoodStep2" => __("Nourriture pour bébé étape 2", __FILE__),
                "babyFoodStep3" => __("Nourriture pour bébé étape 3", __FILE__),
                "riceWithSeasonedVegetablesInHotPot" => __("Riz cuit dans un pot en grès avec légumes de saison", __FILE__),
                "mixedGrainForSlim" => __("Mélange de céréales pour la perte de poids", __FILE__),
                "mixedGrainForVitality" => __("Mélange de céréales pour la vitalité", __FILE__),
                "haedeul" => __("Haedeul", __FILE__),
                "alchanmi" => __("Alchanmi", __FILE__),
                "odaemi" => __("Odaemi", __FILE__),
                "oatRice" => __("Riz avec avoine", __FILE__),
                "chickpeaRice" => __("Riz avec pois chiches", __FILE__),
                "quinoaRice" => __("Riz avec quinoa", __FILE__),
                "lentilBeanRice" => __("Riz avec lentilles", __FILE__),
                "steamedSweetPotato" => __("Patate douce à la vapeur", __FILE__),
                "galbijjim" => __("Galbijjim", __FILE__),
                "samgyetang" => __("Samgyetang", __FILE__),
                "riceWithWebfootOctopusAndSaussureaInHotPot" => __("Riz cuit dans un pot en grès avec poulpe ocellé et un saussurea", __FILE__),
                "riceWithAbaloneInHotPot" => __("Riz cuit dans un pot en grès avec ormeau", __FILE__),
                "riceWithTruffledBulgogiInHotPot" => __("Riz cuit dans un pot en grès avec steak", __FILE__),
                "riceWithSteakInHotPot" => __("Riz cuit dans un pot en grès avec steak", __FILE__),
                "riceWithRipeKimchiAndAbaloneInHotPot" => __("Riz cuit dans un pot en grès avec ormeau et kimchi mûr", __FILE__),
                "riceWithBeefAndBeanSproutsInHotPot" => __("Riz cuit dans un pot en grès avec du bœuf et des germes de soja", __FILE__),
                "riceWithAssortedMushrommsInHotPot" => __("Riz cuit dans un pot en grès avec un assortiment de champignons", __FILE__),
                "riceWithBrackenAndSteakInHotPot" => __("Riz cuit dans un pot en grès avec steak et fougères", __FILE__),
                "riceWithBeefAndAssortedMushroomsInHotPot" => __("Riz cuit dans un pot en grès avec du bœuf et un assortiment de champignons", __FILE__),
                "riceWithSpicyWebfootOctopusInHotPot" => __("Riz cuit dans un pot en grès avec poulpe ocellé", __FILE__),
                "kamutRice" => __("Riz avec kamut", __FILE__),
                "mixedGrainForSaladWithLentilBean" => __("Mélange de céréales et lentilles en salade", __FILE__),
                "mixedGrainForSaladWithChickpea(1Cup)" => __("Mélange de céréales et pois chiches en salade (1 tasse)", __FILE__),
                "mixedGrainForSaladWithQuinoa" => __("Mélange de céréales et quinoa en salade", __FILE__),
                "mixedGrainForSaladWithMillet" => __("Mélange de céréales et millet en salade", __FILE__),
                "mixedGrainForSaladWithChickpea(2Cup)" => __("Mélange de céréales et pois chiches en salade (2 tasses)", __FILE__),
                "mixedGrainForSaladWithBarley" => __("Mélange de céréales et orge en salade", __FILE__),
                "mixedGrainForSaladWithBrownRice(1Cup)" => __("Mélange de céréales et riz brun en salade (1 tasse)", __FILE__),
                "mixedGrainForSaladWithOatRice" => __("Mélange de céréales et avoine en salade", __FILE__),
                "mixedGrainForSaladWithBrownRice(2Cup)" => __("Mélange de céréales et riz brun en salade (2 tasses)", __FILE__),
                "mixedGrainForSaladWithKamut" => __("Mélange de céréales et kamut en salade", __FILE__),
                "mixedGrainForSaladWithBrownRice" => __("Mélange de céréales et riz brun en salade", __FILE__),
                "mixedGrainForSaladWithQuinoa(1Cup)" => __("Mélange de céréales et quinoa en salade (1 tasse)", __FILE__),
                "mixedGrainForSaladWithChickpea" => __("Mélange de céréales et pois chiches en salade", __FILE__),
                "mixedGrainForSaladWithQuinoa(2Cup)" => __("Mélange de céréales et quinoa en salade (2 tasses)", __FILE__),
                "mixedGrainForSaladWithAdlay" => __("Mélange de céréales avec herbe à chapelets en salade", __FILE__),
                "mixedGrainForSaladWithLentilBean(1Cup)" => __("Céréales mélangées pour salade avec lentilles (1 tasse)", __FILE__),
                "plainPorridge" => __("Porridge nature", __FILE__),
                "mixedGrainForSaladWithLentilBean(2Cup)" => __("céréales mélangées pour salade avec lentilles (2 tasses)", __FILE__),
                "abalonePorridge" => __("Bouillie de riz à l'ormeau", __FILE__),
                "pineNutPorridge" => __("Porridge aux pignons de pin", __FILE__),
                "boiledEgg" => __("Œuf à la coque", __FILE__),
                "chicken,SweetPumpkin,Cabbage,StickyRicePorridge" => __("Porridge au poulet, potiron, chou et riz gluant", __FILE__),
                "chicken,Zucchini,SweetPotato,StickyRicePorridge" => __("Porridge au poulet, courgette, patate douce et riz gluant", __FILE__),
                "beef,Apple,BroccoliPorridge" => __("Porridge au bœuf, aux pommes et au brocoli", __FILE__),
                "chicken,BokChoy,BananaPorridge" => __("Porridge au poulet, BokChoy et banane", __FILE__),
                "beef,Zucchini,PearPorridge" => __("Porridge au boeuf, courgette et poire", __FILE__),
                "beef,ShiitakeMushroom,EggPorridge" => __("Porridge au boeuf, champignon Shiitake et oeufs", __FILE__),
                "beef,KingTrumpetMushroom,BroccoliPorridge" => __("Porridge au bœuf, champignons de Paris et brocoli", __FILE__),
                "chicken,BeanSprouts,Jujube,StickyRicePorridge" => __("Porridge au poulet, germes de soja, jujube et riz gluant", __FILE__),
                "cod-Meat,Vitamin,CarrotPorridge" => __("Porridge à la viande de morue, vitamines et carottes", __FILE__),
                "chicken,SweetPotato,Beet,BeetPorridge" => __("Porridge au poulet, patate douce, betterave et betterave", __FILE__),
                "chicken,PineNut,Chestnut,Spinach,SoftBoiledRice" => __("Poulet, pignon, châtaigne, épinards et riz cuit à point", __FILE__),
                "beef,Beet,EnokiMushroom,PerillaSeeds,SoftBoiledRice" => __("Bœuf, betterave, champignon Enoki, graines de périlla et riz cuit à l'étouffée", __FILE__),
                "chicken,Cheese,Beet,Eggplant,SoftBoiledRice" => __("Poulet, fromage, betterave, aubergine, riz à la coque", __FILE__),
                "codFlesh,SweetPumpkin,Mung-BeanSprouts,BlackSesame,SoftBoiledRice" => __("Chair de morue, potiron, pousses de haricot mungo, sésame noir, riz cuit à l'eau.", __FILE__),
                "beef,Cabbage,WhiteMushroom,Jujube,SoftBoiledRice" => __("Bœuf, chou, champignon blanc, jujube, riz cuit à l'eau", __FILE__),
                "broccoliPorridge" => __("Porridge au brocoli", __FILE__),
                "potatoCarrotPorridge" => __("Porridge carotte et pomme de terre", __FILE__),
                "yakbab" => __("Yakbab", __FILE__),
                "steamedPotato" => __("Pomme de terre à la vapeur", __FILE__),
                "customMenu01" => __("Menu personnalisé 01", __FILE__),
                "customMenu02" => __("Menu personnalisé 02", __FILE__),
                "customMenu03" => __("Menu personnalisé 03", __FILE__),
                "customMenu04" => __("Menu personnalisé 04", __FILE__),
                "customMenu05" => __("Menu personnalisé 05", __FILE__),
                "customMenu06" => __("Menu personnalisé 06", __FILE__),
                "customMenu07" => __("Menu personnalisé 07", __FILE__),
                "customMenu08" => __("Menu personnalisé 08", __FILE__),
                "customMenu09" => __("Menu personnalisé 09", __FILE__),
                "customMenu10" => __("Menu personnalisé 10", __FILE__),
                "customMenu11" => __("Menu personnalisé 11", __FILE__),
                "customMenu12" => __("Menu personnalisé 12", __FILE__),
                "customMenu13" => __("Menu personnalisé 13", __FILE__),
                "customMenu14" => __("Menu personnalisé 14", __FILE__),
                "customMenu15" => __("Menu personnalisé 15", __FILE__),
                "customMenu16" => __("Menu personnalisé 16", __FILE__),
                "customMenu17" => __("Menu personnalisé 17", __FILE__),
                "customMenu18" => __("Menu personnalisé 18", __FILE__),
                "customMenu19" => __("Menu personnalisé 19", __FILE__),
                "customMenu20" => __("Menu personnalisé 20", __FILE__)
            ],
            "moldHealthConcern" => [
                "veryUnhealthy"     => __("Très mauvais", __FILE__),
                "slightlyUnhealthy" => __("Légèrement mauvais", __FILE__),
                "unhealthy"         => __("Mauvais", __FILE__),
                "hazardous"         => __("Dangereux", __FILE__),
                "good"              => __("Bon", __FILE__),
                "moderate"          => __("Moyen", __FILE__)
            ],
            "monitoringStatus" => [
                "ready"      => __("Prêt", __FILE__),
                "selected"   => __("Selectionné", __FILE__),
                "moving"     => __("En mouvement", __FILE__),
                "monitoring" => __("En surveillance", __FILE__),
                "finished"   => __("Terminé", __FILE__),
                "paused"     => __("En pause", __FILE__),
                "abnormal"   => __("Anormal", __FILE__),
                "error"      => __("Erreur", __FILE__)
            ],
            "motion" => [
                "inactive" => __("Aucun mouvement", __FILE__),
                "active"   => __("Mouvement détecté", __FILE__)
            ],
            "motorFilterResetType" => [
                "washable" => __("Lavable", __FILE__)
            ],
            "motorFilterStatus" => [
                "normal" => __("Normal", __FILE__),
                "wash"   => __("Lavage", __FILE__)
            ],
            "movement" => [
                "entering"    => __("Entrée", __FILE__),
                "inactive"    => __("Inactif", __FILE__),
                "movingAway"  => __("Eloigner", __FILE__),
                "approaching" => __("En approche", __FILE__),
                "leaving"     => __("Partir", __FILE__)
            ],
            "mute" => [
                "unmuted" => __("Son activé", __FILE__),
                "muted"   => __("Son coupé", __FILE__),
                "unknown" => __("Inconnu", __FILE__)
            ],
            "neutralDetergentType" => [
                "capsule"  => __("Dosette", __FILE__),
                "liquid"   => __("Liquide", __FILE__),
                "none"     => __("Aucun", __FILE__),
                "drySheet" => __("Lingettes", __FILE__)
            ],
            "occupancy" => [
                "occupied"   => __("À l'intérieur", __FILE__),
                "unoccupied" => __("Absent(e)", __FILE__)
            ],
            "operatingState" => [
                "available"               => __("Disponible", __FILE__),
                "calibrating"             => __("Étalonnage en cours", __FILE__),
                "cleaning"                => __("Nettoyage", __FILE__),
                "charging"                => __("En charge", __FILE__),
                "chargingForRemainingJob" => __("En charge pour le travail restant", __FILE__),
                "charged"                 => __("Charge complète", __FILE__),
                "checking"                => __("En vérification", __FILE__),
                "completed"               => __("Effectuée", __FILE__),
                "delayed"                 => __("Retardée", __FILE__),
                "emitDust"                => __("Émission de poussière", __FILE__),
                "error"                   => __("Vérification requise", __FILE__),
                "exploring"               => __("Exploration", __FILE__),
                "factoryReset"            => __("Remise à zéro", __FILE__),
                "findingPet"              => __("Trouve un animal", __FILE__),
                "homing"                  => __("Retour pour chargement", __FILE__),
                "idle"                    => __("En attente", __FILE__),
                "inprogress"              => __("En cours", __FILE__),
                "manual"                  => __("Manuel", __FILE__),
                "mediaPlaying"            => __("Lecture de piste", __FILE__),
                "messaging"               => __("Envoi de la voix", __FILE__),
                "monitoring"              => __("Contrôle", __FILE__),
                "monitoringAutomation"    => __("Automatisation du contrôle", __FILE__),
                "moving"                  => __("En déplacement", __FILE__),
                "none"                    => __("Aucune", __FILE__),
                "patrol"                  => __("Patrouille", __FILE__),
                "pause"                   => __("En pause", __FILE__),
                "paused"                  => __("Pause", __FILE__),
                "powerSaving"             => __("Mode d'économie d'énergie", __FILE__),
                "preparing"               => __("En préparation", __FILE__),
                "processing"              => __("Localisation", __FILE__),
                "reserved"                => __("Réservé", __FILE__),
                "ready"                   => __("Prêt", __FILE__),
                "relocal"                 => __("Localisation", __FILE__),
                "running"                 => __("En cours", __FILE__),
                "welcoming"               => __("Bienvenue", __FILE__),
            ],
            "operationState" => [
                "Inactive"       => __("Inactif", __FILE__),
                "Ready"          => __("Prêt", __FILE__),
                "DelayedStart"   => __("Départ différé", __FILE__),
                "Run"            => __("Démarré", __FILE__),
                "Pause"          => __("En pause", __FILE__),
                "ActionRequired" => __("Action requise", __FILE__),
                "Finished"       => __("Terminé", __FILE__),
                "Error"          => __("En erreur", __FILE__),
                "Aborting"       => __("Annulé", __FILE__),
                "Offline"        => __("Déconnecté", __FILE__),
            ],
            "outingMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "ovenMode" => [
                "heating"                        => __("Chauffage", __FILE__),
                "SlimStrong"                     => __("Fin épais", __FILE__),
                "Others"                         => __("Autres", __FILE__),
                "SteamBottomHeatplusConvection"  => __("Vapeur par le bas + convection", __FILE__),
                "warming"                        => __("Réchauffage", __FILE__),
                "MWplusGrill"                    => __("Micro-onde + Gril", __FILE__),
                "defrosting"                     => __("Décongélation", __FILE__),
                "grill"                          => __("gril", __FILE__),
                "MWplusConvection"               => __("Micro-onde + Convection", __FILE__),
                "SlimMiddle"                     => __("Fin moyen", __FILE__),
                "AirFry"                         => __("Friteuse", __FILE__),
                "AirFryer"                       => __("Frire", __FILE__),
                "AirSousvide"                    => __("Air sous vide", __FILE__),
                "Autocook"                       => __("Autocuiseur", __FILE__),
                "AutocookCustom"                 => __("Autocuiseur personalisé", __FILE__),
                "Bake"                           => __("Cuisson", __FILE__),
                "Bottom"                         => __("Par le bas", __FILE__),
                "BottomConvection"               => __("Convection par le bas", __FILE__),
                "BottomHeat"                     => __("Chaleur par le bas", __FILE__),
                "BottomHeatPluseConvection"      => __("Chaleur par le bas + Convection", __FILE__),
                "BreadProof"                     => __("Levage de pain", __FILE__),
                "Broil"                          => __("Grillade", __FILE__),
                "BroilCombi"                     => __("Combi Grillade", __FILE__),
                "BroilConvection"                => __("Convection Grillade", __FILE__),
                "BroilS"                         => __("Grillade S", __FILE__),
                "CatalyticClean"                 => __("Nettoyage par catalyse", __FILE__),
                "ChefBake"                       => __("Cuisson du chef", __FILE__),
                "ChefBroil"                      => __("Grillade du chef", __FILE__),
                "ChefProof"                      => __("Levage du chef", __FILE__),
                "CleanAirPyro"                   => __("Pyrolyse à air pur", __FILE__),
                "Convection"                     => __("Convection", __FILE__),
                "ConvectionBake"                 => __("Cuisson par convection", __FILE__),
                "ConvectionBroil"                => __("Grillade par convection", __FILE__),
                "ConvectionCombi"                => __("Combi convection", __FILE__),
                "ConvectionRoast"                => __("Rôtissage par convection", __FILE__),
                "ConvectionSear"                 => __("Saisir par convection", __FILE__),
                "Conventional"                   => __("Conventionnel", __FILE__),
                "Cookie"                         => __("Biscuit", __FILE__),
                "Defrost"                        => __("Décongélation", __FILE__),
                "DefrostA"                       => __("Décongélation A", __FILE__),
                "Dehydrate"                      => __("Déshydratation", __FILE__),
                "Deodorization"                  => __("Désodorisation", __FILE__),
                "Descale"                        => __("Détartrage", __FILE__),
                "Drain"                          => __("Vidange", __FILE__),
                "Drying"                         => __("Séchage", __FILE__),
                "Easycook1"                      => __("Cuisine facile 1", __FILE__),
                "Easycook2"                      => __("Cuisine facile 2", __FILE__),
                "Easycook3"                      => __("Cuisine facile 3", __FILE__),
                "EcoConvection"                  => __("Convection écologique", __FILE__),
                "EcoGrill"                       => __("Gril écologique", __FILE__),
                "FanConventional"                => __("Ventilation classique", __FILE__),
                "FanGrill"                       => __("Ventilation gril", __FILE__),
                "FavoriteCook"                   => __("Cuisson préférée", __FILE__),
                "FavoriteRecipes"                => __("Recette préférée", __FILE__),
                "Fermentation"                   => __("Fermentation", __FILE__),
                "FineSteam"                      => __("Vapeur fine", __FILE__),
                "FourPartPureConvection"         => __("Convection pure en quatre parties", __FILE__),
                "FourPartPureConvectionSingle"   => __("Simple convection pure en quatre parties", __FILE__),
                "FrozenFood"                     => __("Produits surgelés", __FILE__),
                "FrozenMode"                     => __("Mode surgelé", __FILE__),
                "GreenClean"                     => __("Nettoyage écologique", __FILE__),
                "GreenCleanReal"                 => __("Nettoyage écologique réel", __FILE__),
                "Grill"                          => __("Gril", __FILE__),
                "GrillConvection"                => __("Gril convection", __FILE__),
                "HOMECARE_WIZARD_V2"             => __("HOMECARE_WIZARD_V2", __FILE__),
                "Healthycook1"                   => __("Cuisine saine 1", __FILE__),
                "Healthycook2"                   => __("Cuisine saine 2", __FILE__),
                "Healthycook3"                   => __("Cuisine saine 3", __FILE__),
                "Healthycook4"                   => __("Cuisine saine 4", __FILE__),
                "Healthycook5"                   => __("Cuisine saine 5", __FILE__),
                "Healthycook6"                   => __("Cuisine saine 6", __FILE__),
                "ConvectionVegetable"            => __("Légumes par convection", __FILE__),
                "HotBlast"                       => __("Air pulsé", __FILE__),
                "IntensiveCook"                  => __("Cuisine intensive", __FILE__),
                "InternalClean"                  => __("Nettoyage intérieur", __FILE__),
                "KeepWarm"                       => __("Rester au chaud", __FILE__),
                "LargeGrill"                     => __("Grand gril", __FILE__),
                "MW+HotBlast2"                   => __("Micro-onde + Air pulsé 2", __FILE__),
                "GuidedCook"                     => __("Cuisine guidée", __FILE__),
                "MemoryCook"                     => __("Cuisinière à mémoire", __FILE__),
                "MicroWave"                      => __("Micro-onde", __FILE__),
                "MicroWaveConvection"            => __("Micro-onde + Convection", __FILE__),
                "MicroWaveFanGrill"              => __("Micro-onde + Ventilation gril", __FILE__),
                "MicroWaveGrill"                 => __("Micro-onde + Gril", __FILE__),
                "MicroWaveHotBlast"              => __("Micro-onde + Air pulsé", __FILE__),
                "MicroWaveRoast"                 => __("Micro-onde + Rôtissage", __FILE__),
                "MoistSteam"                     => __("Vapeur humide", __FILE__),
                "MultiGrill"                     => __("Multi gril", __FILE__),
                "MultiLevelCook"                 => __("Cuisinière à plusieurs niveaux", __FILE__),
                "NaturalSteam"                   => __("Vapeur naturelle", __FILE__),
                "NoOperation"                    => __("Aucune opération", __FILE__),
                "PizzaCook"                      => __("Cuisson de pizza", __FILE__),
                "PlateWarm"                      => __("Assiette chaude", __FILE__),
                "PowerBake"                      => __("Cuisson puissante", __FILE__),
                "PowerConvection"                => __("Convection puissante", __FILE__),
                "PowerConvectionCombi"           => __("Combi convection puissante", __FILE__),
                "Preheat"                        => __("Préchauffer", __FILE__),
                "ProConvection"                  => __("Convection professionnelle", __FILE__),
                "ProRoasting"                    => __("Rôtissage professionnel", __FILE__),
                "Proof"                          => __("Levage", __FILE__),
                "ProveDough"                     => __("Pâte à pain", __FILE__),
                "PureConvection"                 => __("Convection pure", __FILE__),
                "PureConvectionSear"             => __("Saisir par convection pure", __FILE__),
                "PureSteam"                      => __("Vapeur pure", __FILE__),
                "PyroFree"                       => __("Pyrolyse libre", __FILE__),
                "Roast"                          => __("Rôti", __FILE__),
                "Roasting"                       => __("Rôtissage", __FILE__),
                "SelfClean"                      => __("Auto-nettoyage", __FILE__),
                "SlimfryMiddle"                  => __("Frite mince moyen", __FILE__),
                "SlimfryStrong"                  => __("Frite mince fort", __FILE__),
                "SlowCook"                       => __("Cuisson lente", __FILE__),
                "SlowCookBeef"                   => __("Boeuf à cuisson lente", __FILE__),
                "SlowCookPoultry"                => __("Volaille à cuisson lente", __FILE__),
                "SlowCookStew"                   => __("Ragoût à cuisson lente", __FILE__),
                "SmallGrill"                     => __("Petit gril", __FILE__),
                "SpeedBake"                      => __("Cuisson rapide", __FILE__),
                "SpeedBroil"                     => __("Grillade rapide", __FILE__),
                "SpeedBrown"                     => __("Dorage rapide", __FILE__),
                "SpeedConvSear"                  => __("Saisir par convection rapide", __FILE__),
                "SpeedConvection"                => __("Convection rapide", __FILE__),
                "SpeedGrill"                     => __("Gril rapide", __FILE__),
                "SpeedPowerConvection"           => __("Convection puissante et rapide", __FILE__),
                "SpeedRoast"                     => __("Rôtissage rapide", __FILE__),
                "SteamAssist"                    => __("Assistance vapeur", __FILE__),
                "SteamAutocook"                  => __("Cuisson automatique à la vapeur", __FILE__),
                "SteamBake"                      => __("Cuisson à la vapeur", __FILE__),
                "SteamBottomConvection"          => __("Convection par le bas à la vapeur", __FILE__),
                "SteamBreadProof"                => __("Pâte à pain à la vapeur", __FILE__),
                "SteamClean"                     => __("Nettoyage à la vapeur", __FILE__),
                "SteamCleanReal"                 => __("Nettoyage à la vapeur réel", __FILE__),
                "SteamConvection"                => __("Convection à la vapeur", __FILE__),
                "SteamCook"                      => __("Cuisine à la vapeur", __FILE__),
                "SteamProof"                     => __("Levage à la vapeur", __FILE__),
                "SteamReheat"                    => __("Réchauffage à la vapeur", __FILE__),
                "SteamRoast"                     => __("Rôtissage à la vapeur", __FILE__),
                "SteamTopConvection"             => __("Convection par le haut à la vapeur", __FILE__),
                "StoneMode"                      => __("Mode pierre réfractaire", __FILE__),
                "ThreePartPureConvection"        => __("Convection pure en trois parties", __FILE__),
                "ToastBagle"                     => __("Bagel grillé", __FILE__),
                "ToastCroissant"                 => __("Croissant grillé", __FILE__),
                "ToastSlicedBread"               => __("Pain en tranches grillé", __FILE__),
                "TopConvection"                  => __("Convection par le haut", __FILE__),
                "TopHeatPluseConvection"         => __("Chaleur par le haut + Convection écologique", __FILE__),
                "VaporBottomHeatPluseConvection" => __("Vapeur par le bas + Convection écologique", __FILE__),
                "VaporCleaning"                  => __("Nettoyage vapeur", __FILE__),
                "VaporConvection"                => __("Convection vapeur", __FILE__),
                "VaporGRILL"                     => __("Gril vapeur", __FILE__),
                "VaporMWO"                       => __("Micro-onde O vapeur", __FILE__),
                "VaporTopHeatPluseConvection"    => __("Vapeur par le haut + Convection écologique", __FILE__),
                "WarmHold"                       => __("Maintien au chaud", __FILE__)
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
                "clear" => __("En veille", __FILE__),
                "panic" => __("Détresse", __FILE__)
            ],
            "periodicSensing" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "periodicSensingStatus" => [
                "nonprocessing" => __("Aucun traitement en cours", __FILE__),
                "processing"    => __("Traitement en cours", __FILE__)
            ],
            "pestControl" => [
                "pestDetected"      => __("Insectes/animaux nuisibles détectés", __FILE__),
                "trapArmed"         => __("Piège activé", __FILE__),
                "idle"              => __("Piège désactivé", __FILE__),
                "pestExterminated"  => __("Insectes/animaux nuisibles exterminés", __FILE__),
                "trapRearmRequired" => __("Reactivation du piège requise", __FILE__)
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
                "buffering"       => __("Mise en tampon", __FILE__),
                "playing"         => __("En lecture", __FILE__),
                "fast forwarding" => __("Avance rapide en cours", __FILE__),
                "fastForward"     => __("Avance rapide", __FILE__),
                "pause"           => __("Pause", __FILE__)
            ],
            "playbackRepeatMode" => [
                "all" => __("Tout", __FILE__),
                "one" => __("Un", __FILE__),
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
                "unknown" => __("Inconnue", __FILE__)
            ],
            "powerState" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "precipitationIntensity" => [
                "violent"               => __("Violentes", __FILE__),
                "possiblePrecipitation" => __("Précipitations possibles", __FILE__),
                "light"                 => __("Faibles", __FILE__),
                "none"                  => __("Aucune", __FILE__),
                "moderate"              => __("Modérées", __FILE__),
                "heavy"                 => __("Élevées", __FILE__)
            ],
            "presence" => [
                "not present" => __("Absent", __FILE__),
                "present"     => __("Présent", __FILE__)
            ],
            "pressureAlarm" => [
                "normal" => __("Normal", __FILE__),
                "high"   => __("Élevée", __FILE__),
                "low"    => __("Basse", __FILE__)
            ],
            "program" => [
                "Cooking_Oven_Program_HeatingMode_HotAir"              => __("Convection 3D", __FILE__),
                "Cooking_Oven_Program_HeatingMode_HotAirEco"           => __("Chaleur tournante éco", __FILE__),
                "Cooking_Oven_Program_HeatingMode_HotAirGrilling"      => __("Gril à convection", __FILE__),
                "Cooking_Oven_Program_HeatingMode_TopBottomHeating"    => __("Cuisson", __FILE__),
                "Cooking_Oven_Program_HeatingMode_PizzaSetting"        => __("Pizza", __FILE__),
                "Cooking_Oven_Program_HeatingMode_KeepWarm"            => __("Maintien au chaud", __FILE__),
                "Cooking_Oven_Program_HeatingMode_PreheatOvenware"     => __("Préchauffer le four", __FILE__),
                "Cooking_Oven_Program_HeatingMode_TopBottomHeatingEco" => __("Cuisson éco", __FILE__),
                "Cooking_Oven_Program_HeatingMode_FrozenHeatupSpecial" => __("Réchauffage produit surgelé", __FILE__),
                "Cooking_Oven_Program_HeatingMode_SlowCook"            => __("Cuisson lente", __FILE__),
                "Cooking_Oven_Program_HeatingMode_IntensiveHeat"       => __("Chaleur intensive", __FILE__),
                "Cooking_Oven_Program_HeatingMode_Defrost"             => __("Décongélation", __FILE__),
                "Cooking_Oven_Program_HeatingMode_BottomHeating"       => __("Résistance de sole", __FILE__),
                "None"                                                 => __("Aucun", __FILE__),
                "UnknownProgram"                                       => __("Programme inconnu", __FILE__),
                "Dishcare_Dishwasher_Program_NightWash"                => __("Silence 50 °C", __FILE__),
                "Dishcare_Dishwasher_Program_Auto3"                    => __("Auto 65-75 °C", __FILE__),
                "Dishcare_Dishwasher_Program_Auto2"                    => __("Auto 45-65 °C", __FILE__),
                "Dishcare_Dishwasher_Program_Eco50"                    => __("Eco 50 °C", __FILE__),
                "Dishcare_Dishwasher_Program_Kurz60"                   => __("Court 60 °C", __FILE__),
                "Dishcare_Dishwasher_Program_Quick45"                  => __("Rapide 45 °C", __FILE__),
                "Dishcare_Dishwasher_Program_Intensiv70"               => __("Intensif 70 °C", __FILE__),
                "Dishcare_Dishwasher_Program_MachineCare"              => __("Soin de la machine", __FILE__),
                "Dishcare_Dishwasher_Program_PreRinse"                 => __("Pré-rinçage", __FILE__),
                "Dishcare_Dishwasher_Program_Glas40"                   => __("Verres 40 °C", __FILE__)
            ],
            "protocolType" => [
                "ble_ocf"    => __("BLE OCF", __FILE__),
                "wifi_https" => __("WiFi https", __FILE__),
                "wifi_stdk"  => __("WiFi STDK", __FILE__),
                "ble_stdk"   => __("BLE STDK", __FILE__)
            ],
            "rapidCooling" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "rapidFreezing" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "rateAlarm" => [
                  "normal"  => __("Normal", __FILE__),
                  "alarm"   => __("Alarme", __FILE__),
                  "warning" => __("Attention", __FILE__)
            ],
            "register" => [
                  "registering"   => __("En cours d'inscription", __FILE__),
                  "registered"    => __("Inscrit", __FILE__),
                  "deregistering" => __("En cours de désinscription", __FILE__),
                  "deregistered"  => __("Désinscrit", __FILE__)
            ],
            "regularDetergentType" => [
                "capsule"  => __("Dosette", __FILE__),
                "liquid"   => __("Liquide", __FILE__),
                "none"     => __("Aucun", __FILE__),
                "drySheet" => __("Lingettes", __FILE__)
            ],
            "regularSoftenerType" => [
                "capsule"  => __("Dosette", __FILE__),
                "liquid"   => __("Liquide", __FILE__),
                "none"     => __("Aucun", __FILE__),
                "drySheet" => __("Lingettes", __FILE__)
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
            "robotCleanerTurboMode" => [
                "silence"      => __("Silencieux", __FILE__),
                "off"          => __("Normal", __FILE__),
                "on"           => __("Turbo", __FILE__),
                "extraSilence" => __("Très silencieux", __FILE__)
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
            "schedulableMenus" => [
                "stickyPlainRice" => __("Riz blanc collant", __FILE__),
                "wellCookedPlainRice" => __("Riz blanc bien cuit", __FILE__),
                "frozenPlainRice" => __("Riz blanc surgelé", __FILE__),
                "mixedGrains" => __("Mélange de céréales", __FILE__),
                "brownRice100" => __("100 % de riz brun", __FILE__),
                "riceWithBeans" => __("Riz avec haricots", __FILE__),
                "barleyMixedGrainRice" => __("Orge riz à grains mélangés", __FILE__),
                "superGrains" => __("Riz avec super céréales", __FILE__),
                "frozenMixedGrain" => __("Céréales mélangées surgelées", __FILE__),
                "cauldronRice" => __("Riz cuit dans un pot en grès", __FILE__),
                "riceForGimbap" => __("Riz pour gimbap", __FILE__),
                "plainQuick" => __("Riz blanc rapide", __FILE__),
                "konjacRice" => __("Riz de Konjac", __FILE__),
                "mixedGrainForSalad" => __("Mélange de céréales en salade", __FILE__),
                "mixedGrainsQuick" => __("Mélange de céréales rapide", __FILE__),
                "nutritiousRiceInHotPot" => __("Riz nutritif cuit dans un pot en grès", __FILE__),
                "steamedDish" => __("Plat à la vapeur", __FILE__),
                "nutritiousPorridge" => __("Porridge nutritif", __FILE__),
                "scorchedRiceTea" => __("Thé de croûte de riz", __FILE__),
                "bakedEgg" => __("Œufs cuits", __FILE__),
                "sousVide" => __("Sous-vide", __FILE__),
                "scorchedRice" => __("Croûte de riz", __FILE__),
                "babyFoodStep1" => __("Nourriture pour bébé étape 1", __FILE__),
                "babyFoodStep2" => __("Nourriture pour bébé étape 2", __FILE__),
                "babyFoodStep3" => __("Nourriture pour bébé étape 3", __FILE__),
                "riceWithSeasonedVegetablesInHotPot" => __("Riz cuit dans un pot en grès avec légumes de saison", __FILE__),
                "mixedGrainForSlim" => __("Mélange de céréales pour la perte de poids", __FILE__),
                "mixedGrainForVitality" => __("Mélange de céréales pour la vitalité", __FILE__),
                "haedeul" => __("Haedeul", __FILE__),
                "alchanmi" => __("Alchanmi", __FILE__),
                "odaemi" => __("Odaemi", __FILE__),
                "oatRice" => __("Riz avec avoine", __FILE__),
                "chickpeaRice" => __("Riz avec pois chiches", __FILE__),
                "quinoaRice" => __("Riz avec quinoa", __FILE__),
                "lentilBeanRice" => __("Riz avec lentilles", __FILE__),
                "steamedSweetPotato" => __("Patate douce à la vapeur", __FILE__),
                "galbijjim" => __("Galbijjim", __FILE__),
                "samgyetang" => __("Samgyetang", __FILE__),
                "riceWithWebfootOctopusAndSaussureaInHotPot" => __("Riz cuit dans un pot en grès avec poulpe ocellé et un saussurea", __FILE__),
                "riceWithAbaloneInHotPot" => __("Riz cuit dans un pot en grès avec ormeau", __FILE__),
                "riceWithTruffledBulgogiInHotPot" => __("Riz cuit dans un pot en grès avec steak", __FILE__),
                "riceWithSteakInHotPot" => __("Riz cuit dans un pot en grès avec steak", __FILE__),
                "riceWithRipeKimchiAndAbaloneInHotPot" => __("Riz cuit dans un pot en grès avec ormeau et kimchi mûr", __FILE__),
                "riceWithBeefAndBeanSproutsInHotPot" => __("Riz cuit dans un pot en grès avec du bœuf et des germes de soja", __FILE__),
                "riceWithAssortedMushrommsInHotPot" => __("Riz cuit dans un pot en grès avec un assortiment de champignons", __FILE__),
                "riceWithBrackenAndSteakInHotPot" => __("Riz cuit dans un pot en grès avec steak et fougères", __FILE__),
                "riceWithBeefAndAssortedMushroomsInHotPot" => __("Riz cuit dans un pot en grès avec du bœuf et un assortiment de champignons", __FILE__),
                "riceWithSpicyWebfootOctopusInHotPot" => __("Riz cuit dans un pot en grès avec poulpe ocellé", __FILE__),
                "kamutRice" => __("Riz avec kamut", __FILE__),
                "mixedGrainForSaladWithLentilBean" => __("Mélange de céréales et lentilles en salade", __FILE__),
                "mixedGrainForSaladWithChickpea(1Cup)" => __("Mélange de céréales et pois chiches en salade (1 tasse)", __FILE__),
                "mixedGrainForSaladWithQuinoa" => __("Mélange de céréales et quinoa en salade", __FILE__),
                "mixedGrainForSaladWithMillet" => __("Mélange de céréales et millet en salade", __FILE__),
                "mixedGrainForSaladWithChickpea(2Cup)" => __("Mélange de céréales et pois chiches en salade (2 tasses)", __FILE__),
                "mixedGrainForSaladWithBarley" => __("Mélange de céréales et orge en salade", __FILE__),
                "mixedGrainForSaladWithBrownRice(1Cup)" => __("Mélange de céréales et riz brun en salade (1 tasse)", __FILE__),
                "mixedGrainForSaladWithOatRice" => __("Mélange de céréales et avoine en salade", __FILE__),
                "mixedGrainForSaladWithBrownRice(2Cup)" => __("Mélange de céréales et riz brun en salade (2 tasses)", __FILE__),
                "mixedGrainForSaladWithKamut" => __("Mélange de céréales et kamut en salade", __FILE__),
                "mixedGrainForSaladWithBrownRice" => __("Mélange de céréales et riz brun en salade", __FILE__),
                "mixedGrainForSaladWithQuinoa(1Cup)" => __("Mélange de céréales et quinoa en salade (1 tasse)", __FILE__),
                "mixedGrainForSaladWithChickpea" => __("Mélange de céréales et pois chiches en salade", __FILE__),
                "mixedGrainForSaladWithQuinoa(2Cup)" => __("Mélange de céréales et quinoa en salade (2 tasses)", __FILE__),
                "mixedGrainForSaladWithAdlay" => __("Mélange de céréales avec herbe à chapelets en salade", __FILE__),
                "mixedGrainForSaladWithLentilBean(1Cup)" => __("Céréales mélangées pour salade avec lentilles (1 tasse)", __FILE__),
                "plainPorridge" => __("Porridge nature", __FILE__),
                "mixedGrainForSaladWithLentilBean(2Cup)" => __("céréales mélangées pour salade avec lentilles (2 tasses)", __FILE__),
                "abalonePorridge" => __("Bouillie de riz à l'ormeau", __FILE__),
                "pineNutPorridge" => __("Porridge aux pignons de pin", __FILE__),
                "boiledEgg" => __("Œuf à la coque", __FILE__),
                "chicken,SweetPumpkin,Cabbage,StickyRicePorridge" => __("Porridge au poulet, potiron, chou et riz gluant", __FILE__),
                "chicken,Zucchini,SweetPotato,StickyRicePorridge" => __("Porridge au poulet, courgette, patate douce et riz gluant", __FILE__),
                "beef,Apple,BroccoliPorridge" => __("Porridge au bœuf, aux pommes et au brocoli", __FILE__),
                "chicken,BokChoy,BananaPorridge" => __("Porridge au poulet, BokChoy et banane", __FILE__),
                "beef,Zucchini,PearPorridge" => __("Porridge au boeuf, courgette et poire", __FILE__),
                "beef,ShiitakeMushroom,EggPorridge" => __("Porridge au boeuf, champignon Shiitake et oeufs", __FILE__),
                "beef,KingTrumpetMushroom,BroccoliPorridge" => __("Porridge au bœuf, champignons de Paris et brocoli", __FILE__),
                "chicken,BeanSprouts,Jujube,StickyRicePorridge" => __("Porridge au poulet, germes de soja, jujube et riz gluant", __FILE__),
                "cod-Meat,Vitamin,CarrotPorridge" => __("Porridge à la viande de morue, vitamines et carottes", __FILE__),
                "chicken,SweetPotato,Beet,BeetPorridge" => __("Porridge au poulet, patate douce, betterave et betterave", __FILE__),
                "chicken,PineNut,Chestnut,Spinach,SoftBoiledRice" => __("Poulet, pignon, châtaigne, épinards et riz cuit à point", __FILE__),
                "beef,Beet,EnokiMushroom,PerillaSeeds,SoftBoiledRice" => __("Bœuf, betterave, champignon Enoki, graines de périlla et riz cuit à l'étouffée", __FILE__),
                "chicken,Cheese,Beet,Eggplant,SoftBoiledRice" => __("Poulet, fromage, betterave, aubergine, riz à la coque", __FILE__),
                "codFlesh,SweetPumpkin,Mung-BeanSprouts,BlackSesame,SoftBoiledRice" => __("Chair de morue, potiron, pousses de haricot mungo, sésame noir, riz cuit à l'eau.", __FILE__),
                "beef,Cabbage,WhiteMushroom,Jujube,SoftBoiledRice" => __("Bœuf, chou, champignon blanc, jujube, riz cuit à l'eau", __FILE__),
                "broccoliPorridge" => __("Porridge au brocoli", __FILE__),
                "potatoCarrotPorridge" => __("Porridge carotte et pomme de terre", __FILE__),
                "yakbab" => __("Yakbab", __FILE__),
                "steamedPotato" => __("Pomme de terre à la vapeur", __FILE__),
                "customMenu01" => __("Menu personnalisé 01", __FILE__),
                "customMenu02" => __("Menu personnalisé 02", __FILE__),
                "customMenu03" => __("Menu personnalisé 03", __FILE__),
                "customMenu04" => __("Menu personnalisé 04", __FILE__),
                "customMenu05" => __("Menu personnalisé 05", __FILE__),
                "customMenu06" => __("Menu personnalisé 06", __FILE__),
                "customMenu07" => __("Menu personnalisé 07", __FILE__),
                "customMenu08" => __("Menu personnalisé 08", __FILE__),
                "customMenu09" => __("Menu personnalisé 09", __FILE__),
                "customMenu10" => __("Menu personnalisé 10", __FILE__),
                "customMenu11" => __("Menu personnalisé 11", __FILE__),
                "customMenu12" => __("Menu personnalisé 12", __FILE__),
                "customMenu13" => __("Menu personnalisé 13", __FILE__),
                "customMenu14" => __("Menu personnalisé 14", __FILE__),
                "customMenu15" => __("Menu personnalisé 15", __FILE__),
                "customMenu16" => __("Menu personnalisé 16", __FILE__),
                "customMenu17" => __("Menu personnalisé 17", __FILE__),
                "customMenu18" => __("Menu personnalisé 18", __FILE__),
                "customMenu19" => __("Menu personnalisé 19", __FILE__),
                "customMenu20" => __("Menu personnalisé 20", __FILE__)
            ],
            "searchingStatus" => [
                "stopByServer" => __("Arrêté par le serveur", __FILE__),
                "stop"         => __("Arrêt", __FILE__),
                "searching"    => __("En cours de recherche", __FILE__),
                "spotted"      => __("Trouvé", __FILE__)
            ],
            "securitySystemStatus" => [
                "disarmed"  => __("Désactivé", __FILE__),
                "armedStay" => __("Activé (présent)", __FILE__),
                "armedAway" => __("Activé (absent)", __FILE__)
            ],
            "setType" => [
                "capsule"  => __("Dosette", __FILE__),
                "liquid"   => __("Liquide", __FILE__),
                "none"     => __("Aucun", __FILE__),
                "drySheet" => __("Lingettes", __FILE__)
            ],
            "shock" => [
                "clear"    => __("RÀS", __FILE__),
                "detected" => __("Choc détecté", __FILE__)
            ],
            "signinPermission" => [
                "immutable" => __("Immuable", __FILE__),
                "updating" => __("Mise à jour", __FILE__),
                "disabled" => __("Désactivé", __FILE__),
                "enabled" => __("Activé", __FILE__)
            ],
            "sleeping" => [
                "not sleeping" => __("Pas en veille", __FILE__),
                "sleeping"     => __("En veille", __FILE__)
            ],
            "smoke" => [
                "tested"   => __("Testé", __FILE__),
                "clear"    => __("Sain", __FILE__),
                "detected" => __("Fumée détectée", __FILE__)
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
            "soundMode" => [
                "standard"    => __("Standard", __FILE__),
                "music"       => __("Musique", __FILE__),
                "movie"       => __("Film", __FILE__),
                "clear voice" => __("Voix claire", __FILE__),
                "unknown"     => __("Inconnu", __FILE__)
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
            "startFeeding" => [
                "idle"    => __("En veille", __FILE__),
                "feeding" => __("Distribution", __FILE__)
            ],
            "startstop" => [
                "play" => __("Démarré", __FILE__),
                "stop" => __("Arrêté", __FILE__)
            ],
            "status" => [
                "pause"          => __("Pause", __FILE__),
                "play"           => __("Lecture", __FILE__),
                "stop"           => __("Arrêt", __FILE__),
                "off"            => __("Désactivé", __FILE__),
                "on"             => __("Activé", __FILE__),
                "ready"          => __("Prêt", __FILE__),
                "downloading_20" => __("Téléchargement en cours (20%)", __FILE__),
                "downloading_40" => __("Téléchargement en cours (40%)", __FILE__),
                "downloading_60" => __("Téléchargement en cours (60%)", __FILE__),
                "downloading_80" => __("Téléchargement en cours (80%)", __FILE__),
                "installing"     => __("Installation en cours", __FILE__),
                "completed"      => __("Terminé", __FILE__),
                "failed"         => __("Échoué", __FILE__),
                "idle"           => __("Inactif", __FILE__),
                "running"        => __("En fonctionnement", __FILE__)
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
                "sterilizing"   => __("Désinfection", __FILE__),
                "drying"        => __("Séchage", __FILE__),
                "airwashing"    => __("Épuration de l'air", __FILE__),
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
            "supportsPowerOnByOcf" => [
                "true"  => __("Vrai", __FILE__),
                "false" => __("Faux", __FILE__)
            ],
            "surfaceResidualHeat" => [
                "normal"   => __("Normale", __FILE__),
                "low"      => __("Faible", __FILE__),
                "high"     => __("Élevée", __FILE__),
                "veryHigh" => __("Très élévée", __FILE__)
            ],
            "switch" => [
                "off"    => __("Désactivé", __FILE__),
                "on"     => __("Activé", __FILE__)
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
                "heat"       => __("Trop chaude", __FILE__),
                "freeze"     => __("Trop froide", __FILE__),
                "rateOfRise" => __("Augmente rapidement", __FILE__),
                "cleared"    => __("Normale", __FILE__)
            ],
            "thermostatOperatingState" => [
                "idle"            => __("Inactif", __FILE__),
                "pending heat"    => __("En attente de la chauffe", __FILE__),
                "vent economizer" => __("Economiseur d'aération'", __FILE__),
                "cooling"         => __("Refroidissement", __FILE__),
                "pending cool"    => __("En attente du refroidissement", __FILE__),
                "fan only"        => __("Ventilateur seulement", __FILE__),
                "heating"         => __("Chauffe", __FILE__)
            ],
            "thermostatFanMode" => [
                "followschedule" => __("Programmer", __FILE__),
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
                "fanonly"                => __("Aération", __FILE__),
                "autochangeover"         => __("Permutation automatique", __FILE__),
                "frostguard"             => __("Hors gel", __FILE__),
                "southernaway"           => __("southernaway", __FILE__), // à traduire
                "hotwateronly"           => __("Eau chaude uniquement", __FILE__)
            ],
            "tirePressureState" => [
                "normal" => __("Normal", __FILE__),
                "warn" =>   __("Attention", __FILE__)
            ],
            "tvocHealthConcern" => [
                "veryUnhealthy"     => __("Très mauvais", __FILE__),
                "slightlyUnhealthy" => __("Légèrement mauvais", __FILE__),
                "unhealthy"         => __("Mauvais", __FILE__),
                "hazardous"         => __("Dangereux", __FILE__),
                "good"              => __("Bon", __FILE__),
                "moderate"          => __("Moyen", __FILE__)
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
                "closed" => __("Fermé", __FILE__),
                "open"   => __("Ouvert", __FILE__)
            ],
            "veryFineDustFilterStatus" => [
                "notused" => __("Bon état", __FILE__),
                "normal"  => __("Normal", __FILE__),
                "replace" => __("À remplacer", __FILE__),
                "wash"    => __("À nettoyer", __FILE__)
            ],
            "veryFineDustHealthConcern" => [
                "veryUnhealthy"     => __("Très mauvais", __FILE__),
                "slightlyUnhealthy" => __("Légèrement mauvais", __FILE__),
                "unhealthy"         => __("Mauvais", __FILE__),
                "hazardous"         => __("Dangereux", __FILE__),
                "good"              => __("Bon", __FILE__),
                "moderate"          => __("Moyen", __FILE__)
            ],
            "virusDoctorMode" => [
                "off" => __("Désactivé", __FILE__),
                "on"  => __("Activé", __FILE__)
            ],
            "volumeAlarm" => [
                  "normal"  => __("Normal", __FILE__),
                  "alarm"   => __("Alarme", __FILE__),
                  "warning" => __("Attention", __FILE__),
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
            "washerMode" => [
                "rinse"   => __("Rinçage", __FILE__),
                "regular" => __("Standard", __FILE__),
                "heavy"   => __("Intensif", __FILE__),
                "spinDry" => __("Essorage à sec", __FILE__)
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
                "none"      => __("Aucun", __FILE__),
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
                "aIRinse"           => __("IA rinçage", __FILE__),
                "drumCleaning"      => __("Nettoyage tambour", __FILE__),
                "soilLevelSensing"  => __("Détection des taches", __FILE__),
                "dispenserCleaning" => __("Nettoyage des distributeurs", __FILE__),
                "weightSensing"     => __("Détection de la charge", __FILE__),
                "wash"              => __("Lavage", __FILE__),
                "wrinklePrevent"    => __("Anti-froissage", __FILE__),
                "delayWash"         => __("Fin du cycle différé", __FILE__),
                "none"              => __("En cours", __FILE__),
                "airWash"           => __("Lavage à l'air", __FILE__),
                "aIWash"            => __("IA lavage", __FILE__),
                "drying"            => __("Séchage", __FILE__),
                "spin"              => __("Essorage", __FILE__),
                "aISpin"            => __("IA essorage", __FILE__),
                "cooling"           => __("Refroidissement", __FILE__),
                "preWash"           => __("Prélavage", __FILE__),
                "finish"            => __("Fin", __FILE__),
                "finished"          => __("Cycle terminé", __FILE__),
                "rinse"             => __("Rinçage", __FILE__),
                "freezeProtection"  => __("Protection contre le gel", __FILE__),
                "laundrySensing"    => __("Détection du linge", __FILE__)
            ],
            "washerOperatingState" => [
                "pause" => __("Pause", __FILE__),
                "run"   => __("Marche", __FILE__),
                "stop"  => __("Arrêt", __FILE__)
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
                "partially open" => __("Partiellement ouvert", __FILE__),
                "closed"         => __("Fermé", __FILE__),
                "opening"        => __("Ouverture…", __FILE__),
                "open"           => __("Ouvert", __FILE__),
                "unknown"        => __("Inconnu", __FILE__)
            ],
            "wirelessOperatingMode" => [
                "whenNeeded" => __("Si nécessaire", __FILE__),
                "alwaysOn"   => __("Toujours activé", __FILE__)
            ]
        ];

        $this->cmdName = [
            "accelerationSensor" => [
                "acceleration" => __("Capteur de vibration", __FILE__)
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
                "both"   => __("Alarme : Sirène et clignotement", __FILE__)
            ],
            "alarmSystemArmOnly" =>  [
                "alarmSystemArmOnly" => __("Armement de l'alarme", __FILE__)
            ],
            "alarmSystemStatus" =>  [
                "alarmSystemStatus" => __("Statut de l'alarme", __FILE__)
            ],
            "astronomicalData" =>  [
                "sunrise"     => __("Lever du soleil", __FILE__),
                "sunsetTime"  => __("Heure du coucher de soleil", __FILE__),
                "sunset"      => __("Lever de soleil", __FILE__),
                "sunriseTime" => __("Heure du lever de soleil", __FILE__)
            ],
            "atmosphericPressureMeasurement" => [
                "atmosphericPressure" => __("Pression atmosphérique", __FILE__)
            ],
            "audioCapture" => [
                "stream"  => __("Enregistrement sons", __FILE__),
                "clip"    => __("Clip sons", __FILE__),
                "capture" => __("Démarrer enregistrement sons", __FILE__)
            ],
            "audioMute" => [
                "mute"           => __("Désactivation du son", __FILE__),
                "setMutemuted"   => __("Désactiver le son", __FILE__),
                "setMuteunmuted" => __("Activer le son", __FILE__),
                "mute::"         => __("Couper le son", __FILE__),
                "unmute"         => __("Remettre le son", __FILE__)
            ],
            "audioNotification" => [
                "playTrackAndResume"  => __("Reprendre la lecture", __FILE__),
                "playTrackAndRestore" => __("Reprendre la lecture et restaurer le volume", __FILE__),
                "playTrack"           => __("Lecture", __FILE__)
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
            "beacon" => [
                "presence" => __("Balise", __FILE__)
            ],
            "bodyMassIndexMeasurement" => [
                "bmiMeasurement" => __("IMC", __FILE__)
            ],
            "bodyWeightMeasurement" => [
                "bodyWeightMeasurement" => __("Poids", __FILE__)
            ],
            "bufferedVideoCapture" => [
                "clip"    => __("Clip", __FILE__),
                "capture" => __("Démarrer enregistrement", __FILE__)
            ],
            "bulb" => [
                "switch" => __("État de l'ampoule", __FILE__),
                "off"    => __("Allumer l'ampoule", __FILE__),
                "on"     => __("Éteindre l'ampoule", __FILE__)
            ],
            "button" => [
                "button"                => __("Bouton", __FILE__),
                "numberOfButtons"       => __("Nombre de boutons", __FILE__),
                "supportedButtonValues" => __("Valeurs de boutons pris en charge", __FILE__)
            ],
            "bypassable" => [
                "bypassStatus" => __("Statut de contournement", __FILE__)
            ],
            "carbonDioxideHealthConcern" => [
                "carbonDioxideHealthConcern" => __("Niveau de dioxide de carbone", __FILE__)
            ],
            "carbonDioxideMeasurement" => [
                "carbonDioxide" => __("Concentration en dioxyde de carbone", __FILE__)
            ],
            "carbonMonoxideDetector" => [
                "carbonMonoxide" => __("Détecteur de monoxyde de carbone", __FILE__)
            ],
            "carbonMonoxideMeasurement" => [
                "carbonMonoxideLevel" => __("Concentration en monoxyde de carbone", __FILE__)
            ],
            "category" => [
                "id" => __("Catégorie", __FILE__)
            ],
            "chime" => [
                "chime"   => __("Carrilon", __FILE__),
                "off"     => __("Déscativer le carrilon", __FILE__),
                "chime::" => __("Activer le carrilon", __FILE__)
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
            "colorMode" => [
                "colorMode" => __("Mode couleur", __FILE__)
            ],
            "colorTemperature" => [
                "colorTemperature"    => __("Température de couleur", __FILE__),
                "setColorTemperature" => __("Changer la température de couleur", __FILE__)
            ],
            "consumable" => [
                "consumableStatus"    => __("Statut des produits consommables", __FILE__),
                "setConsumableStatus" => __("Changer le statut des produits consommables", __FILE__)
            ],
            "contactSensor" => [
                "contact" => __("Capteur de contact", __FILE__)
            ],
            "coordinate" => [
                "city" => __("Ville", __FILE__)
            ],
            "currentMeasurement" => [
                "current" => __("Courant électrique", __FILE__),
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
            "custom.cooktopOperatingState" => [
                "supportedCooktopOperatingState" => __("États de la table de cuisson pris en charge", __FILE__),
                "cooktopOperatingState"          => __("État de la table de cuisson", __FILE__)
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
            "custom.doNotDisturbMode"    => [
                "doNotDisturb"           => __("Ne pas déranger", __FILE__),
                "startTime"              => __("Heure de début", __FILE__),
                "endTime"                => __("Heure de fin", __FILE__),
                "setDoNotDisturbMode"    => __("Planifier le mode Ne pas déranger", __FILE__),
                "setDoNotDisturbModeon"  => __("Activer le mode Ne pas déranger", __FILE__),
                "setDoNotDisturbModeoff" => __("Désactiver le mode Ne pas déranger", __FILE__),
                "doNotDisturbOff"        => __("Activer Ne pas déranger", __FILE__),
                "doNotDisturbOn"         => __("Désactiver Ne pas déranger", __FILE__)
            ],
            "custom.dryerDryLevel" => [
                "dryerDryLevel"          => __("Niveau de séchage", __FILE__),
                "supportedDryerDryLevel" => __("Niveaux de séchage prise en charge", __FILE__),
                "setDryerDryLevel"       => __("Changer le niveau de séchage", __FILE__)
            ],
            "custom.dryerWrinklePrevent" => [
                "dryerWrinklePrevent"       => __("Prévention des faux-plis", __FILE__),
                "setDryerWrinklePreventoff" => __("Désactiver la prévention des faux-plis", __FILE__),
                "setDryerWrinklePreventon"  => __("Activer la prévention des faux-plis", __FILE__),
                "operatingState"            => __("État de fonctionnement de prévention des faux-plis", __FILE__)
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
                "energyType"                   => __("Type d'énergie", __FILE__),
                "energySavingSupport"          => __("Aide à l'économie d'énergie", __FILE__),
                "energySavingOperation"        => __("Opération d'économie d'énergie", __FILE__),
                "energySavingOperationSupport" => __("Aide à l'opération d'économie d'énergie", __FILE__),
                "drMaxDuration"                => __("Durée maximale de DR", __FILE__),
                "setEnergySavingLevel"         => __("Changer  le niveau d'économie d'énergie", __FILE__),
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
                "setPeriodicSensingoff"              => __("Désactiver la détection périodique 2", __FILE__),
                "setPeriodicSensingon"               => __("Activer la détection périodique 2", __FILE__),
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
                "setSteamClosetMachineState"       => __("Changer le statut de machine", __FILE__),
                "progress"                         => __("Progression", __FILE__),
                "remainingTimeStr"                 => __("Temps humain de lavage restant", __FILE__),
                "remainingTime"                    => __("Temps de séchage restant", __FILE__)
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
            "custom.userNotification" => [
                "message" => __("Message de notification", __FILE__)
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
            "drivingStatus" => [
                "drivingStatus" => __("Statut de conduite", __FILE__)
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
            "dustHealthConcern" => [
                "dustHealthConcern" => __("Poussière", __FILE__),
            ],
            "dustSensor" => [
                "dustLevel"     => __("Quantité de poussière", __FILE__),
                "fineDustLevel" => __("Niveau de poussière fine", __FILE__)
            ],
            "energyMeter" => [
                "energy"           => __("Consommation d'énergie", __FILE__),
                "resetEnergyMeter" => __("Réinitialiser la consommation d'énergie", __FILE__)
            ],
            "equivalentCarbonDioxideMeasurement" => [
                "equivalentCarbonDioxideMeasurement" => __("eCO2", __FILE__)
            ],
            "estimatedTimeOfArrival" => [
                "eta" => __("Heure d'arrivée estimée", __FILE__)
            ],
            "execute" => [
                "data"                           => __("Données", __FILE__),
                "remainingTime"                  => __("Temps restant", __FILE__),
                "progressPercentage"             => __("Progression", __FILE__),
                "rssi"                           => __("RSSI", __FILE__),
                "execute"                        => __("Executer une commande", __FILE__),
                "execute::SyncFlex"              => __("Synchronisation des inductions", __FILE__),
                "execute::SyncFlexCenter"        => __("Synchronisation des inductions centrales", __FILE__),
                "execute::FlexCoil"              => __("Bobine d'induction", __FILE__),
                "execute::Pause"                 => __("Pause", __FILE__),
                "execute::OperationState"        => __("État de fonctionnement élement", __FILE__),
                "execute::HotSurface"            => __("Surface chaude élement", __FILE__),
                "execute::PowerLevel"            => __("Niveau de puissance élement", __FILE__),
                "execute::DownTimerState"        => __("État du minuteur élement", __FILE__),
                "execute::PanSize"               => __("Taille de casserole élement", __FILE__),
                "execute::MainTimerSet"          => __("Minuteur principal total", __FILE__),
                "execute::setMainTimerSet"       => __("Régler le minuteur principal total", __FILE__),
                "execute::MainTimerCurrent"      => __("Minuteur principal restant", __FILE__),
                "execute::setMainTimerCurrent"   => __("Régler le minuteur principal restant", __FILE__),
                "execute::MainTimerState"        => __("État du minuteur principal", __FILE__),
                "execute::setMainTimerState"     => __("Changer l'état du minuteur principal", __FILE__),
                "execute::IndependentTimerCheck" => __("Contrôle du minuteur", __FILE__),
                "execute::Sound"                 => __("Bips sonores", __FILE__)
            ],
            "elevatorCall" => [
                "callStatus" => __("Statut de l'ascenseur", __FILE__),
                "call"       => __("Appeler", __FILE__)
            ],
            "fanOscillationMode" => [
                "supportedFanOscillationModes" => __("Oscillation du ventilateur prises en charge", __FILE__),
                "fanOscillationMode"           => __("Oscillation du ventilateur", __FILE__),
                "setFanOscillationMode"        => __("Changer l'oscillation du ventilateur", __FILE__)
            ],
            "fanSpeed" => [
                "fanSpeed"    => __("Vitesse de ventilation", __FILE__),
                "setFanSpeed" => __("Changer la vitesse de ventilation", __FILE__)
            ],
            "feederOperatingState" => [
                "feederOperatingState" => __("Distributeur de nourriture", __FILE__),
                "startFeeding"         => __("Distribution", __FILE__)
            ],
            "feederPortion" => [
                "feedPortion" => __("Portion du distributeur", __FILE__),
                "setPortion"  => __("Changer la portion du distributeur", __FILE__)
            ],
            "filterState" => [
                "filterLifeRemaining" => __("Autonomie restante du filtre", __FILE__)
            ],
            "filterStatus" => [
                "filterStatus" => __("État du filtre", __FILE__)
            ],
            "fineDustHealthConcern" => [
                "fineDustLevel" => __("Poussière fine", __FILE__)
            ],
            "fineDustSensor" => [
                "fineDustLevel" => __("PM 2,5", __FILE__)
            ],
            "firmwareUpdate" => [
              "lastUpdateStatusReason" => __("Résultat de la dernière de mise à jour", __FILE__),
              "availableVersion"       => __("Version disponible", __FILE__),
              "lastUpdateStatus"       => __("État de la dernière de mise à jour", __FILE__),
              "state"                  => __("Statut de mise à jour", __FILE__),
              "currentVersion"         => __("Version actuelle", __FILE__),
              "lastUpdateTime"         => __("Date de dernière mise à jour", __FILE__),
              "updateFirmware"         => __("Mettre à jour le firmware", __FILE__),
              "checkForFirmwareUpate"  => __("Vérifier la mise à jour du firmware", __FILE__)
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
                "formaldehydeLevel" => __("Formaldéhyde", __FILE__)
            ],
            "garageDoorControl" => [
                "door"  => __("Porte de garage", __FILE__),
                "close" => __("Ouvrir la porte de garage", __FILE__),
                "open"  => __("Fermer la porte de garage", __FILE__)
            ],
            "gasDetector" => [
                "gas" => __("Détecteur de gaz", __FILE__),
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
                "setGeofence"            => __("Changer le géorepérage", __FILE__),
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
                "button"          => __("Touche", __FILE__),
                "numberOfButtons" => __("Nombre de touches", __FILE__)
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
            "indicator" => [
                "indicatorStatus"  => __("Statut du témoin lumineux", __FILE__),
                "indicatorNever"   => __("Éteindre le témoin lumineux", __FILE__),
                "indicatorWhenOn"  => __("Allumer le témoin lumineux si commutateur est allumé", __FILE__),
                "indicatorWhenOff" => __("Éteindre le témoin lumineux si commutateur est allumé", __FILE__),
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
                "mode"    => __("Mode de localisation", __FILE__),
                "setMode" => __("Changer le mode de localisation", __FILE__)
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
            "logTrigger" => [
                "logState"              => __("Journalisation", __FILE__),
                "logRequestState"       => __("État de la journalisation", __FILE__),
                "logInfo"               => __("Information de journalisation", __FILE__),
                "triggerLogWithUrl"     => __("Déclencher la journalisation avec l'URL", __FILE__),
                "triggerLogWithLogInfo" => __("Déclencher la journalisation avec une information du journal", __FILE__),
                "triggerLog"            => __("Déclencher la journalisation", __FILE__),
            ],
            "mediaController" => [
                "currentActivity" => __("Activité actuelle", __FILE__),
                "activities"      => __("Activités", __FILE__),
                "startActivity"   => __("Démarrer l'activité", __FILE__)
            ],
            "mediaGroup" => [
                "groupMute"            => __("Désactiver le son pour le groupe", __FILE__),
                "setGroupMutemuted"    => __("Désactiver le son pour le groupe", __FILE__),
                "setGroupMuteunmuted"  => __("Activer le son pour le groupe", __FILE__),
                "muteGroup"            => __("Désactiver le son pour le groupe", __FILE__),
                "unmuteGroup"          => __("Activer le son pour le groupe", __FILE__),
                "groupPrimaryDeviceId" => __("Identification du contrôleur pour le groupe", __FILE__),
                "groupId"              => __("Identification pour le groupe", __FILE__),
                "groupVolume"          => __("Volume pour le groupe", __FILE__),
                "groupRole"            => __("Groupe de haut-parleurs", __FILE__),
                "groupVolumeUp"        => __("Volume + pour le groupe", __FILE__),
                "groupVolumeDown"      => __("Volume - pour le groupe", __FILE__),
                "setGroupVolume"       => __("Changer le volume du groupe", __FILE__)
            ],
            "mediaInputSource" => [
                "supportedInputSources" => __("Sources d'entrée prises en charge", __FILE__),
                "inputSource"           => __("Source d'entrée", __FILE__),
                "setInputSource"        => __("Changer la source d'entrée", __FILE__)
            ],
            "mediaPlayback" => [
                "supportedPlaybackCommands" => __("Commandes de lecture prises en charge", __FILE__),
                "playbackStatus"            => __("Lecture de fichiers multimédia", __FILE__),
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
                "playbackShuffle"    => __("Mode aléatoire", __FILE__),
                "setPlaybackShuffle" => __("Passer en mode lecture aléatoire", __FILE__)
            ],
            "mediaPresets" => [
                "presets"    => __("Écoute d'un favori", __FILE__),
                "playPreset" => __("Lire un favori", __FILE__)
            ],
            "mediaTrackControl" => [
                "mediaTrackControl"             => __("Contrôle des pistes média", __FILE__),
                "supportedTrackControlCommands" => __("Commandes de contrôle des pistes prises en charge", __FILE__),
                "previousTrack"                 => __("Précédent", __FILE__),
                "nextTrack"                     => __("Suivant", __FILE__)
            ],
            "mode" => [
                "mode"          => __("Mode", __FILE__),
                "supportedMode" => __("Modes pris en charge", __FILE__),
                "setMode"       => __("Changer le mode", __FILE__)
            ],
            "moldHealthConcern" => [
                "moldHealthConcern" => __("Moisissures", __FILE__)
            ],
            "momentary" => [
                "push"    => __("Appuyer momentanément", __FILE__),
            ],
            "motionSensor" => [
                "motion" => __("Détecteur de mouvements", __FILE__)
            ],
            "movementSensor" => [
                "movement" => __("Etat du détecteur de mouvements", __FILE__)
            ],
            "musicPlayer" => [
                "trackDescription" => __("Description de la tâche", __FILE__),
                "level"            => __("Volume", __FILE__),
                "trackData"        => __("Contrôle de piste média", __FILE__),
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
                "lastNotification"   => __("Dernières notifications", __FILE__),
                "sendNotification"   => __("Envoyer une notification", __FILE__),
                "deviceNotification" => __("Envoyer une notification à l'appareil", __FILE__)
            ],
            "objectDetection" => [
                "detected"        => __("Détecteur d'objets", __FILE__),
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
                "odorLevel" => __("Détecteur d'odeurs", __FILE__)
            ],
            "ovenMode" => [
                "supportedOvenModes" => __("Modes du four pris en charge", __FILE__),
                "ovenMode"           => __("Mode du four", __FILE__),
                "setOvenMode"        => __("Changer le mode du four", __FILE__)
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
                "pH" => __("Acidité", __FILE__)
            ],
            "panicAlarm" => [
                "panicAlarm" => __("Alarme de détresse", __FILE__)
            ],
            "pestControl" => [
                "pestControl" => __("Contrôle insectes/animaux nuisibles", __FILE__)
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
            "precipitationMeasurement" => [
                "precipitationLevel"      => __("Niveau de précipitations", __FILE__),
                "resetPrecipitationLevel" => __("Réinitialiser le niveau de précipitations", __FILE__)
            ],
            "precipitationRate" => [
                "precipitationRate" => __("Taux de précipitations", __FILE__)
            ],
            "precipitationSensor" => [
                "precipitationIntensity" => __("Intensité des précipitations", __FILE__)
            ],
            "presenceSensor" => [
                "presence" => __("Détecteur de présence", __FILE__)
            ],
            "radonHealthConcern" => [
                "veryUnhealthy"     => __("Très mauvais", __FILE__),
                "slightlyUnhealthy" => __("Légèrement mauvais", __FILE__),
                "unhealthy"         => __("Mauvais", __FILE__),
                "hazardous"         => __("Dangereux", __FILE__),
                "good"              => __("Bon", __FILE__),
                "moderate"          => __("Moyen", __FILE__)
            ],
            "radonMeasurement" => [
                "radonLevel" => __("Radon", __FILE__)
            ],
            "refresh" => [
                "refresh" => __("Actualiser", __FILE__)
            ],
            "refrigeration" => [
                "defrost"             => __("Décongélation", __FILE__),
                "setDefroston"        => __("Activer la décongélation", __FILE__),
                "setDefrostoff"       => __("Désactiver la décongélation", __FILE__),
                "rapidCooling"        => __("Refroidissement rapide", __FILE__),
                "setRapidCoolingon"   => __("Activer le refroidissement rapide", __FILE__),
                "setRapidCoolingoff"  => __("Désactiver le refroidissement rapide", __FILE__),
                "rapidFreezing"       => __("Congélation rapide", __FILE__),
                "setRapidFreezingon"  => __("Activer la congélation rapide", __FILE__),
                "setRapidFreezingoff" => __("Désactiver la congélation rapide", __FILE__)
            ],
            "refrigerationSetpoint" => [
                "refrigerationSetpoint"    => __("Température de réfrigération", __FILE__),
                "setRefrigerationSetpoint" => __("Changer la température de réfrigération", __FILE__)
            ],
            "relativeBrightness" => [
                "brightnessIntensity" => __("Niveau de luminosité", __FILE__)
            ],
            "relativeHumidityMeasurement" => [
                "humidity" => __("Taux d'humidité", __FILE__)
            ],
            "relaySwitch" => [
                "switch" => __("Commutateur de relais", __FILE__),
                "off"    => __("Activer le commutateur de relais", __FILE__),
                "on"     => __("Désactiver le commutateur de relais", __FILE__)
            ],
            "remoteControlStatus" => [
                "remoteControlEnabled" => __("Télécommande", __FILE__)
            ],
            "riceCooker" => [
                "completionTime"       => __("Heure de fin",__FILE__),
                "schedulingEnabled"    => __("Planification activée",__FILE__),
                "scheduledTime"        => __("Heure planifiée",__FILE__),
                "cookerState"          => __("Statut du cuiseur",__FILE__),
                "supportedCookerModes" => __("Modes du cuiseur supportés",__FILE__),
                "schedulableMenus"     => __("Menus programmables",__FILE__),
                "startTime"            => __("Heure de début",__FILE__),
                "cookerMode"           => __("Mode du cuiseur",__FILE__),
                "menu"                 => __("Menu",__FILE__),
                "supportedMenus"       => __("Menus supportés",__FILE__),
                "event"                => __("Événement",__FILE__),
                "supportedEvents"      => __("Évenements supportés",__FILE__),
                "stop"                 => __("Arrêter",__FILE__),
                "startCooking"         => __("Démarrer la cuisson",__FILE__),
                "setMode"              => __("Changer le mode",__FILE__),
                "scheduleCooking"      => __("Programmer la cuisson",__FILE__)
            ],
            "robotCleanerCleaningMode" => [
                "robotCleanerCleaningMode"    => __("Nettoyage", __FILE__),
                "setRobotCleanerCleaningMode" => __("Changer le nettoyage", __FILE__)
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
            "robotCleanerTurboMode" => [
                "robotCleanerTurboMode"    => __("Puissance d'aspiration", __FILE__),
                "setRobotCleanerTurboMode" => __("Changer la puissance d'aspiration", __FILE__)
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
            "samsungce.connectionState" => [
                "connectionState" => __("État de la connexion", __FILE__)
            ],
            "samsungce.cooktopFlexZone" => [
                "flexZones" => __("Zones d'induction", __FILE__)
            ],
            "samsungce.countDownTimer" => [
                "startValue"    => __("Valeur initiale du compte à rebours", __FILE__),
                "currentValue"  => __("Valeur actuelle du compte à rebours", __FILE__),
                "status"        => __("État du compte à rebours", __FILE__),
                "resume"        => __("Reprendre le compte à rebours", __FILE__),
                "cancel"        => __("Annuler le compte à rebours", __FILE__),
                "start"         => __("Démarrer le compte à rebours", __FILE__),
                "setStartValue" => __("Changer la valeur intiale du compte à rebours", __FILE__),
                "pause"         => __("Mettre en pause le compte à rebours", __FILE__)
            ],
            "samsungce.cooktopHeatingPower" => [
                "manualLevel"           => __("Niveau manuel", __FILE__),
                "heatingMode"           => __("Mode de chauffage", __FILE__),
                "manualLevelMin"        => __("Niveau manuel minimum", __FILE__),
                "supportedHeatingModes" => __("Modes de chauffage supportés", __FILE__),
                "manualLevelMax"        => __("Niveau manuel maximum", __FILE__)
            ],
            "samsungce.definedRecipe" => [
                "definedRecipe"     => __("Recette définie", __FILE__),
                "setDefinedRecipe"  => __("Changer la recette définie", __FILE__),
                "cookDefinedRecipe" => __("Cuisiner la recette définie", __FILE__)
            ],
            "samsungce.detergentAutoReplenishment" => [
                "neutralDetergentType"            => __("Type de lessive neutre", __FILE__),
                "regularDetergentRemainingAmount" => __("Quantité restante de lessive ordinaire", __FILE__),
                "babyDetergentRemainingAmount"    => __("Quantité restante de lessive pour bébés", __FILE__),
                "neutralDetergentRemainingAmount" => __("Quantité restante de lessive neutre", __FILE__),
                "neutralDetergentAlarmEnabled"    => __("Alarme lessive neutre activée", __FILE__),
                "neutralDetergentOrderThreshold"  => __("Seuil de commande de lessive neutre", __FILE__),
                "babyDetergentInitialAmount"      => __("Quantité initiale de lessive pour bébé", __FILE__),
                "babyDetergentType"               => __("Type de lessive pour bébé", __FILE__),
                "neutralDetergentInitialAmount"   => __("Quantité initiale de lessive neutre", __FILE__),
                "regularDetergentDosage"          => __("Dosage de la lessive ordinaire", __FILE__),
                "babyDetergentDosage"             => __("Dosage de la lessive pour bébés", __FILE__),
                "regularDetergentOrderThreshold"  => __("Seuil de commande de lessive ordinaire", __FILE__),
                "regularDetergentType"            => __("Type de lessive ordinaire", __FILE__),
                "regularDetergentInitialAmount"   => __("Quantité initiale de lessive ordinaire", __FILE__),
                "regularDetergentAlarmEnabled"    => __("Alarme lessive ordinaire activée", __FILE__),
                "neutralDetergentDosage"          => __("Dosage de la lessive neutre", __FILE__),
                "babyDetergentOrderThreshold"     => __("Seuil de commande de lessive pour bébés", __FILE__),
                "babyDetergentAlarmEnabled"       => __("Alarme de lessive pour bébé activée", __FILE__),
                "enableAlarm"                     => __("Activer l'alarme de lessive", __FILE__),
                "setOrderThreshold"               => __("Fixer le seuil de commande de lessive", __FILE__),
                "disableAlarm"                    => __("Désactiver l'alarme de lessive", __FILE__),
                "setAutoReplenishment"            => __("Définir le remplissage automatique de lessive", __FILE__),
                "setInitialAmount"                => __("Définir la quantité de lessive initiale", __FILE__),
                "setRemainingAmount"              => __("Définir la quantité de lessive restante", __FILE__),
                "setDosage"                       => __("Définir le dosage de lessive", __FILE__),
                "setType"                         => __("Définir le type de lessive", __FILE__)
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
            "samsungce.dongleSoftwareInstallation" => [
                "status" => __("Installation du logiciel du dongle", __FILE__)
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
            "samsungce.dryerDelayEnd" => [
                "remainingTime"                => __("Délai restant", __FILE__),
                "minimumReservableTime"        => __("Délai minimum réservable", __FILE__),
                "refreshMinimumReservableTime" => __("Rafraîchir le délai minimum réservable", __FILE__),
                "setDelayTime"                 => __("Changer le délai", __FILE__)
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
            "samsungce.dryerOperatingState" => [
                "operatingState"            => __("État de fonctionnement", __FILE__),
                "supportedOperatingStates"  => __("États de fonctionnement pris en charge", __FILE__),
                "scheduledJobs"             => __("Tâches programmées", __FILE__),
                "progress"                  => __("Progression du sèchage", __FILE__),
                "dryerJobState"             => __("Statut de tâche de séchage", __FILE__),
                "remainingTimeStr"          => __("Temps humain de lavage restant", __FILE__),
                "remainingTime"             => __("Temps de séchage restant", __FILE__),
                "resume"                    => __("Reprendre", __FILE__),
                "cancel"                    => __("Annuler", __FILE__),
                "start"                     => __("Démarrer", __FILE__),
                "setDelayEnd"               => __("Changer la fin différée", __FILE__),
                "pause"                     => __("Mettre en pause", __FILE__),
            ],
            "samsungce.dustFilterAlarm" => [
                "alarmThreshold"           => __("Seuil d'alerte du filtre à poussière", __FILE__),
                "supportedAlarmThresholds" => __("Seuils d'alerte du filtre à poussière supportés", __FILE__),
                "setAlarmThreshold"        => __("Changer le seuil d'alerte du filtre à poussière", __FILE__),
            ],
            "samsungce.errorAndAlarmState" => [
                "events" => __("Événements pour les états d'erreur et d'alarme", __FILE__)
            ],
            "samsungce.fridgePantryInfo" => [
                "name" => __("Nom du garde-manger", __FILE__),
            ],
            "samsungce.fridgePantryMode" => [
                "mode"           => __("Mode du garde-manger", __FILE__),
                "setMode"        => __("Changer de mode du garde-manger", __FILE__),
                "supportedModes" => __("Mode du garde-manger pris en charge", __FILE__),
            ],
            "samsungce.hoodFanSpeed" => [
                "settableMaxFanSpeed"   => __("Vitesse maximale du ventilateur réglable de la hotte", __FILE__),
                "hoodFanSpeed"          => __("Vitesse du ventilateur de la hotte", __FILE__),
                "supportedHoodFanSpeed" => __("Vitesses du ventilateur de la hotte supportées", __FILE__),
                "settableMinFanSpeed"   => __("Vitesse minimale du ventilateur réglable de la hotte", __FILE__),
                "setHoodFanSpeed"       => __("Changer la vitesse du ventilateur de la hotte", __FILE__)
            ],
            "samsungce.kitchenDeviceIdentification" => [
                "regionCode" => __("Code de région", __FILE__),
                "modelCode"  => __("Code de modèle", __FILE__),
                "type"       => __("Type d'électroménager", __FILE__)
            ],
            "samsungce.kidsLock" => [
                "lock"      => __("Activer la sécurité enfant", __FILE__),
                "unlock"    => __("Désactiver la sécurité enfant", __FILE__),
                "lockState" => __("Statut de la sécurité enfant", __FILE__)
            ],
            "samsungce.kidsLockControl" => [
                "lock"      => __("Activer le contrôle de la sécurité enfant", __FILE__),
                "unlock"    => __("Désactiver le contrôle de la sécurité enfant", __FILE__),
                "lockState" => __("Statut de contrôle de la sécurité enfant", __FILE__)
            ],
            "samsungce.kitchenDeviceDefaults" => [
                "defaultOperationTime" => __("Temps de fonctionnement par défaut", __FILE__),
                "defaultOvenMode"      => __("Mode de cuisson par défaut", __FILE__),
                "defaultOvenSetpoint"  => __("Température du thermostat par défaut", __FILE__)
            ],
            "samsungce.kitchenModeSpecification" => [
                "specification" => __("Spécification du mode cuisine", __FILE__),
            ],
            "samsungce.lamp" => [
                "brightnessLevel"          => __("Niveau de luminosité", __FILE__),
                "setBrightnessLevel"       => __("Changer le niveau de luminosité", __FILE__),
                "supportedBrightnessLevel" => __("Niveaux de luminosité pris en charge", __FILE__)
            ],
            "samsungce.meatProbe" => [
                "temperatureSetpoint"    => __("Température du thermostat de la sonde intégrée", __FILE__),
                "temperature"            => __("Température de la sonde intégrée", __FILE__),
                "status"                 => __("État de la sonde intégrée", __FILE__),
                "setTemperatureSetpoint" => __("Changer la température de la sonde intégrée", __FILE__)
            ],
            "samsungce.musicPlaylist" => [
                "currentTrack" => __("Piste en cours", __FILE__),
                "playlist"     => __("Liste de lecture", __FILE__),
                "setPlaylist"  => __("Changer de liste de lecture", __FILE__)
            ],
            "samsungce.ovenDrainageRequirement" => [
                "drainageRequirement"   => __("Besoin de drainage du four", __FILE__),
            ],
            "samsungce.ovenOperatingState" => [
                "completionTime"   => __("Heure de fin (new)", __FILE__),
                "operatingState"   => __("État de fonctionnement (new)", __FILE__),
                "progress"         => __("Progression (new)", __FILE__),
                "ovenJobState"     => __("Statut de tâche (new)", __FILE__),
                "operationTime"    => __("Temps de fonctionnement (new)", __FILE__),
                "setOperationTime" => __("Changer le temps de fonctionnement (new)", __FILE__),
                "pause"            => __("Mettre en pause (new)", __FILE__),
                "stop"             => __("Arrêter le four (new)", __FILE__),
                "start"            => __("Démarrer le four (new)", __FILE__)
            ],
            "samsungce.ovenMode" => [
                "supportedOvenModes" => __("Modes du four pris en charge (new)", __FILE__),
                "ovenMode"           => __("Mode du four (new)", __FILE__),
                "setOvenMode"        => __("Changer le mode du four (new)", __FILE__)
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
            "samsungce.remoteManagementData" => [
                "reportRawData" => __("Données brutes de télégestion", __FILE__),
                "version"       => __("Version de données de télégestion", __FILE__),
                "rmCommand"     => __("Commande de données de télégestion", __FILE__)
            ],
            "samsungce.robotCleanerAudioClip" => [
                "enabled" => __("État de l'extrait sonore", __FILE__),
                "enable"  => __("Activer l'extrait sonore", __FILE__),
                "disable" => __("Désactiver l'extrait sonore", __FILE__)
            ],
            "samsungce.robotCleanerAvpRegistration" => [
                "registrationStatus" => __("Statut d'inscription", __FILE__),
                "register"           => __("S'inscrire", __FILE__)
            ],
            "samsungce.robotCleanerCleaningMode" => [
                "supportedCleaningMode" => __("Mode de nettoyage supportés", __FILE__),
                "repeatModeEnabled"     => __("Mode répétition activé", __FILE__),
                "supportRepeatMode"     => __("Mode répétition pris en charge", __FILE__),
                "cleaningMode"          => __("Mode de nettoyage", __FILE__),
                "setCleaningMode"       => __("Changer le mode de nettoyage", __FILE__),
                "disableRepeatMode"     => __("Désactiver le mode de répétition", __FILE__),
                "enableRepeatMode"      => __("Activer le mode de répétition", __FILE__)
            ],
            "samsungce.robotCleanerDustBag" => [
                "supportedStatus" => __("États du sac à poussière supportés", __FILE__),
                "status"          => __("État du sac à poussière", __FILE__)
            ],
            "samsungce.robotCleanerMapCleaningInfo" => [
                "area"          => __("Zone de nettoyage", __FILE__),
                "cleanedExtent" => __("Superficie néttoyée", __FILE__),
                "nearObject"    => __("Objet proche", __FILE__),
                "remainingTime" => __("Temps de nettoyage restant", __FILE__)
            ],
            "samsungce.robotCleanerMapList" => [
                "maps" => __("Liste des cartographies", __FILE__)
            ],
            "samsungce.robotCleanerMonitoringAutomation" => [
                "enableMonitoringAutomation" => __("Activer le système de surveillance", __FILE__)
            ],
            "samsungce.robotCleanerMotorFilter" => [
                "motorFilterResetType" => __("Type de réinitialisation du filtre moteur", __FILE__),
                "motorFilterStatus"    => __("État du filtre moteur", __FILE__)
            ],
            "samsungce.robotCleanerOperatingState" => [
                "supportedOperatingState"      => __("État de fonctionnement supportés", __FILE__),
                "operatingState"               => __("État de fonctionnement", __FILE__),
                "homingReason"                 => __("Raison du retour sur la station d'accueil", __FILE__),
                "resume"                       => __("Reprendre", __FILE__),
                "setOperatingState"            => __("Changer l'état de fonctionnement", __FILE__),
                "returnToHome"                 => __("Retour sur la station d'accueil", __FILE__),
                "start"                        => __("Démarrer", __FILE__),
                "pause"                        => __("Mettre en pause", __FILE__),
                "isMapBasedOperationAvailable" => __("Fonctionnement sur carte disponible ?", __FILE__),
                "cancelRemainingJob"           => __("Annuler nettoyage", __FILE__),
            ],
            "samsungce.robotCleanerPetCleaningSchedule" => [
                "dayOfWeek"   => __("Jour de la semaine", __FILE__),
                "mapId"       => __("Identifiant de la carte", __FILE__),
                "areaIds"     => __("Identifiants de la zone", __FILE__),
                "startTime"   => __("Heure de début", __FILE__),
                "originator"  => __("Initiateur", __FILE__),
                "obsoleted"   => __("Obsolète", __FILE__),
                "enabled"     => __("État d'activation du planning", __FILE__),
                "setSchedule" => __("Définir le programme", __FILE__),
                "enable"      => __("Activer le programme", __FILE__),
                "disable"     => __("Désactiver le programme", __FILE__)
            ],
            "samsungce.robotCleanerPetMonitor" => [
                "dayOfWeek"         => __("Jour de la semaine (animaux)", __FILE__),
                "monitoringStatus"  => __("État de la surveillance des animaux", __FILE__),
                "blockingStatus"    => __("État du blocage", __FILE__),
                "mapId"             => __("Identifiant de la carte (animaux)", __FILE__),
                "areaIds"           => __("Identifiants de la zone (animaux)", __FILE__),
                "startTime"         => __("Heure de début (animaux)", __FILE__),
                "interval"          => __("Intervalle", __FILE__),
                "endTime"           => __("Heure de fin", __FILE__),
                "originator"        => __("Point de départ", __FILE__),
                "obsoleted"         => __("Obsolète (animaux)", __FILE__),
                "waypoints"         => __("Repères", __FILE__),
                "enabled"           => __("État d'activation du planning (animaux)", __FILE__),
                "setMonitor"        => __("Définir la surveillance", __FILE__),
                "enable"            => __("Activer le programme (animaux)", __FILE__),
                "disable"           => __("Désactiver le programme (animaux)", __FILE__)
            ],
            "samsungce.robotCleanerPetMonitorReport" => [
                "report" => __("Rapport de surveillance des animaux", __FILE__)
            ],
            "samsungce.robotCleanerRelayCleaning" => [
                "batonTouch" => __("Relai", __FILE__)
            ],
            "samsungce.robotCleanerReservation" => [
                "reservations"            => __("Réservations", __FILE__),
                "maxNumberOfReservations" => __("Nombre maximum de réservations", __FILE__),
                "addReservation"          => __("Ajouter une réservation", __FILE__),
                "deleteReservations"      => __("Supprimer des réservations", __FILE__),
                "editReservation"         => __("Éditer une réservation", __FILE__),
                "deleteReservation"       => __("Supprimer une réservation", __FILE__)
            ],
            "samsungce.robotCleanerWelcome" => [
                "coordinates"    => __("Coordonnées", __FILE__),
                "setCoordinates" => __("Définir les coordonnées", __FILE__),
                "start"          => __("Démarrer l'accueil", __FILE__)
            ],
            "samsungce.selfCheck" => [
                "result"           => __("Résultat de l'autocontrôle", __FILE__),
                "supportedActions" => __("Actions d'autocontrôle supportées", __FILE__),
                "progress"         => __("Progression de l'autocontrôle", __FILE__),
                "errors"           => __("Erreurs de l'autocontrôle", __FILE__),
                "status"           => __("État de l'autocontrôle", __FILE__),
                "cancelSelfCheck"  => __("Annuler l'autocontrôle", __FILE__),
                "startSelfCheck"   => __("Démarrer l'autocontrôle", __FILE__),

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
            "samsungce.softenerAutoReplenishment" => [
                "regularSoftenerType"            => __("Type d’adoucissant ordinaire", __FILE__),
                "regularSoftenerAlarmEnabled"    => __("Alarme régulière d'adoucissant ordinaire", __FILE__),
                "regularSoftenerInitialAmount"   => __("Quantité initiale d'adoucissant ordinaire", __FILE__),
                "regularSoftenerRemainingAmount" => __("Quantité restante d'adoucissant ordinaire", __FILE__),
                "regularSoftenerDosage"          => __("Dosage régulier de l'adoucissant ordinaire", __FILE__),
                "regularSoftenerOrderThreshold"  => __("Seuil de commande d'adoucissant ordinaire", __FILE__),
                "enableAlarm"                    => __("Activer l'alarme d'adoucissant", __FILE__),
                "setOrderThreshold" => __("Fixer le seuil de commande d'adoucissant", __FILE__),
                "disableAlarm"                   => __("Désactiver l'alarme d'adoucissant", __FILE__),
                "setAutoReplenishment"           => __("Définir le remplissage automatique d'adoucissant", __FILE__),
                "setInitialAmount"               => __("Définir la quantité d'adoucissant initiale", __FILE__),
                "setRemainingAmount"             => __("Définir la quantité d'adoucissant restant", __FILE__),
                "setDosage"                      => __("Définir le dosage d'adoucissant", __FILE__),
                "setType"                        => __("Définir le type d'adoucissant", __FILE__)
            ],
            "samsungce.softwareUpdate" => [
                "otnDUID"             => __("Identifiant DHCP OTN", __FILE__),
                "availableModules"    => __("Modules disponibles", __FILE__),
                "newVersionAvailable" => __("Mise à jour disponible", __FILE__),
                "agreeUpdate"         => __("Accepter la mise à jour", __FILE__),
                "disagreeUpdate"      => __("Refuser la mise à jour", __FILE__),
                "targetModule"        => __("Module cible", __FILE__),
                "lastUpdatedDate"     => __("Date de dernière mise à jour", __FILE__),
                "operatingState"      => __("État de fonctionnement", __FILE__),
                "progress"            => __("Progression", __FILE__)
            ],
            "samsungce.softwareVersion" => [
                "versions" => __("Versions du logiciel", __FILE__)
            ],
            "samsungce.soundDetectionSensitivity" => [
                "level"           => __("Niveau de sensibilité de détection sonore", __FILE__),
                "supportedLevels" => __("Niveaux de sensibilité de détection sonore supportés", __FILE__),
                "setLevel"        => __("Changer le niveau de sensibilité de détection sonore", __FILE__)
            ],
            "samsungce.surfaceResidualHeat" => [
                "surfaceResidualHeat" => __("Chaleur résiduelle en surface", __FILE__)
            ],
            "samsungce.viewInside" => [
              "contents"        => __("Contenu du fichier", __FILE__),
              "lastUpdatedTime" => __("Dernière mise à jour du fichier", __FILE__),
              "refreshAll"      => __("Rafraîchir tous les fichiers", __FILE__),
              "refresh"         => __("Rafraîchir le fichier", __FILE__),
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
            "samsungce.washerDelayEnd" => [
                "remainingTime"                => __("Délai restant", __FILE__),
                "minimumReservableTime"        => __("Délai minimum réservable", __FILE__),
                "refreshMinimumReservableTime" => __("Rafraîchir le délai minimum réservable", __FILE__),
                "setDelayTime"                 => __("Changer le délai", __FILE__)
            ],
            "samsungce.washerFreezePrevent" => [
                "operatingState" => __("État de fonctionnement du déblocage", __FILE__)
            ],
            "samsungce.washerOperatingState" => [
                "washerJobState"            => __("Statut de tâche de lavage", __FILE__),
                "operatingState"            => __("État de fonctionnement", __FILE__),
                "supportedOperatingStates"  => __("États de fonctionnement pris en charge", __FILE__),
                "scheduledJobs"             => __("Tâches programmées", __FILE__),
                "progress"                  => __("Progression du lavage", __FILE__),
                "remainingTimeStr"          => __("Temps humain de lavage restant", __FILE__),
                "operationTime"             => __("Temps de fonctionnement", __FILE__),
                "remainingTime"             => __("Temps de lavage restant", __FILE__),
                "resume"                    => __("Reprendre", __FILE__),
                "cancel"                    => __("Annuler", __FILE__),
                "start"                     => __("Démarrer", __FILE__),
                "estimateOperationTime"     => __("Temps de fonctionnement estimé", __FILE__),
                "setDelayEnd"               => __("Changer la fin différée", __FILE__),
                "pause"                     => __("Mettre en pause", __FILE__),
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
            "samsungce.waterReservoir" => [
                "slotState" => __("État des fentes", __FILE__)
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
                "setDensity"       => __("Changer la densité du distributeur d'adoucissant", __FILE__),
                "availableTypes"   => __("Types de distributeurs disponibles", __FILE__)
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
            "samsungim.fixedFindNode" => [
                "refresh" => __("Rafraîchir le nœud", __FILE__),
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
                "firmwareVersion"    => __("Version du firmware", __FILE__),
                "setFirmwareVersion" => __("Changer la version du firmware", __FILE__)
            ],
            "samsungvd.groupInfo" => [
                "role"       => __("Rôle de groupe", __FILE__),
                "masterName" => __("Nom du maître du groupe", __FILE__),
                "status"     => __("État du groupe", __FILE__),
                "channel"    => __("Canal du groupe", __FILE__),
            ],
            "samsungvd.mediaInputSource" => [
                "supportedInputSources" => __("Sources d'entrée prises en charge (Map)", __FILE__),
                "inputSource"           => __("Source d'entrée (Map)", __FILE__),
                "setInputSource"        => __("Changer la source d'entrée (Map)", __FILE__)
            ],
            "samsungvd.soundFrom" => [
                "mode"         => __("Mode de source audio", __FILE__),
                "detailName"   => __("Nom détaillé de source audio", __FILE__),
                "setSoundFrom" => __("Changer la source audio", __FILE__)
            ],
            "samsungvd.supportsFeatures" => [
                "imeAdvSupported"    => __("Clavier virtuel supporté", __FILE__),
                "mobileCamSupported" => __("Caméral mobule supportée", __FILE__)
            ],
            "samsungvd.supportsPowerOnByOcf" => [
                "supportsPowerOnByOcf" => __("Allumage par OCF pris en charge", __FILE__)
            ],
            "scenes" => [
                "supportedScenes" => __("Scènes prises en charge", __FILE__),
                "scene"           => __("Scène actuelle", __FILE__),
                "setScene"        => __("Changer la scène actuelle", __FILE__)
            ],
            "scent" => [
                "scentName"         => __("Nom de senteur", __FILE__),
                "scentIntensity"    => __("Intensité de senteur", __FILE__),
                "setScentIntensity" => __("Changer l'intensité de senteur", __FILE__)
            ],
            "sec.diagnosticsInformation" => [
                "logType"          => __("Type de journal", __FILE__),
                "endpoint"         => __("Point final", __FILE__),
                "minVersion"       => __("Version minimale", __FILE__),
                "setupId"          => __("Identifiant de configuration", __FILE__),
                "signinPermission" => __("Autorisation d'inscription", __FILE__),
                "protocolType"     => __("Type de protocole", __FILE__),
                "tsId"             => __("Identifiant de système", __FILE__),
                "mnId"             => __("Identifiant du constructeur", __FILE__),
                "dumpType"         => __("Type de vidage", __FILE__),
            ],
            "securitySystem" => [
                "alarm"                => __("Alarme", __FILE__),
                "securitySystemStatus" => __("Mode de sécurité", __FILE__),
                "armStay"              => __("Activer l'alarme (présent)", __FILE__),
                "disarm"               => __("Désarmer l'alarme", __FILE__),
                "armAway"              => __("Activer l'alarme (absent)", __FILE__)
            ],
            "shockSensor" => [
                "shock" => __("Détecteur de choc", __FILE__)
            ],
            "signalahead13665.applianceoperationstatesv2" => [
                "operationState" => __("État de fonctionnement", __FILE__),
            ],
            "signalahead13665.dishwasherprogramsv2" => [
                "availablePrograms" => __("Programmes disponibles", __FILE__),
                "program"           => __("Programme actuel", __FILE__),
                "stop"              => __("Arrêter le programme", __FILE__),
                "setProgram"        => __("Changer le programme", __FILE__)
            ],
            "signalahead13665.ovenprogramsv2" => [
                "availablePrograms" => __("Programmes disponibles", __FILE__),
                "program"           => __("Programme actuel", __FILE__),
                "stop"              => __("Arrêter le programme", __FILE__),
                "setProgram"        => __("Changer le programme", __FILE__)
            ],
            "signalahead13665.pauseresumev2" => [
                "pauseState"    => __("État de pause", __FILE__),
                "setPauseState" => __("Mettre en pause", __FILE__)
            ],
            "signalahead13665.pauseresumev3" => [
                "pauseState"    => __("État de pause v3", __FILE__),
                "setPauseState" => __("Mettre en pause v3", __FILE__)
            ],
            "signalahead13665.programdurationv2" => [
                "duration"           => __("Durée du programme", __FILE__),
                "setProgramDuration" => __("Changer la durée du programme", __FILE__)
            ],
            "signalahead13665.startstopprogramv2" => [
                "startstop"        => __("État du programme", __FILE__),
                "setStartstop"     => __("Changer l'état du programme", __FILE__),
                "setStartstopplay" => __("Lancer le programme", __FILE__),
                "setStartstopstop" => __("Stopper le programme", __FILE__),
            ],
            "signalahead13665.startstopprogramv3" => [
                "startstop"        => __("État du programme v3", __FILE__),
                "setStartstop"     => __("Changer l'état du programme v3", __FILE__),
                "setStartstopplay" => __("Lancer le programme v3", __FILE__),
                "setStartstopstop" => __("Stopper le programme v3", __FILE__),
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
                "soundPressureLevel" => __("Niveau sonore", __FILE__)
            ],
            "soundSensor" => [
                "sound" => __("Capteur de son", __FILE__)
            ],
            "speechRecognition" => [
                "phraseSpoken" => __("Phrase énoncée", __FILE__)
            ],
            "speechSynthesis" => [
                "speak" => __("Prononcez la phrase", __FILE__)
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
            "statelessScenes" => [
                "supportedScenes" => __("Scènes supportées", __FILE__),
                "setScene"        => __("Changer de scène", __FILE__)
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
                "setButton"                   =>  __("Simuler l'appui sur le bouton température", __FILE__)
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
                "switch" => __("Marche", __FILE__),
                "on"     => __("Allumer", __FILE__),
                "off"    => __("Éteindre", __FILE__)
            ],
            "switchLevel" => [
                "level"    => __("Bouton variateur", __FILE__),
                "setLevel" => __("Faire varier le bouton", __FILE__)
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
                "tamper" => __("Alerte d'altération", __FILE__)
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
            "thermostatSetpoint" => [
                "thermostatSetpoint" => __("Définissez la température", __FILE__)
            ],
            "thermostatSchedule" => [
                "schedule"    => __("Programme", __FILE__),
                "setSchedule" => __("Changer le programme", __FILE__)
            ],
            "threeAxis" => [
                "threeAxis" => __("Capteur 3 axes", __FILE__)
            ],
            "timedSession" => [
                "completionTime"    => __("Heure de fin du minuteur", __FILE__),
                "sessionStatus"     => __("État du minuteur", __FILE__),
                "cancel"            => __("Annuler le minuteur", __FILE__),
                "stop"              => __("Arrêter le minuteur", __FILE__),
                "start"             => __("Démarrer le minuteur", __FILE__),
                "setCompletionTime" => __("Changer l'heure de fin du minuteur", __FILE__),
                "pause"             => __("Mettre en pause le minuteur", __FILE__)
            ],
            "tone" => [
                "beep" => __("Recherche du capteur", __FILE__)
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
            "tvChannel" => [
                "tvChannel"        => __("Chaîne", __FILE__),
                "tvChannelName"    => __("Nom de la chaîne", __FILE__),
                "channelDown"      => __("Chaîne -", __FILE__),
                "channelUp"        => __("Chaîne +", __FILE__),
                "setTvChannel"     => __("Changer la chaîne", __FILE__),
                "setTvChannelName" => __("Changer le nom de la chaîne", __FILE__)
            ],
            "tvocHealthConcern" => [
                "tvocHealthConcern" => __("Total des composés organiques volatiles", __FILE__)
            ],
            "tvocMeasurement" => [
                "tvocLevel" => __("Niveau du total des composés organiques volatiles", __FILE__)
            ],
            "ultravioletIndex" => [
                "ultravioletIndex" => __("Indice UV", __FILE__)
            ],
            "vehicleEngine" => [
                "engineState" => __("Moteur", __FILE__),
                "startEngine" => __("Démarrer", __FILE__),
                "stopEngine"  => __("Arrêter", __FILE__),
            ],
            "vehicleFuelLevel" => [
                "fuelLevel" => __("Niveau de carburant", __FILE__)
            ],
            "vehicleInformation" => [
                "vehicleColor" => __("Couleur du véhicule", __FILE__),
                "vehicleYear"  => __("Année du véhicule", __FILE__),
                "vehicleImage" => __("Photo du véhicule", __FILE__),
                "vehicleTrim"  => __("Garniture du véhicule", __FILE__),
                "vehiclePlate" => __("Plaque du véhicule", __FILE__),
                "vehiclModel"  => __("Modèle  du véhicule", __FILE__),
                "vehicleId"    => __("VIN du véhicule", __FILE__),
                "vehicleMake"  => __("Marque du véhicule", __FILE__)
            ],
            "vehicleOdometer" => [
                "odometerReading" => __("Compteur kilimètrique", __FILE__)
            ],
            "vehicleRange" => [
                "estimatedRemainingRange" => __("Prochaine station d'essence", __FILE__)
            ],
            "vehicleTirePressureMonitor" => [
                "tirePressureState" => __("Pression des pneus", __FILE__)
            ],
            "valve" => [
                "valve" => __("Vanne", __FILE__),
                "close" => __("Fermé", __FILE__),
                "open"  => __("Ouvert", __FILE__)
            ],
            "veryFineDustSensor" => [
                "veryFineDustLevel" => __("PM 1,0", __FILE__)
            ],
            "veryFineDustHealthConcern" => [
                "veryFineDustHealthConcern" => __("Poussière très fine", __FILE__)
            ],
            "videoCapture" => [
                "stream"  => __("Flux", __FILE__),
                "clip"    => __("Clip", __FILE__),
                "capture" => __("Enregistrer", __FILE__)
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
                "machineState"           => __("Statut de l'appareil", __FILE__),
                "setMachineState"        => __("Changer le statut de la l'appareil", __FILE__),
                "washerJobState"         => __("Statut de tâche", __FILE__),
                "supportedMachineStates" => __("Statuts de l'appareil pris en charge", __FILE__)
            ],
            "washerOperationalState" => [
                "completionTime"         => __("Heure de fin", __FILE__),
                "machineState"           => __("Statut de l'appareil", __FILE__),
                "setMachineState"        => __("Changer le statut de la l'appareil", __FILE__),
                "washerJobState"         => __("Statut de tâche", __FILE__),
                "supportedMachineStates" => __("Statuts de l'appareil pris en charge", __FILE__)
            ],
            "waterFlowAlarm" => [
                "volumeAlarm"            => __("Alarme du volume du débit d'eau", __FILE__),
                "durationAlarm"          => __("Alarme du durée du débit d'eau", __FILE__),
                "supportedAlarmStatuses" => __("États d'alarme du débit d'eau supportés", __FILE__),
                "rateAlarm"              => __("Alarme du taux du débit d'eau", __FILE__)
            ],
            "waterMeter" => [
                "lastHour"            => __("Heure précédente du compteur d'eau", __FILE__),
                "lastTwentyFourHours" => __("Dernières 24h du compteur d'eau", __FILE__),
                "lastSevenDays"       => __("7 derniers jours du compteur d'eau", __FILE__),
            ],
            "waterPressureMeasurement" => [
                "pressureAlarm" => __("Alarme de pression", __FILE__),
                "pressure"      => __("Pression", __FILE__)
            ],
            "waterSensor" => [
                "water" => __("Détecteur d'eau", __FILE__)
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
            "webrtc" => [
                "sdpAnswer"         => __("Live stream", __FILE__),
                "talkback"          => __("Parler", __FILE__),
                "supportedFeatures" => __("Fonctionnalités supportés", __FILE__),
                "audioOnly"         => __("Audio uniquement", __FILE__),
                "stunUrl"           => __("STUN URL", __FILE__),
                "sdpOffer"          => __("Démarrer le flux", __FILE__),
                "startTalkback"     => __("Démarrer le dialogue", __FILE__),
                "stopTalkback"      => __("Arrêter le dialogue", __FILE__),
                "end"               => __("Arrêter le flux", __FILE__)
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
                "supportedWindowShadeCommands" => __("Commandes de volets prises en charge", __FILE__),
                "windowShade"                  => __("Volets", __FILE__),
                "close"                        => __("Fermer", __FILE__),
                "closing"                      => __("Fermeture", __FILE__),
                "open"                         => __("Ouvrir", __FILE__),
                "opening"                      => __("Ouverture", __FILE__),
                "partially open"               => __("Ouvert partiellement", __FILE__),
                "unknown"                      => __("Inconnu", __FILE__),
                "pause"                        => __("Pause", __FILE__)
            ],
            "windowShadeLevel" => [
                "shadeLevel"    => __("Niveau d'obscurité", __FILE__),
                "setShadeLevel" => __("Changer le niveau d'obscurité", __FILE__)
            ],
            "windowShadePreset" => [
                "presetPosition"    => __("Position préréglée", __FILE__),
            ],
            "windSpeed" => [
                "windSpeed" => __("Vitesse du vent", __FILE__)
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
                "Course_17" =>  __("Super rapide", __FILE__),
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
