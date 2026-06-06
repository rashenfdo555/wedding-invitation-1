<?php
// ==========================================
// CENTRAL CONFIGURATION CONTROL PANEL
// ==========================================
$config = [
    'groom_name'       => 'හේෂාන්',
    'bride_name'       => 'දෙව්මි',
    'couple_headline'  => 'දෙව්මි & හේෂාන්',
    'blessing_text'    => 'සුභ මංගලම්',
    'invitation_note'  => 'දෙපාර්ශවයන්ගේ පවුල්වල ආශිර්වාදයෙන්<br>ඔබව ආදරයෙන් ඇරයුම් කරමු.',
    'bottom_blessing'  => 'ඔබගේ සහභාගිත්වය අපගේ ආශිර්වාදයකි.',

    'countdown_target' => 'August 14, 2026 09:30:00',

    'groom_title'      => 'The Groom | මනාලයා',
    'groom_relation'   => 'අපගේ ආදරණීය පුතණුවන්',
    'groom_parents'    => 'මහින්ද & රේණුකා සිරිවර්ධන',
    'groom_location'   => 'ගම්පහ, අලුත්ගම',

    'bride_title'      => 'The Bride | මනාලිය',
    'bride_relation'   => 'අපගේ ආදරණීය දියණිය',
    'bride_parents'    => 'සුසන්ත & නිල්මි පෙරේරා',
    'bride_location'   => 'කොළඹ, ශ්‍රී ලංකාව',

    'event_title'      => 'මංගල උත්සවය',
    'event_date'       => '2026 අගෝස්තු 14',
    'event_day'        => 'සෙනසුරාදා',
    'event_time_range' => 'පෙ.ව. 09:30 - ප.ව. 03:30',
    'event_sub_type'   => 'පෝරුව උත්සවය & මංගල සභා',
    'venue_title'      => 'Suriya Resort, Waikkal',
    'venue_address'    => 'සූරිය රිසෝර්ට්, වයික්කාල',

    'google_maps_url'  => 'https://maps.app.goo.gl/UdC9RugA9bXFrA7u6', 
    'whatsapp_phone'   => '94767126118'  
];
?>
<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['couple_headline']; ?> - මංගල ඇරයුම</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Sinhala:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <script>
        window.weddingCountdownTarget = "<?php echo $config['countdown_target']; ?>";
        window.whatsappTargetPhone = "<?php echo $config['whatsapp_phone']; ?>";
    </script>

    <audio id="bgMusic" loop>
        <source src="assets/audio/intro-music.mp3" type="audio/mpeg">
    </audio>

    <div id="envelopeOverlay" class="gate-layer">
        <div class="envelope-card">
            <div class="mandala-icon gold-glow">⚜</div>
            <h2>Wedding Invitation</h2>
            <p><?php echo $config['couple_headline']; ?></p>
            <button id="openBtn" class="btn-open">Tap to Open</button>
        </div>
    </div>

    <div id="introAnimationOverlay" class="gate-layer hidden">
        <div class="intro-typography">
            <h1 id="introText1" class="intro-heading"><?php echo $config['blessing_text']; ?></h1>
            <h2 id="introText2" class="intro-subheading"><?php echo $config['couple_headline']; ?></h2>
        </div>
    </div>

    <div id="mainWebsiteContent" class="main-canvas hidden">
        
        <div id="petalContainer" class="petal-canvas"></div>

        <div class="app-container reveal-fade-in">
            
            <header class="main-header">
                <div class="top-decor">
                    <span class="gold-line"></span>
                    <div class="mandala-icon scroll-spin">⚜</div>
                    <span class="gold-line"></span>
                </div>
                <p class="blessing"><?php echo $config['blessing_text']; ?></p>
                <h1 class="couple-names"><?php echo $config['couple_headline']; ?></h1>
                <p class="invitation-text"><?php echo $config['invitation_note']; ?></p>
            </header>

            <div class="couple-frame-container">
                <div class="couple-arch-frame-wrapper">
                    <div class="couple-arch-frame">
                        <img src="assets/images/couple.jpg" alt="Couple Portrait" class="couple-img">
                    </div>
                </div>
            </div>

            <div class="green-content-wrapper">
                
                <section class="countdown-section">
                    <p class="section-title-sinhala">⚜ උත්සවයට තව දින ⚜</p>
                    <div id="countdown">
                        <div class="time-box"><span id="days">00</span><p>දින</p></div>
                        <div class="time-box"><span id="hours">00</span><p>පැය</p></div>
                        <div class="time-box"><span id="minutes">00</span><p>මිනිත්තු</p></div>
                        <div class="time-box"><span id="seconds">00</span><p>තත්පර</p></div>
                    </div>
                </section>

                <!-- Family Block Area with Stacked Sync Structure -->
                <div class="family-card info-card hover-lift">
                    <div class="card-inner-stacked">
                        
                        <!-- Groom Profile Block -->
                        <div class="family-side-stacked groom-block">
                            <p class="role"><?php echo $config['groom_title']; ?></p>
                            <h3 class="name"><?php echo $config['groom_name']; ?></h3>
                            <p class="relation"><?php echo $config['groom_relation']; ?></p>
                            <p class="parents"><?php echo $config['groom_parents']; ?></p>
                            <p class="location"><i class="fa-solid fa-map-pin small-gold-icon"></i> <?php echo $config['groom_location']; ?></p>
                        </div>

                        <!-- Traditional Punkalasa Divider -->
                        <div class="vertical-center-divider">
                            <span class="divider-line"></span>
                            <div class="punkalasa-wrapper">
                                <img src="assets/images/punkalasa.png" alt="Traditional Punkalasa" class="punkalasa-img">
                            </div>
                            <span class="divider-line"></span>
                        </div>

                        <!-- Bride Profile Block -->
                        <div class="family-side-stacked bride-block">
                            <p class="role"><?php echo $config['bride_title']; ?></p>
                            <h3 class="name"><?php echo $config['bride_name']; ?></h3>
                            <p class="relation"><?php echo $config['bride_relation']; ?></p>
                            <p class="parents"><?php echo $config['bride_parents']; ?></p>
                            <p class="location"><i class="fa-solid fa-map-pin small-gold-icon"></i> <?php echo $config['bride_location']; ?></p>
                        </div>

                    </div>
                </div>

                <div class="info-card event-card hover-lift">
                    <p class="event-main-title">⚜ <?php echo $config['event_title']; ?> ⚜</p>
                    <div class="event-layout">
                        <div class="event-details-list">
                            <div class="detail-item">
                                <div class="icon-box"><i class="fa-regular fa-calendar-days"></i></div>
                                <div class="detail-text">
                                    <h4><?php echo $config['event_date']; ?></h4>
                                    <p><?php echo $config['event_day']; ?></p>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="icon-box"><i class="fa-regular fa-clock"></i></div>
                                <div class="detail-text">
                                    <h4><?php echo $config['event_time_range']; ?></h4>
                                    <p><?php echo $config['event_sub_type']; ?></p>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="detail-text">
                                    <h4><?php echo $config['venue_title']; ?></h4>
                                    <p><?php echo $config['venue_address']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="event-decor-box">
                            <img src="assets/images/wedding-decor.jpg" alt="Decor Elements" class="decor-img">
                        </div>
                    </div>
                </div>

                <section class="rsvp-static-section">
                    <div class="rsvp-static-container">
                        <h3>⚜ ඔබගේ පැමිණීම ස්ථිර කරන්න ⚜</h3>
                        <p class="rsvp-subtext">Kindly respond to let us know if you can join our celebration.</p>
                        <form id="rsvpForm">
                            <div class="rsvp-field">
                                <input type="text" id="rsvp_name" placeholder="ඔබගේ සම්පූර්ණ නම / Full Name" required>
                            </div>
                            <div class="rsvp-field">
                                <input type="email" id="rsvp_email" placeholder="විද්‍යුත් තැපෑල / Email Address" required>
                            </div>
                            <div class="rsvp-field">
                                <select id="rsvp_attendance" required>
                                    <option value="" disabled selected>ඔබ පැමිණෙන්නේද? / Will you attend?</option>
                                    <option value="සතුටින් සහභාගී වේ / Joyfully Accept">සතුටින් සහභාගී වේ / Joyfully Accept</option>
                                    <option value="සහභාගී වීමට..." >සහභාගී වීමට නොහැක / Regretfully Decline</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-rsvp-submit">
                                <i class="fa-brands fa-whatsapp"></i> තහවුරු කර WhatsApp මඟින් එවන්න
                            </button>
                        </form>
                    </div>
                </section>

                <section class="maps-section-card info-card hover-lift">
                    <p class="maps-card-title">⚜ ස්ථානය සිතියමෙන් / Location Map ⚜</p>
                    <p class="maps-card-description">පහත සිතියම හෝ බොත්තම ක්ලික් කිරීමෙන් උත්සව ශාලාවට පිවිසීමේ මාර්ගය ලබාගන්න.</p>
                    
                    <a href="<?php echo $config['google_maps_url']; ?>" target="_blank" rel="noopener noreferrer" class="map-link-wrapper">
                        <div class="map-visual-placeholder">
                            <div class="map-overlay-tint">
                                <span class="map-pulse-pin"><i class="fa-solid fa-location-crosshairs"></i></span>
                                <p>Open In Google Maps</p>
                            </div>
                        </div>
                    </a>

                    <a href="<?php echo $config['google_maps_url']; ?>" target="_blank" rel="noopener noreferrer" class="btn-map-navigation">
                        <i class="fa-solid fa-map-location-dot"></i> Google සිතියම මඟින් දිශාවන් ලබාගන්න
                    </a>
                </section>

                <p class="bottom-blessing"><?php echo $config['bottom_blessing']; ?></p>
                <div class="bottom-divider">⚜</div>

            </div>

            <footer class="site-footer">
                <nav class="bottom-nav">
                    <a href="#" class="nav-item"><i class="fa-solid fa-lotus"></i><span><?php echo $config['couple_headline']; ?></span></a>
                </nav>
            </footer>
        </div>
    </div>

    <button id="audioToggleBtn" class="audio-fab hidden">
        <div class="audio-waves" id="audioWaves">
            <span></span><span></span><span></span>
        </div>
        <i id="audioIcon" class="fa-solid fa-volume-xmark" style="display:none;"></i>
    </button>

    <script src="assets/js/script.js"></script>
</body>
</html>
