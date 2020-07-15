<?php $this->load->view("modul_template/head"); ?>

<section class="section-padding3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Data Sekawan Media</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#elegantModalForm" aria-pressed="false">
                    Refresh Data
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#elegantModalForm" aria-pressed="false">
                    Save Data
                </button>
                <br>
                <br>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Age</th>
                            <th>Profil_Image</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                        foreach ($data as $row) :
                        ?>
                            <tr class="odd gradeX">
                                <th scope="row"><?php echo $row->id; ?></th>
                                <td><?php echo $row->employee_name; ?></td>
                                <td><?php echo $row->employee_salary; ?></td>
                                <td><?php echo $row->employee_age; ?></td>
                                <td><?php echo $row->profile_image; ?></td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        
    </div>
</section>