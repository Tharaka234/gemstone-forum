 <!-- footer.php -->
<style>
    .footer {
        background-color: #003366;
        color: white;
        padding: 40px 60px 20px;
        font-family: Arial, sans-serif;
    }

    .footer-top {
        display: flex;
        justify-content: center; /* Keep center alignment */
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 60px;
        margin-bottom: 30px;
    }

    .footer-column {
        flex: 1 1 300px;
        max-width: 300px;
    }

    .footer-column h4 {
        margin-bottom: 12px;
        color: #66b3ff;
    }

    .footer-column a {
        display: block;
        color: white;
        text-decoration: none;
        margin-bottom: 6px;
        transition: color 0.3s ease;
    }

    .footer-column a:hover {
        color: #66b3ff;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 10px;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 10px;
        flex-wrap: wrap;
    }

    .social-icons a {
        color: white;
        font-size: 22px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: #66b3ff;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer-top {
            flex-direction: column;
            text-align: center;
            align-items: center;
        }

        .footer-column {
            max-width: 100%;
            margin-bottom: 20px;
        }

        .footer-column.contact {
            margin-right: 0 !important;
        }

        .footer-column.links {
            margin-left: 0 !important;
        }
    }
</style>

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<div class="footer">
    <!-- Top Section -->
    <div class="footer-top">
        <!-- Contact Info -->
        <div class="footer-column contact" style="text-align: left; margin-right: 40px;">
            <h4>Contact Info</h4>
            NO.28/1, Sri Sumana Road, Mudduwa, Ratnapura Road<br>
            Sri Lanka<br>
            Phone: +94 77 698 2596<br>
            Email: <a href="mailto:crystalislesgems@gmail.com">crystalislesgems@gmail.com</a>
        </div>

        <!-- Quick Links -->
        <div class="footer-column links" style="text-align: left; margin-left: 40px;">
            <h4>Quick Links</h4>
            <a href="blue_sapphire.php">Blue Sapphire</a>
            <a href="green_sapphire.php">Green Sapphire</a>
            <a href="yellow_sapphire.php">Yellow Sapphire</a>
            <a href="white_sapphire.php">White Sapphire</a>
            <a href="pink_sapphire.php">Pink Sapphire</a>
        </div>
    </div>

    <!-- Bottom Section - Social Icons -->
    <div class="footer-bottom">
        <h4 style="color: #66b3ff;">Social Media</h4>
        <div class="social-icons">
            <a href="https://www.facebook.com/share/192JSWqtq5/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/_crystalisles_/"><i class="fab fa-instagram"></i></a>
            <a href="https://chat.whatsapp.com/CpB5kJ93XKW4qdjSr6hmpa"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.linkedin.com/in/crystalisles-gems-7743b9367?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

