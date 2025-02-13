<?php
/* Template Name: Custom Shortcode Page */
get_header();
?>

<style>
    
    .containerread {
        margin-top: 70px;
    padding-block: 51px;
    width: 100%;
    background-color: black;
}
.read {
    color: black;
    font-size: 38px;
    line-height: 30px;
    font-weight: 800;
    color: white;
    text-transform: uppercase;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: green;
    text-decoration-thickness: 3px;
    margin-top: 30px;
    margin-bottom: 25px;
    text-align: center;
}
    .custom-post-slider-container {
        width: 100%;
        margin: auto;
        overflow: hidden;
        position: relative;
        padding: 0px;
    }
    .custom-swiper-slide {
    position: relative;
    /* text-align: center; */
    /* background: #fff; */
    /* border-radius: 10px; */
    overflow: hidden;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
}
    .custom-post-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }
    .custom-post-details {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        color: #fff;
        padding: 20px;
    }.custom-post-title {
    font-size: 20px;
    color: #fffff !important;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-weight: 600;
    line-height: 1.2;
    color: inherit;
    text-transform: uppercase;
    margin-top: 7px;
}
    .custom-post-date {
        font-size: 14px;
        color:white;
    }
    .custom-post-category {
        
font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 13px !important;
    line-height: 24px;
    font-weight: 400;
    font-style: normal;
    position: absolute;
    top: 20px !important;
    left: 20px !important;
    background-color: #ff4e00 !important; /* Red background with opacity */
    padding: 2px 7px !important;
    color: white;
    }
    .custom-swiper-button-next, .custom-swiper-button-prev {
        color: #000;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .custom-post-details {
            padding: 10px;
        }
        .custom-post-title {
            font-size: 16px;
        }
        .custom-post-date {
            font-size: 12px;
        }
    }
    @media (max-width: 768px) {
        .custom-post-title {
            font-size: 14px;
        }
        .custom-post-date {
            color:white !important;
            font-size: 10px;
        }
    }
    .swiper-button-next, .swiper-button-prev {
    position: absolute;
    top: var(--swiper-navigation-top-offset,50%);
    width: calc(var(--swiper-navigation-size)/ 44 * 27);
    height: var(--swiper-navigation-size);
    margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
    z-index: 10;
    cursor: pointer;
    display: flex;
    align-items: center;
    background-color:black;
    justify-content: center;
    color: white !important;
}
    .swiper-pagination.custom-swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets.swiper-pagination-horizontal {
    display: none;
}

        .custom-bg {
        background: url('http://localhost/filmzilla/wp-content/uploads/2025/01/home-bg-3.jpg') no-repeat center center;
        background-size: cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        position: relative;
        padding: 20px;
    }
    .custom-overlay {
        background: rgba(0, 0, 0, 0.5); /* Dark overlay */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .custom-content {
        position: relative;
        z-index: 2;
        font-size: 24px;
        max-width: 90%;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .custom-content {
            font-size: 20px;
        }
    }
    @media (max-width: 768px) {
        .custom-bg {
            height: auto;
            padding: 50px 20px;
        }
        .custom-content {
            font-size: 18px;
        }
    }
    @media (max-width: 480px) {
        .elementor-element.elementor-element-76e3bb0.e-con-full.e-flex.e-con.e-parent.e-lazyloaded {
    display: none;
}
        .custom-content {
            font-size: 16px;
        }
    }
    .parent-container {
  position: relative;
  width: 100%;
  height: 100px;
}

.left-data {
  position: absolute;
  left: 0;
}

.right-data {
  position: absolute;
  right: 0;
}
.bicycle2 {
    color: black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
    margin-top: 30px;
    margin-bottom: 29px;
    padding-left: 17px;
}
.second-data {
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}
.sidebar {
    position: sticky;
    top: 20px; /* Jitna margin chahiye utna adjust karein */
    height: fit-content; /* Apne content ke mutabiq height adjust karega */
}.container1 {
    padding-inline: 82px !important;
    margin: 20px;
    width: 97%;
    display: flex;
    gap: 40px;
}
.most-popular {
    width: 25%;
}
.div {
    background-color: #f7f7f7;
    width: 100%;
}
.spotlight
{
    width:50%;
}
.recent-news
{
    width: 25%;
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
    .title-overlay {
    text-align: left;
    text-transform: uppercase;
    font-family: 'Roboto Condensed';
    line-height: 36px;
    background-color: transparent;
    color: #fff;
    font-size: 25px;
    font-weight: 600;
    /* padding: 5px; */
    display: inline-block;
    border-radius: 3px;
    position: absolute;
    bottom: 10px;
    left: 10px;
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
    .latest-post {
    border-bottom: 1px solid #ADADAD;
    margin-inline: 30px !important;
    padding-top: 10px;
}

.category-container {
    background: #f4f4f4;
    padding: 20px;
    margin-top: 30px;
     max-width: 100%;
    }
    .category-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .category-list li {
        font-family:  'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
        padding: 10px 15px;
        font-size: 17px;
        color: black;
        display: flex;
        align-items: center;
        gap: 10px; /* Naam aur post count ke beech ka gap */
    }
    .category-list li:not(:last-child) {
        border-bottom: 1px solid #ccc; /* Sirf last wale ke alawa sabke niche line */
    }
    .category-list li span {
        color:black;
        font-size: 14px;
    }
    .categoryname
    {color : black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
    margin-top: 30px;  }
    
    .soccer {
    color: black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
    margin-top: 30px;
    margin-bottom: 29px;
    padding-left: 17px;
}
    .categoryname2
    {color : black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
    margin-bottom: 30px;  }
<style>
.main-post {
    margin-bottom: 30px;
    position: relative; /* Required for positioning the category */
}

.post-author {
    text-transform: lowercase;
    display: flex;
    align-items: center;
    gap: 8px; /* Image aur text ke beech gap */
    font-size: 14px;
}

.post-author img {
    border-radius: 50%; /* Image ko circular banane ke liye */
    width: 32px;
    height: 32px;
}

.main-post-image {
    width: 100%;
    height: auto;
    position: relative; /* Relative positioning for the category */
}

.category-overlay {
font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 13px !important;
    line-height: 24px;
    font-weight: 400;
    font-style: normal;
    position: absolute;
    top: 20px !important;
    left: 20px !important;
    background-color: #ff4e00 !important; /* Red background with opacity */
    padding: 2px 7px !important;
    color: white;
}

.category-name {
    display: inline-block;
}

.main-post-content {
    padding: 15px;
}

.main-post .post-date {
    font-size: 14px;
    color: #999;
}

.main-post .post-title {
    color: black !important;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;

   text-transform: uppercase;
}
.most-popular3 h1 
{
    color : black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;  
}
.spotlight h2 

{   color : black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
}

.post-right h3
{
    color : black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
}
.latestpost4 {
    padding-top: 32px;
    border-top: 1px solid darkgray;
    margin-top: 50px;
    color: black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
}
.main-post .post-title:hover {
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
}
.main-post .post-paragraph  {
    font-size: 16px;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
}
.post-paragraph p
{
    color: black !important;
}
.main-post .post-author {
    font-size: 14px;
    color: #444;
}

.additional-posts .row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.additional-posts .col {
    flex: 0 0 48%;
}

.post-item {
    display: flex;
}

.post-item-image {
    width: 40%;
    margin-right: 15px;
}

.post-item-details {
    flex: 1;
}

.post-item-details .post-date {
    font-size: 13px;
    text-transform: uppercase;
    color: #777;
}

.post-item-details .post-title {
    color: black;
    font-size: 16px;
    /* font-weight: bold; */
}

.post-item-details .post-title:hover {
    color: gray;
    font-size: 16px;
    /* font-weight: bold; */
}
.latest-posts-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: space-between;
    margin-top: 40px;
}
.latest-post-item {
    width: calc(50% - 15px);
    position: relative;
    box-sizing: border-box;
    overflow: hidden;
    /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); */
    /* transition: transform 0.3s ease, box-shadow 0.3s ease; */
}


.latest-post-image {
    width: 100%;
    height: 250px;
    position: relative;
}

.latest-post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the area nicely */
}


