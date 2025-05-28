<footer class=" p-3 mt-2 items-center">
    <section class="flex container-width  justify-between">
        <div class="hidden footer-container">
            <div class="footer-column">
                <h2>DIVA.ME PERSONAL</h2>
                <address>
                    Studio 2,<br>
                    02 Rutland Street,<br>
                    Newtown, Victoria - 3220,<br>
                    Cambodia.<br><br>
                    TEL 855 963 7744 364<br>
                    ACLIDA 096 377 4384
                </address>
            </div>
            <div class="footer-column">
                <h3>COMPANY</h3>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Open Source</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Terms of use</a></li>
                    
                </ul>
            </div>
            <div class="footer-column">
                <h3>SERVICES</h3>
                <ul>
                    <li><a href="#">AI Automation</a></li>
                    <li><a href="#">Consulting</a></li>
                    <li><a href="#">Generative AI</a></li>
                    <li><a href="#">Hosting & Security</a></li>
                    <li><a href="#">Personalisation</a></li>
                    <li><a href="#">Research Agents</a></li>
                    <li><a href="#">Web Development</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>EXPERIMENTS</h3>
                <ul>
                    <li><a href="#">Astro AI</a></li>
                    <li><a href="#">Emojiser</a></li>
                    <li><a href="#">imaGenie</a></li>
                    <li><a href="#">Spiritual AI</a></li>
                    <li><a href="#">Warehouse Bot</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container-width flex flex-row justify-between text-center max-md:flex-col">
        <div class="gap-1">
            <p>
                Copyright © {{ now()->setTimezone('Asia/Phnom_Penh')->format('Y h:i') }}
                <span id="live-clock"></span> |
                divas.net | All Rights Reserved
            </p>
        </div>
        <div class="gap-4 flex">
            <a href="#">Facebook</a>
            <a href="#">Git Hub</a>
            <a href="#">You Tube</a>
            <a href="#">Likend</a>
        </div>
    </section>
</footer>
<script>
    function updateClock() {
        const now = new Date();
        const seconds = String(now.getSeconds()).padStart(2, '0');

        const timeString = `:${seconds}`;
        document.getElementById('live-clock').textContent = timeString;
    }

    setInterval(updateClock, 1000); // update every second
    updateClock(); // initial run
</script>
