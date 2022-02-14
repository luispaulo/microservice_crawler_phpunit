<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.eureciclo.com.br/img/selo-horizontal.ea6b8657.png" width="400"></a></p>
</p>

## Luis Paulo Santos - Development

## Requirements

* [Docker Engine](https://docs.docker.com/installation/)
* [Docker Compose](https://docs.docker.com/compose/)
* [Docker Machine](https://docs.docker.com/machine/) (Mac and Windows only)

## How to start the project
- Clone the project on github
https://github.com/luispaulo/microservice_crawler_phpunit.git

## Load the container
```
    docker-compose up --build
```

## Load the container
```
    docker-compose up
```

## open POSTMAN, use the Endpoint:
```
   “localhost/api/list”
```

## Will return the NAMES and PRICES of specific OLX products the URL:
```
  https://df.olx.com.br/distrito-federal-e-regiao/brasilia/computadores-e-acessorios/notebook-e-netbook
```

## Returns a json to API in this format:
```
  {
    "retcode": "SUCCESS",
    "data": [
        {
            "name": [
                "ACER i7 quarta geração/ 8RAM/128SSD/1teraHD R$1.750 ou 12 X R$ 164"
            ],
            "price": [
                "R$ 1.750"
            ],
            "date": [
                [
                    "Hoje",
                    "08:07"
                ]
            ]
        }
    "msg": "done"
}
```


## QUESTIONS AND CONTACTS
- **[Whatsapp - Luis Paulo ](https://api.whatsapp.com/send?phone=5561982481004)**
