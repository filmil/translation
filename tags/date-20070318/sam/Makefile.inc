VERSION=2.0.0.19
DISTRIB=distrib
SKYPE2PO=sam2po.py
PO2SKYPE=po2sam.py
ICONV=iconv
C2L=c2l
RM=rm -f
CP=cp
DIFF=svn diff -u
SCP=scp

DATE=$(shell date +%Y%m%d)
NAME=filmil

REMOTEDIR=filip@cobalt.et.tudelft.nl:~/public_html/files/tran/sam
LAST_REV=date20050919-001

SERBIANFILE=distrib/SAM_SR.lang
SERBIANLATINFILE=distrib/SAM_SRL.lang
DIFFILE=distrib/Changes_$(VERSION)_$(DATE)_$(NAME)_$(LAST_REV).diff

DISTPOFILE=distrib/SAM-$(VERSION).sr.po
POTFILE=SAM-$(VERSION).pot
DISTPOTFILE=distrib/$(POTFILE)

