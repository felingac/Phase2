<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Employees</h3>
        </div>

        <div class="card-body">
            <table id="empleados" class="table table-bordered table-striped responsive">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Identity</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($empleados as $empleado) : ?>
                        <tr>
                            <td><a href="<?=base_url($empleado['photo_id'])?>" target="_blank">Look Photo</a></td>
                            <td><?= $empleado['code'] ?></td>
                            <td><?= $empleado['name'] ?></td>
                            <td><?= $empleado['surname'] ?></td>
                            <td><?= $empleado['identity'] ?></td>
                            <td><?= $empleado['address'] ?></td>
                            <td><?= $empleado['telephone'] ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="<?=base_url('Empleados/edit/')?><?= $empleado['id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger delete" data-id="<?= $empleado['id'] ?>"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>