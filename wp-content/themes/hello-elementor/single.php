<?php
get_header();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="post-container">
    <div class="bgimg">
        <p style="text-transform: capitalize;">home > </p> 
        <p class="cat"><?php the_category(', '); ?> > </p> 
        <p style="color: white;"><?php the_title(); ?></p>
    </div>

    <!-- Main Post Content -->
    <div class="post-left">
        <?php 
        if (have_posts()) : 
            while (have_posts()) : the_post(); ?>
            
            <div class="post-content">
                <!-- Category -->
                <div class="post-category">
                    <?php the_category(', '); ?>
                </div>

                <!-- Title -->
                <h1 class="post-title"><?php the_title(); ?></h1>

                <!-- Author and Date -->
                <div class="post-meta">
                    <div class="author-info">
                        <?php echo get_avatar(get_the_author_meta('ID'), 32); // Author Avatar ?>
                        
                        <span class="author-name">
    by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="color: black;"><?php echo get_the_author(); ?></a>
</span>

                    </div>
                    <div class="post-date">
                    <i class="fas fa-clock" aria-hidden="true" ></i>
                        <span style=" font-weight: 400;"><?php echo get_the_date(); ?></span>
                    </div>
                </div>

                

                <!-- Description -->
                <div class="post-description" style="
    line-height: 27px;
    font-size: 18px;
">
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; 
        endif; ?>
<div class="post-navigation">
    <div class="nav-prev">
        <?php 
        $prev_post = get_previous_post();
        if (!empty($prev_post)): ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
                <span>&lt; Prev Post</span>
                <p><?php echo get_the_title($prev_post->ID); ?></p>
            </a>
        <?php endif; ?>
    </div>

    <div class="nav-next">
        <?php 
        $next_post = get_next_post();
        if (!empty($next_post)): ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
                <span>Next Post &gt;</span>
                <p><?php echo get_the_title($next_post->ID); ?></p>
            </a>
        <?php endif; ?>
    </div>
</div>







<div class="unique-more-posts">
    <h2>More Posts</h2>
    <div class="unique-post-grid">
        <?php
        // Current Post ID
        $current_post_id = get_the_ID();

        // Query Arguments
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post__not_in'   => array($current_post_id), // Exclude current post
            'orderby'        => 'rand', // Random order
        );

        // Custom Query
        $more_posts_query = new WP_Query($args);

        // Loop through the posts
        if ($more_posts_query->have_posts()) :
            while ($more_posts_query->have_posts()) : $more_posts_query->the_post(); ?>
                <div class="unique-post-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="unique-post-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                                <span class="unique-post-category">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo esc_html($categories[0]->name); // Display the first category name
                                    }
                                    ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        <div class="unique-post-content">
                            <p class="unique-post-date"><i class="fas fa-clock" aria-hidden="true" ></i> <?php echo get_the_date(); ?></p>
                            <h3 class="unique-post-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
            <?php endwhile;
        else : ?>
            <p>No more posts available.</p>
        <?php endif;

        // Reset Post Data
        wp_reset_postdata();
        ?>
    </div>




    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- About Author Section -->
<div class="about-author">
    <h2>About Author</h2>
    <div class="author-box">
        <div class="author-image">
            <?php echo get_avatar( get_the_author_meta('ID'), 100 ); ?>
        </div>
       <div class="div1" style="display:flex; flex-direction: column;">
       <h3><?php the_author(); ?></h3>
        <div class="author-info">
           
            <br>
            <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
        </div>
       </div>
    </div>
</div>

<?php endwhile; endif; ?>















    <?php


// Display comment box
if (comments_open() || get_comments_number()) :
    comments_template();
endif;
?>
</div>

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
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No recent posts available.</p>
        <?php endif; ?>
        </div>
        <?php get_header(); ?>

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
}.post-left {
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
    height: 217px;
    width: 100%;
    color: #c9c9c9;
    display: flex;
    align-items: end;
    justify-content: left;
    padding-left: 114px;
    gap: 10px;
    font-size: 17px;
}

.post-right {
    flex: 0 0 28%; /* Sidebar width */
    padding-top: 57px !important;
    padding: 20px;
}

