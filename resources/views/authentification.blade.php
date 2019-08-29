@extends('layouts.index')

@section('content')
 <div class="modal fade" id="mymodzl" tabindex="-1" role="dialog" aria-labelledby="myModallabel" ariahidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="close">
                     <span aria-hidden="true">x</span>
                 </button>
                      <h4 class="modal-title" id="myModallabel">Authentification</h4>
             </div>
             <div class="modal-body">
                 <form id="formauthentification" class="form-horizontal" role="form" method="post" action="{{url('/authentification')}}">
                      {!! csrf_field() !!}


                       <div class="form-group">
                              <label class="col-md-4 control-label">Nom</label>
                         <div class="col-md-6">
                              <input type="texe" class="form-control" name="nom">
                              <small class="help-block"></small>
                         </div>
                       </div>

                       <div class="form-group">
                             <label class="col-md-4 control-label">Adress Email</label>
                         <div class="col-md-6">
                             <input type="email" class="form-control" name="email">
                             <small class="help-block"></small>
                         </div>
                       </div>

                        <div class="form-group">
                               <label class="col-md-4 control-label">Mot de passe</label>
                          <div class="col-md-6">
                               <input type="mot_de_passe" class="form-control" name="mod_de_passe">
                               <small class="help-block"></small>
                           </div>
                        </div>

                        <div class="form-group">
                              <label class="col-md-4 control-label">Comfirmer le mot de passe</label>
                           <div class="col-md-6">
                                <input type="mot_de_passe" class="form-control" name="comfir_mot_de_passe">
                            </div>
                         </div>

                     <div class="form-group">
                         <div class="col-md-6 col-md-offset">
                             <button type="submit"class="btn btn-primary">
                                 Je valide
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

@endsection