.latest-post-details {
    padding: 15px;
}

.latest-post-details span.post-date {
    text-transform: uppercase;
    font-size: 14px !important;
    text-transform: uppercase !important;
    color: #777;
}
.latest-post-details h3.post-title {
    font-size: 20px;
    color: black !important;
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-weight: 600;
    line-height: 1.2;
    color: inherit;
    text-transform: uppercase;
}
.latest-post-details h3.post-title:hover
{
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
}
/* Responsive Styles */
@media (max-width: 1024px) {
    .latest-post-item {
        width: calc(50% - 15px); /* 2 posts per row on medium screens */
    }
}

@media (max-width: 768px) {
    .latest-post-item {
        width: 100%; /* 1 post per row on small screens */
    }
}

@media (max-width: 480px) {
    .sidebar {
    position: relative;
    top: 20px;
    height: fit-content;
}
.featured-post img {
    width: 100% !important;
    height: auto;
}
.small-posts {
    display: flex;
    gap: 20px;
    flex-direction: column;
}
.featured-post {
    display: flex;
    flex-direction: column;
}
.container1 {
    padding-inline: 0px !important;
    margin: 20px;
    width: unset !important;
    display: flex;
    gap: 40px;
    flex-direction: column;
}
.follow-us {
    width: 100% !important;
}
.facebook {
    width: 100% !important;
    background-color: #4071BA;
}
.twitter {
    background-color: #3FB1D1;
    width: 100% !important;
}
.instagram {
    width: 100% !important;
    background-color: #3F729B;
}
.container2 {
    padding-left: 20px;
}
.fea-posts
{
    padding-inline:20px !important ;
}
.recent-category-posts {
    display: flex;
    /* flex-wrap: wrap; */
    gap: 0px;
    flex-direction: column;
}
.recent-post {
    width: 100% !important;
    padding: 10px;
    box-sizing: border-box;
}
.date-overlay {
    display: none !important;
}
.soccer-posts-container {
    padding-inline: 20px !important;
    
}
.most-popular {
    width: 100%;
}
.spotlight {
    width: 100%;
}
.additional-posts .row {
    display: flex;
    flex-wrap: wrap;
    gap: 0px;
    flex-direction: column;
}
.recent-news {
    width: 100%;
}
.basketball {
    width: 100% !important;
}
.post-author img {
    width: 40px !important;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}
.soccer-post {
    display: flex;
    flex-direction: column !important;
}
.post-image {
    width: 100% !important; 
}
.post-content {
    width: 100% !important;
    padding-inline: 0px !important;
}
.slider-container-text .swiper-slide {
        width: 100% !important;
    }
    .text-post-category 
    {
        display: none;
    }
    .swiper-slide
    {
        width: 100% !important;
    }
.container9 {
    padding-inline: 0px !important;
    display: flex;
    flex-direction: column;
}
    .category-overlay {
        font-size: 12px; /* Smaller category font on very small screens */
    }

    .latest-post-details .post-date {
        font-size: 12px; /* Smaller date font on small screens */
    }

    .latest-post-details .post-title {
        font-size: 16px; /* Smaller title font on small screens */
    }
}
.newsletter {
    margin-top: 30px;
    background: #F7F7F7;
    padding: 20px;
   text-align: center;
    width: 100%;
}
.newsletter h2 {
    margin-top: 20px;
    text-transform: uppercase;
    margin-bottom: 33px;
    font-size: 20px;
    color: #333;
}

        .form-container {
    display: flex;
    gap: 10px;
    flex-direction: column;
}

