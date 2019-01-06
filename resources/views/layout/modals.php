<!-- Modal delete -->
<div id="modal-delete" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Удаление записи</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <h5 class="alert alert-danger text-center">
                    Данное действие не обратимо!<br/>Вы подтверждаете данное действие?
                </h5>
                <form id="form-delete" action="" method="POST">
                    <input type="hidden" name="itemId" value="">
                    <div class="col-md-12">
                        <div class="float-left">
                            <input class="btn btn-danger pull-left" type="submit" value="Удалить">
                        </div>
                        <input class="btn btn-default pull-right" type="button"  data-dismiss="modal" value="Отмена">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>