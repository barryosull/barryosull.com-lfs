---
title: "Using Factories to Write Tests: A Love Letter to Factories"
published: true
description: "Factories are one of the most powerful patterns when writing tests, and here's why."
tags: tests, factories, design
cover_image: https://i.ytimg.com/vi/BqaAjgpsoW8/maxresdefault.jpg
---

Hello there and welcome to an article I've wanted to write about factories for a very long time. This article is really a love letter to the humble factory. As a pattern it could not be simpler, yet it is the most powerful and paradoxically the most underused pattern when writing tests. An ambitious statement, let's dig in and see where we get.

## What is a Factory
Ok, so this seems really basic and I imagine there are a lot of rolling eyeballs right now, but let's go through the definition I'm using, just so we're all on the same page.

A factory is something that creates an object in a certain state. Factories return scalar values or classes (ValueObjects, Commands, Entities, Services, etc . . ., doesn't matter). The states of the objects can be generic default states or specialised named states, it depends on the context.

Factories can be as simple as static methods or as complex as builders. Here are three basic examples.

### 1. Static Factory Methods
The most basic type of factory, and also one of the most useful.
```php
<?php

private static function makeUser(int $id, string $email): User
{
	$username = "test_username_" . $id;
	$name = new Name('Test', 'User');
	$phone = new PhoneNumber("+353", "085 12345678");
	return new User($id, $username, $email, $name, phone);
}

...

//Using the factory in a testcase
public function test_users_must_have_unique_email_addresses()
{
	$userA = self::makeUser(1, 'user1@email.com');
	$userB = self::makeUser(2, 'user1@email.com');

	$repo = $this->makeRepo();
	
	$repo->store($userA);
	
	$this->expectException(DomainException::class);
	
	$repo->store($userB);
}

```
As you can see this could not be simpler. We create a `User` object, giving smart defaults while allowing the `$id` and `$email` values to be set. This allows us to create and test users in various states, without focussing on the values we don't actually care about, removing noise from the test.

This is how I always start with my factories. I extract a private static factory that creates an object, then if I need the same object in a slightly different state I'll create a second static factory for that state. Once I need a third one I'll generalise the solution into a single factory method that allows configurable values like the above (if it makes sense to do this). Basically, don't go too DRY too fast, wait for duplication before you remove it.

You can also use factory methods to convey key info about the state you're creating the object in. E.g. `$userA = self::makeInactiveUser();`. This makes the code easier to read and it forces you to give names to states that you care about. As an aside, this might be a hint that these states should be represented in your domain in some way. (I'm a big proponent of letting domain emerge and express themselves organically)

### 2. Factory Classes
The next step above a factory method is a factory class. Here's an example:

```php
<?php

class CommandFactory 
{
	public static function makeCreateUserCommand(): CreateUser\Command
	{
		$email = 'user@email.com';
		$username = "test_username";
		$name = new Name('Test', 'User');
		$phone = new PhoneNumber("+353", "085 1234567");

		return new CreateUser\Command($username, $email, $name, $phone);
	}
}

```
Pretty simple as well, factory classes create a specific type of object, in the above case, a `CreateUser` command. 

Extracting factory methods into a class is useful when you have the same factory code distributed across your tests and you'd like to centralise it. For example, here you can see that the factory class is used as glue between two test cases that rely on the same object in the same state. 

```php
<?php

// Outer layer, used in a test that ensures a controller creates the expected command from a request
$expectedCommand = CommandFactory::makeCreateUserCommand();

// Inner layer, the same command that we know is created by controllers is now proven to work as expected when given to the command handler
$command = CommandFactory::makeCreateUserCommand();

// We now have abn explicit contract between the two
```

This allows us to ensure that the output of one test (the controller test) is used as actual input in another test (the command handler test). You could view this as a rudimentary form of contract test as it ensures the two components can actually integrate.

