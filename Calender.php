<?php require_once 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Events Calendar - LAKUM</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="Calender.css">
<style>
.firstRow{
    display: grid ;
     grid-template-columns: repeat(3, 1fr); 
    width: 100%;
     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
}
.COVERAboutUs  .titleCoverAboutUs p {
  font-size: 23px;
    font-family: 'Atyp Kido TRIAL', sans-serif;
overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
  font-weight: 300;
  margin: 0;
  padding-top: 0px;
}
@media(max-width: 2650px) {
  .COVERAboutUs{
  margin-left: 0px;
}
}
 @media (max-width: 2560px) {
    .firstRow {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        width: 100%;
        margin-bottom: 30px;
        visibility: visible;
        opacity: 1;
    }

    .eventItem {
        width: 100%;
        max-width: 500px;
        justify-content: flex-start;
    }
}

       @media(max-width: 1440px) {
        .firstRow{
    display: grid ;
     grid-template-columns: repeat(3, 1fr); 
            
     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
}
 .ComingEventContainerAboutUs .COVERAboutUs{
  margin-left: 0px;
  
}
}
    @media (max-width: 1366px) {
  .eventItem {
    width: 100%; /* 2 items per row */
    max-width: 500px;
    }
    .firstRow{
    display: grid ;
     grid-template-columns: repeat(3, 1fr); 
      
     gap: 30px ;
     margin-bottom: 30px ;
     width: 100%;
     visibility: visible ;
     opacity: 1 ;
}
    
    }
      @media(max-width:1024px){
         .firstRow{
    display: grid ;
     grid-template-columns: repeat(2, 1fr); 

     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
}
      }
      @media (max-width: 820px) {
        .firstRow{
    display: grid ;
     grid-template-columns: repeat(2, 1fr); 

     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
}
      .ComingEventContainerCalender{
        margin-left: -100px;
      }
      }
       @media (max-width: 768px) {
       .firstRow{
    display: grid ;
     grid-template-columns: repeat(2, 1fr); 

     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
}
      .ComingEventContainerCalender{
        margin-left:100px;
      }
      .COVERAboutUs{
        width: 100%;
      }
     .rightColumn .titleCoverAboutUs p{
       
        overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1; /* Set the number of lines to show */
  -webkit-box-orient: vertical;
      }
      .buttonDiscoverMoreDriveYourSoulComing button{
       display: none;
      }
     
    }
     


@media(max-width:540px){
    .firstRow{
    display: grid ;
     grid-template-columns:repeat(2,1fr); 

     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
}
}
@media (max-width: 414px) {
   .firstRow{
    display: grid ;
     grid-template-columns: 1fr; 

     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
}
.ComingEventContainerCalender {
  width: 100%;
  margin-left: 0px;
}
  .titleCoverAboutUs {
  display: none;
  }
 
.leftColumn  .dateAboutUs{
    display: flex;
    flex-direction: row;
    align-items: center;
}
.leftColumn  .dateAboutUs .pnumber , p {
    display: flex;
    flex-direction: column;
 font-weight: 400;
 font-size: 25px;

} }

