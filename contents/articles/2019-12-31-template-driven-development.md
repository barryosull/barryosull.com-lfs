---
title: "Template Driven Development: Why it doesn't work"
published: true
description: "What Template Driven Development is, why it is an anti-pattern, why it so seductive and how to work around it."
tags: architecture, design, training
cover_image: /images/template-driven-development.jpg
---

As some of you know, I am a software contractor that works with multiple teams in legacy codebases, and I'd like to discuss a recurring problem I've seen in software development that myself and my friends have dubbed it Template Driven Development.

Template Driven Development is the practice of reducing software development down to a follow the template approach. It ends up like this, developers are given a schema for how their system should be structured, how concepts should be modelled in code, etc..., and they must follow those templates. 

The dream is that it makes software development quicker and cheaper. The reality is messy code that's hard to navigate and doesn't express business intent. The software isn't fit for purpose and is often broken. The models end up being anemic and the system is littered with hacky workarounds. The codebase rots exceptionally fast and and the developer's have no idea how to fix it. Congrats, you played yourself.

## Why it doesn't work:
Naively Template Driven Development seems like it should work; there are recurring patterns in software development after-all and we are encouraged to use them. When you look at a well designed system it is consistent and easy to navigate. From there it appears trivial to reduce it down to a series of templates that junior developers can follow. Bam, now you don't need as many senior devs, you just need to teach your junior devs those patterns and they'll be able to add new features with ease.

So if this sounds too good to be true, that's because it is. It is an illusion. The system only looks like it could be turned into a series of templates because the senior developers spent so long iterating on the codebase to make it easy to understand and consistent in style. It didn't start out that way, and to strive for that level of consistency at the start of a project is akin to putting the cart before the horse. If the system changes then the patterns must change to accommodate it, and developers that only know the current patterns cannot handle change.

## Why we want it to work
Template Driven Development comes from the desire to turn a [complex process](https://en.wikipedia.org/wiki/Cynefin_framework#Complex) (writing software) into a [simple process](https://en.wikipedia.org/wiki/Cynefin_framework#Simple_/_Obvious_/_Clear) (chopping wood). It tries to shortcut all the design and iteration that leads to a well written system. Well designed systems seem obvious in hindsight, even though it takes trial and error to actually get there. 

Development managers and seniors like it because it potentially allows them to shortcut finding and training developers (an expensive task). Instead they just need to come up with the templates and they care fire a small army of inexpensive juniors at the problem.

Junior to mid-level developers also want to learn the secrets of writing good code and to skip all the ambiguity and messing about. They want to write well designed systems and they don't want to go through the pain of getting it wrong. They believe it is possible to leapfrog all the iteration and mistakes and just jump straight to the finish line.

Combine these two mindsets together and you can see why the idea is so attractive, it feels like a shortcut that should work, even though it's obvious that it doesn't. If it did work then that's just how we'd write software and this article wouldn't exist. At this stage you'd think we'd realise that it isn't possible, yet we keep falling into the strap.

Remember, there are [no silver bullets](https://en.wikipedia.org/wiki/No_Silver_Bullet).

## The problems it causes:

When you teach developers to work like this then you encourage them to stop thinking. Infact, you've explicitly told them not to think and instead they should follow the process laid down from on high. They don't know why the patterns are good or what problem they're solving, they just view them as the way you do things and will not put anymore thought into it than that. The resulting systems are messy and are typically nonsensical because no design thought was put into them. The developers don't know how to work outside the patterns you've given them, and they will follow those patterns even when it's obvious that they're getting in the way.

Effectively you've taught a bunch of people to paint by numbers and then expected them to paint beautiful landscapes with no supervision. That's not how painting works and it's definitely not how coding works either.

Teaching developers to work like this does them a massive disservice and potentially ruins their professional development. Developers that want to get better will quickly realise that this doesn't work and will get frustrated and leave. Developers that are isolated and trust in management will buy into it and will stop progressing, producing bad code without understanding why it's bad. Since it doesn't work, management believes that the devs needs tigheter reigns, and it devolves into dark agile with a stringent command and control structure . . . which just makes everything worse.

Once people buy into this idea it is incredibly hard to make them stop, it becomes faith driven, an ideology about how software development "should" work, and it takes a LOT of failure before they will admit it doesn't. 

## So how do we combat this?
Thankfully it's not all doom and gloom, there are ways to fight this mindset. Below is how we dealt with it at one client.

### 1. Kill your darlings:
Well first off we need to kill the idea that there is one way to write software, one perfect way to architect an application that doesn't require design and iteration. This idea is toxic and is the ultimate [pre-optimisation](https://stackify.com/premature-optimization-evil/).

Basically developers are looking for the "God pattern", the pattern that is perfect and always applicable. This pattern does not exist, and any attempt to find it is a fools errand. That isn't to say there aren't generic patterns, of course there are, but the patterns are only applicable in a particular context. You let the patterns emerge to help you express the problem you're solving, you don't force them to appear.

### 2. Don't present patterns as how-to:
This is a trap I've fallen into myself and I've seen others fall into it as well. They show off a well designed system and explain all the patterns they used, hoping that it will help other developers. They teach these patterns as "the way a system should be designed", under the belief that it'll shortcut training time. This isn't enough, they need to understand the design choices you made, the tradeoffs in design, the "why" behind the "what". It also not how you did it, you didn't start with those patterns, you let them emerge.

### 3. Express the evolution of your designs through small PRs
Instead of showing a final product, you should instead show the evolution of your design over time. And the best way to do this is through [small PRs](https://hackernoon.com/the-art-of-pull-requests-6f0f099850f9).

Small PRs show how you change a system over time, introducing patterns and design when applicable. You didn't choose the design at the beginning, you let it emerge naturally, and it's important to show that to developers. If you don't, they'll try to jump straight to the finish line and the result will be design for the sake of design, rather than design to express a particular solution in a given concept.

## Don't fall victim
Template Driven Development is a real problem in our industry, it's a seductive idea that leads to crap software and frustrated teams. Thankfully it is possible to combat it. There are no shortcuts in training, but seniors can show junior and mid-level developers how they do things, they just need to take the time. (Small PRs FTW!)

Software development is about iteration at it's core, there's no way to shortcut it, and we must accept that.