### 3. Builders
Now we're getting more advanced. Builders allow us to configure objects before creating them. Here's what it looks like to use a builder:
```php
<?php

$nameDifferentToCreditCard = new Name('Different Test', 'User');

$address = AddressBuilder::makeIrishAddress()
 				->withName($nameDifferentToCreditCard)
				->withoutZipcode()
				->build();
```
The builder is a much more advanced creational pattern, it allows us to create objects in various states without having to muck around with complex constructors. You simply give them smart defaults and offer ways to override those defaults.

In the above you'll notice that there's a static factory method `makeIrishAddress`, this method creates an instance of the builder that will build an Irish address. This is useful when you have default named states, but you want to change one or two things before building the actual instance.

A tip on writing builders, they should exist out of necessity, not because you like the idea of them. You don't start with a builder that allows any posible configuration, you switch to a builder once your factory methods become too complex (+3 arguments) and you're finding them hard to use or read. 

A personal note, in some cases the builder can be an implementation detail of a factory class. By that I mean that there's a factory class, but it uses a builder to do the heavy lifting. I once got fed up copy pasting and editing the same constructor internally in a factory class, so instead I wrote a builder and used that inside the factory. This made the factory code much simpler internally while making new factory methods easier to write. It also allowed me to change the objects constructor with ease (adding new properties was a pain before this, so much duplication). As you can imagine this is pretty powerful.

## The difference between factories and generators
Factories are deterministic, give it the same input, get the same output. If you have an object that creates scalars/objects, but they're non-derministic, e.g. something a class that creates UUIDs or DateTimes, then I'd recommend you call them generators. Generation implies variance and newness, this subtle language difference converys the distinction between the two and adds clarity to code.
```php
<?php

$id = Id::generateId();

```

## Constants
Constants are another great tool to use when writing maintainable test factories.
```php
<?php
const EMAIL = 'user@email.com';
const USERNAME = 'test_username';
```
Constants allow us to centralise common test scalar values. This is useful when you notice you're using the same values in multiple places, and that the values are coupled. I.e. if one values changes then the other must change. Like most others patterns you should only use it when necessary, so don't start with constants, wait for a problem that they solve, like the above example.

## Using factories in tests
Now that we've waxed lyrical about the different type of tests and how to write them, let's look at how they can be used within tests to add clarity.

Here is a simple unit test for a HTTP controller. It's written in my own particular style, so I'd suggest you focus on the factory methods and how they're used.
```php
<?php
...
class UserControllerTest extends TestCase
{
	/**
	 * @test
	 */
	public function can_create_a_user()
	{
		$expectedCommand = self::makeCreateUserCommand();
		$commandHandler = self::makeCommandHandlerThatAcceptsCommand($expectedCommand);

		$userController = new UseController($commandHandler->reveal());

		$request = self::makeCreateUserRequest();

		$response = $userController->handle($request);
		
		$expectedResponse = self::makeSuccessfullCreateUserResponse();

		$this->assertEquals($expectedResponse, $response);
		$this->assertCommandWasHandled($expectedCommand, $commandHandler);
	}

	private const EMAIL = 'test@email.com';
	private const USERNAME = 'test_username';
	private const FIRST_NAME = 'Test';
	private const LAST_NAME = 'Name';
	private const PHONE_COUNTRY_CODE = "+353";
	private const PHONE_NUMBER = "086 8045104";

	private static function makeCreateUserCommand(): CreateUser\Command
	{
		$name = new Name(self::FIRST_NAME, self::LAST_NAME);
		$phone = new PhoneNumber(self::PHONE_COUNTRY_CODE, self::PHONE_NUMBER);

		return new CreateUser\Command(self::USERNAME, self::EMAIL, $name, $phone);
	}

	private static function makeCommandHandlerThatAcceptsCommand(CreateUser\Command $command)
	{
		/** @var CommandHandler $commandHandler */
		$commandHandler = $this->prophesise(CommandHandler::class);
		$commandHandler->handle($command)->willReturn(true);
		return $commandHandler;
	}

	private static function makeCreateUserRequest(): Request
	{
		return new Request("POST", "/user", [], json_encode([
			'email' => self::EMAIL,
			'username' => self::USERNAME,
			'first_name' => self::FIRST_NAME,
			'last_name' => self::LAST_NAME,
			'phone_country_code' => self::PHONE_COUNTRY_CODE,
			'phone_number' => self::PHONE_NUMBER,
		]));
	}

	private static function makeSuccessfullCreateUserResponse(): Response
	{
		return new Response(200);
	}

	private function assertCommandWasHandled($expectedCommand, $commandHandler)
	{
		$commandHandler->handle($expectedCommand)->shouldHaveBeenCalled();
	}
}
```

