<?php
include("smartthings.translate.php");
function __($_content, $_name) {
  return $_content;
};
$translation = new smartthings_translate();
$cmdName = $translation->cmdName;
$enums = $translation->enums;
$directory = 'json';
$scanned_directory = preg_grep('~^(?!.*(Presentation\.json$|i18n.*.json)).*\.json$~',scandir($directory));
$arrayCmdname = array();
$arrayEnum = array();

foreach ($scanned_directory as $filename) {
  $jsonfile = file_get_contents($directory.'/'.$filename);
  $arrayfile = json_decode($jsonfile,true);
  if (isset($arrayfile['attributes'])) {
    foreach ($arrayfile['attributes'] as $attributesName => $attribute) {
      $label = $attributesName;
      if (!isset($cmdName[$arrayfile['id']][$attributesName])) {
        if (file_exists($directory.'/'.$arrayfile['id'].'.i18n.fr.json')) {
          $i18nfrfile = file_get_contents($directory.'/'.$arrayfile['id'].'.i18n.fr.json');
          $i18nfrarray = json_decode($i18nfrfile, true);
          if ($i18nfrarray['attributes'] && $i18nfrarray['attributes'][$attributesName]) {
              $label = $i18nfrarray['attributes'][$attributesName]['label'];
          }
        }
        $arrayCmdname[$arrayfile['id']][$attributesName] = '__('.$label.', __FILE__)';
      }
      #listValue for $enums
      if (
        isset($attribute['schema']['properties']['value']['enum']) &&
        count($attribute['schema']['properties']['value']['enum']) > 2
      ) {
        foreach ($attribute['schema']['properties']['value']['enum'] as $enumList) {
          if (!isset($enums[$attributesName][$enumList])) {
            $label = $enumList;
            if (file_exists($directory.'/'.$arrayfile['id'].'.i18n.fr.json')) {
              $i18nfrfile = file_get_contents($directory.'/'.$arrayfile['id'].'.i18n.fr.json');
              $i18nfrarray = json_decode($i18nfrfile, true);
              if (isset($i18nfrarray['attributes'][$attributesName]['i18n']['value'][$enumList])) {
                  $label = $i18nfrarray['attributes'][$attributesName]['i18n']['value'][$enumList]['label'];
              }
            }
            $arrayEnum[$attributesName][$enumList] = '__('.$label.', __FILE__)';
          }
        }
      }
    }
  }
  if (isset($arrayfile['commands'])) {
    foreach ($arrayfile['commands'] as $attributesName => $attribute) {
      $label = $attribute['name'];

      if (!isset($cmdName[$arrayfile['id']][$attributesName])) {
        //echo "not set " . $cmdName[$arrayfile['id']];
        if (file_exists($directory.'/'.$arrayfile['id'].'.i18n.fr.json')) {
          $i18nfrfile = file_get_contents($directory.'/'.$arrayfile['id'].'.i18n.fr.json');
          $i18nfrarray = json_decode($i18nfrfile, true);
          if (isset($i18nfrarray['commands'][$attributesName]['label'])) {
              $label = $i18nfrarray['commands'][$attributesName]['label'] ?? $i18nfrarray['commands'][$attributesName]['name'];
          }
        }
        $arrayCmdname[$arrayfile['id']][$attributesName] = '__('.$label.', __FILE__)';
      }
      #enum for cmdName
      if (
        isset($arrayfile['commands'][$attributesName]['arguments'][0]['schema']['enum']) &&
        count($arrayfile['commands'][$attributesName]['arguments'][0]['schema']['enum']) == 2
      ) {
        foreach ($arrayfile['commands'][$attributesName]['arguments'][0]['schema']['enum'] as $enum) {
          if (!isset($cmdName[$arrayfile['id']][$attributesName.$enum])) {
            $arrayCmdname[$arrayfile['id']][$attributesName.$enum] = $attributesName.$enum;
          }
          unset($arrayCmdname[$arrayfile['id']][$attributesName]);
        }
      }
    }
  }
  if (isset($arrayfile['commands'])) {
    foreach ($arrayfile['commands'] as $attributesName => $attribute) {
      $cmdAttrName = lcfirst(str_replace('set', '', $attributesName));
      if (isset($arrayfile['attributes'][$cmdAttrName])) {
        if (!isset($arrayfile['attributes'][$cmdAttrName]['setter'])) {
            echo $filename . '  =>  "setter": "' . $cmdAttrName . "\"\n";
        }
      }
    }
  }
}

$newEnums = str_replace(array('\'__(',', __FILE__)\'','\''),array('__("','", __FILE__)','"'), var_export(array_filter($arrayEnum), true));
file_put_contents('enums.php', '<?php return '.$newEnums.";\n" );

$newCmdname = str_replace(array('\'__(',', __FILE__)\'','\''),array('__("','", __FILE__)','"'), var_export(array_filter($arrayCmdname), true));
file_put_contents('cmdName.php', '<?php return '.$newCmdname.";\n" );

?>
