# Roundcube Modernization

## Steps to deploy locally

1. `docker-compose up --build -d`
2. type `docker-compose logs posteio`
3. You will get an url, type that url in a browser
4. Create administrator user
5. type [´localhost´](http://localhost) to open roundcube
6. Enter administrator user previously created

Notes:

- We have 2 roundcube containers, the first one in [´localhost´](http://localhost) that is the original roundcube image from docker, the second one is the local roundcube that we will modify in [´localhost:8080´](http://localhost:8080)

- We are creating a separate project for frontend in order to start to modernize the roundcube application that is in coustom_roundube_frontend folder
