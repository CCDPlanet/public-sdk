.PHONY: php

tools_dir :=
ifeq ($(OS),Windows_NT)
else
	UNAME_S := $(shell uname -s)
	ifeq ($(UNAME_S), Darwin)
		tools_dir := tools/mac
	endif
endif

all: clean-php php

ifeq ($(tools_dir), )
php:
	@echo [PHP][Warning]: Your OS is not supported!
	@exit 1
else
php:
	@echo Compiling PHP files...
	@protoc \
		--proto_path=api/proto/v1 \
		--php_out=php --grpc_out=php \
		--plugin=protoc-gen-grpc=$(tools_dir)/grpc_php_plugin \
		api/proto/v1/**/*.proto
	@echo PHP files compiled.
endif

clean-php:
	rm -rf php/*
