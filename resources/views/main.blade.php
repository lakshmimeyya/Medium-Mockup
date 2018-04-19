@extends('welcome')

@section('content')
<div class="container">
    <div class="row">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <main class="wrapper">
                        <div class="main-container">

                            <?php include('../resources/views/banner.php'); ?>

                            <?php if (Auth::check()) { ?>

                                    <div class=" publication-topic-container">

                                        <div class="topic-header">
                                            <h3><span><?php echo $articlesHeading ?></span></h3>
                                            <a href="#"><span>MORE</span></a>
                                        </div>

                                        <div class=" topic-articles-container">

                                            <?php foreach ($articleList as $article) { ?>


                                                <div class="article">
                                                    <div class="article-img">
                                                        <img src="https://images.unsplash.com/photo-1465070845512-2b2dbdc6df66?auto=format&fit=crop&w=634&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
                                                    </div>

                                                    <div class="article-description">
                                                        <div class="article-content">
                                                            <a href="#">
                                                                <h3>
                                                                <?php echo $article->title ?>
                                                                </h3>
                                                            </a>

                                                            <h4>Will add summary of content Here</h4>
                                                        </div>

                                                        <div class="article-writer">
                                                            <img class="writer-img" src="https://cdn-images-1.medium.com/fit/c/40/40/1*xfeqdZy1_QVwviKyvqV3TA.jpeg" alt="">
                                                            <div class="writer-info">
                                                                <div class="">
                                                                    <a href="/user/">
                                                                        <?php echo $article->user->firstname;
                                                                              echo ' '.$article->user->lastname;
                                                                        ?>
                                                                    </a>
                                                                </div>
                                                                <div class="">
                                                                    <span>
                                                                        <?php
                                                                            echo $article->created_at->format('M d')
                                                                        ?>
                                                                    </span>
                                                                    <span> . </span>
                                                                    <span>
                                                                        <?php echo $article->readTime; ?> min read
                                                                    </span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            <?php } ?>
                                        </div>

                                    </div>
                            <?php } else { ?>
                                    Should display all articles for all users
                            <?php } ?>


                        </div>
                    </main>
            </div>
</div>
