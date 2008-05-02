# Make file for the distributions
#
# Important targets:
# 	(none): 	= all
#	all:		makes all the targets
#	publish		makes publishable versions
#	merge		merges old sr.po with new .lang
include Makefile.inc

all: sr.lang sr@Latn.lang skype_sr.qm skype_sr@Latn.qm
	$(CP) sr.lang $(SERBIANFILE)
	$(CP) sr@Latn.lang $(SERBIANLATINFILE)
	$(CP) sr.po $(DISTPOFILE)
	$(CP) $(POTFILE) $(DISTPOTFILE)
#	$(DIFF) -r $(LAST_REV) sr.po > $(DIFFILE)

%.qm: %.ts 
	lrelease $<

%.ts: %.po 
	po2ts -i $< -o $@

%@Latn.po: %.po
	$(C2L) < $< > $@

%.lang: %.po
	$(PO2SKYPE) $< $@


publish:
	make -C distrib publish

clean:
	$(RM) sr@Latn.po sr.lang sr@Latn.lang  \
	      semantic.cache *~ *.utf8 *.ts *.qm

skype-$(VERSION).pot: source/$(VERSION).lang
	$(SKYPE2PO) $< $@
	$(MV) $@ pot/

# Ensuring that the variable VERSION is set up to point to the version 
# number correctly, merges the file into sr.po
merge: sr.po pot/skype-$(VERSION).pot
	$(MSGMERGE) $^ > temp.po
	$(CP) temp.po sr.po
	$(RM) temp.po

linux-pot: source/$(VERSION_LINUX).ts
	$(TS2PO) -i $< -P -o linux-TMP.1.pot
	msguniq -i linux-TMP.1.pot -o linux-TMP.2.pot
	msghack --empty linux-TMP.2.pot -o skype-linux-$(VERSION_LINUX).pot
	$(RM) linux-TMP.1.pot linux-TMP.2.pot

linux-merge: sr.po skype_sr.po pot/skype-linux-$(VERSION_LINUX).pot
	$(MSGMERGE) -C $^ > linux-TMP.3.po
	$(MSGMERGE) linux-TMP.3.po skype_sr.po > linux-TMP.4.po
	$(MV) linux-TMP.4.po skype_sr.po
	$(RM) linux-TMP.3.po
