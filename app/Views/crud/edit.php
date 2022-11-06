<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-edit"></i> Edit Contact Details</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                <div class="mb-3">
                    <label for="" class="control-label">Fullname (first name, middle name, last name)</label>
                    <div class="input-group">
                        <input type="text" autofocus class="form-control form-control-border" id="firstname" name="firstname" value="<?= isset($data['firstname']) ? $data['firstname'] : '' ?>" required="required" placeholder="First Name">
                        <input type="text" class="form-control form-control-border" id="middlename" name="middlename" value="<?= isset($data['middlename']) ? $data['middlename'] : '' ?>" required="false" placeholder="Middle Name (optional)">
                        <input type="text" class="form-control form-control-border" id="lastname" name="lastname" value="<?= isset($data['lastname']) ? $data['lastname'] : '' ?>" required="required" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="gender" class="control-label">Gender</label>
                    <select name="gender" id="gender" class="form-select form-select-border" required>
                        <option <?= isset($data['gender']) && $data['gender'] == 'Male' ? 'selecte' : '' ?>>Male</option>
                        <option <?= isset($data['gender']) && $data['gender'] == 'Female' ? 'selecte' : '' ?>>Female</option>
                    </select>
                </div>
               
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="estado" class="control-label">estado </label>
                            <input type="text" class="form-control" id="estado" name="estado" required="required" value="<?= isset($data['estado']) ? $data['estado'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="cidade" class="control-label">cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" required="required" value="<?= isset($data['cidade']) ? $data['cidade'] : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tamquarto" class="control-label">tamquarto </label>
                            <input type="text" class="form-control" id="tamquarto" name="tamquarto" required="required" value="<?= isset($data['tamquarto']) ? $data['tamquarto'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tam_imovel" class="control-label">tam_imovel</label>
                            <input type="text" class="form-control" id="tam_imovel" name="tam_imovel" required="required" value="<?= isset($data['tam_imovel']) ? $data['tam_imovel'] : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="bairro" class="control-label">bairro </label>
                            <input type="text" class="form-control" id="bairro" name="bairro" required="required" value="<?= isset($data['bairro']) ? $data['bairro'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="inst_prox" class="control-label">inst_prox</label>
                            <input type="text" class="form-control" id="inst_prox" name="inst_prox" required="required" value="<?= isset($data['inst_prox']) ? $data['inst_prox'] : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="qtd_ban" class="control-label">qtd_ban </label>
                            <input type="text" class="form-control" id="qtd_ban" name="qtd_ban" required="required" value="<?= isset($data['qtd_ban']) ? $data['qtd_ban'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="qtd_pessoas" class="control-label">qtd_pessoas</label>
                            <input type="text" class="form-control" id="qtd_pessoas" name="qtd_pessoas" required="required" value="<?= isset($data['qtd_pessoas']) ? $data['qtd_pessoas'] : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="tipo" class="control-label">tipo </label>
                            <input type="text" class="form-control" id="tipo" name="tipo" required="required" value="<?= isset($data['tipo']) ? $data['tipo'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="descricao" class="control-label">descricao</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" required="required" value="<?= isset($data['descricao']) ? $data['descricao'] : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="contato" class="control-label">contato </label>
                            <input type="text" class="form-control" id="contato" name="contato" required="required" value="<?= isset($data['contato']) ? $data['contato'] : '' ?>">
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <a class="btn btn-secondary" href="<?= base_url('main/view_details/'.(isset($data['id']) ? $data['id'] : '')) ?>"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>