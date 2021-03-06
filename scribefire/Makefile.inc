# -*- Makefile -*-
LOCALE_NAME:=sr
MOZ2PO:=moz2po --progress=names -x *~
PO2MOZ:=po2moz --progress=names -x *~ -l $(LOCALE_NAME)
POMERGE:=pomerge --progress=names --errorlevel=traceback -x *~
MSGMERGE:=msgmerge
RM:=rm -f
RMDIR:=rm -fr
MKDIR:=mkdir
CD:=cd
CP:=cp
ZIP:=zip
CVS:=cvs
POMIGRATE:=pomigrate2
ICONV:=iconv
GREP:=grep
FIND:=find
XARGS:=xargs
POFILTER:=pofilter -t unchanged

# # Directory configuration
ROOT_DIR:=.
PO_TRANSLATIONS:=po
OUTPUT_DIR:=output
OUTPUT_DIR_FINAL:=$(OUTPUT_DIR)
MERGED_PO_OUTPUT_DIR:=$(OUTPUT_DIR)
SOURCE_DIR:=./original
PO_SOURCE_DIR:=po
POT_DIR:=pot
ZIPNAME:=sr.zip

