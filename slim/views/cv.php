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
    background-color: #263f71;
    color: #fff;
    margin: -1cm -1.5cm 0 -1.5cm;
    padding: 1cm 1.5cm 0.2cm 1.5cm;
}

.two-col {
    display: flex;
    justify-content: space-between;
}

h2 {
    border-bottom: 1px solid #263f71;
    color: #263f71;
}

#headshot {
    height: 3cm;
    padding-right: 0.7cm;
    flex: 0 0 3cm;
    border-radius: 4px;
}

.details {
    flex-grow: 4;
}

.details h1 {
    margin-top: 0;
    display: inline-block;
    padding-right: 1cm;
    font-size: 24px;
}

.details h2 {
    display: inline-block;
    font-size: 12px;
    float: right;
    margin-top: 0.26cm;
    color: #fff;
}

.links {
    display: flex;
    justify-content: space-between;
}

.contact {
    text-align: right;
}

.highlights {
    text-align: center;
    margin: 0.5cm 0.25cm 0.25cm;
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
            <img alt="Headshot" src="/images/me.jpg" id="headshot">
            <div class="details">
                <h1>Barry O’Sullivan</h1>
                <h2>86 Meadowgate, Gorey, Co. Wexford</h2>
                <div class="links">
                    <div>
                        Github: https://github.com/barryosull<br/>
                        Website: https://barryosull.com<br/>
                        LinkedIn: http://ie.linkedin.com/in/barryosu/
                    </div>
                    <div class="contact">
                        Email: barry@tercet.io<br/>
                        Phone: 086 8045104<br/>
                        Twitter: @barryosull
                    </div>
                </div>
            </div>
        </div>
        <div class="highlights">Software Engineer - Architect - DDD Practitioner - Conference Speaker - PHP Dublin Organiser</div>
    </div>
    <div class="body">
        <div class="section">
            <h2>About me</h2>
            <p>Experienced software developer that has built, maintained & extended high traffic web applications. I've architected and implemented many products and have extensive experience working in existing codebases and improving quality. I am passionate about building software effectively. For the last three years I have been working as a contractor to hone my skills at refactoring and improving legacy systems, now I'm ready to take those skills and apply them in bigger ways.
            </p>
        </div>
        <div class="section">
            <h2>Skills</h2>
            <div class="skills">
                <div>
                    <h3>Development</h3>
                    <ul>
                        <li>PHP (15yr)</li>
                        <li>MySQL (15yr)</li>
                        <li>HTML/CSS (15yr)</li>
                        <li>Javascript (12yr)</li>
                    </ul>
                </div>
                <div>
                    <h3>Processes</h3>
                    <ul>
                        <li>CI/CD</li>
                        <li>Agile development</li>
                        <li>Kanban</li>
                        <li>Scrum</li>
                        <li>Event Storming</li>
                    </ul>
                </div>
                <div>
                    <h3>Architecture/Design</h3>
                    <ul>
                        <li>Legacy refactoring</li>
                        <li>Service extraction</li>
                        <li>Event Sourcing</li>
                        <li>TDD</li>
                        <li>DDD</li>
                    </ul>
                </div>
                <div>
                    <h3>Frameworks</h3>
                    <ul>
                        <li>Laravel</li>
                        <li>CodeIgniter</li>
                        <li>Zend</li>
                        <li>Slim</li>
                        <li>Express</li>
                    </ul>
                </div>
                <div>
                    <h3>Core skills</h3>
                    <ul>
                        <li>Problem solver</li>
                        <li>Fast learner</li>
                        <li>Goal orientated</li>
                        <li>Documentation</li>
                        <li>Metric driven</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section projects">
            <h2>Projects</h2>

            <h3>Adverts.ie (https://adverts.ie):</h3>
            <ul>
                <li>Replaced entire payment system in prep for SCA with zero downtime</li>
                <li>Designed and implemented cross share functionality with DoneDeal team</li>
                <li>Introduced “Orders” concept iteratively so multiple products could be purchased at</li>
            </ul>

            <h3>Journal.ie (https://thejournal.ie):</h3>
            <ul>
                <li>Rewrote and fixed high traffic view tracking microservice with zero downtime</li>
                <li>Planned and implemented iterative migration of legacy (12yr+) codebase over to responsive layout</li>
                <li>Trained dev team in clean architecture, testing and legacy refactoring</li>
            </ul>
        </div>
        <div class="section employment">
            <h2>Employment</h2>
            <h3>PHP Consultant, Architect & Contractor: 2018 - now</h3>
            <p>
                Self employed contractor. Worked for theJournal.ie, Adverts.ie and Daft.ie. Specialised in legacy web apps, reverse mapping the product and adding new functionality in an iterative, testable and stable manner. Worked with dev managers to upskill their team and improve design/refactoring/architecture skills and processes.
            </p>
            <h3>Lead Developer/Architect: 2016 - 2018</h3>
            <p>
                Architected and implemented an event sourced product in the travel agency space. Upskilled the team in event sourcing and domain exploration, ensuring we had the skills to execute and build a scalable SPA.
            </p>
            <h3>Software Development Manager: 2014 - 2016</h3>
            <p>
                Managed the development of a new recruiting application for HiUp. Implemented an event-sourced,  Domain Driven Designed application, with a microservice based architecture. Looked after all aspects of  development, including Android and front-end Javascript.
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
            <p>
                <br/>
                References are available on request
            </p>
        </div>
    </div>
</div>
</body>
</html>