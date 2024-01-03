FROM dockerfiles/centos-lamp 

COPY . /var/www/html/
RUN rm /var/www/html/Dockerfile
RUN echo 'ICED{PT_4_bab13s_have_fUn!!!}' > /flag-$(xxd -l 6 -p /dev/urandom)