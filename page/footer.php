<footer id="footer">
    <div class="footer-content">
        <p>&copy; 2024 Lothaire Quintard. Tous droits réservés.</p>
        <ul class="social-links">
            <li><a href="https://www.linkedin.com" target="_blank">LinkedIn</a></li>
            <li><a href="https://github.com/Bozo9710" target="_blank">GitHub</a></li>
        </ul>
    </div>
</footer>

<style>
/* Styles du footer */
#footer {
    background: linear-gradient(to right, #ff6347, #00bcd4); 
    color: white;
    padding: 20px 0;
    text-align: center;
    position: relative;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.2);
    animation: backgroundAnimation 3s ease-in-out infinite;
}



.footer-content {
    max-width: 1200px;
    margin: 0 auto;
}

.footer-content p {
    font-size: 1rem;
    margin: 0;
    color: #fff;
    animation: pulseText 2s infinite;
}

/* Animation du texte de copyright */
@keyframes pulseText {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.05); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}

.social-links {
    list-style: none;
    padding: 0;
    margin-top: 10px;
}

.social-links li {
    display: inline-block;
    margin-right: 20px;
    transition: transform 0.3s ease;
}

/* Effet de mouvement au survol des éléments de la liste */
.social-links li:hover {
    transform: translateY(-5px);
}

.social-links a {
    text-decoration: none;
    color: #fff;
    font-size: 1.2rem;
    transition: color 0.3s, transform 0.3s;
}

.social-links a:hover {
    color: #007BFF;
    transform: scale(1.1);
}

@media (max-width: 768px) {
    .footer-content {
        padding: 10px;
    }
    .social-links li {
        margin-right: 10px;
    }
}
</style>
