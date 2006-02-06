# Generates the latin version of the unicode translation

C2L=c2l
RM=rm -f
CP=cp
SCP=scp
SED=sed
NTOA=native2ascii -encoding UTF-8 -reverse
POTOMOZ=po2moz

source_object := texts_sr.properties.po
interim_object := texts.properties.native
target_object_1 := texts_sr.properties
target_object_2 := texts_sr@Latn.properties
template_object := texts.properties

.PHONY: clean publish all

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
	$(SCP) texts_sr*properties filip@cobalt.et.tudelft.nl:~/public_html/files/tran/jalbum
	$(CP) texts_sr*properties ~/local/lib/jalbum/texts

