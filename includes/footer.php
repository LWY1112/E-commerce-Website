<!-- this code is footer navigation bar in website -->
<!DOCTYPE html>
<html>
<head>
    <title>Your Website</title>
    <style>
        /* Footer container */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            margin-top: 50px; /* Adjust as needed */
        }

        /* Footer content */
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        /* Footer bottom */
        .footer-bottom {
            background-color: #222;
            padding: 10px 0;
            font-size: 12px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-content">
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: <a href="mailto:digiden@gmail.com" style="color: white;">digiden@gmail.com</a></p>
                <p>Phone: 017-878 9432</p>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2024 DigitalDen. All rights reserved.
        </div>
 

    <!--To translate the page into any language, provided by Google-->
    <div id="google_translate_element"></div>
<script>
function google_translate_elementInit(){
    new google.translate.TranslateElement({ pageLanguage: 'en'}, 'google_translate_element');
}</script>
<script src="//translate.google.com/translate_a/element.js?cb=google_translate_elementInit"></script>
   </footer>
</body>
</html>