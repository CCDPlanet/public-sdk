.PHONY: php

php_plugin := tools/mac/grpc_php_plugin
# ifeq ($(UNAME_S),Darwin)

all: clean-php php

php:
	protoc \
		--proto_path=api/proto/v1 \
		--php_out=php --grpc_out=php \
		--plugin=protoc-gen-grpc=$(php_plugin) \
		api/proto/v1/**/*.proto

clean-php:
	rm -rf php/*
