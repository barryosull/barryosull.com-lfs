---
title: "Template Driven Development: Why it doesn't work"
published: true
description: "What Template Driven Development is, why it is an anti-pattern, why it so seductive and how to work around it."
tags: architecture, design, training
cover_image: /images/template-driven-development.jpg
---

Software development is hard, and there have been many attempts to simplify the process over the years, some good, most bad. I'd like to discuss one of the bad attempts, a recurring problem I've seen in software development that myself and my friends have dubbed "Template Driven Development" (the bad TDD).

Template Driven Development is the practice of reducing software development down to a series of templates that developers should follow. Developers are given a user story and a rigid schema for how their system should be structured, they are to use a set of pre-defined patterns that they must follow when modelling concepts in the story. Following the template is paramount.

Now, you're probably thinking, "Wait a minute, isn't that just consistency?", but don't worry, I'm not attacking consistent code. Consistently formatted code is a must, as is consistent naming conventions and use of patterns. No, what I'm attacking is the idea that you can reduce software development down to a series of templates and steps that people can just follow without thought.

The dream is that it makes software development quicker and cheaper. The reality is messy code that's hard to navigate and fails to express business intent. The models end up being anemic and the system is littered with hacks to workaround failings in the prescribed patterns. The codebase rots exceptionally fast, the resulting product is broken, and the developers have no idea how to fix it. Congrats, you played yourself.

## Why it doesn't work
Naively "Template Driven Development" seems like it should work; there are recurring patterns in software development after-all and we are encouraged to use them. 

When you look at a well designed system it is consistent and easy to navigate. From there it appears trivial to reduce it down to a series of templates that junior developers can follow. Bam, now you don't need as many senior devs, you just need to teach your junior devs those patterns and they'll be able to add new features with ease.

So if this sounds too good to be true, that's because it is. It is an illusion. The system only looks like it could be turned into a series of templates because the senior developers spent so long iterating on the codebase to make it easy to understand and consistent in style. It didn't start out that way, and to strive for that level of consistency at the start of a project is akin to putting the cart before the horse. It's classic waterfall style thinking and it just doesn't work. If the system changes then the patterns must change to accommodate it, and developers that can only follow patterns cannot handle that change.

