# Generates the latin version of the unicode translation

N2A=/usr/java/java-sdk-current/bin/native2ascii
C2L=c2l
CP=cp
RM=rm -f
SCP=scp
SED=sed
NTOA=$(N2A) -encoding UTF-8 -reverse
ATON=$(N2A) -encoding UTF-8
POTOMOZ=po2moz
MOZ2PO=moz2po
MSGMERGE=msgmerge
TARGETDIR=/home/filip/personal/prg/azureus2/org/gudy/azureus2/internat
CVS=cvs

# Locale marks
loc1 := sr
loc2 := sr_Latin

# The template object
template_object := MessagesBundle.properties
whatsnew_object := whatsnew.english.stf

whatsnew_sr_object := whatsnew.serbian.stf
whatsnew_sr_Latin_object := whatsnew.serbian_Latin.stf

# The source object from which everything is generated
source_object   := MessagesBundle.properties.po

interim_object  := MessagesBundle.properties.native
target_object_1 := MessagesBundle_$(loc1).properties.utf8
target_object_2 := MessagesBundle_$(loc2).properties.utf8
pot_object      := MessagesBundle.properties.pot
merge_object    := MessagesBundle.properties.merge

# The things that are obtained at the end
final_object_1  := MessagesBundle_$(loc1).properties
final_object_2  := MessagesBundle_$(loc2).properties

.PHONY: clean publish all pot merge adopt_merge

all: $(final_object_1) $(final_object_2)

# Target that gets the template from the CVS and produces a new .PO file
all_merge: get_template pot merge adopt_merge

stats:
	@echo -n $(source_object)":  "
	@msgfmt --statistics -c -v $(source_object)

pot: $(pot_object)

merge: $(merge_object)

adopt_merge: $(merge_object)
	$(CP) $< $(source_object)

clean:
	$(RM) 	$(target_object_1) \
		$(target_object_2) \
		$(interim_object) \
	      	$(merge_object) \
		$(final_object_1) \
		$(final_object_2) \
		$(whatsnew_sr_Latin_object) \
		semantic.cache \
		*~ \
		*.mo \
		$(pot_object)

publish: $(final_object_1) $(final_object_2)
	$(CP) $^ $(TARGETDIR)
	# $(CP) $(TARGETDIR)/whatsnew
	( cd $(TARGETDIR) ; $(CVS) commit \
		-m "Updated Serbian and Serbian Latin translations")

get_template:
	(cd $(TARGETDIR) ; $(CVS) update)
	$(CP) $(TARGETDIR)/$(template_object) .
	#$(CP) $(TARGETDIR)/whatsnew/$(whatsnew_object) .

$(merge_object): $(pot_object) $(source_object)
	$(MSGMERGE) $(source_object) $(pot_object) -o $@

$(final_object_1): $(target_object_1)
	$(ATON) < $< > $@

$(final_object_2): $(target_object_2)
	$(ATON) < $< > $@

$(pot_object): $(template_object)
	$(MOZ2PO) -i $< -o $@

$(whatsnew_sr_Latin_object): $(whatsnew_sr_object)
	$(C2L) < $< > $@

$(target_object_2): $(target_object_1)
	$(C2L) < $< > $@

$(target_object_1): $(interim_object)
	$(NTOA) $< > $@

$(interim_object): $(source_object)
	$(POTOMOZ) -t $(template_object) -i $< -o $@

