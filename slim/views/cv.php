<!DOCTYPE html>
<html lang="en">
<head>
<title>Barry O'Sullivan's CV</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
<style>

body {
    background: rgb(204,204,204);
    font-family: 'Nunito', sans-serif;
    font-size: 12px;
}

.page {
    background: white;
    width: 21cm;
    height: 29.7cm;
    display: block;
    box-sizing: border-box;
    margin: 0 auto;
    padding: 1cm 1.5cm;
    box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}

@media print {
    body, .page {
        margin: 0;
        box-shadow: none;
    }
}

.header {
    background: rgb(38,63,113);
    background: linear-gradient(120deg, rgba(38,63,113,1) 15%, rgba(27,97,161,1) 100%);
    color: #fff;
    margin: -1cm -1.5cm 0 -1.5cm;
    padding: 0.8cm 1.5cm 0.1cm 1.5cm;
    border-bottom-right-radius: 20px;
}

.two-col {
    display: flex;
    justify-content: space-between;
}

h2 {
    color: #263f71;
}

.body h2 {
    border-bottom: 1px solid #263f71;
}

.details {
    flex-grow: 4;
}

.details h1 {
    margin-top: 0;
    margin-bottom: 0.67cm;
    display: inline-block;
    padding-right: 1cm;
    font-size: 24px;
}

.details h2 {
    display: inline-block;
    font-size: 12px;
    float: right;
    margin-top: 0.3cm;
    color: #fff;
}

.links {
    display: flex;
    justify-content: space-between;
    line-height: 20px;
}

.links a {
    color: #fff;
    text-decoration: none;
}

.links a:hover {
    text-decoration: underline;
}

.contact {
    text-align: right;
}

.highlights {
    text-align: left;
    margin: 0.5cm 0cm 0.25cm;
    font-weight: bold;
    font-size: 14px;
}

.body h2 {
    margin-bottom: 0.3cm;
}

.skills {
    display: flex;
    justify-content: space-between;
}

.skills h3 {
    margin-top: 0;
    margin-bottom: 0.1cm;
}

.skills ul {
    padding-left: 0.6cm;
    margin-top: 0.1cm;
    margin-bottom: 0;
}

.projects h3 {
    margin-bottom: 0.1cm;
}

.projects ul {
    margin-top: 0.1cm;
    padding-left: 0.6cm;
}

.employment h3 {
    margin-bottom: 0.1cm;
}

.employment ul {
    margin-top: 0.1cm;
    padding-left: 0.6cm;
}

.education {
    display: flex;
    justify-content: space-between;
}

p {
    text-align: justify;
    margin-top: 0;
}