## Why we want it to work
"Template Driven Development" comes from the desire to turn a [complex](https://en.wikipedia.org/wiki/Cynefin_framework#Complex)/[complicated](https://en.wikipedia.org/wiki/Cynefin_framework#Complicated) process (working as a team to write software) into a [simple process](https://en.wikipedia.org/wiki/Cynefin_framework#Simple_/_Obvious_/_Clear) (putting together Ikea furniture). It tries to shortcut all the design, iteration, training and collaboration that leads to a well written system. The idea that this is even possible is re-enforced by the fact that well designed systems seem obvious in hindsight. When we see the final product we forget all the trial and error it took to actually get there. 

![Complex vs Simple](https://barryosull.com/images/software-complex-vs-simple.png)

Development managers and seniors like this idea because it potentially allows them to shortcut finding and training developers (an expensive task). Instead they just need to have some meetings, come up with the templates, and then fire a small army of inexpensive juniors at the problem.

Junior to mid-level developers also want to learn the secrets of writing good code and ideally they'd like to skip all the ambiguity and messing about. They want to write well designed systems and they don't want to go through the pain of getting it wrong. They believe it is possible to leapfrog all the iteration and mistakes and just jump straight to the finish line.

Combine these two mindsets together and you can see why the idea is so attractive, it feels like a shortcut that should work, even though it's obvious that it doesn't. If it did work then that's just how we'd write software and this article wouldn't exist. At this stage you'd think we'd realise that it isn't possible, yet we keep falling into the same mental trap, the idea is just too alluring it seems.

Remember, there are [no silver bullets](https://en.wikipedia.org/wiki/No_Silver_Bullet).

## The problems it causes

When you teach developers to work like this then you encourage them to stop thinking. In fact, you've explicitly told them not to think and instead they should follow the process laid down from on high. They don't know why the patterns are good or what problem they're solving, they just view them as the way you do things and will not put anymore thought into it than that. The resulting systems are messy and are typically nonsensical because no design thought was put into them. The developers don't know how to work outside the patterns you've given them, they can't choose patterns based on context, so they will follow those patterns even when it's obvious that they're getting in the way.

Just because you can put together an Ikea flatpack does not mean you can design and manufacture a desk from scratch with no supervision. That's not how carpentry works and it's definitely not how coding works.

Teaching developers to work like this does them a massive disservice and potentially ruins their professional development. Developers that want to get better will quickly realise that this doesn't work and will get frustrated and leave. Developers that are isolated and trust in management will buy into it and will stop progressing, producing bad code without understanding why it's bad. Since it doesn't work, management believes that the devs need tighter reigns, and it devolves into dark agile with a stringent command and control structure . . . which just makes everything worse.

Once people buy into this idea it is incredibly hard to make them stop, it becomes faith driven, an ideology about how software development "should" work, and it takes a LOT of failure before they will admit it doesn't. 

## So how do we combat this?
Thankfully it's not all doom and gloom, there are ways to fight this mindset. Below is how we dealt with it at one company I consulted (obvious self plug).

### 1. Kill your darlings
Well first off we need to kill the idea that there is one way to write software, one perfect way to architect an application that doesn't require design and iteration. This idea is toxic and is the ultimate [pre-optimisation](https://stackify.com/premature-optimization-evil/).

Basically we as developers are looking for the "God pattern", the pattern that is perfect and always applicable. This pattern does not exist, and any attempt to find it is a fools errand. That isn't to say there aren't generic patterns, of course there are, but the patterns are only applicable in a particular context. You let the patterns emerge to help you express the problem you're solving, you don't force them to appear.

### 2. Don't present patterns as how-to
This is a trap that has caught myself and many others. You show off a well designed system and explain all the patterns you used, hoping that it will help other developers. You teach these patterns as "the way a system should be designed", under the belief that it'll shortcut training time. This isn't enough, they need to understand the design choices you made, not just the end result. You have to showcase the trade-offs in design, show how you got there. Which leads us to PRs . . .  

### 3. Express the evolution of your designs through small PRs
Instead of showing a final product, you should instead show the evolution of your design over time. And the best way to do this is through [small PRs](https://hackernoon.com/the-art-of-pull-requests-6f0f099850f9).

Small PRs show how you changed a system over time, introducing patterns and designs when applicable. You didn't choose the design at the beginning, you let it emerge naturally, and it's important to show that to developers. If you don't, they'll try to jump straight to the finish line and the result will be design for the sake of design, rather than design to express a particular solution in a given context. 

Quick aside, when writing these PRs you should be explicit about design choices in the description, this makes things clearer and opens up the design to discussion, which helps spread knowledge and understanding.

### 4. Allow time to sharpen the axe
Knowledge comes from experience. If you want you developers to understand when and where patterns are applicable, you have to let them try out those patterns and review the results. Simply teaching them the patterns isn't enough, information is not knowledge, they have to experience using the patterns firsthand. I.e. they need to sharpen the axe.

One way to do this is to carve out time for a developer to try out a new idea on a codebase. Maybe a day every two weeks or so. Afterwards review the code with the team and discuss what worked and what didn't. If it's good, keep it, if it's not then drop the PR, no harm done. The goal is to learn and explore, not to push all code to production. This time isn't wasted time, this time is an investment in your staff and the work they'll produce in future. It's pays off massively and surprisingly quickly. You're saving yourselves a lot of future bugs and headaches.

## Don't fall victim
"Template Driven Development" is a real problem in our industry, it's a seductive idea that leads to crap software and frustrated teams. Thankfully it is possible to combat it, we just need to be realistic and humble, accept that there are no shortcuts in training. We need to create an environment were knowledge is shared and skills can be improved. The simplest way to start is to have seniors show junior and mid-level developers how they do things, they just need to take the time. (Small PRs are a God send here!)

Software development is about iteration and collaboration at it's core, there's no way to shortcut it, and we must accept that.
