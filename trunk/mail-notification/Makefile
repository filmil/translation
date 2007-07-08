# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
SCP=scp
GZIP=gzip

source_objects := sr.po
destination_objects := sr@Latn.po.gz sr.po.gz

.PHONY: clean publish

all: $(destination_objects)

%.po.gz: %.po
	$(GZIP) -c $< > $@

sr@Latn.po: sr.po
	$(C2L) < $< > $@

clean:
	$(RM) sr@Latn.po *~ *.gz

publish: all
	$(SCP) *.po filip@cobalt.et.tudelft.nl:~/public_html/files/tran/mail-notification

