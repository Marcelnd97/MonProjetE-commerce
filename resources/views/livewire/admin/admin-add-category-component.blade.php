<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ajoute une Catégorie
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">les Catégories</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="storeCategory">    
                            @if (Session::has('message'))
                            
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}    
                                </div>   
                            
                            @endif
                            
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nom Catégorie</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="name" id="" placeholder="Nom de  categorie" wire:keyup="generateslug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nom Catégorie</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="slug" id="" placeholder="Catégory de slug/limace">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Nom Catégorie</label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
