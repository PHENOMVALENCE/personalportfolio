<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="hero" class="hero-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1>Valence Isdory Mwigani</h1>
            <h2>IT Professional</h2>
            <p>Ambitious and driven IT professional with a passion for leveraging technical skills to make a significant impact in the field of Information Technology.</p>
            <div class="hero-buttons">
                <a href="#about" class="btn btn-primary">Learn More</a>
                <a href="#contact" class="btn btn-secondary">Contact Me</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="section-header">
            <h2>About Me</h2>
            <div class="underline"></div>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="images/profile-placeholder.jpg" alt="Valence Isdory Mwigani">
            </div>
            <div class="about-text">
                <h3>Summary</h3>
                <p>Ambitious and driven IT professional with a passion for leveraging technical skills to make a significant impact in the field of Information Technology. Committed to continuous learning and professional development, with a strong focus on quality, integrity, and responsibility. Adept at working in challenging and rewarding environments, I strive to contribute effectively to team success and deliver innovative technological solutions.</p>
                
                <h3>Personal Details</h3>
                <div class="personal-details">
                    <div class="detail-item">
                        <span class="detail-label">Name:</span>
                        <span class="detail-value">Valence Isdory Mwigani</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Date of Birth:</span>
                        <span class="detail-value">March 31, 2002</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Place of Birth:</span>
                        <span class="detail-value">Kilimanjaro</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Nationality:</span>
                        <span class="detail-value">Tanzania</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Phone:</span>
                        <span class="detail-value">+255 753775 184</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Email:</span>
                        <span class="detail-value">mwiganivalence@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="education-section">
    <div class="parallax-bg"></div>
    <div class="container">
        <div class="section-header">
            <h2>Education</h2>
            <div class="underline"></div>
        </div>
        <div class="timeline">
            <?php include 'includes/education-data.php'; ?>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="experience-section">
    <div class="container">
        <div class="section-header">
            <h2>Experience</h2>
            <div class="underline"></div>
        </div>
        <div class="experience-content">
            <div class="experience-card">
                <div class="experience-header">
                    <h3>IT Technician, Field work</h3>
                    <p class="company">BIZYTECH Ltd</p>
                    <p class="duration">August 2022 – October 2022</p>
                </div>
                <div class="experience-body">
                    <h4>Roles</h4>
                    <ul>
                        <li>Designed a front end for a simple web application</li>
                        <li>Implemented a back end for a simple web application</li>
                        <li>Conducted computer repairs for system software</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section">
    <div class="parallax-bg projects-bg"></div>
    <div class="container">
        <div class="section-header">
            <h2>Projects</h2>
            <div class="underline"></div>
        </div>
        <div class="projects-grid">
            <?php include 'includes/projects-data.php'; ?>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills-section">
    <div class="container">
        <div class="section-header">
            <h2>Skills</h2>
            <div class="underline"></div>
        </div>
        <div class="skills-content">
            <div class="skills-category">
                <h3>Technical Skills</h3>
                <ul class="skills-list">
                    <li>
                        <span class="skill-name">Front End Development</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="90"></div>
                        </div>
                    </li>
                    <li>
                        <span class="skill-name">Back End Development</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="85"></div>
                        </div>
                    </li>
                    <li>
                        <span class="skill-name">Network Administration</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="80"></div>
                        </div>
                    </li>
                    <li>
                        <span class="skill-name">Surveillance Systems Management</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="75"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="skills-category">
                <h3>Soft Skills</h3>
                <ul class="skills-list">
                    <li>
                        <span class="skill-name">Communication</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="95"></div>
                        </div>
                    </li>
                    <li>
                        <span class="skill-name">Fast Learner</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="90"></div>
                        </div>
                    </li>
                    <li>
                        <span class="skill-name">Problem Solving</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="85"></div>
                        </div>
                    </li>
                    <li>
                        <span class="skill-name">Hard Worker</span>
                        <div class="skill-bar">
                            <div class="skill-progress" data-progress="95"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="parallax-bg contact-bg"></div>
    <div class="container">
        <div class="section-header">
            <h2>Contact Me</h2>
            <div class="underline"></div>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Location</h3>
                        <p>Dar es Salaam, Tanzania</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p>mwiganivalence@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Phone</h3>
                        <p>+255 753775 184</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form action="includes/process-form.php" method="POST" id="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                    <div id="form-message"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Referees Section -->
<section id="referees" class="referees-section">
    <div class="container">
        <div class="section-header">
            <h2>Referees</h2>
            <div class="underline"></div>
        </div>
        <div class="referees-content">
            <div class="referee-card">
                <h3>Ally Shengena</h3>
                <p class="referee-position">Public Relations Officer</p>
                <p class="referee-company">DIT SIEMENS LAB</p>
                <p class="referee-contact">+225 685902351</p>
            </div>
            <div class="referee-card">
                <h3>Tarick Abdul</h3>
                <p class="referee-position">Data Analyst</p>
                <p class="referee-company">TRA</p>
                <p class="referee-contact">+255 745941103</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
