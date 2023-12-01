<?= $this->include('innerpages/header.php') ?>
<?= $this->include('innerpages/navbar.php') ?>
        
        <div id="layoutSidenav">
            
            <?= $this->include('innerpages/sidenavbar.php') ?> 
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                         <h4>Add Employee
                                            
                                         <a href="<?= base_url('employee')?>" class="btn btn-danger float-end">Back</a>  
                                         </h4> 
                                    </div>
                                        <div class="card-body"> 
                                            <form action="<?= base_url('employee-store') ?>" method="POST">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <label> Frist Name </label>
                                                        <input type="text" name="frist_name" class="form-control" placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <label> Last Name </label>
                                                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <label> Phone Number </label>
                                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <label> Email </label>
                                                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group mb-3">
                                                        <label> Designation </label>
                                                        <input type="text" name="designation" class="form-control" placeholder="Designation">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group mb-3">
                                                        <button type="submit" class="btn btn-primary px-4">Save Employee</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </main>
                 

        <?= $this->include('innerpages/footer.php') ?>
