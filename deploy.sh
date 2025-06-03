git add -A
git commit -m "$0"
git push origin main

ssh -p 2214 root@170.81.43.124
cd ~/projetos/my-landing-page
git pull origin main

docker stop myLandingPage
docker rm myLandingPage
docker build -t my-landing-page .
docker run -d --name myLandingPage -p 8080:80 -v ./src:/var/www/html/src my-landing-page
