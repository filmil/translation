# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
SCP=scp
MKDIR=mkdir -p
CP=cp
PLONEDIR=/home/filip/personal/prg/plone-svn/2.1/PloneTranslations/i18n
SVN=svn

src_objects := $(wildcard *-sr.po)
dest_objects := $(patsubst %-sr.po,%-sr-Latn.po,$(src_objects))

.PHONY: clean publish

all: $(dest_objects) 
	$(MKDIR) distrib
	$(CP) *.po distrib

%-sr-Latn.po: %-sr.po
	$(C2L) < $< | sed -e "s/Language-Code: sr/Language-Code: sr-Latn/" | sed -e "s/Language-Name: Serbian/Language-Name: Serbian (Latin)/" > $@

clean:
	$(RM) $(dest_objects) *~ semantic.cache
	$(RM) -r distrib

publish: all
	$(CP) *.po $(PLONEDIR)
	(cd $(PLONEDIR) ; $(SVN) commit -m "Updated Serbian and Serbian Latin")


stats:
	for A in *-sr.po; do msgfmt --statistics -c -v $(A) ; done }'
