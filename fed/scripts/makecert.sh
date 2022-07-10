#!/bin/sh

openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out /var/simplesamlphp/cert/saml.pem -keyout /var/simplesamlphp/cert/saml.key -config - << __EOF__
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
CN = fed.example.org
[v3_req]
keyUsage = keyEncipherment, dataEncipherment
extendedKeyUsage = serverAuth
__EOF__