# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
SCP=scp
SED=sed
NTOA=native2ascii -encoding UTF-8 -reverse
POTOMOZ=po2moz

source_object := MessagesBundle.properties.po
interim_object := MessagesBundle.properties.native
target_object_1 := MessagesBundle.properties.sr.utf8
target_object_2 := MessagesBundle.properties.sr@Latn.utf8
template_object := MessagesBundle.properties

.PHONY: clean publish

all: $(target_object_1) $(target_object_2)

$(target_object_2): $(target_object_1)
	$(C2L) < $< > $@

$(target_object_1): $(interim_object)
	$(NTOA) $< > $@

$(interim_object): $(source_object)
	$(POTOMOZ) -t $(template_object) -i $< -o $@

clean:
	$(RM) $(target_object_1) $(target_object_2) $(interim_object) *~

publish: all
	$(SCP) *.utf8 filip@cobalt.et.tudelft.nl:~/public_html/files/tran/azureus

