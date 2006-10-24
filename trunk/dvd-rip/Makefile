# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
SCP=scp
DIRNAME=gnomebaker
SED=sed 

source_objects := sr.po splash.sr.svg
destination_objects := sr@Latn.po splash.sr@Latn.svg

.PHONY: clean publish

all: dvd-rip.tgz

sr@Latn.po: sr.po
	$(C2L) < $< | $(SED) -e "s/splash.sr.png/splash.sr@Latn.png/" > $@

splash.sr@Latn.svg: splash.sr.svg
	$(C2L) < $< > $@

dvd-rip.tgz: $(source_objects) $(destination_objects)
	tar czvvf $@ $(source_objects) $(destination_objects)
clean:
	$(RM) $(destination_objects) dvd-rip.tgz *~

publish: all
	$(SCP) *.po filip@cobalt.et.tudelft.nl:~/public_html/files/tran/$(DIRNAME)