.newsletter input {
    font-weight: 300;
    text-transform: capitalize;
    flex: 1;
    padding: 10px;
    font-size: 15px;
}
        .newsletter button {
            margin-top:10px;
            padding: 10px 15px;
            border: none;
            text-transform:uppercase;
            background-color:#ff4e00;
            font-size: 16px;
            cursor: pointer;
            color:white;
            transition: 0.3s;
        }

        .newsletter button:hover {
            background-color: black;
            color: #fff;
        }
        body {
            font-family:  'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
        }
        .follow-us {
            width: 350px;
           
        }
        .follow-us h2 {
            color : black;
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    color: #101010;
    text-transform: uppercase;
    font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
    margin-top: 30px;  
    padding-bottom: 15px;
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
   width: 150px !important;
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
              
.fea-post {
    margin-top: 30px;
    position: relative;
}

.fea-img-wrapper {
    position: relative;
    overflow: hidden;
    /* border-radius: 10px; */
}

.fea-img-wrapper img {
    width: 100%;
    height: 250px;
    /* display: block; */
    /* border-radius: 10px; */
}

.fea-category-overlay {
    position: absolute;
    top: 10px;
    left: 10px;
    text-transform:uppercase;
    background-color :#ff4e00;
    color: #fff;
    padding: 5px 10px;
    font-size: 14px;
}

.fea-meta {
    margin-top: 10px;
}

.fea-date {
    display: block;
    color: gray;
    font-size: 14px;
}

.fea-title a {
    text-decoration: none;
    color: black;
    font-size: 18px;
    font-weight: bold;
}

.fea-title a:hover {
    color: #A40D0D;
}

.basketball
    {
        width: 80%;
    }
    .container9
    {padding-inline:85px ;
        display: flex;
    }
    .basketball-container {
        width: 100%;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    /* === ROW 1 - FEATURED POST === */
    .featured-post {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    background: #fff;
    /* padding: 20px; */
    /* border-radius: 10px; */
    /* box-shadow: 0px 2px 8px rgba(0,0,0,0.1); */
}
.featured-post img {
    width: 40%;
    height: 350px;
    /* border-radius: 8px; */
    object-fit: cover;
}

.featured-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
}

    .post-meta {
        font-size: 14px;
        color: #666;
    }

    .post-title {
        font-size: 20px;
        font-weight: bold;
        margin: 5px 0;
    }

    .post-excerpt {
        font-size: 16px;
        color: #333;
        max-height: 60px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .post-author {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .post-author img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .read-more {
    width: 108px;
    text-transform: uppercase;
    margin-top: 32px;
    display: inline-block;
    padding: 8px 15px;
    background: #ff4e00 !important;
    color: white;
    text-decoration: none;
    /* border-radius: 5px; */
    /* font-weight: bold; */
}
    /* === ROW 2 - 3 SMALL POSTS === */
    .small-posts {
        display: flex;
        gap: 20px;
    }

    .small-post {
    gap: 10px;
    flex: 1;
    display: flex;
    /* background: #fff; */
    /* padding-block: 15px; */
    border-radius: 10px;
    /* text-align: center; */
    /* box-shadow: 0px 2px 8px rgba(0,0,0,0.1); */
}

.small-post img {
    width: 120px;
    height: 120px;
    object-fit: contain;
    /* border-radius: 8px; */
}
.fff {
    padding-top: 08px;
}
    .small-title {
        font-size: 16px;
        font-weight: bold;
        margin-top: 0px;
    }
    .small-title a {
        color: black;
        font-weight: 400;
    }
    .small-title a:hover {
   
    color: gray;
}
@media (max-width: 768px) {
    .elementor-element.elementor-element-76e3bb0.e-con-full.e-flex.e-con.e-parent.e-lazyloaded {
    display: none;
}
.social-container {
    flex-direction: column;
}
.recent-post {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
}
.sidebar {
    position: relative;
    top: 20px;
    height: fit-content;
}
.most-popular {
    width: 100%;
}
.post-image22 img {
    height: 100%;
    max-width: 100%;
}
.spotlight {
    padding-right: 20px;
    width: 100%;
}
.recent-news {
 padding-right:20px;
    width: 100%;
}
.container9 {
    padding-inline: 0px;
    display: flex;
    flex-direction: column;
}
.container1 {
    padding-inline: 0px !important;
    margin: 20px;
    width: 97%;
    display: flex;
    gap: 40px;
    flex-direction: column;
}
.basketball {
    width: 100%;
}
.recent-category-posts {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    flex-direction: column;
}
.post-author img {
    width: 40px !important;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}
.container2 {
    padding-inline: 20px;
    max-width: 100%;
    /* margin: 0 auto; */
    font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
}
.fea-posts {
    padding-inline: 20px;
}
        .featured-post {
            flex-direction: column;
        }
        
        .featured-post img {
            width: 100%;
        }
        
        .small-posts {
            flex-direction: column;
        }
    }
    
 .bicycle-container {
    width: 100%;
    /* max-width: 1200px; */
    /* margin: auto; */
    /* padding: 20px; */
    display: flex;
    gap: 20px;
    justify-content: space-between;
}

.bicycle-post {
    margin-top: 50px;
    /* flex: 1; */
    /* background: #fff; */
    /* padding: 15px; */
    /* border-radius: 10px; */
    /* text-align: center; */
    /* box-shadow: 0px 2px 8px rgba(0,0,0,0.1); */
    position: relative;
}

.bicycle-post img {
    width: 100%;
    height: auto;
    object-fit: cover;
    /* border-radius: 8px; */
}

.post-category {
    text-transform: uppercase;
    position: absolute;
    top: 10px;
    left: 10px;
    background:#ff4e00;
    color: #fff;
    padding: 5px 10px;
    font-size: 14px;
    /* border-radius: 5px; */
}

.post-meta {
    font-size: 14px;
    color: #666;
    margin-top: 10px;
}

.post-title {
    font-size: 18px;
    font-weight: bold;
    margin-top: 5px;
}

.post-excerpt {
    font-size: 14px;
    color: #555;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .bicycle-container {
        flex-direction: column;
    }
}

.swiper-horizontal>.swiper-pagination-bullets, 
    .swiper-pagination-bullets.swiper-pagination-horizontal, 
    .swiper-pagination-custom, 
    .swiper-pagination-fraction {
        display: none;
    }
    .swiper-button-prev.swiper-text-prev, .swiper-button-next.swiper-text-next {
        display: none;
    }
    .slider-container-text {
    width: 100%;
    margin: auto;
    padding-block: 20px;
    padding-inline: 85px;
    background-color: #F4F4F4;
    overflow: hidden;

}
    /* === TEXT-ONLY SLIDER STYLES === */
    .slider-text-posts .swiper-slide {
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 180px;
    position: relative;
}
    /* ADD SEPARATOR */
    .swiper-slide:not(:last-child)::after {
        content: "";
        position: absolute;
        right: -10px; /* Adjust gap */
        top: 10%;
        bottom: 10%;
        width: 2px;
        background: #ddd; /* Light gray line */
    }

    .text-post-category {
font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 12px !important;
    line-height: 20px;
    font-weight: 400;
    font-style: normal;
    text-transform: uppercase;
    position: absolute;
    top: 20px !important;
    left: 20px !important;
    background-color: #ff4e00 !important; /* Red background with opacity */
    padding: 2px 7px !important;
    color: white;
    }

    .text-post-date {
    text-transform: uppercase;
    font-size: 14px;
    color: #888;
    margin: 5px 0;
}

    .text-post-title {
        font-size: 16px;
        font-weight: bold;
        color: #222;
    }
    .text-post-title a {
    color: black;
    font-size: 19px;
    line-height: 24px;
    font-weight: 500;
    text-transform: uppercase;
}
.text-post-title a:hover {
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 3px;
}

    /* RESPONSIVE */
    @media (min-width: 778px) and (max-width: 1024px) {
        .social-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    flex-direction: column;
}
.container1 {
    padding-right: 0px !important;
    padding-left: 20px !important;
    margin: 0px !important;
    width: 100%;
    display: flex;
    gap: 20px;
}
.small-posts {
    display: flex;
    gap: 20px;
    flex-direction: column;
}
.post-thumbnail img {
    width: 100% !important;
    height: 100% !important;
    
}
.latest-tab .post-card, .popular-tab .post-card, .comments-tab .post-card {
    display: flex;
    margin-bottom: 15px;
     flex-direction: column;
}
.container9 {
    padding-inline: 20px !important;
    display: flex;
}
.recent-news {
    width: 30%;
}
.featured-post img {
    width: 40%;
    height: 435px;
    /* border-radius: 8px; */
    object-fit: cover;
}
.post-author img {
    width: 40px !important;
    height: 40px !important;
    border-radius: 50%;
    margin-right: 10px;
}
.additional-posts .col {
    flex: auto !important;
}
.slider-container-text {
    width: 100%;
    margin: auto;
    padding-block: 20px;
    /* padding-inline: 85px; */
    background-color: #F4F4F4;
    overflow: hidden;
}
        .text-post-title { font-size: 14px; }
    }
    @media (max-width: 768px) {
        .text-post-title { font-size: 12px; }
        .slider-text-posts .swiper-slide { height: 160px; } /* Adjust height for mobile */
        .swiper-slide:not(:last-child)::after {
            right: -5px; /* Adjust gap for smaller screens */
        }
    }


    .soccer-posts-container {
    padding-left: 19px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.soccer-post {
  background-color: white;
  /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
  display: flex;
  flex-direction: row;
  width: 100%;
  margin: 10px 0;
  border-radius: 8px;
}

.post-image {
    position: relative;
    width: 50%;
    overflow: hidden;
    /* border-radius: 8px; */
}

.post-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.post-image .overlay {
  position: absolute;
  top: 20px;
  left: 20px;
  
font-family:'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;
    font-size: 13px !important;
    line-height: 24px;
    font-weight: 400;
    font-style: normal;
    background-color: #ff4e00 !important; /* Red background with opacity */
    padding: 2px 7px !important;
    color: white;
  display: flex;
  text-transform: uppercase;
}

.post-content {
    width: 65%;
    padding-inline: 20px;
    
}

.datee {
    padding-top: 10px;
    text-transform: uppercase;
    font-size: 15px;
    color: gray;
    margin-bottom: 10px;
}
.titles {
    font-size: 28px;
    font-weight: bold;
    margin: 10px 0;
    text-transform: uppercase;
    color:black
}
.titles:hover {
    text-decoration: underline;
    text-decoration-color: #FF4E00;
    text-decoration-thickness: 4px;
}
.paragraph {
    font-size: 16px;
    color: #555;
    line-height: 25px;
    margin-bottom: 10px;
}

.author {
  display: flex;
  align-items: center;
  margin: 21px 0;
  text-transform:lowercase;
}

.author img {
  border-radius: 50%;
  width: 30px;
  height: 30px;
  margin-right: 10px;
}

.read-more2 {
    padding-bottom: 20px;
}
.read-more2 button {
  background-color: #ff4e00;
  border: none;
  font-size:14px;
  padding: 10px 20px;
  color: white;
  cursor: pointer;
  font-weight: bold;
  text-transform: uppercase;
}

.read-more2 button:hover {
  background-color: #FF6600;
}


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
    font-size: 15px;
    line-height: 20px;
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
</style>


<div class="custom-bg">
    <div class="custom-overlay"></div>
    <div class="custom-content">
        <?php echo do_shortcode('[recent_category_posts]'); ?>
    </div>
</div>
<div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">


<!-- === TEXT-ONLY SLIDER === -->
<div class="slider-container-text">
    <div class="swiper slider-text-posts">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 8,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $category = get_the_category();
                    $category_name = !empty($category) ? esc_html($category[0]->name) : 'Uncategorized';
                    ?>
                    <div class="swiper-slide">
                        <div class="text-post-category"><?php echo $category_name; ?></div>
                        <div class="text-post-date"><i class="fas fa-clock" aria-hidden="true" ></i> &nbsp; <?php echo get_the_date('M d, Y'); ?></div>
                        <div class="text-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
        <div class="swiper-button-next swiper-text-next"></div>
        <div class="swiper-button-prev swiper-text-prev"></div>
        <div class="swiper-pagination swiper-text-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper2 = new Swiper(".slider-text-posts", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-text-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-text-next",
        prevEl: ".swiper-text-prev",
    },
    breakpoints: {
        320: { slidesPerView: 1 },
        480: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
        1440: { slidesPerView: 4 }
    }
});

