<?php
get_header();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="post-container">
<div class="bgimg">
    <div class="divvv" style="display:flex; padding-top:114px;">
    <p style="text-transform: capitalize; ">home &nbsp>&nbsp&nbsp </p>
    <p class="cat"> <?php the_category(', '); ?></p>
    </div>
    <p class="cat catss second-line">Category: <?php single_cat_title(); ?></p>
</div>



    <!-- Main Post Content -->
    <div class="post-left">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="post-item4">
            <div class="post-thumbnail4">
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="category-overlay">post</div>
                    </a>
                <?php endif; ?>
            </div>
            <div class="post-content4">
                <div class="post-meta y1" style="margin-bottom:25px;">
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                    <div class="box">.</div>
                    <span class="author-name">
    by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="color: black;"><?php echo get_the_author(); ?></a>
</span>

                    <div class="box">.</div>
                    <span class="post-author3" Style="text-transform: capitalize;">In <p2>
                    <?php the_category(', '); ?></p2>
                    </span>
                   
                </div>
                <h2 class="tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-excerpt4">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>No posts found in this category.</p>
<?php endif; ?>

<style>
    .box {
    font-size: 47px;
    margin-top: -27px;
    margin-right: 10px;
}
.tit a {font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 28px;
    line-height: 36px;
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
    text-decoration: none;
}.tit a:hover {
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px; /* Underline thickness */
   
}
.catss 
{ font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 40px;
    line-height: 50px;
    color: white !important;
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
    text-decoration: none;
}

</style>








    </div>

    <!-- Sidebar: Latest Posts -->
    <div class="post-right" style="  font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;">
        <h3>the latest news</h3>
        <div class="div" style="  padding-bottom:20px; padding-top:10px;">
        <?php
        $latest_posts = new WP_Query(array('posts_per_page' => 5));
        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
        ?>
            <div class="latest-post">
            <div class="post-meta"> 
                    <span class="post-date"> <?php echo get_the_date(); ?></span>
                </div>
                <h4 style="margin-block-start: 0rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No recent posts available.</p>
        <?php endif; ?>
        </div>
        <?php get_header(); ?>

        <?php
