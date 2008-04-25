# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
SCP=scp
MKDIR=mkdir -p
CP=cp
SED=sed

dest_objects := $(patsubst %.sr.po,%.sr@Latn.po,$(wildcard *.sr.po))

.PHONY: clean publish

all: $(dest_objects) 
	$(MKDIR) distrib
	$(CP) *.po distrib

%.sr@Latn.po: %.sr.po
	$(C2L) < $< | $(SED) -e "s/Language-Code: sr/Language-Code: sr-Latn/" | sed -e "s/Language-Name: Serbian/Language-Name: Serbian Latin/" > $@

clean:
	$(RM) $(dest_objects) *~ semantic.cache *.sr@Latn.po
	$(RM) -r distrib

publish: all
	$(SCP) *.po filip@cobalt.et.tudelft.nl:~/public_html/files/tran/xchat

