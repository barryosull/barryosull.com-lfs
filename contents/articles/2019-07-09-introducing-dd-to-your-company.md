
---
title: "Introducing DDD to your Company"
published: false
description: DDD is about enabling developers and business owners to work together on a collaborative model, but how do you introduce the concept?
tags: ddd, architecture, software-design
cover_image: /images/ddd-introducing-banner.jpg
---

The following are my notes from the last DDD IE meetup, 6th June 2019, on how to introduce DDD to your company. This meetup was mostly about the discussions we had amongst ourserlves and I wanted to jot it all down before I forget, there was some great stuff in there, the kind that can only happens through discussion and collaboration.

First off, the meetup itself was structured as half talk, have group discussion, with discussion interspered throughout the slides. We've done a few of these style of meetups in the past and they've worked out really well. We had a full house, which was great, a lot of people interested in the topic.

[Pic of attendees]()

As people went in we asked them if they had tried to introduce DDD and how it went, here's a sample of the responses. (apologies for potato quality picture)

[Pic of postits]()

At this stage there were six responses, three attendess had tried and three hadn't. 

Of the three that tried, two of them succeeded (one on the second attempt) and one of them didn't. The one that failed stated that it was because management and development didn't really engage with the concept (more paying it lip service) and it stalled in its tracks.

Quick bit of honesty, the one that failed the first time and succeeded the second was me. A lot of the information I presented was based on my personal experience with introducing DDD, supplemented by discussions I've had with others since.

[Why are you introducing DDD slide]()

After a brief introduction to the meetup, we asked people why they wanted to introduce DDD to their company. If they want to introduce it, they should be able to articulate why. I presented some of the reasons I usually give, then opened the floor to a discussion on why the attendees wanted to introduce DDD. We broke into groups of 4 and spent 10 minutes discussing, then at the end we articulated out the reasons:

1. Allow us to engage domain experts so we can decouple our software
2. Maintainable designs
3. Avoid DRY on superficial similarity, e.g. Eric Evans Tiolet/Sink story
4. Add a public API and build a vocabulary for it
5. Figure out if we need to build software at all

These were really interesting, as there was a clear focus on software, but from different perspectives. Throught the meetup I talked to each group and dive a little further into their answers. I was delighted that I did, here's what we discussed.

1. Allow us to engage domain experts so we can decouple our software
This team had a giant monolith that was causing them big headaches. They wanted to break it apart into separate modules that would be easier to manage. The lack of domain knowledge really hindered this, as they had lots of God classes and didn't know how to split them up. They hoped that gaining domain knowledge would allow them to rename and the split concepts. A solid strategy I must say.

2. Maintainable designs
This team wanted to build software that was easy to maintain. Their current systems were fine but were far from easy to work with and they knew that they'd just get worse over time. They wanted to introduce DDD so they could build better software that is actually maintianable, instead of a codebase that slowly rots.

3. Avoid DRY on superficial similarity, e.g. Eric Evans Tiolet/Sink story
This was a great one. This attendee was a CTO and wanted to make sure that devs knew how to build modular code, specifically bounded contexts. A hindrance to this was our over-reliance on DRY, our tendency to remove duplication too aggressively. Sometimes different parts of a system have the similar code, but they have different rates of change. Coupling them together hinders change. The example story told was an Eric Evans' one on toilets and sinks. They both get rid of water in a pipe, so a "smart" developer would notice the similarities and merge the two concepts together, job done. Then later a feature request comes into for a shredder to be installed in the sink. But uhoh, the pipe concepts are merged, so adding a shredder to the sink also adds a shredder to the waste system. Next time the toilets flushed, well ... it doesn't end well. These were the situations they wanted to avoid, and DDD was a way to get that mindset across.

4. Create a public API and build a vocabulary for it
An interesting problem. Two of the attendees were tasked with taking an existing legacy system and exposing it's functionalty via an HTTP API. This was a mammoth task given the age and size of the codebase, so they wanted to ensure they were exposing it's functionality in a way that made sense while also hiding some of the messier details. They'd heard that DDD could help and I can't help but agree (I recommended they looked into an Anti-corruption layer for a start).

5. Figure out if we need to build software at all
Another interesting reason and one that isn't brought up often enough, especially by developers. This group wanted to use DDD to understand the problems the business faced, and what options there were to solve them. Do you need to write software? Can they use existing tools? Can you solve the problem by gluing tools together (e.g. Typeform, Trello and Zapier)? These are the kinds of questions we need to ask and this team wanted to make sure they introduced the right level of complication. Great reasoning and DDD can definitely fascilitate it.

