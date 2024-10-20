@extends('layout.main')
@section('title', 'Detail | Perpustakaan Desa')
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner inner-banner-bg9">
            <div class="container">
                <div class="inner-title">
                    <h3>{{ $buku->judul_buku }}</h3>
                    <div class="rating">
                        <i class="ri-star-fill"></i>4k+ rating
                    </div>
                    <div class="inner-banner-content">
                        <a href="instructors-details.html" class="user-area">
                            <img src="assets/images/courses/courses-instructors1.jpg" alt="Instructors">
                            <h3>{{ $buku->penulis }}</h3>
                        </a>
                        <ul class="course-list">
                            <li><i class="ri-time-fill"></i> 10 hr 07 min</li>
                            <li><i class="ri-vidicon-fill"></i> 67 lectures</li>
                        </ul>
                    </div>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Detail Buku</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Courses Details Area -->
        <div class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-contact">
                            <div class="tab courses-details-tab">
                                <ul class="tabs">
                                    <li>
                                        Overview
                                    </li>
                                </ul>
                                <div class="tab_content current active">
                                    <div class="tabs_item current">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-into">
                                               <h3>Description</h3>
                                                <p>
                                                   Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non
                                                    nisi. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia
                                                    eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor
                                                    volutpat. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus ultrices posuere.
                                                </p>
                                                <p>
                                                    Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet
                                                    et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor felis porttitor volutpat.
                                                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vivamus suscipit tortor eget.
                                                 </p>
                                            </div>
                                            <div class="courses-details-into">
                                                <h3>Requirements</h3>
                                                <p>
                                                    Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet
                                                    et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor felis porttitor
                                                    volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vivamus suscipit tortor eget
                                                    felis porttitor volutpat.
                                                </p>
                                                <ul class="courses-details-list">
                                                    <li>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</li>
                                                    <li>Curabitur aliquet quam id dui posuere blandit.</li>
                                                    <li>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</li>
                                                </ul>
                                                <p>
                                                    Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor
                                                    volutpat. Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere.
                                                </p>
                                            </div>
                                            <div class="courses-details-into">
                                                <h3>What you'll learn</h3>
                                                <p>
                                                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non
                                                    nisi. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia
                                                    eget consectetur sed, convallis at tellus.
                                                </p>
                                                <p>
                                                    Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet
                                                    et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor felis porttitor volutpat.
                                                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vivamus suscipit tortor eget.
                                                </p>
                                             </div>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-accordion">
                                                <ul class="accordion">
                                                    <li class="accordion-item">
                                                        <a class="accordion-title active" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
                                                            Introduction
                                                        </a>
                                                        <div class="accordion-content show">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    Introduction to the course
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <div class="tag">3 question</div>
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-time-line"></i>
                                                                    Structure of the course
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-bookmark-3-fill"></i>
                                                                    Required tools
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <span>12 lectures</span>
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-lock-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-time-line"></i>
                                                                    Get your free E-book
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <div class="tag">3 question</div>
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="accordion-item">
                                                        <a class="accordion-title" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
                                                            Design Basics
                                                        </a>
                                                        <div class="accordion-content">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    Intro to basic design
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    Layout
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <span>12 lectures</span>
                                                                    <div class="tag">3 question</div>
                                                                    <div class="tag2">20 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    Visual noise
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <span>10 lectures</span>
                                                                    <div class="tag">6 question</div>
                                                                    <div class="tag2">20 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-a-b"></i>
                                                                    Typography
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <i class="ri-lock-line"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </li>
                                                    <li class="accordion-item">
                                                        <a class="accordion-title active" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
                                                            Figma Academy
                                                        </a>
                                                        <div class="accordion-content show">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    Introduction to the course
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <div class="tag">3 question</div>
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-time-line"></i>
                                                                    Structure of the course
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-bookmark-3-fill"></i>
                                                                    Required tools
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <span>12 lectures</span>
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-lock-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-time-line"></i>
                                                                    Get your free E-book
                                                                </div>
                                                                <div class="accordion-content-right">
                                                                    <div class="tag">3 question</div>
                                                                    <div class="tag2">30 min</div>
                                                                    <i class="ri-play-circle-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-instructor">
                                                <h3>About the instructor</h3>
                                                <div class="details-instructor">
                                                    <img src="assets/images/courses/instructors4.jpg" alt="instructor" />
                                                    <h3>Lauren Handerson</h3>
                                                    <span>iOS Developer & UI Designer</span>
                                                </div>
                                                <ul class="course-list">
                                                    <li> <i class="ri-star-fill"></i>5 (30+ rating)</li>
                                                    <li><i class="ri-vidicon-fill"></i> 67 lectures</li>
                                                    <li><i class="ri-time-fill"></i> 10 hr 07 min</li>
                                                </ul>
                                                <p>
                                                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non
                                                    nisi. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia
                                                    eget consectetur sed, convallis at tellus.
                                                </p>
                                                <p>
                                                    Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet
                                                    et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor felis porttitor volutpat.
                                                    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-review-form">
                                                <h3>Customer Reviews</h3>
                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </div>
                                                    <p>Based on 3 reviews</p>
                                                    <a href="courses-details.html" class="default-btn btn-right">Write a Review <span></span></a>
                                                </div>

                                                <div class="review-comments">
                                                    <div class="review-item">
                                                        <div class="content">
                                                            <img src="assets/images/courses/instructors1.jpg" alt="Images">
                                                            <div class="content-dtls">
                                                                <h4>Heather Joanne </h4>
                                                                <span>15 Jan, 2024 AT 06:30 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star-half'></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                                        </p>
                                                        <a href="shop-details.html" class="review-report-link">Report as Inappropriate</a>
                                                    </div>

                                                    <div class="review-item">
                                                        <div class="content">
                                                            <img src="assets/images/courses/instructors2.jpg" alt="Images">
                                                            <div class="content-dtls">
                                                                <h4>Penelope Rachel</h4>
                                                                <span>15 Jan, 2024  AT 06:30 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star-half'></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="courses-details.html" class="review-report-link">Report as Inappropriate</a>
                                                    </div>

                                                    <div class="review-item">
                                                        <div class="content">
                                                            <img src="assets/images/courses/instructors3.jpg" alt="Images">
                                                            <div class="content-dtls">
                                                                <h4>Leonard Richard</h4>
                                                                <span> 15 Jan, 2024  AT 06:30 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star-half'></i>
                                                        </div>
                                                        <h3>Good</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                                                        <a href="courses-details.html" class="review-report-link">Report as Inappropriate</a>
                                                    </div>
                                                </div>

                                                <div class="review-form">
                                                    <div class="contact-wrap-form">
                                                        <div class="contact-form">
                                                            <h4>Write a Review</h4>
                                                            <form id="contactForm">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <input type="text" name="website" class="form-control" required data-error="Your website" placeholder="Your Website">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="form-group">
                                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message.."></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12">
                                                                        <button type="submit" class="default-btn">
                                                                            Post A Comment
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="courses-details-sidebar">
                            <img src="{{ asset('storage/' . $buku->cover_buku) }}" alt="Courses" />
                            <div class="content">
                                <span>This course includes:</span>
                                <ul class="courses-details-list">
                                    <li>8.5 hours on-demand video</li>
                                    <li>2 articles</li>
                                    <li>16 downloadable resources</li>
                                    <li>Full lifetime access</li>
                                    <li>Access on mobile and TV</li>
                                    <li>Certificate of completion</li>
                                </ul>
                                <a href="{{ asset('storage/' . $buku->file_buku) }}" class="default-btn" target="blank">Baca Buku</a>
                                <ul class="social-link">
                                    <li class="social-title">Share this course:</li>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/" target="_blank">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Details Area End -->
@endsection
