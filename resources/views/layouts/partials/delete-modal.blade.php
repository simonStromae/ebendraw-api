<div class="modal fade" id="modal-{{ $id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Suppression</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h3><i class="fa fa-exclamation-triangle text-red-500"></i> Attention !</h3>
                <p>{!! $sms ??  "Souhaitez-vous véritablement Supprimer ?" !!}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                <form action="{{ $route }}" method="post">
                    @method('delete')

                    @csrf
                    <button type="submit" class="btn bg-red-500 text-white">Supprimer</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
