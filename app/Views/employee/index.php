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
                                <?php
                                    if(session()->getFlashdata('status')){
                                        echo "<h4>".session()->getFlashdata("status")."</h4>";
                                    }
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                         <h4>Employee Data
                                            
                                         <a href="<?= base_url('employee-add')?>" class="btn btn-primary float-end">Add Employee</a>  
                                         </h4> 
                                    </div>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Frist Name</th>
                                                        <th>Last Name</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Designation</th>
                                                        <th>Created</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($employees as $row) : ?>
                                                    <tr>
                                                        <td><?= $row['id'] ?></td>
                                                        <td><?= $row['frist_name'] ?></td>
                                                        <td><?= $row['last_name'] ?></td>
                                                        <td><?= $row['phone'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['designation'] ?></td>
                                                        <td><?= $row['created_at'] ?></td> 
                                                        <td>
                                                            <a href="<?= base_url('employee/edit/'.$row['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                                                            <a href="<?= base_url('employee/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>

                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </main>
                 

        <?= $this->include('innerpages/footer.php') ?>

 