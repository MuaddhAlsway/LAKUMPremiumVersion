<?php require_once 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKUM - About Us</title>
    <link rel="icon" href="assest/logo-lakum- (1).png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
      body{
        margin: 0;
    padding: 0;
    overflow-x: hidden; /* prevent horizontal scroll */
      }
      /* Paragraph */
.bannerrightsideDrivenYourSoul .paragraphbanner p {
  font-size: 20px;
  line-height: 1.3;
  color: #333;
font-family: "Atyp Kido TRIAL";  font-weight: 300;
  max-width: 800px;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  
}

.pastExhibit {
  display: flex;
  flex-direction: row;
 
  margin-left:20px;
  align-items: flex-start;
  gap: 50px;
  justify-content: center;
  flex-wrap: wrap; /* allow wrapping on small screens */
}

/* All images responsive */
.pastExhibit img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

/* Text under images */
.pastExhibit p {
  font-size: 30px;
font-family: "Atyp Kido TRIAL";
  font-weight: 400;
  text-align: left;
  margin-top: 10px;
   overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
}

/* Left and right images */
.pastExhibit .imgleft,
.pastExhibit .imgright {
  flex: 1 1 300px;
  max-width: 400px;
  
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Middle image taller */
.pastExhibit .imgMiddle {
  flex: 1 1 350px;
  max-width: 400px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Individual image heights (desktop default) */
.pastExhibit .imgleft img,
.pastExhibit .imgright img {
  height: 400px;
}

.pastExhibit .imgMiddle img {
  height: 400px;
}
.bannerrightsideDrivenYourSoul .namebanner h2 {
  font-size: 30px;
   overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  margin: 0;
font-family: "Atyp Kido TRIAL";  font-weight: 300;
}
 .bannerrightsideDrivenYourSoul .paragraphbanner p {
    font-size: 14px;  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  }
.COVERAboutUsPageLukum .rightColumnPage .titleCoverAboutUsLakum p {
  font-size: 26px;
  font-family: 'Atyp Kido TRIAL', sans-serif;
  font-weight: 300;
  margin: 0;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
}

        /* ====== Mobile (375px and below) ====== */

/* ====== Mobile (414px and below) ====== */

/* ====== Mobile (430px and below) ====== */

/* ====== Tablets (820px and below) ====== */

/* ====== Large screens (1440px and below) ====== */
@media (max-width: 1440px) {
  .bannerAhmedMatter {
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1440px;
    height: 600px; /* slightly smaller banner height */
    margin: 60px auto;
    gap: 30px;
    padding:0px;
    box-sizing: border-box;
    background-color: #000;
  }

  .bannerleftside {
    flex: 1 1 500px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    padding-left: 60px;
    margin-top: 100px; /* reduced top margin */
  }

  .bannerleftside .date p {
    font-size: 32px;
    margin: 0;
    font-family: "Atyp Kido TRIAL";
    color: #fff;
  }

  .bannerleftside .name h2 {
    font-size: 35px;
    font-family: "Atyp Kido TRIAL";
    font-weight: 400;
    margin: 0;
     overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 4; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
    color: #fff;
  }

  .bannerleftside .year p {
    font-size: 48px;
    font-family: "Atyp Kido TRIAL";
    font-weight: 400;
    margin: 0;
    color: #fff;
  }

  .bannerrightside {
    flex: 1 1 700px;
    height: 600px; /* matches banner height */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
   
  }
   .FOOTER1 {
    padding: 80px 60px;       /* more padding for ultra-wide */
  }

  .footer-container {
    max-width: 2000px;        /* allow footer content to stretch */
    gap: 50px;                /* more space between sections */
  }

  .footer-logo img {
    width: 160px;             /* larger logo */
  }

  .MenuFooter ul {
    gap: 30px;                /* larger spacing between links */
  }

  .MenuFooter a {
    font-size: 18px;          /* increase link size */
  }

  .social-icons a {
    font-size: 28px;          /* scale up social icons */
    margin: 0 15px;           /* more spacing */
  }

  .footer-bottom {
    font-size: 18px;          /* bigger footer text */
    padding-top: 25px;
  }
}

@media(max-width: 1366px){
  .titleCoverAboutUsLakum{
    width: 82%;
  }
  .titleCoverAboutUsLakum p { font-size: 20px;   }
  .COVERAboutUsPageLukum .rightColumnPage {
    display: flex;
    flex-direction: column;
    width: 400px;
    gap: 6px;
    justify-content: center;
}
.COVERAboutUs .rightColumn {
    display: flex;
    flex-direction: column;
    gap: 8px;
    width: 100%;
     justify-content: center; 
     align-items: flex-start;    
    padding-left: 0px;
}
}
@media (max-width: 1024px) {
  .bannerAhmedMatter {
    flex-direction: row;
    height: 500px;
    padding: 0 30px;
    gap: 25px;
  }

  .bannerleftside {
    flex: 1 1 400px;
    padding-left: 40px;
    margin-top: 80px;
    gap: 14px;
  }

  .bannerleftside .date p {
    font-size: 28px;
  }

  .bannerleftside .name h2 {
    font-size: 50px;
  }

  .bannerleftside .year p {
    font-size: 42px;
  }
.bannerrightside {
  flex: 1 1 500px;
  height: 500px;
  margin-right: -30px; /* add space from right */
}

.bannerleftside .name h2{
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
}
}
@media (max-width: 1024px) and (min-width: 768px) {
  .bannerDrivenYourSoul {
    flex-direction: row;
    height: auto;
    gap: 20px;
  }
  .bannerleftsideDrivenYourSoul,
  .bannerrightsideDrivenYourSoul {
    width: 100%;
  }
  .bannerleftsideDrivenYourSoul {
    height: 300px;
  }
  .bannerDrivenYourSoul .bannerrightsideDrivenYourSoul .paragraphbanner p {
  font-size:18px;
  line-height: 1.3;
  color: #333;
font-family: "Atyp Kido TRIAL";  font-weight: 300;
  max-width: 800px;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  
}
}
/* ===== Responsive: 820px ===== */
@media (max-width: 820px) {
  .bannerAhmedMatter {
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: auto;
    gap: 20px;
    padding: 0 20px;
  }

  .bannerleftside {
    flex: 1 1 100%;
    padding-left: 0;
    margin-top: 60px;
    gap: 12px;
    text-align: center;
  }

  .bannerleftside .date p {
    font-size: 24px;
  }

  .bannerleftside .name h2 {
    font-size: 42px;
     overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  }

  .bannerleftside .year p {
    font-size: 36px;
  }

  .bannerrightside {
    flex: 1 1 100%;
    height: 350px;
  }
}
@media (max-width: 820px) {
 
  .upcomingContianerAboutUs {
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 30px;
    margin: 60px 0px;
  }

  .upcomingEventAboutUsPage {
    padding: 10px 16px;
  }

  .ComingEventContainerAboutUsPage {
    max-width: 90%;
    width: 100%;
  }

  .imgHeaderAboutUsPage img {
    width: 100%;
    height: auto;
    max-height: 300px;
    object-fit: cover;
    border-radius: 10px;
  }

  .COVERAboutUsPageLukum {
    position: relative;
    width: 95%;
    flex-direction: column;
    align-items: flex-start;
    background: #f6f6eb;
    gap: 14px;
    padding: 18px;
    box-sizing: border-box;
  }

  /* Left column */
  .COVERAboutUsPageLukum .leftColumnPage {
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 12px;
    min-width: unset;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs p {
    font-size: 26px;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs .pnumber {
    font-size: 44px;
  }

  /* Right column */
  .COVERAboutUsPageLukum .rightColumnPage {
    gap: 8px;
  }

  .COVERAboutUsPageLukum .rightColumnPage .titleCoverAboutUsLakum p {
    font-size: 22px;
    line-height: 1.3;
  }

  .COVERAboutUsPageLukum .rightColumnPage .timeAboutUsLAKUM p {
    font-size: 16px;
  }

  .COVERAboutUsPageLukum .rightColumnPage .dateCoverAboutUsLAKUM p {
    font-size: 13px;
  }
}
/* ===== Responsive: 768px ===== */
@media (max-width: 768px) {
  .bannerAhmedMatter {
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    height: auto;
    gap: 15px;
    padding: 0 15px;
  }

  .bannerleftside {
    flex: 1 1 100%;
    padding-left: 0;
    margin-top: 40px;
    gap: 10px;
    text-align: center;
  }

  .bannerleftside .date p {
    font-size: 20px;
  }

  .bannerleftside .name h2 {
    font-size: 36px;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  }
  .COVERAboutUs .titleCoverAboutUs p {
    font-size: 20px;
    line-height: 1.3;
     overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  }
  .bannerleftside .year p {
    font-size: 32px;
  }

  .bannerrightside {
    flex: 1 1 100%;
    height: 300px;
  }
}
@media(max-width:540px){
        .bannerrightsideDrivenYourSoul .namebanner h2 {
    font-size: 20px;
  width: 100%;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; 
  -webkit-box-orient: vertical;
  }
    .bannerrightsideDrivenYourSoul .paragraphbanner p  {
    
  width: 100%;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2; 
  -webkit-box-orient: vertical;
  }
}
@media (max-width: 430px) {
  .upcomingContianerAboutUs {
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin: 40px 0px;
  }

  .upcomingEventAboutUsPage {
    padding: 10px 14px;
  }

  .ComingEventContainerAboutUsPage {
    max-width: 100%;
    width: 100%;
  }

  .imgHeaderAboutUsPage img {
    width: 100%;
    height: auto;
    max-height: 260px;
    object-fit: cover;
    border-radius: 10px;
  }

  .COVERAboutUsPageLukum {
    position: relative;
    width: 100%;
    flex-direction: column;
    align-items: flex-start;
    background: #f6f6eb;
    gap: 14px;
    padding: 14px;
    box-sizing: border-box;
  }

  /* Left column */
  .COVERAboutUsPageLukum .leftColumnPage {
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 12px;
    min-width: unset;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs p {
    font-size: 22px;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs .pnumber {
    font-size: 36px;
  }

  /* Right column */
  .COVERAboutUsPageLukum .rightColumnPage {
    gap: 6px;
  }

  .COVERAboutUsPageLukum .rightColumnPage .titleCoverAboutUsLakum p {
    font-size: 19px;
    line-height: 1.3;
  }

  .COVERAboutUsPageLukum .rightColumnPage .timeAboutUsLAKUM p {
    font-size: 15px;
  }

  .COVERAboutUsPageLukum .rightColumnPage .dateCoverAboutUsLAKUM p {
    font-size: 13px;
  }
    .bannerrightsideDrivenYourSoul .namebanner h2 {
    font-size: 20px;
  width: 100%;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; 
  -webkit-box-orient: vertical;
  }
    .bannerrightsideDrivenYourSoul .paragraphbanner p  {
    
  width: 100%;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; 
  -webkit-box-orient: vertical;
  }
}
@media (max-width: 414px) {
  .upcomingContianerAboutUs {
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 0px;
    width: 100%;
  
  }

  .upcomingEventAboutUsPage {
    padding: 8px 12px;
  }

  .ComingEventContainerAboutUsPage {
    max-width: 100%;
    width: 100%;
  }

  .imgHeaderAboutUsPage img {
    width: 100%;
    height: auto;
    max-height: 250px;
    object-fit: cover;
    border-radius: 8px;
  }

  .COVERAboutUsPageLukum {
    position: relative;
    width: 100%;
    flex-direction: column;
    align-items: flex-start;
    background: #f6f6eb;
    gap: 12px;
    padding: 12px;
    box-sizing: border-box;
  }

  /* Left column */
  .COVERAboutUsPageLukum .leftColumnPage {
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 10px;
    min-width: unset;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs p {
    font-size: 20px;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs .pnumber {
    font-size: 34px;
  }

  /* Right column */
  .COVERAboutUsPageLukum .rightColumnPage {
    gap: 5px;
  }

  .COVERAboutUsPageLukum .rightColumnPage .titleCoverAboutUsLakum p {
    font-size: 18px;
    line-height: 1.3;
      overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  width: 200px;

  }

  .COVERAboutUsPageLukum .rightColumnPage .timeAboutUsLAKUM p {
    font-size: 14px;
    
  }

  .COVERAboutUsPageLukum .rightColumnPage .dateCoverAboutUsLAKUM p {
    font-size: 12px;
  }
  .driveyoursoul .titledriveyoursoul h4{
  font-size: 25px;
}
 .bannerrightsideDrivenYourSoul .namebanner h2{
  
  width: 100%;  
}
  .bannerrightsideDrivenYourSoul{
    text-align: center;
  }
  .bannerrightsideDrivenYourSoul .namebanner h2 {
    text-align: center;
    align-items: center;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; 
  -webkit-box-orient: vertical;
  width: 100%;
  }
    .bannerrightsideDrivenYourSoul .paragraph h2 {
    font-size: 22px;
    overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; 
  -webkit-box-orient: vertical;
  width: 100%;
  }


}
@media (max-width: 375px) {
  .upcomingContianerAboutUs {
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin: 30px 0px;
  }

  .upcomingEventAboutUsPage {
    padding: 5px 10px;
  }

  .ComingEventContainerAboutUsPage {
    max-width: 100%;
    width: 100%;
  }

  .imgHeaderAboutUsPage img {
    width: 100%;
    height: auto;
    max-height: 220px;
    object-fit: cover;
    border-radius: 6px;
  }

  .COVERAboutUsPageLukum {
    position: relative;
    width: 100%;
    flex-direction: column;
    align-items: flex-start;
    background: #f6f6eb;
    gap: 10px;
    padding: 10px;
    box-sizing: border-box;
  }

  /* Left column */
  .COVERAboutUsPageLukum .leftColumnPage {
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 8px;
    min-width: unset;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs p {
    font-size: 18px;
  }

  .COVERAboutUsPageLukum .leftColumnPage .dateAboutUs .pnumber {
    font-size: 30px;
  }

  /* Right column */
  .COVERAboutUsPageLukum .rightColumnPage {
    gap: 4px;
  }

  .COVERAboutUsPageLukum .rightColumnPage .titleCoverAboutUsLakum p {
    font-size: 16px;
    line-height: 1.2;
  }

  .COVERAboutUsPageLukum .rightColumnPage .timeAboutUsLAKUM p {
    font-size: 13px;
  }

  .COVERAboutUsPageLukum .rightColumnPage .dateCoverAboutUsLAKUM p {
    font-size: 11px;
  }
}

    </style>
</head>
<body>
    <div class="headerContainer">
        <i class="ri-menu-line"></i>
        <i class="ri-close-line"></i>
        <div class="logo">
            <img src="assest/logo-lakum- (1).png" alt="">
        </div>
        <div class="MenuHeader">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="AboutUs.php">ABOUT US</a></li>
                <li><a href="Space.php">LAKUM SPACES</a></li>
                <li><a href="HomeLukum.php">EXHIBITIONS</a></li>
                <li><a href="HomeLukum.php#upcoming">EVENTS & WORKSHOPS</a></li>
                <li><a href="Calender.php">CALENDER</a></li>
                <li><a href="Space.php#form">SHOP</a></li>    
            </ul>
        </div>
    </div>

    <div class="HomeContainer">
        <img src="assest/img-4.png" alt="">
    </div>

    
<div class="previousEventContainer">
        <div class="titlePreviousEventWrapper">
            <h4>PREVIOUS EXHIBITION</h4>
        </div>
<div class="pastExhibit" id="recentEvents">
        <!-- 3 most recent/closest events will be loaded here -->
    </div>
</div>      
    </div>
    <section class="bannerAhmedMatter" id="closestEvent">
        <!-- Closest event will be loaded here -->
    </section>

    <div class="driveyoursoul">
        <div class="titledriveyoursoul">
            <h4>Driven by Soul, Made by hands</h4>
        </div>
        <div class="higlightdriveyoursoul">
            <p>Explore our previous exhibitions</p>
        </div>
        <div class="buttonDiscoverMoreDriveYourSoul">
            <button><a href="Space.html#form">DISCOVER MORE</a></button>
        </div>
    </div>

    <div class="upComingExhibitions">
        <hr class="line">
        <div class="titleExhibitions">
            <h4>UPCOMING EXHIBITIONS</h4>
        </div>
    </div>

    <div class="bannerDrivenYourSoul" id="upcomingBanner">
        <!-- Closest upcoming event will be loaded here -->
    </div>

    <div class="upcomingContianerAboutUs" id="nextTwoEvents">
        <!-- Next 2 upcoming events will be loaded here -->
    </div>

    <div class="ContainerYourown">
        <div class="titleYourown">
            <h4>CREATE YOUR OWN EVENT</h4>
        </div>
        <div class="buttonDiscoverMoreYourown">
            <button>DISCOVER MORE</button>
        </div>
    </div>

    <footer class="FOOTER1">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="assest/logo-lakum- (1).png" alt="">
            </div>
            <div class="MenuFooter">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="AboutUs.php">ABOUT US</a></li>
                    <li><a href="Space.php">LAKUM SPACES</a></li>
                    <li><a href="HomeLukum.php">EXHIBITIONS</a></li>
                    <li><a href="HomeLukum.php#upcoming">EVENTS & WORKSHOPS</a></li>
                    <li><a href="Calender.php">CALENDER</a></li>
                    <li><a href="Space.php#form">SHOP</a></li>
                </ul>
            </div>
            <div class="social-icons">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-fill"></i></a>
                <a href="#"><i class="ri-twitter-x-fill"></i></a>
                <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 LAKUM. All rights reserved.</p>
        </div>
    </footer>

    <script src="Home.js"></script>
    <script>
        // Load most recent past events (up to 3, but only as many as exist)
        console.log('AboutUs.php: Loading pastExhibit section...');
        fetch('api/get_events.php?type=past&limit=3')
            .then(response => response.json())
            .then(events => {
                console.log('pastExhibit: Loaded', events.length, 'past events', events);
                const container = document.getElementById('recentEvents');
                container.innerHTML = '';
                
                if (events.length === 0) {
                    container.innerHTML = '<p style="text-align: center; padding: 40px; color: #666;">No past events yet.</p>';
                    return;
                }
                
                events.forEach((event, index) => {
                    const className = index === 0 ? 'imgleft' : index === 1 ? 'imgMiddle' : 'imgright';
                    container.innerHTML += `
                        <div class="${className}" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                            <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                            <p>${event.title}</p>
                        </div>
                    `;
                });
                console.log('pastExhibit: Rendered successfully');
            })
            .catch(error => console.error('pastExhibit: Error loading events', error));

        // Load closest event for banner
        console.log('AboutUs.php: Loading bannerAhmedMatter section...');
        fetch('api/get_events.php?type=closest&limit=1')
            .then(response => response.json())
            .then(events => {
                console.log('bannerAhmedMatter: Loaded', events.length, 'event(s)', events);
                if (events.length > 0) {
                    const event = events[0];
                    const container = document.getElementById('closestEvent');
                    
                    // Format date range
                    const dateRange = `${event.day} ${event.month_short.toUpperCase()} - ${event.day} ${event.month_short.toUpperCase()}`;
                    
                    container.innerHTML = `
                        <div class="bannerleftside">
                            <div class="date"><p>${dateRange}</p></div>
                            <div class="name"><h2>${event.title}</h2></div>
                            <div class="year"><p>${event.year}</p></div>
                        </div>
                        <div class="bannerrightside" style="background-image: url('${event.cover_image || 'assest/img-3.JPG'}');"></div>
                    `;
                    container.style.cursor = 'pointer';
                    container.onclick = () => window.location.href = `event-detail.php?id=${event.id}`;
                    console.log('bannerAhmedMatter: Rendered event -', event.title);
                } else {
                    document.getElementById('closestEvent').innerHTML = '<p style="text-align: center; padding: 40px;">No upcoming events yet.</p>';
                    console.log('bannerAhmedMatter: No events found');
                }
            })
            .catch(error => console.error('bannerAhmedMatter: Error loading event', error));

        // Load upcoming banner (closest upcoming event)
        console.log('AboutUs.php: Loading bannerDrivenYourSoul section...');
        fetch('api/get_events.php?type=closest&limit=1')
            .then(response => response.json())
            .then(events => {
                console.log('bannerDrivenYourSoul: Loaded', events.length, 'event(s)', events);
                if (events.length > 0) {
                    const event = events[0];
                    const container = document.getElementById('upcomingBanner');
                    
                    // Format date
                    const dateStr = `${event.day} ${event.month_short.toUpperCase()}`;
                    
                    container.innerHTML = `
                        <div class="bannerleftsideDrivenYourSoul" style="background-image: url('${event.cover_image || 'assest/img-3.JPG'}');"></div>
                        <div class="bannerrightsideDrivenYourSoul">
                            <div class="datebanner"><p>${dateStr}</p></div>
                            <div class="namebanner"><h2>${event.title}</h2></div>
                            <div class="yearbanner"><p>${event.year}</p></div>
                            <div class="paragraphbanner"><p>${event.description || 'Discover this amazing exhibition showcasing contemporary art and culture.'}</p></div>
                            <div class="buttonDiscoverMoreDriveYourSoulCoverBanner">
                                <button onclick="window.location.href='event-detail.php?id=${event.id}'"><a href="event-detail.php?id=${event.id}">DISCOVER MORE</a></button>
                            </div>
                        </div>
                    `;
                    console.log('bannerDrivenYourSoul: Rendered event -', event.title, 'with description:', event.description);
                } else {
                    document.getElementById('upcomingBanner').innerHTML = '<p style="text-align: center; padding: 40px;">No upcoming events yet.</p>';
                    console.log('bannerDrivenYourSoul: No events found');
                }
            })
            .catch(error => console.error('bannerDrivenYourSoul: Error loading event', error));

        // Load next 2 upcoming events (or as many as exist)
        console.log('AboutUs.php: Loading upcomingContianerAboutUs section...');
        fetch('api/get_events.php?type=closest&limit=3')
            .then(response => response.json())
            .then(events => {
                console.log('upcomingContianerAboutUs: Loaded', events.length, 'total events', events);
                const nextTwo = events.slice(1, 3); // Skip first (already shown in banner), get next 2
                console.log('upcomingContianerAboutUs: Showing next 2 events:', nextTwo);
                const container = document.getElementById('nextTwoEvents');
                container.innerHTML = '';
                
                if (nextTwo.length === 0) {
                    container.innerHTML = '<p style="text-align: center; padding: 40px; color: #666;">No more upcoming events.</p>';
                    console.log('upcomingContianerAboutUs: No additional events to show');
                    return;
                }
                
                nextTwo.forEach(event => {
                    container.innerHTML += `
                        <div class="upcomingEventAboutUsPage" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                            <div class="ComingEventContainerAboutUsPage">
                                <div class="imgHeaderAboutUsPage">
                                    <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                                    <div class="COVERAboutUsPageLukum">
                                        <div class="leftColumnPage">
                                            <div class="dateAboutUs">
                                                <p>${event.month_short.toUpperCase()}</p>
                                                <p class="pnumber">${event.day}</p>
                                            </div>
                                        </div>
                                        <div class="rightColumnPage">
                                            <div class="titleCoverAboutUsLakum"><p>${event.title}</p></div>
                                            <div class="timeAboutUsLAKUM"><p>${event.event_time || '17:00 - 22:00'}</p></div>
                                            <div class="dateCoverAboutUsLAKUM"><p>${event.day}${event.month_short.toUpperCase()}</p></div>
                                            <div class="buttonDiscoverMoreDriveYourSoulComing">
                                                <button><a href="event-detail.php?id=${event.id}">DISCOVER MORE</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });
                console.log('upcomingContianerAboutUs: Rendered', nextTwo.length, 'events successfully');
            })
            .catch(error => console.error('upcomingContianerAboutUs: Error loading events', error));
    </script>
</body>
</html>
