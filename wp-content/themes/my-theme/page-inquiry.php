<?php get_header();?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/grid.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">




 
<main>
 <div class="inquiry_section">
       <div class="hero_section">
        <h3> inpuiry</h3>
            </div>
            <div class="navcation">      <ul>
                  <li><a href="">Home</a>  ></li>
                  <li>Inpuiry</li>
                </ul>
</div>
            <div class="inquiry_number">
                 <h1>inpuiry</h1>
            <div class="line_inquiry"></div>
                 <p>We accept inquiries by phone or through the inquiry form below.<br> If your inquiry is urgent, please contact us by phone.</p>
            </div>
 </div>
 <div class="res-btn-row">
            <a href="tel:081770545" class="res-btn btn-phone">
                <svg class="res-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                081-770-545
            </a>
</div>
<div class="contact_form">
    <h1>Contact form</h1>
    <div class="line_inquiry_1"></div>
    <section class="inquiry-container">
    <div class="res-content">
        <h2 class="res-title">Inquiry Form</h2>
        <p class="res-intro">Please fill out the form below and click "To the confirmation screen".</p>

        <form action="confirmation.php" method="POST" class="contact-form">
            <div class="form-group">
                <label class="form-label">Type of inquiry <span class="required-tag">Required</span></label>
                <div class="radio-group">
                    <label class="radio-item">
                        <input type="radio" name="inquiry_type" value="treatment" required> About medical treatment
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="inquiry_type" value="reservation"> About reservations
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="inquiry_type" value="sales"> Sales and advertising
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Name <span class="required-tag">Required</span></label>
                <input type="text" name="name" class="form-input" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label class="form-label">Furigana <span class="required-tag">Required</span></label>
                <input type="text" name="furigana" class="form-input" placeholder="フリガナ" required>
            </div>

            <div class="form-group">
                <label class="form-label">Email Address <span class="required-tag">Required</span></label>
                <input type="email" name="email" class="form-input" placeholder="example@mail.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">Telephone Number</label>
                <input type="tel" name="phone" class="form-input" placeholder="000-0000-0000">
            </div>

            <div class="form-group">
                <label class="form-label">Inquiry Details <span class="required-tag">Required</span></label>
                <textarea name="details" class="form-textarea" rows="6" placeholder="Please type your inquiry here..." required></textarea>
            </div>

            <div class="form-submit">
                <button type="submit" class="res-btn btn-online submit-btn">
                    To the confirmation screen
                </button>
            </div>
        </form>
    </div>
</section>
</div>
</main>