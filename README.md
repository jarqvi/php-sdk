## liara/sdk

The liara sdk, with PHP language for client that utilizes fetch-api.

### Development

#### Note: You must have Node and NPM, Docker, Docker Compose and PHP installed on the system.

#### First, clone the project with the following command:
```
git clone https://github.com/liara-cloud/php-sdk.git
```

#### Second, run one of the following commands depending on your operating system:

_windows:_

```
./bin/cmd/generate.cmd && ./bin/cmd/doc.cmd && ./bin/cmd/remove-files.cmd && ./bin/cmd/class.cmd
```
```
cd ./bin/template/docs
npm install
npm run start
```
_Linux/Mac:_

```
./bin/bash/generate.sh && ./bin/bash/doc.sh && ./bin/bash/remove-files.sh && ./bin/bash/class.sh
```
```
cd ./bin/template/docs
npm install
npm run start
```

#### Third, run one of the following commands for installing packages:
```
composer install --ignore-platform-reqs
```

### Publish new version

#### You need to commit the changes and create a tag, then you need to push the new tag and update the sdk repository in packagist:
```
git add .
git commit -m "feat: new version"
git tag <version>
git push origin <version>
```

### Usage

#### Note: The type argument in the package.json file must be equal to commonjs.

```
composer require liara/sdk --ignore-platform-reqs
```

### Documentation of all methods:

[Openapi documentation link](https://openapi.liara.ir/)

#### [DNS](./doc/dns/README.md)
#### [Mail](./doc/mail/README.md)
#### [PaaS](./doc/paas/README.md)
#### [DBaaS](./doc/dbaas/README.md)
#### [Object Storage](./doc/object-storage/README.md)