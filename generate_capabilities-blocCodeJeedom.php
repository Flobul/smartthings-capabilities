<?php
###############################################################################################
## Ce script permet de récupérer les capabilities SmartThings depuis son compte SmartThings. ##
## Il permet aussi de récupérer les capabilities ajoutés manuellement ($customAdded).        ##
## Il faut mettre ce script dans un bloc code de scénario Jeedom.                            ##
## Dernière mise à jour : 31/03/2021                                                         ##
## Créé par Flobul pour Jeedom                                                               ##
###############################################################################################
$url_capabilities = 'https://api.smartthings.com/v1/capabilities';
global $tmp_dir;
$tmp_dir = '/tmp/jeedom/smartthings';
$token = 'your-smartthings-token';
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
	"custom.lowerDevicePower",
	"custom.airQualityMaxLevel",
	"custom.airPurifierOperationMode",
	"custom.welcomeCareMode",
	"custom.filterUsageTime"
);

/** création du dossier qui va contenir les fichiers capabilities **/
$scenario->setLog("# Création du dossier " . $tmp_dir);
if (!is_dir($tmp_dir)) {
	mkdir($tmp_dir);
	$scenario->setLog("# Dossier créé " . $tmp_dir);
}

/** vidage du fichier README.md **/
//file_put_contents($tmp_dir . "/" . "README.md", "");
$scenario->setLog("# Création du fichier " . $tmp_dir . "/" . "README.md");

/** Envoi de la requête
 * et récupération du json de toutes les capabilities du compte
 **/
$result = sendRequest($url_capabilities, $token);

/** Décodage en tableau du json récupéré **/
$toto = json_decode($result, true);

/** Pour chaque capability du compte, récupération de son json capability et presentation si existe
 * et mise sous tableau markdown pour poster sur github
 **/
foreach ($toto['items'] as $capa) {

	if ($i >= 0) continue; //limite à 3 pour les tests

	/** Construction de l'url générale de chaque capa **/
	$url_capability = $url_capabilities . '/' . $capa['id'] . '/' . $capa['version'];
	/** Envoi de la requête **/
	$resultCapa = sendRequest($url_capability, $token);
	/** Décodage en tableau du json récupéré **/
	$arrayCapa = json_decode($resultCapa, true);
	if (!is_array($arrayCapa['error'])) {
		$scenario->setLog("# Création du fichier de config " . $capa['id'] . ".json");
		createPrettyJson($capa['id'], $arrayCapa);
	}

	/** Construction de l'url de présentation de chaque capa **/
	$url_presentation = $url_capabilities . '/' . $capa['id'] . '/' . $capa['version'] . "/presentation";
	/** Envoi de la requête **/
	$resultPres = sendRequest($url_presentation, $token);
	/** Décodage en tableau du json récupéré **/
	$arrayPres = json_decode($resultPres, true);
	if (!is_array($arrayPres['error'])) {
		$scenario->setLog("# Création du fichier de config " . $capa['id'] . "Presentation.json");
		createPrettyJson($capa['id'] . "Presentation", $arrayPres);
		$pres = true;
	}
	else {
		$scenario->setLog($capa['id'] . "Presentation" . " n'existe pas.");
		$pres = false;
	}

	/** Indiquer si le fichier json de capability est présent dans le plugin SmartThings **/
	if (!checkIfCapabilityExists($capa['id'])) {
		$scenario->setLog($capa['id'] . " n'existe pas.");
	}

	/** création du markdown dans un fichier README.md **/
	$eachMd = printMarkdown($i, $arrayCapa['name'], $capa['id'], $capa['version'], $capa['status'], $pres);
	$current = file_get_contents($tmp_dir . "/" . "README.md");
	file_put_contents($tmp_dir . "/" . "README.md", $current . $eachMd);

	$i++;
}

/** Pour chaque capability custom, récupération de son json capability et presentation si existe
 * et mise sous tableau markdown pour poster sur github
 **/
