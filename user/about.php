<style>
/* 100% SAFE — NOTHING OUTSIDE THIS CLASS WILL CHANGE */

/* --- GENERAL THEME STYLES (Used from previous requests) --- */
.sojib-feedback {
    background: linear-gradient(135deg, #fff;, #fff;);
    padding: 50px 0;
    display: flex;
    justify-content: center;
}

.sojib-feedback .feedback-box {
    background: #fff;
    width: 100%;
    max-width: 1300px; /* Max-width set for a wide content view */
    border-radius: 18px;
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.08);
    animation: fadeIn 0.8s ease;
    overflow: hidden; 
    padding: 0; 
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* --- HEADER STYLES --- */
.sojib-feedback .form-header {
    background: #d4f0d4ff;
    padding: 25px 30px; 
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
}

.sojib-feedback .form-header h3 {
    margin: 0;
    text-align: center;
    font-weight: bold;
}

.sojib-feedback h3 {
    color: #1b4b1d !important;
}

/* --- ABOUT US SPECIFIC STYLES --- */
.about-content {
    padding: 35px; /* General padding for content area */
    line-height: 1.8;
    color: #444;
}

.about-content h4 {
    color: #2a5c2dff; /* Green subheadings */
    font-weight: 700;
    margin-top: 25px;
    margin-bottom: 15px;
    border-bottom: 2px solid #8ade91;
    padding-bottom: 5px;
}

.about-content ul {
    list-style: none;
    padding: 0;
}

.about-content ul li {
    background: #f0fdf0; /* Light background for list items */
    margin-bottom: 10px;
    padding: 12px 15px;
    border-left: 4px solid #41b34a; /* Green highlight bar */
    border-radius: 5px;
}

.about-content .feature-box {
    text-align: center;
    padding: 20px;
    background: #fcfcfc;
    border: 1px solid #eee;
    border-radius: 10px;
    margin-bottom: 20px;
}

.about-content .feature-box strong {
    color: #1b4b1d;
    display: block;
    margin-top: 10px;
}
</style>


<div class="sojib-feedback">

  <div class="feedback-box"> 

    <div class="form-header">
      <h3>
        💡 Our Story: About Us
      </h3>
    </div>
    
    <div class="about-content">

      <p>
        **Welcome to [Your Company Name]!** We are a passionate team dedicated to bridging the gap between talent and industry demand. Our mission is to provide continuous and essential **IT and skills development training** that prepares individuals for the modern job market.
      </p>
      
      <h4>Our Mission 🎯</h4>
      <p>
        Our primary goal is to familiarize every student with the latest technology and market trends. We focus not just on certificates, but on **practical knowledge and job-ready skills**. We believe that everyone can achieve their career goals if they are provided with the right direction and resources.
      </p>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-box">
            <h4>Experienced Instructors</h4>
            <p>Classes are conducted by the best professionals in the industry who share their practical expertise.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <h4>Practical Approach</h4>
            <p>We focus on real-world projects and case studies alongside theoretical learning.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <h4>Career Support</h4>
            <p>We provide job placement assistance, portfolio building, and interview guidance to all our graduates.</p>
          </div>
        </div>
      </div>

      <h4>Why Choose Us? 🤔</h4>
      <ul>
        <li>✅ **Updated Curriculum:** All courses maintain the latest industry standards.</li>
        <li>✅ **Flexible Learning:** Options are available for both online and offline classes.</li>
        <li>✅ **Community Support:** An active support community for students even after training completion.</li>
      </ul>

      <p style="margin-top: 30px; text-align: center; font-size: 1.1rem; font-weight: 600;">
        Join us and give a new direction to your future!
      </p>

    </div>

  </div>
  </div>