Let's dive into the above. 

First off the factory methods are used to remove noise from the test case itself. This makes the test much easier to read and allows us to drill down into more detail if we need it.

You can see that factory methods are used to create both real objects (`makeCreateUserCommand`) and stubs/mocks/fakes (`makeCommandHandlerThatAcceptsCommand`). The object factory methods create actual instances of a class, not stubs. These objects are typically ValueObjects or Entities so it's better to just use real instances, you gain nothing from stubbing them. Services are slightly different, they have behaviour that relies on infrastructure, so you have to use mocks. Here we use a factory method to create a stub service in a certain behavioural state. 

You'll notice that each factory method converys information about the state of the object it's creating from the perspective of the test, not the perspective of the factory. E.g. `makeCommandHandlerThatAcceptsCommand`, this tells us exactly what is going on.

Constants are used for shared scalar values. This test ensures that the controller translates the request into a command, and it does this checking they have the same values. Since they're so clearly coupled it made sense to extract them into constants.

## Evolving the Design
So what changes could happen to the above and how would we reflect that change?

### Extracting Factory Classes
There are a few fatory methods that will most likely be extracted into factory classes. `makeSuccessfullCreateUserResponse` is so generic that it would be the same across many tests, making it an ideal candidate. `makeCreateUserCommand` could be used when writing the unit test for the command handler. It makes sense to reuse the same factory method as it allows us to test our contracts as mentioned previously.

### Factory Class for Scalars
As more and more constant scalar values enter our testcases it can be quite difficult to keep track of them, expecially if they're used in multiple places. At the start it makes sense to isolate them to the Factory classes that reference them, but what happens when multiple factories end up using the same scalar values in their constants? In that case it might make sense to isolate the constants in thier own classes, allowing you to ensure the same values are used consistently.

### Factories for Mocks
Now this isn't a definite, but I have some ideas around the way factories return mocks. You see, I don't like the way it returns an instance of the mock library rather than an instance of the interface, as this is the mocking library bleeding into the testcase. The testcase shouldn't care if it's getting a mock or the real thing, it just needs to know it behaves a certain way.

Ideally I'd like to work around this and encapsulate the mocking library. Instead it would return an instance of the interface. Now this would require a change in the `assertCommandWasHandled` function as well, as it would get a real instance. This means it would need to fetch the builder that created that instance, so that it can run it's assertions on the methods that should have been called. I think I'll play around with this idea in the near future.

## Factories make tests better
So after all that I hope I've shown how useful factories are when writing test code. They enable us to remove all the noise of creation from our tests, leading to greater clarity with a strong focus on the behaviour under test rather than the details of the value. Once you start doing this you'll notice that recurring patterns in creation will emerge, forcing you to give these states and configurations clear names. This is a way in which your tests can give feedback on your domain. As I've said, factories in tests are magic and I hope I've shown you why.

In short, factories lead to test code that is:
1. Easier to read
2. Easier to change
3. Better tested
4. Less fragile

And that's just factories in tests, factories are sumpremely useful in your application code, but that's a discussion for a different time.

If you'd like to learn more about using factories in tests then I'd highly recommend you read [Growing Object-Oriented Software, Guided by Tests](https://www.amazon.co.uk/Growing-Object-Oriented-Software-Guided-Signature/dp/0321503627), it's a fantastic book and it's what made me focus on using factories in my tests.

Thanks for reading, and I hope you learned something, as I definitely did while writing this piece!