.post-right h3 {
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
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

.post-meta {
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
    .post-content {
    padding-left: 0px !important;
}
    .post-container {
        flex-direction: column;
    }
    .post-navigation {
    margin-left: 0px !important;
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
    margin-left: 94px ;
    display: flex;
    justify-content: space-between;
    align-items: center;
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
.unique-more-posts {
    padding-top: 35px;
    padding-left: 94px;
    margin: 40px 0;
    font-family: 'Poppins', sans-serif;
}
.unique-more-posts h2 {
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 4px;
    text-underline-offset: 1px;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 24px;
    margin-bottom: 20px;
}

.unique-post-grid {
    display: flex;
    gap: 20px;
}
.unique-post-item {
     width: 34%; 
    /* border: 1px solid #ddd; */
    /* border-radius: 8px; */
    overflow: hidden;
    /* background: #fff; */
    /* transition: transform 0.3s; */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}


.unique-post-thumbnail {
    position: relative; /* For overlay positioning */
    width: 100%;
    height: 200px; /* Fixed height for uniformity */
    overflow: hidden;
}

.unique-post-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures all images fit properly */
    display: block;
}

.unique-post-category {
    position: absolute;
    top: 13px;
    left: 20%;
    transform: translateX(-50%);
    background-color: #FF4E00;
    color: white;
    font-size: 13px;
    font-weight: 400;
    padding: 5px 15px;
    /* border-radius: 20px; */
    z-index: 10;
    text-transform: capitalize;
    white-space: nowrap;
}

.unique-post-content {
    padding-top: 12px;
}

.unique-post-date {
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 18px;
    font-size: 12px;
    color: #777;
    padding-left: 4px;
    margin-bottom: 10px;
}

.unique-post-title {   font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 17px;
    line-height: 24px;
    font-weight: 700;
    color: black;
    font-style: normal;
    text-transform: uppercase;
    text-decoration: none;
}

.comment-respond {
    background-color: #f8f8f8;
    padding: 35px !important;
    border-radius: 5px;
    font-family:  'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;}

.comment-respond h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

.comment-respond p {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
}

.comment-respond textarea,
.comment-respond input[type="text"],
.comment-respond input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 3px;
    font-size: 14px;
    box-sizing: border-box;
}

.comment-respond textarea {
    height: 100px;
    resize: none;
}

.comment-respond .comment-form-author,
.comment-respond .comment-form-email {
    width: 48%;
    float: left;
    margin-right: 4%;
}

.comment-respond .comment-form-email {
    margin-right: 0;
}

.comment-respond .form-submit input {
    background-color: #ff5722;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.comment-respond .form-submit input:hover {
    background-color: #e64a19;
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}
.comment-reply-title
{
    text-decoration:none !important;
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
    .unique-more-posts {
    padding-top: 35px;
    padding-left: 0px !important;
    margin: 40px 0;
    font-family: 'Poppins', sans-serif;
}
.div {
    background-color: #f7f7f7;
    width: 100%;
}.post-image22 img {
    height: 100%;
    max-width: 100%;
}
.most-popular3 {
    font-family: Arial, sans-serif;
    margin-right: 0px !important;
    margin-top: 20px;
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
    .post-navigation {
    margin-left: 0px !important;
}
.unique-more-posts {
    padding-left: 0px !important;
}
.unique-post-grid {
    display: flex;
    gap: 20px;
    flex-direction: column;
}
.unique-post-item {
    width: 100% !important;
}
.post-left {
    width: 100%;
}
.author-box {
    display: flex;
    align-items: center;
    flex-direction: column;
}
.tabs {
    display: flex;
    margin-top: 20px;
    /* justify-content: center; */
    margin-bottom: 20px;
    flex-direction: column;
}
.div {
    background-color: #f7f7f7;
    width: 100%;
}
.most-popular3 {
    font-family: Arial, sans-serif;
    margin-right: 0px !important;
    margin-top: 20px;
}
.latest-tab .post-card, .popular-tab .post-card, .comments-tab .post-card {
    display: flex;
    flex-direction: column;
}
.post-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-right: 0px !important;
}.container2 {
    max-width: 100%;
    /* margin: 0 auto; */
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
}
    .post-content {
    padding-left: 0px !important;
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
</style>
<?php get_footer(); ?>