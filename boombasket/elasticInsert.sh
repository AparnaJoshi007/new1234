#!/bin/bash

i=0
length=`cat household.json|jq length`
while [ $i -le $length ]
do
b=`cat household.json|jq ".[$i]"`
curl -XPOST "http://localhost:9200/shopping/household/" -d "$b"
((i++))
done

