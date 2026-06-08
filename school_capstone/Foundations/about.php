<!--
CSIS 410: Web Development: Foundations Assignment#
By: Victoria Young
Date Due: 5/25/2026

References: 
A, T. (n.d.). How to create and use a phpinfo file to check your PHP information – Hostinger Tutorials. Hostinger.com. Retrieved May 23, 2026, 
from https://www.hostinger.com/ng/tutorials/how-to-create-phpinfo-file

Dumlao, N. (2017, November 17). Three people holding coffees. Unsplash. Retrieved May 24, 2026, from https://unsplash.com/photos/three-person-holding-mug-and-glass-with-beverage-inside-71u2fOofI-U

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

Seven Weeks Coffee® | Drink coffee. Save Lives. (n.d.-b). Seven Weeks Coffee. Retrieved May 23, 2026, from https://sevenweekscoffee.com/

W3Schools.com. (2026). W3schools. Retrieved May 24, 2026, from https://www.w3schools.com/pHp/php_includes.asp

Purpose of this page: This page displays the about section of the 
coffee company I invented. 

Honesty Statement: I promise I wrote this cord, line by line,
not using any help or any previous code.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Foundations: About</title>
        <link rel="stylesheet" href="styles.css"> <!--Only styles the menu for all pages-->
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">   
    </head>
    <body>
     <!--menu-->
    <div class="wrapper">
        <div class="menutitle">
            <h1>Let it Bean</h1>
        </div>
        <div class="menu">
            <?php 
             //show menu
            include 'menu.php'; ?>
        </div>
    </div> <!--end menu-->

    <?php
    //showing the report for what this company is going to be.
    echo '
        <div class="php_content">
        <p><b>Let it Bean</b> focuses on building community through coffee and good christian books, 
        donating their earnings to charities and hosting church events to help spread the Gospel through 
        communion.
        </br>
        The name <b>Let it Bean</b> is a play on words for "Let it Be". I wanted it to support a calm atmosphere
        where people can come to rest and be together. This is a place where churches can host 
        events to host bible studies, youth group, mens group, and womens meetings. Visitors can purchase Christian books, such as
        Bibles, books written by self-published Christian authors, and other stationery. I wanted to have the Christian company to also donate 10% of their monthly earnings to a charity group of their members choice. (Which would
        be voted on their blog on the site I create).
        </br> 
        <p>It was inspired by Seven Weeks Coffee company, which
        is a Christian company where every purchase helps fund a local pregnancy center, 
        supporting moms and saving unborn lives. Only for this company, I wanted to focus on community building and basically create
        a place I wish existed in my current hometown.</p>
        <hr>
        <p>Here is a list of features I was brainstorming that this website would include:</p>
        </br>
        
        <ul class="info">
            <li><h2>Bakery Front and Coffee:</h2> It would sell baked goods and coffee, (online and in house), donating 10% monthly profits
            to the Bean Members choice. Voting would be available on the site, announcement made a week into 
            the new month.</li>
            <hr>
            <li><h2>Christian Bookstore:</h2> It would sell Bibles, Christian books such as devotionals, and other stationery like notebooks,
            pens, and maybe coffee mugs or a hoodie with the logo on it. 10% of total monthly profits would also go to the monthly
            charity.</li>
            <hr>
            <li><h2>Blog:</h2> The Let it Bean Blog would have some posts viewable by Members only, announcing events they are hosting for Members, special
            coupons or deals on books or food goods, and the ability to vote or suggest a charity to support every month.
            </br> 
            </br>
            Blog topics viewable by everyone would include new seasonal product launches, book signing events for Christian authors,
            and donation announcements to introduce who they are supporting and accept support on their site.</li>
            <hr>
            <li><h2>Some other ideas:</h2> The coffees would be named after scripture puns, and so would the baked goods. I think it would
            be cute. The donations would be accepted on the home page as well with a donate button.</li>
        </ul>
        </div>';
    ?><!--end report-->

    <!--footer-->
    <div class = "footer">
        <div class="footer-left">
        <a href="../index.php"><h3>Return to Master Menu</h3></a>
        </div>
        <div class="footer-right">
        <?php
        //show last modified
        include 'lastmodified.php';
        ?>
        </div>
    </div>
    <!--end footer-->
    </body>
</html>