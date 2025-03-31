.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t examen1abril .

build-container:
	docker run -dt --name examen1abril -v .:/540/examen-1-abril examen1abril
	docker exec examen1abril composer install

start:
	docker start examen1abril

test: start
	docker exec examen1abril ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it examen1abril /bin/bash

stop:
	docker stop examen1abril

clean: stop
	docker rm examen1abril
	rm -rf vendor
