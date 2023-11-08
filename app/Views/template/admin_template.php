<?php include 'header.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- menu here -->
        <?php include 'menu.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- content goes here -->
            <?= $this->renderSection('content') ?>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
       
    </div>
   
    <?php include 'scripts.php'; ?>
</body>

</html>