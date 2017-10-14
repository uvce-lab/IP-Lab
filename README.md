# IP-Lab

This repository contains programs from the IP Lab in Semester VII, UVCE. 

## Install Instructions for Ubuntu

### Running on an Apache Server natively

- Install apache server and php

    `sudo apt install php5 apache2`
- Clone the repository to `/var/www/html`

    `sudo git clone http://github.com/uvce-lab/ip-lab.git`

- Navigate to `localhost/ip-lab` to view the files

### Running with Docker

- Install docker as per https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/ 
- Clone the repository and run `docker build -t ip-lab .` at the root of the project. An `ip-lab` docker image should be created.
- Now run `docker run ip-lab`
- Navigate to the IP Address assigned to the image.

## Install Instructions for Windows (with XAMPP)

- Add PowerShell to the System Environmental Path.

- Install Xampp to its default location (`C:\xampp`)

- Delete contents of `C:\xampp\htdocs\`

- Clone repository to `C:\xampp\htdocs\`

    ```
    cd C:\xampp\htdocs

    git clone -b xampp https://github.com/uvce-lab/ip-lab.git
    ```
- Navigate to `http://localhost/ip-lab` to view the files.
