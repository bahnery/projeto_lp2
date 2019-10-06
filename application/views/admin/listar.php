<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
                <div class="card mb-4 wow fadeIn">

                <div class="table-responsive">
                    <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($servicos as $servico){?>
                    <tr>                    
                        <th scope="row"><?= $servico['ID']?></th>
                        <td><?= $servico['TITULO']?></td>
                        <td><?= $servico['RESUMO']?></td>
                        <td><?= $servico['IMAGEM']?></td>
                        <td><a href="<?php echo site_url('admin/deleteCCard').'/'.$servico['ID'];?>" ><i class="fas fa-trash-alt"></i></a><a href="<?php echo site_url('admin/editar').'/'.$servico['ID'];?>"><i class="ml-3 far fa-edit"></i></td></a>
                    </tr> 
                <?php }?>  
                </tbody>
            </table>
        </div>
    </div>
</main>