</script>




<div class="container1">
    <div class="most-popular sidebar">
       
       
<?php
// Custom Query for 5 posts
$args = array(
    'posts_per_page' => 8,
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


   
<!-- FontAwesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
<div class="categoryname">Categories</div>
<div class="category-container">
    <ul class="category-list">
    <?php
    $categories = get_categories(array(
        'hide_empty' => 0, 
        'exclude'    => get_cat_ID('Uncategorized') // "Uncategorized" category ko hatana
    ));

    foreach ($categories as $category) {
        $category_name = ucwords(strtolower($category->name)); // Pehla letter capital
        $category_link = get_category_link($category->term_id); // Category ka link lein
        echo '<li><a  style="color:black;" href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a> <span>(' . $category->count . ')</span></li>';
    }
?>

    </ul>
</div>


        <!-- Content here -->
    </div>
    
    <div class="spotlight">
        <h2>Spotlight</h2>
        <?php
// Custom WP Loop for Football Category Posts
$args = array(
    'category_name' => 'football', // Football category ko select karo
    'posts_per_page' => 5, // Total 5 posts dikhana hai
);
$query = new WP_Query( $args );

// Pehla Post (Bigger Post)
if ( $query->have_posts() ) :
    $count = 0; 
    while ( $query->have_posts() ) : $query->the_post();
        $count++;
        if ($count == 1): ?>
            <div class="main-post">
                <a href="<?php the_permalink(); ?>" class="main-post-link"> <!-- Post ko clickable banaya -->
                    <div class="main-post-image">
                        <?php the_post_thumbnail(); ?> <!-- Post image -->
                        <div class="category-overlay">
                            <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo '<span class="category-name">' . esc_html( $categories[0]->name ) . '</span>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="main-post-content">
                        <span class="post-date"><?php echo get_the_date(); ?></span> <!-- Post date -->
                        <h2 class="post-title"><?php the_title(); ?></h2> </a><!-- Post title -->
                        <p class="post-paragraph"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                        <span class="post-author">
    <?php echo get_avatar(get_the_author_meta('ID'), 32); ?> <!-- Author Avatar (size: 32px) -->
    By <?php the_author(); ?>
</span>

                    </div>
                
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="additional-posts">
    <div class="row">
        <?php
        // Additional Posts (2 columns layout)
        $args = array(
            'category_name' => 'football',
            'posts_per_page' => 4,
            'offset' => 1, // Pehle post ko skip karo
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) : $query->the_post();
                $count++;
                ?>
                <div class="col">
                    <a href="<?php the_permalink(); ?>" class="post-item-link"> <!-- Post ko clickable banaya -->
                        <div class="post-item">
                            <div class="post-item-image">
                                <?php the_post_thumbnail(); ?> <!-- Post image -->
                            </div>
                            <div class="post-item-details">
                                <span class="post-date"><?php echo get_the_date(); ?></span> <!-- Post date -->
                                <h3 class="post-title"><?php the_title(); ?></h3> <!-- Post title -->
                            </div>
                        </div>
                    </a>
                </div>
                <?php if($count % 2 == 0) echo '</div><div class="row">'; // Break row every 2 posts ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<!-- CSS Styling -->



<!----latest------>
<div class="latestpost4">Latest posts</div>
<?php
// Custom WP Loop for Latest Posts
$args = array(
    'posts_per_page' => 6, // Latest 6 posts dikhana hai
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    echo '<div class="latest-posts-container">';
    $count = 0;
    while ( $query->have_posts() ) : $query->the_post();
        $count++;
        ?>
        <div class="latest-post-item">
            <div class="latest-post-image">
                <?php the_post_thumbnail(); ?> <!-- Post image -->
                <div class="category-overlay">
                    <?php 
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="category-name">' . esc_html( $categories[0]->name ) . '</span>';
                        }
                    ?>
                </div>
            </div>
            <div class="latest-post-details">
                <span class="post-date"><i class="fas fa-clock" aria-hidden="true" ></i> &nbsp; <?php echo get_the_date(); ?> </span> <!-- Post date -->
                <h3 class="post-title"><a style="color:black;" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3> <!-- Post title -->
            </div>
        </div>
        <?php
    endwhile;
    echo '</div>';
endif;
?>

        <!-- Spotlight Image and Content -->
    </div>

    <div class="recent-news sidebar">
        
        <div class="post-right" style="  font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;">
        <h3>Recent News</h3>
        <div class="div" style="padding-bottom:20px; padding-top:10px;">
        <?php
        $latest_posts = new WP_Query(array('posts_per_page' => 10));
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


        <div class="newsletter">
        <h2>Subscribe to Our Newsletter</h2>
        <div class="form-container">
            <input type="email" placeholder="Enter your email...*" required>
            <button>Subscribe</button>
        </div>
    </div>
  
    
       
        <?php
// Mock data (replace with database or API fetch)
$social_data = [
    'facebook' => ['icon' => 'fab fa-facebook-f', 'count' => '12.3K', 'label' => 'Fans'],
    'twitter' => ['icon' => 'fab fa-twitter', 'count' => '32', 'label' => 'Followers'],
    'instagram' => ['icon' => 'fab fa-instagram', 'count' => '0', 'label' => 'Followers']
];
?>

   
       

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
        </div>
            </div>
            </div>
        <!---------slider2----------------------->

       
        <div class="containerread">

        <div class="read">Must Read</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<div class="custom-post-slider-container">
    <div class="swiper custom-post-slider">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 18, // Total posts
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $category = get_the_category();
                    $category_name = !empty($category) ? esc_html($category[0]->name) : 'Uncategorized';
                    ?>
                    <div class="swiper-slide custom-swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="custom-post-image" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="custom-post-category"><?php echo $category_name; ?></div>
                            <div class="custom-post-details">
                            <div class="custom-post-date"><i class="fas fa-clock" aria-hidden="true" ></i> &nbsp;<?php echo get_the_date('M d, Y'); ?></div>
                                <div class="custom-post-title"><?php the_title(); ?></div>
                               
                            </div>
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-next custom-swiper-button-next"></div>
        <div class="swiper-button-prev custom-swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination custom-swiper-pagination"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".custom-post-slider", {
        slidesPerView: 4,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: ".custom-swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".custom-swiper-button-next",
            prevEl: ".custom-swiper-button-prev",
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1440: { slidesPerView: 4 }
        }
    });
