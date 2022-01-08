<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md 12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ajout Nouveau Produits
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Tous Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent='addProduct'>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom Produit</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nom du produit" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Produit Slug(limace)</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Produit Slug" class="form-control input-md" wire:model="slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Petite Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Petite Description" wire:model="short_description"></textarea>                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Description" wire:model="description"></textarea>                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prix Régulier</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Prix Régulier" class="form-control input-md" wire:model="regular_price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prix de Vente</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Prix de Vente" class="form-control input-md" wire:model="sale_price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">En Stock</option>
                                        <option value="outofstock">pas disponible</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">En vedette</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">Non</option>
                                        <option value="1">Oui</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantité</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Quantité" class="form-control input-md" wire:model="quantity">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Image Produit</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image"/>
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Catégorie</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                        <option value="">Selection une Catégorie</option>
                                        @foreach ($categories as $category)
                                        
                                            <option value="{{$category->id}}">{{$category->name}}</option>
 
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Image Produit</label>
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
