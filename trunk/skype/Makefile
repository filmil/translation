# Make file for the distributions

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

skype_sr@Latn.qm: skype_sr@Latn.ts
	lrelease $<

skype_sr@Latn.ts: sr-linux@Latn.po
	po2ts -i $< -o $@

sr@Latn.po: sr.po
	$(C2L) < sr.po > sr@Latn.po

sr-linux@Latn.po: sr-linux.po
	$(C2L) < sr-linux.po > sr-linux@Latn.po

sr.lang: sr.po
	$(PO2SKYPE) sr.po sr.lang

sr@Latn.lang: sr@Latn.po
	$(PO2SKYPE) sr@Latn.po sr@Latn.lang

publish:
	make -C distrib publish

clean:
	$(RM) sr@Latn.po sr.lang sr@Latn.lang  \
	      semantic.cache *~ *.utf8

pot: source/$(VERSION).lang
	$(SKYPE2PO) $< skype-$(VERSION).pot

merge: sr.po skype-$(VERSION).pot
	$(MSGMERGE) $^ > temp.po
	$(CP) temp.po sr.po
	$(RM) temp.po

linux-pot: source/$(VERSION_LINUX).ts
	$(TS2PO) -i $< -P -o linux-TMP.1.pot
	msguniq -i linux-TMP.1.pot -o linux-TMP.2.pot
	msghack --empty linux-TMP.2.pot -o skype-linux-$(VERSION_LINUX).pot
	$(RM) linux-TMP.1.pot linux-TMP.2.pot

linux-merge: sr.po sr-linux.po skype-linux-$(VERSION_LINUX).pot
	$(MSGMERGE) -C sr.po sr-linux.po skype-linux-$(VERSION_LINUX).pot > linux-TMP.3.po
	$(MSGMERGE) linux-TMP.3.po sr-linux.po > linux-TMP.4.po
	$(MV) linux-TMP.4.po sr-linux.po
	$(RM) linux-TMP.3.po
