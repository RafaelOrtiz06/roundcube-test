# Roundcube Modernization

## Steps to deploy locally

1. `docker-compose up --build -d`
2. type `docker-compose logs posteio`
3. You will get an url, type that url in a browser
   ![image](https://github.com/RafaelOrtiz06/roundcube-test/assets/98363516/2fa64444-d364-42a9-85c3-4f01da3acdf2)

5. Create administrator user
6. type [´localhost´](http://localhost) to open roundcube
7. Enter administrator user previously created


Notes:

- We have 2 roundcube containers, the first one in [´localhost´](http://localhost) that is the original roundcube image from docker, the second one is the local roundcube that we will modify in [´localhost:8080´](http://localhost:8080)

- We are creating a separate project for frontend in order to start to modernize the roundcube application that is in coustom_roundube_frontend folder
