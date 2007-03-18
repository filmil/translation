#! /bin/bash

## Determine the base directory

ROOTDIR=`dirname $0`
PROGNAME="sage"

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
    echo "Making a new output directory"
    mkdir $DEFAULTOUTPUTDIR
}

generate_cyrillic() {
    echo "Generating Cyrillic output package for $PROGNAME:"
    if [ ! -d $OUTPUTDIRCYR ]; then
	echo "-- Making the cyrillic output directory: $OUTPUTDIRCYR"
	mkdir $OUTPUTDIRCYR
    else
	echo "-- Skipping the make of cyrillic output dir"
    fi

    echo "-- Copying identical files"
    cp $DEFAULTINDIR/contents.rdf $OUTPUTDIRCYR
    cp $DEFAULTINDIR/opml.dtd $OUTPUTDIRCYR
    cp $DEFAULTINDIR/sage.dtd $OUTPUTDIRCYR

    echo "-- Converting to native"
    $NTOASCII < $DEFAULTINDIR/sage.properties > $OUTPUTDIRCYR/sage.properties
    echo "Done"
}

generate_latin() {
    echo "Generating Latin output package for $PROGNAME:"
    if [ ! -d $OUTPUTDIRLAT ]; then
	echo "-- Making the Latin output directory."
	mkdir $OUTPUTDIRLAT
    fi

    echo "-- Converting analog files"
    cat $DEFAULTINDIR/contents.rdf | $SED -e "s/sr-YU/sr-YU@Latn/g" | $CTOL > $OUTPUTDIRLAT/contents.rdf
    cat $DEFAULTINDIR/opml.dtd     | $CTOL > $OUTPUTDIRLAT/opml.dtd
    cat $DEFAULTINDIR/sage.dtd     | $CTOL > $OUTPUTDIRLAT/sage.dtd

    echo "-- Converting to native"
    $CTOL < $DEFAULTINDIR/sage.properties | $NTOASCII  > $OUTPUTDIRLAT/sage.properties
    echo "Done"
}

# Convert the source to distirbution
check_dirs
generate_cyrillic
generate_latin