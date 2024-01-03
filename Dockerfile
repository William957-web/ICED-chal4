FROM dockerfiles/centos-lamp 

COPY . /var/www/html/
RUN rm /var/www/html/Dockerfile
RUN echo 'ICED{Seial1z4tion_Challenge_m000oooo!}' > /flag-$(xxd -l 6 -p /dev/urandom)
RUN sudo apt install cowsay
