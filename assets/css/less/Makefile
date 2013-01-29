DEBUG=True
LESS_FILES= bootstrap.less
CSS_FILES=$(LESS_FILES:.less=.css)

ifeq ($(DEBUG),True)
	LESSC=lessc
else
	LESSC=lessc -x
endif

less: $(CSS_FILES)

%.css: %.less
	$(LESSC) $< > $@
