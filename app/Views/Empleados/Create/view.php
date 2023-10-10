<div class="col-12">
    <div class="card primary">
        <div class="card-header">
            <h3 class="card-title">Employee Information</h3>
        </div>

        <div class="card-body">
            <form method="post" action="<?=base_url('Empleados/save')?>" enctype="multipart/form-data">
                <div class="form-group col-6">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" name="photo_id" required>
                </div>
                <div class="form-group col-6">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" name="code" required>
                </div>
                <div class="form-group col-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group col-6">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" name="surname" required>
                </div>
                <div class="form-group col-6">
                    <label for="identity">Identity</label>
                    <input type="text" class="form-control" name="identity" required>
                </div>
                <div class="form-group col-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="form-group col-6">
                    <label for="telephone">Telephone</label>
                    <input type="tel" class="form-control" name="telephone" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>