@media(max-width:430px){
    .firstRow{
    display: grid ;
     grid-template-columns: 1fr; 

     gap: 30px ;
     margin-bottom: 30px ;
     
     visibility: visible ;
     opacity: 1 ;
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

    <div class="calendarContainer" style="display: flex !important; visibility: visible !important; opacity: 1 !important;">
        <div class="monthsSidebar" style="display: block !important; visibility: visible !important;">
            <ul id="monthsList">
                <!-- Months will be loaded dynamically -->
            </ul>
        </div>

        <div class="eventsList" id="eventsList" style="display: block !important; visibility: visible !important; opacity: 1 !important; flex: 1 !important;">
            <!-- Events will be loaded dynamically -->
        </div>
    </div>

    <div class="upcomingEventCalender">
        <div class="ComingEventContainerCalender" id="closestTwoEvents">
            <!-- Closest 2 upcoming events will be loaded here -->
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
        let allEvents = [];
        let availableMonths = [];

        // Load all upcoming events
        fetch('api/get_events.php?type=upcoming')
            .then(response => response.json())
            .then(events => {
                allEvents = events;
                
                if (!events || events.length === 0) {
                    document.getElementById('monthsList').innerHTML = '<li style="background: #f5f5f5; cursor: default;">No upcoming events</li>';
                    document.getElementById('eventsList').innerHTML = '<p style="text-align: center; padding: 40px; color: #666; font-size: 18px;">No upcoming events yet. Check back soon!</p>';
                    return;
                }
                
                // Get unique months
                const monthsSet = new Set();
                events.forEach(event => {
                    if (event.month) {
                        monthsSet.add(event.month);
                    }
                });
                availableMonths = Array.from(monthsSet);
                
                // Populate months sidebar
                const monthsList = document.getElementById('monthsList');
                monthsList.innerHTML = '';
                availableMonths.forEach((month, index) => {
                    const li = document.createElement('li');
                    li.textContent = month;
                    li.dataset.month = month.toLowerCase();
                    if (index === 0) li.classList.add('active');
                    li.addEventListener('click', () => {
                        filterByMonth(month, li);
                    });
                    monthsList.appendChild(li);
                });
                
                // Show first month by default
                if (availableMonths.length > 0) {
                    filterByMonth(availableMonths[0]);
                }
            })
            .catch(error => {
                console.error('Error loading events:', error);
                document.getElementById('eventsList').innerHTML = '<p style="text-align: center; padding: 40px; color: #c33;">Error loading events. Please refresh the page.</p>';
            });
function convertTo12Hour(timeRange) {
    if (!timeRange) return '';

    // Example: "17:00 - 22:00"
    const times = timeRange.split('-').map(t => t.trim());

    function formatTime(t) {
        let [hours, minutes] = t.split(':').map(Number);
        const suffix = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12 || 12; // convert 0 -> 12
        return `${hours}:${minutes.toString().padStart(2, '0')} ${suffix}`;
    }

    if (times.length === 2) {
        return `${formatTime(times[0])} - ${formatTime(times[1])}`;
    } else if (times.length === 1) {
        return formatTime(times[0]);
    }

    return timeRange;
}
        function filterByMonth(month, clickedElement) {
            // Update active state
            document.querySelectorAll('.monthsSidebar li').forEach(li => li.classList.remove('active'));
            if (clickedElement) {
                clickedElement.classList.add('active');
            } else {
                const firstMonth = document.querySelector('.monthsSidebar li');
                if (firstMonth) firstMonth.classList.add('active');
            }
            
            // Filter events
            const filteredEvents = allEvents.filter(event => {
                return event.month && event.month.toLowerCase() === month.toLowerCase();
            });
            
            // Display events
            const container = document.getElementById('eventsList');
            if (!container) return;
            
            container.innerHTML = '';
            
            if (filteredEvents.length === 0) {
                container.innerHTML = '<p style="text-align: center; padding: 40px; color: #666; font-size: 18px;">No events for this month</p>';
                return;
            }
            
            // Create events HTML
            let eventsHTML = '';
            for (let i = 0; i < filteredEvents.length; i += 2) {
                eventsHTML += '<div class="firstRow" >';
                
                // First event in row
                const event1 = filteredEvents[i];
                eventsHTML += createEventHTML(event1);
                
                // Second event in row (if exists)
                if (i + 1 < filteredEvents.length) {
                    const event2 = filteredEvents[i + 1];
                    eventsHTML += createEventHTML(event2);
                }
                
                eventsHTML += '</div>';
            }
            
            container.innerHTML = eventsHTML;
        }

        function createEventHTML(event) {
            const coverImage = event.cover_image || 'assest/img-3.JPG';
            const monthShort = event.month_short ? event.month_short.toUpperCase() : 'JAN';
            const day = event.day || '01';
            
            return `
                <div class="eventItem" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer; display: block !important; visibility: visible !important; opacity: 1 !important;">
                    <div class="imgWrapperCalender" style="display: block !important; visibility: visible !important;">
                        <img src="${coverImage}" alt="${event.title}" style="display: block !important; visibility: visible !important;">
                        
                    </div>
                    <div class="titleBox" style="display: block !important; visibility: visible !important;">${event.title}</div>
                </div>
            `;
        }

        // Load closest 2 upcoming events (or as many as exist)
        fetch('api/get_events.php?type=closest&limit=2')
            .then(response => response.json())
            .then(events => {
                const container = document.getElementById('closestTwoEvents');
                container.innerHTML = '';
                
                if (events.length === 0) {
                    container.innerHTML = '<p style="text-align: center; padding: 40px; color: #666;">No upcoming events yet.</p>';
                    return;
                }
                
                events.forEach(event => {
                    container.innerHTML += `
                        <div class="upcomingEventAboutUs" onclick="window.location.href='event-detail.php?id=${event.id}'" style="cursor: pointer;">
                            <div class="ComingEventContainerAboutUs">
                                <div class="imgHeaderAboutUs">
                                    <img src="${event.cover_image || 'assest/img-3.JPG'}" alt="${event.title}">
                                    <div class="COVERAboutUs">
                                        <div class="leftColumn">
                                            <div class="dateAboutUs">
                                            <p class="pnumber">${event.day}</p>
                                                <p>${event.month_short.toUpperCase()}</p>
                                                
                                            </div>
                                        </div>
                                        <div class="rightColumn">
                                            <div class="titleCoverAboutUs"><p>${event.title}</p></div>
                                                                 <div class="timeAboutUs"><p>${convertTo12Hour(event.event_time || '15:00 - 22:00')}</p></div>

                                            <div class="buttonDiscoverMoreDriveYourSoulComing">
                                                <button>DISCOVER MORE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });
            });
    </script>
</body>
</html>
