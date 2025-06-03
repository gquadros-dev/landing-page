docker stop myLandingPage
docker rm myLandingPage
docker build -t my-landing-page .
docker run --name myLandingPage -p 8080:80 -v ./src:/var/www/html/src my-landing-page

