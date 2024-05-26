#!/bin/bash

destination_dir=$(date +%m)
mkdir -p "/var/log/mysql/logs/$destination_dir"

current_date=$(date +"%Y-%m-%d")

find /var/log/mysql/ -type f -name "*.log" | while read filename; do
    if [ -s "$filename" ]; then
        base_filename=$(basename "$filename")
        new_filename="/var/log/mysql/logs/$destination_dir/${base_filename%.log}_$current_date.log"
        cp "$filename" "$new_filename"
        echo "A(z) $filename fájl sikeresen átmásolva a(z) $destination_dir könyvtárba."
        rm "$filename"
    fi
done