</style>
</head>
<body>
<div class="page">
    <div class="header">
        <div class="two-col">
            <div class="details">
                <h1>Barry O’Sullivan</h1>
                <h2>86 Meadowgate, Gorey, Co. Wexford</h2>
                <div class="links">
                    <div>
                        Github: <a target="_blank" href="https://github.com/barryosull">https://github.com/barryosull</a><br/>
                        Website: <a target="_blank" href="https://barryosull.com">https://barryosull.com</a><br/>
                        LinkedIn: <a target="_blank" href="https://ie.linkedin.com/in/barryosu/">https://ie.linkedin.com/in/barryosu/</a>
                    </div>
                    <div class="contact">
                        Email: bosulli85@gmail.com<br/>
                        Phone: +353 86 8045104<br/>
                        Bluesky: <a target="_blank" href="https://bsky.app/profile/barryosull.bsky.social">@barryosull</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlights">Software Engineer &bull; Team Lead &bull; Architect &bull; DDD Specialist &bull; Conference Speaker &bull; Event Organiser</div>
    </div>
    <div class="body">
        <div class="section">
            <h2>About me</h2>
            <p>Staff engineer experienced in high traffic financial systems <b>(371M sales PY, &dollar;2.8B in revenue)</b>. Architected &amp; implemented multiple products for companies of all sizes. Works in existing/legacy codebases &amp; elegantly evolving those systems to meet new business needs. I'm empowered by working with &amp; growing team members, as I believe that we can go further together.
            </p>
        </div>
        <div class="section">
            <h2>Skills</h2>
            <div class="skills">
                <div>
                    <h3>Development</h3>
                    <ul>
                        <li>PHP (19yr)</li>
                        <li>JAVA (10yr)</li>
                        <li>SQL (19yr)</li>
                        <li>HTML/CSS (19yr)</li>
                        <li>JS (16yr)</li>
                    </ul>
                </div>
                <div>
                    <h3>Dev Practices</h3>
                    <ul>
                        <li>CI/CD</li>
                        <li>Agile development</li>
                        <li>Scrum/Kanban</li>
                        <li>Event Storming</li>
                        <li>Feature flags</li>
                    </ul>
                </div>
                <div>
                    <h3>Architecture/Design</h3>
                    <ul>
                        <li>Evolutionary design</li>
                        <li>Event Driven</li>
                        <li>Event Sourcing</li>
                        <li>TDD</li>
                        <li>DDD</li>
                    </ul>
                </div>
                <div>
                    <h3>Platforms/Frameworks</h3>
                    <ul>
                        <li>GCP</li>
                        <li>AWS</li>
                        <li>Laravel</li>
                        <li>Spring</li>
                        <li>React</li>
                    </ul>
                </div>
                <div>
                    <h3>Core Competencies</h3>
                    <ul>
                        <li>Goal orientated</li>
                        <li>Metric driven</li>
                        <li>Clear communicator</li>
                        <li>Mentoring</li>
                        <li>Pragmatic design</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section employment">
            <h2>Employment</h2>
            
            <h3>Etsy Payments: Staff Software Engineer on the Payments Compliance &amp; Tax Team (Jun 2021 - Jun 2025)</h3>
            <p>
                Staff engineer &amp; team lead for 9 engineers. Responsible for designing, building, maintaining &amp evolving all tax &amp; payments compliance systems at Etsy. Worked with product/leadership to map deliverables &amp; timelines, with little to no downtime.
            </p>
            <ul>
                <li>PCI 4.0 Compliance: Planned &amp; executed a modular, self contained, React powered, credit card entry system via a micro-service, minimising compliance overhead &amp; ensuring 2025. certification and <b>&dollar;2.8B in revenue</b></li>
                <li>1099k Compliance: Ensured <b>5.1M US sellers</b> have verified SSN/EINs to meet new legislation under tight time constraints, required full map of legacy systems and extensive refactoring. Automated all generation of 1099ks.
                <li>Bank Account Verification: Integrated with Plaid and <b>reverfified 1.8M bank accounts</b> in 6 months. In-depth system mapping, UI changes, refactoring, customer communication, real-time tracking/monitoring, leading to no loss in revenue.
                <li>Inform Act: Reimplemented our identity system with product to gather required data for <b>5M US sellers</b>, analsyed disparate data sources and discovered/fixed numerous security holes and compliance oversights</li>
                <li>Tax Calculation: Integrated with Vertex, sending nuanced contextual information (ask me about Canada), ensuring orders are taxed appropriately in real-time for countires worldwide, with <b>950M requests PY.</b></li>
            </ul>

            <h3>PHP Consultant, Architect & Contractor (Mar 2018 - Jun 2021)</h3>
            <p>
                Independent consultant for theJournal.ie, Adverts.ie &amp; Daft.ie, all highly regarded &amp; high traffic Irish websites. Specialised in legacy web apps, reverse mapping product behaviour &amp; adding new functionality in an iterative, testable &amp; stable manner. Liased with dev managers to upskill their team in design, refactoring &amp; architecture skills.
            </p>
            <ul>
                <li>SCA Compliance: Replaced entire payment system with Stripe 2FA iteratively with zero downtime.</li>
                <li>Cross-selling: Designed & executed a highly profitable, async message backed, cross share system between products</li>
                <li>Upsells: Introduced “Orders” iteratively to web &amp; mobile apps so multiple products/upsells could be purchased at once.</li>
                <li>Responsive Migration: Planned &amp; implemented iterative migration of legacy (12yr+) codebase to responsive layouts.</li>
                <li style="display: none;"> Training: Upskilled dev team in clean architecture, testing &amp; legacy refactoring.</li>
            </ul>
            <h3>Dynamic Reservations: Lead Engineer/Architect (Apr 2016 - Mar 2018)</h3>
            <p>
                Architected an event sourced product, leading 5 engineers, in the travel agency space. Upskilled the team in event sourcing &amp; domain exploration, ensuring we had the skills to execute &amp; build a scalable SPA.
            </p>
        </div>
        <div class="section">
            <h2>Education</h2>
            <div class="education">
                <div>
                    Trinity College Dublin (2008 - 2009)<br/>
                    Msc Computer Science
                </div>
                <div>
                    Trinity College Dublin (2004 - 2008)<br/>
                    BA(mod) Computer Science
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
