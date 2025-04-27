#!/bin/bash

# Initialisation d'un tableau JSON
json_array=()

# Lire les IDs directement dans une boucle for
for ID in $(jq -c -r '.[]' extra_capabilities.json); do
  json_object=""

  # Vérifie si un fichier JSON correspondant existe
  if [ -f "json/${ID}.json" ]; then
    # Lecture des données depuis le fichier JSON correspondant
    CID=$(jq -r '.id // "unknown"' "json/${ID}.json")
    CVERSION=$(jq -r '.version // 1' "json/${ID}.json")
    CSTATUS=$(jq -r '.status // "unknown"' "json/${ID}.json")
    CEPHEMERAL=$(jq -r '.ephemeral // null' "json/${ID}.json")

    # Construction de l'objet JSON
    json_object="{\"id\":\"$CID\",\"version\":$CVERSION,\"status\":\"$CSTATUS\""
    if [[ "$CEPHEMERAL" != "null" && "$CEPHEMERAL" != "" ]]; then
      json_object+=",\"ephemeral\":$CEPHEMERAL"
    fi
    json_object+="}"
  else
    # Si le fichier est introuvable, ajouter un objet par défaut
    echo "Erreur : Fichier json/${ID}.json introuvable" >&2
    json_object="{\"id\":\"$ID\",\"version\":1,\"status\":\"missing\"}"
  fi

  # Ajout de l'objet JSON à la liste
  json_array+=("$json_object")
done

# create one json of all json file in json directory
#while read file; do
#    CID=$(jq -r '.id' "$file")
#    CVERSION=$(jq -r '.version' "$file")
#    CSTATUS=$(jq -r '.status' "$file")
#    CEPHEMERAL=$(jq -r '.ephemeral' "$file")
#    json_object="{\"id\":\"$CID\",\"version\":$CVERSION,\"status\":\"$CSTATUS\""
#    if [ "$CEPHEMERAL" != "null" ]; then
#        json_object+=",\"ephemeral\":$CEPHEMERAL"
#    fi
#    json_object+="}"
#    json_array+="$json_object,"
#done < <(ls json/*.json | grep -v -e Presentation.json -e i18n)


# Joindre les objets JSON avec des virgules pour former un tableau JSON
json_output="["
json_output+=$(IFS=,; echo "${json_array[*]}")
json_output+="]"

# Validation et écriture du fichier JSON final
if echo "$json_output" | jq '.' >/dev/null 2>&1; then
  echo "$json_output" | jq '.' > extra_capabilities_fix2.json
  echo "Fichier JSON généré avec succès : extra_capabilities_fix2.json"
else
  echo "Erreur : Le JSON final est mal formé." >&2
  exit 1
fi

# Affichage du résultat
cat extra_capabilities_fix2.json