At this point we moved backed to the slides, which began by looking at "how" you introduce DDD. We knew why, so now we had to figure out how to phrase our "whys" so that the rest of the business would understand the benefit. In otherwords, we had to understand their domain and how we could help them. We had to sell the concept.

[Slide on selling]()

I presented three known techniques that have worked for me in the past. Click the links beside the techniques for more details (not really the focus of these, the content is already there).

1. Event Storming session (more..)
2. Talk to the domain experts (more..)
3. Separate Domain Code from Infra Code (more..)

With those three techniques highlighted we then had a short break for food and beverages, then went back for the final discussion session.

[Slide on last discussion]()

This is what it all leading up to. We wanted attendees to discuss their problems (their "why") and then figure out ways to introduce it. We gave this session about 25 minutes with teams of 4 to 5, at the end each team presented their technique for introducing DDD, be it one they've tried already or one that they thought would work in their context. This is what we ended up with:

1. I started writing ValueObjects and it snowballed from there (love this one)
2. Microservices are not a goal, they're a stop along the way.
3. Identify the contexts that will change per feature, allows you to understand/demonstrate cost
4. DDD is slower initially, like any new idea or techiques, make this cost known up front
5. Wait for pain, use DDD to solve it. Demonstrate the value

I was delighted with these, great suggestions from different perspectives yet again. As before, we discussed each further with the groups, here's what we gathered.

1. I started writing ValueObjects and it snowballed from there 
This one was hilarious and completely honest. The attendee in question was originally a dev at a company and wanted to improve their ball of mud, so he started introducing value objects to bring at least a little bit of clarity. It kinda snowballed from there, with him introducing more and more DDD concepts over time, slowly massaging the messy system until it started to make more sense. This didn't go unnoticed and when his boss left, he was made head of dev and he is still applying those practices today. This just goes to show that you don't need the entire team to be behind it, you just need to demonstrate the value.

2. Microservices are not a goal, they're a stop along the way. 
Now this one was different. This group was in the process of migrating from a monolith to a microservice architecture and they were noticing problems with it. The main issue was that having microservices was considered the end goal, not whether these services mirroed the actual domain and allowed greater agility in the business. They realised they could sell DDD by focussing on the agility and clarity it brings and how it naturally leads to microservices as a byproduct, rather than microservices being the goal. Definitely agree with this one, you need a vision for your architecture, and "microservices" are not a vision, they're a strategy to enable a vision. DDD can help definte and clarify that vision.

3. Identify the contexts that will change per feature, allows you to understand/demonstrate cost
This team decided to focus on cost first. If they could demonstrate how DDD could help the business understand how difficult/expensive a feature will be to implement, then management will be able to make better decisions. This demonstrates the the value straight away. Contexts were chosen as the starting point, as that was the DDD concept they thought would help the company the best. Contexts are a great way to classify a system, understand its boundaries and its upstream/downstream dependencies. By defining the contexts they would be able to demonstrate how complicated a change is. A great way to introduce DDD.

4. DDD is slower initially, like any new idea or techiques, make this cost known up front
Thought this was an odd one, at least intially. The team was thinking about how they'd introduce it and wondering how much it would affect things initially. We all agreed that introducing and new way of doings things would slow you down, there's always a learning curve. The idea was to demonstrate that the cost of this is far out weighed by the benefit over time. This team felt that quantifying the cost in some way would help show management that you're not just hyping up the latest sexy silver bullet, instead you understand the costs (which everything has) and you've factored it in. I think this a solid idea and can only help but improve your chances of the concept being embraced.

5. Wait for pain, use DDD to solve it. Demonstrate the value
Another great one. The simplest way to demonstate value is to solve a problem, but how do we find problems? We don't, instead we look for pain. When something goes wrong, or someone complains, that pain is a sign of a problem in the system, something went wrong or is getting in the way (bugs are the obious example). This is where you use DDD and discuss the pain with those affected, figure out how you could solve it, using the language of the business and the techniques offered by DDD. It's a great way to get your foot in the door and for you to get direct access to the business owners. It makes that a thing that happens, and it just greases the wheels towards it happening more often. I've seen this in action and it works great.

At this point the meetup ended and most of us went home. Some of us went for a beer and discussed concepts further, but nothing strongly related to the above. We had a chat about event broadcasting and bounded context, should you share domain events (the answer we all agreed on was "no"). Overall it was a fantastic meetup and I hope to have another like it soon. Thanks to all that attended and to all those that read the above, I appreciate your time.