DEBUG=True
LESS_FILES=bootstrap.less
CSS_FILES=$(LESS_FILES:.less=.css)

ifeq ($(DEBUG),True)
	LESSC=lessc
else
	LESSC=lessc -x
endif

all: lessc

lessc: 
	$(LESSC) $(LESS_FILES) > $(CSS_FILES)

