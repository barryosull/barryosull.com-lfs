
---
title: "Introducing DDD to your Company"
published: true
description: DDD is about enabling developers and business owners to work together on a collaborative model, but how do you introduce the concept?
tags: ddd, architecture, software-design
cover_image: /images/ddd-introducing-banner.jpg
---

The following are my notes from the last DDD IE meetup, [6th June 2019](https://www.meetup.com/Domain-Driven-Design-Ireland/events/261668803/), on how to introduce DDD to your company. This post is  about the concepts we discussed and discussions we had around the topic. There's some great stuff in here, the kind that can only happens through discussion and collaboration.

First off, the meetup itself was structured as half talk, have group discussion, with discussion interspersed throughout the slides. We've done a few of these style of meetups in the past and they've worked out really well.

Here are the slides: https://slides.com/barryosull/event-storming-workshop-building-noteworthy-9

## Have you Introduced DDD to your company in the past?
As people went in we asked them if they had tried to introduce DDD and how that worked out form, here's a sample of the responses. (apologies for potato quality picture)

![Pic of post-its](https://barryosull.com/images/post-its.jpg)

At this stage there were six responses, three attendees had tried and three had not.

Of the three that tried, two of them succeeded (one on the second attempt) and one of them didn't. The one that failed stated that it was because management and development didn't really engage with the concept (more paying it lip service) and it stalled in its tracks.

Quick bit of honesty, the one that failed the first time and succeeded the second was me. A lot of the information I presented was based on my personal experience with introducing DDD, supplemented by discussions I've had with others since.


## Why are you introducing DDD?
![Why are you introducing DDD slide](https://barryosull.com/images/why-introduce.jpg)

After a brief introduction to the meetup, we asked people why they wanted to introduce DDD to their company. If they want to introduce it, they should be able to articulate why. I presented some of the reasons I usually give, then opened the floor to a discussion on why the attendees wanted to introduce DDD. We broke into groups of 4 and spent 10 minutes discussing, then at the end we articulated our reasons:

### The Reasons
1. Allow us to engage domain experts so we can decouple our software
2. Maintainable designs
3. Avoid DRY on superficial similarity, e.g. Eric Evans Toilet/Sink story
4. Add a public API and build a vocabulary for it
5. Figure out if we need to build software at all

These were really interesting, as there was a clear focus on software, but from different perspectives. Through out the meetup I talked to each group and dive a little further into their answers. I was delighted that I did, here's what we discussed.

### 1. Allow us to engage domain experts so we can decouple our software
This team had a giant monolith that was causing them big headaches. They wanted to break it apart into separate modules that would be easier to manage. The lack of domain knowledge really hindered this, as they had lots of [God objects](https://en.wikipedia.org/wiki/God_object) and didn't know how to split them up. They hoped that gaining domain knowledge would allow them to rename and the split concepts. A solid strategy and a great use for DDD.

### 2. Maintainable designs
This team wanted to build software that was easy to maintain. Their current systems were fine but were far from easy to work with and they knew that they'd just get worse over time. They wanted to introduce DDD so they could build better software that is actually maintainable, instead of a codebase that slowly rots.

### 3. Avoid DRY on superficial similarity, e.g. Eric Evans Toilet/Sink story
This was a great one. This attendee was a CTO and wanted to make sure that devs knew how to build modular code, specifically bounded contexts. A hindrance to this was our over-reliance on DRY, our tendency to aggressively remove duplication. 

You see, sometimes different parts of a system have the similar code, but they have different rates of change. Coupling them together hinders change. The example story told was an Eric Evans' one on toilets and sinks. They both get rid of water in a pipe, so a "smart" developer would notice the similarities and merge the two concepts together, job done. Then later a feature request comes into for a shredder to be installed in the sink. But uhoh, the pipe concepts are merged, so adding a shredder to the sink also adds a shredder to the waste system. Next time the toilets flushed, well ... it doesn't end well. These were the situations they wanted to avoid, and DDD was a way to get that mindset across.

### 4. Create a public API and build a vocabulary for it
An interesting problem. Two of the attendees were tasked with taking an existing legacy system and exposing it's functionality via a HTTP API. This was a mammoth task given the age and size of the codebase, so they wanted to ensure they were exposing it's functionality in a way that made sense while also hiding some of the messier details. They'd heard that DDD could help and I can't help but agree (I recommended they looked into an [Anti-corruption layer](https://docs.microsoft.com/en-us/azure/architecture/patterns/anti-corruption-layer) for a start).

### 5. Figure out if we need to build software at all
Another interesting reason and one that isn't brought up often enough, especially by developers. This group wanted to use DDD to understand the problems the business faced, and what options there were to solve them. Do you need to write software? Can they use existing tools? Can you solve the problem by gluing tools together (e.g. Typeform, Trello and Zapier)? These are the kinds of questions we need to ask and this team wanted to make sure they introduced the right level of complication. Great reasoning and DDD can definitely facilitate it.

## How to Introduce DDD

At this point we moved backed to the slides, which began by looking at "how" you introduce DDD. We knew why, so now we had to figure out how to phrase our "whys" so that the rest of the business would understand the benefit. In otherwords, we had to understand their domain and how we could help them. We had to sell the concept.

![Slide on selling](https://barryosull.com/images/selling-ddd.jpg)

I presented three known techniques that have worked for me in the past. Click the links beside the techniques for more details.

1. Event Storming session:
    - The concept: https://www.eventstorming.com/
    - Tips: https://slides.com/barryosull/event-storming-workshop-building-noteworthy-9#/10
2. Talk to the domain experts:
     - The concept: https://www.quora.com/What-does-it-mean-to-be-a-domain-expert
     - Tips: https://slides.com/barryosull/event-storming-workshop-building-noteworthy-9#/12
3. Separate Domain Code from Infra Code:
    - The concept: https://barryosull.com/blog/cleaning-up-your-codebase-with-a-clean-architecture/
    - Tips: https://slides.com/barryosull/event-storming-workshop-building-noteworthy-9#/14

With those three techniques highlighted we then had a short break for food and beverages, then went back for the final discussion session.

## Mapping your Why to a How

![Slide on last discussion](https://barryosull.com/images/how-to-introduce.jpg)

This is what it all leading up to. We wanted attendees to discuss their problems (their "why") and then figure out how they could introduce it (the "how"). We gave this session about 25 minutes with teams of 4 to 5, at the end each team presented their technique for introducing DDD, be it one they've tried already or one that they thought would work in their context. This is what we ended up with:

1. I started writing ValueObjects and it snowballed from there (love this one)
2. Micro-services are not an end goal, they're a technique along the way
3. Identify the contexts that will change per feature, allows you to understand/demonstrate cost
4. DDD is slower initially, like any new idea or techiques, make this cost known up front
5. Wait for pain, use DDD to solve it. Demonstrate the value

I was delighted with these, great suggestions from different perspectives yet again. As before, we discussed each further with the groups, here's what we gathered.

### 1. I started writing ValueObjects and it snowballed from there 
This one was hilarious and completely honest. The attendee in question was originally a dev at a company and wanted to improve their ball of mud, so he started introducing value objects to bring at least a little bit of clarity. It kinda snowballed from there, with him introducing more and more DDD concepts over time, slowly massaging the messy system until it started to make more sense. This didn't go unnoticed and when his dev manager left, he was made head of dev and he is still applying those practices today. This just goes to show that you don't need the entire team to be behind it, you just need to demonstrate the value.

### 2. Micro-services are not an end goal, they're a technique along the way
Now this one was different. This group was in the process of migrating from a monolith to a micro-service architecture and they were noticing problems with it. The main issue was that having micro-services was considered the end goal, it didn't seem to matter if these services mirrored the actual domain and allowed greater agility in the business. They realised they could sell DDD by focusing on the agility and clarity it brings and how it naturally leads to micro-services as a byproduct, rather than micro-services being the objectice from the start. Definitely agree with this one, you need a vision for your architecture, and "micro-services" are not a vision, they're a strategy to enable a vision. DDD can help define and clarify that vision.

### 3. Identify the contexts that will change per feature, allows you to understand/demonstrate cost
This team decided to focus on cost first. If they could demonstrate how DDD could help the business understand how difficult/expensive a feature will be to implement, then management will be able to make better decisions. This demonstrates the value of DDD straight away. Contexts were chosen as the starting point, as that was the DDD concept they thought would help the company the best. Contexts are a great way to classify a system, understand its boundaries and its upstream/downstream dependencies. By defining the contexts they would be able to demonstrate how complicated a change is. A great way to introduce DDD.

### 4. DDD is slower initially, like any new idea or techniques, make this cost known up front
Thought this was an odd one, at least initially. The team was thinking about how they'd introduce it and wondering how much it would affect things upon introduction. We all agreed that introducing a new way of doings things would slow down development, there's always a learning curve. The idea was to demonstrate that the cost of this is far out weighed by the benefits over time. This team felt that quantifying the cost in some way would help show management that you're not just hyping up the latest sexy silver bullet, instead they actually understand the costs and have factored them into the pitch. I think this a solid idea and can only help but improve your chances of the concept being embraced.

### 5. Wait for pain, use DDD to solve it. I.e. demonstrate the value
Another great one. The simplest way to demonstrate value is to solve a problem. But how do we find problems? Well, we don't, they'll find us, masquerading as the feeling of pain. When something goes wrong, or someone complains, that pain is a sign of a problem in the system, something went wrong or is getting in the way (bugs are the obvious example). This is where you use DDD and discuss the pain with those affected, figure out how you could solve it, using the language of the business and the techniques offered by DDD. It's a great way to get your foot in the door and for you to get direct access to the business owners. Once you do this and solve problems it just greases the wheels towards it happening more often. I've seen this in action and it works great.

## Ending the meetup
At this point we reviewd the above and ended the meetup. Some of us went for a drink and discussed concepts further, but nothing strongly related to the above. We had a chat about event broadcasting and bounded context, should you share domain events (the answer we all agreed on was "no"). 

Overall it was a fantastic meetup and I hope to have another like it soon. I felt that the above was far too useful to keep to ourselves and I wanted to share it with others. Thanks to all that attended and to all those that read the above, I appreciate your time.