</script>


        </div>
        




        <div class="container9">     
    <div class="basketball">


<div class="basketball-container">
    <div class="categoryname2">Basket ball</div>
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
        'category_name'  => 'basketball',
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        $count = 0;
        while ($query->have_posts()) : $query->the_post();
            if ($count === 0) :
                // === FEATURED POST ===
                $author_id = get_the_author_meta('ID');
                ?>
                <div class="featured-post">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                    <div class="featured-content">
                        <div class="datee"><?php echo get_the_date('M d, Y'); ?></div>
                        <div class="titles"><a style="color:black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="paragraph"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></div>
                        <div class="post-author">
                            <img src="<?php echo get_avatar_url($author_id, ['size' => 50]); ?>" alt="<?php the_author(); ?>">
                            <span> by <?php the_author(); ?></span>
                        </div>
                        <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
                <?php
            else :
                if ($count === 1) echo '<div class="small-posts">'; // Start small posts row
                ?>
                <div class="small-post">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                    <div class="fff">
                    <div class="post-meta"><?php echo get_the_date('M d, Y'); ?></div>
                    <div class="small-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    </div>
                </div>
                <?php
                if ($count === 3) echo '</div>'; // End small posts row
            endif;
            $count++;
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No basketball posts found.</p>';
    endif;
    ?>
    <div class="bicycle2">
    bicycle
