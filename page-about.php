<?php 

/**
 * Template Name: About Us
 */

get_header(); 

?>

    <style>
        div#about_us_page{
            padding-bottom: 4rem;
        }

        div#about_us_page .row_one, div#about_us_page .row_two , div#about_us_page .row_three, div#about_us_page .row_four, div#about_us_page .row_five{
            padding-top: 1rem;
            padding-bottom: 2rem;
        }

        div#about_us_page .main_category_heading a {
            color: #dd3333;
        }

        div#about_us_page .main_category_heading a span {
            font-size: 15px;
            text-decoration: underline;
            color: #ff1717;
            font-family: system-ui;
        }
        div#about_us_page .title h4 {
            color: #ffffff;
            font-size: xx-large;
            background: #dd3333c4;
            padding: 1rem 1rem 0.5rem;
            text-align: center;
        }
        div#about_us_page .tead_heading ul {
            list-style-type: none;
            display: inline-grid;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
            gap: 20px;
        }

        @media only screen and (max-width: 900px) {
            div#about_us_page .tead_heading ul {
                list-style-type: none;
                display: inline-grid;
                padding: 0;
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
                gap: 20px;
            }
        }

        @media only screen and (max-width: 600px) {
            div#about_us_page .tead_heading ul {
                list-style-type: none;
                display: inline-grid;
                padding: 0;
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
                gap: 20px;
            }
        }

        div#about_us_page .tead_heading ul li {
            text-align: center;
        }

        div#about_us_page .tead_heading ul li span {
            background: #dd3333c4;
            color: #fff;
            padding: 0 3rem;
            border: 3px solid #475c9c;
        }
    </style>
    <div id="about_us_page">
        <div class="container">
            <div class="main_category_heading">
                <h1 class="heading"><a>(हाम्रोबारे) <span>About Us</span></a></h1>
            </div>
            <div class="row_one">
                <div class="tead_heading">
                    <div class="title">
                        <h4>निर्देशक</h4>
                    </div>
                    <ul>
                        <li>
                            <h4>अध्यक्ष तथा प्रबन्ध निर्देशक</h4>
                            <span>प्रदीप साह</span>
                        </li>
                        <li>
                            <h4>कार्यकारी निर्देशक</h4>
                            <span>अनु गुप्ता</span>
                        </li>
                        <li>
                            <h4>प्रमुख सम्पादक</h4>
                            <span>विशाल श्रेष्ठ</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row_two">
                <div class="tead_heading">
                    <div class="title">
                        <h4>सम्पादक</h4>
                    </div>
                    <ul>
                        <li>
                            <h4>सम्पादक</h4>
                            <span>स्मित सिंह</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row_three">
                <div class="tead_heading">
                    <div class="title">
                        <h4>फोटोग्राफी र मल्टिमिडिया</h4>
                    </div>
                    <ul>
                        <li>
                            <h4>फोटो पत्रकार</h4>
                            <span>जितु सर्राफ</span>
                        </li>
                        <li>
                            <h4>फोटो पत्रकार</h4>
                            <span>मनिष कुमार कानु</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row_four">
                <div class="tead_heading">
                    <div class="title">
                        <h4>क्षेत्रीय रिपोर्टरहरू</h4>
                    </div>
                    <ul>
                        <li>
                            <h4>(वीरगन्ज)</h4>
                            <span>हिरा कुमार चौरसिया </span>
                        </li>
                        <li>
                            <h4>(वीरगन्ज)</h4>
                            <span>अनुज गुप्ता </span>
                        </li>
                        <li>
                            <h4>(चितवन)</h4>
                            <span>शिवम अर्याल </span>
                        </li>
                        <li>
                            <h4>(नारायणघाट)</h4>
                            <span>कृष्ण कुमार </span>
                        </li>
                        <li>
                            <h4>(वीरगन्ज)</h4>
                            <span>पुरुषोत्तम गुप्ता </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row_five">
                <div class="tead_heading">
                    <div class="title">
                        <h4>वेबसाइट विकासकर्ता</h4>
                    </div>
                    <ul>
                        <li>
                            <h4>ग्राफिक डिजाइनर</h4>
                            <span>सुमन भट्टराई</span>
                        </li>
                        <li>
                            <h4>सफ्टवेयर डेभलपर</h4>
                            <span>गोविन्द सोनी</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>