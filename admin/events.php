<?php
require_once 'auth_check.php';
require_once '../config/database.php';

$conn = getDBConnection();

// Handle delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM events WHERE id = $id");
    header('Location: events.php');
    exit();
}

// Get all events
$events = $conn->query("SELECT * FROM events ORDER BY event_date DESC");

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Events - LAKUM</title>
    <link rel="icon" href="../assest/logo-lakum- (1).png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="admin-style.css">

    <style>
    /* --- Popup Styling --- */
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.6);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .popup-box {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        text-align: center;
        width: 320px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        animation: popupFade 0.3s ease;
    }

    .popup-box p {
        font-size: 16px;
        color: #333;
    }

    .popup-buttons {
        margin-top: 15px;
        display: flex;
        justify-content: space-around;
    }

    .popup-buttons button {
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
    }

    #confirmDelete { background-color: #e63946; color: white; }
    #cancelDelete { background-color: #ccc; color: #333; }

    @keyframes popupFade {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }
    </style>
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="logo">
                <img src="../assest/logo-lakum- (1).png" alt="LAKUM">
            </div>
            <nav>
                <a href="dashboard.php"><i class="ri-dashboard-line"></i> Dashboard</a>
                <a href="events.php" class="active"><i class="ri-calendar-event-line"></i> Events</a>
                <a href="logout.php"><i class="ri-logout-box-line"></i> Logout</a>
            </nav>
        </aside>
        
        <main class="main-content">
            <header>
                <h1>Manage Events</h1>
                <a href="add_event.php" class="btn-primary"><i class="ri-add-line"></i> Add New Event</a>
            </header>
            
            <div class="events-table">
                <table>
                    <thead>
                        <tr>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($event = $events->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <?php if ($event['cover_image']): ?>
                                    <img src="../<?php echo htmlspecialchars($event['cover_image']); ?>" alt="Cover" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
                                <?php else: ?>
                                    <div style="width: 60px; height: 60px; background: #ddd; border-radius: 5px;"></div>
                                <?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars($event['title']); ?></td>
                            <td><?php echo date('M d, Y', strtotime($event['event_date'])); ?></td>
                            <td><?php echo htmlspecialchars($event['event_time']); ?></td>
                            <td>
                                <span class="badge <?php echo $event['event_date'] >= date('Y-m-d') ? 'upcoming' : 'past'; ?>">
                                    <?php echo $event['event_date'] >= date('Y-m-d') ? 'Upcoming' : 'Past'; ?>
                                </span>
                            </td>
                            <td>
                                <a href="edit_event.php?id=<?php echo $event['id']; ?>" class="btn-small btn-edit"><i class="ri-edit-line"></i></a>
                                <a href="events.php?delete=<?php echo $event['id']; ?>" 
                                   class="btn-small btn-delete delete-btn">
                                   <i class="ri-delete-bin-line"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Custom Popup -->
    <div id="deletePopup" class="popup-overlay">
      <div class="popup-box">
        <p>Are you sure you want to delete this event?</p>
        <div class="popup-buttons">
          <button id="confirmDelete">Yes, Delete</button>
          <button id="cancelDelete">Cancel</button>
        </div>
      </div>
    </div>

    <script>
    let deleteLink = null;

    // Attach popup only to delete buttons, not all links
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function(event) {
            event.preventDefault();
            deleteLink = this.href;
            document.getElementById('deletePopup').style.display = 'flex';
        });
    });

    // Cancel button closes popup
    document.getElementById('cancelDelete').onclick = function() {
        document.getElementById('deletePopup').style.display = 'none';
        deleteLink = null;
    }

    // Confirm button redirects to delete link
    document.getElementById('confirmDelete').onclick = function() {
        if (deleteLink) {
            window.location.href = deleteLink;
        }
    }
    </script>
</body>
</html>