</div>
    <div class="bicycle-container">
        
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'category_name'  => 'bicycle',
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="bicycle-post">
                <div class="post-category">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    }
                    ?>
                </div>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                <div class="datee"><i class="fas fa-clock" aria-hidden="true" ></i> &nbsp;<?php echo get_the_date('M d, Y'); ?></div>
                <div class="titles" style="font-size:20px;"><a style="color:black !important" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="post-excerpt">
                    <?php
                    // Display an excerpt with a limit of 4 lines
                    $excerpt = wp_trim_words(get_the_excerpt(), 25, '...');
                    echo '<p>' . esc_html($excerpt) . '</p>';
                    ?>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No bicycle posts found.</p>';
    endif;
    ?>
</div>


</div>
<div class="soccer">
    Soccer
</div>
<?php
// Define the query for Soccer category posts
$args = array(
    'category_name' => 'soccer',  // Replace with your category slug (e.g., 'soccer')
    'posts_per_page' => 5,        // Number of posts to display
);

$query = new WP_Query( $args );

// Check if there are posts
if ( $query->have_posts() ) :
    echo '<div class="soccer-posts-container">';
    
    // Loop through posts
    while ( $query->have_posts() ) : $query->the_post();
        ?>
        <div class="soccer-post">
            <div class="post-image">
                <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'medium' ); // Display the post thumbnail image
                }
                ?>
                <div class="overlay">
                    <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name ); // Display the first category
                    }
                    ?>
                </div>
            </div>

            <div class="post-content">
                <div class="datee"><i class="fas fa-clock" aria-hidden="true" ></i> &nbsp;<?php echo get_the_date(); ?></div>
                <div class="titles"><a style="color:black !important" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="paragraph">
                    <?php echo wp_trim_words( get_the_content(), 30 ); ?> <!-- Trim the content to 30 words -->
                </div>
                <div class="author">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> <!-- Display author avatar -->
                    <span class="author-name">
    by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" style="color: black;"><?php echo get_the_author(); ?></a>
