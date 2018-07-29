<?php 
    $acao = $this->view->acao;
    $dados = $this->view->contagem;
    $dadosList = $this->view->contagemList;
?>
<?php if($acao == 'edit') { ?>

    <session class="content">
        <div class="row">
            <form action="/contagem/store" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <?php if(isset($dados->id) && !empty($dados->id)) { ?>
                    <input type="hidden" name="id" value="<?php echo $dados->id; ?>"/>
                <?php } ?>
                <div class="col-sm-10">
                    <div class="form-group <?php echo ($this->errors['title']) ? 'has-error' : '' ?>">
                        <label>Nome da Estatística</label>
                        <input type="text" name="title" class="form-control"
                               value="<?php echo (isset($this->inputs['title'])) ? $this->inputs['title'] : $dados->title; ?>">
                        <?php if ($this->errors['title']): ?>
                            <span class="help-block"><?php echo $this->errors['title'] ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-sm-10">
                    <div class="form-group <?php echo ($this->errors['quantidade']) ? 'has-error' : '' ?>">
                        <label>Quantidade (Ex. Formatos: 456, +500, 500)</label>
                        <input type="text" name="quantidade" class="form-control"
                               value="<?php echo (isset($this->inputs['quantidade'])) ? $this->inputs['quantidade'] : $dados->quantidade; ?>">
                        <?php if ($this->errors['quantidade']): ?>
                            <span class="help-block"><?php echo $this->errors['quantidade'] ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-xs-12">
                    <a href="/painel" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </session>
<?php } ?>

<section class="content">
    <div class="row">
        <div class="box">
            <div class="box-body">
                <table id="table1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dadosList as $itemList) {?>
                            <tr>
                                <td><?php echo $itemList->title; ?></td>
                                <td><?php echo $itemList->quantidade; ?></td>
                                <td>
                                    <span class="pull-left">
                                        <a href="/contagem/<?php echo $itemList->id ?>/edit" class="btn btn-warning btn-xs">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                        <a disabled="true" class="btn btn-danger btn-xs" ><i class="glyphicon glyphicon-trash"></i></a>
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<script>
    $(function () {
        $('#table1').DataTable(
            {
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : true
            }
        )
    })
</script>
<script>
    CKEDITOR.replace( 'content' );
</script>
