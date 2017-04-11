## BotClass [![Build Status](https://api.travis-ci.org/kefzce/BotClass.svg?branch=master)](https://travis-ci.org/kefzce/BotClass) [![MIT Licence](https://badges.frapsoft.com/os/mit/mit.svg?v=103)](https://opensource.org/licenses/mit-license.php) [![PHP version](https://camo.githubusercontent.com/872e8e7b7893bb2335c27be1f7cac90227dfd255/68747470733a2f2f62616467652e667572792e696f2f67682f626f656e6e656d616e6e2532466261646765732e737667)](https://badge.fury.io/ph/0.1.svg)
Greetings this is my implementation Bots SDK for [Telegram](https://telegram.org/).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
composer require asd\asd
```

### Usage

A step by step series of examples that tell you have to get a development env running

Say what the step will be

```php
<?
try {
$bot = new BotClass\Bot();
$bot->getMe();
}catch(Exception $e){
echo $e->getMessage();
}
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc
