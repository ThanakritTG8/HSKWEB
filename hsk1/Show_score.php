<?php include('header.php'); ?>

<div class="wrapper">
        <div class="container">

                <form action="../pages/student/index.php">

                        <!-- ///// คะแนน  -->
                        <div>
                                <h3><?php echo $_SESSION['All_score']; ?>/40</h3>
                        </div>

                        <div><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Next >></button></div>

                </form>

        </div>
</div>

<?php include('footer.php'); ?>