FROM centos:7

RUN yum update -y
RUN yum install -y httpd
RUN yum install -y vim
RUN yum install -y epel-release && \
    yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
    yum install -y --enablerepo=remi,remi-php74 php php-pdo php-pgsql

RUN systemctl enable httpd
