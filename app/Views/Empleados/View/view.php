<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado de Empleados</h3>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($empleados as $empleado) : ?>
                        <tr>
                            <td><?= $empleado['code'] ?></td>
                            <td><?= $empleado['code'] ?></td>
                            <td><?= $empleado['code'] ?></td>
                            <td><?= $empleado['code'] ?></td>
                            <td><?= $empleado['code'] ?></td>
                            <td><?= $empleado['code'] ?></td>
                            <td><?= $empleado['code'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

