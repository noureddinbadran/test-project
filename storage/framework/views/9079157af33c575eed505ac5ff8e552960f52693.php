<?php $__env->startSection('page-header'); ?>
    <div class="page-title">
        <div class="container">
            <h2>Join Our Courses</h2><!--Page Title -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">
        <div class="fullwidth-block inner-content">
            <div class="container">
                <div class="fullwidth-content">


                    <ul class="students-grid">
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-1.jpg" alt="Student 1"></figure>
                            <h3 class="student-name"><a href="#">Monica Kingston</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-2.jpg" alt="Student 2"></figure>
                            <h3 class="student-name"><a href="#">Carol Blumkin</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-3.jpg" alt="Student 3"></figure>
                            <h3 class="student-name"><a href="#">Martina Schulz</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-4.jpg" alt="Student 4"></figure>
                            <h3 class="student-name"><a href="#">Christina Stewart</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-5.jpg" alt="Student 5"></figure>
                            <h3 class="student-name"><a href="#">Arthur Smith</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-6.jpg" alt="Student 6"></figure>
                            <h3 class="student-name"><a href="#">Steven johnson</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-7.jpg" alt="Student 7"></figure>
                            <h3 class="student-name"><a href="#">Sarah James</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                        <li class="student">
                            <figure class="avatar"><img src="assets/dummy/student-lg-8.jpg" alt="Student 8"></figure>
                            <h3 class="student-name"><a href="#">George Harrington</a></h3>
                            <p class="student-sum">Libero tempore, cum soluta nobis est eligendi optio cumque nihil.</p>
                        </li>
                    </ul>

                    <div class="pagination">
                        <a href="#" class="page-numbers"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="page-numbers">5</a>
                        <a href="#" class="page-numbers">6</a>
                        <a href="#" class="page-numbers">7</a>
                        <a href="#" class="page-numbers"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div> <!-- .fullwidth-block -->
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>