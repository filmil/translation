# -*- Makefile -*-
VERSION=3.6.0.216
VERSION_LINUX=2.0.0.12-beta
DISTRIB=distrib
SKYPE2PO=skype2po.py
PO2SKYPE=po2skype.py
ICONV=iconv
C2L=c2l
RM=rm -f
MSGMERGE=msgmerge
MV=mv
CP=cp
DIFF=svn diff -u
SCP=scp
TS2PO=ts2po

DATE=$(shell date +%Y%m%d)
NAME=filmil

REMOTEDIR=~/mnt/hdlfactory/\~filmil/files/publish/translation/
LAST_REV=date20050919-001

SERBIANFILE=distrib/Serbian_$(VERSION)_$(DATE)_$(NAME).lang
SERBIANLATINFILE=distrib/SerbianLatin_$(VERSION)_$(DATE)_$(NAME).lang
DIFFILE=distrib/Changes_$(VERSION)_$(DATE)_$(NAME)_$(LAST_REV).diff

DISTPOFILE=distrib/skype-$(VERSION).sr.po
POTFILE=skype-$(VERSION).pot
DISTPOTFILE=distrib/$(POTFILE)

