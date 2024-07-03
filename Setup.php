<?php
/*

    1. For Login

  - http://localhost/wordpress/wp-admin/

  - wordpress Folder name
  - wp- by default 
  - admin username
  - Username : pathik424
  - Password : Ppathik@424$

________________________________________________________________________________________________________________________________________________
2. Theame Selection


- Appearance/theames
- Click on Add New Theames
- Click Install/Activation

________________________________________________________________________________________________________________________________________________

3. Create Page 


- Add New Pages & Select Pages Name
- Add Page Name
________________________________________________________________________________________________________________________________________________

4. Menus

- Appearance/Menu
________________________________________________________________________________________________________________________________________________

5. Post

- Post/All Posts

________________________________________________________________________________________________________________________________________________

6. Pagination 

-Setting/Reading/BlogPageShowatmost

________________________________________________________________________________________________________________________________________________

7. Default Page Set

-Setting/Reading/Your Home Page Display/A static Page /Home(Blogs)
________________________________________________________________________________________________________________________________________________

8. all Post set in one page

-Setting/Reading/Your Home Page Display/A static Page / Post Page(AllBlogs)
________________________________________________________________________________________________________________________________________________

9. Pages Set to Comment Section added

-Go To Pages/SelectPage/QuikeEdit/Select Allow Comment
________________________________________________________________________________________________________________________________________________

10. Post Set to Comment Section added

-Go To Post/SelectPost/QuikeEdit/Select Allow Comment 

________________________________________________________________________________________________________________________________________________

11. Custom Links 

-Appearance/Menus/CustomLinks/
- anathi koi biji website ni link add karvi hase to thase jena par click karsu to bija menu ma javase

________________________________________________________________________________________________________________________________________________

12. Permalink

- setting/permalink
- url mate use thay post ma click kare tyare url kevi rite batavi che Plain/Day and Name/Month and Name/Numeric/PostName/CustomeStructure
________________________________________________________________________________________________________________________________________________

13. Widgets 

- setting/widgets
- Widgets use ena mate thay ke serach bar ke calendar ke e header ma ke foter ke sidebar ma use karva mate

________________________________________________________________________________________________________________________________________________
13. Rss 

- setting/widgets
- RSS is type of widgets serching like api and add link 
- cricket news rss feed url
- https://www.espncricinfo.com/ci/content/rss/feeds_rss_cricket.html
- RSS Url Virat : https://www.espncricinfo.com/rss/content/story/feeds/253802.xml

________________________________________________________________________________________________________________________________________________

14. Visitors Counter Plugin 

- WPS Visitor Counter Plugin Serch on 
- install Visitors Plugin and Active
- after activation see on seetings and last option WPS Visitor Counter Plugin click and modify
________________________________________________________________________________________________________________________________________________

15. Passworrd Protected Post

------ For Page
- Create New Page
- Page/Visibility/Change Public to Password Protected
------ For Post
- Create New Post
- Page/Visibility/Change Public to Password Protected
________________________________________________________________________________________________________________________________________________

16.  Increase Maximum Upload File Size

- filemanager go to - D/Xampp/htdocs/Blog(wordpressfoldername/ourwebsiteFolder)/.htaccess
- Code :
/////////////////////////////////////
php_value upload_max_filesize 128M                                              //  File Upload Mate 
php_value post_max_size 128M                                                    //  Form banaviye ema file upload ni pan size vadhhi jase 
php_value memory_limit 256M                                                     //  Ketli Memory sudhi data jase
php_value max_execution_time 300                                                //  Execution Time 300 second thai gayu
php_value max_input_time 300                                                    //  Input Time Pan 300 Second Thai Gayu
/////////////////////////////////////

- uparno code .htaccess ma jaine 

RewriteRule . /Blog/index.php [L]
</IfModule>

- a banne ni vachche jaine past kari devo
________________________________________________________________________________________________________________________________________________

17. Duplicate Page and Post Plugin

- Yoast Duplicate Post (plugin Name) 
- By Enrico Battocchi & Team Yoast
- Go to Post Section Select Older Post

- A Few Words About Regular Cat Grooming!
Edit | Quick Edit | Trash | View | Clone | New Draft | Rewrite & Republish

- Click on Clone 
- Copy Same Post including in Draft

________________________________________________________________________________________________________________________________________________
18. How to Create WordPress Slider using Smart Slider Plugin?

- https://www.youtube.com/watch?v=k8I2pWjwo-w&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=41    
- Open Smart Slider
- Go to Dashboard
- New Project 
- Create New Project
       - Select 
       Project Type : Slider
       Slider Type : Simple
       Name : My Project
       Width : 1200
       Height : 600
       Layout : Boxed
       Submit
       - Go to General / Copy Shortcode : [smartslider3 slider="2"]
       - Bija Pan Settings Che
________________________________________________________________________________________________________________________________________________

19. How To Add Button & Heading Using Smart Slider 3 WordPress Plugin?

- Go to Smart Slider
- Edit First Slider
________________________________________________________________________________________________________________________________________________
________________________________________________________________________________________________________________________________________________

20. Installation & Easy Setup WP SMTP in WordPress with Contact Form 7 

- https://www.youtube.com/watch?v=oa901YVOTnk&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=43
- use 2nd link to watch & Follow mail setting bcz ema run thayu hatu
- https://www.bing.com/videos/riverview/relatedvideo?&q=how+to+send+mail+through+Easy+WP+SMTP+use+Contact+Form+7&&mid=22E112AA5DC0BADE381B22E112AA5DC0BADE381B&&FORM=VRDGAR
- use plugin : Easy WP SMTP 
- by : Version 2.3.0 | By Easy WP SMTP | View details
- Contact Form Through Mail Sent
- Mail Setting Easy WP SMTP a plugin ma thase
-           Mailer Setting :
- Select Other SMTP
- SMTP Host : smtp.gmail.com
- Type of Encryption : SSL
- SMTP Port : 465
- Auto TLS : on
- SMTP Authentication : ON
- SMTP Username : our mail (p4pathik424@gmail.com)
- SMTP Password : (App Pass Key Generate From 2nd step Verification)

--------------- Contact Form :

-<label>Select Gender *[radio radio-490 use_label_element default:1 "Male" "Female"]</label>
<label>Select Cource *[checkbox* checkbox-682 use_label_element "Java" "php" "Laravel"]</label>
<label>photo[file* photo limit:20mb filetypes:image|pdf|csv]</label>
<label>First name *[text* text-755 placeholder "First Name"]</label>
<label>Last name *[text* text-756 placeholder "Last Name"]</label>

<label> Your email
[email* email-179 placeholder "Email" ] 
</label>

<label> Address (optional)
                   [textarea textarea-861 placeholder "Address"] 
                   </label>
                   
                   [quiz quiz-618 "8+4=?|12" "What is Wordpress?|CMS"]
                   
                   [submit "Send"] 
                   
                   
                   
                   
                   ------------------ Mail :
                   
                   to : pathik.aorch@gmail.com
                   From : Grooming <p4pathik424@gmail.com>
                   Subject : Grooming "[text-755]" (Note : number hase e call thase text-755 means First Name)
                   Message body : 
                   
                   From: [text-755][text-756]*******[email-179]

                   
                   Message Body:
                   Name:[text-755] [text-756]
                   Email :  [email-179]
                   Address : [textarea-861]
                   Gender : [radio-490]
                   Cource :  [checkbox-682]
                   
                   
                   -- 
                   This is a notification that a contact form was submitted on your website (http://localhost/Blog/)
                    
                    File attachments : [photo] (note: upar je contact form ma name apyu hoy photo nu e)
                    
                    
                    
                    21. Message Popup For Contact Form 7 - How to Add in WordPress?
                    
                    
                    - https://www.youtube.com/watch?v=5JiLSOm5Iy8&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=46
                    - Plugin : Message Popup Contact Form 7
                    - go to Contact Form 7 / Edit Form/ Go to Popup Setting
________________________________________________________________________________________________________________________________________________
________________________________________________________________________________________________________________________________________________

22. How to Embed PDF on Your WordPress Website (Step By Step Guide)

- Plugin : PDF Embedder
- by : Version 4.7.1 | By PDF Embedder | View details
- https://www.youtube.com/watch?v=WKIZl309FtI&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=48
- Go to page
- edit page 
- add And search  PDF Embedder select pdf file and update page
- Attached PDF File Show in Edited Page
________________________________________________________________________________________________________________________________________________

23. Widgets Options (Widgets na Headers hase e hide thai jase )

- https://www.youtube.com/watch?v=JZmShJLAp9A&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=49
- plug in : Widget Options – The #1 WordPress Widget & Block Control Plugin
- by - Widget Options Team
- Go to Appearance/Widgets/any Widgets open/Go to Setting/Click on hide and save.
________________________________________________________________________________________________________________________________________________

24. How to Easily Create Tables in WordPress with TablePress Plugin - WordPress Plugins

- https://www.youtube.com/watch?v=mrk78f03lqo&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=50
- plugin : TablePress
- By :  By Tobias Bäthge | View details | FAQ | Documentation | Support | Go Premium
-
________________________________________________________________________________________________________________________________________________

25. Hide Footer

- Go to Theame File Editor / Select Style.css / Go to End to the page /
.footer-credits-text{
  display:none;
}

-.footer-credits-text Which is Class of footer part
________________________________________________________________________________________________________________________________________________

26. Click to chat to Whats App


- https://www.youtube.com/watch?v=_Ov5HpJ_33o&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=51
- plug in : Click to Chat – HoliThemes
- By HoliThemes
- Go to plugin Click on chat Settings
- Whats App Number : admin
- Pre Filled Message : Hello Dog Grooming Related Query
- Call on action : button name
________________________________________________________________________________________________________________________________________________
________________________________________________________________________________________________________________________________________________


27. Disable Right Click for WP

- https://www.youtube.com/watch?v=r40tDO-U4bU&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=52
- pluguin : Disable Right Click for WP
- By Aftab Muni
- go to setting and click on Disable Right Click for WP
- Show messages on Disable Events : Click on Yes
________________________________________________________________________________________________________________________________________________

28. How to Create a User Management System on WordPress Website | WordPress Plugins

- https://www.youtube.com/watch?v=MUr3vTxLmuA&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=56
- plugin : Ultimate Member
- Version 2.8.6 | By Ultimate Member | View details
- Going to Settings/General/ click on Membership :  Anyone can register / Save
- Going to Ultimate Member/ Dashboard / Select Create Page / Save / All Pages Creat in Page Section 
- Lagin Karya Pehla 3 Pages Set - Register/Login/Reset
-
________________________________________________________________________________________________________________________________________________

30. WooCommerec Plugin (Creation for E-commerece Website)

- What is options Available 
- Option Avaialable For Create Category
- Option Avaialable For Create Tags
- Option Avaialable For Create Product
- Option Avaialable For Create price  
- Option Avaialable For Create gallary
- Option Avaialable For Create single image
- Option Avaialable For Create product name
- Option Avaialable For Create product add in text
- Option Avaialable For Create Product Shipping 

- Plugin : woocommerce
- By Automattic
________________________________________________________________________________________________________________________________________________

    #### Show Default Page :

    WooCommerce/status/woocommerec Pages
________________________________________________________________________________________________________________________________________________

31. WooCommerce Smart COD

- Its Use For Cash on Delivery Extra Extra Features
- Version 1.7.2 | By woosmartcod.com | View details

________________________________________________________________________________________________________________________________________________

32. Login Page Design CHange

- Plugin : Erident Custom Login and Dashboard
- By David Vongries
________________________________________________________________________________________________________________________________________________
________________________________________________________________________________________________________________________________________________
________________________________________________________________________________________________________________________________________________
________________________________________________________________________________________________________________________________________________
________________________________________________________________________________________________________________________________________________


Task Complete :

1. Page Builders 

            1. Elementor
            2. Wp Backery
            3. Divi
________________________________________________________________________________________________________________________________________________

  2. WooCommerec


  3. Forms 
      
         Contact Form 7 : Connect with Google Sheet 
         Link : https://www.youtube.com/watch?v=iuuZLwLT7GY&list=PLSoJJghaAk8WqzjdMXWPniw_1q5oFWBAj&index=7
         Step 1 : 

         Install Plugin : CF7 Google Sheets Connector
                          By GSheetConnector

         Go to Contact / Google sheet
         Google Access Code / Connect with google / Save
         Go to Contact Forms / Google sheet


         Google Sheet Name : form (note : create form name sheet in google sheet)
         Google Sheet Id : d/11y7YASpFVi8NBdlopol1AhHJe6P7sEusrOgNWhPCZ2Y (Note : google sheet web address copy start after d/ copy code /)
         Google Sheet Tab Name : Sheet1
         Google Tab ID : 0 (note : click on tab : gid=0)

_________________________________________________________________________________________________________________________________________________________
         
         
         For : Submit Contact us data shows to admin file 
         https://www.youtube.com/watch?v=arCAJZc9cHY&list=PLSoJJghaAk8WqzjdMXWPniw_1q5oFWBAj&index=8
         Plugin : Contact Form 7 Database Addon – CFDB7
         By Arshid
         
_________________________________________________________________________________________________________________________________________________________
         
         
         For Recaptcha
         https://www.youtube.com/watch?v=BZ8tqKsw6es&list=PLSoJJghaAk8WqzjdMXWPniw_1q5oFWBAj&index=11
         
_________________________________________________________________________________________________________________________________________________________



        For Ninja Form 
        https://www.youtube.com/watch?v=q9b_VeIsUzg
        Plugin : Ninja Forms – The Contact Form Builder That Grows With You
        By Saturday Drive
_________________________________________________________________________________________________________________________________________________________

For Forminator Form
https://www.youtube.com/watch?v=oukAQw-pLQI&list=PL3n5E7JAogapU2U8F6XLNQp2lLvMjEEzz
plugin : Forminator – Contact Form, Payment Form & Custom Form Builder
By WPMU DEV
_________________________________________________________________________________________________________________________________________________________


Yoast SEO Service :

--- 500 pages++ hoy to Pre. Plugin use karvu

    --- Plugin : Yoast SEO
    By Team Yoast               
    
_________________________________________________________________________________________________________________________________________________________

Site Optimization in wordpress :

Plugin : WP-Optimize - Clean, Compress, Cache
Version 3.3.2 | By David Anderson, Ruhani Rabin, Team Updraft | View details
Video : https://www.youtube.com/watch?v=SYizF37NgME


go to Wp-Optimization / Dashboard /
go to Wp-Optimization / Iamges and Optimiztion 
go to Wp-Optimization / Images / Automatically compress newly-added images - enable For upload karse tyare j compress thai jase
go to Wp-Optimization / Images / Compression options / Select - Prioritize maximum compression 

_________________________________________________________________________________________________________________________________________________________

Custumize Theame :  

https://www.youtube.com/watch?v=wIFQabTDZ70&list=PLjVLYmrlmjGc_A9H4NSLEHaD8kSz9Q38g

Requirement Basic Files For Theame :

1. Style.css
2. Index.php
- Page.php
- Header.php
      - footer.php
      -function.php
      3. Comments.php
      4. screenshot.png
      
_________________________________________________________________________________________________________________________________________________________

FOr Path HTML 
      
      1. echo get_template_direcrory_uri();
      2. bloginfo('templete_Directory')
      
      <?php echo get_template_directory_uri(); 
      bloginfo('template_directory'); 
?>




<?php echo get_template_directory_uri();?>/ 

on Index Page Theame Sudhi no Path Malse Ek jatni link bani gayi e badha src ma lakhi devani

_________________________________________________________________________________________________________________________________________________________

For Header Footer

<?php 

get_header();
get_footer();

?>

Index File ma upar Jaine Api devanu pachi Header.php ma header part lai javano index mathi

_________________________________________________________________________________________________________________________________________________________

Register Nav Menu 

- register_nav_menus()
- wp_nav_Menu()


- register_nav_menus() // ano meaning e thay ke ketla menu admin ma joi che
- wp_nav_Menu() // Call Karva MAte Dynamic Menu
- Functions.php

<?php

register_nav_menus(
  array('primary-menu' => 'Header Index Menu')
  )
  ?>
  
  Go to/ Menus / Display location : Header Index Menu Select
  
_________________________________________________________________________________________________________________________________________________________


link apva mate :

<?php
//Template Name:fashion

get_header();

?>

_________________________________________________________________________________________________________________________________________________________

How to Display WordPress Posts in a Grid Layout 

have_posts()
the_posts()
_________________________________________________________________________________________________________________________________________________________
_________________________________________________________________________________________________________________________________________________________

<?php 

get_header();

?>
<?php
while(have_posts()) {
  

the_post(); // For Counting loop Compulsory

//for Image

$imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
?>

<div class = "blog-iteam">
<img src="<?php echo $imagepath[0] ?>" />
<h2><?php the_title() ?></h2>
</div>


<?php   } ?>

      <?php 
      
      get_footer();
      
      ?>

<?php the_title() // Title Show Karava Mate ?>
<?php echo the_excerpt(); // Short Description Mate ?>
<?php echo get_the_date(); // Date loop mate?>
<?php echo the_author(); // Post Kone Kari che ?>

 //for Image
 $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
 <img src="<?php echo $imagepath[0] ?>">
_________________________________________________________________________________________________________________________________________________________

For pAGINATION IN Custome Theame

https://www.youtube.com/watch?v=1dfOFQO4Dtk&list=PLjVLYmrlmjGc_A9H4NSLEHaD8kSz9Q38g&index=14

----------------Anathi e thase ke Plugin ni je pan css hase e call thase header ma ane footer ma jaine e call lakhvo

// Go to header 

<?php wp_head(); ?>

// Go to footer 

<?php wp_footer(); ?>

Index file ma jaine <?php echo wp_pagenavi(); ?>

ane 1 page par ketli post joi e chiye e setting/reading/Blog pages show at most	
_________________________________________________________________________________________________________________________________________________________


For Comment Section adding :

<?php comment_form(); ?> 

// add above line add in single.php page

<?php //comment_form(); // ama khali contact form j dekhase?> 

<?php comments_template(); // ama contact form ane Comment section pan avi jase form?>

_________________________________________________________________________________________________________________________________________________________

add widgets section add in custome theame:


// First Function.php ma jaine niche varo code run karavano anathi widgets no option admin table ma avi jase

register_sidebar(
  array(
    'name'=>"Sidebar Location",
    'id'=>'sidebar'
    )
    )
    
    // Second Widgets ma jaine widgets Add Kari Devana Pachi je page ma widgets add show karvana hoy tya jaine niiche no code run karavano
    
    <?php dynamic_sidebar('sidebar'); ?>
_________________________________________________________________________________________________________________________________________________________

add widgets section add in custome theame custome widgets set:

first create sidebar.php file and add below code:

<?php dynamic_sidebar('sidebar'); ?>

second every page add below code to show widgets jya requirement che tya

<?php // for widgets side bar set 
get_sidebar(); ?>
_________________________________________________________________________________________________________________________________________________________

Taxonomy : What are Functions in WordPress | Get Category Function in WordPress

https://www.youtube.com/watch?v=KEdzGAP0knk&list=PLjVLYmrlmjGc_A9H4NSLEHaD8kSz9Q38g&index=24


Jya Category Show Karvani hoy e

<?php
foreach($cat as $catvalue)
{
  ?>
          <a href="<?php echo get_category_link($catvalue->term_id); ?>">

          <h2><?php echo $catvalue->name ?>(<?php echo $catvalue->count ?>)</h2>
          </a>
          
          <?php }?>
          
_________________________________________________________________________________________________________________________________________________________
_________________________________________________________________________________________________________________________________________________________

Custome Post Type Maker : 

plugin : Custome Post Type Maker
By Graffino


_________________________________________________________________________________________________________________________________________________________

for data show in front side (templet-home.php):
  
  https://www.youtube.com/watch?v=kvuSk2GmukI&list=PLjVLYmrlmjGc_A9H4NSLEHaD8kSz9Q38g&index=27
  

  $wpnew = array(
    'post_type' => 'news',
    'post_status' => 'publish'
    );
    $newsquery = new Wp_Query($wpnew);
    
         while ($newsquery->have_posts()) {
          $newsquery->the_post();
          $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');    
          
          ?>

_________________________________________________________________________________________________________________________________________________________

Texonomy Show In front Page (templet-home.php):

https://www.youtube.com/watch?v=uUmMEpHURWQ&list=PLjVLYmrlmjGc_A9H4NSLEHaD8kSz9Q38g&index=30

Plugin Download From : https://wordpress.org/plugins/wp-custom-taxonomy-image/
by 
_________________________________________________________________________________________________________________________________________________________
_________________________________________________________________________________________________________________________________________________________

custome Plugin

https://www.youtube.com/watch?v=qAeEp5HYm9k&list=PLa9NMvQUMD5c85kY0q6X15RTM8zm0s9H7


install thaeame : Hello Elementor
Plugin : All-in-One WP Migration and Backup
by : By ServMask

go to file : C:\xampp\htdocs\WordpressWs\customeplugin\wp-content\plugins\my-plugin

file created : index.php , my-plugin.php (Folder nu je name hoy ej rakhvanu) , unistall.php
_________________________________________________________________________________________________________________________________________________________

** Wordpress Learning List ** 

1. admin pannel

2. Page Builders
     
      - Elementor
      - WPbackery
      - DIVI

3. WooCommerce
     
      - Shipping
      - Products
      - Category
      - Payment
      - Chekout
      - Cart

4. Forms

      - Contact Form 7
      - ninja
      - Forminator
      - WPForm

5. SEO

6. Site Optimization

7. Custom Post Type / Taxonomy / Custom Menu Option

  - Create Custom Plugin
  - Front Side User Data Enter
  - Fetch those data and store in admin side
  - Wordpress Core Custumization

8. Child Themes - use and create

9. Custom Plugin create. 




Woocomerce

- Custome Product Page
- Assign Product page
- Display Product 
- 1. Features Product (5)
- 2. 9 product display / ajax filter / price high to low /low to high
- 3. Best Seller ni 6 product Slider 

- Perticular Product Open Karu Ema Gift Card Message Option
- Add to cart Pachi Cart nu page ma 

          */





          

?>
       <style>

         
</style>