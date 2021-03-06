
<!-- Modal -->
 <form class="form" method="post" action="{{ route('traitement.invoice') }}" enctype="multipart/form-data" role="form">
    @csrf
    <div class="modal center-modal fade" id="modal-invoice" tabindex="-1">
         <!--gestion des erreurs-->
         @if ($errors->any())
         <div class="alert alert-danger alert-dismissible">
             <ul>
              @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
              @endforeach
             </ul>
         </div>
         @endif
          <!--End gestion -->

        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="controls">
                        <input type="hidden" name="user_id" multiple class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Selectionne le document<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="file" name="scanned" multiple class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary ">Save changes</button>
            </div>
          </div>
        </div>
      </div>
 </form>

