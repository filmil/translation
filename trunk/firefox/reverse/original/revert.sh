#! /bin/bash
#
# Reverts the Escaped-Unicode format back into UTF-8
# Intended to be used only once.

NTOASCII="native2ascii -reverse -encoding UTF8"

ALLFILES=`find -name '*.properties'`

echo "Making backup copies"
for a in $ALLFILES; do
    cp $a $a.bak
done

echo "Converting"
for a in $ALLFILES; do
    echo "Converting: $a"
    $NTOASCII < $a.bak > $a.out
done

echo "Copying back"
for a in $ALLFILES; do
    echo "Copying back: $a"
    cp $a.out $a
    rm $a.out
done