<?php
/*
    1. For Login

  - http://localhost/wordpress/wp-admin/

  - wordpress Folder name
  - wp- by default 
  - admin username
  - Username : pathik424
  - Password : Ppathik@424$


   2. Theame Selection


   - Appearance/theames
   - Click on Add New Theames
   - Click Install/Activation


   3. Create Page 


    - Add New Pages & Select Pages Name
    - Add Page Name

    4. Menus

    - Appearance/Menu

    5. Post

    - Post/All Posts


    6. Pagination 

    -Setting/Reading/BlogPageShowatmost
    
    
    7. Default Page Set
    
    -Setting/Reading/Your Home Page Display/A static Page /Home(Blogs)
    
    8. all Post set in one page
    
    -Setting/Reading/Your Home Page Display/A static Page / Post Page(AllBlogs)
    
   9. Pages Set to Comment Section added

     -Go To Pages/SelectPage/QuikeEdit/Select Allow Comment

   10. Post Set to Comment Section added

     -Go To Post/SelectPost/QuikeEdit/Select Allow Comment 
     
     
  11. Custom Links 
  
     -Appearance/Menus/CustomLinks/
     - anathi koi biji website ni link add karvi hase to thase jena par click karsu to bija menu ma javase
     
     
  12. Permalink
  
      - setting/permalink
      - url mate use thay post ma click kare tyare url kevi rite batavi che Plain/Day and Name/Month and Name/Numeric/PostName/CustomeStructure
      
      13. Widgets 
      
      - setting/widgets
      - Widgets use ena mate thay ke serach bar ke calendar ke e header ma ke foter ke sidebar ma use karva mate

  13. Rss 
  
      - setting/widgets
      - RSS is type of widgets serching like api and add link 
      - cricket news rss feed url
      - https://www.espncricinfo.com/ci/content/rss/feeds_rss_cricket.html
      - RSS Url Virat : https://www.espncricinfo.com/rss/content/story/feeds/253802.xml


  14. Visitors Counter Plugin 
  
      - WPS Visitor Counter Plugin Serch on 
      - install Visitors Plugin and Active
      - after activation see on seetings and last option WPS Visitor Counter Plugin click and modify

  15. Passworrd Protected Post
      
      ------ For Page
      - Create New Page
      - Page/Visibility/Change Public to Password Protected
      ------ For Post
      - Create New Post
      - Page/Visibility/Change Public to Password Protected

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
  
  17. Duplicate Page and Post Plugin

       - Yoast Duplicate Post (plugin Name) 
       - By Enrico Battocchi & Team Yoast
       - Go to Post Section Select Older Post
       
              - A Few Words About Regular Cat Grooming!
        Edit | Quick Edit | Trash | View | Clone | New Draft | Rewrite & Republish

       - Click on Clone 
       - Copy Same Post including in Draft

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
  
    19. How To Add Button & Heading Using Smart Slider 3 WordPress Plugin?

      - Go to Smart Slider
      - Edit First Slider
    
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

     22. How to Embed PDF on Your WordPress Website (Step By Step Guide)

     - Plugin : PDF Embedder
     - by : Version 4.7.1 | By PDF Embedder | View details
     - https://www.youtube.com/watch?v=WKIZl309FtI&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=48
     - Go to page
     - edit page 
     - add And search  PDF Embedder select pdf file and update page
     - Attached PDF File Show in Edited Page

     23. Widgets Options (Widgets na Headers hase e hide thai jase )

       - https://www.youtube.com/watch?v=JZmShJLAp9A&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=49
       - plug in : Widget Options – The #1 WordPress Widget & Block Control Plugin
       - by - Widget Options Team
       - Go to Appearance/Widgets/any Widgets open/Go to Setting/Click on hide and save.
       
       
     24. How to Easily Create Tables in WordPress with TablePress Plugin - WordPress Plugins
     
        - https://www.youtube.com/watch?v=mrk78f03lqo&list=PLjVLYmrlmjGcXDYZC67Us13PBD-3us9jB&index=50
        - plugin : TablePress
        - By :  By Tobias Bäthge | View details | FAQ | Documentation | Support | Go Premium
        - 


  
       
      






       
       */
       
       ?>
<style>

  
</style>