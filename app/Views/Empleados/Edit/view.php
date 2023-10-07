<div class="col-12">
    <div class="card primary">
        <div class="card-header">
            <h3 class="card-title">Employee Information</h3>
        </div>

        <div class="card-body">
            <form method="post" action="<?=base_url('Empleados/save')?>" enctype="multipart/form-data">
                <div class="form-group col-6">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" name="photo_id" value="" />
                </div>
                <div class="form-group col-6">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" name="code" value="<?=$empleado['code']?>">
                </div>
                <div class="form-group col-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?=$empleado['name']?>">
                </div>
                <div class="form-group col-6">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" name="surname" value="<?=$empleado['surname']?>">
                </div>
                <div class="form-group col-6">
                    <label for="identity">Identity</label>
                    <input type="text" class="form-control" name="identity" value="<?=$empleado['identity']?>">
                </div>
                <div class="form-group col-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="<?=$empleado['address']?>">
                </div>
                <div class="form-group col-6">
                    <label for="telephone">Telephone</label>
                    <input type="tel" class="form-control" name="telephone" value="<?=$empleado['telephone']?>">
                </div>
                <input type="hidden" name="id" value="<?=$empleado['id']?>">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>