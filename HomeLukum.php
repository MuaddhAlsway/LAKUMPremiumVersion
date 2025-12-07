<?php require_once 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAKUM</title>
    <link rel="icon" href="assest/logo-lakum- (1).png" type="image/png">
    <link rel="stylesheet" href="Home.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
             body{
        margin: 0;
    padding: 0;
    overflow-x: hidden; /* prevent horizontal scroll */
      }
/* Big container */
.ColumnContainer {
  display: grid; /* use grid layout */
  grid-template-columns: repeat(4, 1fr); /* 4 equal columns per row */
  gap: 20px; /* space between images */
  width: 100%;
  justify-items: center; /* centers items horizontally in their column */
  align-items: start;    /* aligns items to the top */
  padding: 20px 0;
}

/* Each item (image + text) */  
.PhotoEventColumn {
  display: flex;
  flex-direction: column;
 
  gap: 10px;
}

/* Image styling */
.PhotoEventRow img {
  width: 100%;        /* fills the column */
  max-width: 300px;   /* optional: limit max width */
  height: 300px;      /* fixed height */
  object-fit: cover;
  display: block;
  border-radius: 5px;
}
.PhotoEventRow p {
    width: 100%;
}
/* Text styling */
.PhotoEventRow p span {
  display: block;
  text-align: left;
  font-size: 16px;
  margin-top: 5px;
  width: 75%;
       overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
    
}



         .FOOTER1 {
    padding: 60px 40px; /* slightly smaller padding for 1440px */
  }

  .footer-container {
    max-width: 1440px; /* limit container width */
    gap: 40px;          /* moderate spacing between footer sections */
    margin: 0 auto;     /* center container */
    display: flex;      /* flex layout for sections */
    flex-wrap: wrap;    /* allow wrapping if needed */
    justify-content: space-between;
  }

  .footer-logo img {
    width: 130px;       /* balanced logo size */
    height: auto;
  }

  .MenuFooter ul {
    display: flex;      /* horizontal list */
    gap: 25px;          /* smaller spacing between links */
    padding: 0;
    margin: 0;
    list-style: none;
  }

  .MenuFooter a {
    font-size: 16px;    /* slightly smaller text for links */
    text-decoration: none;
    color: inherit;
  }

  .social-icons a {
    font-size: 24px;    /* slightly reduced icon size */
    margin: 0 12px;     /* consistent side spacing */
    color: black;
  }

  .footer-bottom {
    font-size: 16px;    /* readable text size */
    padding-top: 20px;
    text-align: center;
    width: 100%;
  }
    @media (max-width: 2560px) {
            .firstRow{
    display: grid ;
     grid-template-columns: repeat(4, 1fr); 

     gap: 30px ;
     margin-bottom: 30px ;
 
     visibility: visible ;
     opacity: 1 ;
}
  .eventItem {
    width: 100%; /* 2 items per row */
    max-width: 500px;
    justify-content: flex-start;
    }
      }
@media (max-width: 1366px) {
    .COVERLAKUM .titleCOVERLAKUM p {
    font-size: 25px;
    max-width: 100%;
    margin-left: 20px;
      overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
     
    
  }
  .COVERLAKUM .paragraphCOVERLAKUM p {
    font-size: 16px;
    max-width: 100%;
    margin-left: 20px;
      /* Set the number of lines to show */
}
.pastExhibitLukum .imgleft img{
    height: 300px;
}
   .pastExhibitLukum {
    flex-direction: row;
justify-content: center;
    align-items: flex-start;
  }

  .pastExhibitLukum img {
   
    height: auto;
  }

  .pastExhibitLukum p {
    font-size: 18px;
          overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
   
  }

    .pastExhibitLukum .imgleft{
   height: auto;

  }
 .pastExhibitLukum .imgright img,
  .pastExhibitLukum .imgMiddle img {
    height: 400px;
  }
  /* Images overall */
  .pastExhibitLukum img {
    height: auto;
    max-height: 300px;
    width: 100%;
  }

  /* Text */
  .pastExhibitLukum p,
  .pastExhibitLukum .imgMiddle p {
    font-size: 20px;
    text-align: left;
  }
}

@media (max-width: 1366px){
      .LukumContiner .title h4 {
    font-size: 26px; /* slightly bigger for larger screens */
    margin-left: 20px;
    text-align: left;
  }
}
@media (max-width: 1280px) {
    .PhotoEventRow {
        flex-direction: column;
        text-align: left;
    }
        .COVERLAKUM {
        /* width: 450px; */
        /* padding: 20px; */
        bottom: 0px;
        right: 0px;
        transform: none;
        border-radius: 0px;
    }
    .buttonDiscoverMoreLAKUM button, .buttonDiscoverMoreLAKUMLEFT button {
        font-size: 20px;
         padding: 10px 40px; 
        border-radius: 8px;
    }
}
    