foreach ($customAdded as $custom) {

	$i = 2;
	$capa['id'] = $custom;
	$capa['version'] = "1";
	$capa['status'] = "proposed";

	/** Construction de l'url générale de chaque capa **/
	$url_capability = $url_capabilities . '/' . $capa['id'] . '/' . $capa['version'];
	/** Envoi de la requête **/
	$resultCapa = sendRequest($url_capability, $token);
	/** Décodage en tableau du json récupéré **/
	$arrayCapa = json_decode($resultCapa, true);
	if (!is_array($arrayCapa['error'])) {
		$scenario->setLog("# Création du fichier de config " . $capa['id'] . ".json");
		createPrettyJson($capa['id'], $arrayCapa);
	}

	/** Construction de l'url de présentation de chaque capa **/
	$url_presentation = $url_capabilities . '/' . $capa['id'] . '/' . $capa['version'] . "/presentation";
	/** Envoi de la requête **/
	$resultPres = sendRequest($url_presentation, $token);
	/** Décodage en tableau du json récupéré **/
	$arrayPres = json_decode($resultPres, true);
	if (!is_array($arrayPres['error'])) {
		$scenario->setLog("# Création du fichier de config " . $capa['id'] . "Presentation.json");
		createPrettyJson($capa['id'] . "Presentation", $arrayPres);
		$pres = true;
	}
	else {
		$scenario->setLog($capa['id'] . "Presentation" . " n'existe pas.");
		$pres = false;
	}

	/** Indiquer si le fichier json de capability est présent dans le plugin SmartThings **/
	if (!checkIfCapabilityExists($capa['id'])) {
		$scenario->setLog($capa['id'] . " n'existe pas.");
	}

	/** création du markdown dans un fichier README.md **/
	$eachMd = printMarkdown($i, $arrayCapa['name'], $capa['id'], $capa['version'], $capa['status'], $pres);
	$current = file_get_contents($tmp_dir . "/" . "README.md");
	file_put_contents($tmp_dir . "/" . "README.md", $current . $eachMd);

	$i++;
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
			'Accept-Language: fr',
			'Content-Type: application/json',
			'Authorization: Bearer ' . $bearer
		) ,
	));
	$response = curl_exec($curl);
	curl_close($curl);
	return $response;
}

/** méthode de vérification du fichier capability.json **/
function checkIfCapabilityExists($capability) {

	$dir_capabilities = dirname(__FILE__) . '/../../plugins/smartthings/3rdparty/capabilities';
	if (is_file($dir_capabilities . "/" . $capability . '.json')) {
		return true;
	}
	else {
		return false;
	}
}

/** méthode de création du markdown **/
function printMarkdown($first, $name, $id, $version, $status, $pres) {

	$pres = ($pres) ? "[json](./json/" . $id . "Presentation.json)" : "";
	$md = "";
	if (!$first) {
		$md .= "## SmartThings Capabilities\n";
		$md .= "#### Last Update: " . date("Y-m-d") . "\n";
		$md .= "#### Edited by Flobul for Jeedom solution\n\n";

		$md .= "* [SmartThings Reference](https://smartthings.developer.samsung.com/docs/api-ref/capabilities.html)\n";
		$md .= "* [SmartThings API](https://smartthings.developer.samsung.com/docs/api-ref/st-api.html#tag/capabilities)\n";
		$md .= "* [SmartThings CLI](https://github.com/SmartThingsCommunity/smartthings-cli)\n";
		$md .= "* [Create Personal Access Token](https://account.smartthings.com/tokens)\n";
		$md .= "* [Plugin Documentation](https://flobul-domotique.fr/documentation-du-plugin-smartthings-pour-jeedom/)\n";
		$md .= "* [Plugin Jeedom Market](https://market.jeedom.com/index.php?v=d&p=market_display&id=4099)\n\n";

		$md .= "| Capability | Version | Status | Capability Presentation |\n";
		$md .= "| ---- | ---- | ---- | ---- |\n";
	}
	$md .= "| [" . $name . "](./json/" . $id . ".json) | " . $version . " | " . $status . " | " . $pres . " | \n";
	return $md;
}

/** méthode pour afficher le json de façon lisible
 * et l'envoyer dans un fichier
 **/
function createPrettyJson($capaId, $var) {

	global $tmp_dir;
	$pretty = json_encode($var, JSON_PRETTY_PRINT);
	file_put_contents($tmp_dir . "/" . $capaId . ".json", $pretty);
}

?>
