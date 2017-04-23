## BotClass [![Build Status](https://api.travis-ci.org/kefzce/BotClass.svg?branch=master)](https://travis-ci.org/kefzce/BotClass) [![MIT Licence](https://badges.frapsoft.com/os/mit/mit.svg?v=103)](https://opensource.org/licenses/mit-license.php) [![PHP version](https://camo.githubusercontent.com/872e8e7b7893bb2335c27be1f7cac90227dfd255/68747470733a2f2f62616467652e667572792e696f2f67682f626f656e6e656d616e6e2532466261646765732e737667)](https://badge.fury.io/ph/0.1.svg)
Greetings this is my implementation Bots SDK for [Telegram](https://telegram.org/)
### Usage

Add bot token from [@botFather](telegram.me/botfather) into .env file
## Example
```
TOKEN=12345678:AAH7zkGoh-ASDBSA-r05Z_2lS-72FDqs
```

```php
<?
try{
    $bot = new BotClass\Bot();
    echo $bot->getme();
}catch(Exception $e){
    echo $e->getMessage();
}
```
## Running the tests

Lookup the tests folder.


## Links
- [Telegram Bot API -  PHP SDK](https://github.com/irazasyed/telegram-bot-sdk) - The (Unofficial) Telegram Bot API PHP SDK. Lets you develop Telegram Bots easily! Supports Laravel out of the box.
- [Botan.io](http://botan.io/) — экспериментальный инструмент аналитики ботов.
- [PHP Simple HTML DOM Parser](http://simplehtmldom.sourceforge.net/) – библиотека функций парсинга для PHP.
- ["Using self-signed certificates"](https://core.telegram.org/bots/self-signed) - *Telegram FAQ*
- ["How do I create a bot?"](https://core.telegram.org/bots/faq#how-do-i-create-a-bot) - *Simple Guide to create bot*
- ["Размещаем бота на платформе Heroku"](http://blizzy.ru/telegram/razmesaem-bota-na-platforme-heroku) - *Отличное руководство*
- ["Telegram Bot API"](https://core.telegram.org/bots/api) - *API Telegram manual*
- ["Available methods"](https://core.telegram.org/bots/api#available-methods) - *Available  methods*


## Contribute

Contributions are always welcome!
Please send me your  Pull Request.
