<?php include "./src/components/cabecalho.php" ?>
<div class="card mx-auto my-4" style="width: fit-content; display: flex;">
    <div class="card-header">
        Lista de disciplinas
    </div>
    <div class="card-body input-group">
        <button type="button" class="btn btn-success mx-2">Nova disciplina</button>

        <input type="text" class="form-control" placeholder="Pesquisar Conteúdo" aria-label="Pesquisar conteúdo">
        <span class="input-group-text">@</span>

        <button type="button" class="btn btn-primary mx-2">Pesquisar</button>
    </div>
</div>

<table class="table table-striped mx-auto" style="width: 50rem;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sigla</th>
      <th scope="col">Apelido</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
        for($i = 0; $i < 10; $i++) {
            ?>
                <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td>Matéria <?php echo $i ?> </td>
                    <td>@</td>
                    <td>MT <?php echo $i ?></td>
                    <td>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                    </td>
                </tr>
            <?php
        }
    ?>
  </tbody>
</table>
<?php include "./src/components/rodape.php" ?>