@media(max-width: 820px) {
  .pastExhibitLukum {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  margin-left: 80px;
  justify-content: flex-start;
}

/* Each image box */
.pastExhibitLukum .imgMiddle img{
    height: 300px;
}
.pastExhibitLukum .imgright,
.pastExhibitLukum .imgMiddle {
  width: 300px;           /* fixed width */
  height: 500px;          /* fixed height */
  display: block;         /* remove flex to avoid shrinking */
  flex: none;             /* prevent flex shrinking/growing */
  box-sizing: border-box;
}

/* Images */
.pastExhibitLukum img {
  width: 100%;
  height: 100%;           /* fill container height */
  object-fit: cover;      /* crop to fit without distortion */
  border-radius: 8px;
  display: block;         /* avoid inline gaps in flex */
}


}
/* Responsive: Mobile - 1 item per row */



@media(max-width: 540px) {
    .pastExhibitLukum .imgleft img{
        width: 300px
    }
 .ColumnContainer {
       grid-template-columns: repeat(2,1fr); /* 1 column */
    padding-left: 15px;  /* space from left */
    padding-right: 15px; /* space from right */
    box-sizing: border-box; /* ensure padding doesn’t break layout */
  }
.titlePreviousEventWrapper{
    margin-left: 0px;
  }  .PhotoEventRow {
    display: flex;
   flex-direction: column;
    gap: 10px;
    width: 100%;
    align-items: center; 
    text-align: center;     
}
}

  @media (max-width: 430px) {
  .ExploreCoverLakum {
    width: 100%;          /* take full width */
    height: 50vh;         /* reduce height for mobile */
    padding: 10px;        /* optional padding inside */
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    border-radius: 0;
  }
  .CoverImage{
    width: 100%;          /* full width for mobile */
  }
  .CoverImageLakum h4 {
    font-size: 20px;      /* smaller font for mobile */
    padding: 0 10px;      /* prevent text from touching edges */
  }
   .ColumnContainer {
       grid-template-columns:1fr; /* 1 column */
    padding-left: 15px;  /* space from left */
    padding-right: 15px; /* space from right */
    box-sizing: border-box; /* ensure padding doesn’t break layout */
  }
}


@media(max-width: 430px){
 .PhotoEventColumn {
    flex: 1 1 100%;
    gap: 12px;
    padding: 0;

    align-items: center;
  }
  .PhotoEventRow {
    display: flex;
   flex-direction: column;
    gap: 10px;
    width: 100%;
    align-items: center; 
    text-align: center;     
}
 .PhotoEventRow p span {
    display: block;
    text-align: center;
    font-size: 16px;
    margin-top: 5px;
    width: 100%;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
}
}


