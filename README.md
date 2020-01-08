# BCC(BPF Compiler Collection) on Docker

## Using

### Run

```
$ docker-compose up
```

### Running Container List

```
$ docker-compose ps
   Name                 Command              State              Ports
--------------------------------------------------------------------------------
work_app_1   docker-php-entrypoint php-fpm   Up      9000/tcp
work_bpf_1   /entrypoint.sh /bin/bash        Up
work_db_1    docker-entrypoint.sh mysqld     Up      0.0.0.0:3306->3306/tcp
work_web_1   nginx -g daemon off;            Up      443/tcp, 0.0.0.0:80->80/tcp
```

### Run BCC Example Script

#### Run tcptracer.py (This tool traces the kernel function performing TCP connections)

```
$ docker-compose exec bpf bash
$ ./tcptracer
```

![](https://user-images.githubusercontent.com/3177297/71969690-88a98080-324a-11ea-8709-bfc23521be8d.png)
