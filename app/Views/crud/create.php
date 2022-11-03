<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-plus-square"></i> Add New Contact Details</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id">
 
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="estado" class="control-label">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado" required="required" value="<?= !empty($request->getPost('estado')) ? $request->getPost('estado') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="cidade" class="control-label">cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" required="required" value="<?= !empty($request->getPost('cidade')) ? $request->getPost('cidade') : '' ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="bairro" class="control-label">bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" required="required" value="<?= !empty($request->getPost('bairro')) ? $request->getPost('bairro') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="contatoUser" class="control-label">contatoUser</label>
                            <input type="text" class="form-control" id="contatoUser" name="contatoUser" required="required" value="<?= !empty($request->getPost('contatoUser')) ? $request->getPost('contatoUser') : '' ?>">
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <button class="btn btn-secondary" form="create-form" type="reset"><i class="fa fa-times"></i> Reset</button>
    </div>
</div>