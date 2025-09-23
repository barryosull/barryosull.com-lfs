---
title: We are terrible at refactoring
published: true
description: "An exploration of refactoring, why we're bad at it as devs and orgs, and what we can do about it improve"
tags: software-development, refactoring, management, leadership
cover_image: /images/refactoring-header.jpg
---

Software engineering, as a profession, is terrible at refactoring. A hot-take I know, but I think I can convince you. After writing about [skill acquisition and up-skilling](https://barryosull.com/blog/growing-other-developers-as-a-staff-engineer/) I wanted to reflect on refactoring, a skill that is core to software development, many dev assume they have, but few can actually demonstrate.

# My journey with refactoring
First a little about myself. For the last 7 years I chose to specialise in legacy web apps (which baffled so many people), and rather than pitching rewrites that typically fail, I opted to focus on improving these systems so they could be changed to meet new needs. In short, I learned to refactor. 

During this journey I had many successes, fixing payment, tax and compliance systems that others had tried to replace and had failed. What surprised me most though wasn't the messy code, it was that most devs couldn't refactor. Sure we'd say we could (I sure did), but when push came to shove we struggled and opted to rewrite things rather than change them, and failed to deliver while doing so. This wasn't due to negligence on our part, we're not bad devs, it was because we've never actually practiced the skill and instead relied on existing skills. This article is my attempt to explore this idea and see what we can do about it.

# What is refactoring
No article on refactoring is complete without a mangled paraphrase of the [wikipedia definition](https://en.wikipedia.org/wiki/Code_refactoring), so here's mine: 

> Code refactoring is the process of changing/restructuring existing code without changing its external behavior. 

Pretty simple right? To an end user of the system it looks and behaves the exact same way before and after a refactor. This might seems redundant, why change a system if there's no change in behaviour? What value does that bring to customers? (This is a question you should expect to hear many times as you progress in your career).
 
# The why of refactoring
Code is how we tell a computer what to do and often use it to automate business processes. While code is written for computers, it's not the main consumer. No, that is other developers. As Martin Fowler said: "Any fool can write code that a computer can understand. Good programmers write code that humans can understand.".

Why is it for humans? Well, code that can't be understood can't be changed, so having readable code is a requirement for an adaptable system. The value of refactoring is that it enables the product to change later. It is an investment. Conversely the cost of skipping refactoring is debt, technical debt.

## Technical debt
When we initially design a system we keep it simple and focussed on a specific problem. As the system grows and we add new behaviour, we realise that the initial design doesn't enable this change and the resulting code ends up messy as a result and harder to change. The metaphor we use for this accruement of mess is technical debt. As we add on more and more behaviour we pile on more and more debt.

As I wrote about in an article on [exploration vs exploitation](https://barryosull.com/blog/exploitation-vs-exploration-in-software-development/), we're exploiting too much and not exploring (investing) enough, leading to tech debt.
![Tech Debt Chart](https://i.ibb.co/yFM1KrQ/quality-software-chart.png)

To continue the metaphor, the interest on this debt is slower development, which compounds over time. Eventually there's more debt than understandable behaviour and we get lost in a maze of our own making and have to declare technical bankruptcy. At this point the only option is a rewrite, which is one of the most costly and risky maneuvers a business can undertake. After-all, how can you rewrite something you've just admitted you don't understand?

This is why we refactor. A small investment now to prevent massive costs later. 

The technical debt metaphor isn't perfect and it is often criticized because debt in a business is normal, whereas in code it quickly becomes a liability. So let's try another metaphor, the kitchen!

## Code is like a kitchen
Think of your code as a kitchen and behaviour as the resulting food. The messier the workspace the harder it is to cook a meal. The more dirty pots and pans we leave lying around the more they get in the way of prepping the food and the more likely we are to make a mistake, like cutting your finger or burning a casserole.

This is why it's better to clean as we go:
1. The longer we delay the harder it will be
2. We'll go faster overall
3. We're going to have to do it anyway

So cleanup as you go, future you will thank you for it!

# How are we terrible?
I'll get into why we don't refactor, but first I want to explain what I mean by us being terrible at it. When I say most devs can't refactor, I don't mean we can't change code to make it look a little nicer. Most devs can and will change the internals of a method to clean up messy logic, or extract a private method for clarity. This is fine and fairly easy. 

Where we fall down is anything bigger than this. Once we have to make structural changes, e.g. change class boundaries, extract classes, split or merge methods, then we fall down. Most will refuse to do it, instead opting to hammer in changes rather than accept the current design/structure is getting in the way and needs to changes. This isn't because we're lazy, it's because we don't know how. We don't know what shape will make things better and/or we don't know how to get there. This is because we lack the skill.

# Why don't we refactor?
Given refactoring is essential to keeping a system healthy over time, why don't we do it? This is a big question and it's one I think has multiple reasons:

1. We don't practice the skill
2. We don't design refactorable systems
3. No incentives to refactor
4. The feedback loops are too long
5. Tech debt is hard to measure
6. Others will be left with the mess

## 1. We don't practice the skill
Refactoring is a skill and one that most devs don't practice. Our job is to add behaviour, and adding behaviour to a system in the quickest way possible is very different to changing a system over time so it's easier to understand and change. In-fact, they are practically opposite skills. One adds debt, the other removes it.

Sure they use the same base skills, such as syntax, problem solving and design/architecture, but they use them in very different ways. A speedy dev won't write tests because it slows them down, but refactoring relies on them and writing good tests is a skill in and of itself. A speedy dev will add a 10th argument to a method, but will have no experience cleaning up or splitting long method signatures for clarity. A speedy dev will hammer code into a design, but won't ask if the design is getting in the way and they will have no experience fixing said design.

Since we can't refactor at a micro scale we have no change of refactoring at a larger one. This is why I think so many devs pitch rewrites instead of refactors, because we don't know how to refactor something, but we sure as hell know how to write something from scratch! We feel we'll get more momentum but this is a trap. We can't rewrite something we don't understand, and we need to refactor to understand.

As an aside, [rewrites typically take 3 to 4 times longer than anticipated](https://www.youtube.com/watch?v=_TKqc784PH8) and it's only after all this time that we see the value of the refactor.

## 2. We don't design refactorable systems
A consequence of being unskilled at refactoring is that we don't design systems to be refactorable, because we don't know what a "refactorable" system looks like. This makes sense, as we've never had to consider this design perspective before. When we write a class or change a line of code we won't think "Is this easy to understand?" or "Will this make it harder to change in future?", instead we'll plow ahead to get to our end result.

Odds are anything we produce will be harder to change over time, as we'll couple everything together since that's the quickest way to get things done. We'll have zero instincts on which designs or patterns to use when/where to help future you succeed, or where to put boundaries, as those cognitive muscle have never been exercised. In-fact those muscles probably don't even exist. The only way to gain this design perspective and intuition is through practice, which many devs lack.

## 3. No incentives to refactor
Developers are managed by dev/product managers, and they don't see the interest on tech debt sprint to sprint, it's just the cost of doing business. They would rather we work around the problems than fix them, as that's quicker and lets us meet this sprint's goals and this quarter's OKRs, locking in all our bonuses (and maybe a future promotion). 

There is no incentive mechanism for them (or us) to care unless it's slowing down dev right now. Devs will refactor to scratch their own itch, we enjoy the craft after-all, but there's only so far we can push this before outside pressure leads us to move on to adding value rather than enabling it. 

Sure you could argue that devs should be refactoring anyway and work around management, but that ignores the power dynamics at play. Hard to argue with someone that controls your salary and is pushing for speed, not quality. [You get what you reward](https://barryosull.com/blog/reward-mechanisms-incentivising-quality/).

There's also a negative incentive in certain orgs. Managers are often paid more for managing more devs, and they're more likely to get promoted, so more devs is better. Letting tech debt build up and slow the team down is a great way to naturally make this happen, the slowness can be used to justify more head count (this happened at Dell). In this case there is a negative incentive mechanism at play, so of course they're not going to prioritise refactoring.

## 4. The feedback loops are too long
In the kitchen metaphor the cost incurred by not cleaning as you go becomes obvious in a short space of time. Within hours you'll have slow service, burned food and very angry customers. 

![Slow Feedback Loops](/images/slow-feedback-loops.png)
src: https://theagileist.wordpress.com/2014/10/21/feedback-loops/

This is not so in most technical systems. We're very good at working around initial technical debt, so the debt doesn't incur much visible interest at first. This encourages a vicious cycle where we skip cleaning up and rely on shortcuts. By the time we realise the system is getting in the way and quick fixes are no longer possible, the system is too far gone for us to refactor it successfully (given our current skill level). 

## 5. Tech debt is hard to measure
While it's easy to discuss tech debt, actually quantifying it and it's impact is incredibly difficult. Tech debt is notoriously hard to measure. The impact of tech debt is felt by developers when they are attempting to understand a system, and it's difficult to turn this phenomena into real numbers such as "If this was better written I could go X times faster". It's qualitative, not quantitative.

A common management mantra is "What gets measured gets managed" (which is [erroneously attributed to Mike Drucker](https://web.archive.org/web/20250429013518/https://drucker.institute/thedx/measurement-myopia/)). Since the cost of not refactoring is so hard to measure we often don't even try and ignore it. This is a [management anti-pattern](https://medium.com/centre-for-public-impact/what-gets-measured-gets-managed-its-wrong-and-drucker-never-said-it-fe95886d3df6) and leads to many of the problems we face, but it's not one that's going to change anytime soon given our obsession with easy to measure (and game) metrics.

## 6. Others will be left with the mess
As time goes on the debt grows and grows over years until it is unmanageable, but by that stage the original managers, product owners and most devs have probably moved on. We basically move kitchen every couple of weeks, so we'll never see the consequences of letting the mess build. This is triply true for project based environments with no ownership model. Why make it better when you're moving on in two months and won't see the benefit? It'll just slow you down after-all.

By this stage a new team will inherit the burning kitchen, try to fix it and will decide "This is way to messy. Feck this, we should rebuild it!". Repeat this process for 30yrs and you get the banking system, a lumbering behemoth that is slow, impossible to change and being eaten by smaller faster incumbents like Revolut. We see the true cost far too late.

# How do we incorporate refactoring into our dev cycles?
Now we understand why we don't refactor, let's look at what we can do about it, how do we bring refactoring into our day to day and quarter to quarter? 

The way I see it, we need to do 3 things:
1. Measure tech debt qualitatively
2. Let devs practice refactoring
3. Incentivise refactoring

## 1. Measure tech debt qualitatively
As stated above, tech debt is difficult to measure quantitatively. You can use techniques like cyclomatic complexity and number of files touched per PR, but these are approximations. They're useful, but they don't show the whole picture.

The best way to measure it is to ask the devs how much the current system slowed them down. What percentage of their time did they spend trying to understand the code and work around issues? How many bugs emerged due to not understanding the system? Let them be loose, precision will only slow you down further.

This sounds fluffy, but these are the people working in the space and their experience is valuable. The goal is to have a number that we can show higher management to highlight the cost of having a messy system. Show them how much time our team thinks they are losing. Show them the pain and the cost.

## 2. Let devs practice refactoring
Refactoring is a skill, and we don't gain a skill without practicing it. Here are my top four suggestions (that's right, bullet points within bullet points!).

1. Tidy first
2. Try out TDD
3. Practice together
4. Read up on refactoring patterns (and apply them)

Kent Beck's book [Tidy First](https://www.oreilly.com/library/view/tidy-first/9781098151232/) is probably the best intro to the concept. It shows practical ways to refactor code to get it into a better position to enable the change we want. The goal is to make the change easy, then make the change, and the first step is to do a little bit of cleanup first.

Test Driven Development is a good way to gain the skill of producing designs that enable refactoring. Refactoring is a core part of the TDD loop after-all. It's slow initially, we'll spend a lot more time thinking about interface design, iterating, and getting it wrong, but this is the point as that's how we build up the skill and intuition. After a while you'll design code that looks like it was made with TDD even though you just banged it out.

I'd also say you should read [Martin Fowler's book on refactoring patterns](https://www.oreilly.com/library/view/refactoring-improving-the/9780134757681/) and give some of them a try. You don't have to start here but it is damn useful to know all the techniques. Scratch refactor these patterns (try them out, see how the code looks and then throw it away); the goal is to learn, not fix the code. Carpenters don't get attached to practice pieces and neither should we.

Finally, arrange pairing or mob sessions around refactoring. Focus on the techniques and patterns above. We learn more when we explore together, so let everyone flex their muscles and try out different techniques. Let a proficient dev lead initially, focus on obvious code smells, then work our way up to more complicated refactorings.

Expect devs to slow down at the beginning of this process. We have to get worse before we get better and we need to unlearn practices that let us go faster in the short term but slower in the long term. The investment is worth it.

## 3. Incentivise refactoring
I've worked with senior directors that lamented developers not refactoring and the mess of the current system; I asked how they incentivised it and I got a blank state back. They thought devs should just do it, but couldn't explain how to make it happen. Well, what gets rewarded gets repeated, so make refactoring something that is rewarded. Tie performance to refactoring, make it one of the expected competencies. Factor in their level and set the expectations appropriately. 

Beginner devs (entry level) can't refactor as they're still just learning the base skills, so leave them out of it. Advanced beginners (software eng) are where it can start, they can be expected to spot and fix simple code smells. Competent (senior) should be able to refactor classes and boundaries towards known patterns. Proficient (staff) should be able to refactor entire systems, allowing lower levels to easily make changes and succeed. 

Measure success not by the devs individual speed, but by the team's overall velocity. Factor in whether they are working in a known space or a new one. Looks to do more with less over time. If a team is constantly growing then that's a sign they're not refactoring.

Remember, if we don't incentivise it then it probably won't happen.

# Conclusion
I hope you understand why refactoring is so important for the continued health of a tech organisation, why it doesn't happen and why we're so bad at it. Hopefully you see a path forward to bring this to your team and making it a part of the day. I'd love to see more devs with refactoring skills, here's nothing more satisfying than taking a messy piece of code, making it better over time and watching as the team gets faster, not slower. We can get there, it just requires a shift in how we think and how we prioritise.
