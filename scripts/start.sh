#!/bin/sh

# simplesamlphpがない場合はダウンロードする
if [ ! -e ./simplesamlphp-1.19.5.tar.gz ]; then
  wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v1.19.5/simplesamlphp-1.19.5.tar.gz
fi

mkdir tmp

# IdP-1の証明書を生成する
# SP(fed)に共有するため.tmp/以下に配置する
openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out ./tmp/hospital.pem -keyout ./tmp/hospital.key -config - << __EOF__
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
openssl x509 -in ./tmp/hospital.pem -noout -text

docker-compose up -d --build