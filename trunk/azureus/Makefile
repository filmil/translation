# Generates the latin version of the unicode translation

C2L=c2l
CP=cp
RM=rm -f
SCP=scp
SED=sed
NTOA=native2ascii -encoding UTF-8 -reverse
ATON=native2ascii -encoding UTF-8
POTOMOZ=po2moz
MOZ2PO=moz2po
MSGMERGE=msgmerge

source_object   := MessagesBundle.properties.po
interim_object  := MessagesBundle.properties.native
target_object_1 := MessagesBundle_sr_CS.properties.utf8
target_object_2 := MessagesBundle_sr_CS_Latin.properties.utf8
template_object := MessagesBundle.properties
pot_object      := MessagesBundle.properties.pot
final_object_1  := MessagesBundle_sr_CS.properties
final_object_2  := MessagesBundle_sr_CS_Latin.properties
merge_object    := MessagesBundle.properties.merge

.PHONY: clean publish all pot

all: $(final_object_1) $(final_object_2)

pot: $(pot_object)

merge: $(merge_object)

adopt_merge: $(merge_object)
	$(CP) $< $(source_object)

$(merge_object): $(pot_object) $(source_object)
	$(MSGMERGE) $(source_object) $(pot_object) -o $@

$(final_object_1): $(target_object_1)
	$(ATON) < $< > $@

$(final_object_2): $(target_object_2)
	$(ATON) < $< > $@

$(pot_object): $(template_object)
	$(MOZ2PO) -i $< -o $@

$(target_object_2): $(target_object_1)
	$(C2L) < $< > $@

$(target_object_1): $(interim_object)
	$(NTOA) $< > $@

$(interim_object): $(source_object)
	$(POTOMOZ) -t $(template_object) -i $< -o $@

clean:
	$(RM) $(target_object_1) $(target_object_2) $(interim_object) $(merge_object) $(final_object_1) $(final_object_2) semantic.cache *~

publish: all
	$(SCP) $(final_object_1) $(final_object_2) filip@cobalt.et.tudelft.nl:~/public_html/files/tran/azureus

