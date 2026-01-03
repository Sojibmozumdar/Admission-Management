<style>
/* 100% SAFE — NOTHING OUTSIDE THIS CLASS WILL CHANGE */

/* --- GENERAL THEME STYLES (Existing) --- */
.sojib-feedback {
    background: linear-gradient(135deg, #fff;, #fff;);
    padding: 50px 0;
    display: flex;
    justify-content: center;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    max-width: 1300px; 
    border-radius: 25px; 
    box-shadow: 0 35px 60px rgba(0,0,0,0.1); 
    animation: fadeIn 0.8s ease;
    overflow: hidden; 
    padding: 0; 
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* --- HEADER STYLES (Restored to Original Colors) --- */
.sojib-feedback .form-header {
    background: #d4f0d4ff; /* Restored to Light Green */
    padding: 25px 30px; 
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    position: relative;
    z-index: 1;
}

.sojib-feedback .form-header h3 {
    margin: 0;
    text-align: center;
    font-weight: 800; 
    color: #1b4b1d !important; /* Restored to Dark Green */
    letter-spacing: 1px;
    text-shadow: none; /* Removed unnecessary shadow */
}

/* --- NOTICE BOARD SPECIFIC STYLES (Creative Structure) --- */
.notice-board-container {
    padding: 40px; 
}

.notice-list {
    list-style: none;
    padding-left: 0;
    margin-top: 0;
    display: grid; 
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
    gap: 25px; 
}

.notice-item {
    background: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 15px; 
    padding: 25px; 
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between; 
    box-shadow: 0 8px 25px rgba(0,0,0,0.08); 
    position: relative;
    overflow: hidden;
}

.notice-item:hover {
    transform: translateY(-8px); 
    box-shadow: 0 15px 40px rgba(0,0,0,0.15); 
    border-color: #8ade91; /* Light Green border on hover */
}

.notice-item h4 {
    color: #1b4b1d; 
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 12px;
    font-size: 1.25rem; 
    line-height: 1.4;
    position: relative;
    padding-left: 30px; 
}

.notice-item h4::before {
    content: '📌'; 
    position: absolute;
    left: 0;
    top: 0;
    font-size: 1.4rem;
    line-height: 1;
}

.notice-item p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1; 
}

.notice-item .notice-meta {
    display: flex;
    justify-content: space-between;
    align-items: center; 
    font-size: 0.8rem;
    color: #777;
    border-top: 1px solid #f0f0f0; 
    padding-top: 15px;
    margin-top: 15px;
}

.notice-item .status-tag {
    background: #e6ffe6; /* Light green */
    color: #2a5c2dff; 
    padding: 5px 10px;
    border-radius: 20px; 
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* --- URGENT NOTICE SPECIFIC STYLES (Color adjusted to original red/green theme) --- */
.notice-item.urgent {
    border: 2px solid #ff4d4f; /* Retaining Red border for urgency */
    background: #fffafa; /* Very light background for contrast */
    box-shadow: 0 10px 30px rgba(255, 77, 79, 0.2); 
}

.notice-item.urgent h4 {
    color: #cc0000; /* Darker red title for urgency */
}

.notice-item.urgent h4::before {
    content: '🚨'; 
}

.notice-item.urgent .status-tag {
    background: #ff4d4f; /* Red background for high contrast */
    color: #ffffff; 
    animation: pulse 1.5s infinite; 
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

/* --- NEW TAG STYLES (Using theme greens) --- */
.notice-item .status-tag.new {
    background: #c3e6cb; 
    color: #1b4b1d;
}

/* --- EVENT TAG STYLES (Using blue for distinction, but light shade) --- */
.notice-item .status-tag.event {
    background: #e0f7fa; /* Very light cyan/blue */
    color: #00796b; /* Teal color for event */
}

/* --- DATE ICON --- */
.notice-item .notice-meta span:last-child::before {
    content: '🗓️ '; 
    margin-right: 5px;
}

/* --- AUTHOR ICON --- */
.notice-item .notice-meta span:first-child::before {
    content: '✍️ '; 
    margin-right: 5px;
}

</style>


<div class="sojib-feedback">

  <div class="feedback-box"> 

    <div class="form-header">
      <h3>
        📢 Notice Board
      </h3>
    </div>
    
    <div class="notice-board-container">
        <ul class="notice-list">

            <li class="notice-item urgent">
                <h4>Course Registration Deadline Extended!</h4>
                <p>Attention all prospective students! The deadline for Spring 2026 course registration has been officially extended until **December 10, 2025**. Please complete your application process as soon as possible to secure a spot.</p>
                <div class="notice-meta">
                    <span>Posted by: Admin</span>
                    <span class="status-tag">Urgent</span>
                    <span>25 Nov 2025</span>
                </div>
            </li>

            <li class="notice-item">
                <h4>New Batch Announcement: UI/UX Design</h4>
                <p>Exciting news for aspiring designers! The new batch for our UI/UX Design course will commence from **December 15, 2025**. All registered applicants must attend the orientation session on December 14th.</p>
                <div class="notice-meta">
                    <span>Posted by: Academic Dept.</span>
                    <span class="status-tag new">New</span>
                    <span>20 Nov 2025</span>
                </div>
            </li>

            <li class="notice-item">
                <h4>Free Seminar: Future of AI in Web Development</h4>
                <p>Join us for an insightful free seminar titled "The Future of AI in Web Development" on **December 5th at 3 PM**. This event is open to all students, alumni, and tech enthusiasts. RSVP required!</p>
                <div class="notice-meta">
                    <span>Posted by: Event Coordinator</span>
                    <span class="status-tag event">Event</span>
                    <span>15 Nov 2025</span>
                </div>
            </li>

            <li class="notice-item">
                <h4>Holiday Schedule Announcement</h4>
                <p>Please note our upcoming holiday schedule. Our office and classes will be closed from December 24th to January 1st for the winter holidays. Regular operations will resume on January 2nd, 2026.</p>
                <div class="notice-meta">
                    <span>Posted by: Management</span>
                    <span class="status-tag">Info</span>
                    <span>10 Nov 2025</span>
                </div>
            </li>

            <li class="notice-item">
                <h4>Scholarship Application Window Open!</h4>
                <p>Applications for the Spring 2026 Scholarship Program are now open. Eligible students are encouraged to apply before the deadline on November 30th. Check the criteria on our website.</p>
                <div class="notice-meta">
                    <span>Posted by: Scholarship Committee</span>
                    <span class="status-tag new">New</span>
                    <span>01 Nov 2025</span>
                </div>
            </li>
            
            <li class="notice-item" style="border-left: 5px solid #ffcc00;">
                <h4>Maintenance Alert: Website Downtime</h4>
                <p>Our website will undergo scheduled maintenance on November 28th, from 11 PM to 3 AM (UTC+6). During this period, the website may be inaccessible. We apologize for any inconvenience caused.</p>
                <div class="notice-meta">
                    <span>Posted by: IT Support</span>
                    <span class="status-tag" style="background: #ffcc00; color: #cc6600;">Maintenance</span>
                    <span>26 Nov 2025</span>
                </div>
            </li>

        </ul>
    </div>

  </div>
  </div>