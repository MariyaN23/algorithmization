install:
	docker-compose up --build

start:
	docker-compose up -d

stop:
	docker-compose down

terminal:
	docker-compose exec php sh