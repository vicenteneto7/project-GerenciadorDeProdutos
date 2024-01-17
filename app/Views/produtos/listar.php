<div class="modal fade" id="modal-novo-produto">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="/produtos/cadastrar" method="post">
        <div class="modal-header">
          <h4 class="modal-title">Novo Produto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="">Nome</label>
                <input type="text" class="form-control" name="Nome">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="">Qtde</label>
                <input type="text" class="form-control" name="Qtde">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="">Valor</label>
                <input type="text" class="form-control" name="Valor">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produtos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-novo-produto">
                <i class="fas fa-plus-circle"></i> Novo Produto
              </button>
            </div>
          </div>
        </div>
      </div>
      <?php if(isset($_GET['alert']) && $_GET['alert'] == "sucessCreate"): ?>
      <?php endif; ?>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>CÓD.</th>
                    <th>NOME</th>
                    <th>QTDE</th>
                    <th>VALOR</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($produtos as $prod) : ?>
                    <tr>
                      <td><?= $prod['ProdutoId'] ?></td>
                      <td><?= $prod['Nome'] ?></td>
                      <td><?= $prod['Qtde'] ?></td>
                      <td>R$ <?= $prod['Valor'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->