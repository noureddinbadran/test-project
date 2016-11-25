<?php $__env->startSection('page-header'); ?>
    <div class="page-title">
        <div class="container">
            <h2>Lessons</h2><!--Page Title -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <main class="main-content">
        <div class="fullwidth-block inner-content">
            <div class="container">
                <div class="col-md-7">
                    <div class="content">
                        <article>
                            <header>
                                <h2 class="entry-title">Consequatur aut perferendis doloribus</h2>
                                <div class="entry-meta">
                                    <span class="date"><i class="icon-calendar"></i> 6 APR 2014</span>
                                    <span class="time"><i class="icon-clock"></i>1:00pm-2:00pm</span>
                                    <span class="price"><i class="icon-coins"></i>$55.00</span>
                                </div>
                            </header>

                            <div class="entry-content">
                                <figure class="featured-image">
                                    <img src="assets/dummy/featured-image.jpg" alt="">
                                </figure>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

                            </div>

                            <div class="actions">
                                <a href="addLesson" class="button green">New Lesson</a>
                                <a href="ShowLessons" class="button secondary">Show Lessons</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <aside class="sidebar">
                        <h2 class="section-title"><i class="icon-book"></i> Select a course</h2>
                        <ul class="courses">
                            <li>
                                <h3 class="course-title"><a href="#">Nostrud exercitation ullamco</a></h3>
                                <div class="course-meta">
                                    <span class="date"><i class="icon-calendar"></i> 6 APR 2014</span>
                                    <span class="time"><i class="icon-clock"></i>1:00pm-2:00pm</span>
                                    <span class="price"><i class="icon-coins"></i>$55.00</span>
                                </div>
                            </li>
                            <li class="current">
                                <h3 class="course-title"><a href="#">Nostrud exercitation ullamco</a></h3>
                                <div class="course-meta">
                                    <span class="date"><i class="icon-calendar"></i> 6 APR 2014</span>
                                    <span class="time"><i class="icon-clock"></i>1:00pm-2:00pm</span>
                                    <span class="price"><i class="icon-coins"></i>$55.00</span>
                                </div>
                            </li>
                            <li>
                                <h3 class="course-title"><a href="#">Nostrud exercitation ullamco</a></h3>
                                <div class="course-meta">
                                    <span class="date"><i class="icon-calendar"></i> 6 APR 2014</span>
                                    <span class="time"><i class="icon-clock"></i>1:00pm-2:00pm</span>
                                    <span class="price"><i class="icon-coins"></i>$55.00</span>
                                </div>
                            </li>
                            <li>
                                <h3 class="course-title"><a href="#">Nostrud exercitation ullamco</a></h3>
                                <div class="course-meta">
                                    <span class="date"><i class="icon-calendar"></i> 6 APR 2014</span>
                                    <span class="time"><i class="icon-clock"></i>1:00pm-2:00pm</span>
                                    <span class="price"><i class="icon-coins"></i>$55.00</span>
                                </div>
                            </li>
                            <li>
                                <h3 class="course-title"><a href="#">Nostrud exercitation ullamco</a></h3>
                                <div class="course-meta">
                                    <span class="date"><i class="icon-calendar"></i> 6 APR 2014</span>
                                    <span class="time"><i class="icon-clock"></i>1:00pm-2:00pm</span>
                                    <span class="price"><i class="icon-coins"></i>$55.00</span>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div> <!-- .fullwidth-block -->
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>