CC = pdflatex
PORT = 8080
ADDRESS = localhost:8080

.PHONY: runlocal

runlocal:
	open http://$(ADDRESS)
	php -S $(ADDRESS)

deploy:
	git push heroku master