// Mock data (replace with database or API fetch)
$social_data = [
    'facebook' => ['icon' => 'fab fa-facebook-f', 'count' => '12.3K', 'label' => 'Fans'],
    'twitter' => ['icon' => 'fab fa-twitter', 'count' => '32', 'label' => 'Followers'],
    'instagram' => ['icon' => 'fab fa-instagram', 'count' => '0', 'label' => 'Followers']
];
?>

    <style>
        body {
            font-family:  'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
        }
        .follow-us {
            width: 350px;
           
        }
        .follow-us h2 {
            font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 28px;
    line-height: 36px;
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
    text-decoration: none;
    margin-block: 34px;
}
        .social-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Space between boxes */
        }
        .social-box {
    /* flex: 1 1 calc(50% - 5px); */
    display: flex;
    align-items: center;
    /* justify-content: space-between; */
    padding: 5px 15px;
    color: white;
    /* border-radius: 5px; */
}
.social-box i {
    border-right: 2px solid white;
    padding-right: 18px;
    font-size: 20px;
    margin-right: 17px;
}
        .facebook {
    width: 150;
    background-color: #4071BA;
}
.twitter {
    background-color: #3FB1D1;
    width: 150px;
}
        .instagram {
            width: 150px;
            background-color:#3F729B;
        }
        .pppp 
        {
            margin-top: -9px !important;
    margin-block-start: 0;
    margin-block-end: 0px;
        }
    </style>

    <div class="follow-us">
        <h2>FOLLOW US</h2>
        <div class="social-container">
            <?php foreach ($social_data as $key => $data) { ?>
                <div class="social-box <?php echo $key; ?>">
                    <i class="<?php echo $data['icon']; ?>"></i>
                    <div>
                        <strong><?php echo $data['count']; ?></strong>
                        <p class="pppp"><?php echo $data['label']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



<div class="container2">
    <!-- Tabs -->
    <div class="tabs">
        <button class="tab-link active" onclick="openTab('latest')">Latest</button>
        <button class="tab-link" onclick="openTab('popular')">Popular</button>
        <button class="tab-link" onclick="openTab('comments')">Comments</button>
    </div>

    <!-- Latest Posts Tab -->
    <div id="latest" class="tab-content latest-tab" style="display: block;">
        <?php
        // Fetch Latest 3 Posts
        $latest_posts = new WP_Query(['posts_per_page' => 3, 'orderby' => 'date']);
        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                <div class="post-card latest-post-card">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="post-content2">
                        <span class="post-date2"><?php echo get_the_date(); ?></span>
                        <a class="post-title2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            <?php endwhile;
        else : ?>
            <p>No posts found.</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <!-- Popular Posts Tab -->
    <div id="popular" class="tab-content popular-tab" style="display: none;">
        <?php
        // Fetch Popular 3 Posts based on comment count
        $popular_posts = new WP_Query([
            'posts_per_page' => 3,
            'orderby' => 'comment_count', // This will show posts with the most comments
            'order' => 'DESC'
        ]);
        if ($popular_posts->have_posts()) :
            while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                <div class="post-card popular-post-card">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="post-content2">
                        <span class="post-date2"><?php echo get_the_date(); ?></span>
                        <a class="post-title2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            <?php endwhile;
        else : ?>
            <p>No popular posts found.</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <!-- Comments Tab -->
    <div id="comments" class="tab-content comments-tab" style="display: none;">
        <h3>Latest Comments</h3>
        <ul class="latest-comments">
            <?php
            // Fetch Latest 3 Comments
            $comments = get_comments(['number' => 3, 'status' => 'approve']);
            if ($comments) :
                foreach ($comments as $comment) : ?>
                    <li>
                        <strong><?php echo $comment->comment_author; ?></strong> says:
                        <p><?php echo wp_trim_words($comment->comment_content, 15); ?></p>
                        <a href="<?php echo get_permalink($comment->comment_post_ID); ?>">View Post</a>
                    </li>
                <?php endforeach;
            else : ?>
                <p>No comments found.</p>
            <?php endif; ?>
        </ul>
    </div>
</div>

<script>
    function openTab(tabName) {
        // Hide all tab contents
        let tabContent = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        // Remove active class from all tab links
        let tabLinks = document.getElementsByClassName("tab-link");
        for (let i = 0; i < tabLinks.length; i++) {
            tabLinks[i].className = tabLinks[i].className.replace(" active", "");
        }

        // Show the clicked tab content and set active class
        document.getElementById(tabName).style.display = "block";
        event.currentTarget.className += " active";
    }
</script>

<style>
    .container2 {
        max-width:84%;
        /* margin: 0 auto; */
        font-family:  'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    }
    .tabs {
    display: flex;
    margin-top: 20px;
    /* justify-content: center; */
    margin-bottom: 20px;
    margin-left: -17px;
}
    .tab-link {
        font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-transform: uppercase;
    font-size: 18px;
    color: black;
    /* background-color: #f4f4f4; */
    border: none !important;
    cursor: pointer;
    font-weight: bold;
   
}

    .tab-link.active,
    .tab-link:hover {
        text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 4px;
        background-color:white;
        color: black;
    }
    .latest-tab .post-card, .popular-tab .post-card, .comments-tab .post-card {
    display: flex;
    /* align-items: center; */
    margin-bottom: 15px;
    /* border: 1px solid #ddd; */
    /* border-radius: 5px; */
    /* box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); */
    /* transition: transform 0.2s, box-shadow 0.2s; */
}

    .post-thumbnail img {
        width: 120px;
        height: 90px;
        object-fit: cover;
        margin-right: 15px;
    }

    .post-content2 {
        flex: 1;
    }

    .post-date2 {
        font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
        display: block;
        font-size: 14px;
        color: #555;
        font-weight: 400;
        margin-bottom: 5px;
    }

    .post-title2 {
        font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #333;
        text-decoration: none;
    }

    .post-title2:hover {
       color: gray;
    }

    .latest-comments li {
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1.5;
    }

    .latest-comments a {
        color: #007bff;
        text-decoration: none;
    }

    .latest-comments a:hover {
        text-decoration: underline;
    }
</style>

<?php
// Custom Query for 5 posts
$args = array(
    'posts_per_page' => 5,
    'orderby'        => 'date',
    'order'          => 'DESC',
);
$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) : ?>
    <div class="most-popular3">
        <h1>Most Popular</h1>
        <?php $count = 1; ?>
        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="popular-post">
                <?php if ($count == 1) : ?>
                    <!-- First Post with Image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-image22">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="post-content3">
                        <!-- Post Number -->
                        <div class="post-number"><?php echo $count; ?></div>
                        <!-- Post Title -->
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <!-- Share Count -->
                       
                    </div>
                    <div class="share-count" style="padding-left:30px;">
                            <i class="fas fa-share"></i>
                            <span><?php echo get_post_meta(get_the_ID(), 'share_count', true); ?> Shares</span>
                        </div>
                <?php else : ?>
                    <!-- Other Posts -->
                    <div class="post-content3 other-post">
                        <div class="post-number"><?php echo $count; ?></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <!-- Share Count -->
                        </div>
                        <div class="share-count" style="padding-left:30px;">
                            <i class="fas fa-share"></i>
                            <span><?php echo get_post_meta(get_the_ID(), 'share_count', true); ?> Shares</span>
                        </div>
                    
                <?php endif; ?>
            </div>
            <?php $count++; ?>
        <?php endwhile; ?>
    </div>
<?php endif; wp_reset_postdata(); ?>

<style>
    .most-popular3 {
    font-family: Arial, sans-serif;
    margin-right: 83px;
    margin-top: 20px;
}
    .most-popular3 h1 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .popular-post {
      
        border-bottom: 1px solid #ddd;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
       
    }

    .post-image22 img {
        height: 200px;
        max-width: 100%;
      
    }

    .post-content3 {
       padding:20px;
        display: flex;
        flex-direction: row;
        gap: 15px;
        align-items: center;
    }
    .post-number {
    line-height: 58px;
    font-size: 48px;
    font-weight: bold;
    color: #DCDCDC;
}
h2 a {
    font-family:  'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-weight: 600;
    font-size: 16px;
    background-color: transparent;
    text-decoration: none;
    color: black !important;
}

    .post-content3 h2 {
        font-size: 18px;
        margin: 10px 0;
    }

    .share-count {
    margin-left: 30px;
    margin-bottom: 21px;
    margin-top: -27px;
    font-size: 14px;
    color: #555;
    display: flex;
    align-items: center;
}

    .share-count i {
        margin-right: 5px;
       
    }

    .other-post {
        display: flex;
        flex-direction: row;
        gap: 15px;
        align-items: center;
    }
</style>

<!-- FontAwesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    </div>
  



</div>

<?php get_footer(); ?>

<style>
/* Post Page Layout */
.div {
    background-color: #f7f7f7;
    width:80%;
}
.post-container {
  
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 10px;
}
.post-content
{
    padding-left:95px ;
}
.post-left {
    padding-left: 116px !important;
    padding-top: 57px !important;
    flex: 0 0 71%;
    padding: 20px;
}
.wp-block-post-featured-image :where(img) {
    box-sizing: border-box;
    width: 100%; /* Full width */
    height:400px; /* Adjust height to maintain aspect ratio */
    object-fit: cover; /* Ensures the image covers the container without stretching */
}

.bgimg {
    background: url('http://localhost/filmzilla/wp-content/themes/hello-elementor/home-bg.jpg') no-repeat center center;
    background-size: cover;
    height: 246px;
    width: 100%;
    color: #c9c9c9;
    align-items: end;
    justify-content: left;
    padding-left: 110px;
    /* padding-bottom: 123px; */
    padding-top: 42px;
    gap: 10px;
    font-size: 16px;
}

.post-right {
    flex: 0 0 28%; /* Sidebar width */
    padding-top: 57px !important;
    padding: 20px;
}

.post-right h3 {
    font-weight: bold;
    text-transform: uppercase;
    color: black !important;
    margin-bottom: 20px;
    font-size: 24px;
    line-height: 32px;
}
#masthead
{
    position: fixed !important;
    width: 100% !important;
}
/* Post Banner */
.post-banner {
    background: linear-gradient(135deg, #A40D0D, #FF6363);
    color: #fff;
    text-align: center;
    padding: 40px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

.post-banner h1 {
    font-size: 32px;
    margin: 0;
}
span.post-author3 {
    text-transform: lowercase;
}

.post-meta
{  font-family: 'Merriweather Sans', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 14px;
    line-height: 20px;
    font-weight: 300;
    font-style: normal;
    text-transform: none;

    font-size: 14px;
   
    color: #fff;
    opacity: 0.9;
}
.post-meta span {
    font-size: 14px;
    margin-right: 10px;
    /* font-weight: bold; */
}

/* Post Content */
.post-content .post-body {
    font-size: 18px;
    line-height: 1.8;
    color: #333;
    margin-top: 20px;
}

.post-content .post-body img {
    width: 100%;
    border-radius: 10px;
    margin-top: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}


.latest-post {
    border-bottom: 1px solid #ADADAD;
    margin-inline: 30px !important;
     padding-top: 10px; 
}

.latest-post h4 a {
    padding: 0px !important;
    margin: 0px !important;
    font-weight: 500;
    line-height: 22px !important;
    font-size: 16px;
    color: #333;
    text-decoration: none;
    transition: color 0.3s;
   
}

.latest-post h4 a:hover {
    color: #FF4E00;
}

.latest-post .post-meta {
    font-size: 12px;
    color: #777;
    margin-top: 5px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .elementor-element.elementor-element-76e3bb0.e-con-full.e-flex.e-con.e-parent.e-lazyloaded {
    display: none;
}
    .post-container {
        flex-direction: column;
    }

    .post-left,
    .post-right {
        flex: 0 0 100%;
    }
}

.cat a {
    text-transform: capitalize;
    color: #c9c9c9;
}

.post-page-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
}

.post-category {
   color:white;
    font-size: 14px;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.post-category a {
    font-size: 13px;
    padding: 5px 10px;
    color: white;
    background-color: #ff4e00;
}

.post-title {
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    line-height: 49px;
    text-transform: uppercase;
    color: black;
    font-size: 34px;
    font-weight: bold;
    margin-bottom: 15px;
}

.post-meta {
    display: flex;
    align-items: center;
    font-size: 14px;
    margin-bottom: 20px;
    color: #555;
}

.author-info {
    display: flex;
    align-items: center;
    margin-right: 20px;
}

.author-info img {
    border-radius: 50%;
    margin-right: 10px;
}

.author-name {
    font-weight: bold;
}

.post-date {
    display: flex;
    align-items: center;
    font-family: 'Merriweather Sans', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 14px;
    line-height: 20px;
    font-weight: 300;
    font-style: normal;
    text-transform: none;

}

.post-date i {
    margin-right: 5px;
}

.post-featured-image img {
    width: 100%;
    height: auto;
    margin: 20px 0;
}

.post-description {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}

.nav-prev
{
    border-left: 5px solid #FF4E00;
    padding-left: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.nav-prev:hover {
    border-left: 5px solid #8790a6;
}
.nav-next:hover {
    border-right: 5px solid #8790a6;
}
.nav-next
{
    border-right: 5px solid #FF4E00;
    padding-left: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.post-navigation {
    padding-top: 50px;
    border-top: 2px solid #F0F0F0;
    margin-left: 94px !important;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 20px 0;
    font-family:  'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
}

.nav-prev, .nav-next {
    width: 45%;
}

.nav-prev a, .nav-next a {
    text-decoration: none;
    color: #000;
    display: flex;
    flex-direction: column;
}

.nav-prev span, .nav-next span {
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    line-height: 26px;
    font-size: 16px;
    color: gray;
}

.nav-prev p, .nav-next p {
    padding-right: 35px;
  font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 18px;
    line-height: 24px;
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
    text-decoration: none;
}


.nav-next span {
    padding-right: 30px;
    text-align: right;
}
/* Responsive Design Enhancements */
@media (max-width: 1024px) {
    .post-container {
        padding: 10px;
    }

    .post-left {
        flex: 0 0 100%;
        padding: 15px;
    }

    .post-right {
        flex: 0 0 100%;
        padding: 15px;
    }

    .post-navigation {
        flex-direction: column;
        align-items: stretch;
    }

    .nav-prev, .nav-next {
        width: 100%;
        margin-bottom: 10px;
    }
}

@media (max-width: 768px) {
    .bgimg {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }

    .bgimg p {
        margin: 5px 0;
    }

    .post-meta {
        flex-direction: column;
        align-items: flex-start;
    }

    .post-meta .author-info {
        margin-bottom: 10px;
    }

    .post-description {
        font-size: 14px;
    }

    .post-title {
        font-size: 24px;
        line-height: 36px;
    }

    .latest-post h4 a {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .elementor-element.elementor-element-76e3bb0.e-con-full.e-flex.e-con.e-parent.e-lazyloaded {
    display: none;
}
    .post-container {
        padding: 10px;
    }

    .post-title {
        font-size: 20px;
    }

    .post-description {
        font-size: 12px;
        line-height: 1.4;
    }

    .latest-post h4 a {
        font-size: 12px;
    }

    .nav-prev p, .nav-next p {
        font-size: 14px;
    }
}
.about-author {
    padding-left: 0px !important;
    margin-top: 40px;
    padding: 20px;
    /* border: 1px solid #ddd; */
    /* border-radius: 8px; */
    /* background-color: #f9f9f9; */
}

.about-author h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}.author-box {
    padding: 30px;
    gap: 40px;
    display: flex;
    align-items: center;
}

.author-image {
    flex-shrink: 0;
    margin-right: 20px;
    border-radius: 50%;
    overflow: hidden;
    width: 100px;
    height: 100px;
    border: 2px solid #ccc;
}
.author-info {
    /* display: flex; */
    align-items: center;
    max-width: 100%;
    /* flex-direction: column; */
}

.div1 h3 {font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 18px;
    line-height: 24px;
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
    text-decoration: none;

}

.author-info p { font-family: 'Heebo', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 16px;
    color:#555555;
    line-height: 24px;
    font-weight: 400;
    font-style: normal;
}
.post-thumbnail4 {
    position: relative;
    display: inline-block;
}
.category-overlay {
    position: absolute;
    top: 10px;
    left: 252px;
    right: -9px;
    background: #FF4E00 !important;
    color: white;
    text-align: center;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 12px;
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;

    padding: 7px 10px;
    z-index: 10;
}
.post-content4
{
    padding-left:25px ;
}
.category-overlay a {
    color: white;
    text-decoration: none; /* Underline hatane ke liye */
}


.post-author3
{
     font-family: 'Merriweather Sans', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 14px;
    line-height: 20px;
    font-weight: 300;
    font-style: normal;
    text-transform: none;

}

.post-author3 a
{
    text-transform: capitalize !important;
     font-family: 'Merriweather Sans', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 14px;
    margin-left:06px;
    color: white !important;
    padding: 5px 10px;
    background: #FF4E00 !important;
    line-height: 20px;
    font-weight: 300;
    font-style: normal;
    text-transform: none;

}
.post-item4 {
    display: flex; /* Flexbox layout for aligning image and content side by side */
    gap: 20px; /* Space between image and content */
    margin-bottom: 30px; /* Space between posts */
    align-items: flex-start; /* Align image and content at the top */
}

.post-thumbnail4 {
    flex: 1; /* Image takes up 1 part of the available space */
    position: relative; /* Ensures category overlay is positioned correctly */
}

.post-thumbnail4 img {
    width: 430px; /* Fixed width */
    height: 320px; /* Fixed height */
    object-fit: cover; /* Ensure the image fills the space without distortion */
    display: block;
}




.post-content4 {
    flex: 2; /* Content takes up 2 parts of the available space */
}.post-meta {
    margin-top: 16px;
    margin-bottom: 0px;
    color: #888;
    font-size: 14px;
}

.post-meta span {
    margin-right: 10px; /* Space between meta items */
}

h2 a {
    text-transform: uppercase;
    color: #333;
    text-decoration: none;
    font-size: 16px;
}
.post-excerpt4 {
    margin-top: 10px; /* Space above the excerpt */
    font-size: 15px;
    color: #555;
}

@media (max-width: 768px) { /* Tablet ke liye */


    .post-left {
    padding-left: 0px !important;
    padding-top: 0px !important;

}
.category-overlay {
    left: 180px;
    }
    .div {
    width: 100%;
}.follow-us {
    width: 100%;
}
.catss {
    text-align : left;
}
.most-popular3 {
     margin-right: 0px !important;
}
    
.y1 {
    
    display: flex;
    margin-bottom: 25px;
    flex-direction: row;
}
.box {
    margin-top: -13px;
}
}

@media (max-width: 480px) { /* Mobile ke liye */
    .post-item4 {
    display: flex;
    flex-direction: column;
}
.category-overlay {
    left: 234px;
    }
.post-left {
    max-width: 100% !important;
    padding-left: 0px ;
    padding-top: 0px !important;
    padding: 0px !important;
}
.post-content {
    padding-left: 0px !important;
}
.follow-us {
    width: 100%;
}
.post-thumbnail4 img {
    max-width: 100%;
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
}
.post-item4 {
    display: flex;
     gap: 0px;
    margin-bottom: 30px;
    align-items: flex-start;
}
.y1 {
    
    display: flex;
    margin-bottom: 25px;
    flex-direction: row;

}
.post-content4 {
    padding-left: 0px;
}
.facebook {
    width: 100%;
   
}
.twitter {
    width: 100%;
}
        .instagram {
            width: 100%;
        }
        .most-popular3 {
    width: 100%;
}
.container2 {
    max-width: 100%;
    
}
.post-right {
   
    padding: 20px;
}
.div {
    width: 100%;
}
.post-right {
    padding-top: 0px !important;
    padding: 0px;
}
.post-thumbnail4
{
    width: 100%;
}
.box {
    font-size: 47px;
    margin-top: -14px;
    margin-right: 10px;
}
}

</style>
