<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
        <form method="POST" action="<?php echo site_url('admin/editCCard')?>" class="border border-light p-5 white">

            <p class="h4 mb-4 text-center">Editar Serviços</p>

            <input type="hidden" value="<?= $id ?>" id="textInput" name="ID" class="form-control mb-4" placeholder="Título">

            <label for="textInput">Título</label>
            <input type="text" id="textInput" name="TITULO" class="form-control mb-4" placeholder="Título">

            <label for="textInput">Descrição</label>
            <input type="text" id="textInput" name="RESUMO" class="form-control mb-4" placeholder="Descrição">

            <label for="textInput">Imagem</label>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="IMAGEM" class="custom-file-input" id="fileInput" aria-describedby="fileInput">
                    <label class="custom-file-label" for="fileInput">Nome do arquivo</label>
                </div>
            </div>

            <button class="btn btn-info btn-block my-5 col-md-3" type="submit">Enviar</button>
        </form>
    </div>
</main>