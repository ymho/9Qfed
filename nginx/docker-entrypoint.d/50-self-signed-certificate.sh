#!/bin/sh

apt install  openssl

# hp
openssl req -x509 -days 3650 -nodes -newkey rsa:4096 -keyout /etc/nginx/hp.key -out /etc/nginx/hp.pem -config - << __EOF__
[req]
distinguished_name = req_distinguished_name
x509_extensions = v3_req
prompt = no
[req_distinguished_name]
C = JP
ST = Tokyo
L = Chuo-ku
O = MyCompany
OU = MyDivision
CN = hp.example.com
[v3_req]
keyUsage = keyEncipherment, dataEncipherment
extendedKeyUsage = serverAuth
__EOF__
openssl x509 -in /etc/nginx/hp.pem -noout -text

# card
openssl req -x509 -days 3650 -nodes -newkey rsa:4096 -keyout /etc/nginx/card.key -out /etc/nginx/card.pem -config - << __EOF__
[req]
distinguished_name = req_distinguished_name
x509_extensions = v3_req
prompt = no
[req_distinguished_name]
C = JP
ST = Tokyo
L = Chuo-ku
O = MyCompany
OU = MyDivision
CN = hp.example.com
[v3_req]
keyUsage = keyEncipherment, dataEncipherment
extendedKeyUsage = serverAuth
__EOF__

openssl x509 -in /etc/nginx/card.pem -noout -text

# lg
openssl req -x509 -days 3650 -nodes -newkey rsa:4096 -keyout /etc/nginx/lg.key -out /etc/nginx/lg.pem -config - << __EOF__
[req]
distinguished_name = req_distinguished_name
x509_extensions = v3_req
prompt = no
[req_distinguished_name]
C = JP
ST = Tokyo
L = Chuo-ku
O = MyCompany
OU = MyDivision
CN = hp.example.com
[v3_req]
keyUsage = keyEncipherment, dataEncipherment
extendedKeyUsage = serverAuth
__EOF__

openssl x509 -in /etc/nginx/lg.pem -noout -text

# is
openssl req -x509 -days 3650 -nodes -newkey rsa:4096 -keyout /etc/nginx/is.key -out /etc/nginx/is.pem -config - << __EOF__
[req]
distinguished_name = req_distinguished_name
x509_extensions = v3_req
prompt = no
[req_distinguished_name]
C = JP
ST = Tokyo
L = Chuo-ku
O = MyCompany
OU = MyDivision
CN = hp.example.com
[v3_req]
keyUsage = keyEncipherment, dataEncipherment
extendedKeyUsage = serverAuth
__EOF__

openssl x509 -in /etc/nginx/is.pem -noout -text

# fed
openssl req -x509 -days 3650 -nodes -newkey rsa:4096 -keyout /etc/nginx/fed.key -out /etc/nginx/fed.pem -config - << __EOF__
[req]
distinguished_name = req_distinguished_name
x509_extensions = v3_req
prompt = no
[req_distinguished_name]
C = JP
ST = Tokyo
L = Chuo-ku
O = MyCompany
OU = MyDivision
CN = hp.example.com
[v3_req]
keyUsage = keyEncipherment, dataEncipherment
extendedKeyUsage = serverAuth
__EOF__

openssl x509 -in /etc/nginx/fed.pem -noout -text
