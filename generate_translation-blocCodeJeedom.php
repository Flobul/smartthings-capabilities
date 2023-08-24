#################################################################################################
## Ce script permet de récupérer les traductions fr SmartThings depuis son compte SmartThings. ##
## Il permet aussi de récupérer les capabilities ajoutés manuellement ($customAdded).          ##
## Il faut mettre ce script dans un bloc code de scénario Jeedom.                              ##
## Dernière mise à jour : 23/08/2023                                                           ##
## Créé par Flobul pour Jeedom                                                                 ##
#################################################################################################
$url_capabilities = 'https://api.smartthings.com/v1/capabilities';
$custom_token = ""; //entrez votre token ici
$plugin_token = config::byKey('token','smartthings',""); //ou laissez le code le récupérer dans le plugin (plugin obligatoire)

if ($custom_token != "") $token = $custom_token;
elseif($plugin_token != '' ) $token = $plugin_token;

$_version = '1';
$_language = 'fr'; //spécifiez la langue à télécharger (ex: fr, en, it...)
$url_i18n = '/' . $_version . '/i18n/' . $_language;

global $tmp_dir;
$tmp_dir = '/tmp/jeedom/smartthings';
$i = 0;

$customAdded = array(
	"airConditionerOptionalMode",
	"custom.accessibility",
	"custom.airConditionerOdorController",
	"custom.airConditionerOptionalMode",
	"custom.airConditionerTropicalNightMode",
	"custom.autoCleaningMode",
	"samsungvd.ambient",
	"samsungvd.ambient18",
	"samsungvd.ambientContent",
	"samsungce.autoDispenseDetergent",
	"samsungce.autoDispenseSoftener",
	"samsungce.customRecipe",
	"samsungce.detergentState",
	"samsungce.doorState",
	"samsungce.driverVersion",
	"custom.deodorFilter",
	"custom.deviceInfo",
	"custom.deviceDependencyStatus",
	"custom.deviceReportStateConfiguration",
	"custom.doNotDisturbMode",
	"custom.dryerWrinklePrevent",
	"custom.dryerDryLevel",
	"samsungce.dryerAutoCycleLink",
	"samsungce.dryerCycle",
	"custom.dthVersion",
	"custom.dustFilter",
	"tag.e2eEncryption",
	"custom.electricHepaFilter",
	"custom.energyType",
	"custom.error",
	"custom.fridgeMode",
	"custom.hepaFilter",
	"tag.factoryReset",
	"samsungvd.firmwareVersion",
	"samsungtv.firmwareVersion",
	"custom.jobBeginningStatus",
	"samsungce.kidsLock",
	"custom.launchapp",
	"samsungvd.mediaInputSource",
	"custom.outingMode",
	"custom.ovenCavityStatus",
	"custom.periodicSensing",
	"custom.picturemode",
	"custom.recording",
	"custom.spiMode",
	"custom.supportedOptions",
	"custom.thermostatSetpointControl",
	"custom.soundmode",
	"custom.tvsearch",
	"samsungce.softenerOrder",
	"samsungce.softenerState",
	"samsungtv.supportsPowerOnByOcf",
	"tag.searchingStatus",
	"tag.tagStatus",
	"tag.tagButton",
	"tag.updatedInfo",
	"custom.veryFineDustFilter",
	"custom.washerAutoDetergent",
	"custom.washerAutoSoftener",
	"samsungce.deviceIdentification",
	"samsungce.washerBubbleSoak",
	"samsungce.washerCycle",
	"samsungce.washerCyclePreset",
	"samsungce.waterConsumptionReport",
	"samsungce.washerWashingTime",
	"samsungce.washerWaterLevel",
	"samsungce.washerWaterValve",
	"samsungce.welcomeMessage",
	"samsungce.washerDelayEnd",
	"samsungce.washerFreezePrevent",
	"custom.washerRinseCycles",
	"custom.washerSoilLevel",
	"custom.washerSpinLevel",
	"custom.washerWaterTemperature",
	"custom.waterFilter",
	"custom.dishwasherDelayStartTime",
	"custom.dishwasherDiagnosis",
	"custom.dishwasherSuppSelectedZone",
	"custom.dishwasherSelectedZone",
	"custom.dishwasherSuppZoneBooster",
	"custom.dishwasherZoneBooster",
	"custom.dishwasherSuppSpeedBooster",
	"custom.dishwasherSpeedBooster",
	"custom.dishwasherSuppSanitize",
	"custom.dishwasherSanitize",
	"custom.dishwasherSuppHighTempDry",
	"custom.dishwasherHighTempDry",
	"custom.dishwasherSuppOptions",
	"custom.dishwasherOperatingPercentage",
	"custom.dishwasherOperatingProgress",
	"custom.dishwasherOperatingSuppProgress",
	"custom.dishwasherKidsLock",
	"custom.virusDoctorMode",
	"custom.disabledCapabilities",
	"custom.disabledComponents",
	"custom.robotCleanerSmartTurboMode",
	"custom.robotCleanerSoundSet",
	"custom.robotCleanerSmartControl",
	"custom.robotCleanerRepeatCleanOption",
	"custom.robotCleanerBatteryFullStatus",
	"custom.robotCleanerRepeatCleanSupport",
	"custom.robotCleanerSuctionType",
	"custom.robotCleanerHistorySupport",
	"custom.robotCleanerEnergyMonitorSupport",
	"custom.robotCleanerReserveCleanType",
	"custom.robotCleanerHrmSupport",
	"custom.robotCleanerBehavior",
	"custom.steamClosetOperatingState",
	"custom.steamClosetCourse",
	"custom.steamClosetWrinklePrevent",
	"custom.steamClosetSilentMode",
	"custom.lowerDevicePower",
	"custom.airQualityMaxLevel",
	"custom.airPurifierOperationMode",
	"custom.welcomeCareMode",
	"custom.filterUsageTime",
	"samsungce.lamp",
	"custom.washerAddwashAlarm",
	"tag.uwbActivation",
	"samsungce.dryerDryingTime",
	"samsungce.dryerCyclePreset",
	"samsungce.dryerDryingTemperature",
	"samsungce.powerFreeze",
	"samsungce.powerCool",
	"samsungvd.supportsPowerOnByOcf",
	"samsungce.robotCleanerCleaningMode",
	"samsungce.robotCleanerOperatingState",
	"samsungce.softwareUpdate",
	"samsungce.dongleSoftwareInstallation",
	"samsungce.fridgePantryInfo",
	"samsungce.fridgePantryMode",
	"samsungce.viewInside",
	"custom.cooktopOperatingState",
	"samsungce.kidsLockControl",
	"samsungce.definedRecipe",
	"samsungce.ovenMode",
	"samsungce.ovenOperatingState",
	"samsungce.kitchenModeSpecification",
	"samsungce.kitchenDeviceDefaults",
	"samsungce.meatProbe",
	"samsungvd.groupInfo",
	"signalahead13665.pauseresumev2",
	"signalahead13665.startstopprogramv2",
	"signalahead13665.ovenprogramsv2",
	"signalahead13665.programdurationv2",
	"signalahead13665.applianceoperationstatesv2",
	"samsungce.dustFilterAlarm",
	"samsungce.individualControlLock",
	"sec.diagnosticsInformation",
    "samsungce.selfCheck",
	"samsungce.washerOperatingState",
	"samsungce.dryerOperatingState",
	"samsungvd.soundFrom",
	"samsungce.errorAndAlarmState",
	"samsungce.cooktopFlexZone",
	"custom.userNotification",
	"samsungce.remoteManagementData",
	"samsungce.softwareVersion",
	"samsungce.countDownTimer",
	"samsungce.cooktopHeatingPower",
	"samsungce.surfaceResidualHeat",
	"samsungce.connectionState",
	"samsungce.hoodFanSpeed",
	"signalahead13665.dishwasherprogramsv2",
    "samsungce.detergentAutoReplenishment",
    "samsungce.softenerAutoReplenishment",
	"samsungce.waterReservoir",
	"samsungce.ovenDrainageRequirement",
	"signalahead13665.pauseresumev3",
	"signalahead13665.startstopprogramv3",
	"samsungvd.supportsFeatures",
	"samsungim.fixedFindNode",
    "samsungce.robotCleanerMapCleaningInfo",
    "samsungce.robotCleanerRelayCleaning",
    "samsungce.musicPlaylist",
    "samsungce.robotCleanerMapList",
    "samsungce.robotCleanerMotorFilter",
    "samsungce.robotCleanerPetCleaningSchedule",
    "samsungce.robotCleanerReservation",
    "samsungce.robotCleanerDustBag",
    "samsungce.robotCleanerWelcome",
    "samsungce.robotCleanerPetMonitor",
    "samsungce.robotCleanerAudioClip",
    "samsungce.soundDetectionSensitivity",
    "samsungce.robotCleanerPetMonitorReport",
    "samsungce.robotCleanerMonitoringAutomation",
    "samsungce.robotCleanerAvpRegistration",
    "samsungce.robotCleanerReservation"
);

