#! /bin/bash

## Determine the base directory

ROOTDIR=`dirname $0`
PROGNAME="firefox"

######################################################################
## The programs we use to convert

# This is a custom, cyrillic to latin converter
CTOL=c2l

# This program comes from the JAVA SDK. Any other program
# with equivalent functionality can be used.
NTOASCII=native2ascii

# UNIX stream editor
SED=sed
######################################################################
# Make the input and output directory labels
DEFAULTINPUTDIR=$ROOTDIR/input
DEFAULTINDIR=$DEFAULTINPUTDIR/sr-YU

DEFAULTOUTPUTDIR=$ROOTDIR/output
OUTPUTDIRCYR=$DEFAULTOUTPUTDIR/sr-YU
OUTPUTDIRLAT=$DEFAULTOUTPUTDIR/sr-YU\@Latn

######################################################################
## DO NOT CHANGE ANYTHING BELOW THIS LINE
######################################################################

# Check whether all directories exist
check_dirs() {
    echo "Checking for stale directories"
    if [ -d $DEFAULTOUTPUTDIR ]; then
	echo "Stale $DEFAULTOUTPUTDIR exists: removing"
	rm -r $DEFAULTOUTPUTDIR
    fi
    echo "Making a new output directory : $DEFAULTOUTPUTDIR"
    mkdir $DEFAULTOUTPUTDIR
}

generate_cyrillic() {
    echo "Generating Cyrillic output package for $PROGNAME:"
    if [ ! -d $OUTPUTDIRCYR ]; then
	echo "-- Making the cyrillic output directory: $OUTPUTDIRCYR"
	cp -R $DEFAULTINDIR $OUTPUTDIRCYR
    else
	echo "-- Skipping the make of cyrillic output dir"
    fi

    echo "-- Getting the file list"

    OLDDIR=$PWD
    cd $DEFAULTINDIR
    FILES=`find -name '*'`
    PROPERTIES=`find -name '*.properties'`
    cd $OLDDIR

    echo "-- Copying files to remain in original form. $PWD, $ROOTDIR"
    for a in $FILES; do
	cp $DEFAULTINDIR/$a $OUTPUTDIRCYR/$a
    done

    echo "-- Converting the property files to escaped unicode"
    for p in $PROPERTIES; do
	echo "-- Converting: $p"
	cat $DEFAULTINDIR/$p | $NTOASCII > $OUTPUTDIRCYR/$p
    done

    echo "Done"
}

generate_latin() {
    echo "Generating Latin output package for $PROGNAME:"
    if [ ! -d $OUTPUTDIRLAT ]; then
	echo "-- Making the Latin output directory."
	cp -R $DEFAULTINDIR $OUTPUTDIRLAT
    fi

    echo "-- Getting the file list"
    OLDDIR=$PWD
    cd $DEFAULTINDIR
    FILES=`find -name '*'`
    PROPERTIES=`find -name '*.properties'`
    cd $OLDDIR

    echo "-- Copying files to remain in original form"
    for a in $FILES; do
	cat $DEFAULTINDIR/$a | $SED -e "s/sr-YU/sr-YU@Latn/g" | $CTOL >$OUTPUTDIRLAT/$a
    done

    echo "-- Converting the property files to escaped unicode"
    for p in $PROPERTIES; do
	echo "-- Converting: $p"
	cat $DEFAULTINDIR/$p | $SED -e "s/sr-YU/sr-YU@Latn/g" | $CTOL | $NTOASCII > $OUTPUTDIRLAT/$p
    done

    echo "Done"
}

# Convert the source to distirbution
check_dirs
generate_cyrillic
generate_latin