const openBtn = document.getElementById('openBtn');
const envelopeOverlay = document.getElementById('envelopeOverlay');
const introAnimationOverlay = document.getElementById('introAnimationOverlay');
const mainWebsiteContent = document.getElementById('mainWebsiteContent');
const bgMusic = document.getElementById('bgMusic');
const audioToggleBtn = document.getElementById('audioToggleBtn');
const audioIcon = document.getElementById('audioIcon');
const audioWaves = document.getElementById('audioWaves');
const introText1 = document.getElementById('introText1');
const introText2 = document.getElementById('introText2');

// Trigger Entrance Screen Transitions
openBtn.addEventListener('click', () => {
    envelopeOverlay.classList.add('hidden');
    introAnimationOverlay.classList.remove('hidden');
    
    // Inject typography layout classes *ONLY ON CLICK* to prevent execution pre-rendering desyncs
    introText1.classList.add('run-anim-1');
    introText2.classList.add('run-anim-2');
    
    bgMusic.play().then(() => {
        audioWaves.classList.add('playing');
    }).catch(err => console.log("Audio permission delay context trace:", err));

    setTimeout(() => {
        introAnimationOverlay.classList.add('hidden');
        mainWebsiteContent.classList.remove('hidden');
        audioToggleBtn.classList.remove('hidden');
        
        initializePetalFallEngine();
    }, 5000);
});

// Audio Track Volume Adjustments Engine
audioToggleBtn.addEventListener('click', () => {
    if (bgMusic.muted) {
        bgMusic.muted = false;
        audioIcon.style.display = "none";
        audioWaves.style.display = "flex";
        audioWaves.classList.add('playing');
    } else {
        bgMusic.muted = true;
        audioWaves.classList.remove('playing');
        audioWaves.style.display = "none";
        audioIcon.style.display = "block";
    }
});

// Continuous Petals Flow Matrix Generation Loop
function initializePetalFallEngine() {
    const container = document.getElementById('petalContainer');
    const totalPetalsCount = 25;
    for (let i = 0; i < totalPetalsCount; i++) {
        createIndividualPetalNode(container);
    }
}

function createIndividualPetalNode(targetParent) {
    const petal = document.createElement('div');
    petal.classList.add('falling-petal');
    const scaleFactor = Math.random() * 8 + 6;
    petal.style.width = `${scaleFactor}px`;
    petal.style.height = `${scaleFactor}px`;
    petal.style.left = `${Math.random() * 100}%`;
    petal.style.animationDuration = `${Math.random() * 5 + 6}s`;
    petal.style.animationDelay = `${Math.random() * -10}s`;
    targetParent.appendChild(petal);
}

// Live Countdown Date Parser 
const countdownDateTarget = new Date(window.weddingCountdownTarget || "August 14, 2026 09:30:00").getTime();

const liveTimerClock = setInterval(() => {
    const timeNow = new Date().getTime();
    const timeDistanceRemaining = countdownDateTarget - timeNow;

    const days = Math.floor(timeDistanceRemaining / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDistanceRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDistanceRemaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDistanceRemaining % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days < 10 ? "0" + days : days;
    document.getElementById("hours").innerText = hours < 10 ? "0" + hours : hours;
    document.getElementById("minutes").innerText = minutes < 10 ? "0" + minutes : minutes;
    document.getElementById("seconds").innerText = seconds < 10 ? "0" + seconds : seconds;

    if (timeDistanceRemaining < 0) {
        clearInterval(liveTimerClock);
        document.getElementById("countdown").innerHTML = "<div style='grid-column: span 4; color:#dfba73; text-align:center; font-weight:bold;'>මංගල උත්සවය ඇරඹී ඇත!</div>";
    }
}, 1000);

// ==========================================================================
// DYNAMIC LIVE WHATSAPP DATA TRANSMISSION INTERCEPTOR
// Extracts form data dynamically and launches WhatsApp immediately
// ==========================================================================
document.getElementById('rsvpForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Stop standard form reloading completely

    // Retrieve input field values dynamically
    const guestName = document.getElementById('rsvp_name').value.trim();
    const guestEmail = document.getElementById('rsvp_email').value.trim();
    const guestChoice = document.getElementById('rsvp_attendance').value;
    const phoneTargetNumber = window.whatsappTargetPhone;

    // Compose a beautifully structured text message
    const messageTemplate = 
`*විවාහ මංගල RSVP තහවුරු කිරීම*

*නම / Name:* ${guestName}
*විද්‍යුත් තැපෑල / Email:* ${guestEmail}
*තීරණය / Response:* ${guestChoice}

ස්තූතියි!`;

    // Encode text strings safely to make them compliant with web URLs
    const encodedMessage = encodeURIComponent(messageTemplate);
    const whatsappFinalUrl = `https://api.whatsapp.com/send?phone=${phoneTargetNumber}&text=${encodedMessage}`;

    // Open WhatsApp directly in a new dedicated background window frame channel
    window.open(whatsappFinalUrl, '_blank');
});