VERSION=2.0.0.69
DISTRIB=distrib
SKYPE2PO=skype2po.py
PO2SKYPE=po2skype.py
ICONV=iconv
C2L=c2l
RM=rm -f
CP=cp
DIFF=svn diff -u
SCP=scp

DATE=$(shell date +%Y%m%d)
NAME=filmil

REMOTEDIR=filip@cobalt.et.tudelft.nl:~/public_html/files/tran/skype
LAST_REV=date20050919-001

SERBIANFILE=distrib/Serbian_$(VERSION)_$(DATE)_$(NAME).lang
SERBIANLATINFILE=distrib/SerbianLatin_$(VERSION)_$(DATE)_$(NAME).lang
DIFFILE=distrib/Changes_$(VERSION)_$(DATE)_$(NAME)_$(LAST_REV).diff

DISTPOFILE=distrib/skype-$(VERSION).sr.po
POTFILE=skype-$(VERSION).pot
DISTPOTFILE=distrib/$(POTFILE)

