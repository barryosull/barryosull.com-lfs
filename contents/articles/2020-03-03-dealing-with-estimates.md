---
title: "Estimating software: How to deal with requests for estimates"
published: true
description: "Tips and techniques on dealing with estimates"
tags: estimates, productivity, communication, development-strategy
cover_image: /images/dealing-with-estimates.jpg
---

A question that often comes up in conversation with other developers is "How do I deal with requests for estimates?". Usually the person asking the question is frustrated, they know that any estimates they create are pure fiction, yet management keeps asking for them anyway. Then they ask the real question; "How do you make them stop?".

Well, I usually give the same answer, "You don't.". Instead you need to ask why are they asking for estimates in the first place. What problem are estimates solving for them? Once you understand that you can figure out the best way to help.

## Why we're asked for estimates
 When I listen to developers discuss the problem with estimates, they always come at it from the perspective of management not getting that estimates don't work. Their focus is on making management understand their perspective, taking a [competitive rather than connective approach](https://barryosull.com/blog/communication-styles-working-effectively-as-a-team/), hammering it home in any way they can. But communication is a two way street, if we want management to understand us, we need to understand them. We need to empathise. 
 
First off, management and stakeholders don't ask for estimates for the sheer hell of it, they have reasons. Here are some common ones:

1. They want to plan for the future
2. They want to know if the work is on schedule or not
3. Someone higher up the chain has asked them how long something will take

No matter the reason, turning around to this person and saying "I dunno" is supremely unhelpful. In case one you're making it impossible to plan anything, in case two you're robbing them of any sense of control and in case three you're making them look bad in front of their boss. Any of these outcomes will ruin any chance you have at co-operation. You're effectively shutting down the conversation and presenting any communication as adversarial. Not good footing for a working relationship.

## Can we give accurate estimates
No conversation about estimates is complete without a dive into accuracy. So what's the reality of the situation? Can we give them accurate estimates? Well  . . . no. Hell no. Definitely not at the start of a piece of work anyway. 

We all know that estimates are [usually wrong](https://en.wikipedia.org/wiki/Hofstadter%27s_law), at best they're educated guesses, at worst they're delusional and unrealistic. Estimates are so difficult because we're asked for them when we have the least information about the problem. But that doesn't mean we can't lean on experience and manage how we produce them.

## Dealing with requests for estimates
Given that accurate estimates are impossible, what do we do? Well here's the thing, management may say they want ACCURATE estimates, but what they actually want is a sense of control. They want to know that the work is in safe hands, and estimates are just one way they go about getting that sense of security.

So the first step is to empathise. They want to know how long it will take, you want to know how long it will take; what do we need to figure this out? Start the conversation with this perspective and you'll find they're much more open to exploring the problem and figuring out a useful middle ground.

Now it boils down to knowledge and confidence. What you do next depends on how well you understand the problem and the solution. I've broken it down into three steps based on your level of knowledge, least knowledgeable at the start, most knowledgeable at the end. These are not proscriptive, it's just how I've broken down difficult projects in the past.

### Confidence level 1: Don't have a clue: 
**Strategy:** Research spike

First off you need to understand the problem. If you don't understand the challenge then estimates are impossible. In agile these are called [research spikes](https://www.leadingagile.com/2016/09/whats-a-spike-who-should-enter-it-how-to-word-it/) and they're a great way to scope out potentially difficult work. I usually time-box two days for these, but it can vary. I'll arrange meetings with stakeholders and dive into the codebase and get a feel for how difficult it is to work with. At the end of the time-box I'll report to a manager on my progress. If things are going badly I'll ask for more time. If things are going well I'll move onto stage 2 or stage 3, depending on my level of confidence.

### Confidence level 2. I have an idea:
**Strategy:** Throwaway Prototype

At this stage you have an idea of what you need to do, but you have no idea as to how you'll actually do it. This usually happens when the codebase is legacy/messy and implementing a solution is non-trivial. You don't really know where you need to change yet and you don't know how long the final product will take, but you probably have an idea of how long a quick and [dirty prototype](https://en.wikipedia.org/wiki/Software_prototyping#Throwaway_prototyping) should take. The goal here is to focus on the happy path and hammer in the functionality, see what works and what breaks, discover what parts of the system will fight you. The goal is to gain knowledge, not to write a well written solution. As long as you're clear on this to stakeholders then you'll be fine.

### Confidence level 3: I know what needs to be done and where:
**Strategy:** Estimate and do the work

This is the part were you can give management actual estimates. You have the most information you can have about the project without actually completing it, so you're in the best position to plan out and estimate the work. You know what needs to be done, you know what needs to change in the codebase and you know the pain points you'll face. The estimate doesn't need to be accurate, but now you're able to give reasons for your estimates and more importantly you'll be able to present a plan. 

## What if they want estimates at the start?
I always try to avoid project length estimates, but sometimes there's no way around around them. For whatever reason estimates are considered the main priority and we need to provide answers. In these cases I find communicating risk is key. Give an estimate in month increments (3 months, 6 months, etc ...), but gauge it as rough and subject to change. If they're experienced they'll accept this and appreciate your candor. If they don't accept this, then that's fine, they're just inexperienced and they'll quickly learn that estimates are just that, estimates. Personally I've met very few of the latter variety, most managers and stakeholders are open to honest communication and collaboration. They know that plans and reality rarely align.

## It's all about communication
The main issue I've found with developers if that we want to dictate, to get across our ideas and explain why our knowledge is superior. We think this will persuade management, despite the fact it doesn't even convince other developers. This isn't how things go, it's a two way relationship and that requires give and take. It requires communication.

So at each stage of a project you need to report to stakeholders on your progress. Don't be too detailed, just enough so they know if things are on track or not and if you're blocked and need help. Frame the messages for their context, tell them what's relevant to them. E.g. Product people don't care about the patterns and infrastructure you use, only tell them what's relevant to them. You can do this at standups, or you can send them a PM, it doesn't matter. What does matter is that you are open and honest about your progress. They want security, so give it to them.

## Story points
You'll notice a suspicious absence of story points in the above. This is because they are not useful when reporting estimates for the purpose of building confidence. Story points were never intended to be a [proxy metric for time](https://medium.com/serious-scrum/12-common-mistakes-made-when-using-story-points-f0bb9212d2f7), they exist so that teams can reach consensus on how "big" a piece of work is amongst themselves, ensuring everyone is on the same page with the difficulty and details of a story. They are literally made up numbers and your velocity one sprint will not match your velocity for the next. (If they do, someone is fudging the numbers . . .)
 
 So as a metric to report upwards, it's not very useful. This is why I avoid story points when reporting estimates and instead use actual time. It's much more useful and it's what management actually want to hear. In short, I'd advise you use story points internally in a team and time estimates when reporting externally.

## Closing thoughts
I've found that once you frame estimates as a collaborative problem and work with others to succeed, then management will relax. They know that everything is in safe hands and will gladly let you work as you need to. You've proven that you can communicate risk and that you understand their needs. Working like this presents the relationship as collaborative, people will want to work with you and will happily let you manage how you work. Remember, if you make their job easy for them, they'll let you make your job easy for yourself. They don't want to control you, they want to succeed. Enable their success.