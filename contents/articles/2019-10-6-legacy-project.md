---
title: "SCA changes: Work in progress"
published: false
description: 
tags: 
cover_image: 
---

So I just wrapped up a large projects that involved big changes to a legacy codebase, and I wanted to write about the experience and how we made it happen. So some background, this was a project that had some some love but it was no longer actively maintained. All the devs that worked on it were no longer available to help, so it fell to myself to figure out how to do it.

The changes:
We wanted to migrate the codebase over to the new Stripe system that was SCA compliant. For those that don't know, SCA 

This is a big change, as beforehand

This means that each order in the system has two stages.

God this sounds shit, no one would want to read this. The info is important, but also not relevant.

Let's keep trying.

This project was difficult. Initially I had no knowledge of the system I was going to modify. I first had to learn what it did and how it did it, before I would be able to even formulate a plan to change it. This was quite a challenge, thankfull though I've picked up some techniques that made this project possible and I wanted to discuss them, as I think they'd be useful to others.

- Prototypes: when exploring new APIs or integrations, quick and dirty, no design
- Scratch refactoring to understand: exploring messy code and gaining understanding, helps guide later design
- Private method auto refactoring: Add clarity to existing code by carving out and naming pieces
- Isolate change: Don’t write tests for everything, isolate what needs to change and just test that
- Emergent design: Copy and paste code, looks for similarities later, use change pain as a guide

Working with unknowns:
The first step of working with a system like this is to admit that you don't understand the system. You need knowledge, and you need it fast. That's why the goal at the start isn't to change the software, it's to understand it. That's why some of these techniques focus on gathering knowledge, they exist so we can figure out what change actually needs to be made.

Auto refactoring tools: Private method extraction
This is the most concrete of the techniques and also the easiest to do. It's pretty simple, select a small chunk of code, e.g. a conditional or an SQL insert operation, and extract it into a private method. Most IDEs have tooling to do this automatically. Be sure to give the method a name that expresses behaviour rather than implementation. For example, say you had extracted some logic that inserts a user record into the DB via SQL, then the method would be named `storeUser`, as that's what it's actually doing. 

This techniaue is simple, but powerful. Use it to chip away at a dense codebase, extracting understanding from it piece by piece. DO a couple of passes, sleep on it and do another pass. You'd be surprised the level of understanding you'll build up in a short space of time.

Prototyping: 
Prototpying is one of the oldest recommended techniques in programming [The Mythical Man Month], and it is one that is not used anywhere near enough. A prototype is quick and basic version of a system you use to explore an idea or solution. The idea is that prototype allows you to focus on getting something working without worrying about it's design.

Prototypes work best when you're exploring an API integration, or a new library. A prototype in this case allows you to prove you can actually use the API/lib properly, you can explore the solution space without the constraints of the existing system impacting the prototype (e.g. how it's currently designed). One you've gained knowledge about the API/lib and what's it meant to do, you can then figure out what changes you need to make to the existing system to integrate it.

Philisophically, when you try to integrate two systems, you have to acknowldge that you can't figure out how to fit them together if you don't know what either of them does. Trying to integrate two systems while figuring out what you want to do with those systems is incredibly difficult and next to impossible. There are just too many unknowns. That's why you prototype, to probe and gain knowledge about one half of the problems. Once you have that under your belt, the changes you need to make to other system becomes apparent. Ultimately it's about splitting the problem in two.

Scratch Refactoring:
Sometimes a codebase just isn't clicking, you've tried to auto refactor it into private methid.

While prototypes are usually working systems, think of Scratch Refactoring as a way to prototype designs. 





