# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
SCP=scp
SED=sed

source_objects := sr.po
destination_objects := sr@Latn.po

.PHONY: clean publish

all: $(destination_objects)

sr@Latn.po: sr.po
	$(C2L) < $< | $(SED) -e "s/Language-Team: Serbian (sr)/Language-Team: Serbian Latin (sr@Latn)/" > $@

clean:
	$(RM) sr@Latn.po *~ *.mo a.po

publish: all
	$(SCP) *.po filip@cobalt.et.tudelft.nl:~/public_html/files/tran/guifications