@media(max-width: 414px){
.pastExhibitLukum .imgleft img{
    width: 300px;
}
   .ColumnContainer {
       grid-template-columns:1fr; /* 1 column */
    padding-left: 15px;  /* space from left */
    padding-right: 15px; /* space from right */
    box-sizing: border-box; /* ensure padding doesn’t break layout */
  }
  .PhotoEventRow {
    display: flex;
   flex-direction: column;
    gap: 10px;
    width: 100%;
    align-items: center; 
    text-align: center;     
}
 .PhotoEventRow p span {
    display: block;
    text-align: center;
    font-size: 16px;
    margin-top: 5px;
    width: 100%;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
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
                <li><a href="Shop.php">SHOP</a></li>  
            </ul>
        </div>
    </div>

    <div class="HomeContainer">
        <img src="assest/img-4.png" alt="">
    </div>

    <div class="LukumContiner">
        <div class="title">
            <h4>UPCOMING</h4>
        </div>
        <div class="pastExhibitLukum" id="upcomingPreview">
            <!-- 3 upcoming events will be loaded here -->
        </div>
    </div>

    <div class="upcomingEventLAKUM" id="upcoming">
        <div class="ComingEventContainerLAKUM">
            <div class="imgHeaderLakum" id="featuredEvent">
                <!-- Most recent event will be loaded here -->
            </div>
        </div>
    </div>

    <div class="previousEventContainer">
        <div class="titlePreviousEventWrapper">
            <h4>PREVIOUS EXHIBITION</h4>
        </div>
        <div class="ColumnContainer" id="previousEvents">
            <!-- Past events will be loaded here -->
        </div>
    </div>

    <div class="ExploreCoverLakum" id="exploreCoverSection" >
        <div class="CoverImage" >
            <div class="CoverImageLakum" >
                <h4>Exclusive Paid Workshops</h4>
            </div>
            <button class="ExploreMoreButton" onclick="window.location.href='Calender.php'">
                Explore More
            </button>
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
        // Load upcoming events preview (up to 3, but only as many as exist)
        fetch('api/get_events.php?type=closest&limit=3')
            .then(response => response.json())
            .then(events => {
                const container = document.getElementById('upcomingPreview');
                container.innerHTML = '';
                
                if (events.length === 0) {
                    container.innerHTML = '<p style="text-align: center; padding: 40px; color: #666;">No upcoming events yet.</p>';
                    return;
                }
                
                events.forEach((event, index) => {
                    const className = index === 0 ? 'imgleft' : index === 1 ? 'imgMiddle' : 'imgright';
                    const eventCard = `
                        <div class="${className}" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                            <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                            <p>${event.title}</p>
                        </div>
                    `;
                    container.innerHTML += eventCard;
                });
            });

        // Load featured event (most recent/newest created)
        fetch('api/get_events.php?type=latest&limit=1')
            .then(response => response.json())
            .then(events => {
                if (events.length > 0) {
                    const event = events[0];
                    const container = document.getElementById('featuredEvent');
                    
                    // Format date range
                    const eventDate = new Date(event.event_date);
                    const startDay = event.day;
                    const startMonth = event.month_short.toUpperCase();
                    
                    // Calculate end date (assuming 1 month duration if not specified)
                    const endDate = new Date(eventDate);
                    endDate.setMonth(endDate.getMonth() + 1);
                    const endDay = endDate.getDate();
                    const endMonth = endDate.toLocaleString('en-US', { month: 'short' }).toUpperCase();
                    
                    const dateRange = `${startDay} ${startMonth} - ${endDay} ${endMonth}`;
                    
                    container.innerHTML = `
                        <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                        <div class="COVERLAKUM">
                            <div class="titleCOVERLAKUM">
                                <p>${event.title}</p>
                            </div>
                            <div class="date">
                                <p>${dateRange}</p>
                            </div>
                            <div class="paragraphCOVERLAKUM">
                                <p>${event.description || 'Discover this amazing exhibition showcasing contemporary art and culture.'}</p>
                            </div>
                        </div>
                        <div class="buttonDiscoverMoreLAKUMLEFT">
                            <button onclick="window.location.href='event-detail.php?id=${event.id}'">Discover More</button>
                        </div>
                    `;
                }
            });

        // Load most recent event for ExploreCover background
        fetch('api/get_events.php?type=latest&limit=1')
            .then(response => response.json())
            .then(events => {
                if (events.length > 0 && events[0].cover_image) {
                    const coverSection = document.getElementById('exploreCoverSection');
                    coverSection.style.backgroundImage = `url('${events[0].cover_image}')`;
                }
            })
            .catch(error => console.error('Error loading cover image:', error));

        // Load previous events (all past events from database)
       // Load previous events (all past events from database)
fetch('api/get_events.php?type=past')
    .then(response => response.json())
    .then(events => {
        const container = document.getElementById('previousEvents');
        container.innerHTML = '';
        
        if (events.length === 0) {
            container.innerHTML = '<p style="text-align: center; padding: 40px; color: #666;">No previous exhibitions yet.</p>';
            return;
        }
        
        // Split events into four columns
        const quarter = Math.ceil(events.length / 4);
        const column1 = events.slice(0, quarter);
        const column2 = events.slice(quarter, quarter * 2);
        const column3 = events.slice(quarter * 2, quarter * 3);
        const column4 = events.slice(quarter * 3);

        let col1HTML = '<div class="PhotoEventColumn">';
        column1.forEach(event => {
            col1HTML += `
                <div class="PhotoEventRow" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                    <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                    <p><span>${event.title}</span></p>
                </div>
            `;
        });
        col1HTML += '</div>';

        let col2HTML = '<div class="PhotoEventColumn">';
        column2.forEach(event => {
            col2HTML += `
                <div class="PhotoEventRow" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                    <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                    <p><span>${event.title}</span></p>
                </div>
            `;
        });
        col2HTML += '</div>';

        let col3HTML = '<div class="PhotoEventColumn">';
        column3.forEach(event => {
            col3HTML += `
                <div class="PhotoEventRow" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                    <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                    <p><span>${event.title}</span></p>
                </div>
            `;
        });
        col3HTML += '</div>';

        let col4HTML = '<div class="PhotoEventColumn">';
        column4.forEach(event => {
            col4HTML += `
                <div class="PhotoEventRow" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                    <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                    <p><span>${event.title}</span></p>
                </div>
            `;
        });
        col4HTML += '</div>';

        container.innerHTML = col1HTML + col2HTML + col3HTML + col4HTML;
    });

    </script>
</body>
</html>
