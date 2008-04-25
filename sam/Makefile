# Make file for the distributions

include Makefile.inc

all: sr.lang sr@Latn.lang
	$(CP) sr.lang $(SERBIANFILE)
	$(CP) sr@Latn.lang $(SERBIANLATINFILE)
	$(CP) sr.po $(DISTPOFILE)
	$(CP) $(POTFILE) $(DISTPOTFILE)
#	$(DIFF) -r $(LAST_REV) sr.po > $(DIFFILE)

sr@Latn.po: sr.po
	$(C2L) < sr.po > sr@Latn.po

sr.lang: sr.po
	$(PO2SKYPE) sr.po sr.lang

sr@Latn.lang: sr@Latn.po
	$(PO2SKYPE) sr@Latn.po sr@Latn.lang

publish:
	make -C distrib publish

clean:
	$(RM) sr@Latn.po sr.lang sr@Latn.lang  \
	      semantic.cache *~ *.utf8


