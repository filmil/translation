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
log_object := trans.log

.PHONY: clean publish

all: $(dest_objects) 
	make -C kupu all
	$(MKDIR) distrib
	$(CP) *.po distrib

%-sr-Latn.po: %-sr.po
	$(C2L) < $< 2>> $(log_object) | \
	sed -e "s/Language-Code: sr/Language-Code: sr-Latn/" | \
	sed -e "s/Language-Name: Serbian/Language-Name: Serbian (Latin)/" \
        > $@

clean:
	make -C kupu clean
	$(RM) $(dest_objects) *~ semantic.cache $(log_object) *.mo
	$(RM) -r distrib 

publish: all
	$(CP) *.po $(PLONEDIR)
	make -C kupu publish
	(cd $(PLONEDIR) ; \
	  $(SVN) commit -m "Updated Serbian and Serbian Latin")

import: 
	(pushd . ; \
	  cd $(PLONEDIR) ; \
          $(SVN) update ; popd ; \
	  $(CP) $(PLONEDIR)/*-sr.po . ; )
	make -C kupu import


stats:
	@echo "Translation stats:"
	@echo "---"
	@for A in *-sr.po; do \
	   echo -ne $$A":\t\t" ; \
	   msgfmt --statistics -c -v $$A ; \
	done
	make -C kupu stats
	@echo "---"