/** création du dossier qui va contenir les fichiers capabilities **/
$scenario->setLog("# Création du dossier " . $tmp_dir);
if (!is_dir($tmp_dir)) {
	mkdir($tmp_dir);
	$scenario->setLog("# Dossier créé " . $tmp_dir);
}

/** Envoi de la requête
 * et récupération du json de toutes les capabilities du compte
 **/
$capabilities = json_decode(sendRequest($url_capabilities, $token),true);

if (is_array($capabilities['items']) || is_object($capabilities['items'])) {
    foreach ($capabilities['items'] as $capability) {
        $i++;
        $scenario->setLog($i . "Capability = " . json_encode($capability));
        $url_capabilities . '/' . $capability['id'] . $url_i18n;
        $i18n = json_decode(sendRequest($url_capabilities . '/' . $capability['id'] . $url_i18n, $token),true);
        if (!is_array($i18n['error'])) {
            $scenario->setLog("# Création du fichier de config i18n " . $capability['id'] . ".json");
            createPrettyJson($capability['id'] . ".i18n." . $i18n['tag'] , $i18n);
            $pres = true;
        }
    }
}

foreach ($customAdded as $custom) {
    $i++;
    $scenario->setLog($i . "Capability = " . $custom);
    $url_capabilities . '/' . $custom . $url_i18n;
    $i18n = json_decode(sendRequest($url_capabilities . '/' . $custom . $url_i18n, $token),true);
    if (!is_array($i18n['error'])) {
        $scenario->setLog("# Création du fichier de config i18n " . $capabilities['id'] . ".json");
        createPrettyJson($custom . ".i18n." . $i18n['tag'] , $i18n);
        $pres = true;
    }
}

/** DEBUT DE DECLARATION DES METHODES **/

/** méthode d'envoi des requêtes **/
function sendRequest($url, $bearer) {

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Accept-Language: ' . $_language,
			'Content-Type: application/json',
			'Authorization: Bearer ' . $bearer
		) ,
	));
	$response = curl_exec($curl);
	curl_close($curl);
	return $response;
}

/** méthode pour afficher le json de façon lisible
 * et l'envoyer dans un fichier
 **/
function createPrettyJson($capaId, $var) {

	global $tmp_dir;
	$pretty = json_encode($var, JSON_PRETTY_PRINT);
	file_put_contents($tmp_dir . "/" . $capaId . ".json", $pretty);
}
