#!/bin/bash

# Directory paths where files should be moved
directories=(
    object-storage
    dbaas
    paas
    mail
    dns
)

# Loop through directories and move specified files
for dir in "${directories[@]}"; do
    # Move README.md file if it exists
    if [ -e ./"$dir"/README.md ]; then
        sudo mv ./"$dir"/README.md ./doc/"$dir"
    fi

    # Move all mark down files except README.md file in the doc directory
    if find ./"$dir"/docs/Model -name "*.md" -print -quit | grep -q .; then
        sudo mv -v ./"$dir"/docs/Model/*.md ./doc/"$dir"/docs/Model
        rm -rf ./"$dir"/docs
    fi
    if find ./"$dir"/docs/Api -name "*.md" -print -quit | grep -q .; then
        sudo mv -v ./"$dir"/docs/Api/*.md ./doc/"$dir"/docs/Api
        rm -rf ./"$dir"/docs
    fi
done