</span>
                </div>
                <div class="read-more2">
                    <a href="<?php the_permalink(); ?>"><button>Read More</button></a>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    
    echo '</div>';

    // Reset post data
    wp_reset_postdata();
else :
    echo '<p>No posts found</p>';
endif;
?>


       
    </div> 

    <div class="recent-news sidebar">
       
        
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
        $latest_posts = new WP_Query(['posts_per_page' => 5, 'orderby' => 'date']);
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
            'posts_per_page' => 5,
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
            $comments = get_comments(['number' => 5, 'status' => 'approve']);
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


        <!-- Recent news items here -->
    

 
<div class="soccer">
    Featured News
</div>
<div class="fea-posts">
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 7,
        'category_name'  => 'feature',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $category = get_the_category();
            $category_name = !empty($category) ? esc_html($category[0]->name) : '';
    ?>
            <div class="fea-post">
                <div class="fea-img-wrapper">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                        if ($category_name) {
                            echo '<span class="fea-category-overlay">' . $category_name . '</span>';
                        }
                    } ?>
                </div>
                <div class="fea-meta">
                    <span class="datee"><?php echo get_the_date(); ?></span>
                    <h3 class="titles" style="font-size:18px; line-height:28px;"><a style="color:black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found in fea category.</p>';
    endif;
    ?>
</div>



    </div>
</div>
<?php get_footer(); ?>