<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <h4 class="mb-0">List </h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-stripped table-bordered">
                <colgroup>
                    <col width="10%">
                    <col width="30%">
                    <col width="30%">
                    <col width="20%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr class="bg-gradient bg-primary text-light">
                       <th class="py-1 text-center">ID</th>
                        <th class="py-1 text-center">Estado</th>
                        <th class="py-1 text-center">Cidade</th>
                        <th class="py-1 text-center">Bairro</th>
                        <th class="py-1 text-center">Acões</th>
                       
<!--
                        
                        <th class="py-1 text-center">#</th>
                        <th class="py-1 text-center">Gender</th>
                        <th class="py-1 text-center">contact</th>
                        <th class="py-1 text-center">email</th>
                        <th class="py-1 text-center">address</th>
                        <th class="py-1 text-center">Action</th>  -->
                
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($list) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach($list as $row): ?>
                            <tr>
                                <th class="p-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="p-1 align-middle"><?= $row->estado ?></td>
                                <td class="p-1 align-middle"><?= $row->cidade ?></td>
                                <td class="p-1 align-middle"><?= $row->bairro ?></td>

                               
                                 

                                
                                <td class="p-1 align-middle text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?= base_url('main/view_details/'.$row->id) ?>" class="btn btn-default bg-gradient-light border text-dark rounded-0" title="View Contact"><i class="fa fa-eye"></i></a>
                                        <a href="<?= base_url('main/edit/'.$row->id) ?>" class="btn btn-primary rounded-0" title="Edit Contact"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url('main/delete/'.$row->id) ?>" onclick="if(confirm('Are you sure to delete this contact details?') === false) event.preventDefault()" class="btn btn-danger rounded-0" title="Delete Contact"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
 
        </div>
    </div>
</div>