# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
SCP=scp

source_objects := $(patsubst %.sr.html,%.sr@Latn.html,$(wildcard *.sr.html))

.PHONY: clean publish

all: $(source_objects)

%.sr@Latn.html: %.sr.html
	$(C2L) < $< > $@

clean:
	$(RM) *.sr@Latn.html *~

publish: all
	$(SCP) *.html filip@cobalt.et.tudelft.nl:~/public_html/files/tran/unicode
