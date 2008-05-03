## Датотека за прављење пакета за локализацију
########################################################################
## 
## Овај скрипт садржи упутства за:
##
## 1. Увоз датотека за превођење из Мозилиног складишта и конверзију у
##    ПО формат;
## 2. Спајање нових датотека са старим и производњу дограђених
##    датотека са преводима
## 3. Конверзију превода у формат прихватљив за Мозилу
##

include Makefile.inc

.PHONY: all clean pot cleanpot stats  initpo match populate output tryconv copytocvs fixme pofilter pomerge

all: clean tryconv stats 

pofilter:
	$(POFILTER) $(PO_TRANSLATIONS) $(FAIL_DIR)

pomerge:
	$(POMERGE) -t $(PO_TRANSLATIONS) -i $(FAIL_DIR) -o $(PO_TRANSLATIONS)
	@echo "Do not forget to check what $(POMERGE) has done"
	@echo "In order to prevent screwups"

# Cleanup of all the generated files and dirs
clean:
	$(RM) *~
	$(RM) -fr $(OUTPUT_DIR) $(ZIPNAME)* NEWPO.po NEWPOT.pot messages.mo
	$(RM) -fr $(FAIL_DIR)

# Finds all the FIXME strings in files
fixme:
	$(FIND) $(PO_TRANSLATIONS) -name '*' -a ! -name '*.svn*' | $(XARGS) $(GREP) -n FIXME

# Прављење превода од образаца и ПО датотека
$(OUTPUT_DIR):
	$(MKDIR) -p $(OUTPUT_DIR)
	$(PO2MOZ) -i $(PO_TRANSLATIONS) -o $(OUTPUT_DIR_FINAL) -t $(SOURCE_DIR)

$(ZIPNAME): $(OUTPUT_DIR)
	( $(CD) $(OUTPUT_DIR) ; $(ZIP)  -r ../$(ZIPNAME) sr )

split: $(ZIPNAME)
	split -b 290k $(ZIPNAME) $(ZIPNAME)-
	@echo Produced files:
	@ls $(ZIPNAME)-*

pot: cleanpot
	$(MOZ2PO) -i $(SOURCE_DIR) --pot -o $(POT_DIR)

cleanpo: 
	$(MOZ2PO) -i $(SOURCE_DIR)  -o $(PO_TRANSLATIONS)

cleanpot:
	@echo "Cleaning the template directory"
	@if [ -a $(POT_DIR) ]; then \
		$(RMDIR) $(POT_DIR);  \
	fi; 

merge:
	$(POMIGRATE) $(PO_SOURCE_DIR) $(MERGED_PO_OUTPUT_DIR) $(POT_DIR)







