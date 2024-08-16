#!/bin/bash

json_array="["

# create one json of extra_capabilities only
while read capa; do
  CID=$(jq -r '.id' "json/${capa}.json")
  CVERSION=$(jq -r '.version' "json/${capa}.json")
  CSTATUS=$(jq -r '.status' "json/${capa}.json")
  CEPHEMERAL=$(jq -r '.ephemeral' "json/${capa}.json")
  json_object="{\"id\":\"$CID\",\"version\":$CVERSION,\"status\":\"$CSTATUS\""
  if [ "$CEPHEMERAL" != "null" ]; then
      json_object+=",\"ephemeral\":$CEPHEMERAL"
  fi
  json_object+="}"
  json_array+="$json_object,"
done < <(cat extra_capabilities.json | jq -r -c '.[]')

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

json_array="${json_array%,}]"
echo "$json_array" | jq '.' > extra_capabilities_fix.json
cat extra_capabilities_fix.json
